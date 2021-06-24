<?php
// Initialize the session
session_start();
 
// Unset all of the session variables
unset($_SESSION["client-loggedin"],$_SESSION["client-id"],$_SESSION["client-name"],$_SESSION["client-email"]);

session_destroy();
// Redirect to login page
header("location:index.php");
exit;
?>