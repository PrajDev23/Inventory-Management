<?php
    require_once("dbcontroller.php");
    $db_handle = new DBController();
    if(!empty($_POST["country_id"])){
        $query = "SELECT * FROM aname WHERE dnameID='".$_POST["country_id"]."' ORDER BY 'name' ASC";
        $results = $db_handle->runQuery($query);
        ?>
<option value selected>--- Area Name ---</option>
<?php
    foreach($results as $state){
        ?>
<option value="<?php echo $state["name"];?>"><?php echo $state["name"];?></option>
<?php
    }
}
?>