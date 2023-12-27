<?php
    require_once("dbcontroller.php");
    $db_handle = new DBController();
    $query = "SELECT * FROM dname ORDER BY 'name' ASC ";
    $results = $db_handle->runQuery($query);
    $query1 = "SELECT * FROM item";
    $results1 = $db_handle->runQuery($query1);
    
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        #getData2{
            display: none;
        }
    </style>
    <style>
        #search_shop {
            background-color: #e0e0e0;
        }

        #item_elem,
        #shop_elem,
        #area_elem,
        #taluk_elem {
            display: none;
        }

        #add_elem {
            width: 100%;
            background-color: lightblue;
            margin-top: 20px;
            margin-bottom: 20px;
            display: none;
            padding: 10px;

        }

        #createItem,
        #createTaluk {
            font-size: medium;
            padding: 1px;
            height: 28px;
            width: auto;
            box-sizing: border-box;
        }

        #add_element {
            float: left;
            font-size: medium;
            padding: 2px;
            height: 30px;
            width: 40px;
            box-sizing: border-box;

        }

        #add_element1 {
            font-size: medium;
            padding: 2px;
            box-sizing: border-box;
        }

        #serch_div {
            background-color: black;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLN Enterprises - Data Entry</title>
    <link rel="stylesheet" type="text/css" href="jquery-ui.min.css">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script src="jquery-3.6.3.min.js" type="text/javscript"></script>
    <script src="jquery-ui.min.js" type="text/javscript"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <style>
        * {
            padding: 0;
            border: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #e0e0e0;
            font-size: medium;
            size: 5px;
        }

        .heading {
            box-sizing: border-box;
            background-color: #c0ffc2;
            margin: auto;
            padding: 10px;
        }

        #refresh {
            padding: 5px;
            height: auto;
            margin: auto;
        }

        #save {
            font-size: medium;
            padding: 2px;
            float: right;
            height: 28px;
            box-sizing: border-box;
        }

        #filter {
            font-size: medium;
            padding: 2px;
            float: right;
            height: 28px;
            box-sizing: border-box;
            margin: auto;
        }

        .form {
            align-items: center;
            box-sizing: border-box;
            margin: auto 5%;
        }

        .amount {

            height: auto;
            width: 70px;
            align-items: center;
            text-align: center;
        }

        .date {
            font-size: large;
            color: red;
            padding: 3px;
        }

        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: aqua;
            color: black;
            text-align: center;
        }

        */ #date1,
        #date2 {
            align-items: center;
        }
    </style>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-DOXMLfHhQkvFFp+rWTZwVlPVqdIhpDVYT9csOnHSgWQWPX0v5MCGtjCJbY6ERspU" crossorigin="anonymous">
    <script src="index1.js" defer></script>
    <script src="submit.js?2" defer></script>

</head>

<body>

    <div>
        <a href="index.php"><button id="refresh" class="btn btn-primary">Refresh</button></a>
        <input type="text" id="search_shop" name="search_shop" maxlength="32" placeholder="Shop Name"
            onchange="search(this.value)"><br>
        <br>
        <div><button onclick="addElement()" class="btn btn-primary" id="add_element">Add</button></div>
        <br><br>
        <div id ="content">
        <div id="add_elem">

            <button onclick="createItem()" class="btn btn-primary" id="add_element1">Item Name</button>
            <button onclick="createShop()" class="btn btn-primary" id="add_element1">Shop Name</button>
            <button onclick="createArea()" class="btn btn-primary" id="add_element1">Area Name</button>
            <button onclick="createTaluk()" class="btn btn-primary" id="add_element1">Taluk Name</button>

            <div id="item_elem">
                <form method="POST">
                    <br>
                    <input type="text" id="add_Item" placeholder="Item Name" maxlength="32" name="item_name">
                    <button class="btn btn-primary" name="ADDitem" id="createItem" onclick="addItem()">Save</button>
                </form>
            </div>

            <div id="shop_elem">
                <fomr method="POST">
                    <br>
                    <select onchange="getAname1(this.value)">
                        <option value="" disabled selected>--- Taluk Name ---</option>
                        <?php
                        foreach($results as $dname){
                    ?>
                        <option value="<?php echo $dname[" name"];?>">
                            <?php echo $dname["name"]; ?>
                        </option>
                        <?php
                        }
                    ?>
                    </select>
                    <!-- Area Name For Shop -->
                    <select id="area_shop">
                        <option value="" disabled selected>--- Area Name ---</option>
                    </select>
                    <input type="text" id="add_shop" maxlength="32" placeholder="Shop Name">
                    <button class="btn btn-primary" id="createTaluk" onclick="addShop()">Save</button>
                    </form>
            </div>

            <div id="area_elem">
                <form method="POST">
                    <br>
                    <select id="taluk_area">
                        <option value="" disabled selected>--- Taluk Name ---</option>
                        <?php
                        foreach($results as $dname){
                    ?>
                        <option value="<?php echo $dname[" name"];?>">
                            <?php echo $dname["name"]; ?>
                        </option>
                        <?php
                        }
                    ?>
                    </select>
                    <input type="text" id="area_name" maxlength="32" placeholder="Area Name">
                    <button class="btn btn-primary" id="createTaluk" onclick="addArea()">Save</button>
                </form>
            </div>

            <div id="taluk_elem">
                <form method="POST">
                    <br>
                    <input type="text" id="add_taluk" maxlength="32" placeholder="Taluk Name">
                    <button class="btn btn-primary" id="createTaluk" onclick="addTaluk()">Save</button>
                </form>
            </div>

        </div>
        <div id="search_div" class="container">

            <table style="width:100%" id="search_table" class="table table-success table-striped-columns">
                <thead>
                    <tr>
                        <th scope="col" style="text-align: center;width:8%;">Click Here</th>
                        <th scope="col" style="text-align: center;">Shop Name</th>
                        <th scope="col" style="text-align: center;">Area Name</th>
                        <th scope="col" style="text-align: center;">Taluk Name</th>
                    </tr>
                </thead>
                <tbody id="search_cust">
                </tbody>
            </table>
        </div>
                    </div>
    </div>

    <form method="post" class="heading" id="form">
        <div class="date">
            <input type="text" size="10" name="date1" id="date1" placeholder="Start Date"><span> TO </span><input
                type="text" placeholder="End Date" size="10" name="date2" id="date2">
            <script src="jquery-3.6.3.min.js"></script>
            <script src="jquery-ui.min.js"></script>
            <script>
                $(document).ready(function () {
                    $('#date1').datepicker({
                        dateFormat: "yy-mm-dd"
                    });
                })
            </script>
            <script>
                $(document).ready(function () {
                    $('#date2').datepicker({
                        dateFormat: "yy-mm-dd"
                    });
                })
                $(document).ready(function () {
                    $('#date_main').datepicker({
                        dateFormat: "yy-mm-dd"
                    });
                })
            </script>
        </div>

        <div class="form">
        
            <div class="category_div" id="category_div">
            <input type="text" size="10" name="date_main" id="date_main" placeholder="Date of Entry">    
            <!-- //District Name -->

                <select class="district" name="district" id="dname_select" onchange="getAname(this.value)">
                    <option value="" disabled selected>--- Taluk Name ---</option>
                    <?php
                        foreach($results as $dname){
                    ?>
                    <option value="<?php echo $dname["name"];?>"><?php echo $dname["name"]; ?></option>
                    <?php
                        }
                    ?>
                </select>

                <!-- Area Name -->
                <select class="aname" name="aname" id="aname_select" onchange="getShop(this.value)">
                    <option value="" disabled selected>--- Area Name ---</option>
                </select>

                <!-- //Shop Name -->
                <select class="sname" name="sname" id="shopname_select">
                    <option value="" disabled selected>------ Shop Name ------</option>
                </select>


                <!-- //Item Name -->
                <select class="iname" name="iname" id="iname">
                    <option value="" disabled selected>------------ Item Name ------------</option>
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
                <input type="number" label="Amount" class="amount" name="credit" id="credit" placeholder="credit">
                <input type="number" label="Amount" class="amount" name="cash" id="cash" placeholder="cash">
                <input type="number" label="Amount" class="amount" name="quantity" id="quantity" placeholder="quantity">
                <button type="submit" value="save" class="btn btn-primary" name="save" id="save"
                    onclick="Submit()">Save</button>
                <button type="button" class="btn btn-primary" name="filter" id="filter" onclick="getData()">Filter</button>

            </div>
        </div>

    </form>
    <!-- Displaying Data -->
    <div class="container">
        <table class="table" id="display">
            <thead>
                <tr>
                    <th scope="col">Sl No</th>
                    <th scope="col">Date of Entry</th>
                    <th scope="col">Taluk Name</th>
                    <th scope="col">Area Name</th>
                    <th scope="col">Shop Name</th>
                    <th scope="col">Item Name</th>
                    <th scope="col">Credit</th>
                    <th scope="col">Cash</th>
                    <th scope="col">Quantity</th>

                </tr>
            </thead>

            <tbody id="GetData">
               
            </tbody>
        </table>
    </div>

    <div class="footer">
        <div class="container text-center">
            <div class="row align-items-start">
                <div class="col">

                    <?php
                    error_reporting(0);
                    include 'connect.php';
                    $sqli1 = "SELECT SUM(Credit) FROM `index` WHERE 1";
                    if(! empty($_POST['dname'])){
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
                    $res1 = $con->query($sqli1);
                    while($row = mysqli_fetch_array($res1)){
                        echo "Total Credit: ". $row['SUM(Credit)'];
                        
                    }
                ?>
                </div>
                <div class="col">

                    <?php
                    error_reporting(1);
                    include 'connect.php';
                    $sqli2 = "SELECT SUM(Cash) FROM `index` WHERE 1";
                    if(! empty($_POST['dname'])){
                        $date1 = $_POST['date1'];
                        $date2 = $_POST['date2'];
                        $dname = $_POST['district'];
                        $area_name=$_POST['aname'];
                        $shop_name=$_POST['sname'];
                        $item_name=$_POST['iname'];
                        
                        
                        if($dname != ""){
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
                        }
                        elseif($date1 != "" && $date2 != ""){
                            $sqli2 .="   AND `Dt_of_Entry` >= '$date1' AND `Dt_of_Entry` <= '$date2'";
                        }
                    }
                    $res2 = $con->query($sqli2);
                    while($row = mysqli_fetch_array($res2)){
                        echo "Total Cash: ". $row['SUM(Cash)'];
                        
                    }
                ?>
                </div>
                <div class="col">
                    <?php
                        error_reporting(1);
                        include 'connect.php';
                        $sqli4 = "SELECT SUM(Credit),SUM(Cash) FROM `index` WHERE 1";
                        if(! empty($_POST['dname'])){
                            $date1 = $_POST['date1'];
                            $date2 = $_POST['date2'];
                            $dname = $_POST['district'];
                            $area_name=$_POST['aname'];
                            $shop_name=$_POST['sname'];
                            $item_name=$_POST['iname'];
                            
                            
                            if($dname != ""){
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
                            }
                            elseif($date1 != "" && $date2 != ""){
                                $sqli4 .="   AND `Dt_of_Entry` >= '$date1' AND `Dt_of_Entry` <= '$date2'";
                            }
                        }
                        $res4 = $con->query($sqli4);

                        while($row = mysqli_fetch_array($res4)){
                            $cash=$row['SUM(Cash)'];
                            $credit=$row['SUM(Credit)'];
                            $due=$cash-$credit;
                            echo "Due Amount: ". $due;
                            
                        }
                    ?>
                </div>
                <div class="col">

                    <?php
                    error_reporting(1);
                    include 'connect.php';
                    $sqli3 = "SELECT SUM(Quantity) from `index` WHERE 1";
                    if(! empty($_POST['dname'])){
                        $date1 = $_POST['date1'];
                        $date2 = $_POST['date2'];
                        $dname = $_POST['district'];
                        $area_name=$_POST['aname'];
                        $shop_name=$_POST['sname'];
                        $item_name=$_POST['iname'];
                        
                        
                        if($dname != ""){
                            if($dname != ""){
                                $sqli3 .= "  AND District_Name = '{$dname}' ";
                            }
                            if($area_name != ""){
                                $sqli3 .= "  AND Area_Name = '{$area_name}'";
                            }
                            if($shop_name != ""){
                                $sqli3 .= "  AND Shop_Name = '{$shop_name}'";
                            }
                            if($item_name != ""){
                                $sqli3 .= "  AND Item_Name = '{$item_name}'";
                            }
                            if($date1 != "" && $date2 != ""){
                                $sqli3 .=" AND `Dt_of_Entry` >= '$date1' AND `Dt_of_Entry` <= '$date2'";
                            }
                        }
                        elseif($date1 != "" && $date2 != ""){
                            $sqli3 .="   AND `Dt_of_Entry` >= '$date1' AND `Dt_of_Entry` <= '$date2'";
                        }
                    }
                    $res3 = $con->query($sqli3);
                    while($row = mysqli_fetch_array($res3)){ 
                        echo "Total Quantity:". $row['SUM(Quantity)'];
                        
                    }
                ?>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
<?php 

?>
<?php
    if(isset($_POST['submit'])){
        include 'AddElement.php';
    }
?>