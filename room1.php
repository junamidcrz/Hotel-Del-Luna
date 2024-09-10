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
	</ul>
</div>
<br>
<br>
<p class="layout">
<?PHP
echo "<b>Check in: </b>2019-10-12 "."<br>";
echo "<b>Check out: </b>2019-10-19"."<br>";
echo "<b>Adults: </b> 2"."<br>";
echo "<b>Children: </b> 1";
?>
<br>
<div class="roomdetails">
<br>
<center><img src="img/2.jpg" width="350" height="250" style="border:4px #AD9748 solid; margin-right:1%;"></center>
<center> <h3> Deluxe King Room </h3></center>
<ul>
    <li style="margin-right:25%; margin-left:22%; font-size:18px;"> 1 King bed </li>
    <li style="margin-right:25%; margin-left:22%; font-size:18px;">Sleeps up to 2 people </li>
    <li style="margin-right:25%; margin-left:22%; font-size:18px;"> Average Size: 40 sq m / 431 sq ft </li>
    <li style="margin-right:25%; margin-left:22%; font-size:18px;"> Views: Inner courtyard </li>
    <li style="margin-right:25%; margin-left:22%; font-size:18px;"> Connecting Rooms Available on request </li>
    <li style="margin-right:25%; margin-left:22%; font-size:18px;"> Spacious and uniquely furnished </li>
</ul>
<p class="price"> Price: 8,000 pesos/night </p>
<br>
<form action="action2.php">
<center> <button style="height: 45px; width: 191px; border: 6px double #8E793E; background-color:black; font-family:Corbel; font-size:15px; font-weight:bold; color:#FFDC73; "> Book Now! </button> </center> </form>
<form action="action3.php">
<center> <button style="height: 45px; width: 191px; border: 6px double #8E793E; background-color:black; font-family:Corbel; font-size:15px; font-weight:bold; color:#FFDC73;"> Choose another room </button> </center> </form>
</div>
<br>
<br>
<div class="footer">
		<h4>717.328.0011 &bull; Fairview, Quezon City, Metro Manila, Philippines</h4>
		<p>Hours of Operation&nbsp;&nbsp;&bull;&nbsp;&nbsp;Hotel guest check-ins available daily 3-8 PM&nbsp;&nbsp;&bull;&nbsp;&nbsp;Serving Dinner Tuesday Evenings 5-9 PM</p>
		<img src="img/logo.png" style="height:50px;width:50px;" alt="Hotel Del Luna" /></a>
		<br>
		<a href="#"><i class="fa fa-facebook-official" style="font-size:24px; color:gold"></i></a> 
		<a href="#"><i class="fa fa-instagram" style="font-size:24px; color:gold"></i></a>
		<a href="#"><i class="fa fa-twitter" style="font-size:24px; color:gold;"></i></a>
		<br>
		<p>&copy; Copyright 2019 Hotel Del Luna | All Rights Reserved <br /></p>
</div>  
</body>
</html>