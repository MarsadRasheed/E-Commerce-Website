<?php 
  if(isset($_POST["Women"])){
    $query = "Select * from products where category = 'women'";
    $result = filterQuery($query);

  } else if(isset($_POST["Men"])){
    $query = "Select * from products where category = 'men'";
    $result = filterQuery($query);
    
  } else if(isset($_POST["Watches"])){
    $query = "Select * from products where category = 'watches'";
    $result = filterQuery($query);      

  } else if(isset($_POST["Shoes"])){
    $query = "Select * from products where category = 'shoes'";
    $result = filterQuery($query);      

  } else if(isset($_POST["Bag"])){
    $query = "Select * from products where category = 'bag'";
    $result = filterQuery($query);     

  } if(isset($_POST["women"])){
    $query = "Select * from products where category = 'women'";
    $result = filterQuery($query);

  } else if(isset($_POST["men"])){
    $query = "Select * from products where category = 'men'";
    $result = filterQuery($query);

  } else if(isset($_POST["accessories"])){
    $query = "Select * from products where category <> 'men' && category <> 'women'";
    $result = filterQuery($query);

  } else{
    $query = "Select * from products";
    $result = filterQuery($query);
  }

  function filterQuery($query){
    $mySql = new mysqli('localhost','root','1234','project') or die($mySql->connect_error);
    $result = $mySql->query($query) or die($mySql->error);
    return $result;
  }

?>


<!DOCTYPE html>
<html>
    <head>
        <title>Shop</title>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="fontawesome-free-5.15.1-web/css/all.css">
        <link rel="stylesheet" href="products.css?v=<?php echo time(); ?>">
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="Bootstrap/js/jquery-3.2.1.slim.min.js"></script>
        <script src="Bootstrap/js/popper.min.js"></script>
        <script src="Bootstrap/js/bootstrap.min.js"></script>

    </head>
    
    <body>
    <!--     Start of header -->

        <?php
            $imageUrl = "";
            $name = "";
            $price = 0;
            $description = "";

        ?>

        <form action="store.php" method="POST">
        </div>
            <div style="padding-top: 40px;" class="container" style="text-align: center;" class="pt-5" >
                <button id="all" class="btn btn-primary filterButton active">All Products</button>
                <button type="submit" name="Women" id="women" class="btn btn-primary filterButton">Women</button>
                <button type="submit" name="Men" id="men" class="btn btn-primary filterButton">Men</button>
                <button type="submit" name="Bag" id="bag" class="btn btn-primary filterButton">Bag</button>
                <button type="submit" name="Shoes" id="shoes" class="btn btn-primary filterButton">Shoes</button>
                <button type="submit" name="Watches" id="watches" class="btn btn-primary filterButton">Watches</button>
            </div>
        </form>

            <div style="padding-top: 40px;" class="container">
                <div class="row">
                    <?php

                        while($data = $result->fetch_assoc()){
                    ?>
                    <div class="col-md-3 line">
                        <form method="POST">
                            <div class="imgCon">
                                <img class="img-responsive" src="<?php echo $data["imgs"]; ?>"/>
                                <button type="submit" formaction="detail.php" id="quickView" class="quickView">Quick View</button>
                            </div>
                            <div style="padding-top: 12px;"><?php echo $data["name"]; ?><button class="wishListButton" formaction="AddToWishList.php" type="submit">
                                <a href=""><i class="fa fa-heart wishButton"></i></a> </button>
                            </div>
                            <div name="price" style="padding-top: 4px;"> <?php echo "$".$data["price"]; ?></div>
                            <input type="hidden" name="hidden_name" value="<?php echo $data["name"]; ?>" >
                            <input type="hidden" name="hidden_price" value="<?php echo $data["price"]; ?>" >
                            <input type="hidden" name="hidden_description" value="<?php echo $data["description"]; ?>" >
                            <input id="hidden_image" type="hidden" name="hidden_image" value="<?php echo $data["imgs"]; ?>">
                        </form>
                    </div>
                    <?php
                        }
                    ?>
                </div>

                <div style="padding-top: 80px; padding-bottom: 120px" class="row justify-content-center">
                    <a href=""></a><button class="loadButton" class="btn btn-lg" >LOAD MORE</button>
                </div>

            </div>

        <?php
        if(isset($_POST["Women"])){
        ?>
        <script>
            $(function(){
                $('#women').addClass('active');
                $('#men').removeClass('active');
                $('#bag').removeClass('active');
                $('#shoes').removeClass('active');
                $('#watches').removeClass('active');
                $('#all').removeClass('active');
            });
        </script>  
        <?php
        }
        else if(isset($_POST["Men"])){
            ?>
        <script>
            $(function(){
                $('#women').removeClass('active');
                $('#men').addClass('active');
                $('#bag').removeClass('active');
                $('#shoes').removeClass('active');
                $('#watches').removeClass('active');
                $('#all').removeClass('active');
            });
        </script>  
        <?php
        }else if(isset($_POST["Bag"])){
            ?>
        <script>
            $(function(){
                $('#women').removeClass('active');
                $('#men').removeClass('active');
                $('#bag').addClass('active');
                $('#shoes').removeClass('active');
                $('#watches').removeClass('active');
                $('#all').removeClass('active');
            });
        </script>  
        <?php
        }else if(isset($_POST["Watches"])){
            ?>
        <script>
            $(function(){
                $('#women').removeClass('active');
                $('#men').removeClass('active');
                $('#bag').removeClass('active');
                $('#shoes').removeClass('active');
                $('#watches').addClass('active');
                $('#all').removeClass('active');
            });
        </script>  
        <?php
        }else if(isset($_POST["Shoes"])){
            ?>
        <script>
            $(function(){
                $('#women').removeClass('active');
                $('#men').removeClass('active');
                $('#bag').removeClass('active');
                $('#shoes').addClass('active');
                $('#watches').removeClass('active');
                $('#all').removeClass('active');
            });
        </script>  
        <?php
        }
    ?>
    </body>
</html>