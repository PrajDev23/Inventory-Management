<?php
                    error_reporting(1);
                    require_once("dbcontroller.php");
                    $db_handle = new DBController();
                    $sql2="SELECT * FROM `index1` WHERE 1 ";
                        $date1 = $_POST['date1'];
                        $date2 = $_POST['date2'];
                        $dname = $_POST['district'];
                        $area_name=$_POST['aname'];
                        $shop_name=$_POST['sname'];
                        $item_name=$_POST['iname'];
                        
                        
                        if($dname != ""){
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
                        }
                        elseif($date1 != "" && $date2 != ""){
                            $sql2 .="   AND `Dt_of_Entry` >= '$date1' AND `Dt_of_Entry` <= '$date2'";
                        }
                        else{
                        }
                        
                    
                    $sql2 .="ORDER BY `Dt_of_Entry` DESC,`Sl.no` DESC";
                    $results = $db_handle->runQuery($sql2);
                           foreach($results as $row){                
            ?>
                <tr>
                    <td>
                        <?php echo ++$counter; ?>
                    </td>
                    <td>
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
                            <!-- Cash -->
                    <?php 
                    if( empty( $row['Status'] == 2))    {
                       echo $row['Serial']; 
                    }
                    ?>

                    </td>
                    <td>
                        <!-- Credit -->
                        <?php
                        if ( empty( $row['Status'] == 3) && empty( $row['Status'] == 1)) {
                            echo $row['Serial'];
                        }
                            
                        ?>
                    </td>
                </tr>
                <?php 
                   
                    
                    }?>


