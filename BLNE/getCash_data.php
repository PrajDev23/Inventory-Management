<?php
                    error_reporting(1);
                    require_once("dbcontroller.php");
                    $db_handle = new DBController();
                    $sql2="SELECT * FROM `index1` WHERE 1 AND `Status` = 1 ";
                        $date1 = $_POST['date1'];
                        $date2 = $_POST['date2'];
                        $dname = $_POST['district'];
                        $area_name=$_POST['aname'];
                        $shop_name=$_POST['sname'];
                        $item_name=$_POST['iname'];
                        
                        
                        if($dname != ""){
                            if($dname != ""){
                                $sql2 .= "  AND District_Name = '$dname'";
                            }
                            if($area_name != ""){
                                $sql2 .= "  AND Area_Name = '$area_name'";
                            }
                            if($shop_name != ""){
                                $sql2 .= "  AND Shop_Name = '$shop_name'";
                            }
                            if($item_name != ""){
                                $sql2 .= "  AND Item_Name = '$item_name'";
                            }
                            if($date1 != "" && $date2 != ""){
                                $sql2 .="   AND `Dt_of_Entry` >= '$date1' AND `Dt_of_Entry` <= '$date2'";
                            }
                        }
                        elseif($date1 != "" && $date2 != ""){
                            $sql2 .="   AND `Dt_of_Entry` >= '$date1' AND `Dt_of_Entry` <= '$date2'";
                        }
                                              
                    
                    $sql2 .=" ORDER BY `Sl no` DESC";
                    $results5 =$db_handle->runQuery($sql2);
                    foreach($results5 as $row){                                   
            ?>
                <tr>
                    <td><input type="checkbox" id="<?php echo $row['Sl no']; ?>"  name="packersOff" value="packers" onchange="updateData12(this.id)"/>
                        <label class="strikethrough"><?php echo $row['Serial']; ?></label>
                    </td>
                    <td>
                        <?php echo $row['Shop_Name']; ?>
                    </td>
                    <td>
                        <?php echo $row['Item_Name']; ?>
                    </td>
                    <td>
                        <?php echo $row['Area_Name']; ?>
                    </td>
                    <td>
                        <?php echo $row['District_Name']; ?>
                    </td>
                   
                </tr>
                <?php 
                   
                    
                    }?>
<?php
    $sql3="SELECT * FROM `index1` WHERE 1 AND `Status` = 2 ";   
    
    if($dname != ""){
        if($dname != ""){
            $sql3 .= "  AND District_Name = '$dname' ";
        }
        if($area_name != ""){
            $sql3 .= "  AND Area_Name = '$area_name'";
        }
        if($shop_name != ""){
            $sql3 .= "  AND Shop_Name = '$shop_name'";
        }
        if($item_name != ""){
            $sql3 .= "  AND Item_Name = '$item_name'";
        }
        if($date1 != "" && $date2 != ""){
            $sql3 .="   AND `Dt_of_Entry` >= '$date1' AND `Dt_of_Entry` <= '$date2'";
        }
    }
    elseif($date1 != "" && $date2 != ""){
        $sql3 .="   AND `Dt_of_Entry` >= '$date1' AND `Dt_of_Entry` <= '$date2'";
    }
                          

$sql3 .="ORDER BY Dt_of_Entry DESC";
$results5 =$db_handle->runQuery($sql3);
foreach($results5 as $row){                                   
?>
<tr>
<td><input type="checkbox" id="<?php echo $row['Sl no']; ?>"  name="packersOff" value="packers" onchange="updateData12(this.id)" checked disabled/>
    <label class="strikethrough"><?php echo $row['Serial']; ?></label>
</td>
<td>
    <?php echo $row['Shop_Name']; ?>
</td>
<td>
    <?php echo $row['Item_Name']; ?>
</td>
<td>
    <?php echo $row['Area_Name']; ?>
</td>
<td>
    <?php echo $row['District_Name']; ?>
</td>

</tr>
<?php 


}
?>



    


