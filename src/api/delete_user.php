<?php
header('Content-Type: application/json');
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Origin: *"); // In production, restrict the origin for security
header("Access-Control-Allow-Headers: Authorization, Content-Type");

// Include database and session handling files
include_once '../partials/__dbconnect.php';
include_once '../partials/__session.php';

// Initialize response array
$response = array("message" => "", "status" => "", "user_id" => "");

// Check if the request method is GET
if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
    http_response_code(405); // Method Not Allowed
    $response['message'] = "Invalid request method";
    $response['status'] = "error";
    echo json_encode($response);
    exit();
}

// Get the Authorization token (e.g., JWT or session token) from query string (GET parameters)
$authToken = $_GET['token'] ?? null;

if (!$authToken) {
    http_response_code(401); // Unauthorized
    $response['message'] = "Authorization token missing";
    $response['status'] = "error";
    echo json_encode($response);
    exit();
}

// Verify token and get the user ID
$user_id = verifyToken($authToken); // Dummy function for token verification
if (!$user_id) {
    http_response_code(401); // Unauthorized
    $response['message'] = "Invalid token";
    $response['status'] = "error";
    echo json_encode($response);
    exit();
}

// Prepare SQL query to delete the user
$sql = "DELETE FROM Users WHERE user_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);

// Execute the query and handle response
if ($stmt->execute()) {
    http_response_code(200); // OK
    $response['message'] = "User account deleted successfully";
    $response['status'] = "success";
    $response['user_id'] = $user_id;
} else {
    http_response_code(500); // Internal Server Error
    $response['message'] = "Failed to delete user account: " . $conn->error;
    $response['status'] = "error";
}

// Send the JSON response
echo json_encode($response);

// Close connections
$stmt->close();
$conn->close();

// Function to verify token and return user ID (dummy implementation)
function verifyToken($token) {
    // Here you would add real token validation logic (e.g., JWT validation)
    return intval($token); // Assuming token is the user ID for simplicity
}
?>
