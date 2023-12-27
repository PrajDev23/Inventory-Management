<thead>
                    <tr>
                        <th scope="col" style="text-align: center;width:8%;">Click Here</th>
                        <th scope="col" style="text-align: center;">Shop Name</th>
                        <th scope="col" style="text-align: center;">Phone No</th>
                        <th scope="col" style="text-align: center;">Area Name</th>
                        <th scope="col" style="text-align: center;">Taluk Name</th>
                    </tr>
                </thead>
                <tbody id="content">
<?php
error_reporting(0);
require_once("dbcontroller.php");
$db_handle = new DBController();
if(! empty($_POST['sname'])){
$sname= $_POST['sname'];
$query5 = "SELECT * FROM `shop` WHERE `name` LIKE '%".$_POST['sname']."%' ORDER BY name ASC"; 
$results5 = $db_handle->runQuery($query5);          
                foreach($results5 as $sname){
                $shop_name = $sname['anameID']; 
                $query6 = "SELECT * FROM `aname` WHERE `name` LIKE '$shop_name'";
                $results6 = $db_handle->runQuery($query6);
                    foreach($results6 as $aname){
                    $dname = $aname['dnameID'];
                    $query7 = "SELECT *  FROM `dname` WHERE `name` LIKE '$dname'";  
                    $results7 = $db_handle->runQuery($query7);
                        foreach($results7 as $d_name){
            ?>
<tr>
    <form>
    <td><button style="text-align: center;background-color: #0b5ed7;color: white;height: 30px;width: 100px;"type="button" id="<?php  echo $sname['Sl No']; ?>" name="click" onclick="getData1(this.id)">Click Here</button><br></td>
    <td><?php  echo $sname['name']; ?></td>
    <td style="text-align: center;"><?php  echo $sname['ph_no'];} ?></td>
    <td><?php echo $aname['name'];} ?></td>
    <td><?php echo $d_name['name'];}}?></td>
        </form>
</tr>
</tbody>