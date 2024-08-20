<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="style/fade-in-img.css">
    <link rel="stylesheet" href="output.css">
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>

<?php
ob_start();
include_once "partials/__nav.php";

include_once 'partials/__save-exit-btn.php';
?>

<section>
<div class="flex flex-col-reverse md:flex-row mx-5 lg:mx-40">
        <div class="w-full md:w-3/5 p-8">
            <!-- Prompt -->
            <p class="text-2xl">Step 2</p>
            <br>
            <h1 class="text-4xl font-bold">Showcase Your Space</h1>
            <p class="mt-4 text-xl">
            In this step, you’ll highlight the amenities your place provides and upload five or more photos. You’ll also need to create a catchy title and an engaging description.
            </p>
        </div>
        <div class="w-full md:w-2/5 p-8">
            <!-- SVG -->
            <img src="../images/vectors/anime-room.jpg" alt="A vector image of a house" class="rounded-2xl animated-opacity">

        </div>
</div>
<form method="post" action="#">
<?php
include_once 'partials/__prev-next-btn.php';
include_once 'partials/__footer.php';
?>
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    # code...
    header("Location:$nextPage");
}
ob_end_flush();
?>
</section>


</body>
</html>