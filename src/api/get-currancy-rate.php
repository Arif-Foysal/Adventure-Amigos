<?php
header('Content-Type: application/json');
require '../../vendor/autoload.php';
use GuzzleHttp\Client;

// Path to the rates.json file
$jsonFilePath = __DIR__ . '/rates.json';

// Check if the file exists and is not empty
if (file_exists($jsonFilePath)) {
    $jsonData = file_get_contents($jsonFilePath);

    // Check if the file is not empty and contains valid JSON
    if (!empty($jsonData)) {
        $ratesData = json_decode($jsonData, true);

        // If the file contains valid JSON, check for the update time
        if (json_last_error() === JSON_ERROR_NONE && isset($ratesData['time_next_update_utc'])) {
            $currentTime = time();
            $timeNextUpdate = strtotime($ratesData['time_next_update_utc']);

            // Return cached data if the update time is still in the future
            if ($timeNextUpdate > $currentTime) {
                echo $jsonData;
                exit;
            }
        }
    }
}

// If the file does not exist, is empty, or invalid, or time has passed, fetch new data from the API
$client = new Client();
$res = $client->request('GET', 'https://v6.exchangerate-api.com/v6/04267df24bea3204808b8ae8/latest/BDT');

// Check if the request was successful
if ($res->getStatusCode() === 200) {
    $newData = $res->getBody()->getContents();
    $ratesData = json_decode($newData, true);

    // Ensure the response contains valid data before saving
    if (json_last_error() === JSON_ERROR_NONE) {
        // Save the new data to rates.json
        file_put_contents($jsonFilePath, $newData);

        // Return the new data to the client
        echo $newData;
    } else {
        // Handle error if the API returns invalid JSON
        echo json_encode(['error' => 'Invalid JSON response from the API']);
    }
} else {
    // Handle error if the API request fails
    echo json_encode(['error' => 'Unable to fetch exchange rates']);
}
?>
