<?php
//This script will handle login
$passwordMatch=true;

session_start(); //start the session

// check if the user is already logged in
if(isset($_SESSION['email']))
{
    header("location: welcome.php");
    exit;
}
require_once "partials/__dbconnect.php";

$email = $password = "";
$err = "";

// if request method is post
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty(trim($_POST['email'])) || empty(trim($_POST['password'])))
    {
        $err = "Please enter email + password";
    }
    else{
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
    }


if(empty($err))
{
    $sql = "SELECT user_id, email, password FROM user WHERE email = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $param_username);
    $param_username = $email;
    
    
    // Try to execute this statement
    if(mysqli_stmt_execute($stmt)){
        mysqli_stmt_store_result($stmt);
        if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    mysqli_stmt_bind_result($stmt, $id, $email, $hashed_password);
                    if(mysqli_stmt_fetch($stmt))
                    {
                        if(password_verify($password, $hashed_password))
                        {
                            // this means the password is corrct. Allow user to login
                            session_start();
                            $_SESSION["email"] = $email;
                            $_SESSION["id"] = $id;
                            $_SESSION["loggedin"] = true;

                            //Redirect user to welcome page
                            header("location: welcome.php");
                            
                        }
                        else {
                          # code...
                          $passwordMatch = false;
                        }
                    }

                }
                else {
                  $passwordMatch = false;
                }

    }
}    


}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="output.css">
    <title>Login</title>
</head>
<body>
<?php
// include_once "partials/__nav.php"
// that's a weird login page. Fix the bugs asap
?>

<?php
if (!$passwordMatch) {
echo '
<div class="w-full text-white bg-red-500" id="alertDiv">
<div class="container flex items-center justify-between px-6 py-4 mx-auto">
        <div class="flex">
        <svg viewBox="0 0 40 40" class="w-6 h-6 fill-current">
                <path d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM21.6667 28.3333H18.3334V25H21.6667V28.3333ZM21.6667 21.6666H18.3334V11.6666H21.6667V21.6666Z">
                </path>
            </svg>

            <p class="mx-3">Invalid username or password</p>
        </div>

        <button class="p-1 transition-colors duration-300 transform rounded-md hover:bg-opacity-25 hover:bg-gray-600 focus:outline-none" id="closeButton">
            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6 18L18 6M6 6L18 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </button>
    </div>
</div>
';
// echo "incorrent pass";
# code...
}

?>


<script>
    document.getElementById('closeButton').addEventListener('click', function() {
        document.getElementById('alertDiv').style.visibility = 'hidden';
    });
</script>

            

        
<?php
require_once "partials/__nav.php";
?>

<main class="flex items-top justify-center px-8 pt-4 pb-24 sm:px-12 lg:col-span-7 lg:px-16 lg:pt-8 lg:pb-40 xl:col-span-6 ">
    <div class="max-w-xl lg:max-w-3xl">
    <h1 class="text-gray-800 text-3xl pt-4 font-bold flex items-start gap-2">
  <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" fill="currentColor" class="bi bi-box-arrow-in-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M10 3.5a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 1 1 0v2A1.5 1.5 0 0 1 9.5 14h-8A1.5 1.5 0 0 1 0 12.5v-9A1.5 1.5 0 0 1 1.5 2h8A1.5 1.5 0 0 1 11 3.5v2a.5.5 0 0 1-1 0z"/>
  <path fill-rule="evenodd" d="M4.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H14.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708z"/>
 </svg>

  Log In to Adventure Amigos 🌍</h1>

      <form name="signupForm" action="" method="post" class="mt-8 grid grid-cols-6 gap-6">


        <div class="col-span-6">
          <label for="email" class="block text-sm font-medium text-gray-700"> Email </label>
          <input
            required
            type="email"
            id="email"
            name="email"
            class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm"

          />
        </div>

            <div class="col-span-6">
          <label for="email" class="block text-sm font-medium text-gray-700"> Password </label>
          <input
            type="password"
            id="password"
            name="password"
            required
            class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm"
          />

        </div>




        <div class="col-span-6">
          <label for="keep_loggedin" class="flex gap-4">
            <input
              type="checkbox"
              id="keep_loggedin"
              name="keep_loggedin"
              class="size-5 rounded-md border-gray-200 bg-white shadow-sm"
            />
            <span class="text-sm text-gray-700">
              Keep me logged in
            </span>
          </label>
        </div>

        <div class="col-span-6">
          <p class="text-sm text-gray-500">
            Don't have an account? Click to
            <a href="signup.php" class="text-gray-700 underline"> Create a new account </a>
                
          </p>
        </div>

        <div class="col-span-6 justify-center sm:flex sm:items-center sm:gap-4">
            <div class="flex flex-col w-full max-w-xs gap-y-5">
                <button type="submit"
                  class="inline-block shrink-0 rounded-md border border-blue-600 bg-blue-600 px-12 py-3 text-sm font-medium text-white transition hover:bg-transparent hover:text-blue-600 focus:outline-none focus:ring active:text-blue-500"
                >
                  Log In
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
                    <span>Continue with Google</span>
                </button>
            </div>
        </div>
      </form>
    </div>
  </main>

  <?php
  include_once 'partials/__footer.php';
  ?>

</body>
<html>