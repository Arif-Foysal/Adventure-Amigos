<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='utf-8' />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Dates | Amigos</title>
    
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js'></script>
  
    <style>
        #calendar {
            max-width: 900px;
            margin: 40px auto;
            padding: 0 10px;
        }
    </style>
</head>
<body>
<?php
    ob_start();
    include_once "partials/__nav.php";
    include_once 'partials/__save-exit-btn.php';
    ?>

<section class=" p-6">
<div class=" max-w-2xl mx-auto">
    <div class="flex items-center gap-2">
    <h1 class="text-4xl font-bold">Select Your Availability Window </h1>
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-calendar-date" viewBox="0 0 16 16">
  <path d="M6.445 11.688V6.354h-.633A13 13 0 0 0 4.5 7.16v.695c.375-.257.969-.62 1.258-.777h.012v4.61zm1.188-1.305c.047.64.594 1.406 1.703 1.406 1.258 0 2-1.066 2-2.871 0-1.934-.781-2.668-1.953-2.668-.926 0-1.797.672-1.797 1.809 0 1.16.824 1.77 1.676 1.77.746 0 1.23-.376 1.383-.79h.027c-.004 1.316-.461 2.164-1.305 2.164-.664 0-1.008-.45-1.05-.82zm2.953-2.317c0 .696-.559 1.18-1.184 1.18-.601 0-1.144-.383-1.144-1.2 0-.823.582-1.21 1.168-1.21.633 0 1.16.398 1.16 1.23"/>
  <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z"/>
</svg>
       
    </div>
<h1 class="text-xl font-medium text-gray-400">Set the range of dates for when guests can book your place</h1>

<!-- Calendar Container -->
 <br><br>
<div id='calendar'></div>
    </div>
    </section>


    <?php
        include_once 'partials/__prev-next-btn.php';
        include_once 'partials/__footer.php';

        //form validation
        ob_end_flush();
        ?>

        
<script>

document.getElementById("next").addEventListener("click", function(event) {
    // event.preventDefault();  // Prevent default form submission
    window.location.href = "create-listing-2-6.php";
});


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
            start: today  // Disable dates before today
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
                    title: 'From',
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
                    title: 'To',
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
                fetch('api/update-dates.php', {
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
                    title: 'From',
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
});
</script>

</body>
</html>
