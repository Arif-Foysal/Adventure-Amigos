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

    <!-- 
<h2>How many guests</h2>
<h2>How many bedrooms</h2>
<h2>What kind of bathrooms</h2>
<h3>Who else might be there</h3> -->
    <form action="" method="post">
        <section class="p-6">
            <div class="max-w-2xl mx-auto">
                <h1 class="text-4xl font-bold">How many people can stay there?</h1>
                <br>
                <div class="flex justify-between items-center p-3">
                    <div class="text-2xl font-medium">Guests</div>
                    <div class="flex items-center space-x-4">
                        <button type="button" id="decrementGuests"
                            class="bg-gray-200 text-gray-700 font-bold py-2 px-4 rounded-full hover:bg-gray-300 focus:outline-none">-</button>

                        <span id="guestCount" class="text-lg font-semibold">1</span>

                        <button type="button" id="incrementGuests"
                            class="bg-gray-200 text-gray-700 font-bold py-2 px-4 rounded-full hover:bg-gray-300 focus:outline-none">+</button>
                    </div>
                </div>
                <hr>
                <div class="flex justify-between items-center p-3">
                    <div class="text-2xl font-medium">Bedrooms</div>
                    <div class="flex items-center space-x-4">
                        <button type="button" id="decrementBedrooms"
                            class="bg-gray-200 text-gray-700 font-bold py-2 px-4 rounded-full hover:bg-gray-300 focus:outline-none">-</button>

                        <span id="bedroomCount" class="text-lg font-semibold">1</span>

                        <button type="button" id="incrementBedrooms"
                            class="bg-gray-200 text-gray-700 font-bold py-2 px-4 rounded-full hover:bg-gray-300 focus:outline-none">+</button>
                    </div>
                </div>
                <hr>
                <div class="flex justify-between items-center p-3">
                    <div class="text-2xl font-medium">Beds</div>
                    <div class="flex items-center space-x-4">
                        <button type="button" id="decrementBeds"
                            class="bg-gray-200 text-gray-700 font-bold py-2 px-4 rounded-full hover:bg-gray-300 focus:outline-none">-</button>

                        <span id="bedCount" class="text-lg font-semibold">1</span>

                        <button type="button" id="incrementBeds"
                            class="bg-gray-200 text-gray-700 font-bold py-2 px-4 rounded-full hover:bg-gray-300 focus:outline-none">+</button>
                    </div>
                </div>
                <hr>
                <div class="p-3">
                    <p class="text-2xl font-medium pb-2">Does every bedroom have a lock?</p>
                    <div class="flex items-center gap-2">

                        <input type="radio" id="Yes" name="lock" value="Yes">
                        <label for="Yes" class="text-lg font-medium">Yes</label>
                    </div>
                    <div class="flex items-center gap-2">
                        <input type="radio" id="No" name="lock" value="No" checked>
                        <label for="No" class="text-lg font-medium">No</label>
                    </div>
                </div>
                <hr>
            </div>
        </section>


        <?php
        include_once 'partials/__prev-next-btn.php';
        include_once 'partials/__footer.php';

        //form validation
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            header("Location:$nextPage");
            exit();
        }
        ob_end_flush();

        ?>
    </form>


    <script src="js/guest-counter.js"></script>

    <script>


document.getElementById("next").addEventListener("click", function(event) {
      console.log("clicked");
      event.preventDefault();  // Prevent form submission

      // Get the values of input fields
      let guestCnt = document.getElementById('guestCount').textContent;
let bedroomCnt = document.getElementById('bedroomCount').textContent;
let bedCnt = document.getElementById('bedCount').textContent;
let lock = document.querySelector('input[name="lock"]:checked');

      // Construct the API URL
      const apiUrl = `../src/api/set-room-details.php?guests=${guestCnt}&bedrooms=${bedroomCnt}&beds=${bedCnt}&lock_availability=${lock.value}`;

      // Perform the API call using fetch
      fetch(apiUrl)
          .then(response => {
              if (!response.ok) {
                  throw new Error("Network response was not ok");
              }
              return response.json();
          })
          .then(data => {
              console.log("API response:", data);

              // Redirect to the next page after successful API response
              window.location.href = "create-listing-2-1.php";
          })
          .catch(error => {
              console.error("There was a problem with the fetch operation:", error);
          });
  });





    </script>
</body>

</html>