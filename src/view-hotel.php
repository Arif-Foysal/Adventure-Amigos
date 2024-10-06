<?php
require_once 'partials/__dbconnect.php';
require_once 'partials/__session.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Stays | Amigos</title>
    <link rel="icon" type="image/x-icon" href="../images/fav.png">
    <link rel="stylesheet" href="output.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.css" />
    <script src="https://cdn.tailwindcss.com"></script>


    <style>
        .gallery-img {
            @apply w-full h-full object-cover;
        }

        .square {
            @apply w-full h-full;
            position: relative;
            /* z-index: -1; */
            padding-bottom: 100%;
            /* Aspect ratio 1:1 */
        }

        .square img {
            position: absolute;
            /* z-index: 0; */
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
    <style>
        #panorama {
            width: 100%;
            height: 600px;
        }

        #loading {
            display: none;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 10;
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            padding: 20px;
            border-radius: 5px;
        }

        #virtual-tour-container {
            position: relative;
        }

        #scene-info {
            position: absolute;
            bottom: 10px;
            left: 10px;
            background-color: rgba(255, 255, 255, 0.7);
            padding: 5px 10px;
            border-radius: 3px;
            font-size: 14px;
        }
    </style>

</head>

<body class="mb-24">
    <?php
    include_once "partials/__nav.php"
        ?>
    <section class=" p-6">
        <div class=" max-w-5xl mx-auto">
            <h1 id="name" class="text-3xl font-semibold pb-4"></h1>
            <div class="grid grid-cols-4 grid-rows-2 gap-2">
                <div class="col-span-2 row-span-2 square">
                    <img id="img1" src="../images/hotel/1.jpg" alt="Image 1" class="gallery-img rounded-l-xl">
                </div>
                <div class="square">
                    <img id="img2" src="../images/hotel/2.jpg" alt="Image 2" class="gallery-img">
                </div>
                <div class="square">
                    <img id="img3" src="../images/hotel/3.jpg" alt="Image 3" class="gallery-img rounded-tr-xl">
                </div>
                <div class="square">
                    <img id="img4" src="../images/hotel/4.jpg" alt="Image 4" class="gallery-img">
                </div>
                <div class="square relative">
                    <img id="img5" src="../images/hotel/5.jpg" alt="Image 5" class="gallery-img rounded-br-xl">
                    <a href="hotel-gallery.php" id="overlay"
                        class="absolute md:hidden flex justify-center items-center text-white inset-0 bg-black bg-opacity-50 rounded-br-xl">
                        <p class="text-lg">Show all</p>
                    </a>
                    <button id="photos"
                        class="absolute bottom-4 right-4 hidden md:flex gap-2 items-center bg-white rounded-lg pl-2 pr-2 pt-1 pb-1 text-lg font-normal border-2 border-gray-500 hover:bg-neutral-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-border-all" viewBox="0 0 16 16">
                            <path d="M0 0h16v16H0zm1 1v6.5h6.5V1zm7.5 0v6.5H15V1zM15 8.5H8.5V15H15zM7.5 15V8.5H1V15z" />
                        </svg>
                        <p>Show all</p>
                    </button>
                </div>
            </div>
            <section class="flex gap-1 items-center pt-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-geo-alt"
                    viewBox="0 0 16 16">
                    <path
                        d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10" />
                    <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                </svg>
                <h1 class="text-2xl font-semibold"><span id="city_name"></span>, <span id="country_name"></span></h1>
            </section>
            <h2 id="room_details" class="text-xl font-normal text-gray-500"><span id="guest"></span> guests, <span
                    id="bedroom"></span> bedrooms, <span id="bed"></span> beds <span id="vault"></span></h2>
            <br>
            <hr>
            <div class="flex p-2 gap-4">
                <div>
                    <img class="w-20 h-20 rounded-full object-cover" src="../uploads/66f83d1d90190.jpg" alt="">
                </div>
                <div class="text-xl font-medium flex flex-col justify-between">
                    <div>

                        <span>Hosted by </span><span id="host_name">mahin</span>
                    </div>
                    <div class="flex gap-3">
                        <button id="message" type="button"
                            class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-800 text-gray-800 hover:bg-gray-200 focus:outline-none focus:border-gray-500 focus:text-gray-500 disabled:opacity-50 disabled:pointer-events-none ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-chat-left" viewBox="0 0 16 16">
                                <path
                                    d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                            </svg>
                            Message
                        </button>
                        <button id="host-profile" type="button"
                            class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-800 text-gray-800 hover:bg-gray-200 focus:outline-none focus:border-gray-500 focus:text-gray-500 disabled:opacity-50 disabled:pointer-events-none ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-person" viewBox="0 0 16 16">
                                <path
                                    d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                            </svg>
                            View profile
                        </button>

                    </div>
                </div>
            </div>
            <hr>
            <br><br>
            <div class="">
                <h1 class="text-4xl font-semibold text-center">What This place offers</h1>
                <br>

                <section id="features_container" class="flex flex-wrap gap-4">


                </section>


            </div>
            <br><br>
            <div id="virtual-tour-container">

                <div class="flex justify-center items-center gap-2">

                    <img src="../images/vectors/virtual.png" width="35px" alt="">
                    <h1 class="text-4xl font-semibold ">Virtual Tour</h1>
                </div>
                <br>
                <div id="panorama" class="rounded-lg"></div>
                <div id="loading">Loading...</div>
                <div id="scene-info"></div>
            </div>
            <br><br><br>
            <section>
                <div class="flex justify-center items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                        class="bi bi-geo-alt" viewBox="0 0 16 16">
                        <path
                            d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10" />
                        <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                    </svg>
                    <h1 class="text-4xl font-semibold">Location</h1>
                </div>
                <br>
                <div id="map" class="w-full rounded-xl flex justify-center">

                </div>

            </section>
            <br><br><br>
            <div class="flex justify-center items-center gap-2">
                <img src="../images/vectors/star.png" width=30 alt="">
                <h1 class="text-4xl font-semibold">Ratings and Reviews</h1>
            </div>


            <div id="reviewContainer" class="">


                <section class="flex gap-3">
                    <div class="flex items-center mb-2">
                        <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 22 20">
                            <path
                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                        </svg>
                        <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 22 20">
                            <path
                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                        </svg>
                        <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 22 20">
                            <path
                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                        </svg>
                        <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 22 20">
                            <path
                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                        </svg>
                        <svg class="w-4 h-4 text-gray-300 me-1 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 22 20">
                            <path
                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                        </svg>
                        <p id="avgRating" class="ms-1 text-sm font-medium text-gray-500 "></p>
                        <p class="ms-1 text-sm font-medium text-gray-500 ">out of</p>
                        <p class="ms-1 text-sm font-medium text-gray-500 ">5</p>
                    </div>
                    <a href="reviews.php"
                        class="flex items-center border-b-2 border-black hover:border-transparent h-6">
                        <p id="reviewCount" class="text-md font-semibold text-black">
                            33 Reviews</p>
                    </a>
                </section>

                <div class="flex items-center mt-4">
                    <a href="#" class="text-sm font-medium text-black hover:underline">5 star</a>
                    <div class="w-2/4 h-5 mx-4 bg-gray-200 rounded">
                        <div id="percentage_5_star_fill" class="h-5 bg-yellow-300 rounded" style="width: 70%"></div>
                    </div>
                    <span id="percentage_5_star" class="text-sm font-medium text-gray-500"></span>
                </div>
                <div class="flex items-center mt-4">
                    <a href="#" class="text-sm font-medium text-black hover:underline">4 star</a>
                    <div class="w-2/4 h-5 mx-4 bg-gray-200 rounded">
                        <div id="percentage_4_star_fill" class="h-5 bg-yellow-300 rounded" style="width: 17%"></div>
                    </div>
                    <span id="percentage_4_star" class="text-sm font-medium text-gray-500"></span>
                </div>
                <div class="flex items-center mt-4">
                    <a href="#" class="text-sm font-medium text-black hover:underline">3 star</a>
                    <div class="w-2/4 h-5 mx-4 bg-gray-200 rounded">
                        <div id="percentage_3_star_fill" class="h-5 bg-yellow-300 rounded" style="width: 8%"></div>
                    </div>
                    <span id="percentage_3_star" class="text-sm font-medium text-gray-500"></span>
                </div>
                <div class="flex items-center mt-4">
                    <a href="#" class="text-sm font-medium text-black hover:underline">2 star</a>
                    <div class="w-2/4 h-5 mx-4 bg-gray-200 rounded">
                        <div id="percentage_2_star_fill" class="h-5 bg-yellow-300 rounded" style="width: 4%"></div>
                    </div>
                    <span id="percentage_2_star" class="text-sm font-medium text-gray-500"></span>
                </div>
                <div class="flex items-center mt-4">
                    <a href="#" class="text-sm font-medium text-black hover:underline">1 star</a>
                    <div class="w-2/4 h-5 mx-4 bg-gray-200 rounded">
                        <div id="percentage_1_star_fill" class="h-5 bg-yellow-300 rounded" style="width: 1%"></div>
                    </div>
                    <span id="percentage_1_star" class="text-sm font-medium text-gray-500"></span>
                </div>

                <br>
                <!-- 
            to hide the scrollbar //sometimes it blocks vertical scroll, idk why. so not gonna use it
     style="  -ms-overflow-style: none;
        scrollbar-width: none;"            
-->
                <div id="write-review" class="w-2/3">
                    <h1 class="text-xl font-medium">Rate this place</h1>
                    <h1 class="text-sm font-normal">Tell others what you think</h1>
                    <div class="w-2/3" id="rating-container">
                        <!-- Rating -->
                        <div class="flex gap-3 flex-row-reverse justify-end items-center">
                            <input id="hs-ratings-readonly-1" type="radio"
                                class="peer -ms-5 size-5 bg-transparent border-0 text-transparent cursor-pointer appearance-none checked:bg-none focus:bg-none focus:ring-0 focus:ring-offset-0"
                                name="hs-ratings-readonly" value="5">
                            <label for="hs-ratings-readonly-1"
                                class="peer-checked:text-yellow-400 text-gray-300 pointer-events-none">
                                <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                    </path>
                                </svg>
                            </label>
                            <input id="hs-ratings-readonly-2" type="radio"
                                class="peer -ms-5 size-5 bg-transparent border-0 text-transparent cursor-pointer appearance-none checked:bg-none focus:bg-none focus:ring-0 focus:ring-offset-0"
                                name="hs-ratings-readonly" value="4">
                            <label for="hs-ratings-readonly-2"
                                class="peer-checked:text-yellow-400 text-gray-300 pointer-events-none ">
                                <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                    </path>
                                </svg>
                            </label>
                            <input id="hs-ratings-readonly-3" type="radio"
                                class="peer -ms-5 size-5 bg-transparent border-0 text-transparent cursor-pointer appearance-none checked:bg-none focus:bg-none focus:ring-0 focus:ring-offset-0"
                                name="hs-ratings-readonly" value="3">
                            <label for="hs-ratings-readonly-3"
                                class="peer-checked:text-yellow-400 text-gray-300 pointer-events-none ">
                                <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                    </path>
                                </svg>
                            </label>
                            <input id="hs-ratings-readonly-4" type="radio"
                                class="peer -ms-5 size-5 bg-transparent border-0 text-transparent cursor-pointer appearance-none checked:bg-none focus:bg-none focus:ring-0 focus:ring-offset-0"
                                name="hs-ratings-readonly" value="2">
                            <label for="hs-ratings-readonly-4"
                                class="peer-checked:text-yellow-400 text-gray-300 pointer-events-none">
                                <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                    </path>
                                </svg>
                            </label>
                            <input id="hs-ratings-readonly-5" type="radio"
                                class="peer -ms-5 size-5 bg-transparent border-0 text-transparent cursor-pointer appearance-none checked:bg-none focus:bg-none focus:ring-0 focus:ring-offset-0"
                                name="hs-ratings-readonly" value="1">
                            <label for="hs-ratings-readonly-5"
                                class="peer-checked:text-yellow-400 text-gray-300 pointer-events-none ">
                                <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                    </path>
                                </svg>
                            </label>
                        </div>
                        <!-- End Rating -->
                    </div>
                    <br>
                    <h1 class="text-lg font-medium">Leave a review</h1>
                    <form>
                        <div class="w-full mb-4 border-2 border-gray-200 rounded-lg bg-gray-50 ">

                            <div class="px-4 py-2 bg-white rounded-t-lg">
                                <label for="comment" class="sr-only">Your review</label>
                                <textarea id="review" rows="4"
                                    class="w-full px-0 text-sm text-gray-900 bg-white border-0  focus:ring-0  "
                                    placeholder="Write a comment..." required></textarea>
                            </div>
                            <div class="flex items-center justify-between px-3 py-2 border-t">
                                <button id="post-review" type="button"
                                    class="inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-white bg-green-700 rounded-lg focus:ring-4 focus:ring-blue-200 hover:bg-green-800">
                                    Post review
                                </button>
                                <div class="flex ps-0 space-x-1 rtl:space-x-reverse sm:ps-2">
                                    <button type="button"
                                        class="inline-flex justify-center items-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 ">
                                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 12 20">
                                            <path stroke="currentColor" stroke-linejoin="round" stroke-width="2"
                                                d="M1 6v8a5 5 0 1 0 10 0V4.5a3.5 3.5 0 1 0-7 0V13a2 2 0 0 0 4 0V6" />
                                        </svg>
                                        <span class="sr-only">Attach file</span>
                                    </button>
                                    <button type="button"
                                        class="inline-flex justify-center items-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100">
                                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="currentColor" viewBox="0 0 16 20">
                                            <path
                                                d="M8 0a7.992 7.992 0 0 0-6.583 12.535 1 1 0 0 0 .12.183l.12.146c.112.145.227.285.326.4l5.245 6.374a1 1 0 0 0 1.545-.003l5.092-6.205c.206-.222.4-.455.578-.7l.127-.155a.934.934 0 0 0 .122-.192A8.001 8.001 0 0 0 8 0Zm0 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z" />
                                        </svg>
                                        <span class="sr-only">Set location</span>
                                    </button>
                                    <button type="button"
                                        class="inline-flex justify-center items-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 ">
                                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="currentColor" viewBox="0 0 20 18">
                                            <path
                                                d="M18 0H2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm4.376 10.481A1 1 0 0 1 16 15H4a1 1 0 0 1-.895-1.447l3.5-7A1 1 0 0 1 7.468 6a.965.965 0 0 1 .9.5l2.775 4.757 1.546-1.887a1 1 0 0 1 1.618.1l2.541 4a1 1 0 0 1 .028 1.011Z" />
                                        </svg>
                                        <span class="sr-only">Upload image</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>


                </div>
                <br><br>
                <h1 class="text-2xl font-medium">Reviews from other users</h1>
                <br>
                <section id="reviews"
                    class="flex gap-2 overflow-x-auto md:flex-col md:justify-center lg:flex-row lg:flex-wrap">



                </section>
                <br>
                <div class="flex justify-center" id="all-reviews">

                </div>
            </div>

    </section>

    <section
        class="bg-neutral-100 fixed bottom-0 w-full pt-4 pb-4 pl-6 pr-6 md:pl-16 md:pr-16 border-t-2 border-neutral-300 flex justify-between">
        <div class="text-lg font-normal">
            <p> <span class="font-medium">$<span id="price"></span></span> night</p>
            <p>Available for: <span id="date" class="underline font-medium">10-15</span></p>
        </div>
        <button id="reserve"
            class="flex items-center gap-2 pt-2 pb-2 pl-4 pr-4 bg-green-600 hover:bg-green-500 font-semibold rounded-md text-white text-lg">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-bookmark"
                viewBox="0 0 16 16">
                <path
                    d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1z" />
            </svg>

            <p>
                Reserve
            </p>
        </button>
    </section>

    </div>
    <?php
    include_once "partials/__footer.php";
    ?>


    <script>
        let viewer;
        let currentScene;
        const config = {
            "initialScene": "scene1",
            "scenes": {
                "scene1": {
                    "panorama": "pano.jpg",
                    "title": "Initial Panorama",
                    "hotSpots": [{
                        "pitch": 18.1,
                        "yaw": 1.5,
                        "type": "scene",
                        "text": "Go to Scene 2",
                        "sceneId": "scene2"
                    },
                    {
                        "pitch": -32.40,
                        "yaw": -151.20,
                        "type": "scene",
                        "text": "Go to Scene 3",
                        "sceneId": "scene3"
                    }
                    ]
                },
                "scene2": {
                    "panorama": "pano2.jpg",
                    "title": "Second Panorama",
                    "hotSpots": [{
                        "pitch": -9.4,
                        "yaw": 222.6,
                        "type": "scene",
                        "text": "Return to Initial Panorama",
                        "sceneId": "scene1"
                    },
                    {
                        "pitch": 15,
                        "yaw": 110,
                        "type": "scene",
                        "text": "Art Exhibition",
                        "sceneId": null
                    }
                    ]
                },
                "scene3": {
                    "panorama": "pano3.jpg",
                    "title": "Third Panorama",
                    "hotSpots": [{
                        "pitch": 14.1,
                        "yaw": 1.5,
                        "type": "scene",
                        "text": "Return to Initial Panorama",
                        "sceneId": "scene1"
                    }]
                }
            }
        };

        function initPannellum() {
            loadScene(config.initialScene);
        }



        function loadScene(sceneId) {
            const scene = config.scenes[sceneId];
            currentScene = sceneId;

            document.getElementById('loading').style.display = 'block';
            updateSceneInfo(scene.title);

            if (viewer) {
                viewer.destroy();
            }

            // Simulate loading delay (remove this in production)
            setTimeout(() => {
                viewer = pannellum.viewer('panorama', {
                    "type": "equirectangular",
                    "panorama": scene.panorama,
                    "autoLoad": true,
                    "hotSpots": scene.hotSpots.map(hotspot => ({
                        ...hotspot,
                        clickHandlerFunc: createClickHandler(hotspot)
                    }))
                });
                document.getElementById('loading').style.display = 'none';
            }, 2000); // Simulated 2-second delay
        }

        function createClickHandler(hotspot) {
            return function (event, hs) {
                if (hotspot.sceneId) {
                    loadScene(hotspot.sceneId);
                } else {
                    alert(hotspot.text);
                }
            };
        }

        function updateSceneInfo(title) {
            document.getElementById('scene-info').textContent = `Current Scene: ${title}`;
        }

        // Initialize Pannellum when the page loads
        window.onload = initPannellum;
    </script>


    <script>
        function formatDateRange(hotel) {
            const optionsSameMonth = {
                month: 'short',
                day: 'numeric'
            };
            const optionsDifferentMonth = {
                month: 'short',
                day: 'numeric'
            };

            // Convert the 'from' and 'to' date strings into Date objects
            const fromDate = new Date(hotel.from);
            const toDate = new Date(hotel.to);

            let formattedDateRange;

            // Check if the 'from' and 'to' dates are in the same month and year
            if (fromDate.getMonth() === toDate.getMonth() && fromDate.getFullYear() === toDate.getFullYear()) {
                // If they are in the same month, display the month once
                formattedDateRange = `${fromDate.toLocaleDateString('en-US', optionsSameMonth)}-${toDate.getDate()}`;
            } else {
                // If they are in different months, display both month and day for both dates
                formattedDateRange = `${fromDate.toLocaleDateString('en-US', optionsDifferentMonth)} - ${toDate.toLocaleDateString('en-US', optionsDifferentMonth)}`;
            }

            return formattedDateRange;
        }

        // Function to get the 'id' parameter from the URL
        function getQueryParam(param) {
            const urlParams = new URLSearchParams(window.location.search);
            return urlParams.get(param);
        }

        // Get the 'id' from the current URL
        const hotelId = getQueryParam('id');


        // const hotelId = 32;
        console.log("Hotel id:");
        console.log(hotelId);


        // Fetch the hotel details based on the 'id'
        fetch(`get-hotels.php?id=${hotelId}`)
            .then(response => response.json())
            .then(data => {
                console.log(data);

                document.getElementById('name').innerHTML = data.hotel.name;
                document.getElementById('city_name').innerHTML = data.hotel.city_name;
                document.getElementById('country_name').innerHTML = data.hotel.country_name;

                let roomDetails = JSON.parse(data.hotel.room_details);
                let roomFeatures = JSON.parse(data.hotel.features);
                // console.log(roomFeatures);

                function render_room_features(features, container) {
                    let featuresTiles='';

                    if (features.wifi ==true) {
                            featuresTiles += `
                             <div class="w-40">
                        <input type="checkbox" name="options" value="wifi" id="option-wifi" class="hidden peer">
                        <label for="option-wifi"
                            class="border-2 border-gray-800 rounded-md p-4 cursor-pointer inline-flex w-full h-full hover:bg-zinc-100 peer-checked:bg-gray-300">
                            <div class="flex flex-col justify-start">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                                    class="bi bi-wifi" viewBox="0 0 16 16">
                                    <path
                                        d="M15.384 6.115a.485.485 0 0 0-.047-.736A12.44 12.44 0 0 0 8 3C5.259 3 2.723 3.882.663 5.379a.485.485 0 0 0-.048.736.52.52 0 0 0 .668.05A11.45 11.45 0 0 1 8 4c2.507 0 4.827.802 6.716 2.164.205.148.49.13.668-.049" />
                                    <path
                                        d="M13.229 8.271a.482.482 0 0 0-.063-.745A9.46 9.46 0 0 0 8 6c-1.905 0-3.68.56-5.166 1.526a.48.48 0 0 0-.063.745.525.525 0 0 0 .652.065A8.46 8.46 0 0 1 8 7a8.46 8.46 0 0 1 4.576 1.336c.206.132.48.108.653-.065m-2.183 2.183c.226-.226.185-.605-.1-.75A6.5 6.5 0 0 0 8 9c-1.06 0-2.062.254-2.946.704-.285.145-.326.524-.1.75l.015.015c.16.16.407.19.611.09A5.5 5.5 0 0 1 8 10c.868 0 1.69.201 2.42.56.203.1.45.07.61-.091zM9.06 12.44c.196-.196.198-.52-.04-.66A2 2 0 0 0 8 11.5a2 2 0 0 0-1.02.28c-.238.14-.236.464-.04.66l.706.706a.5.5 0 0 0 .707 0l.707-.707z" />
                                </svg>

                                <p class="text-lg font-medium">Wifi</p>
                            </div>
                        </label>
                    </div>
                            `;              
                    }
                    if (features.tv ==true) {
                        featuresTiles+= `
                                            <div class=" w-40">
                        <input type="checkbox" name="options" value="tv" id="option-tv" class="hidden peer">
                        <label for="option-tv"
                            class="border-2 border-gray-800 rounded-md p-4 cursor-pointer inline-flex w-full h-full hover:bg-zinc-100 peer-checked:bg-gray-300">
                            <div class="flex flex-col justify-start">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                                    class="bi bi-tv" viewBox="0 0 16 16">
                                    <path
                                        d="M2.5 13.5A.5.5 0 0 1 3 13h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5M13.991 3l.024.001a1.5 1.5 0 0 1 .538.143.76.76 0 0 1 .302.254c.067.1.145.277.145.602v5.991l-.001.024a1.5 1.5 0 0 1-.143.538.76.76 0 0 1-.254.302c-.1.067-.277.145-.602.145H2.009l-.024-.001a1.5 1.5 0 0 1-.538-.143.76.76 0 0 1-.302-.254C1.078 10.502 1 10.325 1 10V4.009l.001-.024a1.5 1.5 0 0 1 .143-.538.76.76 0 0 1 .254-.302C1.498 3.078 1.675 3 2 3zM14 2H2C0 2 0 4 0 4v6c0 2 2 2 2 2h12c2 0 2-2 2-2V4c0-2-2-2-2-2" />
                                </svg>
                                <p class="text-lg font-medium">TV</p>
                            </div>
                        </label>
                    </div>
                        `;
                    }
                       if (features.ac ==true) {
                        featuresTiles+= `
                            <div class="w-40">
                        <input type="checkbox" name="options" value="ac" id="option-ac"
                            class="hidden peer">
                        <label for="option-ac"
                            class="border-2 border-gray-800 rounded-md p-4 cursor-pointer inline-flex w-full h-full hover:bg-zinc-100 peer-checked:bg-gray-300">
                            <div class="flex flex-col justify-start">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                                    class="bi bi-snow" viewBox="0 0 16 16">
                                    <path
                                        d="M8 16a.5.5 0 0 1-.5-.5v-1.293l-.646.647a.5.5 0 0 1-.707-.708L7.5 12.793V8.866l-3.4 1.963-.496 1.85a.5.5 0 1 1-.966-.26l.237-.882-1.12.646a.5.5 0 0 1-.5-.866l1.12-.646-.884-.237a.5.5 0 1 1 .26-.966l1.848.495L7 8 3.6 6.037l-1.85.495a.5.5 0 0 1-.258-.966l.883-.237-1.12-.646a.5.5 0 1 1 .5-.866l1.12.646-.237-.883a.5.5 0 1 1 .966-.258l.495 1.849L7.5 7.134V3.207L6.147 1.854a.5.5 0 1 1 .707-.708l.646.647V.5a.5.5 0 1 1 1 0v1.293l.647-.647a.5.5 0 1 1 .707.708L8.5 3.207v3.927l3.4-1.963.496-1.85a.5.5 0 1 1 .966.26l-.236.882 1.12-.646a.5.5 0 0 1 .5.866l-1.12.646.883.237a.5.5 0 1 1-.26.966l-1.848-.495L9 8l3.4 1.963 1.849-.495a.5.5 0 0 1 .259.966l-.883.237 1.12.646a.5.5 0 0 1-.5.866l-1.12-.646.236.883a.5.5 0 1 1-.966.258l-.495-1.849-3.4-1.963v3.927l1.353 1.353a.5.5 0 0 1-.707.708l-.647-.647V15.5a.5.5 0 0 1-.5.5z" />
                                </svg>
                                <p class="text-lg font-medium">Air Conditioning</p>
                            </div>
                        </label>
                    </div>
                        `;
                       
                    }
                          if (features.kitchen ==true) {
                        featuresTiles+= `
                                                <div class="w-40">
                        <input type="checkbox" name="options" value="kitchen" id="option-kitchen" class="hidden peer">
                        <label for="option-kitchen"
                            class="border-2 border-gray-800 rounded-md p-4 cursor-pointer inline-flex w-full h-full hover:bg-zinc-100 peer-checked:bg-gray-300">
                            <div class="flex flex-col justify-start">
                                <img src="../images/vectors/fork.svg" alt="" height="22" width="22">
                                <p class="text-lg font-medium">Kitchen</p>
                            </div>
                        </label>
                    </div>
                        `;
                    
                    }
                    if (features.parking ==true) {
                        featuresTiles+= `
                                                 <div class="w-40">
                        <input type="checkbox" name="options" value="parking" id="option-parking" class="hidden peer">
                        <label for="option-parking"
                            class="border-2 border-gray-800 rounded-md p-4 cursor-pointer inline-flex w-full h-full hover:bg-zinc-100 peer-checked:bg-gray-300">
                            <div class="flex flex-col justify-start">
                                <img src="../images/vectors/steering-wheel.svg" height="22" width="25" alt="">
                                <p class="text-lg font-medium">Parking area</p>
                            </div>
                        </label>
                    </div>
                        `;
                    
                    }
                    if (features.pool ==true) {
                        featuresTiles+= `
                                                <div class="w-40">
                        <input type="checkbox" name="options" value="pool" id="option-pool" class="hidden peer">
                        <label for="option-pool"
                            class="border-2 border-gray-800 rounded-md p-4 cursor-pointer inline-flex w-full h-full hover:bg-zinc-100 peer-checked:bg-gray-300">
                            <div class="flex flex-col justify-start">
                                <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1"
                                    viewBox="0 0 24 24" width="22" height="22">
                                    <path
                                        d="M2,2A1,1,0,0,1,3,1H7.916a5,5,0,0,1,4.1,2.136l5.114,7.317A1,1,0,1,1,15.489,11.6L12.016,6.63,3.593,12.807a1,1,0,0,1-1.184-1.614l8.461-6.2-.495-.707A3,3,0,0,0,7.916,3H3A1,1,0,0,1,2,2ZM22.333,20.49A1.991,1.991,0,0,1,21,21a2.248,2.248,0,0,1-2.057-1.333,1,1,0,0,0-1.885,0,2.254,2.254,0,0,1-4.115,0,1,1,0,0,0-1.885,0,2.254,2.254,0,0,1-4.115,0,1,1,0,0,0-1.885,0A2.25,2.25,0,0,1,3,21a2,2,0,0,1-1.333-.511A1,1,0,0,0,.332,21.978,4,4,0,0,0,3,23a4.379,4.379,0,0,0,3-1.225,4.286,4.286,0,0,0,6,0,4.286,4.286,0,0,0,6,0A4.375,4.375,0,0,0,21,23a3.981,3.981,0,0,0,2.668-1.023,1,1,0,1,0-1.336-1.487ZM3,18a4.379,4.379,0,0,0,3-1.225,4.286,4.286,0,0,0,6,0,4.286,4.286,0,0,0,6,0A4.375,4.375,0,0,0,21,18a3.981,3.981,0,0,0,2.668-1.023,1,1,0,1,0-1.336-1.487A1.991,1.991,0,0,1,21,16a2.248,2.248,0,0,1-2.057-1.333,1,1,0,0,0-1.885,0,2.254,2.254,0,0,1-4.115,0,1,1,0,0,0-1.885,0,2.254,2.254,0,0,1-4.115,0,1,1,0,0,0-1.885,0A2.25,2.25,0,0,1,3,16a2,2,0,0,1-1.333-.511A1,1,0,0,0,.332,16.978,4,4,0,0,0,3,18ZM18.5,8A2.5,2.5,0,1,0,16,5.5,2.5,2.5,0,0,0,18.5,8Z" />
                                </svg>

                                <p class="text-lg font-medium">Pool</p>
                            </div>
                        </label>
                    </div>
                        `;
                    
                    }

                    if (features.workout ==true) {
                        featuresTiles+= `
                         <div class="w-40">
                        <input type="checkbox" name="options" value="workout" id="option-workout" class="hidden peer">
                        <label for="option-workout"
                            class="border-2 border-gray-800 rounded-md p-4 cursor-pointer inline-flex w-full h-full hover:bg-zinc-100 peer-checked:bg-gray-300">
                            <div class="flex flex-col justify-start">
                                <img src="../images/vectors/workout.png" height="22" width="22" alt="">

                                <p class="text-lg font-medium">Workout</p>
                            </div>
                        </label>
                    </div>
                        `;
                    
                    }
                    if (features.smoke ==true) {
                        featuresTiles+= `
                         <div class="w-40">
                        <input type="checkbox" name="options" value="smoke" id="option-smoke" class="hidden peer">
                        <label for="option-smoke"
                            class="border-2 border-gray-800 rounded-md p-4 cursor-pointer inline-flex w-full h-full hover:bg-zinc-100 peer-checked:bg-gray-300">
                            <div class="flex flex-col justify-start">
                                <img src="../images/vectors/smoke.png" alt="" height="22" width="22">

                                <p class="text-lg font-medium">Smoke alarm</p>
                            </div>
                        </label>
                    </div>

                        `;
                    
                    }
                    if (features.fire ==true) {
                        featuresTiles+= `
                         <div class="w-40">
                        <input type="checkbox" name="options" value="fire" id="option-fire" class="hidden peer">
                        <label for="option-fire"
                            class="border-2 border-gray-800 rounded-md p-4 cursor-pointer inline-flex w-full h-full hover:bg-zinc-100 peer-checked:bg-gray-300">
                            <div class="flex flex-col justify-start">
                                <svg xmlns="http://www.w3.org/2000/svg" height="22" width="22" id="Layer_1"
                                    data-name="Layer 1" viewBox="0 0 24 24">
                                    <path
                                        d="m12,3h-5v-1c0-.552-.448-1-1-1s-1,.448-1,1v1.046c-1.585.144-3.124.63-4.501,1.426-.478.277-.641.889-.365,1.367.186.32.521.499.867.499.17,0,.342-.043.5-.134,1.072-.621,2.266-1.011,3.499-1.148v2.028c-2.834.477-5,2.948-5,5.916v6.5c0,2.481,2.019,4.5,4.5,4.5h3c2.481,0,4.5-2.019,4.5-4.5v-6.5c0-2.968-2.166-5.439-5-5.916v-2.084h5c.552,0,1-.448,1-1s-.448-1-1-1Zm-2,10v6.5c0,1.378-1.122,2.5-2.5,2.5h-3c-1.207,0-2.217-.86-2.45-2h4.95c.552,0,1-.448,1-1s-.448-1-1-1H2v-5c0-2.206,1.794-4,4-4s4,1.794,4,4ZM23.189.463c-.515-.403-1.172-.542-1.848-.373l-4.408,1.293c-1.156.355-1.934,1.406-1.934,2.616s.78,2.265,1.946,2.62l4.434,1.317c.171.043.345.064.516.064.464,0,.917-.154,1.293-.448.515-.402.811-1.008.811-1.662v-3.766c0-.654-.295-1.259-.811-1.662Zm-1.189,5.428l-.092.117-4.386-1.303c-.312-.095-.522-.378-.522-.705s.209-.609.509-.701l4.449-1.26c.042.033.042.072.042.085v3.766Z" />
                                </svg>


                                <p class="text-lg font-medium">Fire estinguisher</p>
                            </div>
                        </label>
                    </div>

                        `;

                        if (features.firstAid ==true) {
                        featuresTiles+= `
                          <div class="w-40">
                        <input type="checkbox" name="options" value="firstAid" id="option-firstAid" class="hidden peer">
                        <label for="option-firstAid"
                            class="border-2 border-gray-800 rounded-md p-4 cursor-pointer inline-flex w-full h-full hover:bg-zinc-100 peer-checked:bg-gray-300">
                            <div class="flex flex-col justify-start">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                                    class="bi bi-bandaid" viewBox="0 0 16 16">
                                    <path
                                        d="M14.121 1.879a3 3 0 0 0-4.242 0L8.733 3.026l4.261 4.26 1.127-1.165a3 3 0 0 0 0-4.242M12.293 8 8.027 3.734 3.738 8.031 8 12.293zm-5.006 4.994L3.03 8.737 1.879 9.88a3 3 0 0 0 4.241 4.24l.006-.006 1.16-1.121ZM2.679 7.676l6.492-6.504a4 4 0 0 1 5.66 5.653l-1.477 1.529-5.006 5.006-1.523 1.472a4 4 0 0 1-5.653-5.66l.001-.002 1.505-1.492z" />
                                    <path
                                        d="M5.56 7.646a.5.5 0 1 1-.706.708.5.5 0 0 1 .707-.708Zm1.415-1.414a.5.5 0 1 1-.707.707.5.5 0 0 1 .707-.707M8.39 4.818a.5.5 0 1 1-.708.707.5.5 0 0 1 .707-.707Zm0 5.657a.5.5 0 1 1-.708.707.5.5 0 0 1 .707-.707ZM9.803 9.06a.5.5 0 1 1-.707.708.5.5 0 0 1 .707-.707Zm1.414-1.414a.5.5 0 1 1-.706.708.5.5 0 0 1 .707-.708ZM6.975 9.06a.5.5 0 1 1-.707.708.5.5 0 0 1 .707-.707ZM8.39 7.646a.5.5 0 1 1-.708.708.5.5 0 0 1 .707-.708Zm1.413-1.414a.5.5 0 1 1-.707.707.5.5 0 0 1 .707-.707" />
                                </svg>


                                <p class="text-lg font-medium">First aid</p>
                            </div>
                        </label>
                    </div>

                        `;
                    
                    }
                    
                    }


                    
                    container.innerHTML =featuresTiles;
                    
                }
                render_room_features( roomFeatures,document.getElementById('features_container'));

                document.getElementById('guest').innerHTML = roomDetails['guests'];
                document.getElementById('bedroom').innerHTML = roomDetails['bedrooms'];
                document.getElementById('bed').innerHTML = roomDetails['beds'];
                if (roomDetails['lock_availability'] == 'Yes') {
                    document.getElementById('vault').innerHTML = ", vault available";
                }

                if (data.hotel.rating < 1) {
                    document.getElementById('avgRating').innerHTML = 'N/A';
                } else {
                    document.getElementById('avgRating').innerHTML = data.hotel.rating;
                }



                const mapElement = document.getElementById('map');
                document.getElementById('map').innerHTML = data.hotel.link;
                const childElementMap = mapElement.ElementChild;

                if (childElementMap) {
                    childElementMap.classList.add('w-full', 'rounded-xl');
                }


                document.getElementById('price').innerHTML = data.hotel.price;
                document.getElementById('date').innerHTML = formatDateRange(data.hotel);

                // document.getElementById('img1').src = data.hotel.photos[1];
                for (let i = 1; i <= 5; i++) {
                    document.getElementById('img' + i).src = data.hotel.photos[i - 1];
                }

                // set messge host and host profile links
                document.getElementById('message').addEventListener('click', function () {
                    // Assuming data.hotel.host_id contains the host_id
                    const host_id = data.hotel.host_id;

                    // Construct the URL by concatenating the receiver with the host_id
                    const url = `chat.php?receiver=${encodeURIComponent(host_id)}`;

                    // Redirect the user to the constructed URL
                    window.location.href = url;
                });
                document.getElementById('photos').addEventListener('click', function () {
                    // Construct the URL by concatenating the receiver with the hotel_id
                    const url = `gallery.php?hotel_id=${encodeURIComponent(data.hotel.hotel_id)}`;
                    // Redirect the user to the constructed URL
                    window.location.href = url;
                });
                document.getElementById('reserve').addEventListener('click', function () {
                    // Construct the URL by concatenating the receiver with the hotel_id
                    const reserve_url = `reserve.php?hotel_id=${encodeURIComponent(data.hotel.hotel_id)}`;
                    // Redirect the user to the constructed URL
                    window.location.href = reserve_url;
                });


            })
            .catch(error => console.error('Error fetching hotels:', error));
    </script>


    <script>
        function addReview() {
            // Get the selected rating
            const rating = document.querySelector('input[name="hs-ratings-readonly"]:checked')?.value;

            // Get the review text
            const reviewText = document.getElementById('review').value;


            // Fixed values for entity_type and entity_id
            const entityType = 'hotel';
            const entityId = hotelId;

            // Validate the rating and review text before sending the request
            if (!rating) {
                alert('Please select a rating.');
                return;
            }

            if (!reviewText.trim()) {
                alert('Please write a review.');
                return;
            }

            // Prepare the POST data
            // const postData = {
            //     entity_type: entityType,
            //     entity_id: entityId,
            //     rating: rating,
            //     review_text: reviewText
            // };
            const reviewData = {
                entity_type: entityType,
                entity_id: entityId,
                rating: rating,
                review_text: reviewText
            };
            console.log(reviewData);
            // Send the POST request using Fetch API



            fetch('add_review.php', {
                method: 'POST', // POST request
                headers: {
                    'Content-Type': 'application/json', // Set content type to JSON
                },
                body: JSON.stringify(reviewData) // Send the JSON data as the body of the request
            })
                .then(response => response.json()) // Parse the response as JSON
                .then(data => {
                    console.log('Success:', reviewData); // Handle success response from the server
                    window.location.reload();
                })
                .catch((error) => {
                    // console.error('Error:', error);  // Handle any errors
                    console.log("there is a problem");
                });
        }

        document.getElementById('post-review').addEventListener('click', function () {
            addReview();
        });
    </script>

    <script>
        let reviewpage = 1;
        let reviewLimit = 4;

        function formatDateReviewer(dateTimeStr) {
            // Create a new Date object from the input string
            const date = new Date(dateTimeStr);

            // Array of month names
            const months = [
                "January", "February", "March", "April", "May", "June",
                "July", "August", "September", "October", "November", "December"
            ];

            // Get the full year and the month
            const year = date.getFullYear();
            const month = months[date.getMonth()]; // getMonth() returns 0-based index

            // Return the formatted date in the form: 'August 2014'
            return `${month} ${year}`;
        }

        function renderStars(rating) {
            let stars = '';

            // Loop to generate star SVGs based on the rating
            for (let i = 1; i <= 5; i++) {
                if (i <= rating) {
                    // Filled star for ratings less than or equal to the current index
                    stars += `<svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                          <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                      </svg>`;
                } else {
                    // Empty star for ratings greater than the current index
                    stars += `<svg class="w-4 h-4 text-gray-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                          <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                      </svg>`;
                }
            }
            return stars;
        }


        // Example usage:
        const dateTimeStr = "2024-10-04 01:25:59";
        console.log(formatDateReviewer(dateTimeStr)); // Output: "October 2024"


        fetch(`get-reviews.php?id=${hotelId}&page=${reviewpage}&limit=${reviewLimit}`)
            .then(response => response.json())
            .then(data => {
                const hotelReview = document.getElementById('reviews');
                const allReview = document.getElementById('all-reviews');
                hotelReview.innerHTML = '';
                console.log("reviewData::");

                console.log(data);

                if (data.reviews.length == 0) {
                    console.log("no reviews");
                    document.getElementById('reviewContainer').innerHTML = `
                    <p class="text-4xl pt-8 font-thin text-center">No reviews yet</p>
                    <div id="write-review" class="w-2/3">
    <h1 class="text-xl font-medium">Rate this place</h1>
    <h1 class="text-sm font-normal">Tell others what you think</h1>
    <div class="w-2/3" id="rating-container">
        <!-- Rating -->
    <div class="flex gap-3 flex-row-reverse justify-end items-center">
  <input id="hs-ratings-readonly-1" type="radio" class="peer -ms-5 size-5 bg-transparent border-0 text-transparent cursor-pointer appearance-none checked:bg-none focus:bg-none focus:ring-0 focus:ring-offset-0" name="hs-ratings-readonly" value="5">
  <label for="hs-ratings-readonly-1" class="peer-checked:text-yellow-400 text-gray-300 pointer-events-none">
    <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
    </svg>
  </label>
  <input id="hs-ratings-readonly-2" type="radio" class="peer -ms-5 size-5 bg-transparent border-0 text-transparent cursor-pointer appearance-none checked:bg-none focus:bg-none focus:ring-0 focus:ring-offset-0" name="hs-ratings-readonly" value="4">
  <label for="hs-ratings-readonly-2" class="peer-checked:text-yellow-400 text-gray-300 pointer-events-none ">
    <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
    </svg>
  </label>
  <input id="hs-ratings-readonly-3" type="radio" class="peer -ms-5 size-5 bg-transparent border-0 text-transparent cursor-pointer appearance-none checked:bg-none focus:bg-none focus:ring-0 focus:ring-offset-0" name="hs-ratings-readonly" value="3">
  <label for="hs-ratings-readonly-3" class="peer-checked:text-yellow-400 text-gray-300 pointer-events-none ">
    <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
    </svg>
  </label>
  <input id="hs-ratings-readonly-4" type="radio" class="peer -ms-5 size-5 bg-transparent border-0 text-transparent cursor-pointer appearance-none checked:bg-none focus:bg-none focus:ring-0 focus:ring-offset-0" name="hs-ratings-readonly" value="2">
  <label for="hs-ratings-readonly-4" class="peer-checked:text-yellow-400 text-gray-300 pointer-events-none">
    <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
    </svg>
  </label>
  <input id="hs-ratings-readonly-5" type="radio" class="peer -ms-5 size-5 bg-transparent border-0 text-transparent cursor-pointer appearance-none checked:bg-none focus:bg-none focus:ring-0 focus:ring-offset-0" name="hs-ratings-readonly" value="1">
  <label for="hs-ratings-readonly-5" class="peer-checked:text-yellow-400 text-gray-300 pointer-events-none ">
    <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
    </svg>
  </label>
</div>
<!-- End Rating -->
</div>
<br>
    <h1 class="text-lg font-medium">Leave a review</h1>
<form>
   <div class="w-full mb-4 border-2 border-gray-200 rounded-lg bg-gray-50 ">
    
       <div class="px-4 py-2 bg-white rounded-t-lg">
           <label for="comment" class="sr-only">Your review</label>
           <textarea id="review" rows="4" class="w-full px-0 text-sm text-gray-900 bg-white border-0  focus:ring-0  " placeholder="Write a comment..." required ></textarea>
       </div>
       <div class="flex items-center justify-between px-3 py-2 border-t">
           <button id="post-review" type="button" class="inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-white bg-green-700 rounded-lg focus:ring-4 focus:ring-blue-200 hover:bg-green-800">
               Post review
           </button>
           <div class="flex ps-0 space-x-1 rtl:space-x-reverse sm:ps-2">
               <button type="button" class="inline-flex justify-center items-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 ">
                   <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 20">
                        <path stroke="currentColor" stroke-linejoin="round" stroke-width="2" d="M1 6v8a5 5 0 1 0 10 0V4.5a3.5 3.5 0 1 0-7 0V13a2 2 0 0 0 4 0V6"/>
                    </svg>
                   <span class="sr-only">Attach file</span>
               </button>
               <button type="button" class="inline-flex justify-center items-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100">
                   <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 20">
                        <path d="M8 0a7.992 7.992 0 0 0-6.583 12.535 1 1 0 0 0 .12.183l.12.146c.112.145.227.285.326.4l5.245 6.374a1 1 0 0 0 1.545-.003l5.092-6.205c.206-.222.4-.455.578-.7l.127-.155a.934.934 0 0 0 .122-.192A8.001 8.001 0 0 0 8 0Zm0 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z"/>
                    </svg>
                   <span class="sr-only">Set location</span>
               </button>
               <button type="button" class="inline-flex justify-center items-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 ">
                   <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                        <path d="M18 0H2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm4.376 10.481A1 1 0 0 1 16 15H4a1 1 0 0 1-.895-1.447l3.5-7A1 1 0 0 1 7.468 6a.965.965 0 0 1 .9.5l2.775 4.757 1.546-1.887a1 1 0 0 1 1.618.1l2.541 4a1 1 0 0 1 .028 1.011Z"/>
                    </svg>
                   <span class="sr-only">Upload image</span>
               </button>
           </div>
       </div>
   </div>
</form>
</div>`;
                    document.getElementById('post-review').addEventListener('click', function () {
                        addReview();
                    });

                }
                document.getElementById('reviewCount').innerHTML = data.total_reviews + " reviews";
                data.reviews.forEach(review => {
                    document.getElementById('percentage_1_star').innerHTML = Math.floor(review.percentage_1_star) + "%";
                    document.getElementById('percentage_2_star').innerHTML = Math.floor(review.percentage_2_star) + "%";
                    document.getElementById('percentage_3_star').innerHTML = Math.floor(review.percentage_3_star) + "%";
                    document.getElementById('percentage_4_star').innerHTML = Math.floor(review.percentage_4_star) + "%";
                    document.getElementById('percentage_5_star').innerHTML = Math.floor(review.percentage_5_star) + "%";

                    document.getElementById("percentage_1_star_fill").style.width = `${review.percentage_1_star}%`;
                    document.getElementById("percentage_2_star_fill").style.width = `${review.percentage_2_star}%`;
                    document.getElementById("percentage_3_star_fill").style.width = `${review.percentage_3_star}%`;
                    document.getElementById("percentage_4_star_fill").style.width = `${review.percentage_4_star}%`;
                    document.getElementById("percentage_5_star_fill").style.width = `${review.percentage_5_star}%`;

                    const reviewCard = `
                    <article class="p-8 border flex-none w-4/5 rounded-xl md:w-full lg:w-[48%] bg-neutral-50">
                                       <div class="flex items-center mb-4">
                                           <img class="w-10 h-10 me-4 rounded-full" src="../images/dp/dp.jpg" alt="">
                                           <div class="font-medium">
                                               <p>${review.reviewer_first_name} <time datetime="2014-08-16 19:00" class="block text-sm text-gray-500">Joined on
                ${formatDateReviewer(review.review_date)}</time>
                                               </p>
                                           </div>
                                       </div>
                                       <div class="flex items-center mb-1 space-x-1 rtl:space-x-reverse">
                                              ${renderStars(review.rating)}
                                       </div>
                                       <footer class="mb-5 text-sm text-gray-500">
                                       </footer>
                                       <p class="mb-2 text-gray-500">${review.review_text}</p>
                   
                                       
                                       <aside>
                                           <p class="mt-1 text-xs text-gray-500">19 people found this helpful</p>
                                           <div class="flex items-center mt-3">
                                               <a href="#"
                                                   class="px-2 py-1.5 text-xs font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 ">Helpful</a>
                                               <a href="#"
                                                   class="ps-4 text-sm font-medium text-gray-800 decotation-underlined hover:underline  border-gray-200 ms-4 border-s md:mb-0 ">Report
                                                   abuse</a>
                                           </div>
                                       </aside>
                   </article>
                   <br>
                      `;
                    hotelReview.innerHTML += reviewCard;

                });
                console.log(data.total_reviews);

                if (data.total_reviews > 4) {
                    allReview.innerHTML += `<button onclick="window.location.href = 'reviews.php?id=${hotelId}';" id="message" type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-md font-medium rounded-lg border border-gray-800 text-gray-800 hover:bg-gray-200 focus:outline-none focus:border-gray-500 focus:text-gray-500 disabled:opacity-50 disabled:pointer-events-none ">Show all reviews</button>`;

                }

            })
            .catch(error => console.error('Error fetching reviews:', error));
    </script>



    <script src="https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.js"></script>
</body>

</html>