<?php
    include 'connect.php';
    $cash_tot= "SELECT SUM(Cash) FROM blne1" ;
    $result1=mysqli_query($con,$cash_tot);              
    if($result1){        
        while($row=mysqli_fetch_assoc($result1)){
     
     
        
?>
