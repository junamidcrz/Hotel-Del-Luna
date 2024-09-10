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
<div class="book2details">
<p class="layout">
<?PHP
$a=$_POST['gname'];
$b=$_POST['number'];
$c=$_POST['email'];
$d=$_POST['credit'];
echo "<b>Check in: </b>2019-10-12 "."<br>";
echo "<b>Check out: </b>2019-10-19"."<br><br>";
echo "<b> Guest and Rooms:</b> <br>";
echo "Adults 2, Children 1<br>";
echo "1 Room, 7 nights<br>";
echo "<br>";
echo "<b> Room Selected: </b><br>";
echo "Deluxe Junior Room <br><br>";
echo "<b>Tax Recovery and Fees: </b><br>50,000 pesos<br><br>";
echo "<b>Guest Details </b><br>";
echo "<b>Name: </b>".$a."<br>";
echo "<b>Phone Number: </b>".$b."<br>";
echo "<b>Email: </b>".$c."<br>";
?>
</p>

<div class="nav" style="font-family:Corbel; font-size:17px; margin-left:20%; margin-right:20%;"> Successfully booked and paid under credit card number: 01234567890123456<br>
Here's your confirmation number: #1234567890<br>
Thank You!</div>
<br>
<br>
<form action="reservation.php">
<center> <button style="height: 45px; width: 191px; border: 6px double #8E793E; background-color:black; font-family:Corbel; font-size:15px; font-weight:bold; color:#FFDC73;"> Home </button> </center> </form>
</div>
<br>
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