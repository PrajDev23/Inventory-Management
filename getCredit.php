<table class="table table-borderless table-dark">
<tr>

                    <?php
                    error_reporting(1);
                    require_once("dbcontroller.php");
                    $db_handle = new DBController();
                    $comment = $_POST['comment'];     
                    $sqli1 = "SELECT SUM(Credit) FROM `index` WHERE 1";
                        $date1 = $_POST['date1'];
                        $date2 = $_POST['date2'];
                        $dname = $_POST['district'];
                        $area_name=$_POST['aname'];
                        $shop_name=$_POST['sname'];
                        $item_name=$_POST['iname'];
                        $comment = $_POST['comment'];                        
                        
                        if($dname != "" || ($item_name != "") || ($comment != "")){
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
                            if($comment != ""){
                                $sqli1 .=" AND `remarks` LIKE '%$comment%'";
                            }
                        }
                        elseif($date1 != "" && $date2 != ""){
                            $sqli1 .="   AND `Dt_of_Entry` >= '$date1' AND `Dt_of_Entry` <= '$date2'";
                        }
                    $res1=$db_handle->runQuery($sqli1)
                    ?>
                    <td class="bg-primary" style="text-align:right;">Total Sent STB:</td>
                    <td class="bg-danger">
                    <?php
                    foreach($res1 as $row){
                        $sum_credit= $row['SUM(Credit)'];
                        if($sum_credit != "")
                            echo $sum_credit;
                        else
                            echo "0";
                    }
                ?>
</td>
</tr><tr>

                    <?php
                    error_reporting(1);
                    require_once("dbcontroller.php");
                    $db_handle = new DBController();
                    $sqli2 = "SELECT SUM(Cash) FROM `index` WHERE 1";
                        $date1 = $_POST['date1'];
                        $date2 = $_POST['date2'];
                        $dname = $_POST['district'];
                        $area_name=$_POST['aname'];
                        $shop_name=$_POST['sname'];
                        $item_name=$_POST['iname'];
                        $comment = $_POST['comment'];
                        
                        if($dname != "" || ($item_name != "") || ($comment != "")){
                            if($dname != ""){
                                $sqli2 .= "  AND District_Name = '{$dname}' ";
                            }
                            if($area_name != ""){
                                $sqli2 .= "  AND Area_Name = '{$area_name}'";
                            }
                            if($shop_name != ""){
                                $sqli2 .= "  AND Shop_Name = '{$shop_name}'";
                            }
                            if($item_name != ""){
                                $sqli2 .= "  AND Item_Name = '{$item_name}'";
                            }
                            if($date1 != "" && $date2 != ""){
                                $sqli2 .=" AND `Dt_of_Entry` >= '$date1' AND `Dt_of_Entry` <= '$date2'";
                            }
                            if($comment != ""){
                                $sqli2 .=" AND `remarks` LIKE '%$comment%'";
                            }
                        }
                        elseif($date1 != "" && $date2 != ""){
                            $sqli2 .="   AND `Dt_of_Entry` >= '$date1' AND `Dt_of_Entry` <= '$date2'";
                        }
                    ?>
                     <td class="bg-primary" style="text-align:right;">Total Activated:</td>
                     <td class="bg-danger">
                    <?php
                    $res2 = $db_handle->runQuery($sqli2);
                    foreach($res2 as $row){
                        $sum_cash= $row['SUM(Cash)'];
                        if($sum_cash != "")
                            echo $sum_cash;
                        else
                            echo "0";
                    }
                ?>

                </td>



                </tr><tr>

                    <?php
                        error_reporting(1);
                        require_once("dbcontroller.php");
                    $db_handle = new DBController();
                        $sqli4 = "SELECT SUM(Credit),SUM(Cash) FROM `index` WHERE 1";
                            $date1 = $_POST['date1'];
                            $date2 = $_POST['date2'];
                            $dname = $_POST['district'];
                            $area_name=$_POST['aname'];
                            $shop_name=$_POST['sname'];
                            $item_name=$_POST['iname'];
                            $comment = $_POST['comment'];
                            
                            if($dname != "" || ($item_name != "") || ($comment != "")){
                                if($dname != ""){
                                    $sqli4 .= "  AND District_Name = '{$dname}' ";
                                }
                                if($area_name != ""){
                                    $sqli4 .= "  AND Area_Name = '{$area_name}'";
                                }
                                if($shop_name != ""){
                                    $sqli4 .= "  AND Shop_Name = '{$shop_name}'";
                                }
                                if($item_name != ""){
                                    $sqli4 .= "  AND Item_Name = '{$item_name}'";
                                }
                                if($date1 != "" && $date2 != ""){
                                    $sqli4 .=" AND `Dt_of_Entry` >= '$date1' AND `Dt_of_Entry` <= '$date2'";
                                }
                                if($comment != ""){
                                    $sqli4 .=" AND `remarks` LIKE '%$comment%'";
                                }
                            }
                            elseif($date1 != "" && $date2 != ""){
                                $sqli4 .="   AND `Dt_of_Entry` >= '$date1' AND `Dt_of_Entry` <= '$date2'";
                            }
                        $res4 = $db_handle->runQuery($sqli4);
?>

<td class="bg-primary" style="text-align:right;">Remaining STB:</td>
<td class="bg-danger">                    <?php    foreach($res4 as $row){
                            $cash=$row['SUM(Cash)'];
                            $credit=$row['SUM(Credit)'];
                            $due=$cash-$credit;
                            echo  -$due;
                            
                        }
                        
                    ?>
    </td></tr><tr>


                </table>