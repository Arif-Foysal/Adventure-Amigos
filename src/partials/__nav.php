<!--
ToDo
- [ ] Make dynacmic profile photo
- [ ] Make tab like navigation for better user experience //learn more js first
- [ ] Toggle the hamburger menus
-->
<?php 
  $currentPage = basename($_SERVER['PHP_SELF']); 
?>

<script src="https://cdn.tailwindcss.com"></script>
<nav class="bg-white border-b border-gray-300 pb-2 sm:pb-0 sticky top-0 w-full">
  <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8 ">
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
             &nbsp;&nbsp;

<?php
  if ($currentPage=='discover.php') {
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
  }
  else {
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



  if ($currentPage=='hotels.php') {
    echo '
             <a href="hotels.php" class="flex items-center border-b-2 border-black">
            <svg class="text-black" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
              <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z"/>
            </svg>
                &nbsp;
                <p
                class="text-md font-semibold text-black">Hotels</p>
              </a>
    
    ';
  }
  else {
    echo '
             <a href="hotels.php" class="flex items-center border-b-2 border-transparent hover:border-gray-600 hover:border-b-2">
            <svg class="text-gray-600" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
              <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z"/>
            </svg>
                &nbsp;
                <p
                class="text-md font-semibold text-gray-600">Hotels</p>
              </a>
    ';
  }


  if ($currentPage=='activities.php') {
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
  }
  else {
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

  if ($currentPage=='home.php') {
    echo '
             <a href="home.php" class="flex items-center border-b-2 border-black">
            <svg class="text-black" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
              <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4z"/>
            </svg> 
                &nbsp;
                <p
                class="text-md font-semibold text-black">Holiday Home</p>
              </a>
    
    ';
  }
  else {
    echo '
             <a href="home.php" class="flex items-center border-b-2 border-transparent hover:border-gray-600 hover:border-b-2">
            <svg class="text-gray-600" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
              <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4z"/>
            </svg> 
                &nbsp;
                <p
                class="text-md font-semibold text-gray-600">Holiday Home</p>
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
       <button class="mr-1 text-sm font-medium text-gray-950 border-black hover:border-b-2 focus:border-b-2">
        BDT
       </button>
            <div class="w-0.5 h-6 mr-1 bg-gray-400"></div>
          <button type="button"
            class="relative flex rounded-full  text-sm focus:outline-none hover:ring-1 hover:ring-green-400 focus:ring-2 focus:ring-green-400 "
            id="user-menu-button" aria-expanded="false" aria-haspopup="true">
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


        <div class="relative ml-3 ">
          <div>
            <button onclick="toggleMenu()" id="profile-toggle" type="button"
              class="relative flex rounded-full  text-sm focus:outline-none hover:ring-2  hover:ring-green-400 focus:ring-2 focus:ring-green-400 "
              id="user-menu-button" aria-expanded="false" aria-haspopup="true">
              <span class="absolute -inset-1.5"></span>
              <span class="sr-only">Open user menu</span>
              <!-- <img class="h-8 w-8 rounded-full" src="../images/ifat.png" alt=""> -->
              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="h-7 w-7 text-gray-600" viewBox="0 0 16 16">
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

            <?php
            if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
              echo '
              <a href="profile.php" class="flex items-center px-3 py-2 text-sm font-medium text-gray-950 hover:bg-green-400 focus:bg-green-300"
                role="menuitem" tabindex="-1" id="user-menu-item-0">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                     <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
                </svg>
                &nbsp;&nbsp;
                <p>Your Profile</p>
                </a>
              ';

            }
            ?>
            <a href="#" class="flex items-center px-3 py-2 text-sm font-medium text-gray-950 hover:bg-green-400 focus:bg-green-300"
              role="menuitem" tabindex="-1" id="user-menu-item-1">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-sliders" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M11.5 2a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3M9.05 3a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0V3zM4.5 7a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3M2.05 8a2.5 2.5 0 0 1 4.9 0H16v1H6.95a2.5 2.5 0 0 1-4.9 0H0V8zm9.45 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3m-2.45 1a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0v-1z"/>
              </svg>
              &nbsp;&nbsp;
              <p>Settings</p>
            </a>
              <a href="#" class="flex items-center px-3 py-2 text-sm font-medium text-gray-950 hover:bg-green-400 focus:bg-green-300"
              role="menuitem" tabindex="-1" id="user-menu-item-1">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-add" viewBox="0 0 16 16">
                <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h4a.5.5 0 1 0 0-1h-4a.5.5 0 0 1-.5-.5V7.207l5-5 6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293z"/>
                <path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0m-3.5-2a.5.5 0 0 0-.5.5v1h-1a.5.5 0 0 0 0 1h1v1a.5.5 0 1 0 1 0v-1h1a.5.5 0 1 0 0-1h-1v-1a.5.5 0 0 0-.5-.5"/>
              </svg>
              &nbsp;&nbsp;
            <p>Become a Host</p>  
            
            </a>

            <?php
            if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
              echo '
                  <a href="signup.php" class="flex items-center px-3 py-2 text-sm font-medium text-gray-950 hover:bg-green-400 focus:bg-green-300" role="menuitem" tabindex="-1" id="user-menu-item-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">
                          <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
                          <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5"/>
                        </svg>
                        &nbsp;&nbsp;
                        <p>Sign Up</p>
                </a>

                  <a href="logout.php" class="flex items-center px-3 py-2 text-sm font-medium text-gray-950 hover:bg-green-400 focus:bg-green-300" role="menuitem" tabindex="-1" id="user-menu-item-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0z"/>
                        <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
                      </svg>
                        &nbsp;&nbsp;
                        <p>Log In</p>
                </a>
                ';
            } else {
              echo '
                <a href="logout.php" class="flex items-center px-3 py-2 text-sm font-medium text-red-600 hover:bg-red-500 hover:text-white focus:bg-red-400" role="menuitem" tabindex="-1" id="user-menu-item-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-door-open" viewBox="0 0 16 16">
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
        class="block rounded-md px-3 py-2 text-base font-medium text-black  hover:bg-gray-700 hover:text-white" aria-current="page">Discover</a>
      <a href="hotels.php"
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

<!-- Mobile search bar -->
            <div class=" sm:hidden flex justify-center">
              <input type="text" class="py-auto border border-gray-300 rounded-l-md w-56  focus:border-gray-300 focus:ring-0"
                placeholder="Find Anything" aria-label="search">
              <button
                class="  bg-green-400 hover:bg-green-300 border text-black font-medium py-2 px-4 rounded-r-md "
                type="button" id="search-btn">Search</button>
            </div>

  <script src="partials/menuToggler.js" async></script>
</nav>