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
            $dname= $a_name['dnameID'];
            $query3="SELECT * FROM `dname` WHERE `name` LIKE '$dname' ";
            $results3 = $db_handle->runQuery($query3);
            foreach($results3 as $d_name){
        ?>
<option value="<?php echo $d_name["name"];}}?>" selected><?php echo $d_name["name"];?></option>
<?php 
    $query = "SELECT * FROM `dname` WHERE `name` NOT LIKE '$dname'";
    $result = $db_handle->runQuery($query);
    foreach($result as $row){
?>
<option value="<?php echo $row["name"];?>"><?php echo $row["name"];?></option>
<?php
    }}}
?>