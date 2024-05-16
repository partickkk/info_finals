<?php
    // Start session to access session variables
    session_start(); 

    // Unset all session variables to remove user data
    session_unset(); 

    // Redirect to login page to ensure user is logged out
    header('Location: login.php'); 
?>
