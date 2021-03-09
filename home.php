<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.1-web/css/all.css">
    <link rel="stylesheet" href="home.css?v=<?php echo time(); ?>">

    <title>Home</title>

  </head>

  <body>
<!--     Start of header -->

    <header>
      <div id="topHeader">
        <div class="container-fluid">
          <div class="row">
            <div class="col p-2 top-left-tag" style="margin-left: 85px;" style="padding-left: 15px;" >
              Free shipping for standard order over $100
            </div>
            <div class="col-auto p-2 "  style="margin-right: 75px;" style="padding-right: 15px;">
              <a href="" class="top-right-tags" style="text-decoration: none;"  >Help & FAQs</a>
              <a id="account" href="http://localhost:8080/project/login.php" class="top-right-tags" style="text-decoration: none;">My Account</a>
              <a href="" class="top-right-tags" style="text-decoration: none;">EN</a>
              <a href="" class="top-right-tags" style="text-decoration: none;" style="border-right: 1px solid  rgba(255,255,255,.3);
              ">USD</a>
            </div>
          </div>
        </div>
      </div>
    </header>


    <div class="container-fluid main" >

      <nav class="navbar navbar-light bg-light navbar-expand-lg "> 

        <a class="navbar-brand Logo"  href="http://localhost:8080/project/home.php"><img src="images/icons/logo-01.png" alt="Image Logo" ></a>
        
        <button data-toggle="collapse" data-target="#navbarToggler" type="button"
        class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>

        <div class="collapse navbar-collapse" id="navbarToggler"> 
          <ul class="navbar-nav">
            <li class="active" class="nav-item"><a class="nav-link" href="http://localhost:8080/project/home.php" style="text-decoration: none; padding-left: 60px;">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="http://localhost:8080/project/store.php" style="text-decoration: none;">Shop</a></li>
            <li class="nav-item"><a class="nav-link" href="http://localhost:8080/project/features.php" style="text-decoration: none;">Features</a></li>
            <li class="nav-item"><a class="nav-link" href="http://localhost:8080/project/about.php" style="text-decoration: none;">About</a></li>
            <li class="nav-item"><a class="nav-link" href="http://localhost:8080/project/contact.php" style="text-decoration: none;">Contact</a></li>
          </ul>
        </div>
        
        <div >
          <ul class="nav justify-content-end">
            <li class="nav-item"> <a  class="nav-link" href=""><i class="fa fa-search"></i> </a> </li>
            <li class="nav-item"> <a  class="nav-link" href="http://localhost:8080/project/cartList.php"><i class="fa fa-cart-plus"></i> </a> </li>
            <li class="nav-item" style="padding-right: 60px;"> <a  class="nav-link" href="http://localhost:8080/project/wishList.php"><i class="fa fa-heart"></i> </a> </li>
          </ul>
        </div>

      </nav>

    </div>
  
    <div class="header">
      <h3 class="text1">New-Season Collection</h3>
      <h1 class="text2">Jackets & Coats</h1>
      <span class="shopNowButton" style="padding-left: 6% ;"  > <a href="store.php"><button class="ShopNowButton" class="btn btn-lg" >SHOP NOW  </button> </a></span>

    </div>

    <!-- END OF HEADER -->

    <!-- Start of model section One -->


    <section>
    <form  method="POST">
      <div class="container">
        <div class="row">

          <div  class="col banner1 m-2">
            <a href="store.php">
              <button type="submit" formaction="store.php" name="women" style="background: none;border:none" value="action1"><img class="img-fluid" src="images/banner-01.jpg" alt="action 1" /></button>
              <div  class="top-left-banner1">Women</div>
              <div class="top-left-sec-banner1">Sprig 2019</div>
              <div class="bottom-left-banner1">SHOP NOW</div>
              <div class="bottom-left-sec-banner1">___________</div>
            </a> 
          </div>

          <div class="col banner2 m-2">
            <a  href="store.php">
              <button type="submit" formaction="store.php" name="men" style="background: none;border:none" value="action1"><img class="img-fluid" src="images/banner-02.jpg" alt="action 1" /></button>
              <div class="top-left-banner2">Men</div>
              <div class="top-left-sec-banner2">Sprig 2019</div>
              <div class="bottom-left-banner2">SHOP NOW</div>
              <div class="bottom-left-sec-banner2">___________</div>
            </a>
          </div>

          <div class="col banner3 m-2">
            <a   href="store.php">
              <button type="submit" formaction="store.php" name="accessories" style="background: none;border:none" value="action1"><img class="img-fluid" src="images/banner-03.jpg" alt="action 1" /></button>
              <div class="top-left-banner3">Accessories</div>
              <div class="top-left-sec-banner3">Trend</div>
              <div class="bottom-left-banner3">SHOP NOW</div>
              <div class="bottom-left-sec-banner3">___________</div>
            </a>
          </div>

        </div>
      </form>
      </div>
    </section>

    <!-- End of model section One -->


    <!-- Start of model section(store) Two -->

    <div class="container">
      <h1 style="padding-top: 80px; font-family:Verdana, Geneva, Tahoma, sans-serif; font-weight:bold" >PRODUCT OVERVIEW</h1>
    </div>
        

    <?php include 'products.php';?>

    <!-- End of model section(store) Two -->

    <!-- Start of footer Section -->

    <?php include 'footer.php';?>

    <!-- End of footer Section -->
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="Bootstrap/js/jquery-3.2.1.slim.min.js"></script>
    <script src="Bootstrap/js/popper.min.js"></script>
    <script src="Bootstrap/js/bootstrap.min.js"></script>

  </body>
</html>