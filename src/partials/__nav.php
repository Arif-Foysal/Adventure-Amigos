<!--
ToDo
- [ ] Make dynacmic profile photo
- [ ] Make tab like navigation for better user experience //learn more js first
- [ ] Toggle the hamburger menus
-->
<?php
include_once 'partials/__session.php';
// include_once 'partials/__currency.php';
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Kode+Mono:wght@400..700&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
  <!-- <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" /> -->
  <!-- <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js'></script> -->
</head>
<!-- <style>
        #calendar {
            max-width: 900px;
            margin: 40px auto;
            padding: 0 10px;
        }
    </style> -->
<style>
  .navbar-transition {
    transition: transform 0.6s ease-in-out;
    /* Custom transition duration */
  }

  * {
    font-family: "Nunito";
  }

  nav {
    z-index: 100;
  }
</style>

<script src="https://cdn.tailwindcss.com"></script>
<nav id="navbar" class="bg-white border-b border-gray-300 pb-2 sm:pb-0 sticky top-0 w-full navbar-transition">
  <section id="main-nav">

    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
      <div class="relative flex h-16 items-center justify-between">
        <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
          <!-- Mobile menu button-->
          <!-- onclick="toggleHam()" -->
          <button type="button" id="hamburger"
            class="relative inline-flex items-center justify-center rounded-md p-2  hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
            aria-controls="mobile-menu" aria-expanded="false">
            <span class="absolute -inset-0.5"></span>

            <span class="sr-only">Open main menu</span>


            <!--
            Icon when menu is closed. fill="currentColor" class="h-6 w-6" viewBox="0 0 16 16"
            Menu open: "hidden", Menu closed: "block"
          -->
            <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
              aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
            <!--
            Icon when menu is open.
            Menu open: "block", Menu closed: "hidden"
          -->
            <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
              aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
        <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
          <div class="flex flex-shrink-0 items-center">
            <img class="h-10 w-auto" src="../images/logo.png" alt="Your Company">
          </div>

          <div class="hidden sm:ml-6 sm:block">
            <div class="flex space-x-4">
              <!-- Search Bar -->
              <div class="relative">
                <input type="text" class="  pr-24 py-auto border border-gray-300 rounded-md w-64"
                  placeholder="Find Anything" aria-label="search">
                <button
                  class="absolute right-0 top-0 bg-green-600 hover:bg-green-500 border text-white font-semibold py-2 px-4 rounded-r-md "
                  type="button" id="search-btn">Search</button>
              </div>
              <!-- experimental -->

              <!-- search bar end -->
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
              &nbsp;&nbsp;

              <?php
              if ($currentPage == 'discover.php') {
                echo '
             <a href="discover.php" class="flex items-center border-b-2 border-black">
            <svg class="text-black" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-globe-americas" viewBox="0 0 16 16">
             <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0M2.04 4.326c.325 1.329 2.532 2.54 3.717 3.19.48.263.793.434.743.484q-.121.12-.242.234c-.416.396-.787.749-.758 1.266.035.634.618.824 1.214 1.017.577.188 1.168.38 1.286.983.082.417-.075.988-.22 1.52-.215.782-.406 1.48.22 1.48 1.5-.5 3.798-3.186 4-5 .138-1.243-2-2-3.5-2.5-.478-.16-.755.081-.99.284-.172.15-.322.279-.51.216-.445-.148-2.5-2-1.5-2.5.78-.39.952-.171 1.227.182.078.099.163.208.273.318.609.304.662-.132.723-.633.039-.322.081-.671.277-.867.434-.434 1.265-.791 2.028-1.12.712-.306 1.365-.587 1.579-.88A7 7 0 1 1 2.04 4.327Z"/>
            </svg>
                &nbsp;
                <p
                class="text-md font-semibold text-black">Discover</p>
              </a>
    
    ';
              } else {
                echo '
             <a href="discover.php" class="flex items-center border-b-2 border-transparent hover:border-gray-600 hover:border-b-2">
            <svg class="text-gray-600" xxmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-globe-americas" viewBox="0 0 16 16">
             <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0M2.04 4.326c.325 1.329 2.532 2.54 3.717 3.19.48.263.793.434.743.484q-.121.12-.242.234c-.416.396-.787.749-.758 1.266.035.634.618.824 1.214 1.017.577.188 1.168.38 1.286.983.082.417-.075.988-.22 1.52-.215.782-.406 1.48.22 1.48 1.5-.5 3.798-3.186 4-5 .138-1.243-2-2-3.5-2.5-.478-.16-.755.081-.99.284-.172.15-.322.279-.51.216-.445-.148-2.5-2-1.5-2.5.78-.39.952-.171 1.227.182.078.099.163.208.273.318.609.304.662-.132.723-.633.039-.322.081-.671.277-.867.434-.434 1.265-.791 2.028-1.12.712-.306 1.365-.587 1.579-.88A7 7 0 1 1 2.04 4.327Z"/>
            </svg>
                &nbsp;
                <p
                class="text-md font-semibold text-gray-600">Discover</p>
              </a>
    ';
              }



              if ($currentPage == 'hotels.php') {
                echo '
             <a href="hotels.php" class="flex items-center border-b-2 border-black">
            <svg class="text-black" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
              <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z"/>
            </svg>
                &nbsp;
                <p
                class="text-md font-semibold text-black">Stays</p>
              </a>
    
    ';
              } else {
                echo '
             <a href="hotels.php" class="flex items-center border-b-2 border-transparent hover:border-gray-600 hover:border-b-2">
            <svg class="text-gray-600" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
              <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z"/>
            </svg>
                &nbsp;
                <p
                class="text-md font-semibold text-gray-600">Stays</p>
              </a>
    ';
              }


              if ($currentPage == 'activities.php') {
                echo '
             <a href="activities.php" class="flex items-center border-b-2 border-black">
            <svg class="text-black" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-flag" viewBox="0 0 16 16">
              <path d="M14.778.085A.5.5 0 0 1 15 .5V8a.5.5 0 0 1-.314.464L14.5 8l.186.464-.003.001-.006.003-.023.009a12 12 0 0 1-.397.15c-.264.095-.631.223-1.047.35-.816.252-1.879.523-2.71.523-.847 0-1.548-.28-2.158-.525l-.028-.01C7.68 8.71 7.14 8.5 6.5 8.5c-.7 0-1.638.23-2.437.477A20 20 0 0 0 3 9.342V15.5a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 1 0v.282c.226-.079.496-.17.79-.26C4.606.272 5.67 0 6.5 0c.84 0 1.524.277 2.121.519l.043.018C9.286.788 9.828 1 10.5 1c.7 0 1.638-.23 2.437-.477a20 20 0 0 0 1.349-.476l.019-.007.004-.002h.001M14 1.221c-.22.078-.48.167-.766.255-.81.252-1.872.523-2.734.523-.886 0-1.592-.286-2.203-.534l-.008-.003C7.662 1.21 7.139 1 6.5 1c-.669 0-1.606.229-2.415.478A21 21 0 0 0 3 1.845v6.433c.22-.078.48-.167.766-.255C4.576 7.77 5.638 7.5 6.5 7.5c.847 0 1.548.28 2.158.525l.028.01C9.32 8.29 9.86 8.5 10.5 8.5c.668 0 1.606-.229 2.415-.478A21 21 0 0 0 14 7.655V1.222z"/>
            </svg>
                &nbsp;
                <p
                class="text-md font-semibold text-black">Activities</p>
              </a>
    
    ';
              } else {
                echo '
             <a href="activities.php" class="flex items-center border-b-2 border-transparent hover:border-gray-600 hover:border-b-2">
            <svg class="text-gray-600" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-flag" viewBox="0 0 16 16">
              <path d="M14.778.085A.5.5 0 0 1 15 .5V8a.5.5 0 0 1-.314.464L14.5 8l.186.464-.003.001-.006.003-.023.009a12 12 0 0 1-.397.15c-.264.095-.631.223-1.047.35-.816.252-1.879.523-2.71.523-.847 0-1.548-.28-2.158-.525l-.028-.01C7.68 8.71 7.14 8.5 6.5 8.5c-.7 0-1.638.23-2.437.477A20 20 0 0 0 3 9.342V15.5a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 1 0v.282c.226-.079.496-.17.79-.26C4.606.272 5.67 0 6.5 0c.84 0 1.524.277 2.121.519l.043.018C9.286.788 9.828 1 10.5 1c.7 0 1.638-.23 2.437-.477a20 20 0 0 0 1.349-.476l.019-.007.004-.002h.001M14 1.221c-.22.078-.48.167-.766.255-.81.252-1.872.523-2.734.523-.886 0-1.592-.286-2.203-.534l-.008-.003C7.662 1.21 7.139 1 6.5 1c-.669 0-1.606.229-2.415.478A21 21 0 0 0 3 1.845v6.433c.22-.078.48-.167.766-.255C4.576 7.77 5.638 7.5 6.5 7.5c.847 0 1.548.28 2.158.525l.028.01C9.32 8.29 9.86 8.5 10.5 8.5c.668 0 1.606-.229 2.415-.478A21 21 0 0 0 14 7.655V1.222z"/>
            </svg>
                &nbsp;
                <p
                class="text-md font-semibold text-gray-600">Activities</p>
              </a>
    ';
              }

              if ($currentPage == 'home.php') {
                echo '
             <a href="home.php" class="flex items-center border-b-2 border-black">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
  <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1L7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002-.014.002zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a6 6 0 0 0-1.23-.247A7 7 0 0 0 5 9c-4 0-5 3-5 4q0 1 1 1h4.216A2.24 2.24 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.5 5.5 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4"/>
</svg>
                &nbsp;
                <p
                class="text-md font-semibold text-black">Forum</p>
              </a>
    
    ';
              } else {
                echo '
             <a href="home.php" class="flex items-center border-b-2 border-transparent hover:border-gray-600 hover:border-b-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
  <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1L7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002-.014.002zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a6 6 0 0 0-1.23-.247A7 7 0 0 0 5 9c-4 0-5 3-5 4q0 1 1 1h4.216A2.24 2.24 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.5 5.5 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4"/>
</svg>
                &nbsp;
                <p
                class="text-md font-semibold text-gray-600">Forum</p>
              </a>
    ';
              }

              ?>


            </div>
          </div>
        </div>
        <div class=" absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
          <!--Region and Currency -->
          <div class="container flex p-1 bg-gray-100 border rounded-md ">
            <button id="openModalBtn"
              class="mr-1 text-sm font-medium text-gray-950 border-black hover:border-b-2 focus:border-b-2">
              BDT
            </button>
            <div class="w-0.5 h-6 mr-1 bg-gray-400"></div>
            <button type="button"
              class="relative flex rounded-full  text-sm focus:outline-none hover:ring-1 hover:ring-green-400 focus:ring-2 focus:ring-green-400 "
              id="" aria-expanded="false" aria-haspopup="true">
              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="h-6 w-6" viewBox="0 0 16 16">
                <path
                  d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0M2.04 4.326c.325 1.329 2.532 2.54 3.717 3.19.48.263.793.434.743.484q-.121.12-.242.234c-.416.396-.787.749-.758 1.266.035.634.618.824 1.214 1.017.577.188 1.168.38 1.286.983.082.417-.075.988-.22 1.52-.215.782-.406 1.48.22 1.48 1.5-.5 3.798-3.186 4-5 .138-1.243-2-2-3.5-2.5-.478-.16-.755.081-.99.284-.172.15-.322.279-.51.216-.445-.148-2.5-2-1.5-2.5.78-.39.952-.171 1.227.182.078.099.163.208.273.318.609.304.662-.132.723-.633.039-.322.081-.671.277-.867.434-.434 1.265-.791 2.028-1.12.712-.306 1.365-.587 1.579-.88A7 7 0 1 1 2.04 4.327Z" />
              </svg>
            </button>

          </div>

          <!-- <button type="button" class="relative rounded-full bg-gray-800 p-1 text-black hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
          <span class="absolute -inset-1.5"></span>
          <span class="sr-only">View notifications</span>
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
          </svg>
        </button> -->

          <!-- Profile dropdown -->


          <div class="relative ml-3">
            <div>
              <button id="profile-toggle" type="button"
                class="relative flex rounded-full  text-sm focus:outline-none hover:ring-2  hover:ring-green-400 focus:ring-2 focus:ring-green-400 "
                id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                <span class="absolute -inset-1.5"></span>
                <span class="sr-only">Open user menu</span>
                <!-- <img class="h-8 w-8 rounded-full" src="../images/ifat.png" alt=""> -->
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="h-7 w-7 text-gray-600"
                  viewBox="0 0 16 16">
                  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                  <path fill-rule="evenodd"
                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                </svg>
              </button>
            </div>

            <!--
            Dropdown menu, show/hide based on menu state.

            Entering: "transition ease-out duration-100"
              From: "transform opacity-0 scale-95"
              To: "transform opacity-100 scale-100"
            Leaving: "transition ease-in duration-75"
              From: "transform opacity-100 scale-100"
              To: "transform opacity-0 scale-95"
          -->
            <div id="profile-menu"
              class="absolute hidden right-0 mt-2 w-52 origin-top-right rounded-md bg-gray-50 py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
              role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
              <!-- Active: "bg-gray-100", Not Active: "" -->

              <?php
              if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
                echo '
              <a href="chat.php" class="flex items-center px-3 py-2 text-lg font-medium text-gray-950 hover:bg-green-600 hover:text-white focus:bg-green-500
              focus:text-white"
                role="menuitem" tabindex="-1" id="user-menu-item-0">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-chat-left" viewBox="0 0 16 16">
  <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
</svg>
                &nbsp;&nbsp;
                <p>Messages</p>
                </a>
                            <a href="calendar.php" class="flex items-center px-3 py-2 text-lg font-medium text-gray-900 hover:bg-green-600 hover:text-white focus:bg-green-500
              focus:text-white"
                role="menuitem" tabindex="-1" id="user-menu-item-0">
               <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class=" bi bi-calendar-range" viewBox="0 0 16 16">
  <path d="M9 7a1 1 0 0 1 1-1h5v2h-5a1 1 0 0 1-1-1M1 9h4a1 1 0 0 1 0 2H1z"/>
  <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z"/>
</svg>
                &nbsp;&nbsp;
                <p>Event calendar</p>
                </a>

              <a href="profile.php" class="flex items-center px-3 py-2 text-lg font-medium text-gray-950 hover:bg-green-600 hover:text-white focus:bg-green-500
              focus:text-white"
                role="menuitem" tabindex="-1" id="user-menu-item-0">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                     <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
                </svg>
                &nbsp;&nbsp;
                <p>Profile</p>
                </a>
              ';
              }
              ?>
              <a href="#" class="flex items-center px-3 py-2 text-lg font-medium text-gray-950 hover:bg-green-600 hover:text-white focus:bg-green-500
              focus:text-white
              " role="menuitem" tabindex="-1" id="user-menu-item-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-sliders"
                  viewBox="0 0 16 16">
                  <path fill-rule="evenodd"
                    d="M11.5 2a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3M9.05 3a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0V3zM4.5 7a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3M2.05 8a2.5 2.5 0 0 1 4.9 0H16v1H6.95a2.5 2.5 0 0 1-4.9 0H0V8zm9.45 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3m-2.45 1a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0v-1z" />
                </svg>
                &nbsp;&nbsp;
                <p>Settings</p>
              </a>

              <a href="#" class="flex items-center px-3 py-2 text-lg font-medium text-gray-950 hover:bg-green-600 hover:text-white focus:bg-green-500
              focus:text-white" role="menuitem" tabindex="-1" id="user-menu-item-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bell"
                  viewBox="0 0 16 16">
                  <path
                    d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2M8 1.918l-.797.161A4 4 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4 4 0 0 0-3.203-3.92zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5 5 0 0 1 13 6c0 .88.32 4.2 1.22 6" />
                </svg>
                &nbsp;&nbsp;
                <p>Notifications</p>
              </a>

              <a href="create_listing.php" class="flex items-center px-3 py-2 text-lg font-medium text-gray-950 hover:bg-green-600 hover:text-white focus:bg-green-500
              focus:text-white" role="menuitem" tabindex="-1" id="user-menu-item-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                  class="bi bi-house-add" viewBox="0 0 16 16">
                  <path
                    d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h4a.5.5 0 1 0 0-1h-4a.5.5 0 0 1-.5-.5V7.207l5-5 6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293z" />
                  <path
                    d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0m-3.5-2a.5.5 0 0 0-.5.5v1h-1a.5.5 0 0 0 0 1h1v1a.5.5 0 1 0 1 0v-1h1a.5.5 0 1 0 0-1h-1v-1a.5.5 0 0 0-.5-.5" />
                </svg>
                &nbsp;&nbsp;
                <p>Become a Host</p>
              </a>

              <a href="host-dashboard.php" class="flex items-center px-3 py-2 text-lg font-medium text-gray-950 hover:bg-green-600 hover:text-white focus:bg-green-500
              focus:text-white" role="menuitem" tabindex="-1" id="user-menu-item-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                  class="bi bi-toggle-off" viewBox="0 0 16 16">
                  <path
                    d="M11 4a4 4 0 0 1 0 8H8a5 5 0 0 0 2-4 5 5 0 0 0-2-4zm-6 8a4 4 0 1 1 0-8 4 4 0 0 1 0 8M0 8a5 5 0 0 0 5 5h6a5 5 0 0 0 0-10H5a5 5 0 0 0-5 5" />
                </svg>
                &nbsp;&nbsp;
                <p>Switch to Hosting</p>
              </a>

              <?php
              if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
                echo '
                  <a href="signup.php" class="flex items-center px-3 py-2 text-lg font-medium text-gray-950 hover:bg-green-600 hover:text-white focus:bg-green-500
                  focus:text-white" role="menuitem" tabindex="-1" id="user-menu-item-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">
                          <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
                          <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5"/>
                        </svg>
                        &nbsp;&nbsp;
                        <p>Sign Up</p>
                </a>

                  <a href="logout.php" class="flex items-center px-3 py-2 text-lg font-medium text-gray-950 hover:bg-green-600 hover:text-white focus:bg-green-500
                  focus:text-white" role="menuitem" tabindex="-1" id="user-menu-item-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0z"/>
                        <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
                      </svg>
                        &nbsp;&nbsp;
                        <p>Log In</p>
                </a>
                ';
              } else {
                echo '
                <a href="logout.php" class="flex items-center px-3 py-2 text-lg font-medium text-red-600 hover:bg-red-500 hover:text-white focus:bg-red-400" role="menuitem" tabindex="-1" id="user-menu-item-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-door-open" viewBox="0 0 16 16">
                  <path d="M8.5 10c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1"/>
                  <path d="M10.828.122A.5.5 0 0 1 11 .5V1h.5A1.5 1.5 0 0 1 13 2.5V15h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V1.5a.5.5 0 0 1 .43-.495l7-1a.5.5 0 0 1 .398.117M11.5 2H11v13h1V2.5a.5.5 0 0 0-.5-.5M4 1.934V15h6V1.077z"/>
                </svg>
                &nbsp;&nbsp;
                <p>Log Out</p>
                </a>
                ';
              }
              ?>
            </div>

          </div>
        </div>
      </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="hidden sm:hidden bg-white absolute h-svh w-72 shadow-2xl shadow-gray-600  " id="mobile-menu">
      <div class="space-y-1 px-2 pb-3 pt-2">
        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
        <a href="#"
          class="block rounded-md px-3 py-2 text-base font-medium text-black  hover:bg-gray-700 hover:text-white"
          aria-current="page">Discover</a>
        <a href="hotels.php"
          class="block rounded-md px-3 py-2 text-base font-medium text-black hover:bg-gray-700 hover:text-white">
          Hotels</a>
        <a href="#"
          class="block rounded-md px-3 py-2 text-base font-medium text-black hover:bg-gray-700 hover:text-white">Things
          to
          do</a>
        <a href="#"
          class="block rounded-md px-3 py-2 text-base font-medium text-gray-950 hover:bg-gray-700 hover:text-white">Holiday
          Home</a>
      </div>
    </div>

    <!-- Mobile search bar -->
    <div class=" sm:hidden flex justify-center">
      <input type="text" class="py-auto border border-gray-300 rounded-l-md w-56  focus:border-gray-300 focus:ring-0
    " placeholder="Find Anything" aria-label="search">
      <button class="  bg-green-600 hover:bg-green-500 border text-white font-semibold py-2 px-4 rounded-r-md "
        type="button" id="search-btn">Search</button>
    </div>
  </section>

  <section class="flex justify-center items-center gap-3 p-3">

    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-sliders"
      viewBox="0 0 16 16">
      <path fill-rule="evenodd"
        d="M11.5 2a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3M9.05 3a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0V3zM4.5 7a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3M2.05 8a2.5 2.5 0 0 1 4.9 0H16v1H6.95a2.5 2.5 0 0 1-4.9 0H0V8zm9.45 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3m-2.45 1a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0v-1z" />
    </svg>

    <div class="inline-flex rounded-md shadow-sm " role="group">
      <button onclick="showPanel(0)" type="button"
        class=" flex items-center gap-1 px-2 py-3 sm:px-4 sm:py-3 text-sm font-medium text-gray-800 bg-transparent border border-gray-800 rounded-s-lg hover:border-teal-600 hover:bg-teal-600 hover:text-white focus:z-10  focus:bg-teal-700 focus:border-teal-700 focus:text-white">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt"
          viewBox="0 0 16 16">
          <path
            d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10" />
          <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
        </svg>
        <p id="query_city">
          Anywhere
        </p>
      </button>
      <button onclick="showPanel(1)" type="button"
        class="flex items-center gap-2  px-2 py-3 sm:px-4 sm:py-3 text-sm font-medium text-gray-800 bg-transparent border-t border-b border-gray-800 hover:border-teal-600 hover:bg-teal-600 hover:text-white focus:z-10 focus:border-teal-700  focus:bg-teal-700 focus:text-white">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-event"
          viewBox="0 0 16 16">
          <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5z" />
          <path
            d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z" />
        </svg>
        <p id="query_date">
          Any week
        </p>
      </button>
      <button onclick="showPanel(2)" type="button"
        class=" flex items-center gap-1 px-2 py-3 text-sm font-medium text-gray-800 bg-transparent border border-gray-800 rounded-e-lg hover:border-teal-600 hover:bg-teal-600 hover:text-white focus:z-10 focus:bg-teal-700 focus:border-teal-700 focus:text-white">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-wallet2"
          viewBox="0 0 16 16">
          <path
            d="M12.136.326A1.5 1.5 0 0 1 14 1.78V3h.5A1.5 1.5 0 0 1 16 4.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 13.5v-9a1.5 1.5 0 0 1 1.432-1.499zM5.562 3H13V1.78a.5.5 0 0 0-.621-.484zM1.5 4a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5z" />
        </svg>
        <p id="query_price">Any price</p>
      </button>
      <button id="query_search" onclick="runQuery()"
        class="hidden ml-4 text-white bg-orange-600 hover:bg-orange-700 rounded-full w-8 h-8 md:w-11 md:h-11  items-center justify-center"><svg
          xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-search"
          viewBox="0 0 16 16">
          <path
            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
        </svg></button>
    </div>




    <!-- 
<button type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Light</button> -->

  </section>
  <!-- Content Panels -->
  <!-- Filtering modal -->


  <script>
    function showPanel(panelIndex) {
      document.body.style.overflow = 'hidden'; // Disable scrolling
      const panels = document.querySelectorAll(".content-panel");
      panels.forEach((panel, index) => {
        panel.style.display = (index === panelIndex) ? "block" : "none";
      });

      const querySearch = document.getElementById('query_search');
      querySearch.classList.remove('hidden', 'opacity-0');  // Make it visible
      querySearch.classList.add('flex', 'opacity-100', 'transition-opacity', 'duration-300');
    }

    function closePanel(panelIndex) {
      document.body.style.overflow = ''; // Re-enable scrolling
      const panel = document.getElementById('panel' + panelIndex);
      const querySearch = document.getElementById('query_search');

      panel.style.display = 'none';

      // Fade out the element by adjusting opacity
      querySearch.classList.remove('opacity-100');
      querySearch.classList.add('opacity-0', 'transition-opacity', 'duration-300');

      // After transition, hide the element
      setTimeout(() => {
        querySearch.classList.add('hidden');
        querySearch.classList.remove('flex');
      }, 300);  // Same as duration of the transition
    }

  </script>

</nav>
<div class="relative">

  <section class="fixed w-full flex justify-center">
    <div class="w-full md:w-1/2">

      <!-- Panel 0 -->
      <div class="content-panel bg-stone-100 shadow-xl border rounded-xl p-3 mb-2" id="panel0" style="display: none;">
        <div class="flex justify-between">
          <p class="text-3xl font-light">Select destinations</p>
          <button type="button" onclick="closePanel(0)">
        <svg class="rounded-sm text-red-600 hover:text-red-700 hover:bg-gray-100" xmlns="http://www.w3.org/2000/svg" width="30"
          height="30" fill="currentColor" class="bi bi-x-square" viewBox="0 0 16 16">
          <path
            d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
          <path
            d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708" />
        </svg>
      </button>
          <!-- <button type="button" onclick="closePanel(0)"
            class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-red-600 text-red-600 hover:bg-gray-200 focus:outline-none focus:border-gray-500 focus:text-gray-500 disabled:opacity-50 disabled:pointer-events-none">
            Close
          </button> -->
        </div>
        <br>
        <div class="">
          <input id="cityInput" type="text" class="w-full rounded-lg bg-gray-100 border-neutral-500 border-2"
            placeholder="Enter destination" onkeyup="fetchCitySuggestions()">
          <!-- City suggestions dropdown -->
          <ul id="citySuggestions" class=" mt-1 rounded-lg shadow-lg"></ul>

        </div>
        <br>

      </div>

      <!-- Panel 1 -->
      <div class="content-panel bg-neutral-50 border-2 rounded-xl p-3 mb-2" id="panel1" style="display: none;">
        <div class="flex justify-between">
          <p class="text-3xl font-light">Select date</p>
          <button type="button" onclick="closePanel(1)">
        <svg class="rounded-sm text-red-600 hover:text-red-700 hover:bg-gray-100" xmlns="http://www.w3.org/2000/svg" width="30"
          height="30" fill="currentColor" class="bi bi-x-square" viewBox="0 0 16 16">
          <path
            d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
          <path
            d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708" />
        </svg>
      </button>
          <!-- <button type="button" onclick="closePanel(1)"
            class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-red-600 text-red-600 hover:bg-gray-200 focus:outline-none focus:border-gray-500 focus:text-gray-500 disabled:opacity-50 disabled:pointer-events-none">
            Close
          </button> -->
        </div>
        <br>

        <div class="flex justify-around">
          <section class="flex flex-col w-2/5">
            <label class="text-lg font-normal" for="query-checkin">Check in:</label>
            <input type="date" id="query-checkin" class="border-2 border-neutral-500 rounded-lg"
              onchange="selectCheckinDate()">
          </section>
          <section class="flex flex-col w-2/5">
            <label class="text-lg font-normal" for="query-checkout">Check out:</label>
            <input type="date" id="query-checkout" class="border-2 border-neutral-500 rounded-lg"
              onchange="selectCheckoutDate()">
          </section>
        </div>
        <br>

      </div>

      <!-- Panel 2 -->
      <div class="content-panel bg-neutral-50 border rounded-xl p-3 mb-2" id="panel2" style="display: none;">
        <div class="flex justify-between">
          <p class="text-3xl font-light">Select price</p>
          <button type="button" onclick="closePanel(2)">
        <svg class="rounded-sm text-red-600 hover:text-red-700 hover:bg-gray-100" xmlns="http://www.w3.org/2000/svg" width="30"
          height="30" fill="currentColor" class="bi bi-x-square" viewBox="0 0 16 16">
          <path
            d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
          <path
            d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708" />
        </svg>
      </button>
          <!-- <button type="button" onclick="closePanel(2)"
            class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-red-600 text-red-600 hover:bg-gray-200 focus:outline-none focus:border-gray-500 focus:text-gray-500 disabled:opacity-50 disabled:pointer-events-none">
            Close
          </button> -->
        </div>
        <br>
        <section class="flex justify-between">
          <div class="w-2/5">
            <p>Minimum price:</p>
            <input id="minPriceInput" type="number" class="w-full rounded-lg bg-gray-100 border-neutral-500 border-2"
              placeholder="Enter min-price" onkeyup="selectMinPrice()">
          </div>
          <div class="w-2/5">
            <p>Maximum price</p>
            <input id="maxPriceInput" type="number" class="w-full rounded-lg bg-gray-100 border-neutral-500 border-2"
              placeholder="Enter max-price" onkeyup="selectMaxPrice()">
          </div>
        </section>
      </div>
    </div>
  </section>

</div>


<script>
  //fetch city suggestions, set quary values on nav, send get req to hotels.php
  let queryData = {
    city: null,
    checkin: null,
    checkout: null,
    minPrice: null,
    maxPrice: null,
    currency:null
  };
  function getQueryParam(param) {

const urlParams = new URLSearchParams(window.location.search);
return urlParams.get(param);

}
// console.log(getQueryParam('currency'));
queryData.currency =getQueryParam('currency');


  // Function to fetch city suggestions
  function fetchCitySuggestions() {
    const input = document.getElementById('cityInput').value;

    if (input.length >= 1) { // Start search after 2 characters
      const xhr = new XMLHttpRequest();
      xhr.open('GET', `get-cities.php?q=${input}`, true);
      xhr.onload = function () {
        if (xhr.status === 200) {
          const results = JSON.parse(xhr.responseText);
          let suggestions = '';

          if (results.length > 0) {
            results.forEach(city => {
              suggestions += `<li class="p-2 hover:bg-gray-200 cursor-pointer" onclick="selectCity('${city.name}')">${city.name}, ${city.country}</li>`;
            });
          } else {
            suggestions = `<li class="p-2">No results found</li>`;
          }
          document.getElementById('citySuggestions').innerHTML = suggestions;
        }
      };
      xhr.send();
    } else {
      document.getElementById('citySuggestions').innerHTML = '';
    }
  }

  // Function to select a city and populate the input field
  function selectCity(city) {
    queryData.city = city;
    // const inputValue = document.getElementById('cityInput').value;
    document.getElementById('query_city').textContent = city + ', Bangladesh';//#fake country
    document.getElementById('cityInput').value = city + ', Bangladesh';
    document.getElementById('citySuggestions').innerHTML = ''; // Clear suggestions
    console.log(queryData);
  }

  function selectCheckinDate() {
    const selectedDate = document.getElementById('query-checkin').value;
    document.getElementById('query_date').textContent = convertDateQuery(selectedDate);
    queryData.checkin = selectedDate;
  }

  function selectCheckoutDate() {
    const selectedDate = document.getElementById('query-checkout').value;
    document.getElementById('query_date').textContent = convertDateQuery(queryData.checkin) + " - " + convertDateQuery(selectedDate);
    queryData.checkout = selectedDate;
  }
  function selectMinPrice() {
    const minPriceInput = document.getElementById('minPriceInput').value;
    if (queryData.maxPrice) {
      document.getElementById('query_price').textContent = "min:" + minPriceInput + " max: $" + queryData.maxPrice;
    }
    else {
      document.getElementById('query_price').textContent = "min: $" + minPriceInput;
    }
    queryData.minPrice = minPriceInput;
  }
  function selectMaxPrice() {
    const maxPriceInput = document.getElementById('maxPriceInput').value;
    const minPrice = queryData.minPrice === null ? 'N/A' : queryData.minPrice;

    document.getElementById('query_price').textContent = "min:" + minPrice + " max: $" + maxPriceInput;
    queryData.maxPrice = maxPriceInput;
  }

  function convertDateQuery(dateString) {
    // Create a new Date object from the input string
    const date = new Date(dateString);

    // Array of month names
    const monthNames = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];

    // Get the month (0-11) and day (1-31)
    const month = monthNames[date.getMonth()];
    const day = date.getDate();

    // Return the formatted date
    return `${month} ${day}`;
  }


  document.addEventListener("DOMContentLoaded", function () {
    console.log("Given req:");
    console.log(getQueryParam('city'));
    if (getQueryParam('city') != null) {
      queryData.city = getQueryParam('city');
      document.getElementById('query_city').textContent = queryData.city + ', Bangladesh';//#fake country
    }

    if (getQueryParam('check_in') != null) {
      document.getElementById('query_date').textContent = convertDateQuery(getQueryParam('check_in'));
      queryData.checkin = getQueryParam('check_in');
    }

    if (getQueryParam('check_out') != null) {
      document.getElementById('query_date').textContent = convertDateQuery(queryData.checkin) + " - " + convertDateQuery(getQueryParam('check_out'));
      queryData.checkout = selectedDate;
    }
    if (getQueryParam('min_price') != null) {
      if (getQueryParam('max_price')) {
        document.getElementById('query_price').textContent = "min:" + getQueryParam('min_price') + " max: $" + getQueryParam('max_price');
      }
      else {
        document.getElementById('query_price').textContent = "min: $" + getQueryParam('min_price');
      }
      queryData.minPrice = getQueryParam('min_price');
    }

    if (getQueryParam('max_price') != null) {
      const minPrice = getQueryParam('min_price') === null ? 'N/A' : getQueryParam('min_price');

document.getElementById('query_price').textContent = "min:" + minPrice + " max: $" + getQueryParam('max_price');
queryData.maxPrice = getQueryParam('max_price');
    }

  });




  function runQuery() {
    let query_url = "hotels.php?";

    if (queryData.city) {
      query_url += `city=${encodeURIComponent(queryData.city)}&`;
    }
    if (queryData.checkin) {
      query_url += `check_in=${encodeURIComponent(queryData.checkin)}&`;
    }
    if (queryData.checkout) {
      query_url += `check_out=${encodeURIComponent(queryData.checkout)}&`;
    }
    if (queryData.minPrice !== null) {
      query_url += `min_price=${encodeURIComponent(queryData.minPrice)}&`;
    }
    if (queryData.maxPrice !== null) {
      query_url += `max_price=${encodeURIComponent(queryData.maxPrice)}&`;
    }
    if (queryData.currency != null) {
      query_url += `currency=${encodeURIComponent(queryData.currency)}&`;
    }

    // Remove the trailing '&' if it exists
    query_url = query_url.endsWith('&') ? query_url.slice(0, -1) : query_url;

    // Example usage
    console.log(query_url);
    // return query_url;
    window.location.href = query_url;
  }

</script>


<!-- currency modal -->


<style>
  .tab-content {
    display: none;
  }

  .tab-content.active {
    display: block;
  }

  #modal {
    z-index: 100;
  }
</style>
<!-- Button to open the modal -->
<!-- <button id="openModalBtn" class="px-4 py-2 bg-blue-500 text-white rounded">Open Modal</button> -->

<!-- Modal -->
<div id="modal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
  <div class="bg-white p-6 rounded shadow-lg w-[90vw] lg:w-2/3">
    <!-- This is the Main window -->
    <section class="flex justify-between items-center">
      <!-- Header -->
      <h1 class="pb-4 text-xl font-semibold">Choose language and currency</h1>
      <button id="closeModalBtn">
        <svg class="rounded-sm text-red-600 hover:text-red-700 hover:bg-gray-100" xmlns="http://www.w3.org/2000/svg" width="30"
          height="30" fill="currentColor" class="bi bi-x-square" viewBox="0 0 16 16">
          <path
            d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
          <path
            d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708" />
        </svg>
      </button>
    </section>

    <!-- Tabs -->
    <div class="mb-4 flex">
      <button class="tab-link flex justify-center items-center border-b-2 border-black text-black font-semibold pb-1"
        data-tab="language-tab">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-globe"
          viewBox="0 0 16 16">
          <path
            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m7.5-6.923c-.67.204-1.335.82-1.887 1.855A8 8 0 0 0 5.145 4H7.5zM4.09 4a9.3 9.3 0 0 1 .64-1.539 7 7 0 0 1 .597-.933A7.03 7.03 0 0 0 2.255 4zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a7 7 0 0 0-.656 2.5zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5zM8.5 5v2.5h2.99a12.5 12.5 0 0 0-.337-2.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5zM5.145 12q.208.58.468 1.068c.552 1.035 1.218 1.65 1.887 1.855V12zm.182 2.472a7 7 0 0 1-.597-.933A9.3 9.3 0 0 1 4.09 12H2.255a7 7 0 0 0 3.072 2.472M3.82 11a13.7 13.7 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5zm6.853 3.472A7 7 0 0 0 13.745 12H11.91a9.3 9.3 0 0 1-.64 1.539 7 7 0 0 1-.597.933M8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855q.26-.487.468-1.068zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.7 13.7 0 0 1-.312 2.5m2.802-3.5a7 7 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7 7 0 0 0-3.072-2.472c.218.284.418.598.597.933M10.855 4a8 8 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4z" />
        </svg>
        &nbsp;
        <p>Language and Region</p>
      </button>
      &nbsp;
      &nbsp;
      &nbsp;
      <button
        class="tab-link flex justify-start items-center border-b-2  text-gray-700 font-semibold pb-1 hover:border-gray-600"
        data-tab="currency-tab">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-currency-dollar"
          viewBox="0 0 16 16">
          <path
            d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73z" />
        </svg>

        <p>Currency</p>
      </button>
      <!-- <button class="tab-link px-4 py-2 bg-gray-200 text-gray-700 rounded-tl rounded-tr focus:outline-none" data-tab="currency-tab">Currency</button> -->
    </div>

    <!-- Tab Contents -->
    <div id="language-tab" class="tab-content active h-[50vh] overflow-y-auto">
      <!-- <p class="mb-2">Select Language:</p>
        <select class="w-full p-2 border border-gray-300 rounded">
          <option value="en">English</option>
          <option value="es">Spanish</option>
          <option value="fr">French</option>
          <option value="de">German</option>
        </select> -->
      <p>Selected language:</p>
      <br>
      <div class="w-52">
        <section>
          <div class="text-white bg-gray-800 rounded-md p-4 w-full h-full ">
            <p class="text-xl font-semibold">English</p>
            <p>United States</p>

          </div>
          <!-- <input type="" name="language" value="" id="selected-english-usa" class="hidden peer">
                        <label for="option-english-usa" class="border-2 border-gray-800 rounded-md p-4 cursor-pointer inline-flex w-full h-full hover:bg-zinc-300 peer-checked:bg-gray-300">
                            <div class="flex items-center justify-between w-full">
                                <div>
                                    <p class="text-xl font-semibold">English</p>
                                    <p>United States</p>
                                </div>
                            </div>
                        </label> -->
        </section>
      </div>
      <br>
      <p>Choose another language:</p>
      <br>
      <form id="lang-form" class="">
        <div class="flex justify-start justify-items-start gap-2 flex-wrap pr-2">

          <section class="w-36 grow">
            <input type="radio" name="language" value="english-usa" id="option-english-usa" class="hidden peer">
            <label for="option-english-usa"
              class="border-2 border-gray-800 rounded-md p-4 cursor-pointer inline-flex w-full h-full hover:bg-zinc-300 peer-checked:bg-gray-300">
              <div class="flex items-center justify-between w-full">
                <div>
                  <p class="text-xl font-semibold">English</p>
                  <p>United States</p>
                </div>
              </div>
            </label>
          </section>

          <section class="w-36 grow">
            <input type="radio" name="language" value="bengali-bangladesh" id="option-bengali-bangladesh"
              class="hidden peer">
            <label for="option-bengali-bangladesh"
              class="border-2 border-gray-800 rounded-md p-4 cursor-pointer inline-flex w-full h-full hover:bg-zinc-300 peer-checked:bg-gray-300">
              <div class="flex items-center justify-between w-full">
                <div>
                  <p class="text-xl font-semibold">Bengali</p>
                  <p>Bangladesh</p>
                </div>
              </div>
            </label>
          </section>

          <section class="w-36 grow">
            <input type="radio" name="language" value="mandarin-china" id="option-mandarin-china" class="hidden peer">
            <label for="option-mandarin-china"
              class="border-2 border-gray-800 rounded-md p-4 cursor-pointer inline-flex w-full h-full hover:bg-zinc-300 peer-checked:bg-gray-300">
              <div class="flex items-center justify-between w-full">
                <div>
                  <p class="text-xl font-semibold">Mandarin</p>
                  <p>China</p>
                </div>
              </div>
            </label>
          </section>

          <section class="w-36 grow">
            <input type="radio" name="language" value="hindi-india" id="option-hindi-india" class="hidden peer">
            <label for="option-hindi-india"
              class="border-2 border-gray-800 rounded-md p-4 cursor-pointer inline-flex w-full h-full hover:bg-zinc-300 peer-checked:bg-gray-300">
              <div class="flex items-center justify-between w-full">
                <div>
                  <p class="text-xl font-semibold">Hindi</p>
                  <p>India</p>
                </div>
              </div>
            </label>
          </section>

          <section class="w-36 grow">
            <input type="radio" name="language" value="spanish-spain" id="option-spanish-spain" class="hidden peer">
            <label for="option-spanish-spain"
              class="border-2 border-gray-800 rounded-md p-4 cursor-pointer inline-flex w-full h-full hover:bg-zinc-300 peer-checked:bg-gray-300">
              <div class="flex items-center justify-between w-full">
                <div>
                  <p class="text-xl font-semibold">Spanish</p>
                  <p>Spain</p>
                </div>
              </div>
            </label>
          </section>

          <section class="w-36 grow">
            <input type="radio" name="language" value="french-france" id="option-french-france" class="hidden peer">
            <label for="option-french-france"
              class="border-2 border-gray-800 rounded-md p-4 cursor-pointer inline-flex w-full h-full hover:bg-zinc-300 peer-checked:bg-gray-300">
              <div class="flex items-center justify-between w-full">
                <div>
                  <p class="text-xl font-semibold">French</p>
                  <p>France</p>
                </div>
              </div>
            </label>
          </section>

          <section class="w-36 grow">
            <input type="radio" name="language" value="arabic-egypt" id="option-arabic-egypt" class="hidden peer">
            <label for="option-arabic-egypt"
              class="border-2 border-gray-800 rounded-md p-4 cursor-pointer inline-flex w-full h-full hover:bg-zinc-300 peer-checked:bg-gray-300">
              <div class="flex items-center justify-between w-full">
                <div>
                  <p class="text-xl font-semibold">Arabic</p>
                  <p>Egypt</p>
                </div>
              </div>
            </label>
          </section>


        </div>


      </form>

    </div>


    <div id="currency-tab" class="tab-content h-[50vh] overflow-y-auto">
      <p>Selected currency:</p>
      <br>
      <div class="w-52">
        <section>
          <div class="text-white bg-gray-800 rounded-md p-8 w-full h-full ">
            <p id="selected_currency_tile" class="text-xl font-semibold">BDT</p>
            <!-- <p>US Dollar</p> -->

          </div>
        </section>
      </div>
      <br>
      <p>Choose a diffrent currency:</p>
      <br>
      <form id="currency-form" action="" class="">
        <div class="flex justify-start justify-items-start gap-2 flex-wrap pr-2">
          <section class="w-36 grow">
            <input type="radio" name="currency" value="usd" id="option-usd" class="hidden peer">
            <label for="option-usd"
              class="border-2 border-gray-800 rounded-md p-4 cursor-pointer inline-flex w-full h-full hover:bg-zinc-300 peer-checked:bg-gray-300">
              <div class="flex items-center justify-between w-full">
                <div>
                  <p class="text-xl font-semibold">USD</p>
                  <p>US Dollar</p>
                </div>
              </div>
            </label>
          </section>

          <section class="w-36 grow">
            <input type="radio" name="currency" value="bdt" id="option-bdt" class="hidden peer">
            <label for="option-bdt"
              class="border-2 border-gray-800 rounded-md p-4 cursor-pointer inline-flex w-full h-full hover:bg-zinc-300 peer-checked:bg-gray-300">
              <div class="flex items-center justify-between w-full">
                <div>
                  <p class="text-xl font-semibold">BDT</p>
                  <p>Bangladeshi Taka</p>
                </div>
              </div>
            </label>
          </section>

          <section class="w-36 grow">
            <input type="radio" name="currency" value="inr" id="option-inr" class="hidden peer">
            <label for="option-inr"
              class="border-2 border-gray-800 rounded-md p-4 cursor-pointer inline-flex w-full h-full hover:bg-zinc-300 peer-checked:bg-gray-300">
              <div class="flex items-center justify-between w-full">
                <div>
                  <p class="text-xl font-semibold">INR</p>
                  <p>Indian Rupee</p>
                </div>
              </div>
            </label>
          </section>

          <section class="w-36 grow">
            <input type="radio" name="currency" value="eur" id="option-eur" class="hidden peer">
            <label for="option-eur"
              class="border-2 border-gray-800 rounded-md p-4 cursor-pointer inline-flex w-full h-full hover:bg-zinc-300 peer-checked:bg-gray-300">
              <div class="flex items-center justify-between w-full">
                <div>
                  <p class="text-xl font-semibold">EUR</p>
                  <p>Euro</p>
                </div>
              </div>
            </label>
          </section>

          <section class="w-36 grow">
            <input type="radio" name="currency" value="gbp" id="option-gbp" class="hidden peer">
            <label for="option-gbp"
              class="border-2 border-gray-800 rounded-md p-4 cursor-pointer inline-flex w-full h-full hover:bg-zinc-300 peer-checked:bg-gray-300">
              <div class="flex items-center justify-between w-full">
                <div>
                  <p class="text-xl font-semibold">GBP</p>
                  <p>British Pound</p>
                </div>
              </div>
            </label>
          </section>

          <section class="w-36 grow">
            <input type="radio" name="currency" value="jpy" id="option-jpy" class="hidden peer">
            <label for="option-jpy"
              class="border-2 border-gray-800 rounded-md p-4 cursor-pointer inline-flex w-full h-full hover:bg-zinc-300 peer-checked:bg-gray-300">
              <div class="flex items-center justify-between w-full">
                <div>
                  <p class="text-xl font-semibold">JPY</p>
                  <p>Japanese Yen</p>
                </div>
              </div>
            </label>
          </section>

          <section class="w-36 grow">
            <input type="radio" name="currency" value="cad" id="option-cad" class="hidden peer">
            <label for="option-cad"
              class="border-2 border-gray-800 rounded-md p-4 cursor-pointer inline-flex w-full h-full hover:bg-zinc-300 peer-checked:bg-gray-300">
              <div class="flex items-center justify-between w-full">
                <div>
                  <p class="text-xl font-semibold">CAD</p>
                  <p>Canadian Dollar</p>
                </div>
              </div>
            </label>
          </section>

          <section class="w-36 grow">
            <input type="radio" name="currency" value="aud" id="option-aud" class="hidden peer">
            <label for="option-aud"
              class="border-2 border-gray-800 rounded-md p-4 cursor-pointer inline-flex w-full h-full hover:bg-zinc-300 peer-checked:bg-gray-300">
              <div class="flex items-center justify-between w-full">
                <div>
                  <p class="text-xl font-semibold">AUD</p>
                  <p>Australian Dollar</p>
                </div>
              </div>
            </label>
          </section>

          <section class="w-36 grow">
            <input type="radio" name="currency" value="cny" id="option-cny" class="hidden peer">
            <label for="option-cny"
              class="border-2 border-gray-800 rounded-md p-4 cursor-pointer inline-flex w-full h-full hover:bg-zinc-300 peer-checked:bg-gray-300">
              <div class="flex items-center justify-between w-full">
                <div>
                  <p class="text-xl font-semibold">CNY</p>
                  <p>Chinese Yuan</p>
                </div>
              </div>
            </label>
          </section>

          <section class="w-36 grow">
            <input type="radio" name="currency" value="zar" id="option-zar" class="hidden peer">
            <label for="option-zar"
              class="border-2 border-gray-800 rounded-md p-4 cursor-pointer inline-flex w-full h-full hover:bg-zinc-300 peer-checked:bg-gray-300">
              <div class="flex items-center justify-between w-full">
                <div>
                  <p class="text-xl font-semibold">ZAR</p>
                  <p>South African Rand</p>
                </div>
              </div>
            </label>
          </section>


        </div>
      </form>
    </div>
    <div class="mt-4 flex justify-end">
      <button id="lang-curr-submit"
        class="px-4 py-2 border-2 border-gray-800 hover:bg-gray-700 hover:text-white rounded font-semibold ">Save and
        Continue</button>
      <!-- 
        Note:  it's technically possible to submit multiple forms with one button click using JavaScript. However, this approach might cause issues because when a form is submitted, the browser typically navigates away from the current page, making it challenging to submit the second form.

One way to handle this is to use AJAX to submit the forms asynchronously, which allows the page to stay in place while both forms are submitted. Here is an example using fetch:
  <script>
  document.getElementById('lang-curr-submit').addEventListener('click', function (event) {
    event.preventDefault();

    let langForm = document.getElementById('lang-form');
    let currencyForm = document.getElementById('currency-form');

    // Function to submit a form using fetch
    function submitForm(form) {
      let formData = new FormData(form);
      return fetch(form.action, {
        method: form.method,
        body: formData
      });
    }

    // Submit both forms
    Promise.all([submitForm(langForm), submitForm(currencyForm)])
      .then(responses => Promise.all(responses.map(res => res.json())))
      .then(data => {
        console.log('Forms submitted successfully:', data);
        // handle successful submission
      })
      .catch(error => {
        console.error('Error submitting forms:', error);
        // handle error
      });
  });
</script>
        -->
    </div>
  </div>
</div>
<!-- JS -->
<script src="partials/menuToggler.js" async></script>
<script src="js/lang-curr-modal.js" async></script>
<script src="js/scroll-nav.js" defer></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script> -->
