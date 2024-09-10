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
<p class="layout">
<?PHP
echo "<b>Check in: </b>2019-10-12 "."<br>";
echo "<b>Check out: </b>2019-10-19"."<br><br>";
echo "<b> Guest and Rooms:</b> <br>";
echo "Adults 2, Children 1<br>";
echo "1 Room, 7 nights<br>";
echo "<br>";
echo "<b> Room Selected: </b><br>";
echo "Deluxe Junior Room   <br><br>";
echo "<b>Tax Recovery and Fees: </b><br>50,000 pesos";
?>
</p>
<div class="book2details">
<div class="nav" style="font-family:Corbel; font-size:17px;"> Guest Details </div>
<div class="guest">
<form action="action10.php" method="post">
<b> Guest Name: </b><br><input type="text" name="gname" maxlength="20" placeholder="Fullname of one of the guest" style="width:220px; height:37px; margin-left: 15px; border: 5px double #8E793E; padding:5px 10px; font-size:15px; font-weight:bold; color:#A77044; "/><br>
<b> Phone Number: </b><br><input type="phone" name="number" maxlength="11" placeholder="Phone Number" style="width:220px; height:37px; margin-left: 15px; border: 5px double #8E793E; padding:5px 10px; font-size:15px; font-weight:bold; color:#A77044;"/><br> 
<b> Email:</b><br><input type="email" name="email" maxlength="30" placeholder="Email" style="width:220px; height:37px; margin-left: 15px; border: 5px double #8E793E; padding:5px 10px; font-size:15px; font-weight:bold; color:#A77044; "/><br>
<br>
<div class="nav" style="font-family:Corbel; font-size:17px; margin-left:20%;
	margin-right:20%;"> Credit Card Details </div>
<br><input type="name" name="credit" maxlength="16" placeholder="Card Number" style="width:220px; height:37px; margin-left: 15px; border: 5px double #8E793E; padding:5px 10px; font-size:15px; font-weight:bold; color:#A77044; "/><br>
<br>
<select name="DOBMonth">
<option> Month </option>
<option value="January"> January </option>
<option value="February"> February </option>
<option value="March"> March </option>
<option value="April"> April </option>
<option value="May"> May </option>
<option value="June"> June </option>
<option value="July"> July </option>
<option value="August"> August </option>
<option value="September"> September </option>
<option value="October"> October </option>
<option value="November"> November </option>
<option value="December"> December </option>
</select>

<select name="DOBYear">
<option> Year </option>
<option value="2000"> 2000 </option>
<option value="2001"> 2001 </option>
<option value="2002"> 2002 </option>
<option value="2003"> 2003 </option>
<option value="2004"> 2004 </option>
<option value="2005"> 2005 </option>
<option value="2006"> 2006 </option>
<option value="2007"> 2007 </option>
<option value="2008"> 2008 </option>
<option value="2009"> 2009 </option>
<option value="2010"> 2010 </option>
<option value="2011"> 2011 </option>
<option value="2012"> 2012 </option>
<option value="2013"> 2013 </option>
<option value="2014"> 2014 </option>
<option value="2015"> 2015 </option>
<option value="2016"> 2016 </option>
<option value="2017"> 2017 </option>
<option value="2018"> 2018 </option>
<option value="2019"> 2019 </option>
</select>
<br>
<br>
<input type="password" name="cvv" maxlength="4" placeholder="CVV" style="width:120px; height:37px; margin-left: 15px; border: 5px double #8E793E; padding:5px 10px; font-size:15px; font-weight:bold; color:#A77044; "/><br>
<br>
<input type="submit" value="Complete Booking" style="margin-left:3%; height: 37px; width: 191px; border: 6px double #8E793E;background-color:black; font-family:Corbel; font-size:15px; font-weight:bold; color:#FFDC73;"/>
</form>
</div>
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