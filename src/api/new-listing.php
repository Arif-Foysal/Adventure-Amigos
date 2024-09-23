<?php
header('Content-Type: application/json');
include_once '../partials/__dbconnect.php';
include_once '../partials/__session.php';

$id = $_SESSION['id'];
$sql = "INSERT INTO `Hotels` (`host_id`) VALUES ($id);";

$response = array("message" => "", "status" => "", "hotel_id" => "");

if ($conn->query($sql) === TRUE) {
    // Get the ID of the newly inserted hotel
    $hotel_id = $conn->insert_id;
    
    // Prepare the response
    $response['message'] = "New record created";
    $response['status'] = "success";
    $response['hotel_id'] = $hotel_id;
} else {
    $response['message'] = $conn->error;
    $response['status'] = "error";
}

echo json_encode($response);

$conn->close();
?>
