<?php
                    error_reporting(1);
                    require_once("dbcontroller.php");
                    $db_handle = new DBController();
                    $sql2="SELECT * FROM `index` WHERE 1 ";
                        $date1 = $_POST['date1'];
                        $date2 = $_POST['date2'];
                        $dname = $_POST['district'];
                        $area_name=$_POST['aname'];
                        $shop_name=$_POST['sname'];
                        $item_name=$_POST['iname'];
                        $comment=$_POST['comment'];
                        
                        
                        if($dname != "" || ($item_name != "") || ($comment != "")){
                            if($dname != ""){
                                $sql2 .= "  AND District_Name = '{$dname}' ";
                            }
                            if($area_name != ""){
                                $sql2 .= "  AND Area_Name = '{$area_name}'";
                            }
                            if($shop_name != ""){
                                $sql2 .= "  AND Shop_Name = '{$shop_name}'";
                            }
                            if($item_name != ""){
                                $sql2 .= "  AND Item_Name = '{$item_name}'";
                            }
                            if($date1 != "" && $date2 != ""){
                                $sql2 .="   AND `Dt_of_Entry` >= '$date1' AND `Dt_of_Entry` <= '$date2'";
                            }
                            if($comment != ""){
                                $sql2 .="AND `remarks` LIKE '%{$comment}%'";
                            }
                        }
                        elseif($date1 != "" && $date2 != ""){
                            $sql2 .="   AND `Dt_of_Entry` >= '$date1' AND `Dt_of_Entry` <= '$date2'";
                        }
                        
                        
                    
                    $sql2 .="ORDER BY Dt_of_Entry DESC,`Sl.no` DESC";
                    $result=$db_handle->runQuery($sql2);
                    if($result){
                        $counter = 0;
                        
                        foreach($result as $row){
                                                                
            ?>
                <tr>
                    <?php if($_POST['user']== 'root'){ ?>
                    <td style="text-align:center;">
                        <?php echo $row['login']; ?>
                    </td>
                    <?php }?>
                    <td style="text-align:center;">
                        <?php echo ++$counter; ?>
                    </td>
                    <td style="text-align:center;">
                        <?php echo $row['Dt_of_Entry']; ?>
                    </td>
                    <td>
                        <?php echo $row['District_Name']; ?>
                    </td>
                    <td>
                        <?php echo $row['Area_Name']; ?>
                    </td>
                    <td>
                        <?php echo $row['Shop_Name']; ?>
                    </td>
                    <td>
                        <?php echo $row['Item_Name']; ?>
                    </td>
                    <td>
                        <?php echo $row['Credit']; ?>
                    </td>
                    <td>
                        <?php echo $row['Cash']; ?>
                    </td>
                    <td>
                        <?php echo $row['remarks']; ?>
                    </td>
                </tr>
                <?php 
                   
                    
                    }}?>


