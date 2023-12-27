<?php
    require_once("dbcontroller.php");
    $db_handle = new DBController();
    error_reporting(1);
    $name = $_POST['sname'];    
    $altname = $_POST['aname'];    
    $phno = $_POST['no'];   
             // <!-- Insert into table -->
    $sql1= "INSERT INTO `shop`( `name`, `anameID`, `ph_no`) 
    VALUES ('$name','$altname','$phno')";
    $result=$db_handle->runQuery($sql1);
?>