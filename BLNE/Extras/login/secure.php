<?php

mysql_connect("localhost","root","bln@23") or dir(mysql_error());

mysql_select_db('demo');

session_start();

$check=$_SESSION['name'];

$query=mysql_query("select username from login where username='$check' ");

$data=mysql_fetch_array($query);

$user=$data['username'];

if(!isset($user))

{

header("Location: login.php");

}

?>

This is your "welcome.php" file.

 

<html>

<head>

<style>

a{

float:left;

text-decoration:none;

}h1{

color:#008844;  

font-size:20px;

text-align:center;

}

</style>

</head>

<body>

<div style="border: 1px solid #4A0000;color: #4A0000; margin: auto;width: 700px;">

<div style="float:right;">

<?php

include('secure.php');

if($_SESSION['name']){

echo '<a href="logout.php"><input type="submit" name="submit" value="logout"></a>';

}else{

echo '<a href="login.php"><input type="submit" name="submit" value="login"></a>';

}

?>

</div>

<h1>Welcome to the my secret area <?php echo $user; ?></h1>

</div>

</body>

</html>