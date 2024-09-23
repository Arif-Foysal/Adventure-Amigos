
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
        const response = await fetch('up-multiple.php', {
            method: 'POST',
            body: formData
        });

        if (response.ok) {
            const result = await response.json();
            console.log(result);
            console.log(result['message']);

            uploadStatus.textContent = 'Upload successful!';
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
