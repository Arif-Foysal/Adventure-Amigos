<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Radio Button Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
    .tab-content {
      display: none;
    }
    .tab-content.active {
      display: block;
    }
  </style>
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">

  <!-- Button to open the modal -->
  <button id="openModalBtn" class="px-4 py-2 bg-blue-500 text-white rounded">Open Modal</button>

  <!-- Modal -->
  <div id="modal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
    <div class="bg-white p-6 rounded shadow-lg w-1/3">
      <h2 class="text-2xl mb-4">Settings</h2>

      <!-- Tabs -->
      <div class="mb-4">
        <button class="tab-link px-4 py-2 bg-blue-500 text-white rounded-tl rounded-tr focus:outline-none" data-tab="language-tab">Language and Region</button>
        <button class="tab-link px-4 py-2 bg-gray-200 text-gray-700 rounded-tl rounded-tr focus:outline-none" data-tab="currency-tab">Currency</button>
      </div>

      <!-- Tab Contents -->
      <div id="language-tab" class="tab-content active">
        <p class="mb-2">Select Language:</p>
        <select class="w-full p-2 border border-gray-300 rounded">
          <option value="en">English</option>
          <option value="es">Spanish</option>
          <option value="fr">French</option>
          <option value="de">German</option>
        </select>
      </div>

      <div id="currency-tab" class="tab-content">
        <p class="mb-2">Select Currency:</p>
        <select class="w-full p-2 border border-gray-300 rounded">
          <option value="usd">USD</option>
          <option value="eur">EUR</option>
          <option value="gbp">GBP</option>
          <option value="jpy">JPY</option>
        </select>
      </div>

      <div class="mt-4 flex justify-end">
        <button id="closeModalBtn" class="px-4 py-2 bg-red-500 text-white rounded">Close</button>
      </div>
    </div>
  </div>

  <script>
    // Get the modal, open button, close button, and tab elements
    const modal = document.getElementById('modal');
    const openModalBtn = document.getElementById('openModalBtn');
    const closeModalBtn = document.getElementById('closeModalBtn');
    const tabLinks = document.querySelectorAll('.tab-link');
    const tabContents = document.querySelectorAll('.tab-content');

    // Function to open the modal
    openModalBtn.addEventListener('click', () => {
      modal.classList.remove('hidden');
    });

    // Function to close the modal
    closeModalBtn.addEventListener('click', () => {
      modal.classList.add('hidden');
    });

    // Function to switch tabs
    tabLinks.forEach(link => {
      link.addEventListener('click', () => {
        const tab = link.getAttribute('data-tab');

        tabLinks.forEach(btn => {
          btn.classList.remove('bg-blue-500', 'text-white');
          btn.classList.add('bg-gray-200', 'text-gray-700');
        });

        link.classList.remove('bg-gray-200', 'text-gray-700');
        link.classList.add('bg-blue-500', 'text-white');

        tabContents.forEach(content => {
          content.classList.remove('active');
        });

        document.getElementById(tab).classList.add('active');
      });
    });
  </script>
</body>
</html>