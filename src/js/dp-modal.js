document.addEventListener('DOMContentLoaded', function () {
    const parent = document.getElementById('dp');
    const overlay = document.getElementById('overlay');
    const dpModal = document.getElementById('dpModal');
    const closedpModalButton = document.getElementById('closedpModal');
    const uploadForm = document.getElementById('uploadForm');

    parent.addEventListener('mouseover', function () {
        overlay.classList.remove('hidden');
        overlay.classList.add('flex');
    });

    parent.addEventListener('mouseout', function () {
        overlay.classList.remove('flex');
        overlay.classList.add('hidden');
    });

    parent.addEventListener('click', function () {
        dpModal.classList.remove('hidden');
        dpModal.classList.add('flex');
    });

    closedpModalButton.addEventListener('click', function () {
        dpModal.classList.add('hidden');
    });

    //     uploadForm.addEventListener('submit', function (event) {
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
});