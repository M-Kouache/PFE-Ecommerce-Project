<?php
include "helpers/functions.php";
session_start();


if (isset($_POST["submit"])) {
    
if (! isset($_SESSION["client-loggedin"])) {
    if (isset($_POST["get_id"])) {
        echo $_POST["get_id"];
      $result_product = mysqli_query(get_connection(),"SELECT * FROM product WHERE product_id= '".$_POST["get_id"]."'");

      while ($product = mysqli_fetch_assoc($result_product)){
          $final_price = $product["price"] * 0.04;
        $query = " INSERT INTO order_details VALUES('121d','". $product["product_id"] ."','". $_POST["firstname"]."-".$_POST["lastname"]."','". $_POST["address"] ."','". $_POST["region"] ."','". $_POST["zip"] ."','". $_POST["email"] ."','','','".$final_price."','".$product["coperative"]."') ";
        if (mysqli_query(get_connection(),$query)) {
            header("location:cart.php");
        }else {
            header("location:admin/admin-panel/dashboard/error-404.html");    
        }
      }
      
    }else {
      header("location:admin/admin-panel/dashboard/error-404.html");
        echo "get not set";
    }
}elseif (isset($_SESSION["client-loggedin"]) && $_SESSION["client-loggedin"] === true) {
      $result_product = mysqli_query(get_connection(),"SELECT product FROM cart WHERE client= '".$_SESSION["client-id"]."'");
                                    
    if (mysqli_num_rows($result_product) >= 1) {
        while ($product_id = mysqli_fetch_assoc($result_product)) {
          $products = mysqli_query(get_connection(),"SELECT * FROM product WHERE product_id= '".$product_id["product"]."'");
          while ($product = mysqli_fetch_assoc($products)){
            
            $query = " INSERT INTO order_details VALUES('5486','". $product["product_id"] ."','". $_POST["firstname"]."-".$_POST["lastname"]."','". $_POST["address"] ."','". $_POST["region"] ."','". $_POST["zip"] ."','". $_POST["email"] ."','','','".$product["price"] * 0.04."','".$product["coperative"]."') ";
            
            if (mysqli_query(get_connection(),$query)) {
                mysqli_query(get_connection(),"DELETE FROM cart WHERE product= '".$product["product_id"]."'");
            }else {
                header("location:admin/admin-panel/dashboard/error-404.html");      
            }

          }
        }

        header("location:cart.php");
        
    }else {
        header("location:admin/admin-panel/dashboard/error-404.html"); 
    }  
    

}else {
    header("location:admin/admin-panel/dashboard/error-404.html");
}
}

?>