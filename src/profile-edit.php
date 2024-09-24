<?php
require_once 'partials/__dbconnect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit profile | Amigos</title>
    <link rel="icon" type="image/x-icon" href="../images/fav.png">
    <link rel="stylesheet" href="output.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <?php
    include_once 'partials/__nav.php';
    ?>
    <section class=" p-6">
        <div class="flex justify-between gap-8 max-w-5xl mx-auto ">
            
            <section class=" w-full md:w-3/5">
                <h1 class="text-3xl font-semibold pb-4 pt-4">Personal Information</h1>
                <div class="text-lg mt-4 mb-4">
                    <div class="flex justify-between pb-2 font-semibold">
                        <p>Name</p>
                        <a id="username-edit-btn" onclick="toggleVisibility('username-edit','username')"
                            class="flex items-center border-b-2 border-transparent hover:border-black hover:border-b-2 h-6">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-pen" viewBox="0 0 16 16">
                                <path
                                    d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001m-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708z" />
                            </svg>
                            &nbsp;
                            <p class="text-md font-semibold text-black">Edit</p>
                        </a>
                    </div>
                    <p id="username"></p>
                    <div id="username-edit" class="hidden">
                        <input id="username-input" class="rounded-lg" type="text">
                        
                        <div class="pt-1">
                        <button type="button" class="focus:outline-none text-white bg-green-600 hover:bg-green-500 focus:ring-4 focus:ring-green-300 font-semibold rounded-lg text-sm px-5 py-2.5 me-2 mb-2 ">Update</button>
                        <button onclick="toggleVisibility('username-edit','username')" type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 ">Cancel</button>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="text-lg mt-4 mb-4">
                    <div class="flex justify-between pb-2 font-semibold">
                        <p>Email</p>

                        <a onclick="toggleVisibility('email-edit','email')"
                            class="flex items-center border-b-2 border-transparent hover:border-black hover:border-b-2 h-6">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-pen" viewBox="0 0 16 16">
                                <path
                                    d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001m-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708z" />
                            </svg>
                            &nbsp;
                            <p class="text-md font-semibold text-black">Edit</p>
                        </a>
                    </div>
                    <p id="email"></p>
                    <div id="email-edit" class="hidden">
                        <input id="email-input" class="rounded-lg" type="text">
                        
                        <div class="pt-1">
                        <button type="button" class="focus:outline-none text-white bg-green-600 hover:bg-green-500 focus:ring-4 focus:ring-green-300 font-semibold rounded-lg text-sm px-5 py-2.5 me-2 mb-2 ">Update</button>
                        <button onclick="toggleVisibility('email-edit','email')" type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 ">Cancel</button>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="text-lg mt-4 mb-4">
                    <div class="flex justify-between pb-2 font-semibold">
                        <p>Phone</p>
                        <a onclick="toggleVisibility('phone-edit','phone')"
                            class="flex items-center border-b-2 border-transparent hover:border-black hover:border-b-2 h-6">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-pen" viewBox="0 0 16 16">
                                <path
                                    d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001m-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708z" />
                            </svg>
                            &nbsp;
                            <p class="text-md font-semibold text-black">Edit</p>
                        </a>
                    </div>
                    <p id="phone"></p>
                    <div id="phone-edit" class="hidden">
                        <input id="phone-input" class="rounded-lg" type="text">
                        
                        <div class="pt-1">
                        <button type="button" class="focus:outline-none text-white bg-green-600 hover:bg-green-500 focus:ring-4 focus:ring-green-300 font-semibold rounded-lg text-sm px-5 py-2.5 me-2 mb-2 ">Update</button>
                        <button onclick="toggleVisibility('phone-edit','phone')" type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 ">Cancel</button>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="text-lg mt-4 mb-4">
                    <div class="flex justify-between pb-2 font-semibold">
                        <p>National ID</p>
                        <a href="profile-edit.php"
                            class="flex items-center border-b-2 border-transparent hover:border-black hover:border-b-2 h-6">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2"/>
</svg>
                            &nbsp;
                            <p class="text-md font-semibold text-black">Add</p>
                        </a>
                    </div>
                    <p>Not provided</p>
                </div>
                <hr>
                <div class="text-lg mt-4 mb-4">
                    <div class="flex justify-between pb-2 font-semibold">
                        <p>Address</p>
                        <a href="profile-edit.php"
                            class="flex items-center border-b-2 border-transparent hover:border-black hover:border-b-2 h-6">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-pen" viewBox="0 0 16 16">
                                <path
                                    d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001m-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708z" />
                            </svg>
                            &nbsp;
                            <p class="text-md font-semibold text-black">Edit</p>
                        </a>
                    </div>
                    <p>Dhaka, Bangladesh</p>
                </div>
                <hr>
                <div class="text-lg mt-4 mb-4">
                    <div class="flex justify-between pb-2 font-semibold">
                        <p>Emergency contact</p>
                        <a href="profile-edit.php"
                            class="flex items-center border-b-2 border-transparent hover:border-black hover:border-b-2 h-6">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-pen" viewBox="0 0 16 16">
                                <path
                                    d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001m-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708z" />
                            </svg>
                            &nbsp;
                            <p class="text-md font-semibold text-black">Edit</p>
                        </a>
                    </div>
                    <p>Not provided</p>
                </div>
                <hr>
            </section>
            <section class="hidden md:block pt-20">
                <div class="border border-black rounded-lg p-4 m-2 w-80 hover:bg-neutral-100">

                    <a href="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        class="bi bi-shield-check" viewBox="0 0 16 16">
                        <path
                        d="M5.338 1.59a61 61 0 0 0-2.837.856.48.48 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.7 10.7 0 0 0 2.287 2.233c.346.244.652.42.893.533q.18.085.293.118a1 1 0 0 0 .101.025 1 1 0 0 0 .1-.025q.114-.034.294-.118c.24-.113.547-.29.893-.533a10.7 10.7 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.8 11.8 0 0 1-2.517 2.453 7 7 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7 7 0 0 1-1.048-.625 11.8 11.8 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 63 63 0 0 1 5.072.56" />
                        <path
                        d="M10.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0" />
                    </svg>
                    
                    <h2 class="text-md font-semibold mt-3">Privacy and sharing</h2>
                    <p>Control who can see your information and activity</p>
                </a>
            </div>
            <br>
            <div class="border border-black rounded-lg p-4 m-2 w-80 hover:bg-neutral-100">

                    <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        class="bi bi-shield-lock" viewBox="0 0 16 16">
                        <path
                            d="M5.338 1.59a61 61 0 0 0-2.837.856.48.48 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.7 10.7 0 0 0 2.287 2.233c.346.244.652.42.893.533q.18.085.293.118a1 1 0 0 0 .101.025 1 1 0 0 0 .1-.025q.114-.034.294-.118c.24-.113.547-.29.893-.533a10.7 10.7 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.8 11.8 0 0 1-2.517 2.453 7 7 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7 7 0 0 1-1.048-.625 11.8 11.8 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 63 63 0 0 1 5.072.56" />
                        <path
                            d="M9.5 6.5a1.5 1.5 0 0 1-1 1.415l.385 1.99a.5.5 0 0 1-.491.595h-.788a.5.5 0 0 1-.49-.595l.384-1.99a1.5 1.5 0 1 1 2-1.415" />
                    </svg>
                    
                    <h2 class="text-md font-semibold mt-3">Login and security</h2>
                    <p>Update your passcode and secure your account</p>
                </a>
            </div>
            <br>
            <div class="flex text-md font-medium pl-2">

                <p>Go to</p> &nbsp;  &nbsp;<a href="account-settings.php"
                class="flex items-center border-b-2 border-black hover:border-transparent h-6 w-fit">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-gear" viewBox="0 0 16 16">
                            <path
                                d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492M5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0" />
                                <path
                                d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115z" />
                            </svg>
                            &nbsp;
                            <p class="text-md font-semibold text-black">Account Settings</p>
                        </a>
                    </div>
            </section>

        </div>
    </section>
<br>
<br>
<?php
include_once 'partials/__footer.php';
?>

<script>
// Define the API URL with user_id
const apiUrl = '../src/api/get-user.php';

// Fetch data from the API
fetch(apiUrl)
  .then(response => response.json())  // Parse the JSON response
  .then(data => {
    // Check if the API returned the user details
    if (data && data.user_id) {
      // Set the username as fname + " " + lname
      let name = data.fname + ' ' + data.lname;
      document.getElementById('username').textContent = name;
      document.getElementById('username-input').value = name;
        
      // Set the email
      document.getElementById('email').textContent = data.email;
      document.getElementById('email-input').value = data.email;

      // Set the phone (check if it's null, and show a default if necessary)
      document.getElementById('phone').textContent = data.phone ? data.phone : 'No phone number';
      document.getElementById('phone-input').value = data.phone ? data.phone : 'No phone number';
      
    } else {
      // Handle the case when no user is found (optional)
      console.error('User not found or API error');
    }
  })
  .catch(error => console.error('Error fetching user details:', error));
</script>


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