<!DOCTYPE html>
<html>
    <head>
        <title>Detail</title>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="fontawesome-free-5.15.1-web/css/all.css">
        <link rel="stylesheet" href="detail.css?v=<?php echo time(); ?>">
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="Bootstrap/js/jquery-3.2.1.slim.min.js"></script>
        <script src="Bootstrap/js/popper.min.js"></script>
        <script src="Bootstrap/js/bootstrap.min.js"></script>

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
              <a href="http://localhost:8080/project/login.php" class="top-right-tags" style="text-decoration: none;">My Account</a>
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
            <li class="nav-item"><a class="nav-link" href="http://localhost:8080/project/home.php" style="text-decoration: none; padding-left: 60px;">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="http://localhost:8080/project/store.php" style="text-decoration: none;">Shop</a></li>
            <li class="nav-item"><a class="nav-link" href="http://localhost:8080/project/features.php" style="text-decoration: none;">Features</a></li>
            <li class="nav-item"><a class="nav-link" href="http://localhost:8080/project/about.php" style="text-decoration: none;">About</a></li>
            <li class="nav-item"><a class="nav-link" href="http://localhost:8080/project/contact.php" style="text-decoration: none;">Contact</a></li>
          </ul>
        </div>
        
        <div >
          <ul class="nav justify-content-end">
            <li class="nav-item"> <a  class="nav-link" href=""><i class="fa fa-search"  ></i> </a> </li>
            <li class="nav-item"> <a  class="nav-link" href="http://localhost:8080/project/cartList.php"><i class="fa fa-cart-plus"></i> </a> </li>
            <li class="nav-item" style="padding-right: 60px;"> <a  class="nav-link" href="http://localhost:8080/project/wishList.php"><i class="fa fa-heart"  ></i> </a> </li>
          </ul>
        </div>

      </nav>

    </div>

    <!-- End of header -->


    <?php
        $name = $_POST["hidden_name"];
        $price = $_POST["hidden_price"];
        $image = $_POST["hidden_image"];
        $description = $_POST["hidden_description"];
    ?>

    <form method="POST">
    <div class="container pl-5 pr-5" style="background-color: white; padding-top: 100px; padding-bottom:100px">
            <div class="row">
                <div class="col-6">
                    <img id="p1" width="90%" height="100%" src=" <?php echo $image?>"/>              
                </div>
                <div class="col-6">
                    <h4> <?php echo $name; ?> </h4>
                    <h5 class="pt-2"> <?php echo '$'.$price;?> </h4>
                    <p class="pt-3"> <?php echo $description?> </p>
                    
                  <div class="input-group m-3 pt-3">
                    <div class="input-group-prepend">
                      <label class="input-group-text" for="inputGroupSelect01">Choose Size</label>
                    </div>
                    <select class="custom-select" id="inputGroupSelect01">
                      <option selected value="1">SMALL</option>
                      <option value="2">MEDIUM</option>
                      <option value="3">LARGE</option>
                      <option value="4">EXTRA LARGE</option>
                    </select>
                  </div>

                  <div class="input-group m-3 pt-3 pb-3">
                    <div class="input-group-prepend">
                      <label class="input-group-text" for="inputGroupSelect01">Choose Color</label>
                    </div>
                    <select class="custom-select" id="inputGroupSelect01">
                      <option selected value="1">RED</option>
                      <option value="2">BLUE</option>
                      <option value="3">WHITE</option>
                      <option value="4">GREY</option>
                    </select>
                  </div>

                  <div class="input-group m-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1">Items to add</span>
                    </div>
                    <input value="1" name="quantity" type="number" class="inputType">
                  </div>

                  <input type="hidden" name="hidden_name" value="<?php echo $name ?>" >
                  <input type="hidden" name="hidden_price" value="<?php echo $price ?>" >
                  <input id="hidden_image" type="hidden" name="hidden_image" value="<?php echo $image ?>">
                  
                  <button formaction="AddToCart.php" class="addToCartButton m-3" >ADD TO CART</button>
                  <div class="m-3 nav justify-content-start">
                      <a class="p-2 aTags" href=""><i class="fa fa-heart"></i></a>
                      <a class="p-2 aTags" href=""><i class="fab fa-facebook-f"></i></a>
                      <a class="p-2 aTags" href=""><i class="fab fa-instagram"></i></a>
                      <a class="p-2 aTags" href=""><i class="fab fa-twitter"></i></a>
                  </div>
                </div>
            </div>
        </div>
        </form>

    <?php include 'footer.php';?>
    </body>

</html>