<html>
<head>
 		<title> Welcome to Hotel Del Luna </title>
 			<link rel="stylesheet" type="text/css" href="main.css"/>
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

<br>
<br>
<div class="nav"> Online Booking </div>
<br>
<form action="action1.php" method="post">
<p class="layout">
<b> Start Date:</b><br><input type="date" name="start" maxlength="10" style="width:165px; height:37px; margin-left: 15px; border: 5px double #8E793E; padding:5px 10px; font-size:15px; font-weight:bold; color:#A77044; "/><br>
<b> End Date: </b><br><input type="date" name="end" maxlength="10"  style="width:165px; height:37px; margin-left: 15px; border: 5px double #8E793E; padding:5px 10px; font-size:15px; font-weight:bold; color:#A77044;"/><br> 
<b>Adults:</b>
<br>
<select name="DOBadults">
<option value="1"> 1</option>
<option value="2"> 2</option>
<option value="3"> 3</option>
<option value="4"> 4</option>
<option value="5"> 5</option>
<option value="6"> 6</option>
<option value="7"> 7</option>
<option value="8"> 8</option>
</select>
<br>
<b>Children:</b>
<br>
<select name="DOBchildren">
<option value="0"> 0</option>
<option value="1"> 1</option>
<option value="2"> 2</option>
<option value="3"> 3</option>
<option value="4"> 4</option>
<option value="5"> 5</option>
</select>
<br>
<br>
<input type="submit" value="Check Availability" style="margin-left:3%; height: 37px; width: 191px; border: 6px double #8E793E;background-color:black; font-family:Corbel; font-size:15px; font-weight:bold; color:#FFDC73;"/>
</p>
</form>


<br>
<div class="footer">
<h4>717.328.0011 &bull; Fairview, Quezon City, Metro Manila, Philippines</h4>
<p>Hours of Operation&nbsp;&nbsp;&bull;&nbsp;&nbsp;Hotel guest check-ins available daily 3-8 PM&nbsp;&nbsp;&bull;&nbsp;&nbsp;Serving Dinner Tuesday Evenings 5-9 PM</p>
<img src="img/logo.png" style="height:50px;width:50px;" alt="Hotel Del Luna" /></a>
<br>
<p>&copy; Copyright 2019 Hotel Del Luna | All Rights Reserved <br /></p>
</div> 
</body>
</html>