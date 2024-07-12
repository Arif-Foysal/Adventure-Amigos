<!--
ToDo
- [ ] Make dynacmic profile photo
- [ ] Make tab like navigation for better user experience //learn more js first
- [ ] Toggle the hamburger menus
-->

<script src="https://cdn.tailwindcss.com"></script>
<nav class="bg-white border-b border-gray-300">
  <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
    <div class="relative flex h-16 items-center justify-between">
      <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
        <!-- Mobile menu button-->

        <button type="button"

          onclick="toggleHam()"
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
                class="absolute right-0 top-0 bg-green-400 hover:bg-green-300 border text-black font-medium py-2 px-4 rounded-r-md "
                type="button" id="search-btn">Search</button>
            </div>
            <!-- experimental -->

            <!-- search bar end -->
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="#" class="px-3 py-2 text-sm font-medium text-black" aria-current="page">Discover</a>
            <a href="#"
              class="px-3 py-2 text-sm font-medium text-black border-black hover:border-b-2 focus:border-b-2">Hotels</a>
            <a href="#"
              class="px-3 py-2 text-sm font-medium text-black border-black hover:border-b-2 focus:border-b-2">Things to
              do</a>
            <a href="#"
              class="px-3 py-2 text-sm font-medium text-gray-950 border-black hover:border-b-2 focus:border-b-2">Holiday
              Home</a>
          </div>
        </div>
      </div>
      <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
        <!--Region and Currency -->
        <a href="#"
          class="px-2  text-sm font-medium text-gray-950 border-black hover:border-b-2 focus:border-b-2">BDT</a>
        <button type="button"
          class="relative flex rounded-full  text-sm focus:outline-none hover:ring-2 hover:ring-green-400 focus:ring-4 focus:ring-green-400 "
          id="user-menu-button" aria-expanded="false" aria-haspopup="true">
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="h-6 w-6" viewBox="0 0 16 16">
            <path
              d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0M2.04 4.326c.325 1.329 2.532 2.54 3.717 3.19.48.263.793.434.743.484q-.121.12-.242.234c-.416.396-.787.749-.758 1.266.035.634.618.824 1.214 1.017.577.188 1.168.38 1.286.983.082.417-.075.988-.22 1.52-.215.782-.406 1.48.22 1.48 1.5-.5 3.798-3.186 4-5 .138-1.243-2-2-3.5-2.5-.478-.16-.755.081-.99.284-.172.15-.322.279-.51.216-.445-.148-2.5-2-1.5-2.5.78-.39.952-.171 1.227.182.078.099.163.208.273.318.609.304.662-.132.723-.633.039-.322.081-.671.277-.867.434-.434 1.265-.791 2.028-1.12.712-.306 1.365-.587 1.579-.88A7 7 0 1 1 2.04 4.327Z" />
          </svg>
        </button>
        <!-- <button type="button" class="relative rounded-full bg-gray-800 p-1 text-black hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
          <span class="absolute -inset-1.5"></span>
          <span class="sr-only">View notifications</span>
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
          </svg>
        </button> -->

        <!-- Profile dropdown -->


        <div class="relative ml-3 ">
          <div>
            <button onclick="toggleMenu()" id="profile-toggle" type="button"
              class="relative flex rounded-full  text-sm focus:outline-none hover:ring-2  hover:ring-green-400 focus:ring-2 focus:ring-green-400 "
              id="user-menu-button" aria-expanded="false" aria-haspopup="true">
              <span class="absolute -inset-1.5"></span>
              <span class="sr-only">Open user menu</span>
              <!-- <img class="h-8 w-8 rounded-full" src="../images/ifat.png" alt=""> -->
              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="h-6 w-6" viewBox="0 0 16 16">
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
            class=" absolute hidden right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
            role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
            <!-- Active: "bg-gray-100", Not Active: "" -->
            <a href="#" class="block px-4 py-2 text-sm font-medium text-gray-950 hover:bg-green-400 focus:bg-green-300"
              role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
            <a href="#" class="block px-4 py-2 text-sm font-medium text-gray-950 hover:bg-green-400 focus:bg-green-300"
              role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>
            <?php
            if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
              echo '
                <a href="login.php" class="block px-4 py-2 text-sm font-medium text-gray-950 hover:bg-green-400 focus:bg-green-300" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign In</a>
                ';
            } else {
              echo '
                <a href="logout.php" class="block px-4 py-2 text-sm font-medium text-gray-950 hover:bg-green-400 focus:bg-green-300" role="menuitem" tabindex="-1" id="user-menu-item-2">Log Out</a>
                ';
            }
            ?>
          </div>

        </div>
      </div>
    </div>
  </div>

  <!-- Mobile menu, show/hide based on menu state. -->
  <div class="hidden sm:hidden bg-green-300 absolute w-72" id="mobile-menu">
    <div class="space-y-1 px-2 pb-3 pt-2">
      <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
      <a href="#" 
        class="block rounded-md px-3 py-2 text-base font-medium text-black  hover:bg-gray-700 hover:text-white" aria-current="page">Discover</a>
      <a href="#"
        class="block rounded-md px-3 py-2 text-base font-medium text-black hover:bg-gray-700 hover:text-white">
        Hotels</a>
      <a href="#"
        class="block rounded-md px-3 py-2 text-base font-medium text-black hover:bg-gray-700 hover:text-white">Things to
        do</a>
      <a href="#" 
        class="block rounded-md px-3 py-2 text-base font-medium text-gray-950 hover:bg-gray-700 hover:text-white">Holiday
        Home</a>
    </div>
  </div>
  <script src="partials/menuToggler.js" async></script>
  <script src="partials/hamToggler.js"></script>
</nav>