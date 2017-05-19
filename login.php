
<!DOCTYPE html>
<html>
<head>
	<title>Coo!io | Login</title>
	<link rel="shortcut icon" href="C:\Users\paritosh_kumar20\Desktop\college fest\images\circle.png">
    <style>
	@font-face{
	font-family: Poriet;
	src:url(poriet.ttf);
	font-weight: 100;
}
.dropbtn {
   background-color:rgba(255, 255, 255, 0);
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}
	.containerForm{
	width:400px;
	position:absolute;
	left:50%;
	margin-left:-200px;;
	
	height:220px;	
	top:200px;
	background-color:rgba(0, 0, 0, 0.81);
	box-shadow: 1px 4px 8px 0 rgba(0, 0, 0, 0.25), 0 6px 20px 0 rgba(0, 0, 0, 0.59);
}
.inputTitle{
	color:rgba(255, 255, 255, 0.77);
	font-family:Poriet;
	font-size:22px;
	margin-top:-20px;
	font-weight:400;
	position:relative;
	z-index:2;
	top:60px;
	left:25px;
	display:block;
	width:200px;
	
	
}
.inputField{
	border:0px;
	background-color:white;
	margin:0px auto;
	width:220px;
	height:28px;
	font-size:18px;
	font-weight:100;
	text-align:center;
	position:relative;
 top:8px;
	left:140px;
}
#button{
	position:relative;
	left:50%;
	margin-left:-60px;
	width:120px;
    height:40px;
	background-color:rgba(66, 189, 188, 0.57);
	border:none;
	font:22px Poriet;
	font-weight:100;
	color:rgba(255, 255, 255, 0.83);
	cursor:pointer;
	padding:5px;
	top:15px;
}
.dropdown {
    position: absolute;
    display: inline-block;
	z-index:1000;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
    display: block;
	opacity:0;
    position: absolute;
    background-color: rgba(47, 46, 46, 0.46);
    min-width: 90px;
    box-shadow: 5px 8px 10px 0px rgba(0, 0, 0, 0.07);
	transition:opacity 0.35s ease-in;
}

/* Links inside the dropdown */
.dropdown-content a {
    color: #BDBDBD;
	transition:background-color 0.35s ;
    padding: 12px 14px;
    text-decoration: none;
    display: block;
	font-family:Poriet;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: rgba(47, 46, 46, 0.46);}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
    display: block;
	opacity:1;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
    
}
	</style>

</head>

<body>
<div class="dropdown">
  <button class="dropbtn"><img src="images\menuIcon.png" style="width:30px;opacity:0.5;background-color: black;"></button>
  <div class="dropdown-content">
    <a href="index.html">HOME</a>
    <a href="eventHome.html">EVENTS</a>
    <a href="signup.php">REGISTER</a>
	 <!--<a href="profile.php">REGISTER</a>-->
  </div>
</div>
<div class="containerForm">
<form name="login" action="conlog.php" method="post">
	<p class="inputTitle">User Name:</p><input type="text" name="user" class="inputField"><br><br>
	<p class="inputTitle">Password:</p><input type="password" name="pass" class="inputField"><br><br>
	<p class="inputTitle">Remember me:</p><input type="checkbox" name="rememberme" value="1"></input>
	<input id="button" type="submit" value="Login" name="submit"><br>
</form>
	<div>

</body>
</html>