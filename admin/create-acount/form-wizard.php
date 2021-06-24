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
    <title>wizard</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../admin-panel/assets/images/favicon.png">
    <!-- Custom CSS -->
    <link href="../admin-panel/dashboard/Style-one/assets/libs/jquery-steps/jquery.steps.css" rel="stylesheet">
    <link href="../admin-panel/dashboard/Style-one/assets/libs/jquery-steps/steps.css" rel="stylesheet">
    <link href="../admin-panel/dashboard/Style-one/dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
        <?php include "../../helpers/functions.php"; ?>        

</head>

<body>
 
            <!-- php code for coperative registeration: -->

            <?php

                if (isset($_POST["submit"])) {
                    # code...

                    register_coperative($_POST["cooperative_number"],$_POST["cooperative_name"],$_POST["address"],$_POST["c_postal"],date("Y/m/d"),$_POST["email"],$_POST["password"],$_POST["co_type"]);
                    
                }

                

            ?>

            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="card">
                    <div class="card-body wizard-content">
                        <h4 class="card-title">Account Creation</h4>
                        <h6 class="card-subtitle"></h6>
                        <form id="example-form" action="#" method="POST" class="mt-5">
                            <div>
                                <h3>Account</h3>
                                <section>
                                    <label for="userName">Email (*)</label>
                                    <input id="userName"  name="email" type="text" class="required email form-control" onchange="showHint(this.value);">
                                    <h6 id="mess" style="color:red"></h6>
                                    <label for="password">Password *</label>
                                    <input id="password" name="password" type="password" class="required form-control">
                                    <label for="confirm">Confirm Password *</label>
                                    <input id="confirm" name="confirm" type="password" class="required form-control">
                                </section>
                                <h3>Details</h3>
                                <section>
                                    <label for="name">Cooperative's number (*))</label>
                                    <input id="name" name="cooperative_number" type="text" class="required form-control">
                                    <label for="surname">Cooperative's name (*)</label>
                                    <input id="surname" name="cooperative_name" type="text" class="required form-control">
                                    <label for="email">Address (*)</label>
                                    <input id="email" name="address" type="text" class="required  form-control">
                                    <label for="address">Postal code (*)</label>
                                    <input id="address" name="c_postal" type="text" class=" form-control">
                                    <label for="address">Postal code (*)</label>
                                    <input id="address" name="co_type" type="text" class=" form-control">
                                </section>
                                <h3>Submit</h3>
                                <section>
                                    <input id="acceptTerms" name="acceptTerms" type="checkbox" class="required">
                                    <label for="acceptTerms">I agree with the Terms and Conditions.</label>
                                    <input id="form-submit" name="submit" type="submit" class="required invisible">
                                </section>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                All Rights Reserved by <span style="color: lightcoral;">AzuuL</span>. Designed and Developed by <a
                    href="https://github.com/M-Kouache?tab=repositories">Gram & Kouache</a>.
            </footer>
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
    <script src="../admin-panel/dashboard/Style-one/assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../admin-panel/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../admin-panel/dashboard/Style-one/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../admin-panel/dashboard/Style-one/assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="../admin-panel/dashboard/Style-one/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../admin-panel/dashboard/Style-one/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../admin-panel/dashboard/Style-one/dist/js/custom.min.js"></script>
    <!-- this page js -->
    <script src="../admin-panel/dashboard/Style-one/assets/libs/jquery-steps/build/jquery.steps.min.js"></script>
    <script src="../admin-panel/dashboard/Style-one/assets/libs/jquery-validation/dist/jquery.validate.min.js"></script>
    <script>


        function showHint(str) {
            if (str.length == 0) {
                document.getElementById("mess").innerHTML = "";
                return;
            } else {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("mess").innerHTML = this.responseText;
                    }
                }
                xmlhttp.open("GET", "ajax-email.php?email="+str, true);
                xmlhttp.send();
            }
        }
 
        // Basic Example with form
        var form = $("#example-form");
        form.validate({
            errorPlacement: function errorPlacement(error, element) { element.before(error); },
            rules: {
                confirm: {
                    equalTo: "#password"
                }
            }
        });
        form.children("div").steps({
            headerTag: "h3",
            bodyTag: "section",
            transitionEffect: "slideLeft",
            onStepChanging: function (event, currentIndex, newIndex) {
                form.validate().settings.ignore = ":disabled,:hidden";
                return form.valid();
            },
            onFinishing: function (event, currentIndex) {
                form.validate().settings.ignore = ":disabled";
                return form.valid();
            },
            onFinished: function (event, currentIndex) {
                if ((document.getElementById("mess").innerHTML).trim() != "") {
                    document.getElementById("steps-uid-0-t-0").click(); 
                }else{
                    document.getElementById("form-submit").click(); 
                }
                
            }
        });




    </script>
</body>

</html>