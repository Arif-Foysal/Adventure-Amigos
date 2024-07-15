
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discover</title>
    <link rel="stylesheet" href="output.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        function validateForm() {
            let isValid = true;

            // Clear previous errors
            document.getElementById("email_err").innerText = "";
            document.getElementById("password_err").innerText = "";
            document.getElementById("confirm_password_err").innerText = "";

            const email = document.forms["signupForm"]["email"].value;
            const password = document.forms["signupForm"]["password"].value;
            const confirmPassword = document.forms["signupForm"]["confirm_password"].value;

            // Validate email
            if (email == "") {
                document.getElementById("email_err").innerText = "Email cannot be empty";
                isValid = false;
            }

            // Validate password
            if (password == "") {
                document.getElementById("password_err").innerText = "Password cannot be blank";
                isValid = false;
            } else if (password.length < 4) {
                document.getElementById("password_err").innerText = "Password cannot be less than 4 characters";
                isValid = false;
            }

            // Validate confirm password
            if (confirmPassword != password) {
                document.getElementById("confirm_password_err").innerText = "Passwords should match";
                isValid = false;
            }

            return isValid;
        }
    </script>

</head>
<body>

<?php
include_once "partials/__nav.php"
?>
</body>
</html>