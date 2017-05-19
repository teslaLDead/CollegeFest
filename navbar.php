<?php session_start(); 
$con=mysql_connect("localhost","root","") or die("Failed to connect server");
$db=mysql_select_db("classinfo",$con) or die("Failed to connect to MySQL: " . mysql_error());
if (!empty($db)) {
	echo "connected to database";
	echo $_SESSION['id'];
	$row = mysql_fetch_assoc(mysql_query("SELECT * FROM login WHERE id = '.$_SESSION['id']" ));
	echo $row;
	# code...
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</title>
</head>
<body>
<div id="nav">
  <ul>
  <li><a href="about2.html">About Us</a></li>
  <li><a href="eventHome.html" onclick="lowBarMove()">Events</a></li>
  <li><a href="profile.php">Profile</a></li>
<?php
if (!isset($_SESSION['id'])){
echo " <li style='float:right;margin-right:5px;'><a href=`singup.php` >Register</a></li>
  <li style='float:right'  ><a href=`login.php` style=`cursor:pointer;`>Login</a></li>";
}
else{
 $row = mysql_fetch_assoc(mysql_query("SELECT * FROM login WHERE id = $_SESSION['id']" ));
echo " <li style='float:right;margin-right:5px;'>".$row['user']."</a></li>
  <li style='float:right'  ><a href=`logou.php` style=`cursor:pointer;`>Logout</a></li>";


}

?>

 <!-- <li style="float:right;margin-right:5px;"><a href="singup.php" >Register</a></li>
  <li style="float:right"  ><a href="login.php" style="cursor:pointer;">Login</a></li>
  --></ul></div>

</body>
</html>