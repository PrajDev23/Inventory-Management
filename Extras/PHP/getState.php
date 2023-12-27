<?php
    require_once("dbcontroller.php");
    $db_handle = new DBController();
    $countryID = $_POST['country_id']
    if(! empty($countryID)){
        $query = "SELECT * FROM states WHERE countryID= '.$countryID.' ;
        $results = $db_handle->runQuery($query);
        ?>
<option value disabled selected>Select State</option>
<?php
    foreach($results as $state){
        ?>
<option value="<?php echo $state["state_id"];?>"><?php echo $state["state"];?></option>
<?php
    }
}
?>