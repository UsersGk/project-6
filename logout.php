<?php
session_start();
if (session_destroy()) {
    header('location: login.php');
    exit(); // Make sure to exit after redirection
}
?>
