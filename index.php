<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLN Enterprises - Data Entry</title>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        #Data {
            <?php if ($_SESSION['username'] != "root") { ?>margin-right: 5%;
            margin-left: 5%;
            <?php } ?>
        }
    </style>

    <link href="css/jquery.datepick.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-DOXMLfHhQkvFFp+rWTZwVlPVqdIhpDVYT9csOnHSgWQWPX0v5MCGtjCJbY6ERspU" crossorigin="anonymous">

    <script src="js/jquery.plugin.min.js"></script>
    <script src="js/jquery.datepick.js"></script>

</head>

<body onload="getDname()">
    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color:#c0ffc2;padding-bottom: 0%;">
        <div class="container-fluid">
            <div class="dropdown">
                <img src="images/profile.png" height="50px" class="dropbtn">
                <div class="dropdown-content" style="left:0;">
                    <a href="logout.php" onclick="alert('Logged out Successfully');">Log Out</a>
                    <?php if ($_SESSION['username'] == 'root') { ?><a href="#" onclick="dashboard(1)">Dashboard</a>
                        <a href="#" onclick="dashboard(0)">Log Out of PHP Admin</a><?php } ?>
                </div>
            </div>
            <h1 style="text-align:center;font-size: 270%;margin-right:45%;font-weight:500;">Billing</h2>

                <!-- <p style="float: right;">
    <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
</p> -->

        </div>
    </nav>
    <div id="heading1">
        <?php echo "Filter Status: OFF"; ?>
    </div>
    <div id="getCredit">

    </div>
    <div id="alert"></div>
    <div>
        <a><button id="refresh" class="btn btn-primary" onclick="reload()">Refresh</button></a>
        <input type="text" id="search_shop" name="search_shop" maxlength="32" placeholder="Shop Name" onkeyup="search(this.value),getData13()">
        <input type="text" id="serial_search" placeholder="Serial No" onkeyup="getData14()"><br>
        <br>


    </div>
    <button class="btn btn-primary" id="add_element1">Add</button>
    <br><br>
    <div class="floating-div" id="floatingDiv">

        <span class="close-button" onclick="closeFloatingDiv()">&times;</span>
        <div>
            <div class="low" id="low">

            </div>
        </div>
    </div>
    <!-- END -->
    <!-- The Modal -->
    <div id="content1" class="modal1">

        <!-- Modal content -->
        <div id="open_window1">
            <span class="close1">&times;</span>
            <div id="content" style="padding-left:2.5%;">
                <div id="add_elem">
                    <br>
                    <br><br>
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
                        <div id="shop_search">

                        </div>


                    </div>

                    <div id="shop_elem">
                        <fomr method="POST">
                            <br>
                            <select id="taluk_shop" onchange="getAname1(this.value)">
                                <option value="" disabled selected>--- Taluk Name ---</option>
                            </select>
                            <!-- Area Name For Shop -->
                            <select id="area_shop">
                                <option value="" disabled selected>--- Area Name ---</option>
                            </select>
                            <input type="text" id="add_shop" maxlength="32" placeholder="Shop Name">
                            <input type="number" id="phno" maxlength="10" placeholder="Phone No">
                            <button class="btn btn-primary" id="createShop" onclick="addShop()">Save</button>
                            </form>
                            <!-- Trigger/Open The Modal -->
                            <div id="shop_search">
                                <table id="searc_shop" class="table table-success table-striped-columns">
                                </table>
                            </div>



                    </div>

                    <div id="area_elem">
                        <form method="POST">
                            <br>
                            <select id="taluk_area">
                                <option value="" disabled selected>--- Taluk Name ---</option>
                            </select>
                            <input type="text" id="area_name" maxlength="32" placeholder="Area Name">
                            <button class="btn btn-primary" id="createArea" onclick="addArea()">Save</button>
                        </form>
                        <div id="shop_search">

                        </div>
                    </div>

                    <div id="taluk_elem">
                        <form method="POST">
                            <br>
                            <input type="text" id="add_taluk" maxlength="32" placeholder="Taluk Name">
                            <button class="btn btn-primary" id="createTaluk" onclick="addTaluk()">Save</button>
                        </form>
                        <div id="shop_search">

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    </div>
    <div id="search_div" class="container">
        <table style="width:100%" id="search_cust" class="table table-success table-striped-columns">

        </table>
    </div>

    <br>
    <br>
    <form method="post" class="heading" id="form">

        <div class="date">
            <input type="text" size="10" name="date1" id="date1" placeholder="Start Date"><span> TO </span><input type="text" placeholder="End Date" size="10" name="date2" id="date2">
            <script>
                $(function() {
                    $('#date1').datepick({
                        dateFormat: 'yyyy-mm-dd',

                    });
                });
                $(function() {
                    $('#date2').datepick({
                        dateFormat: 'yyyy-mm-dd',
                        onSelect: function(dateText, inst) {
                            getData13();
                        }
                    });
                });
                $(function() {
                    $('#date_main').datepick({
                        dateFormat: 'yyyy-mm-dd'
                    });
                });
            </script>
            <input type="text" id="low_quantity" style="width:50px;float:right;background-color:'#e0e0e0';" placeholder="Set" value=3 onkeyup="quantity_status()">
            <button id="open-button" type="button" class="btn btn-primary" onclick="openFloatingDiv()">Low!</button>
        </div>
        <!-- Low Quantity -->


        <div class="form">
            <div class="category_div" id="category_div">
                <input type="text" size="10" name="date_main" id="date_main" placeholder="Date of Entry">
                <!-- //District Name -->

                <select class="district" name="district" id="dname_select" onchange="getAname(this.value),getData13()">
                    <option value="" selected>--- Taluk Name ---</option>
                </select>

                <!-- Area Name -->
                <select class="aname" name="aname" id="aname_select" onchange="getShop(this.value),getData13()">
                    <option value="" disabled selected>--- Area Name ---</option>
                </select>

                <!-- //Shop Name -->
                <select onchange="getData13()" class="sname" name="sname" id="shopname_select">
                    <option value="" disabled selected>------ Shop Name ------</option>
                </select>


                <!-- //Item Name -->
                <select class="iname" name="iname" id="iname" onchange="getData13()">
                    <option value="" selected>------------ Item Name ------------</option>
                </select>
                <input type="number" label="Amount" class="amount" name="credit" id="credit" placeholder="Transfered">
                <input type="number" label="Amount" class="amount" name="cash" id="cash" placeholder="Activated">
                <!-- <input type="number" label="Amount" class="amount" name="quantity" id="quantity" placeholder="quantity"> -->
                <textarea rows="1" cols="20" id="comment" placeholder="Remarks..." onkeyup="getData13()"></textarea>
                <div>
                    <?php if ($_SESSION['username'] != "guest") { ?>
                        <button type="button" class="btn btn-primary" id="save" onclick="Submit(),resetComment()" style="position:relative;">Save</button>
                    <?php } ?>
                    <button type="button" class="btn btn-primary" id="filter" value="0" onclick="filter1(),filter_status1(this.value)">Filter</button>
                    <button type="reset" id="reset" class="btn btn-primary" onclick="reset1()">Reset</button>
                </div>
            </div>

        </div>

    </form>
    <br>
    <br>
    <!-- Displaying Data -->
    <div id="Data">
        <table class="table table-success table-striped-columns" id="display">
            <thead>
                <div>
                    <tr class="red">
                        <?php
                        if ($_SESSION['username'] == 'root') {
                        ?>
                            <th scope="col" style="text-align:center;">Entered By</th>
                        <?php
                        }
                        ?>
                        <th scope="col" style="text-align:center;">Sl No</th>
                        <th scope="col" style="text-align:center;">Date of Entry</th>
                        <th scope="col">Taluk Name</th>
                        <th scope="col" style="text-align:center;">Area Name</th>
                        <th scope="col" style="text-align:center;">Shop Name</th>
                        <th scope="col" style="text-align:center;">Item Name</th>
                        <th scope="col">Available</th>
                        <th scope="col">Activated</th>
                        <th scope="col">Remarks</th>


                    </tr>
                </div>
            </thead>

            <tbody id="GetData" class="table-group-divider">

            </tbody>
        </table>
    </div>
    <footer>
        <script src="index.js?4"></script>
        <link rel="stylesheet" type="text/css" href="styles.css?3">
        <input type="text" value="<?php echo $_SESSION['username']; ?>" hidden id="username" name="user" disabled />
        <input type="text" id="password" value="<?php echo $_SESSION['password']; ?>" hidden disabled />
    </footer>
</body>

</html>