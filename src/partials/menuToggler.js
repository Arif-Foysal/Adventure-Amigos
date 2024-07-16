document.addEventListener('DOMContentLoaded', function() {
  const toggleButton = document.getElementById('profile-toggle');
  const menu = document.getElementById('profile-menu');

  if (toggleButton && menu) { // if elements with given ids exist
    toggleButton.addEventListener('click', function(event) {
      menu.classList.toggle('hidden');
      event.stopPropagation();  // Prevent the click from propagating to the document
    });

    document.addEventListener('click', function(event) {
      if (!menu.classList.contains('hidden')) {
        menu.classList.add('hidden');
      }
    });

    menu.addEventListener('click', function(event) { //this is for preventing the toggle if user clicks inside the menu.
      event.stopPropagation();  // Prevent the click from propagating to the document
    });
  } else {
    console.error('Toggle button or menu not found in the DOM.');
  }

  // Experimental hamburger menu
  const hamburger = document.getElementById('hamburger');
  const ham_menu = document.getElementById('mobile-menu');

  if (hamburger && ham_menu) { // if elements with given ids exist
    hamburger.addEventListener('click', function(event) {
      ham_menu.classList.toggle('hidden');
      event.stopPropagation();  // Prevent the click from propagating to the document
    });

    document.addEventListener('click', function(event) {
      if (!ham_menu.classList.contains('hidden')) {
        ham_menu.classList.add('hidden');
      }
    });

    ham_menu.addEventListener('click', function(event) {
      event.stopPropagation();  // Prevent the click from propagating to the document, meaning if the user clicks inside the ham-menu while it is visible, the menu won't disappear.
    });
  } else {
    console.error('Hamburger button or menu not found in the DOM.');
  }
});
