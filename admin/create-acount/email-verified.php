
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Matrix Admin Lite Free Versions Template by WrapPixel</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../admin-panel/dashboard/Style-one/assets/images/favicon.png">
    <!-- Custom CSS -->
    <link href="../admin-panel/dashboard/Style-one/dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<?php include "../../helpers/functions.php"?>
</head>
<body style="display: flex; align-items: center;justify-content: center;height: 100vh;flex-direction: column;">

    <?php 
        $state = false;
        if (isset($_GET["vkey"])) {
            $table = $_GET["who"];
            $query = "UPDATE `$table` SET verfied = 1 WHERE vkey = '".$_GET["vkey"]."';";

            if (mysqli_query(get_connection(),$query)) {
                $state = true;
            }

        }        


    ?>


    <h4 class="modal-header mb-0" style="font-size: 2rem;color: #681f2e;">Azuul</h4>
    <div class="card <?php echo $state == true ? '' : 'invisible' ?> " style="width: 50%;">
        <div class="card-body">
            <h4 class="card-title alert alert-success mb-0" style="text-align: center;">Your email successfuly verified, you may login now</h4>
        </div>
    </div>
    <div class="card <?php echo $state == true ? 'd-none' : '' ?> " style="width: 50%;">
        <div class="card-body">
            <h4 class="card-title alert alert-warning mb-0" style="text-align: center;">Your email is not verified, something went wrong</h4>
        </div>
    </div>
    <footer class="footer text-center">
        All Rights Reserved by <span style="color: lightcoral;">AzuuL</span>. Designed and Developed by <a
            href="https://github.com/M-Kouache?tab=repositories">Gram & Kouache</a>.
    </footer>


</body>

</html>