<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['file_excel']) && $_FILES['file_excel']['error'] === UPLOAD_ERR_OK) {
        $fileTmpPath = $_FILES['file_excel']['tmp_name'];
        $fileName = $_FILES['file_excel']['name'];
        $fileSize = $_FILES['file_excel']['size'];
        $fileType = $_FILES['file_excel']['type'];
        $fileNameCmps = explode(".", $fileName);
        $fileExtension = strtolower(end($fileNameCmps));

        // Check if the file is an Excel file
        $allowedfileExtensions = array('xls', 'xlsx');
        if (in_array($fileExtension, $allowedfileExtensions)) {
            // Process the file (e.g., read the Excel file and extract questions)
            try {
                $questions = processExcelFile($fileTmpPath);
                echo json_encode(['status' => 'success', 'questions' => $questions]);
            } catch (Exception $e) {
                echo json_encode(['status' => 'error', 'message' => 'Error processing file: ' . $e->getMessage()]);
            }
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Invalid file extension. Allowed extensions are xls, xlsx']);
        }
    } else {
        echo json_encode(['status' => 'error', 'message' => 'File upload error: ' . $_FILES['file_excel']['error']]);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method']);
}

function processExcelFile($filePath) {
    // Implement your logic to read the Excel file and extract questions
    // This is just a placeholder function
    // You can use libraries like PhpSpreadsheet to read Excel files
    require 'vendor/autoload.php';

    

    $sheet = $spreadsheet->getActiveSheet();
    $questions = [];

    foreach ($sheet->getRowIterator() as $row) {
        $cellIterator = $row->getCellIterator();
        $cellIterator->setIterateOnlyExistingCells(false);

        $question = [];
        foreach ($cellIterator as $cell) {
            $question[] = $cell->getValue();
        }

        if (!empty($question)) {
            $questions[] = [
                'text' => $question[0],
                'image' => $question[6] ?? '', // Assuming the image URL is in the 7th column
                'options' => [
                    ['text' => $question[1], 'correct' => $question[5] == 1, 'image' => $question[7] ?? ''],
                    ['text' => $question[2], 'correct' => $question[5] == 2, 'image' => $question[8] ?? ''],
                    ['text' => $question[3], 'correct' => $question[5] == 3, 'image' => $question[9] ?? ''],
                    ['text' => $question[4], 'correct' => $question[5] == 4, 'image' => $question[10] ?? ''],
                ]
            ];
        }
    }

    return $questions;
}
?>
