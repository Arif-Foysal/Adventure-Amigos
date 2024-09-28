<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="output.css">
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>

<?php
include_once "partials/__nav.php"
?>

<section class=" p-6">
            <div class=" max-w-2xl mx-auto">
                <div class="flex gap-2 items-center">

                    <h1 class="text-4xl font-bold">Confirm Your Identity</h1>
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-person-vcard" viewBox="0 0 16 16">
  <path d="M5 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4m4-2.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5M9 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4A.5.5 0 0 1 9 8m1 2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5"/>
  <path d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2zM1 4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H8.96q.04-.245.04-.5C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1 1 0 0 1 1 12z"/>
</svg>

                </div>
            
                <h1 class="text-2xl font-medium text-gray-400">Upload your ID to complete the verification process and protect your account.</h1>


<div class="pt-16 flex items-center justify-center p-4">
    <div class="w-full max-w-md">
        <form id="upload-form" class="bg-white shadow-md rounded-lg p-6">
            <div id="drop-area" class="border-2 border-dashed border-gray-300 rounded-lg p-4 text-center cursor-pointer transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                </svg>
                <p class="mt-2 text-sm text-gray-600">Click to upload or drag and drop</p>
                <p class="mt-1 text-xs text-gray-500">SVG, PNG or JPG</p>
            </div>
            <input type="file" id="file-input" name="images[]" accept=".svg,.png,.jpg,.jpeg,.gif" class="hidden" multiple required>
            <div id="image-preview" class="mt-4 grid grid-cols-2 gap-4"></div>
            <button type="submit" id="submit-button" class="mt-4 w-full bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded transition-colors">
                Confirm Identificaiton
            </button>
        </form>
        <div id="upload-status" class="mt-4 text-center hidden"></div>
    </div>

</div>
<br>
<div class="flex gap-4 bg-green-100 p-8 ">
    <h1 class="text-xl font-medium">Automatically approve booking requests</h1>



<label class="inline-flex items-center cursor-pointer">
  <input id="auto-reserve" checked type="checkbox" value="" class="sr-only peer">
  <div class="relative w-14 h-7 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300  rounded-full peer  peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[4px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-6 after:w-6 after:transition-all  peer-checked:bg-blue-600"></div>
</label>

</div>
            
  



</div>
</section>

<?php
    include_once 'partials/__prev-next-btn.php';
    ?>  

<script>
document.getElementById("next").classList.add('hidden');



const dropArea = document.getElementById('drop-area');
const fileInput = document.getElementById('file-input');
const uploadForm = document.getElementById('upload-form');
const imagePreview = document.getElementById('image-preview');
const submitButton = document.getElementById('submit-button');
const uploadStatus = document.getElementById('upload-status');

dropArea.addEventListener('click', () => fileInput.click());

['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
    dropArea.addEventListener(eventName, preventDefaults, false);
});

function preventDefaults(e) {
    e.preventDefault();
    e.stopPropagation();
}

['dragenter', 'dragover'].forEach(eventName => {
    dropArea.addEventListener(eventName, highlight, false);
});

['dragleave', 'drop'].forEach(eventName => {
    dropArea.addEventListener(eventName, unhighlight, false);
});

function highlight() {
    dropArea.classList.add('border-blue-400', 'bg-blue-50');
}

function unhighlight() {
    dropArea.classList.remove('border-blue-400', 'bg-blue-50');
}

dropArea.addEventListener('drop', handleDrop, false);

function handleDrop(e) {
    const dt = e.dataTransfer;
    const files = dt.files;
    fileInput.files = files;
    updateFileInfo();
}

fileInput.addEventListener('change', updateFileInfo);

function updateFileInfo() {
    imagePreview.innerHTML = '';
    if (fileInput.files.length > 0) {
        Array.from(fileInput.files).forEach((file, index) => {
            const reader = new FileReader();
            reader.onload = function(e) {
                const div = document.createElement('div');
                div.className = 'relative group';
                div.innerHTML = `
                    <img src="${e.target.result}" alt="Image preview" class="w-full h-32 object-cover rounded-lg">
                    <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <button type="button" class="bg-white text-gray-800 font-bold py-1 px-2 rounded text-sm remove-image" data-index="${index}">
                            Remove
                        </button>
                    </div>
                `;
                imagePreview.appendChild(div);
            }
            reader.readAsDataURL(file);
        });
    }
}

imagePreview.addEventListener('click', function(e) {
    if (e.target.classList.contains('remove-image')) {
        const index = parseInt(e.target.getAttribute('data-index'));
        const newFileList = Array.from(fileInput.files).filter((_, i) => i !== index);
        fileInput.files = createFileList(newFileList);
        updateFileInfo();
    }
});

function createFileList(files) {
    const dt = new DataTransfer();
    files.forEach(file => dt.items.add(file));
    return dt.files;
}

uploadForm.addEventListener('submit', async (e) => {
    e.preventDefault();
    
    if (!fileInput.files.length) {
        alert('Please select at least one file to upload.');
        return;
    }

    const formData = new FormData(uploadForm);
    submitButton.disabled = true;
    submitButton.textContent = 'Uploading...';
    uploadStatus.textContent = 'Uploading...';
    uploadStatus.classList.remove('hidden', 'text-green-500', 'text-red-500');
    uploadStatus.classList.add('text-blue-500');

    try {
        const response = await fetch('upload-nid.php', {
            method: 'POST',
            body: formData
        });

        if (response.ok) {
            const result = await response.json();
            console.log(result);
            console.log(result['message']);

            uploadStatus.textContent = 'Upload successful!';
            document.getElementById("next").classList.remove('hidden');
            uploadStatus.classList.remove('text-blue-500');
            uploadStatus.classList.add('text-green-500');
            // Clear the form after successful upload
            fileInput.value = '';
            updateFileInfo();
        } else {
            throw new Error('Upload failed');
        }
    } catch (error) {
        uploadStatus.textContent = 'Upload failed. Please try again.';
        uploadStatus.classList.remove('text-blue-500');
        uploadStatus.classList.add('text-red-500');
        console.error('Error:', error);
    } finally {
        submitButton.disabled = false;
        submitButton.textContent = 'Upload';
    }
});

</script>

<script>
        document.getElementById("next").textContent ='Finish & Publish';
        document.getElementById("next").addEventListener("click", function(event) {
        // window.location.href = "finish-listing.php";
        const checkbox = document.getElementById('auto-reserve');
        const autoReserve = checkbox.checked; // true or false
        const entity = "hotel";
        console.log(autoReserve);

        const data = {
    autoReserve:autoReserve,
    entity:entity
};
       
fetch('api/publish-listing.php', {    
        method: 'POST',  // POST request
        headers: {
            'Content-Type': 'application/json',  // Set content type to JSON
        },
        body: JSON.stringify(data)  // Send the JSON data as the body of the request
    })
    .then(response => response.json())  // Parse the response as JSON
    .then(data => {
        console.log('Success:', data);  // Handle success response from the server
        window.location.href = "host-dashboard.php";


    })
    .catch((error) => {
        // console.error('Error:', error);  // Handle any errors
        console.log("there is a problem");
        
    });

    });
</script>
</body>
</html>