<?php
header('Content-Type: application/json; charset=utf-8');

$data = json_decode(file_get_contents('php://input'), true);

if ($data) {
    $file = 'saved_content.json';
    
    // Check if the file exists and is writable
    if (!is_writable($file)) {
        error_log("File is not writable: $file");
        echo json_encode(['success' => false, 'error' => 'File is not writable']);
        exit;
    }

    $current_data = file_get_contents($file);
    $array_data = json_decode($current_data, true);

    // Check if the existing data is valid JSON
    if (json_last_error() !== JSON_ERROR_NONE) {
        error_log("Invalid JSON in file: $file");
        echo json_encode(['success' => false, 'error' => 'Invalid JSON in file']);
        exit;
    }

    $array_data[] = $data;
    $final_data = json_encode($array_data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

    if (file_put_contents($file, $final_data)) {
        echo json_encode(['success' => true]);
    } else {
        error_log("Failed to write to file: $file");
        echo json_encode(['success' => false, 'error' => 'Failed to write to file']);
    }
} else {
    error_log("No data received");
    echo json_encode(['success' => false, 'error' => 'No data received']);
}
?>
