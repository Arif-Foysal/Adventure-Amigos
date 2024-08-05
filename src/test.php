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
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="js/dp-modal.js" defer></script>
</head>

<body>
    <?php include_once "partials/__nav.php"; ?>

    <div class="overflow-hidden">
        <!-- Cover Photo -->
        <div class="bg-slate-100 flex justify-center items-end w-full h-48">
            <div class="relative w-full h-48">
                <div id="cover">
                    <img src="../images/cover.jpg" alt="Cover Photo" class="w-full h-48 object-cover">
                </div>
                <div id="dp" class="absolute -bottom-16 left-4 cursor-pointer">
                    <div class="relative w-32 h-32">
                        <img src="profile-photo.jpg" alt="Profile Photo" class="w-32 h-32 rounded-full border-4 border-white object-cover">
                        <div id="overlay" class="absolute hidden justify-center items-center text-white inset-0 bg-black bg-opacity-50 rounded-full">
                            <p>Upload new</p>
                        </div>
                    </div>
                </div>
                <!-- Change cover button -->
                <button id="coverBtn" class="hidden absolute -bottom-0 right-8 text-black font-semibold mb-3 p-2 bg-cyan-400 rounded-md hover:bg-cyan-300">
                    Change Cover
                </button>
            </div>
        </div>

        <!-- User Info and Statistics -->
        <div class="px-6 h-56 md:h-40 py-4 md:flex md:items-end md:justify-between bg-slate-100">
            <div class="md:mt-0 ml-1 md:ml-1 flex justify-between">
                <section class="pt-14 md:pt-12">
                    <h1 class="text-xl font-bold">Arif Foysal</h1>
                    <p class="text-gray-600">Dhaka, Bangladesh</p>
                </section>
                <section class="flex gap-3 md:hidden">
                    <a href="discover.php" class="flex items-center border-b-2 border-transparent hover:border-black hover:border-b-2 h-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                            <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001m-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708z"/>
                        </svg>&nbsp;
                        <p class="text-md font-semibold text-black">Edit profile</p>
                    </a>
                    <a href="discover.php" class="flex items-center border-b-2 border-transparent hover:border-black hover:border-b-2 h-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                            <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492M5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0"/>
                            <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.115 2.692l.319.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.292-.159a1.873 1.873 0 0 0-2.692 1.115l-.094.319c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.693-1.115l-.291.16c-.764.415-1.6-.42-1.184-1.185l.159-.292a1.873 1.873 0 0 0-1.115-2.692l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094a1.873 1.873 0 0 0 1.115-2.693l-.16-.291c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                        </svg>&nbsp;
                        <p class="text-md font-semibold text-black">Settings</p>
                    </a>
                </section>
            </div>
            <div class="flex gap-3 md:mr-5 md:mt-10 md:items-center">
                <section class="flex flex-col text-center">
                    <h1 class="text-2xl font-extrabold text-black">21</h1>
                    <a href="discover.php" class="text-md font-semibold text-black">Contributions</a>
                </section>
                <section class="flex flex-col text-center">
                    <h1 class="text-2xl font-extrabold text-black">53</h1>
                    <a href="discover.php" class="text-md font-semibold text-black">Followers</a>
                </section>
                <section class="flex flex-col text-center">
                    <h1 class="text-2xl font-extrabold text-black">35</h1>
                    <a href="discover.php" class="text-md font-semibold text-black">Following</a>
                </section>
            </div>
        </div>

        <!-- Modal for uploading new profile picture -->
        <div id="dpModal" class="hidden fixed inset-0 z-50 flex items-center justify-center">
            <div class="fixed inset-0 bg-black bg-opacity-50"></div>
            <div class="bg-white p-4 rounded-lg shadow-lg z-10">
                <h2 class="text-xl font-bold mb-4">Upload New Profile Picture</h2>
                <form id="uploadForm" method="POST" enctype="multipart/form-data">
                    <input type="file" name="profilePicture" accept="image/*" required class="mb-4">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Upload</button>
                </form>
                <button id="closedpModal" class="absolute top-2 right-2 text-black">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <?php include_once "partials/__footer.php"; ?>
</body>
</html>
