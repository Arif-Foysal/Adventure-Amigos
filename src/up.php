<?php
require '../vendor/autoload.php'; // Ensure this line is present
ini_set('memory_limit', '256M'); // or '512M', '1G', etc., depending on your needs

use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

function imageScaler($inputFile, $outputFile, $scaleFactor){


// create image manager with desired driver
$manager = new ImageManager(new Driver());

// read image from file system

$image = $manager->read($inputFile);

// resize image proportionally to 300px width
$image->scale(width: $scaleFactor);

// insert watermark
// $image->place('images/watermark.png');

// save modified image in new format 
$image->toPng()->save($outputFile);

}


// Directory to store uploaded images
$uploadDir = '../uploads/temp/';

$resizedDir = '../uploads/';

// Create the directory if it doesn't exist
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['image'])) {
    $file = $_FILES['image'];

    // Check if the file is an image
    $imageFileType = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
    $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];

    if (in_array($imageFileType, $allowedTypes)) {
        // Generate a unique file name to avoid overwriting
        $uniqueName = uniqid();
        $targetFile = $uploadDir . $uniqueName . '.' . $imageFileType;

        $resizedFile = $resizedDir . $uniqueName . '.' . $imageFileType;

        // Move the uploaded file to the target directory
        if (move_uploaded_file($file['tmp_name'], $targetFile)) {
            imageScaler($targetFile, $resizedFile, 500);
            
            echo "Image uploaded successfully! <a href='$resizedFile'>View Image</a>";

            //do the database job here

        

        } else {
            echo "Error uploading the image.";
        }
    } else {
        echo "Invalid file type. Only JPG, JPEG, PNG, and GIF files are allowed.";
    }
} else {
    echo "No file uploaded.";
}


?>