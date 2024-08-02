<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Profile</title>
    <link rel="stylesheet" href="output.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .profile-photo-container:hover .overlay {
            opacity: 1;
        }
    </style>
</head>
<body>
    <div class="relative top-32 left-4 profile-photo-container">
        <img src="profile-photo.jpg" alt="Profile Photo" class="w-32 h-32 rounded-full border-4 border-white object-cover">
        <div class="overlay absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center rounded-full opacity-0 transition-opacity duration-300">
            <span class="text-white text-sm">Change Image</span>
        </div>
    </div>
</body>
</html>