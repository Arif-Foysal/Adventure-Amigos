document.addEventListener('DOMContentLoaded', function () {
    // Helper function to toggle visibility
    function toggleVisibility(element, action) {
        element.classList.toggle('hidden', action === 'hide');
        element.classList.toggle('flex', action === 'show');
    }

    // Modal handling
    function setupModal(triggerElement, modalElement, closeButtonElement) {
        triggerElement.addEventListener('click', function () {
            toggleVisibility(modalElement, 'show');
        });

        closeButtonElement.addEventListener('click', function () {
            toggleVisibility(modalElement, 'hide');
        });
    }

    // Hover handling
    function setupHoverEffect(parentElement, overlayElement) {
        parentElement.addEventListener('mouseover', function () {
            toggleVisibility(overlayElement, 'show');
        });

        parentElement.addEventListener('mouseout', function () {
            toggleVisibility(overlayElement, 'hide');
        });
    }

    // Profile Picture Elements
    const profilePic = {
        parent: document.getElementById('dp'),
        overlay: document.getElementById('overlay'),
        modal: document.getElementById('dpModal'),
        closeModalButton: document.getElementById('closedpModal')
    };

    // Cover Photo Elements
    const coverPhoto = {
        parent: document.getElementById('cover'),
        button: document.getElementById('coverBtn'),
        modal: document.getElementById('coverModal'),
        closeModalButton: document.getElementById('closeCoverModal')
    };

    // Apply Hover Effects
    setupHoverEffect(profilePic.parent, profilePic.overlay);
    setupHoverEffect(coverPhoto.parent, coverPhoto.button);

    // Apply Modal Functionality
    setupModal(profilePic.parent, profilePic.modal, profilePic.closeModalButton);
    setupModal(coverPhoto.button, coverPhoto.modal, coverPhoto.closeModalButton);
});
