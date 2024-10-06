<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Accommodation | Amigos</title>
    <link rel="icon" type="image/x-icon" href="../images/fav.png">
    <link rel="stylesheet" href="output.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js'></script> -->
</head>
<body>

<?php 

include_once "partials/__nav.php"; 
?>


<main class="mt-4 mx-8 mb-8">
    <div id="hotel-list" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4"></div>

    <div class="pr-8 flex justify-end">
        <div id="pagination" class="flex space-x-1"></div>
    </div>
</main>

<?php include_once "partials/__footer.php";
 
?>

<script>
    let rate_multiplier;
            function getQueryParam(param) {
            const urlParams = new URLSearchParams(window.location.search);
            return urlParams.get(param);
        }
    // Define the API URL
const apiUrl = 'http://localhost/Adventure-Amigos/src/api/get-currancy-rate.php';

// Function to fetch currency rates
function fetchCurrencyRates() {
    fetch(apiUrl)
        .then(response => {
            // Check if the response is OK (status code 200)
            if (!response.ok) {
                throw new Error(`HTTP error! status: ${response.status}`);
            }
            return response.json(); // Parse the response as JSON
        })
        .then(data => {
            // Handle the data (currency rates)
            // console.log('Currency Rates:', data); // Output the data to the console
            // You can update the DOM or use the data as needed
            if (getQueryParam('currency')!=null) {
                // console.log('not null');
                let selectedCurrency = getQueryParam('currency').toUpperCase();
                console.log(selectedCurrency);
                
                // Accessing the conversion rate dynamically using bracket notation
                rate_multiplier = data.conversion_rates[selectedCurrency];
                
            }
            
        })
        .catch(error => {
            // Handle any errors
            console.error('Error fetching the currency rates:', error);
        });
}

// Call the function to fetch the currency rates
fetchCurrencyRates();

</script>

<script>
    let currentPage = 1;
    function formatDateRange(hotel) {
    const optionsSameMonth = { month: 'short', day: 'numeric' };
    const optionsDifferentMonth = { month: 'short', day: 'numeric' };

    // Convert the 'from' and 'to' date strings into Date objects
    const fromDate = new Date(hotel.from);
    const toDate = new Date(hotel.to);

    let formattedDateRange;

    // Check if the 'from' and 'to' dates are in the same month and year
    if (fromDate.getMonth() === toDate.getMonth() && fromDate.getFullYear() === toDate.getFullYear()) {
        // If they are in the same month, display the month once
        formattedDateRange = `${fromDate.toLocaleDateString('en-US', optionsSameMonth)}-${toDate.getDate()}`;
    } else {
        // If they are in different months, display both month and day for both dates
        formattedDateRange = `${fromDate.toLocaleDateString('en-US', optionsDifferentMonth)} - ${toDate.toLocaleDateString('en-US', optionsDifferentMonth)}`;
    }

    return formattedDateRange;
}

        // The getQueryParam function was defined here earlier


          // Get the 'id' from the current URL
        let query = "";

          const city = getQueryParam('city');
        if (city) {
            query+="&city="+city;
        }

        const min_price = getQueryParam('min_price');
        if (min_price) {
            query+="&min_price="+min_price;
        }
        
        const max_price = getQueryParam('max_price');
        if (max_price) {
            query+="&max_price="+max_price;
        }

        const check_in = getQueryParam('check_in');
        if (check_in) {
            query+="&check_in="+check_in;
        }
        const check_out = getQueryParam('check_out');
        if (check_out) {
            query+="&check_out="+check_out;
        }
        
   console.log(query);
   


    function fetchHotels(page) {
        fetch(`get-hotels.php?page=${page}${query}`)
            .then(response => response.json())
            .then(data => {
                const hotelList = document.getElementById('hotel-list');
                hotelList.innerHTML = '';

                data.hotels.forEach(hotel => {

                    // const val = formatDateRange(hotel);
                    console.log(formatDateRange(hotel));
                    function getHotelRating(rating) {
    if (rating < 1) {
        return 'N/A';
    } else {
        return rating;
    }
}

function rateConverter(rate, multiplier) {
    if (multiplier!=null) {
        return rate *multiplier;
    }
    return rate;
}
function currencySelector() {
    if (getQueryParam('currency')!=null) {
        document.getElementById('selected_currency_tile').innerHTML=getQueryParam('currency').toUpperCase();   
        return getQueryParam('currency').toUpperCase();   

    }
    return "BDT";
}
               
                    const hotelCard = `
                        <a href="view-hotel.php?id=${hotel.hotel_id}" class="flex flex-col p-2 hover:bg-neutral-100 rounded-lg">
                            <div class="square">
                                <img src="${hotel.first_photo_url}" alt="hotel" class="gallery-img w-full h-72 object-cover rounded-lg">
                            </div>
                            <div class="flex justify-between mt-2">
                                <p class="text-md font-semibold">${hotel.name}</p>
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                    </svg>
                                    &nbsp;
                                    <p class="text-md font-medium">${getHotelRating(hotel.rating)}</p>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                                    <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10"/>
                                    <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                                </svg>
                                &nbsp;
                                <p class="text-md text-gray-500">${hotel.city_name}</p>
                            </div>
                             <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar4" viewBox="0 0 16 16">
                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M2 2a1 1 0 0 0-1 1v1h14V3a1 1 0 0 0-1-1zm13 3H1v9a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1z"/>
                </svg>
                &nbsp;
                    <p class="text-md text-gray-500">${formatDateRange(hotel)}</p>
                </div>
                            <div class="flex mt-1">
                                <p class="text-md font-medium">${currencySelector()} ${rateConverter(hotel.price,rate_multiplier)}</p>
                                &nbsp;
                                <p class="text-md"> night</p>
                            </div>
                        </a>`;
                    hotelList.innerHTML += hotelCard;
                });

                // Update pagination
                updatePagination(page, data.total_pages);
            })
            .catch(error => console.error('Error fetching hotels:', error));
    }

    function updatePagination(currentPage, totalPages) {
        const pagination = document.getElementById('pagination');
        pagination.innerHTML = '';

        // Previous page button
        if (currentPage > 1) {
            const prevButton = `<a href="#" onclick="changePage(${currentPage - 1})" class="rounded-md border border-slate-300 py-2 px-3 text-center text-sm transition-all shadow-sm hover:shadow-lg text-slate-600 hover:text-white hover:bg-slate-800 hover:border-slate-800">Prev</a>`;
            pagination.innerHTML += prevButton;
        }

        // Page number buttons
        for (let i = 1; i <= totalPages; i++) {
            if (i === currentPage) {
                pagination.innerHTML += `<span class="min-w-9 rounded-md bg-slate-800 py-2 px-3 border border-transparent text-center text-sm text-white">${i}</span>`;
            } else {
                pagination.innerHTML += `<a href="#" onclick="changePage(${i})" class="min-w-9 rounded-md border border-slate-300 py-2 px-3 text-center text-sm transition-all shadow-sm hover:shadow-lg text-slate-600 hover:text-white hover:bg-slate-800 hover:border-slate-800">${i}</a>`;
            }
        }

        // Next page button
        if (currentPage < totalPages) {
            const nextButton = `<a href="#" onclick="changePage(${currentPage + 1})" class="rounded-md border border-slate-300 py-2 px-3 text-center text-sm transition-all shadow-sm hover:shadow-lg text-slate-600 hover:text-white hover:bg-slate-800 hover:border-slate-800">Next</a>`;
            pagination.innerHTML += nextButton;
        }
    }

    function changePage(page) {
        currentPage = page;
        fetchHotels(currentPage);
    }

    // Initial fetch
    fetchHotels(currentPage);
</script>


</body>
</html>
