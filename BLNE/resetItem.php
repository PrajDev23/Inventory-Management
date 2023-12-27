<?php
    require_once("dbcontroller.php");
    $db_handle = new DBController();
    $query = "SELECT * FROM dname ORDER BY 'name' ASC ";
    $results = $db_handle->runQuery($query);
    $query1 = "SELECT * FROM item";
    $results1 = $db_handle->runQuery($query1);
    
    
?>


<select class="iname" name="iname" id="iname" onchange="getData13()">
                    <option value="" selected>------------ Item Name ------------</option>
                    <?php
                        foreach($results1 as $item){
                    ?>
                    <option value="<?php echo $item["name"];?>">
                        <?php echo $item["name"]; ?>
                    </option>
                    <?php
                        }
                    ?>
                </select>