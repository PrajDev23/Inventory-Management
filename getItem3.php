<?php
    require_once("dbcontroller.php");
    $db_handle = new DBController();
        $query = "SELECT * FROM item ORDER BY 'name' ASC";
        $results = $db_handle->runQuery($query);
        ?>
<option value="" selected>------------ Item Name ------------</option>
<?php
    foreach($results as $state){
        ?>
<option value="<?php echo $state["name"];?>"><?php echo $state["name"];?></option>
<?php
    }
?>