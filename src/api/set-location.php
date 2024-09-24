<?php
// url.=?city_name=YourCityName&country_name=YourCountryName&street_name=YourStreetName&postal_code=YourPostalCode&des=YourDescription&link=YourLink

header('Content-Type: application/json');
include_once '../partials/__dbconnect.php'; // Ensure this initializes $conn
include_once '../partials/__session.php'; // Assuming this handles session management

// Assuming you have sanitized form data
$city_name = $_GET['city_name']; // Replace with actual input
$country_name = $_GET['country_name']; // Replace with actual input
$street_name = $_GET['street_name']; // Replace with actual input
$postal_code = $_GET['postal_code']; // Replace with actual input
$description_text = $_GET['des']; // Replace with actual input
$link = $_GET['link']; // Replace with actual input (e.g., URL of the hotel)
$hotel_id = $_SESSION['list_hotel_id']; // Assuming you have the hotel_id from session or input

// Check if hotel exists
$check_hotel_sql = "SELECT COUNT(*) FROM Hotels WHERE hotel_id = ?";
$stmt = $conn->prepare($check_hotel_sql);
$stmt->bind_param('i', $hotel_id);
$stmt->execute();
$stmt->bind_result($hotel_exists);
$stmt->fetch();
$stmt->close(); // Close the statement after fetching

if ($hotel_exists === 0) {
    // Hotel does not exist
    echo json_encode(['success' => false, 'message' => 'Hotel not found.']);
    $conn->close();
    exit;
}

// Get existing location_id for the hotel
$existing_location_sql = "SELECT location_id FROM Hotels WHERE hotel_id = ?";
$stmt = $conn->prepare($existing_location_sql);
$stmt->bind_param('i', $hotel_id);
$stmt->execute();
$stmt->bind_result($location_id);
$stmt->fetch();
$stmt->close(); // Close the statement after fetching

if ($location_id) {
    // Location exists, update the existing location
    $location_sql = "UPDATE Locations SET street = ?, postal_code = ?, description = ?, link = ? WHERE location_id = ?";
    $stmt = $conn->prepare($location_sql);
    $stmt->bind_param('ssssi', $street_name, $postal_code, $description_text, $link, $location_id);
    $stmt->execute();
    $stmt->close(); // Close the statement

    // Respond with success message
    $response = [
        'success' => true,
        'message' => 'Location updated successfully.',
        'location_id' => $location_id
    ];
} else {
    // Insert or get city_id
    $city_sql = "INSERT INTO Cities (name, country)
        SELECT * FROM (SELECT ? AS name, ? AS country) AS tmp
        WHERE NOT EXISTS (
            SELECT name, country FROM Cities WHERE name = ? AND country = ?
        ) LIMIT 1";

    $stmt = $conn->prepare($city_sql);
    $stmt->bind_param('ssss', $city_name, $country_name, $city_name, $country_name);
    $stmt->execute();
    $stmt->close(); // Close the statement

    // Get city_id
    $city_id_sql = "SELECT city_id FROM Cities WHERE name = ? AND country = ?";
    $stmt = $conn->prepare($city_id_sql);
    $stmt->bind_param('ss', $city_name, $country_name);
    $stmt->execute();
    $stmt->bind_result($city_id);
    $stmt->fetch();
    $stmt->close(); // Close the statement after fetching

    // Insert new location
    $location_sql = "INSERT INTO Locations (street, postal_code, description, link, city_id)
        VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($location_sql);
    $stmt->bind_param('ssssi', $street_name, $postal_code, $description_text, $link, $city_id);
    $stmt->execute();
    $location_id = $stmt->insert_id; // Get the new location_id
    $stmt->close(); // Close the statement

    // Update Hotels with new location_id
    $hotel_sql = "UPDATE Hotels SET location_id = ? WHERE hotel_id = ?";
    $stmt = $conn->prepare($hotel_sql);
    $stmt->bind_param('ii', $location_id, $hotel_id);
    $stmt->execute();
    $stmt->close(); // Close the final statement

    // Respond with success message
    $response = [
        'success' => true,
        'message' => 'New location created and assigned to hotel.',
        'location_id' => $location_id
    ];
}

// Output response as JSON
echo json_encode($response);

// Close the database connection
$conn->close();
?>
