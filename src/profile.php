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
                <div id="cover">
                    <img id="coverp" src="../images/cover.jpg" alt="Cover Photo" class="w-full h-48 object-cover">
                    <button id="coverBtn" class="hidden absolute -bottom-0 right-8 text-black font-semibold mb-3 p-2 bg-cyan-400 rounded-md hover:bg-cyan-300">
                    Change Cover
                </button>
                </div>
                <div id="dp" class="absolute -bottom-16 left-4 cursor-pointer">
                    <div class="relative w-32 h-32">
                        <img src="profile-photo.JPG" alt="Profile Photo"
                            class="w-32 h-32 rounded-full border-4 border-white object-cover">
                        <div id="overlay"
                            class="absolute hidden justify-center items-center text-white inset-0 bg-black bg-opacity-50 rounded-full">
                            <p>Upload new</p>
                        </div>
                    </div>
                </div>
                <!-- Change cover btn -->
            </div>
        </div>

        <!-- User Info and Statistics -->
        <div class="pl-6 pr-3 md:px-6 h-56  md:h-40  py-4 md:flex md:items-end md:justify-between bg-slate-100">
            <div class=" md:mt-0 ml-1 md:ml-1 flex justify-between ">
                <section class="pt-14 md:pt-12">
                    <h1 class="text-xl font-bold">Arif Foysal</h1>
                    <p class="text-gray-600">Dhaka, Bangladesh</p>
                </section>
                <section class=" flex justify-end space-x-2 md:hidden">
                    <a href="profile-edit.php"
                        class="flex items-center border-b-2 border-transparent hover:border-black hover:border-b-2 h-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-pen" viewBox="0 0 16 16">
                            <path
                                d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001m-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708z" />
                        </svg>
                        &nbsp;
                        <p class="text-md font-semibold text-black">Edit profile</p>
                    </a>

                    <a href="account-settings.php"
                        class="flex items-center  border-b-2 border-transparent hover:border-black hover:border-b-2 h-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-gear" viewBox="0 0 16 16">
                            <path
                                d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492M5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0" />
                            <path
                                d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115z" />
                        </svg>
                        &nbsp;
                        <p class="text-md font-semibold text-black">Settings</p>
                    </a>
                </section>
            </div>
            <div class="mt-4 md:pl-6 md:mt-0 md:w-full flex justify-between space-x-6 self-start">
                <!-- <div class="mt-4 flex justify-end bg-green-700 self-start"> -->
                <section class="flex gap-2">

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
                    <a href="profile-edit.php"
                        class="flex items-center border-b-2 border-black hover:border-transparent h-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-pen" viewBox="0 0 16 16">
                            <path
                                d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001m-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708z" />
                        </svg>
                        &nbsp;
                        <p class="text-md font-semibold text-black">
                            Edit profile</p>
                    </a>

                    <a href="account-settings.php"
                        class="flex items-center border-b-2 border-black hover:border-transparent h-6">
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
                    <svg class="rounded-sm hover:text-red-600 hover:bg-gray-50" xmlns="http://www.w3.org/2000/svg"
                        width="30" height="30" fill="currentColor" class="bi bi-x-square" viewBox="0 0 16 16">
                        <path
                            d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                        <path
                            d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708" />
                    </svg>
                </button>
            </section>

            <form id="uploadForm" class="flex items-center" enctype="multipart/form-data">
                <input type="file" id="imageInput" name="image" class="">


                <button type="submit"
                    class="flex items-center gap-2 bg-gray-100 text-black font-semibold px-4 py-2 rounded border-2 border-black hover:bg-neutral-900 hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-upload" viewBox="0 0 16 16">
                        <path
                            d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5" />
                        <path
                            d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708z" />
                    </svg>
                    <p>Upload</p>
                </button>

            </form>
        </div>
    </div>
    <section class="flex flex-col md:flex-row">
        <div class=" md:w-1/3 p-6 border-r-2 border-gray-200">
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

                <div class="flex items-end justify-between">
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
                    <div
                        class="flex items-center gap-2 pt-2 pb-2 pl-3 pr-3 border-2 border-neutral-600 rounded-3xl bg-neutral-200 cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-buildings" viewBox="0 0 16 16">
                            <path
                                d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022M6 8.694 1 10.36V15h5zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5z" />
                            <path
                                d="M2 11h1v1H2zm2 0h1v1H4zm-2 2h1v1H2zm2 0h1v1H4zm4-4h1v1H8zm2 0h1v1h-1zm-2 2h1v1H8zm2 0h1v1h-1zm2-2h1v1h-1zm0 2h1v1h-1zM8 7h1v1H8zm2 0h1v1h-1zm2 0h1v1h-1zM8 5h1v1H8zm2 0h1v1h-1zm2 0h1v1h-1zm0-2h1v1h-1z" />
                        </svg>
                        <p>Architecture</p>
                    </div>

                    <div
                        class="flex items-center gap-2 pt-2 pb-2 pl-3 pr-3 border-2 border-neutral-600 rounded-3xl bg-neutral-200 cursor-pointer">
                        <img src="../images/interests/museum2.png" alt="" width="20">
                        <p>Museums</p>
                    </div>

                    <div
                        class="flex items-center gap-2 pt-2 pb-2 pl-3 pr-3 border-2 border-neutral-600 rounded-3xl bg-neutral-200 cursor-pointer">
                        <img src="../images/interests/history.png" alt="" width="20">
                        <p>History</p>
                    </div>

                    <div
                        class="flex items-center gap-2 pt-2 pb-2 pl-3 pr-3 border-2 border-neutral-600 rounded-3xl bg-neutral-200 cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-music-note-beamed" viewBox="0 0 16 16">
                            <path
                                d="M6 13c0 1.105-1.12 2-2.5 2S1 14.105 1 13s1.12-2 2.5-2 2.5.896 2.5 2m9-2c0 1.105-1.12 2-2.5 2s-2.5-.895-2.5-2 1.12-2 2.5-2 2.5.895 2.5 2" />
                            <path fill-rule="evenodd" d="M14 11V2h1v9zM6 3v10H5V3z" />
                            <path d="M5 2.905a1 1 0 0 1 .9-.995l8-.8a1 1 0 0 1 1.1.995V3L5 4z" />
                        </svg>
                        <p>Music</p>
                    </div>

                    <div
                        class="flex items-center gap-2 pt-2 pb-2 pl-3 pr-3 border-2 border-neutral-600 rounded-3xl bg-neutral-200 cursor-pointer">
                        <img src="../images/interests/food.svg" alt="" width="20">
                        <p>Food</p>
                    </div>



                </div>
            </section>
        </div>
        <div class=" md:w-2/3 p-6 ">
            <h1 class="text-2xl font-semibold">Posts</h1>
            <br>
            <div>
                <!-- trips -->
            </div>
            <h1 class="text-2xl font-semibold">Photos</h1>
            <br>

            <!-- Photos -->


            <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                <div class="group">
                    <img class="h-auto max-w-full rounded-lg transition duration-200 group-hover:scale-105 group-hover:cursor-pointer"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="">
                </div>
                <div class="group">
                    <img class="h-auto max-w-full rounded-lg transition duration-200 group-hover:scale-105 group-hover:cursor-pointer"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="">
                </div>
                <div class="group">
                    <img class="h-auto max-w-full rounded-lg transition duration-200 group-hover:scale-105 group-hover:cursor-pointer"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" alt="">
                </div>
                <div class="group">
                    <img class="h-auto max-w-full rounded-lg transition duration-200 group-hover:scale-105 group-hover:cursor-pointer"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" alt="">
                </div>
                <div class="group">
                    <img class="h-auto max-w-full rounded-lg transition duration-200 group-hover:scale-105 group-hover:cursor-pointer"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg" alt="">
                </div>
                <div class="group">
                    <img class="h-auto max-w-full rounded-lg transition duration-200 group-hover:scale-105 group-hover:cursor-pointer"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-5.jpg" alt="">
                </div>
                <div class="group">
                    <img class="h-auto max-w-full rounded-lg transition duration-200 group-hover:scale-105 group-hover:cursor-pointer"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-6.jpg" alt="">
                </div>
                <div class="group">
                    <img class="h-auto max-w-full rounded-lg transition duration-200 group-hover:scale-105 group-hover:cursor-pointer"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-7.jpg" alt="">
                </div>
                <div class="group">
                    <img class="h-auto max-w-full rounded-lg transition duration-200 group-hover:scale-105 group-hover:cursor-pointer"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-8.jpg" alt="">
                </div>
                <div class="group">
                    <img class="h-auto max-w-full rounded-lg transition duration-200 group-hover:scale-105 group-hover:cursor-pointer"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-9.jpg" alt="">
                </div>
                <div class="group">
                    <img class="h-auto max-w-full rounded-lg transition duration-200 group-hover:scale-105 group-hover:cursor-pointer"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-10.jpg" alt="">
                </div>
                <div class="group">
                    <img class="h-auto max-w-full rounded-lg transition duration-200 group-hover:scale-105 group-hover:cursor-pointer"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-11.jpg" alt="">
                </div>
            </div>
                
                <a href="discover.php"
                        class="flex items-center border-b-2 border-black hover:border-transparent w-20">
                        <p class="text-md font-semibold text-black">See more</p>
                </a>

            <h1 class="text-2xl font-semibold pt-4">Reviews</h1>
            <br>
            <div class="md:w-3/4">
                <!-- reviews -->
                <div id="gallery" class="relative w-full pb-4" data-carousel="">
                    <!-- Carousel wrapper -->
                    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                        <!-- Item 1 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg"
                                class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="">
                        </div>
                        <!-- Item 2 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                            <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg"
                                class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="">
                        </div>
                        <!-- Item 3 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg"
                                class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="">
                        </div>
                        <!-- Item 4 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg"
                                class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="">
                        </div>
                        <!-- Item 5 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-5.jpg"
                                class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="">
                        </div>
                    </div>
                    <!-- Slider controls -->
                    <button type="button"
                        class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-prev>
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-gray-800/30 group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-gray-800 rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 1 1 5l4 4" />
                            </svg>
                            <span class="sr-only">Previous</span>
                        </span>
                    </button>
                    <button type="button"
                        class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-next>
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-gray-800/30 group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-gray-800 rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>

                

<div class="flex items-center">
    <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
    </svg>
    <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
    </svg>
    <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
    </svg>
    <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
    </svg>
    <svg class="w-4 h-4 text-gray-300 me-1 dark:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
    </svg>
    <p class="ms-1 text-sm font-medium text-gray-500 dark:text-gray-400">4.95</p>
    <p class="ms-1 text-sm font-medium text-gray-500 dark:text-gray-400">out of</p>
    <p class="ms-1 text-sm font-medium text-gray-500 dark:text-gray-400">5</p>
</div>

<h1 class="text-xl font-semibold">Good place for vacation</h1>
<p class="text-lg">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus explicabo, voluptates hic veniam beatae inventore vitae eaque velit deleniti perspiciatis in nulla reprehenderit esse aliquam cupiditate qui alias error nihil?
</p>
            </div>
        </div>
    </section>

    <?php
    include_once "partials/__footer.php";
    ?>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
    <script src="js/dp-modal.js"></script>
</body>

</html>