<?php
require_once 'partials/__session.php';
require_once 'partials/__dbconnect.php';
// Get the search term from the query string
$searchTerm = isset($_GET['q']) ? $conn->real_escape_string($_GET['q']) : '';

// Fetch matching cities from the database
$query = "SELECT name, country FROM Cities WHERE name LIKE '%$searchTerm%' LIMIT 10";
$result = $conn->query($query);

$cities = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $cities[] = $row;
    }
}

// Return the cities as a JSON array
header('Content-Type: application/json');
echo json_encode($cities);

// Close the database connection
$conn->close();
?>