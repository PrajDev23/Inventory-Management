<?php

$error="";

mysql_connect("localhost","root","bln@23")or dir(mysql_error());

mysql_select_db('demo');

session_start();

if(isset($_POST['submit'])){

$username = $_POST['username'];

$password = $_POST['password'];

if(isset($username) && isset($password)){

$query="SELECT id FROM login WHERE username='$username' and password='$password'";

$result=mysql_query($query);

$row=mysql_fetch_array($result);

$id=$row['id'];

$count=mysql_num_rows($result);

if($count==1)

{

//session_register("username");

$_SESSION['name']=$username;

 

header("location: welcome.php");

}else{

$error = 'please enter username and password';

}

}

}

?>

<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

    <title>login</title>

    <style>
        input {

            color: #4A0000;

            border: 1px solid #4A0000;

        }
    </style>

</head>

<body>

    <div
        style="  background-color: #CCCCCC;border: 1px solid #4A0000;color: #4A0000; margin: auto;padding: 19px 0 18px;width: 295px;">

        <div style="color:#C23D29;padding: 0 10px 15px 38px;">
            <?php echo "$error"; ?>
        </div>

        <form name="login" action="" method="post">

            <div style="text-align:center;">Username :&nbsp;<input type="text" name="username"></div></br>

            <div style="text-align:center;">Password :&nbsp;<input type="password" name="password"></div></br>

            <div style="text-align:center;"><input type="submit" name="submit" value="login"
                    style="margin: 0 -64px 2px 115px;"></div>

        </form>

    </div>

</body>

</html>