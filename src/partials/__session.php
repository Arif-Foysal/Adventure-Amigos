<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

//necessary variables
$_SESSION['current_file'] = basename($_SERVER['PHP_SELF']); 
?>