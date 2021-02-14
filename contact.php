<!DOCTYPE html>
<html>
    <head>
        <title>Contact </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="fontawesome-free-5.15.1-web/css/all.css">
        <link rel="stylesheet" href="contact.css?v=<?php echo time(); ?>">
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
            <li class="active" class="nav-item"><a class="nav-link" href="http://localhost:8080/project/contact.php" style="text-decoration: none;">Contact</a></li>
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

    <!-- end of header -->
    

    <section class="headerContact">
        <h2 class="h2Header">Contact</h2>
    </section>

    <div style="padding-top: 100px; padding-bottom: 100px" class="container">
        <div class="row">
            <div class="col-md-6 p-5">
                <form method="POST">
                    <h4 style="text-align: center;" class="pb-4">Send Us A Message</h4>
                    <div class="mailDiv">
                        <input class="mailInput" type="text" name="email" placeholder="Your email address">
                        <img class="emailImage" src="images/icons/icon-email.png" alt="ICON">
                    </div>

                    <div style="border: 1px solid #e6e6e6; border-radius:2px">
                        <textarea class="textMessage p-3" name="message" placeholder="How can we help ?"></textarea>
                    </div>

                    <button formaction="AddToContact.php" type="submit" class="submitButton">SUBMIT</button>
                </form>
            </div>
            
            <div class="col-md-6 p-5">
                <div style="padding-top:80px;padding-left:80px">
                    <i style="display:inline" class="fas fa-map-marker-alt"></i>
                    <h5 style="display: inline;">&emsp;Address</h5>
                    <p class="pl-4 pt-3">Computer Science Department,University of Engineering and Teachmology,Lahore</p>
                </div>

                <div style="padding-left:80px;" class="pt-4">
                    <i style="display:inline" class="fas fa-phone-alt"></i>
                    <h5 style="display: inline;">&emsp;Lets Talk</h5>
                    <p style="color:blue" class="pl-4 pt-3">+923100000111</p>
                </div>

                <div style="padding-left:80px;" class="pt-4">
                    <i style="display:inline" class="far fa-envelope"></i>
                    <h5 style="display: inline;">&emsp;Sale Support</h5>
                    <p style="color:blue" class="pl-4 pt-3">contact@example.com</p>
                </div>

            </div>
        </div>
    </div>

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3398.9678697331165!2d74
        .35412961453248!3d31.57992895135966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13
        .1!3m3!1m2!1s0x39191b273d6ed0c1%3A0x4dcac84ea2200944!2sUniversity%20of%20
        Engineering%20%26%20Technology%2C%20Lahore!5e0!3m2!1sen!2s!4v1603972648174!5m2!1sen!2s" width="100%" height="350px" frameborder="0"></iframe>

    <?php include 'footer.php'?>

    </body>

</html>