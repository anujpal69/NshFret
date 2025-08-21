<?php
$directory = 'public/assets/images/upload/';
$files = glob($directory . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);

// Sort files by modification time, newest first
usort($files, function($a, $b) {
    return filemtime($b) - filemtime($a);
});

// Remove all images except for the two latest
if (count($files) > 2) {
    $filesToDelete = array_slice($files, 2); // Get all files except the first two
    foreach ($filesToDelete as $file) {
        if (is_file($file)) {
            unlink($file); // Delete the file
        }
    }
}

// Return the path of the latest image
if (!empty($files)) {
    echo json_encode(['success' => true, 'latestImage' => $files[0]]);
} else {
    echo json_encode(['success' => false, 'error' => 'No images found.']);
}
?>