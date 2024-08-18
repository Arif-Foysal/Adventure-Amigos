<?php
require_once 'partials/__dbconnect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Security | Amigos</title>
    <link rel="icon" type="image/x-icon" href="../images/fav.png">
    <link rel="stylesheet" href="output.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <?php
    include_once 'partials/__nav.php';
    ?>
    <section class=" p-6">
        <div class="flex justify-between gap-8 max-w-5xl mx-auto ">

            <section class=" w-full md:w-3/5">
                <h1 class="text-3xl font-semibold pb-4 pt-4">Login and security</h1>
                <div class="text-lg mt-4 mb-4">
                    <div class="flex justify-between pb-2 font-semibold">
                        <p>Password</p>
                        <a href="profile-edit.php"
                            class="flex items-center border-b-2 border-transparent hover:border-black hover:border-b-2 h-6">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-pen" viewBox="0 0 16 16">
                                <path
                                    d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001m-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708z" />
                            </svg>
                            &nbsp;
                            <p class="text-md font-semibold text-black">Update</p>
                        </a>
                    </div>
                    <p>Updated 13 days ago</p>
                </div>
                <hr>
                <div class="text-lg mt-4 mb-4">
                    <div class="flex justify-between pb-2 font-semibold">
                        <p>Two factor authentication</p>
                        <a href="profile-edit.php"
                            class="flex items-center border-b-2 border-transparent hover:border-black hover:border-b-2 h-6">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-pen" viewBox="0 0 16 16">
                                <path
                                    d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001m-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708z" />
                            </svg>
                            &nbsp;
                            <p class="text-md font-semibold text-black">Change</p>
                        </a>
                    </div>
                    <p>Turned off</p>
                </div>
                <hr>
                <div class="text-lg mt-4 mb-4">
                    <div class="flex justify-between pb-2 font-semibold">
                        <p>Account</p>
                        <a href="deactivate.php"
                            class=" text-red-500 flex items-center border-b-2 border-transparent hover:border-red-500 hover:border-b-2 h-6">
                            <p class="text-md font-semibold">Deactivate</p>
                        </a>
                    </div>
                    <p>Deactivate your account</p>
                </div>
                <hr>
                <div class="text-lg mt-4 mb-7">
                    <div class="flex justify-between font-semibold">
                        <p>Permanently delete your account</p>
                    </div>
                    <p class="text-sm text-gray-500 pb-5">Your account and activities will be deleted forever</p>       
                    <a href="delete-account.php" type="button" class="text-red-600 bg-white border border-red-600 focus:outline-none hover:bg-red-600 hover:text-white focus:ring-4 focus:ring-gray-100 font-semibold rounded-lg text-sm px-5 py-2.5 mr-4">Delete your account</a>
                </div>
                <hr>

            </section>
            <section class="hidden md:block pt-20">
                <div class="border border-black rounded-lg p-4 m-2 w-80">
                    <a>
                        <img src="../images/secure.png" width="30" alt="">
                        <h2 class="text-lg font-bold mt-3">Keeping your account safe</h2>
                        <p>We consistently review accounts to ensure the highest level of security. We'll let you know if there are any further steps to improve your account's safety.</p>
                    </a>
                </div>
                <br>
                <div class="flex text-md font-medium pl-2">
                    <p>Go to</p> &nbsp; &nbsp;<a href="account-settings.php"
                        class="flex items-center border-b-2 border-black hover:border-transparent h-6 w-fit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-gear" viewBox="0 0 16 16">
                            <path
                                d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492M5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0" />
                            <path
                                d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115z" />
                        </svg>
                        &nbsp;
                        <p class="text-md font-semibold text-black">Account Settings</p>
                    </a>
                </div>
            </section>

        </div>
    </section>
    <br>
    <br>
    <?php
    include_once 'partials/__footer.php';
    ?>

</body>

</html>