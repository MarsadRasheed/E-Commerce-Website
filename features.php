<!DOCTYPE html>
<html>
    <head>
        <title>cart list</title>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="fontawesome-free-5.15.1-web/css/all.css">
        <link rel="stylesheet" href="features.css?v=<?php echo time(); ?>">
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
            <li class="active" class="nav-item"><a class="nav-link" href="http://localhost:8080/project/features.php" style="text-decoration: none;">Features</a></li>
            <li class="nav-item"><a class="nav-link" href="http://localhost:8080/project/about.php" style="text-decoration: none;">About</a></li>
            <li class="nav-item"><a class="nav-link" href="http://localhost:8080/project/contact.php" style="text-decoration: none;">Contact</a></li>
          </ul>
        </div>
        
        <div >
          <ul id="current" class="nav justify-content-end">
            <li class="nav-item"> <a  class="nav-link" href=""><i class="fa fa-search"  ></i> </a> </li>
            <li class="nav-item"> <a  class="nav-link" href="http://localhost:8080/project/cartList.php"><i class="fa fa-cart-plus"></i> </a> </li>
            <li class="nav-item" style="padding-right: 60px;"> <a  class="nav-link" href="http://localhost:8080/project/wishList.php""><i class="fa fa-heart"  ></i> </a> </li>
          </ul>
        </div>
      </nav>
    </div>
    <?php $total = 0; ?>
    <div class="container-fluid p-5">
        <div class="row">
            <div class="col-8" >
                <div style="border: 1px solid #e6e6e6;" class="table-responsive-md">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Product</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Total</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            
                              $mySql = new mysqli('localhost','root','1234','project') or die($mySql->connect_error);
                              $table = 'cartlist';

                              if(empty($_COOKIE["CozaStore"])){
                                $user = get_current_user();
                              }else {
                                $user = $_COOKIE["CozaStore"];
                              }

                              $result = $mySql->query("Select * from $table where email = '$user'") or die($mySql->error);
                              while($data = $result->fetch_assoc()){
                            ?>
                                  <form method="POST">
                                    <tr>
                                        <td width="60%">
                                        <img class="img-responsive m-3" style="width: 15%;" src="<?php echo $data['img_dir'] ?>"/>
                                        <?php echo $data["name"]?>
                                        </td>
                                        <td class="pt-5" width="15%"> <?php echo "$ ".$data["price"]; ?></td>
                                        <td class="pt-5" width="15%"> 

                                        <input type="hidden" name="hidden_id" value="<?php echo $data["id"] ?>" >
                                        <input value="<?php echo $data["quantity"]; ?>" type="number" class="inputType" >
                                        <?php $sum = $data["price"] * $data["quantity"]; ?>
                                        <td class="pt-5" width="20%"> <?php echo "$ ".$sum; ?></td>
                                        <?php $total = $total +  $sum?>
                                        <td class="pt-5" width="15%" > <button formaction="deleteFromCartList.php" type="submit" type="button" class="btn btn-outline-danger">Delete</button> </td>
                                    </tr>
                                  </form>
                            <?php 
                                }
                            ?>
                        </tbody>
                    </table>
                </div>   
                <input style="border-radius: 24px; border:1px solid #e6e6e6" class="m-5 p-2" type="text" placeholder="Coupon Code">
                <button class="couponButton m-4"  >Apply Coupon</button>
            </div>

            <div class="col-4" style="border: 1px solid #e6e6e6;">
                <h4 class="p-4" style="font-weight: bold;">CART TOTALS</h4>
                <h5 class="pl-4 pt-2 pb-3" style="border-bottom:1px dashed #e6e6e6">subtotal:  <?php echo "$ ".$total ?> </h5> 
                <h5 class="p-4">shipping :</h4>

                <input class="ml-5" type="text" placeholder="Country">
                <input class="ml-5 mt-3" type="text" placeholder="City">
                <input class="ml-5 mt-3" type="text" placeholder="Address">
                <h5 style="border-bottom:1px dashed #e6e6e6" class="p-4">Total : <?php echo " $ ".$total ?> </h5>  
                <button class="checkOutButton m-4"  >PROCEED TO CHECK OUT</button>
            </div>
        </div>
    </div>

    <!-- End of header -->
    <?php include 'footer.php';?>
    </body>

</html>