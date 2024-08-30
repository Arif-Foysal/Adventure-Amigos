<?php
session_start();
header('Content-Type: application/json');
// Assuming session variables are set
$response = array(
    'user_id' => isset($_SESSION['id']) ? $_SESSION['id'] : null
);

// Return session data as JSON
echo json_encode($response);
// echo $_SESSION["id"];
?>


