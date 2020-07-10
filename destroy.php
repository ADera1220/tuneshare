<?php
//check for an existing session
session_start();

//destroy the session
session_destroy();

//really destroy the information
$_SESSION['name'] = null;
header('location:view.php');
?>