<?php 
    $con = mysqli_connect('localhost','root','1234');

    if(!mysqli_select_db($con,'project')){ 
        echo 'no db exist';
    }

    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $rePassword = $_POST["rePassword"];

    if(!empty($name) and !empty($email) and !empty($password) and !empty($rePassword)){
        if(strlen($password)>= 6 and strlen($rePassword) >=6){
            if(strcmp($password,$rePassword) == 0){
                $query = "insert into users values('$name','$email','$password')";
                if(!mysqli_query($con,$query)){
                    echo 'Operation Failed'.mysqli_error($con);
                } else {
                    ?>
                        <script>alert("Account created successfully!!")</script>
                    <?php
                }
            } else {
                ?>
                    <script>alert("Passwords don't match")</script>
                <?php
            }
        } else {
            ?>
                <script>alert("Password length must be greater than 5")</script>
            <?php
        }
    } else {
        ?>
            <script>alert("fields required")</script>
        <?php
    }

    header("refresh:0.1; url=home.php");
?>