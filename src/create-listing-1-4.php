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
                <h1 class="text-4xl font-bold">Where's your place located?</h1>
                <br>
                <div class="">
                    <div class="relative">

                        <select id="options" name="options" class="w-full pt-6 pr-2 pl-4 pb-2 rounded-lg text-lg border-2">
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="India">Option 2</option>
                            <option value="option3">Option 3</option>
                            <option value="option4">Option 4</option>
                        </select>
                        <p class="absolute top-2 left-4 text-gray-500 text-sm font-medium">
                            Country/Region
                        </p>
                    </div>
                    <br>

                    <input class="w-full p-3 rounded-tl-lg rounded-tr-lg border-2" type="text" placeholder="City">
                    <input class="border-2 border-t-0 w-full p-3" type="text" placeholder="Street">
                    <input class="border-2 border-t-0 w-full p-3" type="text" placeholder="Additional info(optional)">
                    <input class="border-2 border-t-0 w-full p-3 rounded-bl-lg rounded-br-lg" type="text"
                        placeholder="Postal code">
                    <br>
                    <br>
                    <p class="text-2xl font-medium pb-2">Google map embed link <a
                            class="underline hover:no-underline text-blue-400"
                            href="https://developers.google.com/maps/documentation/embed/embedding-map">learn more</a>
                    </p>
                    <!-- <input class="w-full h-28 p-3 rounded-lg" type="text" placeholder="Google map embed link"> -->
                    <textarea class="border-2 w-full h-28 p-3 rounded-lg resize-none overflow-y-auto"
                        placeholder="Paste your link here"></textarea>

                </div>
            </div>

        </section>

        <?php
        include_once 'partials/__prev-next-btn.php';
        include_once 'partials/__footer.php';

        //form validation
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            header("Location:$nextPage");
        }
        ob_end_flush();
        ?>
    </form>

</body>

</html>