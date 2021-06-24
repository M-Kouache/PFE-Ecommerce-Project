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
    <link rel="icon" type="image/png" sizes="16x16" href="Style-one/assets/images/favicon.png">
    <!-- Custom CSS -->
    <link href="Style-one/dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    <?php include "../../../helpers/functions.php"?>
</head>

<body>
        <?php include "side-navbar.php"; 
         ?>


        <?php
            $update_state = "";
            $color = "";
            $user_info = user_data("coperative",$_SESSION["coperative-id"]);
            
            if (isset($_POST["submit"])) {
                $update = update_user_data($_SESSION["coperative-id"],$_POST["name"],$_POST["address"],$_POST["postal_co"],$_POST["email"],$_POST["co_type"],$_POST["tele"]);
                if ($update) {
                    $color = "green";
                    $update_state="Your profile is successfuly updated";
                    $user_info = user_data("coperative",$_SESSION["coperative-id"]);
                }else {
                    $color = "red";
                    $update_state="Oops!, something went wrong try later";
                }
            }    
            
            
        ?> 
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
         <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid ">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Profile</h3>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div>
                        <div class="card">
                            <div class="card-body">
                                <div class="card-body">
                                    <h4 class="card-title mb-0" style="text-align: center;color:<?php echo $color; ?>"><?php
                                    echo $update_state; ?></h4>
                                </div>
                                <form action="#" method="POST" class="form-horizontal form-material mx-2">
                                    <div class="form-group">
                                        <label class="col-md-12">Coperative Name</label>
                                        <div class="col-md-12">
                                            <input type="text" name="name" value="<?php echo $user_info["name"] ?>" placeholder="Coperative type"
                                                class="form-control form-control-line"> 
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Email</label>
                                        <div class="col-md-12">
                                            <input type="email" name="email" value="<?php echo $user_info["email"] ?>" placeholder="example@gmail.com"
                                                class="form-control form-control-line" name="example-email"
                                                id="example-email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Phone No</label>
                                        <div class="col-md-12">
                                            <input type="tel" name="tele" value="<?php echo $user_info["phone_number"] ?>" placeholder="06-66-66-66-66" pattern="[0-9]{1}[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}" max="8" 
                                                class="form-control form-control-line" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-12">Address</label>
                                        <div class="col-md-12">
                                            <input type="text" name="address" value="<?php echo $user_info["address"] ?>" placeholder="Johnathan Doe"
                                                class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-12">Postal code</label>
                                        <div class="col-md-12">
                                            <input type="text" name="postal_co" value="<?php echo $user_info["postal_code"] ?>" placeholder=""
                                                class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-12">Coperative type</label>
                                        <div class="col-md-12">
                                            <input type="text" name="co_type" value="<?php echo $user_info["co_type"] ?>" placeholder="Coperative type"
                                                class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button type="submit" name="submit" class="btn btn-success">Update Profile</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer"> © 2021 Admin Pro by <a href="https://www.wrappixel.com/">wrappixel.com</a> </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="Style-one/assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="Style-one/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="Style-one/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="Style-one/assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="Style-one/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="Style-one/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="Style-one/dist/js/custom.min.js"></script>
</body>

</html>