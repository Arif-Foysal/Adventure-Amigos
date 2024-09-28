<?php

header('Content-Type: application/json');
include_once 'partials/__dbconnect.php';
include_once 'partials/__session.php';

require '../vendor/autoload.php';

// Dynamically increase PHP limits using ini_set
ini_set('memory_limit', '512M');           // Increase memory limit
ini_set('max_execution_time', '300');      // Set maximum execution time to 5 minutes
ini_set('post_max_size', '64M');           // Increase post data size limit
ini_set('upload_max_filesize', '64M');     // Increase max upload file size
ini_set('max_file_uploads', '10');         // Allow up to 10 files to be uploaded at once

$uploadDir = '../uploads/';

if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0777, true);
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

                if (move_uploaded_file($fileTmpName, $targetFile)) {
                    // Image uploaded successfully
                    $response[] = [
                        'status' => 'success',
                        'message' => 'Image uploaded. Adding in db...',
                        'url' => $targetFile
                    ];

                    // Prepare the database insertion
                    $photo_url = $targetFile; // Update with the actual photo URL
                    $user_id = $_SESSION['id']; // Set the ID of the user who uploaded the photo
                    $entity_type = 'nid'; // Use 'nid' for entity type
                    $entity_id = $user_id; // Set the entity_id to the user_id
                     
                    // Create SQL query
                    $sql = "INSERT INTO Photos (user_id, entity_type, entity_id, photo_url) 
                            VALUES ($user_id, '$entity_type', $entity_id, '$photo_url')";

                    // Execute the query
                    if ($conn->query($sql) === TRUE) {
                        $response['message'] = "Image uploaded and added to db successfully!";
                    } else {
                        $response[] = [
                            'status' => 'error',
                            'message' => "Database error: " . $conn->error
                        ];
                    }

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

echo json_encode($response);
?>
