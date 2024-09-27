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
                <h1 class="text-4xl font-bold">Now let's give your house a title </h1>
                    <!-- <input class="w-full h-28 p-3 rounded-lg" type="text" placeholder="Google map embed link"> -->
                    <textarea id="mapLink" class="border-2 w-full h-18 p-3 rounded-lg resize-none overflow-y-auto"
                        placeholder="Put your title here"></textarea>
                        <br><br><br>
                        <h1 class="text-4xl font-bold">Create your description</h1>
                        <textarea id="mapLink" class="border-2 w-full h-28 p-3 rounded-lg resize-none overflow-y-auto"
                        placeholder="Put your description here"></textarea>

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

</body>

</html>