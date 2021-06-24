<?php

    include "../../helpers/functions.php";

    
    $email_check = false;
    if ($_GET["email"]) {
        check_email_existacne($_GET["email"]);
    }


?>