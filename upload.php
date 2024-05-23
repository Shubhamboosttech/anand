<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $allowedTypes = ['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'];
    $file = $_FILES['file'];

    if (in_array($file['type'], $allowedTypes)) {
        $uploadDir = 'assets/upload/';
        if (!file_exists($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        $filePath = $uploadDir . basename($file['name']);

        if (move_uploaded_file($file['tmp_name'], $filePath)) {
            echo 'File uploaded successfully.';
        } else {
            echo 'File upload failed.';
        }
    } else {
        echo 'Invalid file type. Only DOC, DOCX, and PDF files are allowed.';
    }
} else {
    echo 'Invalid request method.';
}
?>
