<?php

include_once 'partials/__session.php';
$_SESSION = array();
session_destroy();
header("location: login.php");

?>