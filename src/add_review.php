<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include necessary files
include_once 'partials/__dbconnect.php';  // Adjust path as necessary
include_once 'partials/__session.php';

// Set headers for JSON response
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With");

// Check if the user is logged in
if (!isset($_SESSION['id'])) {
    echo json_encode(array("message" => "User not logged in."));
    exit();
}

$user_id = $_SESSION['id'];

// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get posted data
    $data = json_decode(file_get_contents("php://input"));
    
    // Validate required fields
    if (
        !empty($data->entity_type) &&
        !empty($data->entity_id) &&
        !empty($data->rating) &&
        !empty($data->review_text)
    ) {
        // Validate entity_type
        $valid_entity_types = ['hotel', 'restaurant', 'attraction'];
        if (!in_array($data->entity_type, $valid_entity_types)) {
            echo json_encode(array("message" => "Invalid entity type."));
            exit();
        }

        // Validate rating
        if ($data->rating < 1 || $data->rating > 5) {
            echo json_encode(array("message" => "Rating must be between 1 and 5."));
            exit();
        }

        try {
            // Prepare the SQL statement
            $query = "INSERT INTO Reviews (user_id, entity_type, entity_id, rating, review_text) 
                      VALUES (?, ?, ?, ?, ?)";
            
            $stmt = $conn->prepare($query);
            
            if ($stmt === false) {
                throw new Exception("Failed to prepare statement: " . $conn->error);
            }
            
            // Bind parameters
            $stmt->bind_param("issis", $user_id, $data->entity_type, $data->entity_id, $data->rating, $data->review_text);
            
            // Execute the query
            if ($stmt->execute()) {
//                 $query = "UPDATE Hotels
//           SET rating = (
//               SELECT AVG(rating) FROM Reviews WHERE entity_id = $hotel_id AND entity_type = 'hotel'
//           )
//           WHERE hotel_id = $hotel_id";
// mysqli_query($conn, $query);


                echo json_encode(array("message" => "Review created successfully.", "review_id" => $conn->insert_id));
            } else {
                echo json_encode(array("message" => "Unable to create review: " . $stmt->error));
            }

            $stmt->close();
        } catch(Exception $exception) {
            echo json_encode(array("message" => "Error: " . $exception->getMessage()));
        }
    } else {
        echo json_encode(array("message" => "Unable to create review. Data is incomplete."));
    }
} else {
    echo json_encode(array("message" => "Invalid request method. Please use POST."));
}

// Close the database connection
$conn->close();
?>  