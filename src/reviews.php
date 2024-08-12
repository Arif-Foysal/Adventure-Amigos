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
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <?php
    include_once 'partials/__nav.php';
    ?>

    <section class=" p-6">
        <div class=" max-w-5xl mx-auto">
        <h1 class="text-3xl font-semibold pb-4">Reviews</h1>
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

            <section id="reviews" class="flex flex-col space-y-3 justify-center">

                <article class="p-8 flex-none rounded-xl  bg-neutral-100">
                    <div class="flex items-center mb-4">
                        <img class="w-10 h-10 me-4 rounded-full" src="../images/dp/dp.JPG" alt="">
                        <div class="font-medium">
                            <p>One Piece <time datetime="2014-08-16 19:00" class="block text-sm text-gray-500">Joined on
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
                        <p>Reviewed in Bangladesh on <time datetime="2017-03-03 19:00">March 3, 2017</time></p>
                    </footer>
                    <p class="mb-2 text-gray-500">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum
                        accusantium nobis fuga vel? Labore assumenda facilis eius voluptatibus ipsam itaque?</p>

                    <a href="#" class="block mb-5 text-sm font-medium text-neutral-800 underline hover:none">Read
                        more</a>
                    <aside>
                        <p class="mt-1 text-xs text-gray-500">19 people found this helpful</p>
                        <div class="flex items-center mt-3">
                            <a href="#"
                                class="px-3 py-2 text-xs font-medium text-neutral-800 focus:outline-none bg-white rounded-md border border-gray-200 hover:bg-gray-100 focus:z-10 focus:ring-4 focus:ring-gray-100 ">Helpful</a>
                            <a href="#"
                                class="ps-4 text-sm font-medium text-neutral-900 underline  border-gray-200 ms-4 border-s md:mb-0 ">Report
                                abuse</a>
                        </div>
                    </aside>
                </article>
                <article class="p-8 flex-none rounded-xl  bg-neutral-100">
                    <div class="flex items-center mb-4">
                        <img class="w-10 h-10 me-4 rounded-full" src="../images/dp/dp.JPG" alt="">
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
                <article class="p-8 flex-none rounded-xl  bg-neutral-100">
                    <div class="flex items-center mb-4">
                        <img class="w-10 h-10 me-4 rounded-full" src="../images/dp/dp.JPG" alt="">
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
                <article class="p-8 flex-none rounded-xl  bg-neutral-100">
                    <div class="flex items-center mb-4">
                        <img class="w-10 h-10 me-4 rounded-full" src="../images/dp/dp.JPG" alt="">
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
            </section>
        </div>
    </section>
    <?php
    include_once 'partials/__footer.php';
    ?>
</body>

</html>