<?php

// Database connection details
include_once 'partials/__dbconnect.php';  // Adjust path as necessary
include_once 'partials/__session.php';

// Get host ID from session
$hostId = $_SESSION['id'];

// Query to get total listings
$sql = "SELECT COUNT(*) AS total_listings
        FROM HotelDetails
        WHERE host_id = $hostId;";
$result = mysqli_query($conn, $sql);
$totalListings = mysqli_fetch_assoc($result)['total_listings'];

// Query to get currently hosting hotels
$sql = "SELECT COUNT(*) AS currently_hosting
        FROM Bookings B
        JOIN Hotels H ON B.entity_id = H.hotel_id
        WHERE B.entity_type = 'hotel'
        AND H.host_id = $hostId
        AND CURDATE() BETWEEN B.start_date AND B.end_date;";
$result = mysqli_query($conn, $sql);
$currentlyHosting = mysqli_fetch_assoc($result)['currently_hosting'];

// Query to get upcoming reservations
$sql = "SELECT COUNT(*) AS upcoming_reservations
        FROM Bookings B
        JOIN Hotels H ON B.entity_id = H.hotel_id
        WHERE B.entity_type = 'hotel'
        AND H.host_id = $hostId
        AND B.start_date > CURDATE();";
$result = mysqli_query($conn, $sql);
$upcomingReservations = mysqli_fetch_assoc($result)['upcoming_reservations'];

// Query to get total earnings
$sql = "SELECT SUM(H.price) AS total_earnings
        FROM Bookings B
        JOIN Hotels H ON B.entity_id = H.hotel_id
        WHERE B.entity_type = 'hotel'
        AND H.host_id = $hostId;";
$result = mysqli_query($conn, $sql);
$totalEarnings = mysqli_fetch_assoc($result)['total_earnings'];

// Query to get average rating of listings
$sql = "SELECT AVG(H.rating) AS average_rating
        FROM Hotels H
        WHERE H.host_id = $hostId;";
$result = mysqli_query($conn, $sql);
$averageRating = mysqli_fetch_assoc($result)['average_rating'];

// Query to get the number of reviews for the host's hotels
$sql = "SELECT COUNT(R.review_id) AS total_reviews
        FROM Reviews R
        JOIN Hotels H ON R.entity_id = H.hotel_id
        WHERE R.entity_type = 'hotel'
        AND H.host_id = $hostId;";
$result = mysqli_query($conn, $sql);
$totalReviews = mysqli_fetch_assoc($result)['total_reviews'];

// Query to get room status summary
$sql = "SELECT 
            COUNT(CASE WHEN H.status = 'listed' THEN 1 END) AS listed,
            COUNT(CASE WHEN H.status = 'draft' THEN 1 END) AS draft,
            COUNT(CASE WHEN H.status = 'archived' THEN 1 END) AS archived
        FROM Hotels H
        WHERE H.host_id = $hostId;";
$result = mysqli_query($conn, $sql);
$statusSummary = mysqli_fetch_assoc($result);

// Return the data as JSON
header('Content-Type: application/json');
echo json_encode([
    'total_listings' => $totalListings,
    'currently_hosting' => $currentlyHosting,
    'upcoming_reservations' => $upcomingReservations,
    'total_earnings' => $totalEarnings,
    'average_rating' => $averageRating,
    'total_reviews' => $totalReviews,
    'status_summary' => $statusSummary
]);

// Close the connection
mysqli_close($conn);
?>
