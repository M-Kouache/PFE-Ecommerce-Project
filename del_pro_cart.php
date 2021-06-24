<?php
 include "helpers/functions.php";

 session_start();

if (isset($_GET["id"]) && isset($_SESSION["client-loggedin"]) && $_SESSION["client-loggedin"] === true) {
    $query = "DELETE FROM cart WHERE product = '".$_GET["id"]."'";
    if (mysqli_query(get_connection(),$query)){
        header("location:cart.php");
    }
}elseif (! isset($_SESSION["client-loggedin"])) {
    header("location:cart.php");
}



?>