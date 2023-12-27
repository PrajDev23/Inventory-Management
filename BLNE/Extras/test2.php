<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLN Enterprises - Data Entry</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script>
    $(document).ready(function () {
    $("#filter").click(function () {
        $("#display").hide();
    });
    $("#filter").click(function () {
        $("#display").show();
    });

});
    </script>
    <style>
        * {
            padding: 0;
            border: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #e0e0e0;
            font-size: medium ;
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
        }
        #save {
            font-size: medium;
            padding: 2px;
            float: right;
            height: 28px;
        }
        #filter {
            font-size: medium;
            padding: 2px;
            float: right;
            height: 28px;
        }

        .form {
            align-items: center;
            box-sizing: border-box;
            margin: auto 10%;
        }

        .amount {

            height: auto;
            width: 70px;
            align-items: center;
            text-align: center;
        }

        */
    </style>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-DOXMLfHhQkvFFp+rWTZwVlPVqdIhpDVYT9csOnHSgWQWPX0v5MCGtjCJbY6ERspU" crossorigin="anonymous">
    <script src="index.js" defer></script>
    <script src="test2.js" defer></script>
</head>

<body>
    <div>
        <a href="index.php"><button id="refresh" class="btn btn-primary">Refresh</button></a>

    </div>



    <form method="post" class="heading">
        <div class="form">
            <div class="category_div" id="category_div">
                <!-- //District Name -->
                <select class="district" name="district" id="dname-select" onchange="updateAname()">
                    <option value="" disabled selected>--- Taluk Name ---</option>
                </select>

                <!-- Area Name -->
                <select class="aname" name="aname" id="aname-select" onchange="updateShopname()">
                    <option value="" disabled selected>--- Area Name ---</option>
                </select>

                <!-- //Shop Name -->
                <select class="sname" name="sname" id="shopname-select">
                    <option value="" disabled selected>--- Shop Name ---</option>
                </select>


                <!-- //Item Name -->
                <select class="iname" name="iname">
                    <option value=""disabled selected>------------ Item Name ------------</option>
                    <option>Cash</option>
                    <option>Currency PCS Terminal Transfer</option>
                    <option>Discount if any given</option>
                    <option>EWP - MI Warranty Extension</option>
                    <option>GLK Kit</option>
                    <option>IDBI Current Account Transfer</option>
                    <option>Installation</option>
                    <option>MI Corner Wall Mount</option>
                    <option>MI Wall Mount</option>
                    <option>MI Water Filter</option>
                    <option>Others</option>
                    <option>Recharge</option>
                    <option>Salary/Incentive/Call Payment</option>
                    <option>SBI Saving Account Transfer</option>
                    <option>Spare Part Sales</option>
                    <option>Stabilizers</option>
                </select>
                <input type="number" label="Amount" class="amount" name="credit" placeholder="credit">
                <input type="number" label="Amount" class="amount" name="cash" placeholder="cash">
                <input type="number" label="Amount" class="amount" name="quantity" placeholder="quantity">
                <button type="submit" value="save" class="btn btn-primary" name="save" id="save">Save</button>
                <button type="submit" class="btn btn-primary" name="filter" id="filter">Filter</button>
            
            </div>
        </div>

    </form>
       <!-- Displaying Data -->
    <div class="container" id="display">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Sl No</th>
                    <th scope="col">Date of Entry</th>
                    <th scope="col">Area Name</th>
                    <th scope="col">Shop Name</th>
                    <th scope="col">Item Name</th>
                    <th scope="col">Credit</th>
                    <th scope="col">Cash</th>
                    <th scope="col">Quantity</th>

                </tr>
            </thead>

            <tbody>
                                        <!-- Displaying Data -->
                <?php
                                        include 'connect.php';
                                        $sql="SELECT * FROM `blne1`";
                                        $result=mysqli_query($con,$sql);
                                        if($result){
                                            $counter = 0;
                                        while($row=mysqli_fetch_assoc($result)){

                                        $date = $row['Dt. of Entry'];
                                        $dname=$row['District Name'];
                                        $aname=$row['Area Name'];
                                        $sname=$row['Shop Name'];
                                        $iname=$row['Item Name'];
                                        $credit=$row['Credit'];
                                        $cash=$row['Cash'];
                                        $quantity=$row['Quantity'];
                                        
                                    
                                        
                                        // $date = $row['Dt. of Entry'];
                                        // $dname=$row['District Name'];
                                        // $aname=$row['Area Name'];
                                        // $sname=$row['Shop Name'];
                                        // $iname=$row['Item Name'];
                                        // $credit=$row['Credit'];
                                        // $cash=$row['Cash'];
                                        // $quantity=$row['Quantity'];

                                        echo '<tr>
                                            <th scope="row">'.++$counter.'</th>
                                            <td>'.$date.'</td>
                                            <td>'.$aname.'</td>
                                            <td>'.$sname.'</td>
                                            <td>'.$iname.'</td>
                                            <td>'.$credit.'</td>
                                            <td>'.$cash.'</td>
                                            <td>'.$quantity.'</td>
                                        </tr>';
                   
                   }
                   

                }
            ?>
            </tbody>
        </table>
    </div>

    <!-- Sorting -->
    <div class="container" id="filter_display">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Sl No</th>
                    <th scope="col">Date of Entry</th>
                    <th scope="col">Area Name</th>
                    <th scope="col">Shop Name</th>
                    <th scope="col">Item Name</th>
                    <th scope="col">Credit</th>
                    <th scope="col">Cash</th>
                    <th scope="col">Quantity</th>

                </tr>
            </thead>

            <tbody>
                                        <!-- Displaying Data -->
                <?php
                                        include 'connect.php';
                                        $sql="SELECT * FROM `blne1`";
                                        $result=mysqli_query($con,$sql);
                                        if($result){
                                            $counter = 0;
                                        while($row=mysqli_fetch_assoc($result)){

                                        $date = $row['Dt. of Entry'];
                                        $dname=$row['District Name'];
                                        $aname=$row['Area Name'];
                                        $sname=$row['Shop Name'];
                                        $iname=$row['Item Name'];
                                        $credit=$row['Credit'];
                                        $cash=$row['Cash'];
                                        $quantity=$row['Quantity'];
                                        
                                    
                                        
                                        // $date = $row['Dt. of Entry'];
                                        // $dname=$row['District Name'];
                                        // $aname=$row['Area Name'];
                                        // $sname=$row['Shop Name'];
                                        // $iname=$row['Item Name'];
                                        // $credit=$row['Credit'];
                                        // $cash=$row['Cash'];
                                        // $quantity=$row['Quantity'];

                                        echo '<tr>
                                            <th scope="row">'.++$counter.'</th>
                                            <td>'.$date.'</td>
                                            <td>'.$aname.'</td>
                                            <td>'.$sname.'</td>
                                            <td>'.$iname.'</td>
                                            <td>'.$credit.'</td>
                                            <td>'.$cash.'</td>
                                            <td>'.$quantity.'</td>
                                        </tr>';
                   
                   }
                   

                }
            ?>
            </tbody>
        </table>
    </div>
</body>

</html>


<?php
                    include 'connect.php';
                    if(isset($_POST['save'])){
                        $dname = $_POST['district'];
                    $area_name=$_POST['aname'];
                    $shop_name=$_POST['sname'];
                    $item_name=$_POST['iname'];
                    $credit=$_POST['credit'];
                    $cash=$_POST['cash'];
                    $quantity=$_POST['quantity'];

        // <!-- Insert into table -->
                    $sql= "INSERT INTO `blne1`(`District Name`, `Area Name`, `Shop Name`, `Item Name`, `Credit`, `Cash`, `Quantity`)
                    VALUES ('$dname','$area_name','$shop_name','$item_name','$credit','$cash','$quantity')";
                    $result=mysqli_query($con,$sql);
                    if($result){
                        echo '<script>alert("Data inserted successfully")</script>';
    }
    else{
    die(mysqli_error($con));
    }
    }
    ?>