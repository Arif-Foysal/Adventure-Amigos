<?php
// Start output buffering at the beginning of your PHP script
ob_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Profile</title>
    <link rel="stylesheet" href="output.css">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

    <?php
    include_once "partials/__nav.php";
    ?>
    <div class="p-20">
        <div class="flex gap-1 items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
  <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
</svg>
</svg>
            <h1 class="text-4xl font-semibold">Verify your account</h1>
        </div>
        <p class="text-base font-light">Enter OTP to verify your account</p>
        <br><br>
        <form class="w-2/4" action="" method="POST"> <!-- Removed # -->
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            
            // Check if OTP matches
            if ((int)$_POST['otp'] !== (int)$_SESSION['otp']) {
                // OTP does not match, debug if necessary
               echo '
               <div class="flex items-center p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50" role="alert">
  <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
  </svg>
  <span class="sr-only">Info</span>
  <div>
    <span class="font-medium">OTP did not match!</span> Please enter your OTP correctly or request for a new one.
  </div>
</div>
               ';
            } else {
                $_SESSION["loggedin"] = true;
                // OTP matches, redirect
                $query_url = "http://localhost/Adventure-Amigos/src/hotels.php";
                
                // Perform header redirect before any output is sent
                header("Location: " . $query_url);
                
                // End the script to ensure no further output is sent
                exit();
            }
        }
        ?>
            <input name="otp" id="otpInput" type="number" class="w-full h-16 text-xl rounded-lg bg-gray-100 border-neutral-500 border-2"
            placeholder="Enter OTP"> <!-- Changed placeholder to Enter OTP -->
            <p class="font-light text-gray-500">Didn't get an email? You can always <a class="text-blue-800" href="">request a new one.</a></p>

            <button type="submit" name="verify" class="mt-2 rounded-lg p-3 bg-green-600 text-white font-semibold flex gap-2">
            <p>
                Verify account
            </p>
            </button> <!-- Removed onclick -->
        </form>
    </div>
    <?php
    include_once 'partials/__footer.php';
    ?>

</body>
</html>

<?php
// Flush output buffer to prevent "headers already sent" issues
ob_end_flush();
?>
