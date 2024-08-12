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
<!-- Calendar -->
<div class="sm:flex">
  <!-- Calendar -->
  <div class="p-3 space-y-0.5">
    <!-- Months -->
    <div class="grid grid-cols-5 items-center gap-x-3 mx-1.5 pb-3">
      <!-- Prev Button -->
      <div class="col-span-1">
        <button type="button" class="size-8 flex justify-center items-center text-gray-800 hover:bg-gray-100 rounded-full disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100" aria-label="Previous">
          <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m15 18-6-6 6-6"/></svg>
        </button>
      </div>
      <!-- End Prev Button -->

      <!-- Month / Year -->
      <div class="col-span-3 flex justify-center items-center gap-x-1">
        <div class="relative">
          <select data-hs-select='{
              "placeholder": "Select month",
              "toggleTag": "<button type=\"button\" aria-expanded=\"false\"></button>",
              "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative flex text-nowrap w-full cursor-pointer text-start font-medium text-gray-800 hover:text-blue-600 focus:outline-none focus:text-blue-600 before:absolute before:inset-0 before:z-[1]",
              "dropdownClasses": "mt-2 z-50 w-32 max-h-72 p-1 space-y-0.5 bg-white border border-gray-200 rounded-lg shadow-lg overflow-hidden overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300",
              "optionClasses": "p-2 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100",
              "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><svg class=\"shrink-0 size-3.5 text-gray-800" xmlns=\"http:.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"20 6 9 17 4 12\"/></svg></span></div>"
            }' class="hidden">
            <option value="0">January</option>
            <option value="1">February</option>
            <option value="2">March</option>
            <option value="3">April</option>
            <option value="4">May</option>
            <option value="5">June</option>
            <option value="6" selected>July</option>
            <option value="7">August</option>
            <option value="8">September</option>
            <option value="9">October</option>
            <option value="10">November</option>
            <option value="11">December</option>
          </select>
        </div>

        <span class="text-gray-800">/</span>

        <div class="relative">
          <select data-hs-select='{
              "placeholder": "Select year",
              "toggleTag": "<button type=\"button\" aria-expanded=\"false\"></button>",
              "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative flex text-nowrap w-full cursor-pointer text-start font-medium text-gray-800 hover:text-blue-600 focus:outline-none focus:text-blue-600 before:absolute before:inset-0 before:z-[1]",
              "dropdownClasses": "mt-2 z-50 w-20 max-h-72 p-1 space-y-0.5 bg-white border border-gray-200 rounded-lg shadow-lg overflow-hidden overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300",
              "optionClasses": "p-2 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100",
              "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><svg class=\"shrink-0 size-3.5 text-gray-800" xmlns=\"http:.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"20 6 9 17 4 12\"/></svg></span></div>"
            }' class="hidden">
            <option selected>2023</option>
            <option>2024</option>
            <option>2025</option>
            <option>2026</option>
            <option>2027</option>
          </select>
        </div>
      </div>
      <!-- End Month / Year -->

      <!-- Next Button -->
      <div class="col-span-1 flex justify-end">
        <button type="button" class="opacity-0 pointer-events-none size-8 flex justify-center items-center text-gray-800 hover:bg-gray-100 rounded-full disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100" aria-label="Next">
          <svg class="shrink-0 size-4" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
        </button>
      </div>
      <!-- End Next Button -->
    </div>
    <!-- Months -->

    <!-- Weeks -->
    <div class="flex pb-1.5">
      <span class="m-px w-10 block text-center text-sm text-gray-500">
        Mo
      </span>
      <span class="m-px w-10 block text-center text-sm text-gray-500">
        Tu
      </span>
      <span class="m-px w-10 block text-center text-sm text-gray-500">
        We
      </span>
      <span class="m-px w-10 block text-center text-sm text-gray-500">
        Th
      </span>
      <span class="m-px w-10 block text-center text-sm text-gray-500">
        Fr
      </span>
      <span class="m-px w-10 block text-center text-sm text-gray-500">
        Sa
      </span>
      <span class="m-px w-10 block text-center text-sm text-gray-500">
        Su
      </span>
    </div>
    <!-- Weeks -->

    <!-- Days -->
    <div class="flex">
      <div>
        <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-blue-600 hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-blue-600 focus:text-blue-600" disabled>
          26
        </button>
      </div>
      <div>
        <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-blue-600 hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-blue-600 focus:text-blue-600" disabled>
          27
        </button>
      </div>
      <div>
        <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-blue-600 hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-blue-600 focus:text-blue-600" disabled>
          28
        </button>
      </div>
      <div>
        <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-blue-600 hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-blue-600 focus:text-blue-600" disabled>
          29
        </button>
      </div>
      <div>
        <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-blue-600 hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-blue-600 focus:text-blue-600" disabled>
          30
        </button>
      </div>
      <div>
        <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-blue-600 hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-blue-600 focus:text-blue-600">
          1
        </button>
      </div>
      <div>
        <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-blue-600 hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-blue-600 focus:text-blue-600">
          2
        </button>
      </div>
    </div>
    <!-- Days -->

    <!-- Days -->
    <div class="flex">
      <div>
        <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-blue-600 hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-blue-600 focus:text-blue-600">
          3
        </button>
      </div>
      <div>
        <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-blue-600 hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-blue-600 focus:text-blue-600">
          4
        </button>
      </div>
      <div >
        <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-blue-600 hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-blue-600 focus:text-blue-600">
          5
        </button>
      </div>
      <div >
        <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-blue-600 hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-blue-600 focus:text-blue-600">
          6
        </button>
      </div>
      <div >
        <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-blue-600 hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-blue-600 focus:text-blue-600">
          7
        </button>
      </div>
      <div >
        <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-blue-600 hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-blue-600 focus:text-blue-600">
          8
        </button>
      </div>
      <div >
        <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-blue-600 hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-blue-600 focus:text-blue-600">
          9
        </button>
      </div>
    </div>
    <!-- Days -->

    <!-- Days -->
    <div class="flex">
      <div >
        <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-blue-600 hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-blue-600 focus:text-blue-600">
          10
        </button>
      </div>
      <div >
        <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-blue-600 hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-blue-600 focus:text-blue-600">
          11
        </button>
      </div>
      <div >
        <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-blue-600 hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-blue-600 focus:text-blue-600">
          12
        </button>
      </div>
      <div>
        <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-blue-600 hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-blue-600 focus:text-blue-600">
          13
        </button>
      </div>
      <div>
        <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-blue-600 hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-blue-600 focus:text-blue-600">
          14
        </button>
      </div>
      <div>
        <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-blue-600 hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-blue-600 focus:text-blue-600">
          15
        </button>
      </div>
      <div>
        <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-blue-600 hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-blue-600 focus:text-blue-600">
          16
        </button>
      </div>
    </div>
    <!-- Days -->

    <!-- Days -->
    <div class="flex">
      <div>
        <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-blue-600 hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-blue-600 focus:text-blue-600">
          17
        </button>
      </div>
      <div>
        <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-blue-600 hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-blue-600 focus:text-blue-600">
          18
        </button>
      </div>
      <div>
        <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-blue-600 hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-blue-600 focus:text-blue-600">
          19
        </button>
      </div>
      <div>
        <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-blue-600 hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-blue-600 focus:text-blue-600">
          20
        </button>
      </div>
      <div>
        <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-blue-600 hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-blue-600 focus:text-blue-600">
          21
        </button>
      </div>
      <div>
        <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-blue-600 hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-blue-600 focus:text-blue-600">
          22
        </button>
      </div>
      <div>
        <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-blue-600 hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-blue-600 focus:text-blue-600">
          23
        </button>
      </div>
    </div>
    <!-- Days -->

    <!-- Days -->
    <div class="flex">
      <div>
        <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-blue-600 hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-blue-600 focus:text-blue-600">
          24
        </button>
      </div>
      <div class="bg-gray-100 rounded-s-full">
        <button type="button" class="m-px size-10 flex justify-center items-center bg-blue-600 border border-transparent text-sm font-medium text-white hover:border-blue-600 rounded-full disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100">
          25
        </button>
      </div>
      <div class="bg-gray-100 first:rounded-s-full last:rounded-e-full">
        <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-blue-600 hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-blue-600 focus:text-blue-600">
          26
        </button>
      </div>
      <div class="bg-gray-100 first:rounded-s-full last:rounded-e-full">
        <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-blue-600 hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-blue-600 focus:text-blue-600">
          27
        </button>
      </div>
      <div class="bg-gray-100 first:rounded-s-full last:rounded-e-full">
        <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-blue-600 hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-blue-600 focus:text-blue-600">
          28
        </button>
      </div>
      <div class="bg-gray-100 first:rounded-s-full last:rounded-e-full">
        <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-blue-600 hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-blue-600 focus:text-blue-600">
          29
        </button>
      </div>
      <div class="bg-gray-100 first:rounded-s-full last:rounded-e-full">
        <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-blue-600 hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-blue-600 focus:text-blue-600">
          30
        </button>
      </div>
    </div>
    <!-- Days -->

    <!-- Days -->
    <div class="flex">
      <div class="bg-gray-100 first:rounded-s-full last:rounded-e-full">
        <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-blue-600 hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-blue-600 focus:text-blue-600">
          31
        </button>
      </div>
      <div class="bg-gradient-to-r from-gray-100">
        <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100" disabled>
          1
        </button>
      </div>
      <div>
        <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100" disabled>
          2
        </button>
      </div>
      <div>
        <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100" disabled>
          3
        </button>
      </div>
      <div>
        <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100" disabled>
          4
        </button>
      </div>
      <div>
        <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100" disabled>
          5
        </button>
      </div>
      <div>
        <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100" disabled>
          6
        </button>
      </div>
    </div>
    <!-- Days -->
  </div>

  <!-- Calendar -->
  <div class="p-3 space-y-0.5">
    <!-- Months -->
    <div class="grid grid-cols-5 items-center gap-x-3 mx-1.5 pb-3">
      <!-- Prev Button -->
      <div class="col-span-1">
        <button type="button" class="opacity-0 pointer-events-none size-8 flex justify-center items-center text-gray-800 hover:bg-gray-100 rounded-full disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100" aria-label="Previous">
          <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m15 18-6-6 6-6"/></svg>
        </button>
      </div>
      <!-- End Prev Button -->

      <!-- Month / Year -->
      <div class="col-span-3 flex justify-center items-center gap-x-1">
        <div class="relative">
          <select data-hs-select='{
              "placeholder": "Select month",
              "toggleTag": "<button type=\"button\" aria-expanded=\"false\"></button>",
              "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative flex text-nowrap w-full cursor-pointer text-start font-medium text-gray-800 hover:text-blue-600 focus:outline-none focus:text-blue-600 before:absolute before:inset-0 before:z-[1]",
              "dropdownClasses": "mt-2 z-50 w-32 max-h-72 p-1 space-y-0.5 bg-white border border-gray-200 rounded-lg shadow-lg overflow-hidden overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300",
              "optionClasses": "p-2 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100",
              "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><svg class=\"shrink-0 size-3.5 text-gray-800" xmlns=\"http:.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"20 6 9 17 4 12\"/></svg></span></div>"
            }' class="hidden">
            <option value="0">January</option>
            <option value="1">February</option>
            <option value="2">March</option>
            <option value="3">April</option>
            <option value="4">May</option>
            <option value="5">June</option>
            <option value="6" selected>July</option>
            <option value="7">August</option>
            <option value="8">September</option>
            <option value="9">October</option>
            <option value="10">November</option>
            <option value="11">December</option>
          </select>
        </div>

        <span class="text-gray-800">/</span>

        <div class="relative">
          <select data-hs-select='{
              "placeholder": "Select year",
              "toggleTag": "<button type=\"button\" aria-expanded=\"false\"></button>",
              "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative flex text-nowrap w-full cursor-pointer text-start font-medium text-gray-800 hover:text-blue-600 focus:outline-none focus:text-blue-600 before:absolute before:inset-0 before:z-[1]",
              "dropdownClasses": "mt-2 z-50 w-20 max-h-72 p-1 space-y-0.5 bg-white border border-gray-200 rounded-lg shadow-lg overflow-hidden overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300",
              "optionClasses": "p-2 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100",
              "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><svg class=\"shrink-0 size-3.5 text-gray-800" xmlns=\"http:.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"20 6 9 17 4 12\"/></svg></span></div>"
            }' class="hidden">
            <option selected>2023</option>
            <option>2024</option>
            <option>2025</option>
            <option>2026</option>
            <option>2027</option>
          </select>
        </div>
      </div>
      <!-- End Month / Year -->

      <!-- Next Button -->
      <div class="col-span-1 flex justify-end">
        <button type="button" class="size-8 flex justify-center items-center text-gray-800 hover:bg-gray-100 rounded-full disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100" aria-label="Next">
          <svg class="shrink-0 size-4" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
        </button>
      </div>
      <!-- End Next Button -->
    </div>
    <!-- Months -->

    <!-- Weeks -->
    <div class="flex pb-1.5">
      <span class="m-px w-10 block text-center text-sm text-gray-500">
        Mo
      </span>
      <span class="m-px w-10 block text-center text-sm text-gray-500">
        Tu
      </span>
      <span class="m-px w-10 block text-center text-sm text-gray-500">
        We
      </span>
      <span class="m-px w-10 block text-center text-sm text-gray-500">
        Th
      </span>
      <span class="m-px w-10 block text-center text-sm text-gray-500">
        Fr
      </span>
      <span class="m-px w-10 block text-center text-sm text-gray-500">
        Sa
      </span>
      <span class="m-px w-10 block text-center text-sm text-gray-500">
        Su
      </span>
    </div>
    <!-- Weeks -->

    <!-- Days -->
    <div class="flex">
      <div class="bg-gradient-to-l from-gray-100">
        <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100" disabled>
          31
        </button>
      </div>
      <div class="bg-gray-100 first:rounded-s-full last:rounded-e-full">
        <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100">
          1
        </button>
      </div>
      <div class="bg-gray-100 first:rounded-s-full last:rounded-e-full">
        <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100">
          2
        </button>
      </div>
      <div class="bg-gray-100 first:rounded-s-full last:rounded-e-full">
        <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100">
          3
        </button>
      </div>
      <div class="bg-gray-100 first:rounded-s-full last:rounded-e-full">
        <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100">
          4
        </button>
      </div>
      <div class="bg-gray-100 first:rounded-s-full last:rounded-e-full">
        <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-blue-600 hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-blue-600 focus:text-blue-600">
          5
        </button>
      </div>
      <div class="bg-gray-100 first:rounded-s-full last:rounded-e-full">
        <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-blue-600 hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-blue-600 focus:text-blue-600">
          6
        </button>
      </div>
    </div>
    <!-- Days -->

    <!-- Days -->
    <div class="flex">
      <div class="bg-gray-100 first:rounded-s-full last:rounded-e-full">
        <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-blue-600 hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-blue-600 focus:text-blue-600">
          7
        </button>
      </div>
      <div class="bg-gray-100 first:rounded-s-full last:rounded-e-full">
        <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-blue-600 hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-blue-600 focus:text-blue-600">
          8
        </button>
      </div>
      <div class="bg-gray-100 first:rounded-s-full last:rounded-e-full">
        <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-blue-600 hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-blue-600 focus:text-blue-600">
          9
        </button>
      </div>
      <div class="bg-gray-100 first:rounded-s-full last:rounded-e-full">
        <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-blue-600 hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-blue-600 focus:text-blue-600">
          10
        </button>
      </div>
      <div class="bg-gray-100 first:rounded-s-full last:rounded-e-full">
        <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-blue-600 hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-blue-600 focus:text-blue-600">
          11
        </button>
      </div>
      <div class="bg-gray-100 first:rounded-s-full last:rounded-e-full">
        <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-blue-600 hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-blue-600 focus:text-blue-600">
          12
        </button>
      </div>
      <div class="bg-gray-100 first:rounded-s-full last:rounded-e-full">
        <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-blue-600 hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-blue-600 focus:text-blue-600">
          13
        </button>
      </div>
    </div>
    <!-- Days -->

    <!-- Days -->
    <div class="flex">
      <div class="bg-gray-100 first:rounded-s-full last:rounded-e-full">
        <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-blue-600 hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-blue-600 focus:text-blue-600">
          14
        </button>
      </div>
      <div class="bg-gray-100 first:rounded-s-full last:rounded-e-full">
        <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-blue-600 hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-blue-600 focus:text-blue-600">
          15
        </button>
      </div>
      <div class="bg-gray-100 first:rounded-s-full last:rounded-e-full">
        <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-blue-600 hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-blue-600 focus:text-blue-600">
          16
        </button>
      </div>
      <div class="bg-gray-100 first:rounded-s-full last:rounded-e-full">
        <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-blue-600 hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-blue-600 focus:text-blue-600">
          17
        </button>
      </div>
      <div class="bg-gray-100 first:rounded-s-full last:rounded-e-full">
        <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-blue-600 hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-blue-600 focus:text-blue-600">
          18
        </button>
      </div>
      <div class="bg-gray-100 first:rounded-s-full last:rounded-e-full">
        <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-blue-600 hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-blue-600 focus:text-blue-600">
          19
        </button>
      </div>
      <div class="bg-gray-100 first:rounded-s-full last:rounded-e-full">
        <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-blue-600 hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-blue-600 focus:text-blue-600">
          20
        </button>
      </div>
    </div>
    <!-- Days -->

    <!-- Days -->
    <div class="flex">
      <div class="bg-gray-100 first:rounded-s-full last:rounded-e-full">
        <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-blue-600 hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-blue-600 focus:text-blue-600">
          21
        </button>
      </div>
      <div class="bg-gray-100 first:rounded-s-full last:rounded-e-full">
        <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-blue-600 hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-blue-600 focus:text-blue-600">
          22
        </button>
      </div>
      <div class="bg-gray-100 first:rounded-s-full last:rounded-e-full">
        <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-blue-600 hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-blue-600 focus:text-blue-600">
          23
        </button>
      </div>
      <div class="bg-gray-100 first:rounded-s-full last:rounded-e-full">
        <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-blue-600 hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-blue-600 focus:text-blue-600">
          24
        </button>
      </div>
      <div class="bg-gray-100 rounded-e-full">
        <button type="button" class="m-px size-10 flex justify-center items-center bg-blue-600 border border-transparent text-sm font-medium text-white hover:border-blue-600 rounded-full disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100">
          25
        </button>
      </div>
      <div>
        <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-blue-600 hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-blue-600 focus:text-blue-600">
          26
        </button>
      </div>
      <div>
        <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-blue-600 hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-blue-600 focus:text-blue-600">
          27
        </button>
      </div>
    </div>
    <!-- Days -->

    <!-- Days -->
    <div class="flex">
      <div>
        <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-blue-600 hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-blue-600 focus:text-blue-600">
          28
        </button>
      </div>
      <div>
        <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-blue-600 hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-blue-600 focus:text-blue-600">
          29
        </button>
      </div>
      <div>
        <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-blue-600 hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-blue-600 focus:text-blue-600">
          30
        </button>
      </div>
      <div>
        <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-blue-600 hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-blue-600 focus:text-blue-600">
          31
        </button>
      </div>
      <div>
        <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100" disabled>
          1
        </button>
      </div>
      <div>
        <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100" disabled>
          2
        </button>
      </div>
      <div>
        <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100" disabled>
          3
        </button>
      </div>
    </div>
    <!-- Days -->

    <!-- Days -->
    <div class="flex">
      <div>
        <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100" disabled>
          4
        </button>
      </div>
      <div>
        <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100" disabled>
          5
        </button>
      </div>
      <div>
        <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100" disabled>
          6
        </button>
      </div>
      <div>
        <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100" disabled>
          7
        </button>
      </div>
      <div>
        <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100" disabled>
          8
        </button>
      </div>
      <div>
        <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100" disabled>
          9
        </button>
      </div>
      <div>
        <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100" disabled>
          10
        </button>
      </div>
    </div>
    <!-- Days -->
  </div>
</div>
<!-- End Calendar -->

  <!-- Button Group -->
  <div class="flex items-center py-3 px-4 justify-end border-t border-gray-200 gap-x-2">

    <span class="md:me-3 text-xs text-gray-500">
      20.07.2023 - 10.08.2023
    </span>
    <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-xs font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-50">
      Cancel
    </button>
    <button type="button" class="py-2 px-3  inline-flex justify-center items-center gap-x-2 text-xs font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:ring-2 focus:ring-blue-500">
      Apply
    </button>
  </div>
  <!-- End Button Group -->    
</body>
</html>
