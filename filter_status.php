<?php
    echo "Filter Status: ";
    $status = $_POST['val'];
    if($status == 1){
        echo "ON";
    }
    else{
        echo "OFF";
    }
?>