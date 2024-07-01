<?php
require_once "partials/__dbconnect.php"; //db connect

$email = $password = $confirm_password = "";
$email_err = $password_err = $confirm_password_err = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  
    // Check if email is empty
    if (empty(trim($_POST["email"]))) {
        $email_err = "Email cannot be empty";
    } else {
        // Check if email is already taken
        $sql = "SELECT * FROM `user` WHERE email = ?";
        $stmt = mysqli_prepare($conn, $sql);
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "s", $param_email);
            $param_email = trim($_POST['email']);

            // Try executing the statement
            if (mysqli_stmt_execute($stmt)) {
                mysqli_stmt_store_result($stmt);
                if (mysqli_stmt_num_rows($stmt) == 1) {
                    $email_err = "This email is already taken"; 
                } else {
                    $email = trim($_POST['email']);
                }
            } else {
                echo "Something went wrong while checking email.";
            }
            mysqli_stmt_close($stmt);
        } else {
            echo "Failed to prepare the statement.";
        }
    }

    // Check for password
    if (empty(trim($_POST['password']))) {
        $password_err = "Password cannot be blank";
    } elseif (strlen(trim($_POST['password'])) < 4) {
        $password_err = "Password cannot be less than 4 characters";
    } else {
        $password = trim($_POST['password']);
    }

    // Check confirm password
    if (empty(trim($_POST['confirm_password']))) {
        $confirm_password_err = "Please confirm your password.";
    } elseif (trim($_POST['password']) != trim($_POST['confirm_password'])) {
        $confirm_password_err = "Passwords should match";
    }

    // If there were no errors, go ahead and insert into the database
    if (empty($email_err) && empty($password_err) && empty($confirm_password_err)) {
        $sql = "INSERT INTO `user` (email, password) VALUES (?, ?)";
        $stmt = mysqli_prepare($conn, $sql);
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "ss", $param_email, $param_password);
            // Set parameters
            $param_email = $email;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Hash the password

            // Try to execute the query
            if (mysqli_stmt_execute($stmt)) {
                header("location: login.php");
            } else {
                echo "Something went wrong... cannot redirect!";
            }
            mysqli_stmt_close($stmt);
        } else {
            echo "Failed to prepare the statement.";
        }
    }
    mysqli_close($conn);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="output.css">
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



<main class="flex items-center justify-center px-8 py-6 sm:px-12 lg:col-span-7 lg:px-16 lg:py-12 xl:col-span-6">
    <div class="max-w-xl lg:max-w-3xl">
      <form name="signupForm" action="" method="post" class="mt-8 grid grid-cols-6 gap-6" onsubmit="return validateForm()">
        <div class="col-span-6 sm:col-span-3">
          <label for="first_name" class="block text-sm font-medium text-gray-700">
            First Name
          </label>
          <input
            type="text"
            id="first_name"
            name="first_name"
            class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm"
            value="<?php echo htmlspecialchars($email); ?>"
          />
        </div>

        <div class="col-span-6 sm:col-span-3">
          <label for="last_name" class="block text-sm font-medium text-gray-700">
            Last Name
          </label>
          <input
            type="text"
            id="last_name"
            name="last_name"
            class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm"
          />
        </div>

        <div class="col-span-6">
          <label for="email" class="block text-sm font-medium text-gray-700"> Email </label>
          <input
            type="email"
            id="email"
            name="email"
            class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm"
            value="<?php echo htmlspecialchars($email); ?>"
          />
          <span id="email_err" class="text-red-500 text-sm"><?php echo $email_err; ?></span>
        </div>

        <div class="col-span-6 sm:col-span-3">
          <label for="password" class="block text-sm font-medium text-gray-700"> Password </label>
          <input
            type="password"
            id="password"
            name="password"
            class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm"
            value="<?php echo htmlspecialchars($password); ?>"
          />
          <span id="password_err" class="text-red-500 text-sm"><?php echo $password_err; ?></span>
        </div>

        <div class="col-span-6 sm:col-span-3">
          <label for="confirm_password" class="block text-sm font-medium text-gray-700">
            Password Confirmation
          </label>
          <input
            type="password"
            id="confirm_password"
            name="confirm_password"
            class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm"
            value="<?php echo htmlspecialchars($confirm_password); ?>"
          />
          <span id="confirm_password_err" class="text-red-500 text-sm"><?php echo $confirm_password_err; ?></span>
        </div>

        <div class="col-span-6">
          <label for="marketing_accept" class="flex gap-4">
            <input
              type="checkbox"
              id="marketing_accept"
              name="marketing_accept"
              class="size-5 rounded-md border-gray-200 bg-white shadow-sm"
            />
            <span class="text-sm text-gray-700">
              I want to receive emails about events, product updates and company announcements.
            </span>
          </label>
        </div>

        <div class="col-span-6">
          <p class="text-sm text-gray-500">
            By creating an account, you agree to our
            <a href="#" class="text-gray-700 underline"> terms and conditions </a>
            and
            <a href="#" class="text-gray-700 underline">privacy policy</a>.
          </p>
        </div>

        <div class="col-span-6 justify-center sm:flex sm:items-center sm:gap-4">
            <div class="flex flex-col w-full max-w-xs gap-y-5">
                <button type="submit"
                  class="inline-block shrink-0 rounded-md border border-blue-600 bg-blue-600 px-12 py-3 text-sm font-medium text-white transition hover:bg-transparent hover:text-blue-600 focus:outline-none focus:ring active:text-blue-500"
                >
                  Create an account
                </button>
                
                <button class="bg-white flex items-center text-gray-700 justify-center rounded-md gap-x-3 text-sm sm:text-base hover:bg-gray-100 duration-300 transition-colors border px-8 py-2.5">
                    <svg class="w-5 h-5 sm:h-6 sm:w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_3033_94454)">
                        <path d="M23.766 12.2764C23.766 11.4607 23.6999 10.6406 23.5588 9.83807H12.24V14.4591H18.7217C18.4528 15.9494 17.5885 17.2678 16.323 18.1056V21.1039H20.19C22.4608 19.0139 23.766 15.9274 23.766 12.2764Z" fill="#4285F4"/>
                        <path d="M12.2401 24.0008C15.4766 24.0008 18.2059 22.9382 20.1945 21.1039L16.3276 18.1055C15.2517 18.8375 13.8627 19.252 12.2445 19.252C9.11388 19.252 6.45946 17.1399 5.50705 14.3003H1.5166V17.3912C3.55371 21.4434 7.7029 24.0008 12.2401 24.0008Z" fill="#34A853"/>
                        <path d="M5.50253 14.3003C4.99987 12.8099 4.99987 11.1961 5.50253 9.70575V6.61481H1.51649C-0.18551 10.0056 -0.18551 14.0004 1.51649 17.3912L5.50253 14.3003Z" fill="#FBBC04"/>
                        <path d="M12.2401 4.74966C13.9509 4.7232 15.6044 5.36697 16.8434 6.54867L20.2695 3.12262C18.1001 1.0855 15.2208 -0.034466 12.2401 0.000808666C7.7029 0.000808666 3.55371 2.55822 1.5166 6.61481L5.50264 9.70575C6.45064 6.86173 9.10947 4.74966 12.2401 4.74966Z" fill="#EA4335"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_3033_94454">
                        <rect width="24" height="24" fill="white"/>
                        </clipPath>
                        </defs>
                    </svg>
                    <span>Sign in with Google</span>
                </button>
            </div>
        </div>
      </form>


      <p class="py-4 mt-4 text-sm text-gray-500 sm:mt-0">
        Already have an account?
        <a href="login.php" class="text-gray-700 underline">Log in</a>.
      </p>
    </div>
  </main>
</body>
</html>
