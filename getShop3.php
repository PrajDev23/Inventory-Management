<?php
    if(! empty($_POST['shop'])){
    $shop = $_POST['shop'];
?>
<option value="<?php echo $shop;?>"><?php echo $shop;?></option>
<?php
    }
?>