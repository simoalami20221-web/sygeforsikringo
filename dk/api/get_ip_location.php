<?php
session_start();
require_once '../config.php';

// Vérifier que l'admin est connecté
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Content-Type: application/json');
    echo json_encode(['success' => false, 'error' => 'Not authenticated']);
    exit;
}

$ip = $_GET['ip'] ?? '';

if (empty($ip)) {
    header('Content-Type: application/json');
    echo json_encode(['success' => false, 'error' => 'IP address required']);
    exit;
}

function getLocationInfo($ip) {
    // Liste d'APIs à essayer
    $apis = [
        [
            'url' => "http://ip-api.com/json/{$ip}?fields=country,regionName,city,isp,org,as,countryCode,status",
            'type' => 'ip-api'
        ],
        [
            'url' => "https://ipapi.co/{$ip}/json/",
            'type' => 'ipapi'
        ]
    ];
    
    foreach ($apis as $api) {
        try {
            $context = stream_context_create([
                'http' => [
                    'timeout' => 5,
                    'user_agent' => 'Mozilla/5.0 (compatible; LocationBot/1.0)'
                ]
            ]);
            
            $response = file_get_contents($api['url'], false, $context);
            
            if ($response === false) {
                continue;
            }
            
            $data = json_decode($response, true);
            
            if (!$data) {
                continue;
            }
            
            // Traitement selon le type d'API
            if ($api['type'] === 'ip-api' && isset($data['status']) && $data['status'] === 'success') {
                return [
                    'success' => true,
                    'city' => $data['city'] ?? 'Unknown',
                    'region' => $data['regionName'] ?? 'Unknown',
                    'country' => $data['country'] ?? 'Unknown',
                    'country_code' => $data['countryCode'] ?? '',
                    'isp' => $data['isp'] ?? $data['org'] ?? 'Unknown ISP',
                    'asn' => $data['as'] ?? 'Unknown ASN'
                ];
            } elseif ($api['type'] === 'ipapi' && isset($data['city']) && !isset($data['error'])) {
                return [
                    'success' => true,
                    'city' => $data['city'] ?? 'Unknown',
                    'region' => $data['region'] ?? 'Unknown',
                    'country' => $data['country_name'] ?? 'Unknown',
                    'country_code' => $data['country_code'] ?? '',
                    'isp' => $data['org'] ?? 'Unknown ISP',
                    'asn' => $data['asn'] ?? 'Unknown ASN'
                ];
            }
            
        } catch (Exception $e) {
            continue;
        }
    }
    
    return ['success' => false, 'error' => 'All APIs failed'];
}

$result = getLocationInfo($ip);

header('Content-Type: application/json');
echo json_encode($result);
?>
