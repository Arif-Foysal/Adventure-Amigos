<?php
require_once '../partials/__session.php';
require_once '../partials/__dbconnect.php';

header('Content-Type: application/json');

$user_id = $_SESSION['id'];
// echo $user_id;
$sql = "
SELECT 
    u.user_id AS chat_with_user_id,
    CONCAT(u.fname, ' ', u.lname) AS user_name,
    u.profile_photo_url,
    m.message_text AS last_message,
    m.sent_at AS last_message_time,
    m.sender_id AS last_message_sender_id,
    m.receiver_id AS last_message_receiver_id
FROM 
    Messages m
JOIN 
    Users u ON (u.user_id = m.sender_id AND m.receiver_id = ?) 
           OR (u.user_id = m.receiver_id AND m.sender_id = ?)
JOIN 
    (SELECT 
        LEAST(sender_id, receiver_id) AS user1,
        GREATEST(sender_id, receiver_id) AS user2,
        MAX(sent_at) AS last_message_time
     FROM Messages
     WHERE sender_id = ? OR receiver_id = ?
     GROUP BY user1, user2
    ) lm ON lm.user1 = LEAST(m.sender_id, m.receiver_id)
        AND lm.user2 = GREATEST(m.sender_id, m.receiver_id)
        AND lm.last_message_time = m.sent_at
ORDER BY 
    m.sent_at DESC;
";

$stmt = $conn->prepare($sql);
$stmt->bind_param('iiii',$user_id, $user_id, $user_id, $user_id);
$stmt->execute();
$result = $stmt->get_result();
//fetch the chat list into an array
$chatList = [];
$response = [
    "body" => ""
];

function formatMessage($string) {
    if (strlen($string) > 22) {
        return substr($string, 0, 19) . '...';
    } else {
        return $string;
    }
}

while ($row = $result->fetch_assoc()) {
    $chatList[] = $row;

    $dateTime = new DateTime($row['last_message_time']);
    $time = $dateTime->format('g:ia'); // Example output: 7:17pm
    
    $sentBy = "";

    $message = formatMessage($row['last_message']);
    

    if ($row['last_message_sender_id'] == $user_id) {
        # code...
        $sentBy .="You:";
    }


    $response['body'] .= '<div onclick="receiverId='.$row['chat_with_user_id'].'" class="hover:bg-gray-100 p-2 flex gap-2 rounded-md cursor-pointer"><div class="relative w-fit"><img src="../images/dp/dp.JPG" alt="" class="h-10 rounded-full"><div class="absolute bottom-1 right-0 h-3 w-3 rounded-full bg-green-400 ring-2 ring-white"></div></div><div><p class="text-md font-medium">'.$row['user_name'].'</p><section class="flex gap-1 items-center text-sm text-neutral-400 "><p>'.$sentBy.$message.'</p><p class="">•</p><p>'.$time.'</p></section></div></div>';
}

// Output or use the chat list
echo json_encode($response,JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

// echo json_encode($chatList);

$stmt->close();
?>