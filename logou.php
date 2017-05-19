<?php 
function logout()
{
	unset($_SESSION['id']);
	unset($_SESSION['username']);
}
logout();
header('location:login.php');
 ?>