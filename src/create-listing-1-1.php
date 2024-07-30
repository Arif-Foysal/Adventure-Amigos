<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="output.css">
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>

<?php
include_once "partials/__nav.php"
?>
    <section class=" h-24 flex justify-end items-center px-10 ">
    <a href="help.php" type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 mx-8  dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Need Help?</a>
    <a href="discover.php" type="button" class="text-red-600 bg-white border border-red-600 focus:outline-none hover:bg-red-600 hover:text-white focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 mr-4  dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Exit</a>
    </section>


<section>
<div class="flex flex-col-reverse md:flex-row mx-5 lg:mx-40">
        <div class="w-full md:w-3/5 p-8">
            <!-- Prompt -->
            <p class="text-2xl">Step 1</p>
            <br>
            <h1 class="text-4xl font-bold">We'd love to hear about your spot!</h1>
            <p class="mt-4 text-xl">
                In this step, describe the type of property you offer and clarify if guests will book the whole place or just a room. Then, share the location and how many guests it can host.
            </p>
        </div>
        <div class="w-full md:w-2/5 p-8">
            <!-- SVG -->
            <img src="../images/vectors/house.jpg" alt="A vector image of a house">
        </div>
    </div>

    <div class="mt-0 w-full flex justify-between px-8 text-white p-4 lg:mt-16">
        <!-- navigator -->
        <a
            class="inline-flex items-center gap-2 rounded border border-neutral-700 px-8 py-3 text-neutral-700 hover:bg-neutral-700 hover:text-white focus:outline-none focus:ring active:bg-neutral-700tral"
            href="#">
<svg
class="size-5 rtl:rotate-180"
xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/>
</svg>
  <span class="text-sm font-medium"> Prev </span>
</a>

<a
  class="inline-flex items-center gap-2 rounded border border-neutral-700 bg-neutral-700 px-8 py-3 text-white hover:bg-transparent hover:text-neutral-700 focus:outline-none focus:ring active:text-neutral-700"
  href="create-listing-1-2.php"
>
  <span class="text-sm font-medium"> Next </span>

  <svg
    class="size-5 rtl:rotate-180"
    xmlns="http://www.w3.org/2000/svg"
    fill="none"
    viewBox="0 0 24 24"
    stroke="currentColor"
  >
    <path
      stroke-linecap="round"
      stroke-linejoin="round"
      stroke-width="2"
      d="M17 8l4 4m0 0l-4 4m4-4H3"
    />
  </svg>
</a>


    </div>
</section>


</body>
</html>