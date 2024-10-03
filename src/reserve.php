<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Profile</title>
    <link rel="stylesheet" href="output.css">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />


    <script src="https://cdn.tailwindcss.com"></script>
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js'></script>
</head>

<body>

    <?php
    include_once "partials/__nav.php";
    ?>

<section class="p-10 relative">
    <h1 class="text-4xl font-semibold pb-4">Request to book</h1>

<section class="grid grid-cols-1 md:grid-cols-5 gap-4 ">
<div class="md:col-span-3 order-2 md:order-1 ">
    <br>
    <h1  class="text-2xl font-semibold pb-4">Select dates</h1>
    <hr>
    <br>
    <div class="flex justify-center">
        <div class="w-[80%]" id="calendar"></div>
    </div>
<br>
    <h1  class="text-2xl font-semibold pb-4">Select guests</h1><hr>
    <br>
    <div class="flex justify-between items-center pr-20">
                    <div class="text-xl font-medium">Guests</div>
                    <div class="flex items-center space-x-4">
                        <button type="button" id="decrementGuests"
                            class="bg-gray-200 text-gray-700 font-bold py-2 px-4 rounded-full hover:bg-gray-300 focus:outline-none">-</button>

                        <span id="guestCount" class="text-lg font-semibold">1</span>

                        <button type="button" id="incrementGuests"
                            class="bg-gray-200 text-gray-700 font-bold py-2 px-4 rounded-full hover:bg-gray-300 focus:outline-none">+</button>
                    </div>
                    
                </div>
                <br>
                <p class="text-sm text-gray-500">By selecting the button below, I agree to the Host's House Rules, Ground rules for guests, Adventure Amigo's Rebooking and Refund Policy, and that Adventure Amigos can charge my payment method if I’m responsible for damage. I agree to pay the total amount shown if the Host accepts my booking request.</p>
    
    
    <div>
        <br>
        <div class="flex justify-center">

            <button id="book-now" type="button" class="flex items-center gap-2 focus:outline-none text-white bg-pink-600 hover:bg-pink-700 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-4 me-2 mb-2">Pay with Bkash

            <svg width=30 height=30 viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg"><defs><style>.a{fill:none;stroke:#ffffff;stroke-linecap:round;stroke-linejoin:round;}</style></defs><path class="a" d="M22.9814,8.6317s-4.1632,14.704-3.8089,14.704,16.4755,2.923,16.4755,2.923Z"/><polyline class="a" points="22.981 8.632 6.329 6.152 19.172 23.336 21.387 33.522 35.648 26.259 39.368 17.445 30.393 18.946"/><polyline class="a" points="37.929 20.855 43 20.855 39.368 17.445"/><polyline class="a" points="21.387 33.522 21.741 35.427 13.725 41.848 19.172 23.336"/><polyline class="a" points="35.648 26.259 35.117 29.138 22.848 32.778"/><polyline class="a" points="8.455 8.997 5 8.997 16.044 19.15"/></svg>
            </button>
        </div>

    </div>

    </div>
<div class="md:col-span-2 order-1 md:order-2 p-4 border-2 rounded-lg h-fit sticky top-36">
       <section class="flex gap-2">
        <div class="">
            <img id="photo" class="rounded-xl w-40 h-32 object-cover" src="" alt="">
        </div>
        <div>

        <div class="flex justify-between gap-28">
            <p id="name" class="text-lg font-semibold"></p>
            <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                    </svg>
                                    &nbsp;
                                    <p id="rating" class="text-md font-medium"></p>
            </div>
</div>
        <div class="flex items-center ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                                    <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10"/>
                                    <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                                </svg>
                                &nbsp;
                                <p id="city_name" class="text-md text-gray-500"></p>
            </div>
            <h2 id="room_details" class="text-md font-normal text-gray-500"><span id="guest"></span> guests, <span id="bedroom"></span> bedrooms, <span id="bed"></span> beds <span id="vault"></span></h2>
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar4" viewBox="0 0 16 16">
                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M2 2a1 1 0 0 0-1 1v1h14V3a1 1 0 0 0-1-1zm13 3H1v9a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1z"/>
                </svg>
                &nbsp;
                    <p id="date" class="text-md text-gray-500"></p>
                    
                </div>
                <p><span id="currancy">$</span><span id="price"></span> <span>night</span></p>
        </div>
       </section>
       <br><hr><br>
       <h1 class="text-xl font-semibold pb-4">Price details</h1>
   

       <div class="flex justify-between pr-6">
        <p><span>$</span><span id="price-d">299</span> x <span id="multiplier">1</span> <span>nights</span></p>
        <p><span>$</span><span id="total"></span></p>
           

       </div>
       <br><hr><br>
       <div class="flex justify-between pr-6">
        <p class="text-lg"><b>Total</b><span>BDT</span></p>
        <p><span>$</span><span id="total-final">598</span></p>
    </div>
</div>
</section>




</section>



<?php
include_once 'partials/__footer.php';
?>

<!-- <script>




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

// Function to get the 'id' parameter from the URL
function getQueryParam(param) {
    const urlParams = new URLSearchParams(window.location.search);
    return urlParams.get(param);
}




// Get the 'id' from the current URL
const hotelId = getQueryParam('hotel_id');
// const hotelId = 32;
console.log("Hotel id:");
console.log(hotelId);




//Fetching the data from db
// Fetch the hotel details based on the 'id'
fetch(`get-hotels.php?id=${hotelId}`)
    .then(response => response.json())
    .then(data => {
        console.log(data);

        document.getElementById('photo').src = data.hotel.first_photo_url;
        
        document.getElementById('name').innerHTML = data.hotel.name;
        document.getElementById('city_name').innerHTML = data.hotel.city_name;
        document.getElementById('rating').innerHTML = data.hotel.rating;
        document.getElementById('price').innerHTML =data.hotel.price;
        document.getElementById('price-d').innerHTML =data.hotel.price;

        let roomDetails = JSON.parse(data.hotel.room_details);

        document.getElementById('date').innerHTML =formatDateRange(data.hotel);


        document.getElementById('guest').innerHTML =roomDetails['guests'];
        document.getElementById('bedroom').innerHTML =roomDetails['bedrooms'];
        document.getElementById('bed').innerHTML =roomDetails['beds'];



    })
    .catch(error => console.error('Error fetching hotels:', error));




//Calendar Logic
let fromDate = null;
let toDate = null;

document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    
    // Get today's date
    var today = new Date().toISOString().split('T')[0];

    // Initialize FullCalendar
    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',  // Default view
        selectable: true,              // Allow date selection
        validRange: {
            start: today,  // Disable dates before today
            end: '2024-10-08'
        },
        select: function(info) {
            // If both dates were previously set, clear all events and reset
            if (fromDate && toDate) {
                calendar.removeAllEvents();
                fromDate = null;
                toDate = null;
            }

            // Check if a "From" date has been set
            if (!fromDate) {
                fromDate = info.startStr;  // Set "From" date
                calendar.addEvent({
                    title: 'Check In',
                    start: fromDate,
                    allDay: true,
                    color: '#007bff', // Blue color for "From"
                    textColor: 'white',
                });
            } 
            // If a "From" date is set, check for "To" date
            else if (!toDate && info.startStr > fromDate) { // Ensure "To" is after "From"
                toDate = info.startStr; // Set "To" date
                calendar.addEvent({
                    title: 'Check Out',
                    start: toDate,
                    allDay: true,
                    color: '#28a745', // Green color for "To"
                    textColor: 'white',
                });

                // Highlight the date range from "From" to "To"
                calendar.addEvent({
                    start: fromDate,
                    end: toDate, // `end` is exclusive
                    display: 'background', // Treats as background event
                    backgroundColor: 'rgba(0, 123, 255, 0.5)', // Semi-transparent background
                    borderColor: 'transparent' // Remove border color
                });

                // Prepare data for the API
                const data = { from: fromDate, to: toDate };

                // Send selected dates to API
                fetch(`set-bookingdates.php?id=${hotelId}`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(data)
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        console.log('Success:', data.message);
                    } else {
                        console.log('Error:', data.message);
                    }
                })
                .catch(error => console.error('Error:', error));
            } 
            // If "To" date is before "From" date, reset selection
            else if (info.startStr <= fromDate) {
                calendar.removeAllEvents();
                fromDate = info.startStr;
                toDate = null;
                calendar.addEvent({
                    title: 'Check In',
                    start: fromDate,
                    allDay: true,
                    color: '#007bff', // Blue color for "From"
                    textColor: 'white',
                });
            }

            // Unselect the date selection
            calendar.unselect();
        }
    });

    // Render the calendar
    calendar.render();






    //guest handling
    let guestCount = 1;
    const guestCountElement = document.getElementById('guestCount');
const incrementGuestsButton = document.getElementById('incrementGuests');
const decrementGuestsButton = document.getElementById('decrementGuests');

// Update display function
function updateDisplay(countElement, count) {
    countElement.textContent = count;
}

// Guests Counter
incrementGuestsButton.addEventListener('click', () => {
    guestCount++;
    updateDisplay(guestCountElement, guestCount);
});

decrementGuestsButton.addEventListener('click', () => {
    if (guestCount > 1) {  // Example limitation, change as needed
        guestCount--;
    }
    updateDisplay(guestCountElement, guestCount);
});


});

</script>
 -->
<script>
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

function daysBetweenDates(date1, date2) {
    // Convert the date strings to Date objects
    const d1 = new Date(date1);
    const d2 = new Date(date2);
    
    // Calculate the time difference in milliseconds
    const timeDifference = Math.abs(d2 - d1);
    
    // Convert milliseconds to days
    const daysDifference = Math.ceil(timeDifference / (1000 * 60 * 60 * 24));
    
    return daysDifference;
}



 


</script>



 <script>
    document.addEventListener('DOMContentLoaded', function() {
        let fromDate = null;
        let toDate = null;
        let calendar;
        let price;
        let maxGuests;

        // Function to get the 'id' parameter from the URL
        function getQueryParam(param) {
            const urlParams = new URLSearchParams(window.location.search);
            return urlParams.get(param);
        }

        // Get the 'id' from the current URL
        const hotelId = getQueryParam('hotel_id');

        // Fetch the hotel details based on the 'id'
        fetch(`get-hotels.php?id=${hotelId}`)
            .then(response => response.json())
            .then(data => {
                console.log(data);
                initializeCalendar(data.hotel);
                console.log(data);

document.getElementById('photo').src = data.hotel.first_photo_url;

document.getElementById('name').innerHTML = data.hotel.name;
document.getElementById('city_name').innerHTML = data.hotel.city_name;
document.getElementById('rating').innerHTML = data.hotel.rating;
document.getElementById('price').innerHTML =data.hotel.price;
document.getElementById('price-d').innerHTML =data.hotel.price;
document.getElementById('total').innerHTML =data.hotel.price;
price = data.hotel.price;
let roomDetails = JSON.parse(data.hotel.room_details);

document.getElementById('date').innerHTML =formatDateRange(data.hotel);


document.getElementById('guest').innerHTML =roomDetails['guests'];
maxGuests = roomDetails['guests'];
document.getElementById('bedroom').innerHTML =roomDetails['bedrooms'];
document.getElementById('bed').innerHTML =roomDetails['beds'];




            })
            .catch(error => console.error('Error fetching hotels:', error));

        function initializeCalendar(hotel) {
            var calendarEl = document.getElementById('calendar');
                // Get today's date
    var today = new Date().toISOString().split('T')[0];
            
            calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                selectable: true,
                validRange: {
                    start: today,
                    end: new Date(new Date(hotel.to).getTime() + 86400000) // Add one day to include the end date
                },
                select: function(info) {
                    handleDateSelection(info);
                }
            });

            calendar.render();
        }

        function handleDateSelection(info) {
            // If both dates were previously set, clear all events and reset
            if (fromDate && toDate) {
                calendar.removeAllEvents();
                fromDate = null;
                toDate = null;
            }

            // Check if a "From" date has been set
            if (!fromDate) {
                fromDate = info.startStr;  // Set "From" date
                calendar.addEvent({
                    title: 'Check In',
                    start: fromDate,
                    allDay: true,
                    color: '#007bff', // Blue color for "From"
                    textColor: 'white',
                });
            } 
            // If a "From" date is set, check for "To" date
            else if (!toDate && info.startStr > fromDate) { // Ensure "To" is after "From"
                toDate = info.startStr; // Set "To" date
                calendar.addEvent({
                    title: 'Check Out',
                    start: toDate,
                    allDay: true,
                    color: '#28a745', // Green color for "To"
                    textColor: 'white',
                });

                // Highlight the date range from "From" to "To"
                calendar.addEvent({
                    start: fromDate,
                    end: toDate, // `end` is exclusive
                    display: 'background', // Treats as background event
                    backgroundColor: 'rgba(0, 123, 255, 0.5)', // Semi-transparent background
                    borderColor: 'transparent' // Remove border color
                });
                //Do anything with selected dates
// console.log(fromDate);
console.log(daysBetweenDates(fromDate, toDate)); // Outputs: 7
document.getElementById('multiplier').innerHTML = daysBetweenDates(fromDate, toDate);
document.getElementById('total').innerHTML = price * daysBetweenDates(fromDate, toDate);
document.getElementById('total-final').innerHTML = price * daysBetweenDates(fromDate, toDate);

   //guest handling
   let guestCount = 1;
    const guestCountElement = document.getElementById('guestCount');
const incrementGuestsButton = document.getElementById('incrementGuests');
const decrementGuestsButton = document.getElementById('decrementGuests');

// Update display function
function updateDisplay(countElement, count) {
    countElement.textContent = count;
}

// Guests Counter
incrementGuestsButton.addEventListener('click', () => {
    if (guestCount<=maxGuests) {
        guestCount++;
    }
    updateDisplay(guestCountElement, guestCount);
});

decrementGuestsButton.addEventListener('click', () => {
    if (guestCount > 1) {  // Example limitation, change as needed
        guestCount--;
    }
    updateDisplay(guestCountElement, guestCount);
});


// api params: guestCount, fromDate, toDate , price * daysBetweenDates(fromDate, toDate), hotelId, userId(on api via session)

                // Prepare data for the API
                const data = { from: fromDate, to: toDate };

                // Send selected dates to API
                fetch(`set-bookingdates.php?id=${hotelId}`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(data)
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        console.log('Success:', data.message);
                    } else {
                        console.log('Error:', data.message);
                    }
                })
                .catch(error => console.error('Error:', error));
            } 
            // If "To" date is before "From" date, reset selection
            else if (info.startStr <= fromDate) {
                calendar.removeAllEvents();
                fromDate = info.startStr;
                toDate = null;
                calendar.addEvent({
                    title: 'Check In',
                    start: fromDate,
                    allDay: true,
                    color: '#007bff', // Blue color for "From"
                    textColor: 'white',
                });
            }

            // Unselect the date selection
            calendar.unselect();
        }
    });
    </script>

</body>
</html>