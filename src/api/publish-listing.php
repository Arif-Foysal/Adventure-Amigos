<?php
header('Content-Type: application/json');
include_once '../partials/__dbconnect.php';
include_once '../partials/__session.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Check if hotel_id exists in the session
    if (isset($_SESSION['list_hotel_id'])) {
        $hotel_id = $_SESSION['list_hotel_id'];
        
           // Get the incoming JSON data
           $input = file_get_contents('php://input');
           $data = json_decode($input, true); // Decode JSON into PHP associative array
    
// Validate the input
if (isset($data['autoReserve']) && isset($data['entity'])) {
    $autoReserve = $data['autoReserve'] ? 1 : 0; // Convert boolean to integer
    $entity = $data['entity']; // Assuming you handle entity type in your logic

if ($entity == "hotel") {
    # code...
    $status = 'listed';

    $sql = $sql = "UPDATE Hotels SET auto_reserve = $autoReserve, `status` = '$status' WHERE hotel_id = $hotel_id";
    $result = $conn->query($sql);
    if ($result) {
        # code...
        echo json_encode(["success" => true]);
    }
    else {
        # code...
        echo json_encode(["error" => "db update failed"]);
    }
} else {
    http_response_code(400); // Bad Request
    echo json_encode(["error" => "Invalid input"]);
}


}
}

}


$conn->close();
?>
