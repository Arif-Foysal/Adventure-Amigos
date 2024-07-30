<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Radio Button Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center h-screen bg-gray-100">
    <form class="space-y-4 p-4 bg-white shadow-md rounded-lg">
        <div>
            <input type="radio" name="options" value="house" id="option-house" class="hidden peer">
            <label for="option-house" class="border border-2 border-gray-800 rounded-md p-4 cursor-pointer inline-flex w-full h-full hover:bg-zinc-300 peer-checked:bg-gray-300">
                <div class="flex flex-col justify-start">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
                        <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4z"/>
                    </svg>
                    <p class="text-lg font-medium">House</p>
                </div>
            </label>
        </div>
        <div>
            <input type="radio" name="options" value="apartment" id="option-apartment" class="hidden peer">
            <label for="option-apartment" class="border border-2 border-gray-800 rounded-md p-4 cursor-pointer inline-flex w-full h-full hover:bg-zinc-300 peer-checked:bg-gray-300">
                <div class="flex flex-col justify-start">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-building" viewBox="0 0 16 16">
                        <path d="M13.5 0a.5.5 0 0 1 .5.5v15a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5V13H5v2.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-15a.5.5 0 0 1 .5-.5h11zm-1 1H3v14h1V1.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5V15h1V1zm-1 8H6v4h5v-4z"/>
                    </svg>
                    <p class="text-lg font-medium">Apartment</p>
                </div>
            </label>
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Submit</button>
    </form>
</body>
</html>
