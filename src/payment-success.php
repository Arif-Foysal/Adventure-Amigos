<?php
include_once 'partials/__dbconnect.php';  // Adjust path as necessary
include_once 'partials/__session.php';

if ($_SERVER['REQUEST_METHOD'] == "GET") {
    if (isset($_GET['paymentID']) && isset($_GET['status']) && isset($_GET['signature'])) {
        // Extract values from the URL
        $paymentID = $_GET['paymentID'];
        $status = $_GET['status'];
        $signature = $_GET['signature'];
        $apiVersion = isset($_GET['apiVersion']) ? $_GET['apiVersion'] : null;  // Optional parameter
        
        // Debug: Output the extracted values for testing
        // echo "Payment ID: $paymentID<br>";
        // echo "Status: $status<br>";
        // echo "Signature: $signature<br>";
        // echo "API Version: $apiVersion<br>";
        // var_dump($_SESSION);
        
        // Assuming you have the booking data in session
        if (isset($_SESSION['booking_data'])) {
            $bookingData = $_SESSION['booking_data'];
            $userId = $bookingData['user_id'];
            $entityType = $bookingData['entity_type'];
            $entityId = $bookingData['entity_id'];
            $startDate = $bookingData['start_date'];
            $endDate = $bookingData['end_date'];
            $paidAmount = $bookingData['paid_amount'];

            // Run SQL query to update the booking status
            $sql = "INSERT INTO `Bookings` (user_id, entity_type, entity_id, `start_date`, end_date, paid_amount, payment_status, transaction_id) 
                    VALUES ('$userId', '$entityType', '$entityId', '$startDate', '$endDate', '$paidAmount', 'completed', '$paymentID')";

            // Execute the query
            if ($conn->query($sql) === TRUE) {
                // echo "Booking successfully updated.";
                // Optionally, you can redirect to a success page
                // header("Location: http://localhost/Adventure-Amigos/src/success.php");
                // exit();
            } else {
                echo "Error: " . $conn->error;
            }
        } else {
            echo "No booking data found in session.";
        }
    } else {
        // Handle missing query parameters
        echo "Required payment information is missing from the URL.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Profile</title>
    <link rel="stylesheet" href="output.css">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />

    <script src="https://cdn.tailwindcss.com"></script>
<script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {"50":"#f0fdf4","100":"#dcfce7","200":"#bbf7d0","300":"#86efac","400":"#4ade80","500":"#22c55e","600":"#16a34a","700":"#15803d","800":"#166534","900":"#14532d"}
                    }
                }
            }
        }
    </script>
</head>
<body>

    

<div class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded-lg shadow-md max-w-md w-full">
        <div class="text-center">
            <svg class="w-20 h-20 text-primary-600 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            <h1 class="mt-4 text-3xl font-bold text-gray-900">Payment Successful!</h1>
            <p class="mt-2 text-lg text-gray-600">Thank you for your booking.</p>
        </div>
<?php
echo '
<div class="mt-8">
    <h2 class="text-xl font-semibold text-gray-900">Order Summary</h2>
    <div class="mt-4 bg-gray-50 rounded-lg p-4">
        <div class="flex justify-between items-center">
            <span class="text-gray-600">Payment ID:</span>
            <span class="font-medium">'.$paymentID.'</span>
        </div>
        <div class="flex justify-between items-center mt-2">
            <span class="text-gray-600">Check in:</span>
            <span class="font-medium">'.$startDate.'</span>
        </div>
        <div class="flex justify-between items-center mt-2">
            <span class="text-gray-600">Check out:</span>
            <span class="font-medium">'.$endDate.'</span>
        </div>
        <div class="flex justify-between items-center mt-2">
            <span class="text-gray-600">Total Amount:</span>
            <span class="font-medium">Tk '. $paidAmount.'</span>
        </div>
        <div class="flex justify-between items-center mt-2">
            <span class="text-gray-600">Status:</span>
            <span class="font-medium">Tk '. $status.'</span>
        </div>
    </div>
</div>

';
?>


        <div class="mt-8 space-y-4">
            <a href="#" class="block w-full bg-primary-600 hover:bg-primary-700 text-white font-bold py-3 px-4 rounded-lg text-center transition duration-300 ease-in-out">
                View Order Details
            </a>
            <a href="hotels.php" class="block w-full bg-white hover:bg-gray-50 text-primary-600 font-bold py-3 px-4 rounded-lg text-center transition duration-300 ease-in-out border border-primary-600">
                Continue exploring
            </a>
        </div>
        
        <p class="mt-8 text-center text-sm text-gray-500">
            If you have any questions, please contact our 
            <a href="#" class="text-primary-600 hover:text-primary-700 font-medium">customer support</a>.
        </p>
    </div>


</div>


<?php
include_once 'partials/__footer.php';
?>
</body>

</html>