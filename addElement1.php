<?php
    include 'connect.php';
    $dname = $_POST['dname'];
    $area_name=$_POST['aname'];
    $shop_name=$_POST['sname'];
    $item_name=$_POST['iname'];
    $date =$_POST['date'];
    $serial =$_POST['serial'];
             // <!-- Insert into table -->
    if($date != ""){
    $sql1= "INSERT INTO `index1` (`Dt_of_Entry`, `District_Name`, `Area_Name`, `Shop_Name`, `Item_Name`, `Serial`, `Status`)
    VALUES ('$date','$dname','$area_name','$shop_name','$item_name', '$serial', '1' )";
    }
    else{
        $sql1= "INSERT INTO `index1` (`District_Name`, `Area_Name`, `Shop_Name`, `Item_Name`, `Serial`, `Status`)
        VALUES ('$dname','$area_name','$shop_name','$item_name', '$serial','1')";
    }
    
    $result=mysqli_query($con,$sql1);
   
?>