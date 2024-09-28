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


    <form action="#" method="post">

        <section class=" p-6">
            <div class=" max-w-2xl mx-auto">
                <div class= "flex items-end gap-2">
                    <h1 class="text-4xl font-bold">Now set your price </h1>
<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8m5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0"/>
  <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195z"/>
  <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083q.088-.517.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1z"/>
  <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 6 6 0 0 1 3.13-1.567"/>
</svg>
                </div>
                <h1 class="text-2xl font-medium text-slate-500">You can change it anytime </h1>
<br><br>
                <div class="flex items-end">

                    <h1 class="text-9xl font-extrabold flex text-slate-800"><p>$</p><p id="price">19</p></h1>
                    <input id="price-edit" class="h-28 w-72 hidden text-9xl" type="text">                        
                    <button id="edit" type="button" onclick="toggleVisibility('price-edit','price')">

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
    document.getElementById("price-edit").value =document.getElementById("price").innerText;

    // Function to toggle the visibility of an element using Tailwind CSS classes
        function toggleVisibility(elementId, valueId) {
        const element = document.getElementById(elementId);
        const val = document.getElementById(valueId);
 
        // Toggle the 'hidden' class to show or hide the element
        element.classList.remove('hidden');
        val.classList.add('hidden');
        }


//send to api
document.getElementById("next").addEventListener("click", function(event) {
event.preventDefault();  // Prevent default form submission


const price =document.getElementById("price-edit").value;

const data = {
    price:price
};
console.log(price);

fetch('api/set-price.php', {    
        method: 'POST',  // POST request
        headers: {
            'Content-Type': 'application/json',  // Set content type to JSON
        },
        body: JSON.stringify(data)  // Send the JSON data as the body of the request
    })
    .then(response => response.json())  // Parse the response as JSON
    .then(data => {
        console.log('Success:', data);  // Handle success response from the server
        window.location.href = "create-listing-3-1.php";

    })
    .catch((error) => {
        console.error('Error:', error);  // Handle any errors
    });





});

</script>


</body>

</html>