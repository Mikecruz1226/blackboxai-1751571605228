<?php
header('Content-Type: application/json');

// Get upload directory from config
$config = parse_ini_file("../../config.ini", true);
$upload_dir = $config['UPLOAD_DIR'] ?? './files/uploads/';

// Ensure upload directory exists and is writable
if (!is_dir($upload_dir)) {
    mkdir($upload_dir, 0755, true);
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(["error" => "Invalid request method"]);
    exit;
}

if (empty($_FILES['files'])) {
    http_response_code(400);
    echo json_encode(["error" => "No files uploaded"]);
    exit;
}

$savedFiles = [];
foreach ($_FILES['files']['tmp_name'] as $index => $tmpName) {
    $originalName = $_FILES['files']['name'][$index];
    $error = $_FILES['files']['error'][$index];
    
    if ($error === UPLOAD_ERR_OK) {
        $ext = strtolower(pathinfo($originalName, PATHINFO_EXTENSION));
        
        $allowed_types = ['pdf', 'txt', 'csv'];
        if (!in_array($ext, $allowed_types)) {
            http_response_code(400);
            echo json_encode(["error" => "Only PDF, TXT, and CSV files are allowed"]);
            exit;
        }
        
        // Handle file naming
        $ext = strtolower(pathinfo($originalName, PATHINFO_EXTENSION));
        $targetFile = $upload_dir;
        
        // For txt files, use specific names based on content
        if ($ext === 'txt') {
            if (strpos(strtolower($originalName), 'account') !== false) {
                $targetFile .= 'D250041-account.txt';
            } elseif (strpos(strtolower($originalName), 'census') !== false) {
                $targetFile .= 'D250041-census.txt';
            } elseif (strpos(strtolower($originalName), 'plan') !== false) {
                $targetFile .= 'D250041-plan.txt';
            } else {
                $targetFile .= time() . '_' . preg_replace('/[^a-zA-Z0-9_\.-]/', '_', $originalName);
            }
        } else {
            // For other files (PDF, etc.), use timestamped names
            $targetFile .= time() . '_' . preg_replace('/[^a-zA-Z0-9_\.-]/', '_', $originalName);
        }
        
        if (move_uploaded_file($tmpName, $targetFile)) {
            $savedFiles[] = basename($targetFile);
        } else {
            http_response_code(500);
            echo json_encode(["error" => "Failed to save file: " . $originalName]);
            exit;
        }
    } else {
        http_response_code(400);
        echo json_encode(["error" => "Error uploading file: " . $originalName]);
        exit;
    }
}

// Create response with saved files
echo json_encode([
    "success" => true,
    "files" => $savedFiles
]);
