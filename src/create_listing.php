
<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="output.css">
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
<!-- lkjadflkj -->
<?php
include_once "partials/__nav.php"
?>

    <section class=" h-24 flex justify-end items-center px-10 ">
    <a href="help.php" type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 mx-8  dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Need Help?</a>
    <a href="discover.php" type="button" class="text-red-600 bg-white border border-red-600 focus:outline-none hover:bg-red-600 hover:text-white focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 mr-4  dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Exit</a>
    </section>
    <section class= "flex justify-center mb-20 ">

        <div class="w-[90vw] md:w-[40vw]">
            <h1 class="text-4xl font-semibold pb-4">Welcome, Nayeem</h1>
            <h2 class="text-xl pb-2 font-medium">Finish Your Listing</h2>
            <a href="#" class = " p-6 border border-gray-500 rounded-md flex  justify-between items-center hover:bg-gray-100">
                <div class="flex">
                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-house-add-fill" viewBox="0 0 16 16">
                        <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 1 1-1 0v-1h-1a.5.5 0 1 1 0-1h1v-1a.5.5 0 0 1 1 0"/>
                        <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293z"/>
                        <path d="m8 3.293 4.712 4.712A4.5 4.5 0 0 0 8.758 15H3.5A1.5 1.5 0 0 1 2 13.5V9.293z"/>
                    </svg>
                    <p class="mx-4 text-xl font-semibold text-gray-700">
                        Your house listing draft
                    </p>
                </div>
                <div>
                    <p class = "text-xl font-semibold text-gray-700">Date: 3/4/2024</p>
                </div>  
            </a>

            <h2 class="mt-20 mb-6 text-3xl font-medium text-gray-800 dark:text-white">Start new listing</h2>

            <div class="">
                <a id="new-listing" href="create-listing-1-1.php" class="flex items-center justify-between my-4">
                        <div class="flex">

                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-house-add" viewBox="0 0 16 16">
                                <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h4a.5.5 0 1 0 0-1h-4a.5.5 0 0 1-.5-.5V7.207l5-5 6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293z"/>
                                <path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0m-3.5-2a.5.5 0 0 0-.5.5v1h-1a.5.5 0 0 0 0 1h1v1a.5.5 0 1 0 1 0v-1h1a.5.5 0 1 0 0-1h-1v-1a.5.5 0 0 0-.5-.5"/>
                            </svg>
                            <p class="text-lg font-normal mx-4">
                                Create New Listing
                            </p>
                        </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                    </svg>
                </a>
                <hr>
                <a href="" class="flex items-center justify-between my-4">
                        <div class="flex">

                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-repeat" viewBox="0 0 16 16">
  <path d="M11.534 7h3.932a.25.25 0 0 1 .192.41l-1.966 2.36a.25.25 0 0 1-.384 0l-1.966-2.36a.25.25 0 0 1 .192-.41m-11 2h3.932a.25.25 0 0 0 .192-.41L2.692 6.23a.25.25 0 0 0-.384 0L.342 8.59A.25.25 0 0 0 .534 9"/>
  <path fill-rule="evenodd" d="M8 3c-1.552 0-2.94.707-3.857 1.818a.5.5 0 1 1-.771-.636A6.002 6.002 0 0 1 13.917 7H12.9A5 5 0 0 0 8 3M3.1 9a5.002 5.002 0 0 0 8.757 2.182.5.5 0 1 1 .771.636A6.002 6.002 0 0 1 2.083 9z"/>
</svg>
                            <p class="text-lg font-normal mx-4">
                                Create From Existing Listing
                            </p>
                        </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                    </svg>
                </a>
                <hr>   
            </div>
            


        </div>
    </section>
    <div class= "border-b border-gray-500"></div>
    <?php
    include_once 'partials/__footer.php';
    ?>

<script>
    document.getElementById('new-listing').addEventListener('click', function(event) {
        // Prevent the default behavior of the link
        event.preventDefault();

        // Call the API using fetch
        fetch('api/new-listing.php', {
            method: 'GET' // or 'POST' depending on your API
        })
        .then(response => response.json())  // assuming your API returns JSON
        .then(data => {
            console.log('API response:', data);
            // After API call completes, navigate to next_step.php
            window.location.href = 'create-listing-1-1.php';
        })
        .catch(error => {
            console.error('Error calling API:', error);
            // Handle error or navigate anyway
            window.location.href = '#';
        });
    });
</script>

</body>
</html>