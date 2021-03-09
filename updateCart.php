<?php

    $mySql = new mysqli('localhost','root','1234','project') or die($mySql->connect_error);
    $table = 'cartlist';
    
    $id = $_POST["hidden_id"];
    $quantity = $_POST["quantity"];

    $result = $mySql->query("update $table set quantity = '$quantity' where id = '$id'") or die($mySql->error);
    header("refresh:0.1; url=CartList.php");
?>