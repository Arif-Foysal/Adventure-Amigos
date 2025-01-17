<?php
header('Content-Type: application/json');
include_once '../partials/__dbconnect.php';
include_once '../partials/__session.php';


$hotelID = $_SESSION['list_hotel_id'];
$accom_type = $_GET['accom_type'];

$hotelID = intval($hotelID);
$accom_type = $conn->real_escape_string($accom_type);

$sql_check = "SELECT hotel_id FROM Hotels WHERE hotel_id = $hotelID";
$result = $conn->query($sql_check);

$response = array("message" => "", "status" => "", "hotel_id" => "");

if ($result->num_rows > 0) {
    $sql_update = "UPDATE Hotels SET accom_type = '$accom_type' WHERE hotel_id = $hotelID";
    if ($conn->query($sql_update) === TRUE) {

        $response['message'] = "New record created";
        $response['status'] = "success";
        $response['hotel_id'] = $hotelID;

    } else {
            $response['message'] = $conn->error;
            $response['status'] = "error";
    }
} 
else{
    $response['status'] = "failed";
    $response['message'] = "No record found with the given hotel ID";
}

echo json_encode($response);

$conn->close();
?>
