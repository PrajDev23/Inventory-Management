<?php
    error_reporting(1);
    include 'connect.php';
    require_once("dbcontroller.php");
    $db_handle = new DBController();
    $sl_no = $_POST['serial'];
    $date = $_POST['date'];
    $sql2="SELECT * FROM `index1` WHERE `Sl no` = '$sl_no' ";
    $results5 =$db_handle->runQuery($sql2);
    $sql2 ="UPDATE `index1` SET `Status`='3' WHERE 1 AND `Sl no`= '$sl_no'";
    $result=mysqli_query($con,$sql2);
    foreach($results5 as $row){
        $taluk = $row['District_Name'];
        $area = $row['Area_Name'];
        $item = $row['Item_Name'];
        $shop = $row['Shop_Name'];
        $serial= $row['Serial']; 
        if(! empty($date)){
            $sql3 = "INSERT INTO `index1`(`Dt_of_Entry`,`District_Name`, `Area_Name`, `Shop_Name`, `Item_Name`, `Serial`, `Status`) 
            VALUES ('$date','$taluk','$area','$shop','$item','$serial','2')";
        }
        else{
            $sql3 = "INSERT INTO `index1`(`District_Name`, `Area_Name`, `Shop_Name`, `Item_Name`, `Serial`, `Status`) 
            VALUES ('$taluk','$area','$shop','$item','$serial','2')";
        }
        $result=mysqli_query($con,$sql3);
        
    }
?>