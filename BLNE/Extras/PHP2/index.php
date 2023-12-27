<?php
    require_once("dbcontroller.php");
    $db_handle = new DBController();
    $query = "SELECT * FROM country";
    $results = $db_handle->runQuery($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="jquery-3.6.3.min.js" type="text/javscript"></script>
    <script src="jquery-ui.min.js" type="text/javscript"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="index.js" defer></script>
    <!-- //     window.onload = function () {
    //         var country = document.getElementById("country-list").value
    //         console.log(country),
    //         document.getElementById('country-list').addEventListener('change', function () {
    //         $.ajax({
    //             type: "POST",    
    //             url: "getState.php",
    //             data: 'country_id='+country,
    //             success: function (data) {
    //                 $("#state-list").html(data);
    //                 getCity();
    //             }
                
    //         });
            
    //     });
    // }     
    </script> -->
    
</head>
<body>
    <div class="frm">
        <h2>Dependent Dropdown</h2>
            <div class="row">
                <label>Country :</label><br>
                <select name="country" id="country-list" class="InputBox" onchange="getState(this.value)">
                    <option value disabled selected>Select Country</option>
                    <?php
                        foreach($results as $country){
                    ?>
                    <option value="<?php echo $country["country_name"];?>"><?php echo $country["country_name"]; ?></option>
                    <?php
                        }
                    ?>
                </Select>
            </div>    
            <div class="row">
                <label>State :</label><br>
                <select name="state" id="state-list" class="InputBox" onchange="getCity(this.value);">
                    <option value disabled selected>Select State</option>
                </Select>
            </div>
            <div class="row">
                <label>City :</label><br>
                <select name="city" id="city-list" class="InputBox">
                    <option value disabled selected>Select City</option>
                </Select>
            </div>
</body>
</html>