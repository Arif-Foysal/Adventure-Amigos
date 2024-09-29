<?php
// Database connection
header('Content-Type: application/json');
include_once 'partials/__dbconnect.php';  // Adjust path as necessary
include_once 'partials/__session.php';

// Set the number of hotels per page
$hotels_per_page = 4;

// Get the requested page from the API request, default to 1 if not set
$current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

// Calculate the starting index for the current page
$start_index = ($current_page - 1) * $hotels_per_page;

// Query to get the total number of hotels
$total_hotels_query = "SELECT COUNT(*) as total FROM HotelDetails";
$total_hotels_result = $conn->query($total_hotels_query);
$total_hotels_row = $total_hotels_result->fetch_assoc();
$total_hotels = $total_hotels_row['total'];

// Query to fetch hotels with pagination
$sql = "SELECT * FROM HotelDetails WHERE status = 'listed' LIMIT $start_index, $hotels_per_page";
$result = $conn->query($sql);

// Initialize an array to hold the hotel data
$hotels = [];

if ($result->num_rows > 0) {
    // Fetch data for each hotel
    while ($row = $result->fetch_assoc()) {
        $hotels[] = $row; // Add each hotel to the array
    }
}

// Prepare the response
$response = [
    'hotels' => $hotels,
    'total_hotels' => $total_hotels,
    'current_page' => $current_page,
    'total_pages' => ceil($total_hotels / $hotels_per_page),
];

// Return the hotel data as JSON
echo json_encode($response);

// Close the database connection
$conn->close();
?>
