<?php
// Database connection
header('Content-Type: application/json');
include_once 'partials/__dbconnect.php';  // Adjust path as necessary
include_once 'partials/__session.php';

// Check for filtering parameters via GET
$hotel_id = isset($_GET['id']) ? (int)$_GET['id'] : null;
$city_name = isset($_GET['city']) ? $_GET['city'] : null;
$sort_order = isset($_GET['sort']) && in_array(strtoupper($_GET['sort']), ['ASC', 'DESC']) ? strtoupper($_GET['sort']) : 'ASC';

// Check for price range and dates
$min_price = isset($_GET['min_price']) ? (int)$_GET['min_price'] : null;
$max_price = isset($_GET['max_price']) ? (int)$_GET['max_price'] : null;
$check_in = isset($_GET['check_in']) ? $_GET['check_in'] : null;  // Expected format: YYYY-MM-DD
$check_out = isset($_GET['check_out']) ? $_GET['check_out'] : null;  // Expected format: YYYY-MM-DD

// If hotel_id is provided, fetch details for that hotel only
if ($hotel_id) {
    // Query to fetch the specific hotel details from the HotelDetails view including new fields
    $sql = "SELECT hotel_id, host_id, name, `from`, `to`, city_name, country_name, street, postal_code, link, first_photo_url, accom_type, room_details, features, description, price, rating, auto_reserve
            FROM HotelDetails
            WHERE hotel_id = ? AND status = 'listed'";
    
    // Add filtering condition for city_name if provided
    if ($city_name) {
        $sql .= " AND city_name = ?";
    }

    // Bind parameters
    $stmt = $conn->prepare($sql);

    if ($city_name) {
        $stmt->bind_param("is", $hotel_id, $city_name);
    } else {
        $stmt->bind_param("i", $hotel_id);
    }

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
$current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$start_index = ($current_page - 1) * $hotels_per_page;

// Query to get the total number of hotels based on filters
$total_hotels_query = "SELECT COUNT(*) as total FROM HotelDetails WHERE status = 'listed'";
$conditions = [];
$params = [];
$param_types = '';

// Apply filters if provided
if ($city_name) {
    $conditions[] = "city_name = ?";
    $params[] = $city_name;
    $param_types .= 's';
}

if ($min_price) {
    $conditions[] = "price >= ?";
    $params[] = $min_price;
    $param_types .= 'i';
}

if ($max_price) {
    $conditions[] = "price <= ?";
    $params[] = $max_price;
    $param_types .= 'i';
}

// Check for date filters
if ($check_in && $check_out) {
    // Both check_in and check_out are provided
    $conditions[] = "? BETWEEN `from` AND `to` AND ? BETWEEN `from` AND `to`";
    $params[] = $check_out;
    $params[] = $check_in;
    $param_types .= 'ss';
} elseif ($check_in) {
    // Only check_in is provided
    $conditions[] = "? BETWEEN `from` AND `to`";  // Hotel is available starting from this date
    $params[] = $check_in;
    $param_types .= 's';
}

if (!empty($conditions)) {
    $total_hotels_query .= " AND " . implode(' AND ', $conditions);
}

$total_hotels_stmt = $conn->prepare($total_hotels_query);
if (!empty($params)) {
    $total_hotels_stmt->bind_param($param_types, ...$params);
}
$total_hotels_stmt->execute();
$total_hotels_result = $total_hotels_stmt->get_result();
$total_hotels_row = $total_hotels_result->fetch_assoc();
$total_hotels = $total_hotels_row['total'];

// Query to fetch hotels with pagination, including new fields and sorting by price
$sql = "SELECT hotel_id, name, city_name, country_name, `from`, `to`, street, postal_code, link, first_photo_url, accom_type, room_details, features, description, price, rating, auto_reserve
        FROM HotelDetails
        WHERE status = 'listed'";

// Apply filters if provided
if ($city_name) {
    $sql .= " AND city_name = ?";
}

if ($min_price) {
    $sql .= " AND price >= ?";
}

if ($max_price) {
    $sql .= " AND price <= ?";
}

if ($check_in && $check_out) {
    $sql .= " AND ? BETWEEN `from` AND `to` AND ? BETWEEN `from` AND `to`";
} elseif ($check_in) {
    $sql .= "  AND ? BETWEEN `from` AND `to`";
}
    
// Add sorting and pagination
$sql .= " ORDER BY price " . $sort_order . " LIMIT ?, ?";

// Bind parameters
$stmt = $conn->prepare($sql);
$params[] = $start_index;
$params[] = $hotels_per_page;
$param_types .= 'ii';

$stmt->bind_param($param_types, ...$params);
$stmt->execute();
$result = $stmt->get_result();

// Initialize an array to hold the hotel data
$hotels = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Query to fetch photos for each hotel
        $hotel_id = $row['hotel_id'];
        $photo_sql = "SELECT photo_url FROM Photos WHERE entity_type = 'hotel' AND entity_id = ?";
        $photo_stmt = $conn->prepare($photo_sql);
        $photo_stmt->bind_param("i", $hotel_id);
        $photo_stmt->execute();
        $photo_result = $photo_stmt->get_result();

        $photos = [];
        while ($photo_row = $photo_result->fetch_assoc()) {
            $photos[] = $photo_row['photo_url'];
        }

        $row['photos'] = $photos;
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
