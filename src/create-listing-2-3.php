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
    <form method="post" action="#">

        <br>
        <section class=" p-6">
            <div class=" max-w-3xl mx-auto">
                <h1 class="text-4xl font-bold">Add some photo of your place</h1>
                <p>Upload 5 photos to get started. You can always add more or modify them later.

                </p>

            </div>
        </section>

        <?php
        include_once 'partials/__prev-next-btn.php';
        ?>
    </form>

    <br>
    <br>
    <?php
    include_once 'partials/__footer.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        # code...
        header("Location:$nextPage");
    }
    ob_end_flush();

    ?>

</body>

</html>