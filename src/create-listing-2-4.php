<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Listing | Amigos</title>
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
                    <textarea id="name" class="border-2 w-full h-18 p-3 rounded-lg resize-none overflow-y-auto"
                        placeholder="Put your title here"></textarea>
                        <br><br><br>
                        <h1 class="text-4xl font-bold">Create your description</h1>
                        <textarea id="description" class="border-2 w-full h-28 p-3 rounded-lg resize-none overflow-y-auto"
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
<script>
    document.getElementById("next").addEventListener("click", function(event) {
    event.preventDefault();  // Prevent default form submission

    // Get values from the textareas
    const title = document.getElementById("name").value;
    const description = document.getElementById("description").value;

    // Create a JSON object from the input values
    const data = {
        title: title,
        description: description
    };

    console.log(data);  // Log the JSON object (for debugging)

    // Send the JSON data to the API
    fetch('api/set-description.php', {
        method: 'POST',  // POST request
        headers: {
            'Content-Type': 'application/json',  // Set content type to JSON
        },
        body: JSON.stringify(data)  // Send the JSON data as the body of the request
    })
    .then(response => response.json())  // Parse the response as JSON
    .then(data => {
        console.log('Success:', data);  // Handle success response from the server
        window.location.href = "create-listing-2-5.php";

    })
    .catch((error) => {
        console.error('Error:', error);  // Handle any errors
    });
});


</script>


</body>


</html>