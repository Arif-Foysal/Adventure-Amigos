<?php

// Set content type to JSON
header('Content-Type: application/json');
include_once '../partials/__dbconnect.php';
include_once '../partials/__session.php';



$user_id = $_SESSION["id"];

// Check if user_id is provided in GET request
if (isset($user_id)) {

    // SQL query to fetch user details
    $sql = "SELECT user_id, user_type, fname, lname, email, phone, rcvEmails, CreatedAt, profile_photo_url 
            FROM Users WHERE user_id = ?";

    // Prepare statement
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        die(json_encode(['error' => 'Failed to prepare statement']));
    }

    // Bind the user_id to the SQL query
    $stmt->bind_param("i", $user_id);

    // Execute the statement
    if ($stmt->execute()) {
        // Fetch the result
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // Get the user details as an associative array
            $user = $result->fetch_assoc();
            // Return user details in JSON format
            echo json_encode($user);
        } else {
            echo json_encode(['error' => 'User not found']);
        }
    } else {
        echo json_encode(['error' => 'Failed to execute query']);
    }

    // Close the statement
    $stmt->close();
} else {
    echo json_encode(['error' => 'No user_id provided']);
}

// Close the database connection
$conn->close();
?>
