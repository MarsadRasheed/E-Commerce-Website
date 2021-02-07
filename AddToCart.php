<?php 

    $con = mysqli_connect('localhost','root','1234');

    if(!mysqli_select_db($con,'project')){ 
        echo 'no db exist';
    }

    $name = $_POST["hidden_name"];
    $price = $_POST["hidden_price"];
    $image = $_POST["hidden_image"];
    $quantity = $_POST["quantity"];
    
    if(empty($_COOKIE["CozaStore"])){
        $user = get_current_user();
    }else {
        $user = $_COOKIE["CozaStore"];
    }

    $sql = "insert into cartList(name,price,img_dir,email,quantity) values('$name','$price','$image','$user','$quantity')";

    if(!mysqli_query($con,$sql)){
        echo 'not inserted';
    } else {
        ?>        
        <script>alert("Added to cart list")</script>
    <?php
    }
    header("refresh:0.1; url=home.php");
?>