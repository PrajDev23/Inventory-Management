<?php
    require_once("dbcontroller.php");
    $db_handle = new DBController();
    if(! empty($_POST["shop_id"])){
        $query = "SELECT *  FROM `shop` WHERE `Sl No` = '".$_POST['shop_id']."' ";
        $results = $db_handle->runQuery($query);
        foreach($results as $state){
?>
<option value="<?php echo $state["name"];?>" selected><?php echo $state["name"];?></option>
<?php
    }
    $query = "SELECT *  FROM `shop` WHERE `Sl No` !=  '".$_POST['shop_id']."'  AND  `anameID` =  '".$state['anameID']."'  ";
    $results = $db_handle->runQuery($query);
    foreach($results as $row){
?>
<option value="<?php echo $row["name"];?>" ><?php echo $row["name"];?></option>
<?php
    }}
?>