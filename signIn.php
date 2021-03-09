<?php 
    $mySql = new mysqli('localhost','root','1234','project') or die($mySql->connect_error);
    $table = 'users';

    $email = $_POST["email"];
    $password = $_POST["password"];

    if(!empty($email) and !empty($password)){
        $result = $mySql->query("Select * from $table") or die($mySql->error);
        while($data = $result->fetch_assoc()){
            if(strcmp($email,$data["email"] == 0) and strcmp($password,$data["password"]) == 0 ){
                setcookie("CozaStore",$email,time() + 604800); // 604800 = 1 week
                ?>
                    <script>alert("Matched!")</script>
                <?php
                break;
            } else {
                ?>
                    <script>alert("Check your email or password")</script>
                <?php
            }
        }
    } else {
        ?>
            <script>alert("Fileds required!")</script>
        <?php
    }
    header("refresh:0.1; url=home.php");
?>