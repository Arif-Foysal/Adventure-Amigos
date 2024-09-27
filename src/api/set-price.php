<?php
header('Content-Type: application/json');
include_once '../partials/__dbconnect.php';
include_once '../partials/__session.php';

// Check if request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Check if hotel_id exists in the session
    if (isset($_SESSION['list_hotel_id'])) {
        $hotel_id = $_SESSION['list_hotel_id'];

        // Get the incoming JSON data
        $input = file_get_contents('php://input');
        $data = json_decode($input, true); // Decode JSON into PHP associative array

        // Check if the price is provided
        if (isset($data['price'])) {
            $price = $data['price'];

            // Prepare the SQL UPDATE query to update the hotel price
            $sql = "UPDATE Hotels SET price = ? WHERE hotel_id = ?";
            $stmt = $conn->prepare($sql);

            if ($stmt) {
                // Bind parameters to the query (d for decimal/float, i for integer)
                $stmt->bind_param('di', $price, $hotel_id);

                // Execute the query
                if ($stmt->execute()) {
                    // Return success response
                    echo json_encode(["status" => "success", "message" => "Hotel price updated successfully."]);
                } else {
                    // Return error if execution fails
                    echo json_encode(["status" => "error", "message" => "Failed to update hotel price: " . $stmt->error]);
                }
                $stmt->close(); // Close the statement
            } else {
                // Return error if query preparation fails
                echo json_encode(["status" => "error", "message" => "Failed to prepare SQL statement: " . $conn->error]);
            }
        } else {
            // Return error if price is missing
            echo json_encode(["status" => "error", "message" => "Price is missing in the request."]);
        }
    } else {
        // Return error if hotel_id is not set in the session
        echo json_encode(["status" => "error", "message" => "No hotel_id found in the session."]);
    }
} else {
    // Return error if not a POST request
    echo json_encode(["status" => "error", "message" => "Only POST requests are allowed."]);
}

// Close the connection
$conn->close();
?>
