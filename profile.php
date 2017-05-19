<?php session_start();
if (!isset($_SESSION['id'])) 
	header("location:login.php");
else
   { echo "<li style=\"float:right;margin-right:5px;\"><a href=\"logou.php\" >Logout</a></li>";}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile | Coo!io</title>
	 <link rel="stylesheet" type="text/css" href="profile.css">
	 <script src=""></script>
</head>
<body>
<div class="containerForm">
<div id="userInfo">
<ul>
<?php
$con=mysqli_connect("localhost","root","","classinfo") or die("failed to connect server");
	$query="SELECT * FROM login WHERE id='".$_SESSION['id']."'";
	//echo $query;
	$result=mysqli_query($con,$query);
	while ($row=mysqli_fetch_row($result)) {
		echo "<bold>Full Name:".$row[0]."<br>User Name:".$row[1]."<br>Email:".$row[3]."<br>Institute:<bold>".$row[4];
	}
	
?>
</ul>
</div>
</div>
</body>
</html>