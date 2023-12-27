<?php
    require_once("dbcontroller.php");
    $db_handle = new DBController();
    error_reporting(1);
    $name = $_POST['aname'];    
    $altname = $_POST['dname'];    
             // <!-- Insert into table -->
    $sql1= "INSERT INTO `aname`( `name`, `dnameID`) 
    VALUES ('$name','$altname')";
    $result=$db_handle->runQuery($sql1);
?>