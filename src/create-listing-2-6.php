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

    <?php
    ob_start();
    include_once "partials/__nav.php";
    include_once 'partials/__save-exit-btn.php';
    ?>

    <!-- To take as input:
country
city
street
postal code
additional info
Google Maps Embed Link (Optional)
Landmark (Optional)
A well-known landmark near the hotel (e.g., "Near Eiffel Tower").

-->
    <form action="#" method="post">

        <section class=" p-6">
            <div class=" max-w-2xl mx-auto">
                <h1 class="text-4xl font-bold">Now set your price </h1>
                <h1 class="text-2xl font-medium text-slate-500">You can change it anytime </h1>
<br><br>
                <div class="flex items-end">

                    <h1 class="text-9xl font-extrabold flex text-slate-800"><p>$</p><p id="price">19</p></h1>
                    <input id="price-edit" class="h-28 w-72 hidden text-9xl" type="text">                        
                    <button onclick="toggleVisibility('price-edit','price')">

                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-pencil-square text-slate-800 cursor-pointer" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                        </svg>
                    </button>
                </div>

                </div>
            </div>
        </section>

        <?php
        include_once 'partials/__prev-next-btn.php';
        include_once 'partials/__footer.php';

        //form validation
        ob_end_flush();
        ?>
    </form>
    <script>
    // Function to toggle the visibility of an element using Tailwind CSS classes
        function toggleVisibility(elementId, valueId) {
        const element = document.getElementById(elementId);
        const val = document.getElementById(valueId);
        // Toggle the 'hidden' class to show or hide the element
        element.classList.toggle('hidden');
        val.classList.toggle('hidden');
        }
</script>
</body>

</html>