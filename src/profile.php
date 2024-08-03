<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Profile</title>
    <link rel="stylesheet" href="output.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="js/dp-modal.js" defer></script>
</head>

<body>

    <?php
    include_once "partials/__nav.php";
    ?>

    <div class="overflow-hidden">
        <!-- Cover Photo -->
        <!-- <div class="relative">
            <img src="../images/cover.jpg" alt="Cover Photo" class="bg-green-400 w-full h-48 object-cover"> -->



        <!-- <button class="absolute top-32 left-4">
                <img src="profile-photo.jpg" alt="Profile Photo" class="w-32 h-32 rounded-full border-4 border-white object-cover ">
            </button>
            
        </div> -->
        <div class="bg-slate-100 flex justify-center items-end w-full h-48">
            <div class="relative w-full h-48">
                <img src="../images/cover.jpg" alt="Cover Photo" class="w-full h-48 object-cover">
                <div
                id="dp"
                 class="absolute -bottom-16 left-4 cursor-pointer">
                    <div class="relative w-32 h-32">
                        <img src="profile-photo.jpg" alt="Profile Photo"
                            
                            class="w-32 h-32 rounded-full border-4 border-white object-cover">
                        <div id="overlay"
                            class="absolute hidden justify-center items-center text-white inset-0 bg-black bg-opacity-50 rounded-full">
                            <p>Upload new</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- User Info and Statistics -->
        <div class="px-6 h-56  md:h-40  py-4 md:flex md:items-end md:justify-between bg-slate-100">
            <div class=" md:mt-0 ml-1 md:ml-1 flex justify-between ">
                <section class="pt-14 md:pt-12">
                    <h1 class="text-xl font-bold">Arif Foysal</h1>
                    <p class="text-gray-600">Dhaka, Bangladesh</p>
                </section>
                <section class="flex gap-3 md:hidden">
                    <a href="discover.php"
                        class="flex items-center border-b-2 border-transparent hover:border-black hover:border-b-2 h-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-pen" viewBox="0 0 16 16">
                            <path
                                d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001m-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708z" />
                        </svg>
                        &nbsp;
                        <p class="text-md font-semibold text-black">Edit profile</p>
                    </a>

                    <a href="discover.php"
                        class="flex items-center border-b-2 border-transparent hover:border-black hover:border-b-2 h-6">
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
                </section>
            </div>
            <div class="mt-4 md:pl-6 md:mt-0 md:w-full flex justify-between space-x-6 self-start">
                <!-- <div class="mt-4 flex justify-end bg-green-700 self-start"> -->
                    <section class = "flex gap-2">

                        <div class="text-center">
                            <h2 class="text-lg font-semibold">Contributions</h2>
                            <p class="text-gray-700">144</p>
                        </div>
                        <div class="text-center">
                            <h2 class="text-lg font-semibold">Followers</h2>
                            <p class="text-gray-700">13</p>
                        </div>
                        <div class="text-center">
                            <h2 class="text-lg font-semibold">Following</h2>
                            <p class="text-gray-700">3</p>
                        </div>
                    </section>
                <section class="hidden md:flex md:gap-3 pl-2">
                    <a href="discover.php"
                        class="flex items-center border-b-2 border-gray-700 hover:border-black hover:border-b-2 h-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-pen" viewBox="0 0 16 16">
                            <path
                                d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001m-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708z" />
                        </svg>
                        &nbsp;
                        <p class="text-md font-semibold text-black">
                            Edit profile</p>
                    </a>

                    <a href="discover.php"
                        class="flex items-center border-b-2 border-gray-700 hover:border-black hover:border-b-2 h-6">
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
                </section>
            </div>
        </div>
    </div>
    <hr>
<!-- DP dpModal down below -->
<div id="dpModal" class="fixed hidden inset-0 items-center justify-center bg-black bg-opacity-50">
        <div class="bg-white p-8 rounded shadow-lg">
        <section class="flex justify-between items-center pb-8">
            <!-- Header -->
                <h1 class=" text-xl font-semibold">Upload a new profile picture</h1>
                <button id="closedpModal">
                <svg class="rounded-sm hover:text-red-600 hover:bg-gray-50" xmlns="http://www.w3.org/2000/svg" width="30"
                height="30" fill="currentColor" class="bi bi-x-square" viewBox="0 0 16 16">
                <path
                    d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                <path
                    d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708" />
                </svg>
            </button>
            </section>

            <form id="uploadForm" enctype="multipart/form-data">
                <input type="file" id="imageInput" name="image" class="mb-4">

                    

                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Save</button>
            </form>
        </div>
    </div>
    <section class="flex flex-col md:flex-row">
        <div class=" md:w-1/3 p-4 border-r-2 border-gray-200">
        <h1 class="text-2xl font-semibold">Achievements</h1>
            <div class="p-4 flex flex-wrap gap-3">
                <!-- Achievements -->
                 <img src="../images/badges/1.svg" width="60" alt="">
                 <img src="../images/badges/2.png" width="60" alt="">
                 <img src="../images/badges/3.png" width="60" alt="">
                 <img src="../images/badges/4.png" width="60" alt="">
            </div>
            <section>
                <!-- editable Interests -->
                 
                <div  class="flex items-end justify-between">
                     <h1 class="text-2xl font-semibold">Interests</h1>
                     <button href="discover.php"
                     class=" flex items-center border-b-2 border-transparent hover:border-black hover:border-b-2 h-6">
                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                     class="bi bi-pen" viewBox="0 0 16 16">
                     <path
                     d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001m-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708z" />
                    </svg>
                    &nbsp;
                    <p class="text-md font-semibold text-black">Edit Interests</p>
                </button>
                </div>
                <div class="p-4 flex flex-wrap gap-3">
                    <!-- interests pills -->
                    <div class="flex items-center gap-2 pt-2 pb-2 pl-3 pr-3 border-2 border-neutral-600 rounded-3xl bg-neutral-200 cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-buildings" viewBox="0 0 16 16">
                        <path d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022M6 8.694 1 10.36V15h5zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5z"/>
                        <path d="M2 11h1v1H2zm2 0h1v1H4zm-2 2h1v1H2zm2 0h1v1H4zm4-4h1v1H8zm2 0h1v1h-1zm-2 2h1v1H8zm2 0h1v1h-1zm2-2h1v1h-1zm0 2h1v1h-1zM8 7h1v1H8zm2 0h1v1h-1zm2 0h1v1h-1zM8 5h1v1H8zm2 0h1v1h-1zm2 0h1v1h-1zm0-2h1v1h-1z"/>
                        </svg>
                        <p>Architecture</p>
                    </div>

                    <div class="flex items-center gap-2 pt-2 pb-2 pl-3 pr-3 border-2 border-neutral-600 rounded-3xl bg-neutral-200 cursor-pointer">
                        <img src="../images/interests/museum2.png" alt="" width="18">
                        <p>Museums</p>
                    </div>

                    <div class="flex items-center gap-2 pt-2 pb-2 pl-3 pr-3 border-2 border-neutral-600 rounded-3xl bg-neutral-200 cursor-pointer">
                        <img src="../images/interests/history.png" alt="" width="16">
                        <p>History</p>
                    </div>

                    <div class="flex items-center gap-2 pt-2 pb-2 pl-3 pr-3 border-2 border-neutral-600 rounded-3xl bg-neutral-200 cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-music-note-beamed" viewBox="0 0 16 16">
                    <path d="M6 13c0 1.105-1.12 2-2.5 2S1 14.105 1 13s1.12-2 2.5-2 2.5.896 2.5 2m9-2c0 1.105-1.12 2-2.5 2s-2.5-.895-2.5-2 1.12-2 2.5-2 2.5.895 2.5 2"/>
                    <path fill-rule="evenodd" d="M14 11V2h1v9zM6 3v10H5V3z"/>
                    <path d="M5 2.905a1 1 0 0 1 .9-.995l8-.8a1 1 0 0 1 1.1.995V3L5 4z"/>
                    </svg>
                        <p>Music</p>
                    </div>

                    <div class="flex items-center gap-2 pt-2 pb-2 pl-3 pr-3 border-2 border-neutral-600 rounded-3xl bg-neutral-200 cursor-pointer">
                        <img src="../images/interests/food2.png" alt="" width="16">
                        <p>Food</p>
                    </div>


                    
                </div>
            </section>
        </div>
        <div class=" md:w-2/3 p-4">
        <h1 class="text-2xl font-semibold">Trips</h1>
        <br>
            <div>
                <!-- trips -->
            </div>
        <h1 class="text-2xl font-semibold">Photos</h1>
        <br>
            <div>
                <!-- Photos -->
            </div>
        <h1 class="text-2xl font-semibold">Reviews</h1>
        <br>
            <div>
                <!-- reviews -->
            </div>
        </div>
    </section>

<?php
    include_once "partials/__footer.php";
?>
</body>

</html>
