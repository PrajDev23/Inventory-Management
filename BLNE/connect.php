<?php
error_reporting(0);
$con=new mysqli("localhost","root","","blne");
if(!$con){
    die(mysqli_error($con));
}

?>