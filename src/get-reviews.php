<?php
// Database connection details
include_once 'partials/__dbconnect.php';  // Adjust path as necessary
include_once 'partials/__session.php';


// Get hotel ID from GET method
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

// Get pagination parameters from the request (default to page 1, limit 10)
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$limit = isset($_GET['limit']) ? (int)$_GET['limit'] : 10;
$offset = ($page - 1) * $limit;

// Simple SQL query to fetch paginated hotel reviews for a specific hotel
// $sql = "SELECT 
//             R.review_id, 
//             R.user_id,
//             R.entity_type, 
//             R.entity_id, 
//             R.rating, 
//             R.review_text, 
//             R.review_date, 
//             U.fname AS reviewer_first_name, 
//             U.CreatedAt AS reviewer_join_date, -- Added missing comma here
//             U.profile_photo_url AS reviewer_dp_url
//         FROM Reviews R
//         JOIN Users U ON R.user_id = U.user_id
//         WHERE R.entity_type = 'hotel' AND R.entity_id = $id
//         LIMIT $offset, $limit";

$sql= "SELECT 
    R.review_id, 
    R.user_id,
    R.entity_type, 
    R.entity_id, 
    R.rating, 
    R.review_text, 
    R.review_date, 
    U.fname AS reviewer_first_name, 
    U.CreatedAt AS reviewer_join_date, 
    U.profile_photo_url AS reviewer_dp_url,
    -- Calculating percentage for each rating level
    (SELECT COUNT(*) FROM Reviews WHERE entity_id = $id AND entity_type = 'hotel' AND rating = 5) / (SELECT COUNT(*) FROM Reviews WHERE entity_id = $id AND entity_type = 'hotel') * 100 AS percentage_5_star,
    (SELECT COUNT(*) FROM Reviews WHERE entity_id = $id AND entity_type = 'hotel' AND rating = 4) / (SELECT COUNT(*) FROM Reviews WHERE entity_id = $id AND entity_type = 'hotel') * 100 AS percentage_4_star,
    (SELECT COUNT(*) FROM Reviews WHERE entity_id = $id AND entity_type = 'hotel' AND rating = 3) / (SELECT COUNT(*) FROM Reviews WHERE entity_id = $id AND entity_type = 'hotel') * 100 AS percentage_3_star,
    (SELECT COUNT(*) FROM Reviews WHERE entity_id = $id AND entity_type = 'hotel' AND rating = 2) / (SELECT COUNT(*) FROM Reviews WHERE entity_id = $id AND entity_type = 'hotel') * 100 AS percentage_2_star,
    (SELECT COUNT(*) FROM Reviews WHERE entity_id = $id AND entity_type = 'hotel' AND rating = 1) / (SELECT COUNT(*) FROM Reviews WHERE entity_id = $id AND entity_type = 'hotel') * 100 AS percentage_1_star
FROM Reviews R
JOIN Users U ON R.user_id = U.user_id
WHERE R.entity_type = 'hotel' AND R.entity_id = $id
LIMIT $offset, $limit;
";

// $sql = "
//     SELECT 
//         R.review_id, 
//         R.user_id,
//         R.entity_type, 
//         R.entity_id, 
//         R.rating, 
//         R.review_text, 
//         R.review_date, 
//         U.fname AS reviewer_first_name, 
//         U.CreatedAt AS reviewer_join_date, 
//         U.profile_photo_url AS reviewer_dp_url,
        
//         -- Calculating percentage for each rating level
//         (SELECT COUNT(*) FROM Reviews WHERE entity_id = $id AND entity_type = 'hotel' AND rating = 5) / 
//         (SELECT COUNT(*) FROM Reviews WHERE entity_id = $id AND entity_type = 'hotel') * 100 AS percentage_5_star,
        
//         (SELECT COUNT(*) FROM Reviews WHERE entity_id = $id AND entity_type = 'hotel' AND rating = 4) / 
//         (SELECT COUNT(*) FROM Reviews WHERE entity_id = $id AND entity_type = 'hotel') * 100 AS percentage_4_star,
        
//         (SELECT COUNT(*) FROM Reviews WHERE entity_id = $id AND entity_type = 'hotel' AND rating = 3) / 
//         (SELECT COUNT(*) FROM Reviews WHERE entity_id = $id AND entity_type = 'hotel') * 100 AS percentage_3_star,
        
//         (SELECT COUNT(*) FROM Reviews WHERE entity_id = $id AND entity_type = 'hotel' AND rating = 2) / 
//         (SELECT COUNT(*) FROM Reviews WHERE entity_id = $id AND entity_type = 'hotel') * 100 AS percentage_2_star,
        
//         (SELECT COUNT(*) FROM Reviews WHERE entity_id = $id AND entity_type = 'hotel' AND rating = 1) / 
//         (SELECT COUNT(*) FROM Reviews WHERE entity_id = $id AND entity_type = 'hotel') * 100 AS percentage_1_star,
        
//         -- Total number of reviews for the hotel
//         (SELECT COUNT(*) FROM Reviews WHERE entity_id = $id AND entity_type = 'hotel') AS total_reviews

//     FROM Reviews R
//     JOIN Users U ON R.user_id = U.user_id
//     WHERE R.entity_type = 'hotel' AND R.entity_id = $id
//     LIMIT $offset, $limit;
// ";



$result = mysqli_query($conn, $sql);

// Fetch all reviews into an array
$reviews = [];
while ($row = mysqli_fetch_assoc($result)) {
    $reviews[] = $row;
}

// Query to count total hotel reviews for pagination for the specific hotel
$count_sql = "SELECT COUNT(*) AS total_reviews 
              FROM Reviews 
              WHERE entity_type = 'hotel' AND entity_id = $id";
$count_result = mysqli_query($conn, $count_sql);
$total_reviews = mysqli_fetch_assoc($count_result)['total_reviews'];

// Calculate total pages
$total_pages = ceil($total_reviews / $limit);

// Return the reviews and pagination info as JSON
header('Content-Type: application/json');
echo json_encode([
    'hotel_id' => $id,
    'current_page' => $page,
    'total_pages' => $total_pages,
    'reviews' => $reviews,
    'total_reviews' => $total_reviews
]);

// Close the connection
mysqli_close($conn);
?>