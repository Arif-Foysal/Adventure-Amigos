<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Gallery</title>
    <link rel="stylesheet" href="style/square-img.css">
    <link rel="stylesheet" href="output.css">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

    <?php
    include_once "partials/__nav.php";
    ?>

    <section class=" p-6">
        <div class=" max-w-6xl mx-auto">
            <h1 class="text-3xl font-semibold pb-2" id="accommodation-title">Title of the Accommodation</h1>
            <section class="flex gap-1 items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-geo-alt"
                    viewBox="0 0 16 16">
                    <path
                        d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10" />
                    <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                </svg>
                <h1 class="text-2xl font-semibold" id="hotel-location">Dhaka, Bangladesh</h1>
            </section>
            <h2 class="text-xl font-normal text-gray-500" id="hotel-details">details/ # of beds, # of bathrooms etc</h2>
            <br>
            <div id="image-container" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-3">
                <!-- Images will be dynamically loaded here -->
            </div>
        </div>
    </section>
<div class="flex justify-center">

    <button id="load-more" type="button" class=" py-2 px-3 inline-flex items-center gap-x-2 text-lg font-medium rounded-lg border border-gray-800 text-gray-800 hover:bg-gray-200 focus:outline-none focus:border-gray-500 focus:text-gray-500 disabled:opacity-50 disabled:pointer-events-none">
        Load more
    </button>
</div>
<br><br>
    <?php
    include_once 'partials/__footer.php';
    ?>

    <script>
        // Function to get the 'id' parameter from the URL
        function getQueryParam(param) {
            const urlParams = new URLSearchParams(window.location.search);
            return urlParams.get(param);
        }

        // Variables for pagination
        let currentPage = 1;
        const itemsPerPage = 3;  // Number of photos to load per click
        let allPhotos = [];

        // Get the 'hotel_id' from the current URL
        const hotelId = getQueryParam('hotel_id');

        // Function to display photos
        function displayPhotos(page) {
            const start = (page - 1) * itemsPerPage;
            const end = page * itemsPerPage;
            const photosToDisplay = allPhotos.slice(start, end);

            const imageContainer = document.getElementById('image-container');
            photosToDisplay.forEach(photoUrl => {
                const imgDiv = document.createElement('div');
                imgDiv.classList.add('group', 'square');
                imgDiv.innerHTML = `
                    <img class="gallery-img h-auto max-w-full rounded-lg transition duration-200 group-hover:scale-105 group-hover:cursor-pointer" src="${photoUrl}" alt="">
                `;
                imageContainer.appendChild(imgDiv);
            });

            // If no more photos to load, disable the button
            if (end >= allPhotos.length) {
                document.getElementById('load-more').disabled = true;
                document.getElementById('load-more').innerText = "No more photos";
            }
        }

        // Fetch the hotel data
        fetch(`get-hotels.php?id=${hotelId}`)
            .then(response => response.json())
            .then(data => {
                // Update hotel info on the page
                document.getElementById('accommodation-title').innerText = data.hotel.name;
                document.getElementById('hotel-location').innerText = `${data.hotel.city_name}, ${data.hotel.country_name}`;
                document.getElementById('hotel-details').innerText = `Guests: ${data.hotel.room_details.guests}, Beds: ${data.hotel.room_details.beds}, Bedrooms: ${data.hotel.room_details.bedrooms}`;
                
                // Store all photos
                allPhotos = data.hotel.photos;

                // Display the first set of photos
                displayPhotos(currentPage);
            })
            .catch(error => console.error('Error fetching hotels:', error));

        // Load more event listener
        document.getElementById('load-more').addEventListener('click', function () {
            currentPage++;
            displayPhotos(currentPage);
        });
    </script>
</body>

</html>
