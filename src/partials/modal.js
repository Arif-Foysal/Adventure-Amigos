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
          // if not selected
          btn.classList.remove('text-white', 'border-black');
          btn.classList.add('text-gray-700','hover:border-gray-600');
        });
        // if selected
        link.classList.remove('bg-gray-200', 'text-gray-700', 'border-transparent','hover:border-gray-600');
        link.classList.add('text-black', 'border-black', 'font-semibold');

        tabContents.forEach(content => {
          content.classList.remove('active');
        });

        document.getElementById(tab).classList.add('active');
      });
    });