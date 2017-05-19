<?php 
session_start();
$con=mysql_connect("localhost","root","") or die("Failed to connect server");
$db=mysql_select_db("classinfo",$con) or die("Failed to connect to MySQL: " . mysql_error());
mysql_query("UPDATE `login` SET `technosol`='1' WHERE `id`=".$_SESSION['id']);

 ?>