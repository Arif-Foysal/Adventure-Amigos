<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive Header</title>
  <!-- Include Tailwind CSS -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
  <nav class="bg-white border-b border-gray-300">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
      <div class="flex items-center justify-between h-16">
        <!-- Logo and Search Bar -->
        <div class="flex items-center">
          <div class="flex-shrink-0">
            <img class="h-8 w-auto" src="../images/logo.png" alt="Logo">
          </div>
          <div class="hidden sm:block sm:ml-6 ml-4">
            <div class="flex space-x-4">
              <!-- Search Bar -->
              <div class="relative">
                <input type="text" class="pr-10 py-2 border border-gray-300 rounded-md w-64" placeholder="Find Anything" aria-label="search">
                <button class="absolute right-0 top-0 bg-green-400 hover:bg-green-300 border text-black font-medium py-2 px-4 rounded-r-md" type="button">Search</button>
              </div>
              <!-- Navigation Links -->
              <a href="#" class="px-3 py-2 text-sm font-medium text-black">Discover</a>
              <a href="#" class="px-3 py-2 text-sm font-medium text-black">Hotels</a>
              <a href="#" class="px-3 py-2 text-sm font-medium text-black">Things to do</a>
              <a href="#" class="px-3 py-2 text-sm font-medium text-black">Holiday Home</a>
            </div>
          </div>
        </div>
        <!-- Profile and Currency Buttons -->
        <div class="flex items-center">
          <a href="#" class="px-3 py-2 text-sm font-medium text-gray-950 border-black hover:border-b-2 focus:border-b-2">BDT</a>
          <button type="button" class="relative flex rounded-full text-sm focus:outline-none hover:ring-2 hover:ring-green-400 focus:ring-4 focus:ring-green-400">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="h-6 w-6" viewBox="0 0 16 16">
              <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"></path>
              <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"></path>
            </svg>
          </button>
        </div>
      </div>
    </div>
    <!-- Mobile Menu (hidden by default) -->
    <div class="sm:hidden" id="mobile-menu">
      <div class="px-2 pt-2 pb-3 space-y-1">
        <a href="#" class="block px-3 py-2 text-base font-medium text-black">Discover</a>
        <a href="#" class="block px-3 py-2 text-base font-medium text-black">Hotels</a>
        <a href="#" class="block px-3 py-2 text-base font-medium text-black">Things to do</a>
        <a href="#" class="block px-3 py-2 text-base font-medium text-gray-950">Holiday Home</a>
      </div>
    </div>
  </nav>
</body>
</html>
