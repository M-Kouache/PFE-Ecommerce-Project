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
    <link rel="stylesheet" type="text/css" href="Style-one/assets/libs/select2/dist/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="Style-one/assets/libs/jquery-minicolors/jquery.minicolors.css">
    <link rel="stylesheet" type="text/css"
        href="Style-one/assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" type="text/css" href="Style-one/assets/libs/quill/dist/quill.snow.css">
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
            
            $update_state = "";
            $color = "";

            

            if (isset($_POST["submit"])) {
                
                if (add_product($_SESSION["coperative-id"],$_POST["name"],$_POST["qtn"],$_POST["price"],$_FILES["thumbnail"],$_FILES["imgs"],$_POST["cat"],$_POST["desc"],date("Y/m/d"))){
                    $color = "green";
                    $update_state="Your product is successfuly added";
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
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">New product</h4>
                    </div>
                </div>
            </div>
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
                <div class="row">
                    <div >
                        <div class="card">
                            <form action="#" method = "POST" class="form-horizontal" enctype="multipart/form-data" >
                                <div class="card-body">
                                    <h4 class="card-title">Add new product</h4>
                                    <div class="card-body">
                                        <h4 class="card-title mb-0" style="text-align: center;color:<?php echo $color; ?>"><?php
                                        echo $update_state; ?></h4>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname"
                                            class="col-sm-3 text-end control-label col-form-label">Product Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="name" class="form-control " id="fname"
                                                placeholder="Product Name Here" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname"
                                            class="col-sm-3 text-end control-label col-form-label">Quantity</label>
                                        <div class="col-sm-9">
                                            <input type="number" name="qtn" class="form-control" id="lname" min="1" 
                                                placeholder="1">
                                        </div>
                                    </div>
                                    <div class="row mb-3 align-items-center">
                                        <div class="col-lg-4 col-md-12 text-end">
                                            <span>Price</span>
                                        </div>
                                        <div class="col-lg-8 col-md-12">
                                            <div class="input-group">
                                                <input type="text" name="price" class="form-control" placeholder="5.000"
                                                    aria-label="Recipient 's username" aria-describedby="basic-addon2">
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="basic-addon2">MAD</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 text-end control-label col-form-label">Thumbnail</label>
                                        <div class="col-md-9">
                                            <div class="custom-file">
                                                <input type="file" name="thumbnail" class="custom-file-input" id="validatedCustomFile"
                                                    required>
                                                <label class="custom-file-label" for="validatedCustomFile">Choose
                                                    file...</label>
                                                <div class="invalid-feedback">Example invalid custom file feedback</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 text-end control-label col-form-label">Product images</label>
                                        <div class="col-md-9">
                                            <div class="custom-file">
                                                <input type="file" name="imgs[]" class="custom-file-input" id="validatedCustomFile"
                                                    required multiple>
                                                <label class="custom-file-label" for="validatedCustomFile">Choose
                                                    file...</label>
                                                <div class="invalid-feedback">Example invalid custom file feedback</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 text-end control-label col-form-label">Product category</label>
                                        <div class="col-md-9 ">
                                            <select name="cat" class="select2 form-select shadow-none"
                                                style="width: 100%; height:36px;">
                                                <!-- <option>Select</option> -->
                                                <option value="vintage">vintage</option>
                                                <option value="craft">craft</option>
                                            
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cono1"
                                            class="col-sm-3 text-end control-label col-form-label">Description</label>
                                        <div class="col-sm-9">
                                            <textarea rows="10" cols="60" name="desc" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div style="text-align:end">
                                    <div class="card-body">
                                        <input type="submit" name="submit" value="Pablish" class="btn btn-primary">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Form Elements</h5>
                                <div class="form-group row">
                                    <label class="col-md-3 mt-3">Single Select</label>
                                    <div class="col-md-9">
                                        <select class="select2 form-select shadow-none"
                                            style="width: 100%; height:36px;">
                                            <option>Select</option>
                                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                                <option value="AK">Alaska</option>
                                                <option value="HI">Hawaii</option>
                                            </optgroup>
                                            <optgroup label="Pacific Time Zone">
                                                <option value="CA">California</option>
                                                <option value="NV">Nevada</option>
                                                <option value="OR">Oregon</option>
                                                <option value="WA">Washington</option>
                                            </optgroup>
                                            <optgroup label="Mountain Time Zone">
                                                <option value="AZ">Arizona</option>
                                                <option value="CO">Colorado</option>
                                                <option value="ID">Idaho</option>
                                                <option value="MT">Montana</option>
                                                <option value="NE">Nebraska</option>
                                                <option value="NM">New Mexico</option>
                                                <option value="ND">North Dakota</option>
                                                <option value="UT">Utah</option>
                                                <option value="WY">Wyoming</option>
                                            </optgroup>
                                            <optgroup label="Central Time Zone">
                                                <option value="AL">Alabama</option>
                                                <option value="AR">Arkansas</option>
                                                <option value="IL">Illinois</option>
                                                <option value="IA">Iowa</option>
                                                <option value="KS">Kansas</option>
                                                <option value="KY">Kentucky</option>
                                                <option value="LA">Louisiana</option>
                                                <option value="MN">Minnesota</option>
                                                <option value="MS">Mississippi</option>
                                                <option value="MO">Missouri</option>
                                                <option value="OK">Oklahoma</option>
                                                <option value="SD">South Dakota</option>
                                                <option value="TX">Texas</option>
                                                <option value="TN">Tennessee</option>
                                                <option value="WI">Wisconsin</option>
                                            </optgroup>
                                            <optgroup label="Eastern Time Zone">
                                                <option value="CT">Connecticut</option>
                                                <option value="DE">Delaware</option>
                                                <option value="FL">Florida</option>
                                                <option value="GA">Georgia</option>
                                                <option value="IN">Indiana</option>
                                                <option value="ME">Maine</option>
                                                <option value="MD">Maryland</option>
                                                <option value="MA">Massachusetts</option>
                                                <option value="MI">Michigan</option>
                                                <option value="NH">New Hampshire</option>
                                                <option value="NJ">New Jersey</option>
                                                <option value="NY">New York</option>
                                                <option value="NC">North Carolina</option>
                                                <option value="OH">Ohio</option>
                                                <option value="PA">Pennsylvania</option>
                                                <option value="RI">Rhode Island</option>
                                                <option value="SC">South Carolina</option>
                                                <option value="VT">Vermont</option>
                                                <option value="VA">Virginia</option>
                                                <option value="WV">West Virginia</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 mt-3">Multiple Select</label>
                                    <div class="col-md-9">
                                        <select class="select2 form-select shadow-none mt-3" multiple="multiple"
                                            style="height: 36px;width: 100%;">
                                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                                <option value="AK">Alaska</option>
                                                <option value="HI">Hawaii</option>
                                            </optgroup>
                                            <optgroup label="Pacific Time Zone">
                                                <option value="CA">California</option>
                                                <option value="NV">Nevada</option>
                                                <option value="OR">Oregon</option>
                                                <option value="WA">Washington</option>
                                            </optgroup>
                                            <optgroup label="Mountain Time Zone">
                                                <option value="AZ">Arizona</option>
                                                <option value="CO">Colorado</option>
                                                <option value="ID">Idaho</option>
                                                <option value="MT">Montana</option>
                                                <option value="NE">Nebraska</option>
                                                <option value="NM" selected>New Mexico</option>
                                                <option value="ND">North Dakota</option>
                                                <option value="UT">Utah</option>
                                                <option value="WY">Wyoming</option>
                                            </optgroup>
                                            <optgroup label="Central Time Zone">
                                                <option value="AL">Alabama</option>
                                                <option value="AR">Arkansas</option>
                                                <option value="IL">Illinois</option>
                                                <option value="IA">Iowa</option>
                                                <option value="KS">Kansas</option>
                                                <option value="KY">Kentucky</option>
                                                <option value="LA">Louisiana</option>
                                                <option value="MN">Minnesota</option>
                                                <option value="MS">Mississippi</option>
                                                <option value="MO">Missouri</option>
                                                <option value="OK">Oklahoma</option>
                                                <option value="SD" selected>South Dakota</option>
                                                <option value="TX">Texas</option>
                                                <option value="TN">Tennessee</option>
                                                <option value="WI">Wisconsin</option>
                                            </optgroup>
                                            <optgroup label="Eastern Time Zone">
                                                <option value="CT">Connecticut</option>
                                                <option value="DE">Delaware</option>
                                                <option value="FL">Florida</option>
                                                <option value="GA">Georgia</option>
                                                <option value="IN">Indiana</option>
                                                <option value="ME">Maine</option>
                                                <option value="MD">Maryland</option>
                                                <option value="MA">Massachusetts</option>
                                                <option value="MI">Michigan</option>
                                                <option value="NH">New Hampshire</option>
                                                <option value="NJ">New Jersey</option>
                                                <option value="NY">New York</option>
                                                <option value="NC">North Carolina</option>
                                                <option value="OH">Ohio</option>
                                                <option value="PA">Pennsylvania</option>
                                                <option value="RI">Rhode Island</option>
                                                <option value="SC">South Carolina</option>
                                                <option value="VT">Vermont</option>
                                                <option value="VA">Virginia</option>
                                                <option value="WV">West Virginia</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3">Radio Buttons</label>
                                    <div class="col-md-9">
                                        <div class="form-check">
                                            <input type="radio" class="form-check-input"
                                                id="customControlValidation1" name="radio-stacked" required>
                                            <label class="form-check-label mb-0" for="customControlValidation1">First
                                                One</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" class="form-check-input"
                                                id="customControlValidation2" name="radio-stacked" required>
                                            <label class="form-check-label mb-0" for="customControlValidation2">Second
                                                One</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" class="form-check-input"
                                                id="customControlValidation3" name="radio-stacked" required>
                                            <label class="form-check-label mb-0" for="customControlValidation3">Third
                                                One</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3">Checkboxes</label>
                                    <div class="col-md-9">
                                        <div class="form-check mr-sm-2">
                                            <input type="checkbox" class="form-check-input"
                                                id="customControlAutosizing1">
                                            <label class="form-check-label mb-0" for="customControlAutosizing1">First
                                                One</label>
                                        </div>
                                        <div class="form-check mr-sm-2">
                                            <input type="checkbox" class="form-check-input"
                                                id="customControlAutosizing2">
                                            <label class="form-check-label mb-0" for="customControlAutosizing2">Second
                                                One</label>
                                        </div>
                                        <div class="form-check mr-sm-2">
                                            <input type="checkbox" class="form-check-input"
                                                id="customControlAutosizing3">
                                            <label class="form-check-label mb-0" for="customControlAutosizing3">Third
                                                One</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3">File Upload</label>
                                    <div class="col-md-9">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="validatedCustomFile"
                                                required multiple>
                                            <label class="custom-file-label" for="validatedCustomFile">Choose
                                                file...</label>
                                            <div class="invalid-feedback">Example invalid custom file feedback</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3" for="disabledTextInput">Disabled input</label>
                                    <div class="col-md-9">
                                        <input type="text" id="disabledTextInput" class="form-control"
                                            placeholder="Disabled input" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="border-top">
                                <div class="card-body">
                                    <button type="button" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Forms Control</h4>
                                <div class="form-group">
                                    <label for="hue-demo">Hue</label>
                                    <input type="text" id="hue-demo" class="form-control demo" data-control="hue"
                                        value="#ff6161">
                                </div>
                                <div class="form-group">
                                    <label for="position-bottom-left">Bottom left (default)</label>
                                    <input type="text" id="position-bottom-left" class="form-control demo"
                                        data-position="bottom left" value="#0088cc">
                                </div>
                                <div class="form-group">
                                    <label for="position-top-right">Top right</label>
                                    <input type="text" id="position-top-right" class="form-control demo"
                                        data-position="top right" value="#0088cc">
                                </div>
                                <label>Datepicker</label>
                                <div class="input-group">
                                    <input type="text" class="form-control mydatepicker" placeholder="mm/dd/yyyy">
                                    <div class="input-group-append">
                                        <span class="input-group-text h-100"><i class="fa fa-calendar"></i></span>
                                    </div>
                                </div>
                                <label class="mt-3">Autoclose Datepicker</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="datepicker-autoclose"
                                        placeholder="mm/dd/yyyy">
                                    <div class="input-group-append">
                                        <span class="input-group-text h-100"><i class="fa fa-calendar"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="border-top">
                                <div class="card-body">
                                    <button type="submit" class="btn btn-success text-white">Save</button>
                                    <button type="submit" class="btn btn-primary">Reset</button>
                                    <button type="submit" class="btn btn-info">Edit</button>
                                    <button type="submit" class="btn btn-danger text-white">Cancel</button>
                                </div>
                            </div>
                        </div>

                    </div> -->
                    <!-- <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mb-0">Form Elements</h5>
                                <div class="form-group mt-3">
                                    <label>Date Mask <small class="text-muted">dd/mm/yyyy</small></label>
                                    <input type="text" class="form-control date-inputmask" id="date-mask"
                                        placeholder="Enter Date">
                                </div>
                                <div class="form-group">
                                    <label>Phone <small class="text-muted">(999) 999-9999</small></label>
                                    <input type="text" class="form-control phone-inputmask" id="phone-mask"
                                        placeholder="Enter Phone Number">
                                </div>
                                <div class="form-group">
                                    <label>International Number <small class="text-muted">+19 999 999
                                            999</small></label>
                                    <input type="text" class="form-control international-inputmask"
                                        id="international-mask" placeholder="International Phone Number">
                                </div>
                                <div class="form-group">
                                    <label>Phone / xEx <small class="text-muted">(999) 999-9999 /
                                            x999999</small></label>
                                    <input type="text" class="form-control xphone-inputmask" id="xphone-mask"
                                        placeholder="Enter Phone Number">
                                </div>
                                <div class="form-group">
                                    <label>Purchase Order <small class="text-muted">aaaa 9999-****</small></label>
                                    <input type="text" class="form-control purchase-inputmask" id="purchase-mask"
                                        placeholder="Enter Purchase Order">
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Form Elements</h5>
                                <div class="row mb-3 align-items-center">
                                    <div class="col-lg-4 col-md-12 text-end">
                                        <span>Tooltip Input</span>
                                    </div>
                                    <div class="col-lg-8 col-md-12">
                                        <input type="text" data-toggle="tooltip" title="A Tooltip for the input !"
                                            class="form-control" id="validationDefault05"
                                            placeholder="Hover For tooltip" required>
                                    </div>
                                </div>
                                <div class="row mb-3 align-items-center">
                                    <div class="col-lg-4 col-md-12 text-end">
                                        <span>Type Ahead Input</span>
                                    </div>
                                    <div class="col-lg-8 col-md-12">
                                        <input type="text" class="form-control"
                                            placeholder="Type here for auto complete.." required>
                                    </div>
                                </div>
                                <div class="row mb-3 align-items-center">
                                    <div class="col-lg-4 col-md-12 text-end">
                                        <span>Prepended Input</span>
                                    </div>
                                    <div class="col-lg-8 col-md-12">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">#</span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Prepend"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3 align-items-center">
                                    <div class="col-lg-4 col-md-12 text-end">
                                        <span>Appended Input</span>
                                    </div>
                                    <div class="col-lg-8 col-md-12">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="5.000"
                                                aria-label="Recipient 's username" aria-describedby="basic-addon2">
                                            <div class="input-group-append">
                                                <span class="input-group-text" id="basic-addon2">$</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3 align-items-center">
                                    <div class="col-lg-4 col-md-12 text-end">
                                        <span class="text-success">Input with Sccess</span>
                                    </div>
                                    <div class="col-lg-8 col-md-12">
                                        <input type="text" class="form-control is-valid" id="validationServer01">
                                        <div class="valid-feedback">
                                            Woohoo!
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3 align-items-center">
                                    <div class="col-lg-4 col-md-12 text-end">
                                        <span class="text-danger">Input with Error</span>
                                    </div>
                                    <div class="col-lg-8 col-md-12">
                                        <input type="text" class="form-control is-invalid" id="validationServer01">
                                        <div class="invalid-feedback">
                                            Please correct the error
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="row mb-3">
                                    <div class="col-lg-12">
                                        <input type="text" class="form-control" placeholder="col-md-12">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-11">
                                        <input type="text" class="form-control" placeholder="col-md-11">
                                    </div>
                                    <div class="col-lg-1 ps-0">
                                        <input type="text" class="form-control" placeholder="col-md-1">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" placeholder="col-md-10">
                                    </div>
                                    <div class="col-lg-2">
                                        <input type="text" class="form-control" placeholder="col-md-2">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" placeholder="col-md-9">
                                    </div>
                                    <div class="col-lg-3">
                                        <input type="text" class="form-control" placeholder="col-md-3">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" placeholder="col-md-8">
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="text" class="form-control" placeholder="col-md-4">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-7">
                                        <input type="text" class="form-control" placeholder="col-md-7">
                                    </div>
                                    <div class="col-lg-5">
                                        <input type="text" class="form-control" placeholder="col-md-5">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" placeholder="col-md-6">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" placeholder="col-md-6">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-5">
                                        <input type="text" class="form-control" placeholder="col-md-5">
                                    </div>
                                    <div class="col-lg-7">
                                        <input type="text" class="form-control" placeholder="col-md-7">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-2">
                                        <input type="text" class="form-control" placeholder="col-md-2">
                                    </div>
                                    <div class="col-lg-3">
                                        <input type="text" class="form-control" placeholder="col-md-3">
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="text" class="form-control" placeholder="col-md-4">
                                    </div>
                                    <div class="col-lg-2">
                                        <input type="text" class="form-control" placeholder="col-md-2">
                                    </div>
                                    <div class="col-lg-1 ps-0">
                                        <input type="text" class="form-control" placeholder="col-md-1">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- editor -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Quill Editor</h4>
                                <!-- Create the editor container -->
                                <div id="editor" style="height: 300px;">
                                    <p>Hello World!</p>
                                    <p>Some initial <strong>bold</strong> text</p>
                                    <p>
                                        <br>
                                    </p>
                                </div>
                            </div>
                        </div>
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
                All Rights Reserved by Matrix-admin. Designed and Developed by <a
                    href="https://www.wrappixel.com">WrapPixel</a>.
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
    <!-- This Page JS -->
    <script src="Style-one/assets/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
    <script src="Style-one/dist/js/pages/mask/mask.init.js"></script>
    <script src="Style-one/assets/libs/select2/dist/js/select2.full.min.js"></script>
    <script src="Style-one/assets/libs/select2/dist/js/select2.min.js"></script>
    <script src="Style-one/assets/libs/jquery-asColor/dist/jquery-asColor.min.js"></script>
    <script src="Style-one/assets/libs/jquery-asGradient/dist/jquery-asGradient.js"></script>
    <script src="Style-one/assets/libs/jquery-asColorPicker/dist/jquery-asColorPicker.min.js"></script>
    <script src="Style-one/assets/libs/jquery-minicolors/jquery.minicolors.min.js"></script>
    <script src="Style-one/assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="Style-one/assets/libs/quill/dist/quill.min.js"></script>
    <script>
        //***********************************//
        // For select 2
        //***********************************//
        $(".select2").select2();

        /*colorpicker*/
        $('.demo').each(function () {
            //
            // Dear reader, it's actually very easy to initialize MiniColors. For example:
            //
            //  $(selector).minicolors();
            //
            // The way I've done it below is just for the demo, so don't get confused
            // by it. Also, data- attributes aren't supported at this time...they're
            // only used for this demo.
            //
            $(this).minicolors({
                control: $(this).attr('data-control') || 'hue',
                position: $(this).attr('data-position') || 'bottom left',

                change: function (value, opacity) {
                    if (!value) return;
                    if (opacity) value += ', ' + opacity;
                    if (typeof console === 'object') {
                        console.log(value);
                    }
                },
                theme: 'bootstrap'
            });

        });
        /*datwpicker*/
        jQuery('.mydatepicker').datepicker();
        jQuery('#datepicker-autoclose').datepicker({
            autoclose: true,
            todayHighlight: true
        });
        var quill = new Quill('#editor', {
            theme: 'snow'
        });

    </script>
</body>

</html>