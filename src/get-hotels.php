<?php
// Database connection
header('Content-Type: application/json');
include_once 'partials/__dbconnect.php';  // Adjust path as necessary
include_once 'partials/__session.php';

// Check if a specific hotel_id is provided via GET
$hotel_id = isset($_GET['id']) ? (int)$_GET['id'] : null;

// If hotel_id is provided, fetch details for that hotel only
if ($hotel_id) {
    // Query to fetch the specific hotel details from the HotelDetails view including new fields
    $sql = "SELECT hotel_id,`host_id`, `name`, `from`, `to`, city_name, country_name, street, postal_code, link, first_photo_url, accom_type, room_details, features, `description`, price, rating, auto_reserve
            FROM HotelDetails
            WHERE hotel_id = ? AND status = 'listed'";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $hotel_id);
    $stmt->execute();
    $result = $stmt->get_result();

    // Initialize an array to hold the hotel data
    $hotel_data = null;

    if ($result->num_rows > 0) {
        // Fetch hotel details
        $hotel_data = $result->fetch_assoc();

        // Query to fetch photos for this hotel from the Photos table
        $photo_sql = "SELECT photo_url FROM Photos WHERE entity_type = 'hotel' AND entity_id = ?";
        $photo_stmt = $conn->prepare($photo_sql);
        $photo_stmt->bind_param("i", $hotel_id);
        $photo_stmt->execute();
        $photo_result = $photo_stmt->get_result();

        // Fetch all the photos and store them in an array
        $photos = [];
        while ($photo_row = $photo_result->fetch_assoc()) {
            $photos[] = $photo_row['photo_url'];
        }

        // Add the photos to the hotel data
        $hotel_data['photos'] = $photos;
    }

    // Return the hotel data as JSON
    echo json_encode(['hotel' => $hotel_data]);

    // Close the database connections
    $stmt->close();
    $photo_stmt->close();
    $conn->close();
    exit();
}

// Set the number of hotels per page for general listing
$hotels_per_page = 4;

// Get the requested page from the API request, default to 1 if not set
$current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

// Calculate the starting index for the current page
$start_index = ($current_page - 1) * $hotels_per_page;

// Query to get the total number of hotels
$total_hotels_query = "SELECT COUNT(*) as total FROM HotelDetails WHERE status = 'listed'";
$total_hotels_result = $conn->query($total_hotels_query);
$total_hotels_row = $total_hotels_result->fetch_assoc();
$total_hotels = $total_hotels_row['total'];

// Query to fetch hotels with pagination, including new fields
$sql = "SELECT hotel_id, `name`, city_name, country_name,`from`,`to`, street, postal_code, link, first_photo_url, accom_type, room_details, features, description, price, rating, auto_reserve
        FROM HotelDetails
        WHERE status = 'listed'
        LIMIT ?, ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ii", $start_index, $hotels_per_page);
$stmt->execute();
$result = $stmt->get_result();

// Initialize an array to hold the hotel data
$hotels = [];

if ($result->num_rows > 0) {
    // Fetch data for each hotel
    while ($row = $result->fetch_assoc()) {
        // Query to fetch photos for each hotel
        $hotel_id = $row['hotel_id'];
        $photo_sql = "SELECT photo_url FROM Photos WHERE entity_type = 'hotel' AND entity_id = ?";
        $photo_stmt = $conn->prepare($photo_sql);
        $photo_stmt->bind_param("i", $hotel_id);
        $photo_stmt->execute();
        $photo_result = $photo_stmt->get_result();

        // Fetch all the photos and store them in an array
        $photos = [];
        while ($photo_row = $photo_result->fetch_assoc()) {
            $photos[] = $photo_row['photo_url'];
        }

        // Add the photos to the hotel data
        $row['photos'] = $photos;

        // Add the hotel data to the array
        $hotels[] = $row;
    }
}

// Prepare the response for the paginated hotel list
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
