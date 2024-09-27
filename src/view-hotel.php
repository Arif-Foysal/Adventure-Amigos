<?php
require_once 'partials/__dbconnect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Accomodation | Amigos</title>
    <link rel="icon" type="image/x-icon" href="../images/fav.png">
    <link rel="stylesheet" href="output.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.css"/>
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
        #virtual-tour-container{
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
            <h1 class="text-3xl font-semibold pb-4">Title of the Accomodation</h1>
            <div class="grid grid-cols-4 grid-rows-2 gap-2">
                <div class="col-span-2 row-span-2 square">
                    <img src="../images/hotel/1.jpg" alt="Image 1" class="gallery-img rounded-l-xl">
                </div>
                <div class="square">
                    <img src="../images/hotel/2.jpg" alt="Image 2" class="gallery-img">
                </div>
                <div class="square">
                    <img src="../images/hotel/3.jpg" alt="Image 3" class="gallery-img rounded-tr-xl">
                </div>
                <div class="square">
                    <img src="../images/hotel/4.jpg" alt="Image 4" class="gallery-img">
                </div>
                <div class="square relative">
                    <img src="../images/hotel/5.jpg" alt="Image 5" class="gallery-img rounded-br-xl">
                    <a href="hotel-gallery.php" id="overlay"
                        class="absolute md:hidden flex justify-center items-center text-white inset-0 bg-black bg-opacity-50 rounded-br-xl">
                        <p class="text-lg">Show all</p>
                    </a>
                    <button
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
                <h1 class="text-2xl font-semibold">Dhaka, Bangladesh</h1>
            </section>
            <h2 class="text-xl font-normal text-gray-500">details/ # of beds, # of bathrooms etc</h2>
<br><br>
        <div id="virtual-tour-container">

        <div class="flex justify-center items-center gap-2">

            <img src="../images/vectors/virtual.png" width="35px" alt="">
            <h1 class="text-4xl font-semibold ">Virtual Tour </h1>
        </div>
    <br>
    <div id="panorama" class="rounded-lg"></div>
    <div id="loading">Loading...</div>
    <div id="scene-info"></div>
</div>
<br><br><br>
           <section>
            <div class="flex justify-center items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-geo-alt"
                    viewBox="0 0 16 16">
                    <path
                        d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10" />
                    <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                </svg>
                <h1 class="text-4xl font-semibold">Location</h1>
            </div>
           <br>
           <div class="w-full rounded-xl flex justify-center">

           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58397.5298389343!2d90.31743598160196!3d23.824088326575502!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7715a40c603%3A0xec01cd75f33139f5!2sBRAC%20University!5e0!3m2!1sen!2sbd!4v1727432913212!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
               </div>
                
               </section>
               <br><br><br>
           <div class="flex justify-center items-center gap-2">
            <img src="../images/vectors/star.png" width=30 alt="">
                <h1 class="text-4xl font-semibold">Ratings and Reviews</h1>
            </div>
            <section class="flex gap-4">
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
                    <p class="ms-1 text-sm font-medium text-gray-500 ">4.95</p>
                    <p class="ms-1 text-sm font-medium text-gray-500 ">out of</p>
                    <p class="ms-1 text-sm font-medium text-gray-500 ">5</p>
                </div>
                <a href="reviews.php" class="flex items-center border-b-2 border-black hover:border-transparent h-6">
                    <p class="text-md font-semibold text-black">
                        33 Reviews</p>
                </a>
            </section>
            <p class="text-sm font-medium text-gray-500 ">1,745 global ratings</p>
            <div class="flex items-center mt-4">
                <a href="#" class="text-sm font-medium text-black hover:underline">5 star</a>
                <div class="w-2/4 h-5 mx-4 bg-gray-200 rounded">
                    <div class="h-5 bg-yellow-300 rounded" style="width: 70%"></div>
                </div>
                <span class="text-sm font-medium text-gray-500">70%</span>
            </div>
            <div class="flex items-center mt-4">
                <a href="#" class="text-sm font-medium text-black hover:underline">4 star</a>
                <div class="w-2/4 h-5 mx-4 bg-gray-200 rounded">
                    <div class="h-5 bg-yellow-300 rounded" style="width: 17%"></div>
                </div>
                <span class="text-sm font-medium text-gray-500">17%</span>
            </div>
            <div class="flex items-center mt-4">
                <a href="#" class="text-sm font-medium text-black hover:underline">3 star</a>
                <div class="w-2/4 h-5 mx-4 bg-gray-200 rounded">
                    <div class="h-5 bg-yellow-300 rounded" style="width: 8%"></div>
                </div>
                <span class="text-sm font-medium text-gray-500">8%</span>
            </div>
            <div class="flex items-center mt-4">
                <a href="#" class="text-sm font-medium text-black hover:underline">2 star</a>
                <div class="w-2/4 h-5 mx-4 bg-gray-200 rounded">
                    <div class="h-5 bg-yellow-300 rounded" style="width: 4%"></div>
                </div>
                <span class="text-sm font-medium text-gray-500">4%</span>
            </div>
            <div class="flex items-center mt-4">
                <a href="#" class="text-sm font-medium text-black hover:underline">1 star</a>
                <div class="w-2/4 h-5 mx-4 bg-gray-200 rounded">
                    <div class="h-5 bg-yellow-300 rounded" style="width: 1%"></div>
                </div>
                <span class="text-sm font-medium text-gray-500">1%</span>
            </div>

            <br>
            <!-- 
            to hide the scrollbar //sometimes it blocks vertical scroll, idk why. so not gonna use it
     style="  -ms-overflow-style: none;
        scrollbar-width: none;"            
-->

            <section id="reviews"
                class="flex gap-2 overflow-x-auto md:flex-col md:justify-center lg:flex-row lg:flex-wrap">

                <article class="p-8 flex-none w-4/5 rounded-xl md:w-full lg:w-[48%] bg-neutral-100">
                    <div class="flex items-center mb-4">
                        <img class="w-10 h-10 me-4 rounded-full" src="../images/dp/dp.jpg" alt="">
                        <div class="font-medium">
                            <p>Jese Leos <time datetime="2014-08-16 19:00" class="block text-sm text-gray-500">Joined on
                                    August 2014</time>
                            </p>
                        </div>
                    </div>
                    <div class="flex items-center mb-1 space-x-1 rtl:space-x-reverse">
                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 22 20">
                            <path
                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                        </svg>
                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 22 20">
                            <path
                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                        </svg>
                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 22 20">
                            <path
                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                        </svg>
                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 22 20">
                            <path
                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                        </svg>
                        <svg class="w-4 h-4 text-gray-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 22 20">
                            <path
                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                        </svg>
                        <h3 class="ms-2 text-sm font-semibold text-gray-900">Thinking to buy another
                            one!</h3>
                    </div>
                    <footer class="mb-5 text-sm text-gray-500">
                        <p>Reviewed in the United Kingdom on <time datetime="2017-03-03 19:00">March 3, 2017</time></p>
                    </footer>
                    <p class="mb-2 text-gray-500">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum
                        accusantium nobis fuga vel? Labore assumenda facilis eius voluptatibus ipsam itaque?</p>

                    <a href="#" class="block mb-5 text-sm font-medium text-blue-600 hover:underline">Read
                        more</a>
                    <aside>
                        <p class="mt-1 text-xs text-gray-500">19 people found this helpful</p>
                        <div class="flex items-center mt-3">
                            <a href="#"
                                class="px-2 py-1.5 text-xs font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 ">Helpful</a>
                            <a href="#"
                                class="ps-4 text-sm font-medium text-blue-600 hover:underline  border-gray-200 ms-4 border-s md:mb-0 ">Report
                                abuse</a>
                        </div>
                    </aside>
                </article>
                <article class="p-8 flex-none w-4/5 rounded-xl md:w-full lg:w-[48%] bg-neutral-100">
                    <div class="flex items-center mb-4">
                        <img class="w-10 h-10 me-4 rounded-full" src="../images/dp/dp.jpg" alt="">
                        <div class="font-medium ">
                            <p>Jese Leos <time datetime="2014-08-16 19:00" class="block text-sm text-gray-500">Joined on
                                    August 2014</time>
                            </p>
                        </div>
                    </div>
                    <div class="flex items-center mb-1 space-x-1 rtl:space-x-reverse">
                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 22 20">
                            <path
                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                        </svg>
                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 22 20">
                            <path
                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                        </svg>
                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 22 20">
                            <path
                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                        </svg>
                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 22 20">
                            <path
                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                        </svg>
                        <svg class="w-4 h-4 text-gray-300 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 22 20">
                            <path
                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                        </svg>
                        <h3 class="ms-2 text-sm font-semibold text-gray-900">Thinking to buy another
                            one!</h3>
                    </div>
                    <footer class="mb-5 text-sm text-gray-500">
                        <p>Reviewed in the United Kingdom on <time datetime="2017-03-03 19:00">March 3, 2017</time></p>
                    </footer>
                    <p class="mb-2 text-gray-500">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum
                        accusantium nobis fuga vel? Labore assumenda facilis eius voluptatibus ipsam itaque?</p>

                    <a href="#" class="block mb-5 text-sm font-medium text-blue-600 hover:underline">Read
                        more</a>
                    <aside>
                        <p class="mt-1 text-xs text-gray-500">19 people found this helpful</p>
                        <div class="flex items-center mt-3">
                            <a href="#"
                                class="px-2 py-1.5 text-xs font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 ">Helpful</a>
                            <a href="#"
                                class="ps-4 text-sm font-medium text-blue-600 hover:underline  border-gray-200 ms-4 border-s md:mb-0 ">Report
                                abuse</a>
                        </div>
                    </aside>
                </article>
                <article class="p-8 flex-none w-4/5 rounded-xl md:w-full lg:w-[48%] bg-neutral-100">
                    <div class="flex items-center mb-4">
                        <img class="w-10 h-10 me-4 rounded-full" src="../images/dp/dp.jpg" alt="">
                        <div class="font-medium ">
                            <p>Jese Leos <time datetime="2014-08-16 19:00" class="block text-sm text-gray-500 ">Joined
                                    on August 2014</time>
                            </p>
                        </div>
                    </div>
                    <div class="flex items-center mb-1 space-x-1 rtl:space-x-reverse">
                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 22 20">
                            <path
                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                        </svg>
                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 22 20">
                            <path
                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                        </svg>
                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 22 20">
                            <path
                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                        </svg>
                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 22 20">
                            <path
                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                        </svg>
                        <svg class="w-4 h-4 text-gray-300 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 22 20">
                            <path
                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                        </svg>
                        <h3 class="ms-2 text-sm font-semibold text-gray-900 ">Thinking to buy another
                            one!</h3>
                    </div>
                    <footer class="mb-5 text-sm text-gray-500 ">
                        <p>Reviewed in the United Kingdom on <time datetime="2017-03-03 19:00">March 3, 2017</time></p>
                    </footer>
                    <p class="mb-2 text-gray-500 ">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum
                        accusantium nobis fuga vel? Labore assumenda facilis eius voluptatibus ipsam itaque?</p>

                    <a href="#" class="block mb-5 text-sm font-medium text-blue-600 hover:underline">Read
                        more</a>
                    <aside>
                        <p class="mt-1 text-xs text-gray-500 ">19 people found this helpful</p>
                        <div class="flex items-center mt-3">
                            <a href="#"
                                class="px-2 py-1.5 text-xs font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 ">Helpful</a>
                            <a href="#"
                                class="ps-4 text-sm font-medium text-blue-600 hover:underline  border-gray-200 ms-4 border-s md:mb-0 ">Report
                                abuse</a>
                        </div>
                    </aside>
                </article>
                <article class="p-8 flex-none w-4/5 rounded-xl md:w-full lg:w-[48%] bg-neutral-100">
                    <div class="flex items-center mb-4">
                        <img class="w-10 h-10 me-4 rounded-full" src="../images/dp/dp.jpg" alt="">
                        <div class="font-medium ">
                            <p>Jese Leos <time datetime="2014-08-16 19:00" class="block text-sm text-gray-500 ">Joined
                                    on August 2014</time>
                            </p>
                        </div>
                    </div>
                    <div class="flex items-center mb-1 space-x-1 rtl:space-x-reverse">
                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 22 20">
                            <path
                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                        </svg>
                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 22 20">
                            <path
                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                        </svg>
                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 22 20">
                            <path
                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                        </svg>
                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 22 20">
                            <path
                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                        </svg>
                        <svg class="w-4 h-4 text-gray-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 22 20">
                            <path
                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                        </svg>
                        <h3 class="ms-2 text-sm font-semibold text-gray-900">Thinking to buy another
                            one!</h3>
                    </div>
                    <footer class="mb-5 text-sm text-gray-500 ">
                        <p>Reviewed in the United Kingdom on <time datetime="2017-03-03 19:00">March 3, 2017</time></p>
                    </footer>
                    <p class="mb-2 text-gray-500 ">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum
                        accusantium nobis fuga vel? Labore assumenda facilis eius voluptatibus ipsam itaque?</p>

                    <a href="#" class="block mb-5 text-sm font-medium text-blue-600 hover:underline ">Read
                        more</a>
                    <aside>
                        <p class="mt-1 text-xs text-gray-500">19 people found this helpful</p>
                        <div class="flex items-center mt-3">
                            <a href="#"
                                class="px-2 py-1.5 text-xs font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 ">Helpful</a>
                            <a href="#"
                                class="ps-4 text-sm font-medium text-blue-600 hover:underline  border-gray-200 ms-4 border-s md:mb-0 ">Report
                                abuse</a>
                        </div>
                    </aside>
                </article>


            </section>
            <br>
            <div class="flex justify-center">
                <a href="reviews.php"
                    class=" p-4 rounded-md border-2 border-neutral-500 text-lg font-normal hover:bg-slate-200">
                    Show all 887 reviews
                </a>
            </div>
        </div>

    </section>

    <section class="bg-neutral-100 fixed bottom-0 w-full pt-4 pb-4 pl-6 pr-6 md:pl-16 md:pr-16 border-t-2 border-neutral-300 flex justify-between">
        <div class="text-lg font-normal">
            <p> <span class="font-medium">$65</span> night</p>
            <p>Available for: <span class="underline font-medium">10-15</span></p>
        </div>
        <button class="flex items-center gap-2 pt-2 pb-2 pl-4 pr-4 bg-green-600 hover:bg-green-500 font-semibold rounded-md text-white text-lg">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-bookmark" viewBox="0 0 16 16">
  <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1z"/>
</svg>
      
<!-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-fill" viewBox="0 0 16 16">
  <path d="M2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2"/>
</svg>       -->
<p>
            Reserve
        </p>
        </button>
    </section>
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
      "hotSpots": [
        {
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
      "hotSpots": [
        {
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
      "hotSpots": [
        {
          "pitch": 14.1,
          "yaw": 1.5,
          "type": "scene",
          "text": "Return to Initial Panorama",
          "sceneId": "scene1"
        }
      ]
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
    return function(event, hs) {
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


<script src="https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.js"></script>
</body>

</html>