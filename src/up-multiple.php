<?php
require '../vendor/autoload.php';

use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

// Dynamically increase PHP limits using ini_set
ini_set('memory_limit', '512M');           // Increase memory limit
ini_set('max_execution_time', '300');      // Set maximum execution time to 5 minutes
ini_set('post_max_size', '64M');           // Increase post data size limit
ini_set('upload_max_filesize', '64M');     // Increase max upload file size
ini_set('max_file_uploads', '10');         // Allow up to 10 files to be uploaded at once


function imageScaler($inputFile, $outputFile, $scaleFactor) {
    $manager = new ImageManager(new Driver());
    $image = $manager->read($inputFile);
    $image->scale(width: $scaleFactor);
    $image->toPng()->save($outputFile);
}

$uploadDir = '../uploads/temp/';
$resizedDir = '../uploads/';

if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}

if (!is_dir($resizedDir)) {
    mkdir($resizedDir, 0777, true);
}

$response = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['images'])) {
    $files = $_FILES['images'];
    $fileCount = count($files['name']);

    for ($i = 0; $i < $fileCount; $i++) {
        $fileName = $files['name'][$i];
        $fileTmpName = $files['tmp_name'][$i];
        $fileError = $files['error'][$i];

        if ($fileError === UPLOAD_ERR_OK) {
            $imageFileType = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
            $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];

            if (in_array($imageFileType, $allowedTypes)) {
                $uniqueName = uniqid();
                $targetFile = $uploadDir . $uniqueName . '.' . $imageFileType;
                $resizedFile = $resizedDir . $uniqueName . '.' . $imageFileType;

                if (move_uploaded_file($fileTmpName, $targetFile)) {
                    imageScaler($targetFile, $resizedFile, 500);
                    
                    $response[] = [
                        'status' => 'success',
                        'message' => "Image uploaded successfully!",
                        'url' => $resizedFile
                    ];

                    // Do the database job here for each successful upload
                    // ...

                } else {
                    $response[] = [
                        'status' => 'error',
                        'message' => "Error uploading the image: $fileName"
                    ];
                }
            } else {
                $response[] = [
                    'status' => 'error',
                    'message' => "Invalid file type for $fileName. Only JPG, JPEG, PNG, and GIF files are allowed."
                ];
            }
        } else {
            $response[] = [
                'status' => 'error',
                'message' => "Error uploading $fileName. Error code: $fileError"
            ];
        }
    }
} else {
    $response[] = [
        'status' => 'error',
        'message' => "No files uploaded."
    ];
}

header('Content-Type: application/json');
echo json_encode($response);
?>