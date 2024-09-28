<?php

header('Content-Type: application/json');
include_once '../partials/__dbconnect.php';  // Adjust path as necessary
include_once '../partials/__session.php';

// Check if request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Check if hotel_id exists in the session (or pass hotel_id in request if needed)
    if (isset($_SESSION['list_hotel_id'])) {
        $hotel_id = $_SESSION['list_hotel_id'];

        // Get the incoming JSON data
        $input = file_get_contents('php://input');
        $data = json_decode($input, true);  // Decode JSON into PHP associative array

        // Check if both 'from' and 'to' dates are received
        if (isset($data['from']) && isset($data['to'])) {
            $from_date = $data['from'];
            $to_date = $data['to'];

            // Sanitize input
            $from_date = $conn->real_escape_string($from_date);
            $to_date = $conn->real_escape_string($to_date);

            // SQL query to update the dates for the hotel
            $sql = "UPDATE Hotels SET `from` = '$from_date', `to` = '$to_date' WHERE hotel_id = $hotel_id";
            
            // Execute the query
            if ($conn->query($sql) === TRUE) {
                // Return success response
                echo json_encode(["success" => true, "message" => "Hotel availability dates updated successfully."]);
            } else {
                // Return error if query fails
                echo json_encode(["success" => false, "message" => "Failed to update hotel: " . $conn->error]);
            }
        } else {
            // Return error if 'from' or 'to' date is missing
            echo json_encode(["success" => false, "message" => "Both 'from' and 'to' dates are required."]);
        }
    } else {
        // Return error if hotel_id is not set in the session
        echo json_encode(["success" => false, "message" => "No hotel_id found in the session."]);
    }
} else {
    // Return error if not a POST request
    echo json_encode(["success" => false, "message" => "Only POST requests are allowed."]);
}

// Close the database connection
$conn->close();

?>
