<?php
// Initialize the session
session_start();
 
// Unset all of the session variables
unset($_SESSION["coperative-loggedin"],$_SESSION["coperative-id"],$_SESSION["coperative-name"],$_SESSION["coperative-email"]);

session_destroy();

// Redirect to login page
header("location: ../../create-acount/login.php");
exit;
?>