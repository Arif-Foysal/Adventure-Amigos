// more scalable version of this script: js/uploads.js

document.addEventListener('DOMContentLoaded', function () {
    const parent = document.getElementById('dp');//trigger btn
    const overlay = document.getElementById('overlay');
    const dpModal = document.getElementById('dpModal');
    const closedpModalButton = document.getElementById('closedpModal');
    const uploadForm = document.getElementById('uploadForm');
    
    const cover = document.getElementById('cover');
    const coverModal = document.getElementById('coverModal');
    const coverBtn = document.getElementById('coverBtn');
    const closeCoverModalButton = document.getElementById('closeCoverModal');
    // Show overlay on profile picture hover
    parent.addEventListener('mouseover', function () {
        overlay.classList.remove('hidden');
        overlay.classList.add('flex');
    });

    parent.addEventListener('mouseout', function () {
        overlay.classList.remove('flex');
        overlay.classList.add('hidden');
    });

    // Show modal on profile picture click
    parent.addEventListener('click', function () {
        dpModal.classList.remove('hidden');
        dpModal.classList.add('flex');
    });

    // Close modal on button click
    closedpModalButton.addEventListener('click', function () {
        dpModal.classList.add('hidden');
    });

    // Show change cover button on cover photo hover
    cover.addEventListener('mouseover', function () {
        coverBtn.classList.remove('hidden');
        coverBtn.classList.add("flex");
        });

    cover.addEventListener('mouseout', function () {
        coverBtn.classList.add('hidden');
    });

    // Show modal on change cover click event
    coverBtn.addEventListener('click', function () {
        // Add your cover photo change logic here
        coverModal.classList.remove('hidden');
        coverModal.classList.add('flex');
    });
    closeCoverModalButton.addEventListener('click', function () {
        coverModal.classList.add('hidden');
    });
});
    // Placeholder for upload form submit event
//     dpUploadForm.addEventListener('submit', function (event) {
//         event.preventDefault();
//         const formData = new FormData(uploadForm);

//         fetch('upload.php', {
//             method: 'POST',
//             body: formData
//         })
//         .then(response => response.json())
//         .then(data => {
//             if (data.success) {
//                 alert('Image uploaded successfully');
//                 dpModal.classList.add('hidden');
//             } else {
//                 alert('Image upload failed');
//             }
//         })
//         .catch(error => {
//             console.error('Error:', error);
//             alert('An error occurred while uploading the image');
//         });
//     });
// });