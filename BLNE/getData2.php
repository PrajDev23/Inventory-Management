<?php
    require_once("dbcontroller.php");
    $db_handle = new DBController();
    if(! empty($_POST["shop_id"])){
        $query = "SELECT *  FROM `shop` WHERE `Sl No` = '".$_POST['shop_id']."' ";
        $results = $db_handle->runQuery($query);
        
        ?>
<?php
    foreach($results as $state){
        $aname= $state['anameID'];
        $query2="SELECT * FROM `aname` WHERE `name` LIKE '$aname' ";
        $results2 = $db_handle->runQuery($query2);
        foreach($results2 as $a_name){
        ?>
<option value="<?php echo $a_name["name"];}}?>" selected><?php echo $a_name["name"];?></option>
<?php 
    $query = "SELECT * FROM `aname` WHERE `name` NOT LIKE '$aname' AND `dnameID` = '".$a_name['dnameID']."'";
    $results = $db_handle->runQuery($query);
    foreach($results as $row){
?>
<option value="<?php echo $row["name"];?>"><?php echo $row["name"];?></option>
<?php
    }}
?>