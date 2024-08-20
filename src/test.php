<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Profile</title>
    <link rel="stylesheet" href="output.css">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

    <?php
    include_once "partials/__nav.php";
    ?>

<section class="p-6">
    <div class="max-w-2xl mx-auto">
        <h1 class="text-4xl font-bold">How many people can stay there?</h1>
        <br>
        <div class="flex justify-between items-center p-3">
            <div class="text-2xl font-medium">Guests</div>
            <div class="flex items-center space-x-4">
                <button data-type="guests" class="decrement bg-gray-200 text-gray-700 font-bold py-2 px-4 rounded-full hover:bg-gray-300 focus:outline-none">-</button>
                <span data-type="guests" class="counter text-lg font-semibold">1</span>
                <button data-type="guests" class="increment bg-gray-200 text-gray-700 font-bold py-2 px-4 rounded-full hover:bg-gray-300 focus:outline-none">+</button>
            </div>
        </div>
        <hr>
        <div class="flex justify-between items-center p-3">
            <div class="text-2xl font-medium">Bedrooms</div>
            <div class="flex items-center space-x-4">
                <button data-type="bedrooms" class="decrement bg-gray-200 text-gray-700 font-bold py-2 px-4 rounded-full hover:bg-gray-300 focus:outline-none">-</button>
                <span data-type="bedrooms" class="counter text-lg font-semibold">1</span>
                <button data-type="bedrooms" class="increment bg-gray-200 text-gray-700 font-bold py-2 px-4 rounded-full hover:bg-gray-300 focus:outline-none">+</button>
            </div>
        </div>
        <hr>
        <div class="flex justify-between items-center p-3">
            <div class="text-2xl font-medium">Beds</div>
            <div class="flex items-center space-x-4">
                <button data-type="beds" class="decrement bg-gray-200 text-gray-700 font-bold py-2 px-4 rounded-full hover:bg-gray-300 focus:outline-none">-</button>
                <span data-type="beds" class="counter text-lg font-semibold">1</span>
                <button data-type="beds" class="increment bg-gray-200 text-gray-700 font-bold py-2 px-4 rounded-full hover:bg-gray-300 focus:outline-none">+</button>
            </div>
        </div>
        <hr>
    </div>
</section>


<script>
  // Initialize counts object
const counts = {
    guests: 1,
    bedrooms: 1,
    beds: 1
};

// Function to update display
function updateDisplay(type) {
    const countElement = document.querySelector(`span[data-type="${type}"]`);
    countElement.textContent = counts[type];
}

// Function to handle increment/decrement
function handleCounterUpdate(event) {
    const button = event.target;
    const type = button.getAttribute('data-type');
    
    if (button.classList.contains('increment')) {
        counts[type]++;
    } else if (button.classList.contains('decrement')) {
        if (counts[type] > 1) { // Example limitation, change as needed
            counts[type]--;
        }
    }
    
    updateDisplay(type);
}

// Event delegation for handling button clicks
document.querySelector('section').addEventListener('click', (event) => {
    if (event.target.classList.contains('increment') || event.target.classList.contains('decrement')) {
        handleCounterUpdate(event);
    }
});

</script>



<?php
include_once 'partials/__footer.php';
?>
</body>
</html>