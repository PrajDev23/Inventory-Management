<div  id="quantity_select">
<table class="table table-success table-striped-columns">   
<thead>
    <div>
    <tr class="red">
        <th scope="col">Taluk Name</th>
        <th scope="col">Area Name</th>
        <th scope="col">Shop Name</th>
        <th scope="col">Available</th>
        <th scope="col">Click Here</th>
    </tr>
    </div>
</thead>
<?php
    error_reporting(1);
    require_once("dbcontroller.php");
    $db_handle = new DBController();
    $low = $_POST['low'];
    $sql = "SELECT * FROM `shop` WHERE 1";
    $res =$db_handle->runQuery($sql);
    foreach($res as $shop){
            $shop_name=$shop['name'];
            $sql2="SELECT SUM(Credit),SUM(Cash),`District_Name`, `Area_Name`, `Shop_Name`, `Item_Name`, `Sl.No` FROM `index` WHERE `Shop_Name`='{$shop_name}' ";
            $res2 =$db_handle->runQuery($sql2);
            foreach($res2 as $row){
                $due = $row['SUM(Credit)']-$row['SUM(Cash)'];
            }
            if(($due <= ($low)) && ($due >0)){
                if($row['District_Name'] ){
                    $sql3 = "SELECT `Sl no`,`name` FROM `shop` WHERE `name`='{$row['Shop_Name']}' ";
                    $res3 = $db_handle->runQuery($sql3);
                    foreach($res3 as $res3){
?>
<tr class="table-warning">
    <td><?php echo $row['District_Name'] ;?></td>
    <td><?php echo $row['Area_Name'] ;?></td>
    <td><?php echo $row['Shop_Name'] ;?></td>
    <td><?php echo $due ;?></td>
    <td><button style="text-align: center;background-color: #0b5ed7;color: white;height: 30px;width: 100px;" type="button" id="<?php echo $res3['Sl no']; ?>"  onclick="getData1(this.id),hide_status()">Click Here</button></td>
</tr>
<script>
    document.getElementById("open-button").style.backgroundColor = "red";
</script>

<?php           }
            }
        }
    }
foreach($res as $shop){
        $shop_name=$shop['name'];
        $sql2="SELECT SUM(Credit),SUM(Cash),`District_Name`, `Area_Name`, `Shop_Name`, `Item_Name`, `Sl.No` FROM `index` WHERE `Shop_Name`='{$shop_name}' ";
        $res2 =$db_handle->runQuery($sql2);
            foreach($res2 as $row){
                $due = $row['SUM(Credit)']-$row['SUM(Cash)'];
            }
            if(($due==0)){
                if($row['District_Name'] ){  
                    $sql3 = "SELECT `Sl no`,`name` FROM `shop` WHERE `name`='{$row['Shop_Name']}' ";
                    $res1 = $db_handle->runQuery($sql3);
                    foreach($res1 as $res1){                    
?>
<script>
    document.getElementById("open-button").style.backgroundColor = "red";
</script>
<tr class="table-danger">
    <td><?php echo $row['District_Name'] ;?></td>
    <td><?php echo $row['Area_Name'] ;?></td>
    <td><?php echo $row['Shop_Name'] ;?></td>
    <td><?php echo $due ;?></td>
    <td><button style="text-align: center;background-color: #0b5ed7;color: white;height: 30px;width: 100px;" type="button" id="<?php echo $res1['Sl no']; ?>"  onclick="getData1(this.id),hide_status()">Click Here</button></td>
</tr>
<?php           } } } }
            // }
?>
</table>
        </div>