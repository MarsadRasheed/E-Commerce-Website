<?php 
    $con = mysqli_connect('localhost','root','1234');

    if(!mysqli_select_db($con,'project')){ 
        echo 'no db exist';
    }

    $email = $_POST["email"];
    $message = $_POST["message"];

    $sql = "insert into contact(email,message) values('$email','$message')";

    if(!empty($email) and !empty($message)){
        if(!mysqli_query($con,$sql)){
            echo 'not sent'.mysqli_error($con);
        } else {
            ?>
            <script>alert("Message sent!")</script>
            <?php
        }
    } else {
        ?>
            <script>alert("Fields required!")</script>
        <?php

    }

    header("refresh:0.1; url=contact.php");
?>