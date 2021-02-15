<?php
    $mySql = new mysqli('localhost','root','1234','project') or die($mySql->connect_error);
    $table = 'cartlist';
    $id = $_POST["hidden_id"];
    $result = $mySql->query("Delete from $table where id = '$id'") or die($mySql->error);

    if($result){
        ?>
        <script>alert('item is removed successfully')</script>
        <?php
    } else {
        echo 'error';
    }

    header("refresh:0.1; url=CartList.php");
?>
