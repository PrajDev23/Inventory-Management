<?php
    error_reporting(1);
    require_once("dbcontroller.php");
    $db_handle = new DBController();
    $name = $_POST['iname'];   
             // <!-- Insert into table -->
    $sql1= "INSERT INTO `item` (`name`)
    VALUES ('$name')";
    $result=$db_handle->runQuery($sql1);
?>