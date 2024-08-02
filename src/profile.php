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
</head>

<body>

    <?php
    include_once "partials/__nav.php"
        ?>


    <div class="shadow-md overflow-hidden">
        <!-- Cover Photo -->
        <!-- <div class="relative">
            <img src="../images/cover.jpg" alt="Cover Photo" class="bg-green-400 w-full h-48 object-cover"> -->



        <!-- <button class="absolute top-32 left-4">
                <img src="profile-photo.jpg" alt="Profile Photo" class="w-32 h-32 rounded-full border-4 border-white object-cover ">
            </button>
            
        </div> -->
        <div class="bg-green-300 flex justify-center items-end w-full h-48">
            <div class="relative w-full h-48">
                <img src="../images/cover.jpg" alt="Cover Photo" class="w-full h-48 object-cover">
                <div class="absolute -bottom-16 left-4">
                    <div class="relative w-32 h-32">
                        <img src="profile-photo.jpg" alt="Profile Photo"
                            class="w-32 h-32 rounded-full border-4 border-white object-cover">
                        <div
                            class="absolute flex justify-center items-center text-white inset-0 bg-black bg-opacity-50 rounded-full">
                            <p>Upload new</p>
                        </div> <!-- Dark overlay -->
                    </div>
                </div>
            </div>
        </div>


        <!-- User Info and Statistics -->
        <div class="px-6 h-56  md:h-36  py-4 md:flex md:items-end">
            <div class=" md:mt-0 ml-3 md:ml-1 flex justify-between">
                <section class="pt-12">
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
            <div class="mt-4 md:mt-0 md:ml-auto flex space-x-6 self-start">
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
</body>

</html>