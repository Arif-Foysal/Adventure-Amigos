<?php
require_once '../partials/__session.php';
require_once '../partials/__dbconnect.php';

//parse the request
$input = file_get_contents('php://input');
$data = json_decode($input, true);


$receiver_id = isset($data['receiver_id']) ? (int)$data['receiver_id'] : null;
$sender_id = $_SESSION["id"];
// $receiver_id = 6;


if (!$sender_id || !$receiver_id) {
    http_response_code(400); // Bad Request
    echo json_encode(["error" => "sender_id and receiver_id are required"]);
    exit();
}


$message_text = $data['message_text'];
// Escape special characters in the message text to prevent SQL injection
// $message_text = $conn->real_escape_string($message_text);


$sql = "INSERT INTO Messages (sender_id, receiver_id, message_text) 
        VALUES ($sender_id, $receiver_id, '$message_text')";

// Execute the query
if (mysqli_query($conn, $sql)) {
    // echo "New message inserted successfully!";
    echo json_encode(["success" => "message sent successfully"]);
} else {
    echo "Error: " . mysqli_error($conn);
}

// Close the connection
mysqli_close($conn);
?>
