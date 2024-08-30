
<?php
require_once '../partials/__session.php';
require_once '../partials/__dbconnect.php';

// Set content type to JSON
header('Content-Type: application/json');


// 2. Get user IDs from request (e.g., via GET or POST)
$sender_id = isset($_GET['sender_id']) ? (int)$_GET['sender_id'] : null;
$receiver_id = isset($_GET['receiver_id']) ? (int)$_GET['receiver_id'] : null;

if (!$sender_id || !$receiver_id) {
    http_response_code(400); // Bad Request
    echo json_encode(["error" => "sender_id and receiver_id are required"]);
    exit();
}

// 3. Prepare the SQL query
$sql = "SELECT 
            m.message_id,
            m.sender_id,
            m.receiver_id,
            m.message_text,
            m.sent_at,
            m.status,
            sp.photo_url
        FROM 
            `Messages` m
        LEFT JOIN 
            `SentPhotos` sp ON m.message_id = sp.message_id
        WHERE 
            (m.sender_id = ? AND m.receiver_id = ?)
            OR
            (m.sender_id = ? AND m.receiver_id = ?)
        ORDER BY 
            m.sent_at ASC";

// 4. Prepare the statement
$stmt = $conn->prepare($sql);

if ($stmt === false) {
    http_response_code(500); // Internal Server Error
    echo json_encode(["error" => "Error preparing statement: " . $conn->error]);
    exit();
}

// 5. Bind the parameters
$stmt->bind_param("iiii", $sender_id, $receiver_id, $receiver_id, $sender_id);

// 6. Execute the query
$stmt->execute();

// 7. Get the result
$result = $stmt->get_result();

// 8. Fetch and process the results into an array
$messages = [];
$lastMsgId = null;
$response = [
    "name" => "",
    "chatbody" => "",
    "lastMsgId" => -1
];

function chatHeading($sender, $receiver, $conn){
    $headingId = -1;
    $name = '';
    if ($sender == $_SESSION['id']) {
        # code...
        $headingId = $receiver;
    }
    else {
        $headingId = $sender;
    }
    // Prepare the SQL query
$sql = "SELECT fname, lname FROM Users WHERE user_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $headingId); // "i" denotes an integer parameter

// Execute the query
$stmt->execute();
$fname = '';
$lname = '';
// Bind the result variables
$stmt->bind_result($fname, $lname);
if ($stmt->fetch()) {
   $name .= $fname;
   $name .= ' ';
   $name .= $lname;
   return $name;
} else {
    // echo "No user found with user_id".$headingId;
    echo json_encode(["error" => "Receiver user do not exist"]);
}    


}

$response['name']= chatHeading($sender_id,$receiver_id, $conn);


// var_dump($_SESSION);
// 9. Output the result as JSON
// echo json_encode($messages);

while ($row = $result->fetch_assoc()) {
    $messages[] = [
        "message_id" => $row['message_id'],
        $lastMsgId => $row['message_id'],
        "sender_id" => $row['sender_id'],
        "receiver_id" => $row['receiver_id'],
        "message_text" => $row['message_text'],
        "sent_at" => $row['sent_at'],
        "status" => $row['status'],
        "photo_url" => $row['photo_url'] ? $row['photo_url'] : null
    ];

    $dateTime = new DateTime($row['sent_at']);
    $time = $dateTime->format('g:ia'); // Example output: 7:17pm



if ($row['sender_id'] == $_SESSION["id"]) { 

$response['chatbody'] .= '<div class="flex self-end flex-col p-3 rounded-md bg-blue-600 text-white w-fit max-w-lg"><p>'.$row['message_text'].'</p><div class="flex items-center gap-2 text-neutral-200 text-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16"><path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425z"/></svg><p>'.$time.'</p></div></div>';
$response['lastMsgId'] = $row['message_id'];
}

else if($row['receiver_id'] == $_SESSION["id"]){
    $response['chatbody'] .='<div class="flex flex-col p-3 rounded-md bg-neutral-50 w-fit max-w-lg"><p>'.$row['message_text'].'</p><div class="flex items-center gap-2 text-neutral-400 text-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16"><path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425z"/></svg><p>'.$time. '</p></div></div>
    ';
    $response['lastMsgId'] = $row['message_id'];
}

}

// echo json_encode($messages);
echo json_encode($response,JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);



// 10. Close the statement and connection
$stmt->close();
$conn->close();
?>