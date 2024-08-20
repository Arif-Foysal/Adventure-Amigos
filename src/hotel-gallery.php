<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Profile</title>
    <link rel="stylesheet" href="style/square-img.css">
    <link rel="stylesheet" href="output.css">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

    <?php
    include_once "partials/__nav.php";
    ?>


    <section class=" p-6">
        <div class=" max-w-6xl mx-auto">
            <h1 class="text-3xl font-semibold pb-2">Title of the Accomodation</h1>
            <section class="flex gap-1 items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-geo-alt"
                    viewBox="0 0 16 16">
                    <path
                        d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10" />
                    <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                </svg>
                <h1 class="text-2xl font-semibold">Dhaka, Bangladesh</h1>
            </section>
            <h2 class="text-xl font-normal text-gray-500">details/ # of beds, # of bathrooms etc</h2>
<br>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-3">
                <div class="group square">
                    <img class="gallery-img h-auto max-w-full rounded-lg transition duration-200 group-hover:scale-105 group-hover:cursor-pointer"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="">
                </div>
                
                <div class="group square">
                    <img class="gallery-img h-auto max-w-full rounded-lg transition duration-200 group-hover:scale-105 group-hover:cursor-pointer"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="">
                </div>
                <div class="group square">
                    <img class="gallery-img h-auto max-w-full rounded-lg transition duration-200 group-hover:scale-105 group-hover:cursor-pointer"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" alt="">
                </div>
                <div class="group square">
                    <img class="gallery-img h-auto max-w-full rounded-lg transition duration-200 group-hover:scale-105 group-hover:cursor-pointer"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" alt="">
                </div>
                <div class="group square">
                    <img class="gallery-img h-auto max-w-full rounded-lg transition duration-200 group-hover:scale-105 group-hover:cursor-pointer"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg" alt="">
                </div>
                <div class="group square">
                    <img class="gallery-img h-auto max-w-full rounded-lg transition duration-200 group-hover:scale-105 group-hover:cursor-pointer"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-5.jpg" alt="">
                </div>
                <div class="group square">
                    <img class="gallery-img h-auto max-w-full rounded-lg transition duration-200 group-hover:scale-105 group-hover:cursor-pointer"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-6.jpg" alt="">
                </div>
                <div class="group square">
                    <img class="gallery-img h-auto max-w-full rounded-lg transition duration-200 group-hover:scale-105 group-hover:cursor-pointer"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-7.jpg" alt="">
                </div>
                <div class="group square">
                    <img class="gallery-img h-auto max-w-full rounded-lg transition duration-200 group-hover:scale-105 group-hover:cursor-pointer"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-8.jpg" alt="">
                </div>
                <div class="group square">
                    <img class="gallery-img h-auto max-w-full rounded-lg transition duration-200 group-hover:scale-105 group-hover:cursor-pointer"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-9.jpg" alt="">
                </div>
                <div class="group square">
                    <img class="gallery-img h-auto max-w-full rounded-lg transition duration-200 group-hover:scale-105 group-hover:cursor-pointer"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-10.jpg" alt="">
                </div>
                <div class="group square">
                    <img class="gallery-img h-auto max-w-full rounded-lg transition duration-200 group-hover:scale-105 group-hover:cursor-pointer"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-11.jpg" alt="">
                </div>
            </div>
        </div>
    </section>

    <?php
    include_once 'partials/__footer.php';
    ?>
</body>

</html>