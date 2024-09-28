<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Images</title>
    <link rel="stylesheet" href="output.css">
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>
    <?php
    ob_start();
    include_once "partials/__nav.php";
    include_once 'partials/__save-exit-btn.php';
    ?>
       <section class=" p-6">
       <div class=" max-w-3xl mx-auto">
        <div class="flex gap-3 items-center">

            <h1 class="text-4xl font-bold">Add some photos of your place</h1>

            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-image" viewBox="0 0 16 16">
  <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0"/>
  <path d="M2.002 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2zm12 1a1 1 0 0 1 1 1v6.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12V3a1 1 0 0 1 1-1z"/>
</svg>
        </div>
       <h1 class="text-xl font-medium text-gray-600">Upload 5 photos to get started. You can always add more later</h1>
       
       <hr>



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
                Upload
            </button>
        </form>
        <div id="upload-status" class="mt-4 text-center hidden"></div>
    </div>

</div>

</div>
</section>


<br>

        <?php
        include_once 'partials/__prev-next-btn.php';
        ?>
 
    <br>
    <br>
    <?php
    include_once 'partials/__footer.php';
    ob_end_flush();
    ?>


<script src="js/upload.js"></script>
<script>
    document.getElementById("next").addEventListener("click", function(event) {
        // console.log("clicked");
        window.location.href = "create-listing-2-4.php";
    });
</script>
</body>

</html>