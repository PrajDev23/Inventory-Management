<?php
    require_once("dbcontroller.php");
    $db_handle = new DBController();
    error_reporting(1);
    $name = $_POST['dname'];   
             // <!-- Insert into table -->
    $sql1= "INSERT INTO `dname` (`name`) VALUES ('$name')";
    $result=$db_handle->runQuery($sql1);
?>