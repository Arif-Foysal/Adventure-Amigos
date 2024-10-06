<?php
    // include_once "partials/__nav.php";
    include_once "partials/__session.php";
    include_once "partials/__session.php";
    include_once "partials/__dbconnect.php";

// Check if the user is logged in and if the request method is POST
if (!isset($_SESSION['id']) || $_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'error' => 'Unauthorized request']);
    exit;
}

// Get the user_id from session
$user_id = $_SESSION['id'];

// Get the post data from the JSON body
$data = json_decode(file_get_contents("php://input"), true);

if (isset($data['post']) && isset($data['city_id'])) {
    $post_content = trim($data['post']);
    $city_id = (int)$data['city_id'];

    if (!empty($post_content)) {
        // Assuming you have a database connection in db.php


        // Sanitize the input
        $post_content = mysqli_real_escape_string($conn, $post_content);

        // Insert the new post into the database
        $query = "INSERT INTO Posts (user_id, city_id, content, created_at) VALUES ('$user_id', '$city_id', '$post_content', NOW())";
        if (mysqli_query($conn, $query)) {
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false, 'error' => 'Database error: ' . mysqli_error($conn)]);
        }

        mysqli_close($conn);
    } else {
        echo json_encode(['success' => false, 'error' => 'Post content cannot be empty']);
    }
} else {
    echo json_encode(['success' => false, 'error' => 'Invalid input']);
}
?>
