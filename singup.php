<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP | Coo!io</title>
	<link rel="shortcut icon" href="images\circle.png">
	 <link rel="stylesheet" type="text/css" href="reg.css">
	 <script src=""></script>
</head>
<body style="background-color:white;">

<div class="dropdown">
  <button class="dropbtn"><img src="images\menuIcon.png" style="width:30px;opacity:0.5;"></button>
  <div class="dropdown-content">
    <a href="index.html">HOME</a>
    <a href="eventHome.html">EVENTS</a>
    <a href="signup.php">REGISTER</a>
	 <a href="profile.php">REGISTER</a>
  </div>
</div>
<div class="containerForm">
<h1 class="headTitle">REGISTER</h1>
<form method="post" id="validate-form" action="conn.php">
<p class="inputTitle">Name:</p><input type="text" name="name" class="inputField"></input><br>
<p class="inputTitle">User Name:</p><input type="text" name="user" class="inputField"></input><br>
<p class="inputTitle">Email Id:</p><input type="text" name="email" class="inputField"></input><br>
<p class="inputTitle">Contact:</p><input type="text" name="phone" class="inputField"></input><br>
<p class="inputTitle">Institute Name:</p><input type="text" name="institute" class="inputField"></input><br>
<p class="inputTitle">Password:</p><input id="pass" type="password" name="pass" class="inputField"></input><br>
<p class="inputTitle">Retype Password:</p><input type="password" name="cpass" class="inputField"></input><br>

<br>
<button id="button" type="submit" name="submit" onclick="">Register</button>
</form>

</div>

<script src="js/jquery.min.js"></script>
<script src="js/jquery.validate.js"></script>
<script>
	
		//console.log("CLicked");
		$("#validate-form").validate({

		rules: {
		name: {required: true},
		user: {required: true, minlength: 6, maxlength: 20},
		email1: {
		required: true,
		email: true //email is required AND must be in the form of a valid email address
		},
		pass: {
		required: true,
		minlength: 6
		},
		cpass:{
			required: true,
			equalTo: "#pass"
		},
		phone:{
			required:true,
			minlength:10,
			maxlength:10

		}
		},

		 
	
		messages: {
		name: "required!",
		user: "required!",
		pass: {
		required: " required!",
		minlength: "                                                           Your password must be at least 6 characters long"
		},
		email: "                                                                Please enter a valid email address"
		},
		 
		submitHandler: function(form){
		form.submit();
		}
		 
		});
</script>
</body>
</html>