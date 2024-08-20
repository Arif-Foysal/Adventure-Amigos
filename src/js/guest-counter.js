// Initialize counts
let guestCount = 1;
let bedroomCount = 1;
let bedCount = 1;

// Get elements for Guests
const guestCountElement = document.getElementById('guestCount');
const incrementGuestsButton = document.getElementById('incrementGuests');
const decrementGuestsButton = document.getElementById('decrementGuests');

// Get elements for Bedrooms
const bedroomCountElement = document.getElementById('bedroomCount');
const incrementBedroomsButton = document.getElementById('incrementBedrooms');
const decrementBedroomsButton = document.getElementById('decrementBedrooms');

// Get elements for Beds
const bedCountElement = document.getElementById('bedCount');
const incrementBedsButton = document.getElementById('incrementBeds');
const decrementBedsButton = document.getElementById('decrementBeds');

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

// Bedrooms Counter
incrementBedroomsButton.addEventListener('click', () => {
    bedroomCount++;
    updateDisplay(bedroomCountElement, bedroomCount);
});

decrementBedroomsButton.addEventListener('click', () => {
    if (bedroomCount > 1) {  // Example limitation, change as needed
        bedroomCount--;
    }
    updateDisplay(bedroomCountElement, bedroomCount);
});

// Beds Counter
incrementBedsButton.addEventListener('click', () => {
    bedCount++;
    updateDisplay(bedCountElement, bedCount);
});

decrementBedsButton.addEventListener('click', () => {
    if (bedCount > 1) {  // Example limitation, change as needed
        bedCount--;
    }
    updateDisplay(bedCountElement, bedCount);
});
