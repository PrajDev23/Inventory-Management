
<?php
    require_once("dbcontroller.php");
    $db_handle = new DBController();
    $query = "SELECT * FROM dname ORDER BY 'name' ASC ";
    $results = $db_handle->runQuery($query);
    $query1 = "SELECT * FROM item";
    $results1 = $db_handle->runQuery($query1);
    
    
?>
<select class="district" name="district" id="dname_select" onchange="getAname(this.value),getData13()">
    <option value = "" selected>--- Taluk Name ---</option>
    <?php
        foreach($results as $dname){
    ?>
    <option value="<?php echo $dname["name"];?>">
    <?php echo $dname["name"]; ?>
    </option>
    <?php
        }
    ?>
</select>