<?php
include_once 'partials/__dbconnect.php';  // Adjust path as necessary
include_once 'partials/__session.php';

if ($_SERVER['REQUEST_METHOD']=="GET") {
    # code...
    if (isset($_GET['paymentID']) && isset($_GET['status']) && isset($_GET['signature'])) {
        // Extract values from the URL
        $paymentID = $_GET['paymentID'];
        $status = $_GET['status'];
        $signature = $_GET['signature'];
        $apiVersion = isset($_GET['apiVersion']) ? $_GET['apiVersion'] : null;  // Optional parameter
    
        // Debug: Output the extracted values for testing (can remove in production)
        echo "Payment ID: $paymentID<br>";
        echo "Status: $status<br>";
        echo "Signature: $signature<br>";
        echo "API Version: $apiVersion<br>";
    
        // You can now proceed with handling the payment success logic here
        // For example, update the database with the payment status, etc.
    
    } else {
        // Handle missing query parameters
        echo "Required payment information is missing from the URL.";
    }
}



// Read and parse the incoming JSON request body
$data = json_decode(file_get_contents("php://input"), true);

// Extract the variables from the incoming data
$user_id = $_SESSION['id'];
$entity_type = $data['entity_type'];
$entity_id = $data['entity_id'];
$start_date = $data['start_date'];
$end_date = $data['end_date'];
$paid_amount = $data['paid_amount'];
$phone = $data['phone'];
$month = $data['month'];
$username = $data['username'];
$company = "nayem"; // Fixed value for company name

// Build the API URL to send the payment request (this will be used for redirection)
$payment_url = "https://amarfuel.com/BKash/Paymentget.php?Amount=$paid_amount&Month=$month&User=$username&Phone=$phone&Company=$company";

// Store the booking data temporarily in the session (if needed)
$_SESSION['booking_data'] = [
    'user_id' => $user_id,
    'entity_type' => $entity_type,
    'entity_id' => $entity_id,
    'start_date' => $start_date,
    'end_date' => $end_date,
    'paid_amount' => $paid_amount
];

// Return the payment URL as JSON for JavaScript to redirect the user
$result = [
    'status' => 'redirect',
    'paymentUrl' => $payment_url
];

header('Content-Type: application/json');
echo json_encode($result);
?>
