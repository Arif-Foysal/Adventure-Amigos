
<?php
// example: src/api/set-change-info.php?field=phone&newValue=77978978977788789797987
// Set the content type to JSON for proper response
header('Content-Type: application/json');

// Include database connection and session
include_once '../partials/__dbconnect.php'; 
include_once '../partials/__session.php'; // Ensure this file is correct and manages the session properly

// Function to update user data using mysqli
function updateUserProfile($userId, $field, $newValue) {
    global $conn; // Use the global $conn object for database operations

    // Allowed fields that can be updated
    $allowedFields = ['fname', 'lname', 'email', 'phone', 'password', 'profile_photo_url'];

    // Check if the provided field is allowed to be updated
    if (!in_array($field, $allowedFields)) {
        return ['status' => 'error', 'message' => 'Invalid field.'];
    }

    // Sanitize inputs to prevent SQL injection
    $userId = (int)$userId; // Cast to integer to prevent injection
    $field = mysqli_real_escape_string($conn, $field);
    $newValue = mysqli_real_escape_string($conn, $newValue);

    // Prepare the update query to update the specific field
    $sql = "UPDATE Users SET $field = '$newValue' WHERE user_id = $userId";

    // Execute the query and return the appropriate response
    if ($conn->query($sql) === TRUE) {
        return ['status' => 'success', 'message' => 'Profile updated successfully.'];
    } else {
        return ['status' => 'error', 'message' => 'Failed to update profile: ' . $conn->error];
    }
}

// Check if the user is logged in
if (!isset($_SESSION['id'])) {
    // If the session does not contain user_id, return an error response
    echo json_encode(['status' => 'error', 'message' => 'User not logged in.']);
    exit();
}

// Get the logged-in user's ID from the session
$loggedInUserId = $_SESSION['id'];

// Check if the request method is GET
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Check if all required parameters are passed
    if ( isset($_GET['field']) && isset($_GET['newValue'])) {
        // Get the data from the GET request
        $userId = (int)$_SESSION['id'];     // The user ID to identify the user (cast to integer for safety)
        $field = $_GET['field'];       // The field to be updated (e.g., 'email')
        $newValue = $_GET['newValue']; // The new value to update

        // Check if the user is trying to update their own profile
        if ($userId !== $loggedInUserId) {
            echo json_encode(['status' => 'error', 'message' => 'Unauthorized action.']);
            exit();
        }

        // Call the function to update the user profile
        $response = updateUserProfile($userId, $field, $newValue);

        // Return the response in JSON format
        echo json_encode($response);
    } else {
        // If required parameters are missing, return an error
        echo json_encode(['status' => 'error', 'message' => 'Invalid input.']);
    }
} else {
    // If the request method is not GET, return an error
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method.']);
}

// Close the database connection at the end
$conn->close();
?>
