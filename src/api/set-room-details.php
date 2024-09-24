<?php
//double check the link
// ?guests=2&bedrooms=1&beds=2&lock_availability=Yes&hotel_id=123
header('Content-Type: application/json');
include_once '../partials/__dbconnect.php';
include_once '../partials/__session.php';


// Handling GET request
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    // Retrieve form data from the GET request
    $guests = isset($_GET['guests']) ? intval($_GET['guests']) : 1;
    $bedrooms = isset($_GET['bedrooms']) ? intval($_GET['bedrooms']) : 1;
    $beds = isset($_GET['beds']) ? intval($_GET['beds']) : 1;
    $lockAvailability = isset($_GET['lock_availability']) ? $_GET['lock_availability'] : 'No';
    $hotel_id = $_SESSION['list_hotel_id'];  // This would typically come from your application logic or URL
    
    // Create the JSON object for room details
    $roomDetails = json_encode([
        'guests' => $guests,
        'bedrooms' => $bedrooms,
        'beds' => $beds,
        'lock_availability' => $lockAvailability
    ]);

    // Assume you are inserting or updating for a specific hotel_id

    // Update the Hotels table with the JSON room details
    $sql = "UPDATE Hotels SET room_details = ? WHERE hotel_id = ?";


    $response = array("message" => "", "status" => "", "hotel_id" => "");

    // Prepare and execute the SQL statement
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param('si', $roomDetails, $hotel_id);  // Bind the JSON and hotel_id
        if ($stmt->execute()) {
            $response['message'] = "New record created";
            $response['status'] = "success";
            $response['hotel_id'] = $hotel_id;
        } else {
            $response['message'] = $conn->error;
            $response['status'] = "error";
        }
        $stmt->close();
    } else {
     $response['status'] = "failed";
    $response['message'] = "No record found with the given hotel ID";
    }
}


echo json_encode($response);

// Close the database connection
$conn->close();
?>

