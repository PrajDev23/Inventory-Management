<?php
error_reporting(0);
                    require_once("dbcontroller.php");
                    $db_handle = new DBController();
                    $sqli1 = "SELECT  SUM(Credit) from 'index' WHERE 1";
                    if(isset($_POST['filter'])){
                        $date1 = $_POST['date1'];
                        $date2 = $_POST['date2'];
                        $dname = $_POST['district'];
                        $area_name=$_POST['aname'];
                        $shop_name=$_POST['sname'];
                        $item_name=$_POST['iname'];
                        
                        
                        if($dname != ""){
                            if($dname != ""){
                                $sqli1 .= "  AND District_Name = '{$dname}' ";
                            }
                            if($area_name != ""){
                                $sqli1 .= "  AND Area_Name = '{$area_name}'";
                            }
                            if($shop_name != ""){
                                $sqli1 .= "  AND Shop_Name = '{$shop_name}'";
                            }
                            if($item_name != ""){
                                $sqli1 .= "  AND Item_Name = '{$item_name}'";
                            }
                            if($date1 != "" && $date2 != ""){
                                $sqli1 .=" AND `Dt_of_Entry` >= '$date1' AND `Dt_of_Entry` <= '$date2'";
                            }
                        }
                        elseif($date1 != "" && $date2 != ""){
                            $sqli1 .="   AND `Dt_of_Entry` >= '$date1' AND `Dt_of_Entry` <= '$date2'";
                        }
                    }
                    $res1 = $db_handle->runQuery($sqli1) ;
                    foreach($res1 as $row){
                        echo "Total Credit: ". $row['SUM(Credit)'];
                    }?>