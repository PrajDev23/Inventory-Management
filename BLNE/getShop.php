<?php
    require_once("dbcontroller.php");
    $db_handle = new DBController();
    if(!empty($_POST["state_id"])){
        $query = "SELECT * FROM shop WHERE anameID = '".$_POST["state_id"]."' ORDER BY 'name' ASC";
        $results = $db_handle->runQuery($query);
    }
        ?>
<option value selected>--------- Shop Name ----------</option>
<?php
    foreach($results as $shop){
        ?>
<option value="<?php echo $shop["name"];?>"><?php echo $shop["name"];?></option>
<?php
    }
?>