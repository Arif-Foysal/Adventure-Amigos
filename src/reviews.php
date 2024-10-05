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
    <div id="reviewContainer" class="p-10">

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
            <a href="reviews.php" class="flex items-center border-b-2 border-black hover:border-transparent h-6">
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
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 12 20">
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
        <section id="reviews" class="flex gap-2 overflow-x-auto md:flex-col md:justify-center lg:flex-row lg:flex-wrap">



        </section>
        <br>
        <div class="flex justify-center" id="all-reviews">

        </div>
    </div>






    <script src="https://cdn.tailwindcss.com"></script>
    </head>

    <body>
        <div id="reviewContainer" class="">
            <!-- Your existing HTML structure here -->
            <section id="reviews"
                class="flex gap-2 overflow-x-auto md:flex-col md:justify-center lg:flex-row lg:flex-wrap">
                <!-- Review cards will be dynamically inserted here -->
            </section>
            <br>
            <div class="flex justify-center" id="load-more-container">
                <!-- Load more button will be inserted here -->
            </div>
        </div>
        <br><br>
        <?php
    include_once 'partials/__footer.php';
    ?>
        <script>
            // Your existing JavaScript code here

            let reviewPage = 1;
            const reviewLimit = 4;
            let isLoading = false;
            let hasMore = true;

            function getQueryParam(param) {
                const urlParams = new URLSearchParams(window.location.search);
                return urlParams.get(param);
            }

            const hotelId = getQueryParam('id');

            function formatDateReviewer(dateTimeStr) {
                const date = new Date(dateTimeStr);
                const months = [
                    "January", "February", "March", "April", "May", "June",
                    "July", "August", "September", "October", "November", "December"
                ];
                return `${months[date.getMonth()]} ${date.getFullYear()}`;
            }

            function renderStars(rating) {
                let stars = '';
                for (let i = 1; i <= 5; i++) {
                    if (i <= rating) {
                        stars += `<svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                    </svg>`;
                    } else {
                        stars += `<svg class="w-4 h-4 text-gray-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                    </svg>`;
                    }
                }
                return stars;
            }

            function fetchReviews() {
                if (isLoading || !hasMore) return;

                isLoading = true;
                fetch(`get-reviews.php?id=${hotelId}&page=${reviewPage}&limit=${reviewLimit}`)
                    .then(response => response.json())
                    .then(data => {
                        const hotelReview = document.getElementById('reviews');
                        const loadMoreContainer = document.getElementById('load-more-container');

                        if (data.reviews.length === 0 && reviewPage === 1) {
                            document.getElementById('reviewContainer').innerHTML = `
                            <p class="text-4xl pt-8 font-thin text-center">No reviews yet</p>
                            <!-- Your existing "write review" HTML here -->
                        `;
                            document.getElementById('post-review').addEventListener('click', addReview);
                            return;
                        }

                        data.reviews.forEach(review => {
                            const reviewCard = `
                            <article class="p-8 border flex-none w-4/5 rounded-xl md:w-full lg:w-[48%] bg-neutral-50">
                                <div class="flex items-center mb-4">
                                    <img class="w-10 h-10 me-4 rounded-full" src="../images/dp/dp.jpg" alt="">
                                    <div class="font-medium">
                                        <p>${review.reviewer_first_name} <time datetime="${review.review_date}" class="block text-sm text-gray-500">Joined on ${formatDateReviewer(review.review_date)}</time></p>
                                    </div>
                                </div>
                                <div class="flex items-center mb-1 space-x-1 rtl:space-x-reverse">
                                    ${renderStars(review.rating)}
                                </div>
                                <p class="mb-2 text-gray-500">${review.review_text}</p>
                                <aside>
                                    <p class="mt-1 text-xs text-gray-500">19 people found this helpful</p>
                                    <div class="flex items-center mt-3">
                                        <a href="#" class="px-2 py-1.5 text-xs font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100">Helpful</a>
                                        <a href="#" class="ps-4 text-sm font-medium text-gray-800 decotation-underlined hover:underline border-gray-200 ms-4 border-s md:mb-0">Report abuse</a>
                                    </div>
                                </aside>
                            </article>
                        `;
                            hotelReview.innerHTML += reviewCard;
                        });

                        reviewPage++;
                        hasMore = data.reviews.length === reviewLimit;

                        if (hasMore) {
                            loadMoreContainer.innerHTML = `
                            <button id="load-more-button" class="py-2 px-3 inline-flex items-center gap-x-2 text-md font-medium rounded-lg border border-gray-800 text-gray-800 hover:bg-gray-200 focus:outline-none focus:border-gray-500 focus:text-gray-500">
                                Load More Reviews
                            </button>
                        `;
                            document.getElementById('load-more-button').addEventListener('click', fetchReviews);
                        } else {
                            loadMoreContainer.innerHTML = '';
                        }

                        // Update review count and percentages
                        if (data.reviews.length > 0) {
                            document.getElementById('reviewCount').innerHTML = data.total_reviews + " reviews";
                            updateReviewPercentages(data.reviews[0]);
                        }

                        isLoading = false;
                    })
                    .catch(error => {
                        console.error('Error fetching reviews:', error);
                        isLoading = false;
                    });
            }

            function updateReviewPercentages(review) {
                ['1', '2', '3', '4', '5'].forEach(star => {
                    const percentage = Math.floor(review[`percentage_${star}_star`]);
                    document.getElementById(`percentage_${star}_star`).innerHTML = percentage + "%";
                    document.getElementById(`percentage_${star}_star_fill`).style.width = `${percentage}%`;
                });
            }

            // Initial load of reviews
            fetchReviews();

            // Your existing addReview function here
            function addReview() {
                // Implementation of adding a new review
            }
        </script>
        </body>

</html>