<?php
$con=mysql_connect("localhost","root","") or die("Failed to connect server");
$db=mysql_select_db("classinfo",$con) or die("Failed to connect to MySQL: " . mysql_error());
if(isset($_POST['submit'])) {
    if (!empty($db) && !empty($_POST['user']) && !empty($_POST['pass'])) {
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $row = mysql_fetch_assoc(mysql_query("SELECT * FROM login WHERE userName = '$_POST[user]' AND pass = '$_POST[pass]'" ));
    if(!empty($row)){
        session_start();
        $_SESSION['id']=$row['id'];
        $_SESSION['username']=$row['username'];
        header('location:index.php');
        //echo $_SESSION['id'].$_SESSION['username'];
    }else{header('location:login.php');}

}else{header('location:login.php');
        echo"Fill in the details";}

}
//echo "connected to data base";

?>

