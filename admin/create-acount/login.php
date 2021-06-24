<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AzuuL - Login</title>

    <!-- Custom fonts for this template-->
    <link href="../../Scripts/bootstrap-js/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../../StyleSheet/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../StyleSheet/color-palette.css">

    <?php include "../../helpers/functions.php"?>

</head>

<body class="bg-auth-page">

    <?php
        
        session_start();
        // Check if the user is already logged in, if yes then redirect him to welcome page
        if(isset($_SESSION["coperative-loggedin"]) && $_SESSION["coperative-loggedin"] === true){
            header("location:../admin-panel/dashboard/index.php");
            exit;
        }

        $login_state = "";
        if (isset($_POST["submit"])) {
            if (login_credantials($_POST["email"],$_POST["password"],"coperative") == "unverified") {
                $login_state = "your email address is not verified, check inboxe to verifie !";
            }elseif (($user_info =login_credantials($_POST["email"],$_POST["password"],"coperative")) != "unverified"){
                session_start();
                            
                // Store data in session variables
                $_SESSION["coperative-loggedin"] = true;
                $_SESSION["coperative-id"] = $user_info["id"];
                $_SESSION["coperative-name"] = $user_info["name"];
                $_SESSION["coperative-email"] = $user_info["email"];
                header("location:../admin-panel/dashboard/index.php");
            } else {
                $login_state = "invalid email or password !";
            }
            
        }
    ?>

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <form action="#" method="POST" class="user">
                                        <div class="form-group">
                                            <input type="email" name ="email" class="email form-control form-control-user required"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address..." required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password" required>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <input type="submit" name="submit" value="Login" class="btn btn-primary btn-user btn-block">
                                        <hr>
                                    </form>
                                    <h6 style="color:red;text-align:center;"><?php echo $login_state; ?></h6>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="required.html">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../../Scripts/bootstrap-js/vendor/jquery/jquery.min.js"></script>
    <script src="../../Scripts/bootstrap-js/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../../Scripts/bootstrap-js/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../../Scripts/bootstrap-js/js/sb-admin-2.min.js"></script>

</body>

</html>