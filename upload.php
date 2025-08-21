<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['image'])) {
    // Ensure the directory has the correct path and slashes
    $targetDir = "public/assets/images/upload/";
    $targetFile = $targetDir . basename($_FILES['image']['name']);
    $uploadOk = 1;
    $maxSize = 5 * 1024 * 1024; // 5 MB in bytes

    // Check if file is an image
    $check = getimagesize($_FILES['image']['tmp_name']);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        echo json_encode(['success' => false, 'error' => 'File is not an image.']);
        exit;
    }

    // Check file size
    if ($_FILES['image']['size'] > $maxSize) {
        echo json_encode(['success' => false, 'error' => 'File size exceeds 5 MB.']);
        exit;
    }

    // Allow certain file formats
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo json_encode(['success' => false, 'error' => 'Only JPG, JPEG, PNG & GIF files are allowed.']);
        exit;
    }

    // Check if directory exists, if not, create it
    if (!file_exists($targetDir)) {
        mkdir($targetDir, 0777, true);  // Create the directory with write permissions
    }

    // Try to upload the file
    if ($uploadOk == 1) {
        if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)) {
            echo json_encode(['success' => true, 'filepath' => $targetFile]);
        } else {
            echo json_encode(['success' => false, 'error' => 'There was an error uploading your file.']);
        }
    }
}
?>
