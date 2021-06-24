<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="StyleSheet/style.css">
    <link rel="stylesheet" href="StyleSheet/media.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="StyleSheet/color-palette.css">
    <title>Cart</title>


  <style>

      body{
        font-family: var(--font-family-sans-serif);
      }

      header , section{
        overflow: hidden;
      }

      section{
        margin-top: 5rem;
      }

      a{
        color: inherit;
        text-decoration: inherit;
        font-size: inherit;
      }

      
      a:hover{
        color: inherit;
        text-decoration: inherit;
      }
      
      h5{
        font-size: inherit;
        margin-bottom: inherit;
        font-weight: inherit;
        line-height: inherit;
      }
      
      ul{
        margin:0;
      }

    /* this area contains code to override bootstrap classes */
      .search-container {
        margin: 0 1.5rem;
      }

      input {
        font-family: inherit;
        font-size: 0.7rem;
      }

      input[name="search"] {
        width: 100%;
        height: 100%;
        padding: 0.5rem;
        outline: none;
        border: 0.1rem var(--primary) solid;
        border-radius: 1.5rem 0 0 1.5rem;
        background: var(--light-gray);
      }

      input[name="search"]:focus {
        border: 0.1rem var(--primary-hover) solid;
      }

      input[name="search-submit"] {
        padding: 0.5rem;
        background: var(--primary);
        border-radius: 0 1.5rem 1.5rem 0;
        border: 0.1rem var(--primary) solid;
        cursor: pointer;
      }

      input[name="search-submit"]:hover,
      input[name="search-submit"]:focus {
        border: 0.1rem var(--primary-hover) solid;
      }
      
      /* end of area *-* */

      @media (min-width: 1025px) {
        .h-custom {
          height: 100% !important;
        }
      }

      .card-registration .select-input.form-control[readonly]:not([disabled]) {
        font-size: 1rem;
        line-height: 2.15;
        padding-left: .75em;
        padding-right: .75em;
      }

      .card-registration .select-arrow {
        top: 13px;
      }

      .bg-grey {
        background-color: #eae8e8;
      }

      @media (min-width: 992px) {
        .card-registration-2 .bg-grey {
          border-top-right-radius: 16px;
          border-bottom-right-radius: 16px;
        }
        .container{
          max-width: 100%;
          padding: 0;
        }
        .col-md-2{
          padding-right: 0;
        }
      }

      @media (max-width: 991px) {
        .card-registration-2 .bg-grey {
          border-bottom-left-radius: 16px;
          border-bottom-right-radius: 16px;
        }

        /* this class is responsabale for aligning products elements (image , name ...) 
        and adding top-margin in the cart page */
        .text-align-cart{
          text-align: center;
          margin-top: .8rem;
        }
      }
  </style>
   <?php include "helpers/functions.php";?>
</head>
<body>

      <?php 
         session_start();
        // load products image thumbnail
        function load_thumbnail($id){

          $sql = "SELECT name FROM image WHERE product = '".$id."' AND thumbnail = 1";
          $imgs= mysqli_query(get_connection(),$sql);
          return $img["name"] = mysqli_fetch_assoc($imgs);
    
        }

        $image = "";
        $total = 0;

      ?>

    <header>
      <nav class="top-navigation">
          <div class="top-section">
              <div class="logo-container flex justify-center">
                <a href="#" class="logo__item">
                    AzuuL
                </a>
            </div>
            <form class="search-container flex" action="#" method="POST">
                <input type="text" name="search" placeholder="search for something"/>
                <input  type="submit" class="search__icon" name="search-submit" value="Search"/>
            </form>
            <a href="#" class="page__link page__link__top">
                <img src="assets/svgs/shopping-cart.svg" alt="AddToCart-page-icon" class="meduim-icons">
                <h5>Cart</h5>
            </a>
            <a href="login.html" class="page__link page__link__top">
                <img src="assets/svgs/user-acount.svg" alt="acount-page-icon" class="meduim-icons">
                <h5>Acount</h5>
            </a>
          </div>
          <div class="top-nav-catigories flex">
            <ul>
              <il><a href="cat.html" class="page__link" >Men's Clothing</a></il>
              <il><a href="cat.html" class="page__link">Men's Clothing</a></il>
              <il><a href="cat.html" class="page__link">Men's Clothing</a></il>
              <il><a href="cat.html" class="page__link">Men's Clothing</a></il>
              <il><a href="cat.html" class="page__link">Men's Clothing</a></il>
            </ul>
          </div>
      </nav>
      <nav class="bottom-navigation flex">
        <a href="index.html" id="link_tag"   class="page__link " >
            <img class="meduim-icons" id="bottom-nav-icon" src="assets/svgs/home.svg" alt="home-page-icon">
            <h5>home</h5>
        </a>
        <a href="cat.html" class="page__link " >
            <img class="meduim-icons" id="bottom-nav-icon" src="assets/svgs/catigories.svg" alt="catigories-page-icon">
            <h5>catigories</h5>            
        </a>
        <a href="cart.html" id="link_tag"  class="page__link active" >
            <img class="meduim-icons" id="bottom-nav-icon"  src="assets/svgs/shopping-cart.svg" alt="AddToCart-page-icon">
            <h5>Cart</h5>
        </a>
        <a href="login.html" id="link_tag"  class="page__link" >
            <img class="meduim-icons" id="bottom-nav-icon" src="assets/svgs/user-acount.svg" alt="acount-page-icon">
            <h5>Acount</h5>
        </a>
    </nav>
    </header>
    <section class="h-100 h-custom " style="background-color: var(--white);">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12">
              <div class="card card-registration card-registration-2">
                <div class="card-body p-0">
                  <div class="row g-0">
                    <div class="col-lg-8">
                      <div class="p-5">
                        <div class="d-flex justify-content-between align-items-center">
                          <h3 class="fw-bold mb-0 text-black">Shopping Cart </h3>
                        </div>
                        <hr class="my-4">
                        
                        <?php
                          if (! isset($_SESSION["client-loggedin"])) {
                            if (isset($_GET["id"])) {
                              $result_product = mysqli_query(get_connection(),"SELECT * FROM product WHERE product_id= '".$_GET["id"]."'");
                              $image=load_thumbnail($_GET["id"]);
                    
                              while ($product = mysqli_fetch_assoc($result_product)){
                                $total += $product["price"];
                                echo "<div class='row mb-4 d-flex justify-content-between align-items-center'>";
                                echo "<div class='col-md-2 col-lg-2 col-xl-2'>";
                                echo "<img
                                      src='lib/images/". $image["name"]."'
                                  class='img-fluid rounded-3' alt='Cotton T-shirt'>";
                                  echo "</div>";
                                  echo "<div class='col-md-3 col-lg-3 col-xl-3 text-align-cart'>";
                                  echo  "<h6 class='text-muted'>". $product["product_type"]."</h6>";
                                  echo  "<h6 class='text-black mb-0'>". $product["name"] ."</h6>";
                                  echo "</div>";
                                echo "<div class='col-md-3 col-lg-2 col-xl-2 offset-lg-1 text-align-cart'>";
                                echo  "<h6 class='mb-0'>". $product["price"] ." MAD</h6>";
                                echo  "</div>";
                                echo  "<div class='col-md-1 col-lg-1 col-xl-1 text-end text-align-cart'>";
                                echo    "<a href='del_pro_cart.php' class='text-muted'><i class='fas fa-times'></i></a>";
                                echo  "</div>";
                                echo "</div>";
                              }
                              
                            }else {
                              echo "No products yet go back to shop";
                            }
                          }elseif (isset($_SESSION["client-loggedin"]) && $_SESSION["client-loggedin"] === true) {
                              $result_product = mysqli_query(get_connection(),"SELECT product FROM cart WHERE client= '".$_SESSION["client-id"]."'");
                                                            
                              if (mysqli_num_rows($result_product) >= 1) {
                                while ($product_id = mysqli_fetch_assoc($result_product)) {
                                  $products = mysqli_query(get_connection(),"SELECT * FROM product WHERE product_id= '".$product_id["product"]."'");
                                  $image=load_thumbnail($product_id["product"]);
                                  while ($product = mysqli_fetch_assoc($products)){
                                    $total += $product["price"];
                                      echo "<div class='row mb-4 d-flex justify-content-between align-items-center'>";
                                      echo "<div class='col-md-2 col-lg-2 col-xl-2'>";
                                      echo "<img
                                            src='lib/images/". $image["name"]."'
                                        class='img-fluid rounded-3' alt='Cotton T-shirt'>";
                                        echo "</div>";
                                        echo "<div class='col-md-3 col-lg-3 col-xl-3 text-align-cart'>";
                                        echo  "<h6 class='text-muted'>". $product["product_type"]."</h6>";
                                        echo  "<h6 class='text-black mb-0'>". $product["name"] ."</h6>";
                                        echo "</div>";
                                      echo "<div class='col-md-3 col-lg-2 col-xl-2 offset-lg-1 text-align-cart'>";
                                      echo  "<h6 class='mb-0'>". $product["price"] ." MAD</h6>";
                                      echo  "</div>";
                                      echo  "<div class='col-md-1 col-lg-1 col-xl-1 text-end text-align-cart'>";
                                      echo    "<a href='del_pro_cart.php?id=".$product_id["product"]."' class='text-muted'><i class='fas fa-times'></i></a>";
                                      echo  "</div>";
                                      echo "</div>";
                                  }
                                }  
                              }else {
                                echo "No products yet go back to shop";
                              }
                            
                          }else {
                            echo "No products yet go back to shop";
                          }
                                     
                        ?>
                        
                        <hr class="my-4">
      
                        <div class="pt-5">
                          <h6 class="mb-0"><a href="#!" class="text-body"><i
                                class="fas fa-long-arrow-alt-left me-2"></i> Back to shop</a></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 bg-grey">
                      <div class="p-5">
                        <h3 class="fw-bold mb-5 mt-2 pt-1">Summary</h3>
                        <hr class="my-4">
                        <div class="d-flex justify-content-between mb-4">
                          <h5 class="text-uppercase">Total PRICE</h5>
                          <h5><?php echo "MAD " . $total; ?></h5>
                        </div>
                        <hr class="my-4">
                        
                        <div class="col-md-12 col-lg-12">
                          <h4 class="mb-3">Billing address</h4>
                          <form action="confirm_tran.php" method="POST" class="needs-validation" novalidate>
                            <div class="row g-3">
                              <div class="col-sm-6">
                                <label for="firstName" class="form-label">First name</label>
                                <input type="text" name="firstname" class="form-control" id="firstName" placeholder="" value="" required>
                                <div class="invalid-feedback">
                                  Valid first name is required.
                                </div>
                              </div>

                              <div class="col-sm-6">
                                <label for="lastName" class="form-label">Last name</label>
                                <input type="text" name="lastname" class="form-control" id="lastName" placeholder="" value="" required>
                                <div class="invalid-feedback">
                                  Valid last name is required.
                                </div>
                              </div>

                              <div class="col-12">
                                <label for="email" class="form-label">Email </label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="you@example.com" required>
                                <div class="invalid-feedback">
                                  Please enter a valid email address for shipping updates.
                                </div>
                              </div>

                              <div class="col-12">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" name="address" class="form-control" id="address" placeholder="1234 Main St" required>
                                <div class="invalid-feedback">
                                  Please enter your shipping address.
                                </div>
                              </div>


                              <div class="col-md-6">
                                <label for="state" class="form-label">Region</label>
                                <input type="text" name="region" class="form-control" id="state" placeholder="Guelmim" required>
                                <div class="invalid-feedback">
                                  Please provide a valid state.
                                </div>
                              </div>

                              <div class="col-md-6">
                                <label for="zip" class="form-label">Zip</label>
                                <input type="text" name="zip" class="form-control" id="zip" placeholder="" required>
                                <div class="invalid-feedback">
                                  Zip code required.
                                </div>
                              </div>
                            </div>
                            <input  type="text" name="get_id" value='<?php echo $_GET["id"]; ?>' style="visibility:hidden;" >
                            <input id="confirm_transaction" type="submit" name="submit" value="" >
                          
                          </form>
                    </div>
      
                        <!-- <h5 class="text-uppercase mb-3">Shipping</h5>
      
                        <div class="mb-4 pb-2">
                          <select class="select btn-secondary dropdown-item-text" style="color: white;">
                            <option value="1">Standard-Delivery- €5.00</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                            <option value="4">Four</option>
                          </select>
                        </div>
      
                        <h5 class="text-uppercase mb-3">Give code</h5>
      
                        <div class="mb-5">
                          <div class="form-outline">
                            <input type="text" id="form3Examplea2" class="form-control " />
                            <label class="form-label" for="form3Examplea2">Enter your code</label>
                          </div>
                        </div> -->
      
                        <hr class="my-4">
                        <div id="smart-button-container">
                            <div style="text-align: center;">
                              <div id="paypal-button-container"></div>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>

    

    <footer class="flex direction-to-column">
      <div class="ft-description-erea ">
        <h1>What is  <span>Azzul</span> ?</h1>
        <h3>Support independent <br> creators</h3>
        <p>There’s no Azzul warehouse – just millions of people selling the things they love. We make the whole process easy, helping you connect directly with makers to find something extraordinary. </p>
      </div>
    </footer>

    <script src="https://www.paypal.com/sdk/js?client-id=AeHKfjtbotnt6yiYBNQmROy4Bkjt5FSbjLm2kiZiv0ibY8ORvOhkQUXGCcnAJScpN8pknXC50_FlIuqd&currency=USD" data-sdk-integration-source="button-factory"></script>
  <script>
    let confirmation = document.getElementById("confirm_transaction");
    function initPayPalButton() {
      paypal.Buttons({
        style: {
          shape: 'rect',
          color: 'gold',
          layout: 'vertical',
          label: 'buynow',
          
        },

        createOrder: function(data, actions) {
          return actions.order.create({
            purchase_units: [{"amount":{"currency_code":"USD","value":2 * 0.11}}]
          });
        },

        onApprove: function(data, actions) {
          return actions.order.capture().then(function(details) {
            confirmation.value = 'details.id';
            confirmation.click();
          });
        },

        onError: function(err) {
          console.log(err);
        }
      }).render('#paypal-button-container');
    }
    initPayPalButton();
  </script>



    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" integrity="sha512-RXf+QSDCUQs5uwRKaDoXt55jygZZm2V++WUZduaU/Ui/9EGp3f/2KZVahFZBKGH0s774sd3HmrhUy+SgOFQLVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>