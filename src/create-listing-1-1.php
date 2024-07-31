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
include_once "partials/__nav.php";

include_once 'partials/__save-exit-btn.php';
?>

<section>
<div class="flex flex-col-reverse md:flex-row mx-5 lg:mx-40">
        <div class="w-full md:w-3/5 p-8">
            <!-- Prompt -->
            <p class="text-2xl">Step 1</p>
            <br>
            <h1 class="text-4xl font-bold">We'd love to hear about your spot!</h1>
            <p class="mt-4 text-xl">
                In this step, describe the type of property you offer and clarify if guests will book the whole place or just a room. Then, share the location and how many guests it can host.
            </p>
        </div>
        <div class="w-full md:w-2/5 p-8">
            <!-- SVG -->
            <img src="../images/vectors/house.jpg" alt="A vector image of a house">
        </div>
</div>
<?php
include_once 'partials/__prev-next-btn.php';
?>
</section>


</body>
</html>