<?php
    require_once("dbcontroller.php");
    $db_handle = new DBController();
    if(! empty($_POST["shop_id"])){
        $query = "SELECT * FROM states WHERE countryID='".$_POST["shop_id"]."' ORDER BY 'name' ASC";
        $results = $db_handle->runQuery($query);
        ?>
<option value selected>Select State</option>
<?php
    foreach($results as $state){
        ?>
<option value="<?php echo $state["name"];?>"><?php echo $state["name"];?></option>
<?php
    }
}
?>