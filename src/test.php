<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Card</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .selected {
            border-color: #4A90E2; /* Tailwind blue-500 */
            background-color: #EBF8FF; /* Tailwind blue-100 */
        }
    </style>
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">
    <form id="cardForm" action="submit.php" method="POST" class="space-y-4">
        <div class="flex flex-wrap justify-center space-x-4">
            <div data-value="option1" class="card cursor-pointer p-6 max-w-xs bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 transition-colors">
                <h2 class="text-xl font-semibold mb-2">Option 1</h2>
                <p>Description for option 1.</p>
            </div>
            <div data-value="option2" class="card cursor-pointer p-6 max-w-xs bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 transition-colors">
                <h2 class="text-xl font-semibold mb-2">Option 2</h2>
                <p>Description for option 2.</p>
            </div>
            <div data-value="option3" class="card cursor-pointer p-6 max-w-xs bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 transition-colors">
                <h2 class="text-xl font-semibold mb-2">Option 3</h2>
                <p>Description for option 3.</p>
            </div>
        </div>
        <input type="hidden" id="selectedOption" name="selectedOption">
        <button type="submit" class="px-6 py-3 bg-blue-500 text-white font-semibold rounded-md hover:bg-blue-600 transition-colors">Submit</button>
    </form>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const cards = document.querySelectorAll('.card');
            let selectedCard = null;

            cards.forEach(card => {
                card.addEventListener('click', () => {
                    if (selectedCard) {
                        selectedCard.classList.remove('selected');
                    }
                    card.classList.add('selected');
                    selectedCard = card;
                    document.getElementById('selectedOption').value = card.getAttribute('data-value');
                });
            });

            document.getElementById('cardForm').addEventListener('submit', (e) => {
                const selectedOption = document.getElementById('selectedOption').value;
                if (!selectedOption) {
                    e.preventDefault();
                    alert('Please select an option.');
                }
            });
        });
    </script>
</body>
</html>