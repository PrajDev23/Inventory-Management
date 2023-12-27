<?php
    include 'connect.php';
    $quan_tot= "SELECT SUM(Quantity) FROM blne1" ;
    $result3=mysqli_query($con,$quan_tot);                
    if($result3){
        while($row=mysqli_fetch_assoc($result3)){
?>