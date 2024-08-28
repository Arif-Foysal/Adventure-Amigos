<?php
// require_once '../partials/__session.php';
require_once '../partials/__dbconnect.php';

// Assuming $user1_id and $user2_id are provided
$user1_id = 3; // Example value for User 1
$user2_id = 2; // Example value for User 2

// SQL query to fetch conversation between two users
$sql = "
SELECT 
    m.message_id, 
    m.sender_id, 
    m.receiver_id, 
    m.message_text, 
    m.sent_at, 
    m.status, 
    s.photo_url
FROM 
    Messages m
LEFT JOIN 
    SentPhotos s ON m.message_id = s.message_id
WHERE 
    (m.sender_id = ? AND m.receiver_id = ?)
    OR (m.sender_id = ? AND m.receiver_id = ?)
ORDER BY 
    m.sent_at ASC
";

// Prepare and bind parameters
$stmt = $conn->prepare($sql);
$stmt->bind_param("iiii", $user1_id, $user2_id, $user2_id, $user1_id);

// Execute the query
$stmt->execute();
$result = $stmt->get_result();

// Initialize an array to hold the messages
$messages = [];

// Check if there are results
if ($result->num_rows > 0) {
    // Fetch data and populate the messages array
    while ($row = $result->fetch_assoc()) {
        $messages[] = [
            'message_id' => $row['message_id'],
            'sender_id' => $row['sender_id'],
            'receiver_id' => $row['receiver_id'],
            'message_text' => htmlspecialchars($row['message_text']),
            'sent_at' => $row['sent_at'],
            'status' => $row['status'],
            'photo_url' => $row['photo_url'] ? $row['photo_url'] : null
        ];
    }
}

// Close the statement and connection
$stmt->close();
$conn->close();

// Set the response header to indicate JSON content
header('Content-Type: application/json');

// Return the messages as a JSON response
echo json_encode($messages);

?>
