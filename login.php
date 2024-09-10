<html>
<head>
 		<title> Welcome to Hotel Del Luna </title>
 			<link rel="stylesheet" type="text/css" href="main.css"/>
			<link rel="stylesheet" type="text/css" href="logincss.css">
	</head>
	<body>
		<div class="header">
	<a href="index.php"><img src="img/logo.png" height="auto;" width="77px"></a>
	<center><h1>Hotel Del Luna</h1></center>
<br>
</div>

<div class="headerbtn">
	<ul>
		<li style="float: left; margin-top: -8px;"><a href="index.php">HOME</a></li>
		<li style="float: left;margin-top: -8px;"><a href="about.php">ABOUT</a></li>
		<li style="float: right; margin-right: 35px; margin-top: -8px;"><a href="login.php">ADMIN LOGIN</a></li>
		<li style="float: right; margin-top: -8px; margin-left: 1%; "><a href="reservation.php">RESERVATION</a></li>
		<img src="img/fb.png" style="height:27px; width: 27px; color:black; float: right; margin-top: -10px;">
		<img src="img/ig.png" style="height:37px; width: 37px; color:black; float: right; margin-top: -15px;">
		<img src="img/twitter.png" style="height:30px; width: 30px; color:black; float: right; margin-top: -11px;">
	</ul>
</div>
<center>
<form action="" method="post" id="box">
  <h1 style="color: #FFDC73; margin-top: 14px; font-size:35px; font-family: Corbel; font-stretch: 50; font-weight:bold;">Login</h1>
  <hr>
  <img src="img/logo.png" width="25%" height="auto">
 
  <br>
  <b>Username</b><br>
  <input type="text" name="Username" placeholder="Username">
  <b>Password</b><br>
  <input type="Password" name="Password" placeholder="Password">
  <input type="submit" value="Login" name="Signin">
  <a href="#" style="font-family:Corbel; font-size:12px; font-weight:bold; color:#FFDC73;">Forgot Password</a>
  <br>
  <br>
  <?php
	$user= "admin";
	$pass= "admin";

	if(isset($_POST['Signin'])) {
		if($_POST['Username'] == $user && $_POST['Password'] == $pass) {
			header ("Location: index.php");
		}
		else {
			echo "Incorrect Username or Password";
		}
	}
?>
</form>
</center>
<br>
<br>
<br>
<div class="footer">
		<h4>717.328.0011 &bull; Fairview, Quezon City, Metro Manila, Philippines</h4>
		<p>Hours of Operation&nbsp;&nbsp;&bull;&nbsp;&nbsp;Hotel guest check-ins available daily 3-8 PM&nbsp;&nbsp;&bull;&nbsp;&nbsp;Serving Dinner Tuesday Evenings 5-9 PM</p>
		<img src="img/logo.png" style="height:50px;width:50px;" alt="Hotel Del Luna" /></a>
		<br>
		<a href="#"><i class="fa fa-facebook-official"></i></a> 
		<a href="#"><i class="fa fa-instagram"></i></a>
		<a href="#"><i class="fa fa-twitter"></i></a>
		<br>
		<p>&copy; Copyright 2019 Hotel Del Luna | All Rights Reserved <br /></p>
</div>
</body>
</html>