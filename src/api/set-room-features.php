<?php
//double check the link
// ?guests=2&bedrooms=1&beds=2&lock_availability=Yes&hotel_id=123
header('Content-Type: application/json');
include_once '../partials/__dbconnect.php';
include_once '../partials/__session.php';
// Check if the request method is POST

// Check if request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Check if the hotel_id exists in the session
    if (isset($_SESSION['list_hotel_id'])) {
        $hotel_id = $_SESSION['list_hotel_id'];
        
        // Get the JSON input from the request body
        $input = file_get_contents('php://input');
        $data = json_decode($input, true); // Decode the input JSON to PHP array

        // Check if valid JSON data is received
        if ($data) {
            // Convert the array back to JSON string to store in the `features` column
            $features = json_encode($data);
            
            // Prepare and execute the SQL update query
            $sql = "UPDATE Hotels SET features = ? WHERE hotel_id = ?";
            $stmt = $conn->prepare($sql);
            
            if ($stmt) {
                // Bind parameters to the query (use `s` for string and `i` for integer)
                $stmt->bind_param('si', $features, $hotel_id);
                
                // Execute the query
                if ($stmt->execute()) {
                    // Return success response
                    echo json_encode(["status" => "success", "message" => "Features updated successfully."]);
                } else {
                    // Return error if the execution fails
                    echo json_encode(["status" => "error", "message" => "Failed to update features: " . $stmt->error]);
                }
                $stmt->close(); // Close the statement
            } else {
                // Return error if the query preparation fails
                echo json_encode(["status" => "error", "message" => "Failed to prepare SQL statement: " . $conn->error]);
            }
        } else {
            // Return error if no valid JSON data is received
            echo json_encode(["status" => "error", "message" => "Invalid or no JSON data received."]);
        }
    } else {
        // Return error if no hotel_id is found in the session
        echo json_encode(["status" => "error", "message" => "No hotel_id found in the session."]);
    }
} else {
    // Return error if not a POST request
    echo json_encode(["status" => "error", "message" => "Only POST requests are allowed."]);
}

// Close the connection
$conn->close();
?>