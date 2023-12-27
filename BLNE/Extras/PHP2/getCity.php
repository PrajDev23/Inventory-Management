<?php
    require_once("dbcontroller.php");
    $db_handle = new DBController();
    if(!empty($_POST["state_id"])){
        $query = "SELECT * FROM city WHERE stateID = '".$_POST["state_id"]."' ORDER BY name ASC";
        $results = $db_handle->runQuery($query);
        ?>
<option value disabled selected>Select City</option>
<?php
    foreach($results as $city){
        ?>
<option value="<?php echo $city["name"];?>"><?php echo $city["name"];?></option>
<?php
    }
}
?>