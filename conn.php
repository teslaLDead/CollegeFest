<?php 
$con=mysql_connect("localhost","root","") or die("Failed to connect server");
$db=mysql_select_db("classinfo",$con) or die("Failed to connect to MySQL: " . mysql_error());
function NewUser()
{
	$fullname = mysql_real_escape_string(htmlentities($_POST['name']));
	$userName = mysql_real_escape_string(htmlentities($_POST['user']));
	$email = mysql_real_escape_string(htmlentities($_POST['email']));
	$password = mysql_real_escape_string(htmlentities($_POST['pass']));
	$institute= mysql_real_escape_string(htmlentities($_POST['institute']));
	$phone= mysql_real_escape_string(htmlentities($_POST['phone']));	
	
	$query = "INSERT INTO `login` (fullname,userName,pass,email,institute,phone) VALUES ('$fullname','$userName','$password','$email','$institute','$phone')";
	$data = mysql_query ($query)or die(mysql_error());
	if($data)
	{
    header('location:eventHome.html');  
	echo "YOUR REGISTRATION IS COMPLETED...";
   

	}
}
function SignUp()
{
	if(!empty($_POST['user']))   
	{
		$query = mysql_query("SELECT * FROM login WHERE userName = '$_POST[user]' AND pass = '$_POST[pass]'") or die(mysql_error());

		if(!$row = mysql_fetch_array($query) or die(mysql_error()))
			NewUser();
		else
			echo "SORRY...YOU ARE ALREADY REGISTERED USER...";
	}
}

if(isset($_POST['submit']))
	SignUp();
?>