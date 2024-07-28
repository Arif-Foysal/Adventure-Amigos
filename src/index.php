<?php
include_once 'partials/__session.php';

// if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
// {
//     header("location: login.php");
// }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="output.css">

</head>
<body>
<?php
include_once "partials/__nav.php"
?>
<div  class="bg-green-400 font-medium flex justify-center space-x-8">


<h1>BappaRaj</h1>
<h1>Khonju Raaj</h1>

</div>

<footer>

</footer>

</body>
</html>