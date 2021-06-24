<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Product Card/Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="StyleSheet/color-palette.css">
    <link rel="stylesheet" href="StyleSheet/style.css">
    <link rel="stylesheet" href="StyleSheet/media.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <?php include "helpers/functions.php";?>

    <style>
      .img-slid{
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
      }
    </style>
  </head>
  <body>
    
    <header>

      <?php
        session_start();
        if (isset($_GET["id"])) {
          $id=$_GET["id"];

          $query_product = "SELECT * FROM product WHERE product_id = '".$id."'";
          $result_product = mysqli_query(get_connection(),$query_product);
          $product = mysqli_fetch_assoc($result_product);

          $query_image = "SELECT * FROM image WHERE product = '".$id."'";
          $result_image = mysqli_query(get_connection(),$query_image);
          $result_image1 = mysqli_query(get_connection(),$query_image);

        }else {
          header("location:index.php");
        }

        if (isset($_POST["submit"])) {
            
          if (isset($_SESSION["client-loggedin"]) && $_SESSION["client-loggedin"] === true) {
            $query_product = "INSERT  INTO cart  VALUES ('','".$_GET["id"]."','".$_SESSION["client-id"]."','".date("Y/m/d")."')";
            if (mysqli_query(get_connection(),$query_product)){
              header("location:cart.php?id=".$_GET["id"]."");
            }
          }else {
            header("location:cart.php?id=".$_GET["id"]."");
          }
        }
              
      ?>

      <nav class="top-navigation">
        <div class="top-section">
            <div class="logo-container flex justify-center">
              <a href="index.html" class="logo__item">
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
      <a href="cart.html" id="link_tag"  class="page__link" >
          <img class="meduim-icons" id="bottom-nav-icon"  src="assets/svgs/shopping-cart.svg" alt="AddToCart-page-icon">
          <h5>Cart</h5>
      </a>
      <a href="login.html" id="link_tag"  class="page__link" >
          <img class="meduim-icons" id="bottom-nav-icon" src="assets/svgs/user-acount.svg" alt="acount-page-icon">
          <h5>Acount</h5>
      </a>
    </nav>
  </header>


    <div class = "card-wrapper custom-margin">
      <div class = "card">
        <!-- card left -->
        <?php $img_slid = "";?>
        <div class = "product-imgs">
          <div class = "img-display">
            <div class = "img-showcase">
            <?php while ($image = mysqli_fetch_assoc($result_image)){?>
              <img src = "lib/images/<?php echo $image["name"]; ?>" alt = "shoe image">
            <?php } ?>  
            </div>
          </div>
          <div class = "img-select">
          <?php $index = 1;
          while ($image1 = mysqli_fetch_assoc($result_image1)){?>
            <div class = "img-item">
              <a href = "#" data-id = "<?php echo $index; ?>">
                <img class="img-slid" src = "lib/images/<?php echo $image1["name"]; ?>" alt = "shoe image">
              </a>
            </div>
            <?php $index++; } ?>  
          </div>
        </div>
        <!-- card right -->
        <div class = "product-content">
          <h2 class = "product-title"><?php echo $product["name"]; ?></h2>
          <a href = "#" class = "product-link">visit nike store</a>
          <div class = "product-rating">
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star-half-alt"></i>
            <span>4.7(21)</span>
          </div>

          <div class = "product-price-detail">
            <p class = "new-price">Price: <span><?php echo $product["price"]; ?> MAD</span></p>
          </div>

          <div class = "product-detail">
            <h2>about this item: </h2>
            <p><?php echo $product["description"]; ?></p>
            <ul>
              <li>Available: <span> <?php echo $product["instock"]?> in stock</span></li>
              <li>Category: <span><?php echo $product["product_type"]; ?></span></li>
              <li>Shipping Area: <span>All over Morocco</span></li>
            </ul>
          </div>
          <form action="#" method="post">
            <div class = "purchase-info">
              <input type="submit" name="submit" value="Add to Cart"  class = "btn" style="background: var(--primary); color: var(--secodary);">

            </div>
          </form>

          <div class = "social-links">
            <p>Share At: </p>
            <a href = "#">
              <i class = "fab fa-facebook-f"></i>
            </a>
            <a href = "#">
              <i class = "fab fa-twitter"></i>
            </a>
            <a href = "#">
              <i class = "fab fa-instagram"></i>
            </a>
            <a href = "#">
              <i class = "fab fa-whatsapp"></i>
            </a>
            <a href = "#">
              <i class = "fab fa-pinterest"></i>
            </a>
          </div>
        </div>
      </div>
    </div>

  <section class="main-section" >
      <div class="sections-header-container flex ">
            <div class="separater-line"></div>
            <h1>More To See</h1>
            <div class="separater-line"></div>
      </div>

      <div class="products-container-productdetail grid">
            <a href="product-detail.html" class="product-card">
                <div class="product-image-container">
                    <img src="assets/images/gray-rug.jpg" alt="product-image">
                </div>
                <p class="product-name">Lorem ipsum </p>
                <h3 class="product-price">500.67 $</h3>
            </a>
            <a href="product-detail.html" class="product-card">
                <div class="product-image-container">
                    <img src="assets/images/notbook.jpg" alt="product-image">
                </div>
                <p class="product-name">product name</p>
                <h3 class="product-price">500.67 $</h3>
            </a>                
            <a href="product-detail.html" class="product-card ">
                <div class="product-image-container">
                    <img src="assets/images/leader-notbook.jpg" alt="product-image">
                </div>
                <p class="product-name">product name</p>
                <h3 class="product-price">500.67 $</h3>
            </a>                
            <a href="product-detail.html" class="product-card ">
                <div class="product-image-container">
                    <img src="assets/images/mountainWood.jpg" alt="product-image">
                </div>
                <p class="product-name">product name</p>
                <h3 class="product-price">500.67 $</h3>
            </a>                
            <a href="product-detail.html" class="product-card ">
                <div class="product-image-container">
                    <img src="assets/images/rustic.jpg" alt="product-image">
                </div>
                <p class="product-name">product name</p>
                <h3 class="product-price">500.67 $</h3>
            </a>
            <a href="product-detail.html" class="product-card ">
                <div class="product-image-container ">
                    <img src="assets/images/wooden-cat.jpg" alt="product-image">
                </div>
                <p class="product-name">product name</p>
                <h3 class="product-price">500.67 $</h3>
            </a>                
            <a href="product-detail.html" class="product-card ">
                <div class="product-image-container">
                    <img src="assets/images/broom.jpg" alt="product-image">
                </div>
                <p class="product-name">product name</p>
                <h3 class="product-price">500.67 $</h3>
            </a>
            <a href="product-detail.html" class="product-card ">
                <div class="product-image-container ">
                    <img src="assets/images/clothes-holder.jpg" alt="product-image">
                </div>
                <p class="product-name">product name</p>
                <h3 class="product-price">500.67 $</h3>
            </a>
      </div>
    </section>
    
    <script src="Scripts/script.js"></script>
  </body>
</html>