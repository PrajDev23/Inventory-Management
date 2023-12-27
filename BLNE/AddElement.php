<?php
    require_once("dbcontroller.php");
    $db_handle = new DBController();
    error_reporting(0);
    $dname = $_POST['dname'];
    $area_name=$_POST['aname'];
    $shop_name=$_POST['sname'];
    $item_name=$_POST['iname'];
    $credit=$_POST['credit'];
    $cash=$_POST['cash'];
    $date =$_POST['date'];
    $comment =$_POST['remarks'];
    $user =$_POST['user'];
             // <!-- Insert into table -->
    if($date != ""){
    $sql1= "INSERT INTO `index` (`Dt_of_Entry`,`District_Name`, `Area_Name`, `Shop_Name`, `Item_Name`, `Credit`, `Cash`,`remarks`,`login`)
    VALUES ('$date','$dname','$area_name','$shop_name','$item_name','$credit','$cash','$comment','$user')";
    }
    else{
        $sql1= "INSERT INTO `index` (`District_Name`, `Area_Name`, `Shop_Name`, `Item_Name`, `Credit`, `Cash`, `remarks`,`login`)
    VALUES ('$dname','$area_name','$shop_name','$item_name','$credit','$cash','$comment','$user')";
    }
    $res=$db_handle->runQuery($sql1);
    
   
?>