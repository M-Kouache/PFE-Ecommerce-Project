<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="StyleSheet/color-palette.css">
    <link rel="stylesheet" href="StyleSheet/style.css">
    <link rel="stylesheet" href="StyleSheet/media.css">
    <link rel="stylesheet" href="StyleSheet/keyFrames.css">

    <?php include "helpers/functions.php"; ?> 

    <?php
            session_start();

    ?>

    <title>Ecommerce</title>
</head>
<body>

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
              <a href="cart.php?client=<?php echo isset($_SESSION["client-id"])?>" class="page__link page__link__top">
                  <img src="assets/svgs/shopping-cart.svg" alt="AddToCart-page-icon" class="meduim-icons">
                  <h5>Cart</h5>
              </a>
              <a href="<?php echo isset($_SESSION["client-name"])  ? 'Logout': 'login' ?>.php" class="page__link page__link__top">
                <h4><?php echo  isset($_SESSION["client-name"])  ? substr($_SESSION["client-name"],0,strrpos($_SESSION["client-name"],"-")).'<img src="assets/svgs/sign-out.svg" alt="signout" class="meduim-icons">' : 'Login' ?></h4>
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
            <a href="index.html" id="link_tag"   class="page__link active" >
                <img class="meduim-icons" id="bottom-nav-icon" src="assets/svgs/home.svg" alt="home-page-icon">
                <h5>home</h5>
            </a>
            <a href="cat.html" class="page__link" >
                <img class="meduim-icons" id="bottom-nav-icon" src="assets/svgs/catigories.svg" alt="catigories-page-icon">
                <h5>catigories</h5>            
            </a>
            <a href="cart.html" id="link_tag"  class="page__link" >
                <img class="meduim-icons" id="bottom-nav-icon"  src="assets/svgs/shopping-cart.svg" alt="AddToCart-page-icon">
                <h5>Cart</h5>
            </a>
            <a href="login.php" id="link_tag"  class="page__link" >
                <img class="meduim-icons" id="bottom-nav-icon" src="assets/svgs/user-acount.svg" alt="acount-page-icon">
                <h5>Acount</h5>
            </a>
        </nav>
        <div class="hero-section flex">
            <div class="hero-text-erea flex">
                <h1>Made for you from independent sellers</h1>
                <a href="#collections" class="btn">Find More</a>
            </div>
            <div class="hero-video-erea">
                <video muted loop autoplay> 
                    <source src="assets/videos/The Artisans of Morocco.mp4" type="video/mp4">
                </video>
            </div>
        </div>
      </header>

      <section class="main-section ">
          <div class="sections-header-container flex ">
                <div class="separater-line"></div>
                <h1>Most Popular</h1>
                <div class="separater-line"></div>
          </div>

          <div id="pro" class="products-container-home grid">
                <!--  -->
          </div>

        <div class="banner">
            <img class="banner-image" src="assets/images/banner-mobile.png" alt="">
        </div>

        <div class="sections-header-container flex" id="collections">
            <div class="separater-line"></div>
            <h1>See Collection</h1>
            <div class="separater-line"></div>
        </div>

        <div class="product-gallery grid">
            <div class="gl-img-container">
                <img src="assets/images/ruge-collections.jpg" alt="">
                <h1 class="gl-title">Collections Type</h1>
            </div>
            <div class="gl-img-container">
                <img src="assets/images/jewerly-collections.jpg" alt="">
                <h1 class="gl-title">Collections Type</h1>
            </div>
            <div class="gl-img-container">
                <img src="assets/images/toys-collections.jpg" alt="">
                <h1 class="gl-title">Collections Type</h1>
            </div>
            <div class="gl-img-container">
                <img src="assets/images/decor-collections.jpg" alt="">
                <h1 class="gl-title">Collections Type</h1>
            </div>
            <div class="gl-img-container">
                <img src="assets/images/ruge-collections.jpg" alt="">
                <h1 class="gl-title">Collections Type</h1>
            </div>
            <div class="gl-img-container">
                <img src="assets/images/jewerly-collections.jpg" alt="">
                <h1 class="gl-title">Collections Type</h1>
            </div>
            <div class="gl-img-container">
                <img src="assets/images/toys-collections.jpg" alt="">
                <h1 class="gl-title">Collections Type</h1>
            </div>
            <div class="gl-img-container">
                <img src="assets/images/decor-collections.jpg" alt="">
                <h1 class="gl-title">Collections Type</h1>
            </div>
        </div>
          
      </section>

      <footer class="flex direction-to-column">
          <div class="ft-description-erea ">
            <h1>What is  <span>Azzul</span> ?</h1>
            <h3>Support independent <br> creators</h3>
            <p style="margin-bottom: 2rem;">There’s no Azzul warehouse – just millions of people selling the things they love. We make the whole process easy, helping you connect directly with makers to find something extraordinary. </p>
            <a href="admin/create-acount/index.html" class="btn btn-footer">Sale on Azzul</a>
          </div>
      </footer>

      


    <script src="Scripts/script.js" defer></script>

    
    <script>
        let pro = document.getElementById("pro");
        function load_product() {

            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    pro.innerHTML = this.responseText;
                }
            }
            xmlhttp.open("GET", "helpers/product_load.php?state=true", true);
            xmlhttp.send();
            
        }
        load_product();
        // setInterval(load_product, 1000);

    </script>

</body>
</html>


<!-- https://www.youtube.com/watch?v=HnCnMOC398E -->