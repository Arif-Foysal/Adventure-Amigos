<?php
// Database connection
include_once "partials/__session.php";
include_once "partials/__session.php";
include_once "partials/__dbconnect.php";



$city_id = isset($_GET['city_id']) ? intval($_GET['city_id']) : 0; // City ID from the GET request
$page = isset($_GET['page']) ? intval($_GET['page']) : 1; // Current page from GET request
$limit = 5; // Number of posts per page
$offset = ($page - 1) * $limit; // Calculate the offset

// Simple SQL query to fetch posts with pagination for the given city
$query = "
    SELECT * FROM ForumView 
    WHERE city_id = $city_id 
    ORDER BY post_created_at DESC 
    LIMIT $limit OFFSET $offset
";
$result = mysqli_query($conn, $query);

$posts = [];
while ($row = mysqli_fetch_assoc($result)) {
    $posts[] = $row;
}

// Return the posts as JSON
header('Content-Type: application/json');
echo json_encode($posts);

mysqli_close($conn);


?>