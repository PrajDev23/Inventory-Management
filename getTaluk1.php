<?php
    if(! empty($_POST['taluk'])){
    $shop = $_POST['taluk'];
?>
<option value="<?php echo $shop;?>" selected><?php echo $shop;?></option>
<?php
    }
?>