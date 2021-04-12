<?php
session_start();
if($_SESSION['sid']==session_id())
{
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"event");
$uregno=$_SESSION['id'];
$q="select * from ev where Reg_no='$uregno';";
$q2="select * from book where Reg_no='$uregno';";
$result=mysqli_query($con,$q);
$evdetails=mysqli_query($con,$q2);
?>
<html>
<head>
<title>VIT Events</title>
<link rel="stylesheet" type="text/css" href="css/homestyles.css">
</head>
<body>
<img src="images/vitlogo.png">
<ul>
<li><a href="homepage.php">Home</a></li>
<li style="width:204px;"><a href="upevents.php">Upcoming Events</a></li>
<li><a href="gallery.php">Gallery</a></li>
<div class="c1"><li><a>Explore</a>
<ul>
<li><a href="cultural.php">Cultural</a></li>
<li><a href="sports.php">Sports</a></li>
<li><a href="curtraiser.php"> Curtain Raisers</a></li>
<li><a href="webinar.php"> Webinars</a></li>
<li><a href="others.php">Others</a></li>
</ul></li></div>
<li><a href="createevent.php"> Create Event</a></li>
<li><a href="contactus.php"> Contact Us</a></li>
<li id="logout"><a href="logout.php">Log Out</a></li>
</ul><br><br>
<hr>
<div class="content1">
<h1><em><u>About Vit Events:-</u></em></h1>
<p><strong>Enchanted with the success of Vibrance, National level Cultural and Sports festival of VIT Chennai, it gives us immense pride and pleasure in 
presenting the 6th Edition Vibrance '21. Be with us on the mid of February 2021 for the extravaganza! The carnival will assure variety
from cricket to chess, dance battles to musical fiestas with the primary objective being - "To explore new talents and impart the qualities to the students."
The event enthralls the attendees by presenting EDM, Proshow and Choreo Night on three nights. We promise the audience and atmosphere of
immense joy, leaving them with the thirst for more and more. In addition to the home crowd, an enormous number of participants from over
100 engineering colleges and universities in and around Chennai and other parts of the country took part in Vibrance '20.</strong></p>
</div>

<div class="content3">
<h2><u>Book Events:-</u></h2>
<ol>
<li><a href="hackathon.html" target="_blank">Hackathon</a></li>
<li><a href="musicclub.html" target="_blank">Music club curtan raiser</a></li>
<li><a href="cultural.php">Vibrance '21</a></li>
<li><a href="AIsem.html" target="_blank">AI & Robotics Seminar</a></li>
</ol>
</div>

<br><br>

<div class="content3">
<h2><u>Your Booking history:</u></h2>
<center>
<table style="color:white;border:2px solid white;font-size:20px;width:600px;">
<tr><th style="border:1px solid white;color:aqua;">Event name</th><th style="border:1px solid white;color:aqua;">Date & Time</th><th style="border:1px solid white;color:aqua;">Venue</th></tr>
<tr><th style="border:1px solid white;color:aqua;"></th><th style="border:1px solid white;color:aqua;"></th><th style="border:1px solid white;color:aqua;"></th></tr>
<?php 
while($r=mysqli_fetch_array($evdetails))
{
?>
<tr><td style="border:1px solid white;color:aqua;"><?php echo $r['Event_name']; ?></td><td style="border:1px solid white;color:aqua;"><?php echo $r['Date_time']; ?></td><td style="border:1px solid white;color:aqua;"><?php echo $r['Venue']; ?></td></tr>
<?php
}
?>
</table>
</center>
</div>

<br><br>

<div class="content3">
<h2><u>Created Event History</u></h2>
<center>
<table style="color:white;border:2px solid white;font-size:20px;width:600px;">
<tr><th style="border:1px solid white;color:aqua;">Event name</th><th style="border:1px solid white;color:aqua;">Status</th></tr>
<tr><th style="border:1px solid white;color:aqua;"></th><th style="border:1px solid white;color:aqua;"></th></tr>
<?php 
while($row=mysqli_fetch_array($result))
{
?>
<tr><td style="border:1px solid white;color:aqua;"><?php echo $row['Event_name']; ?></td><td style="border:1px solid white;color:aqua;"><?php echo $row['Status']; ?></td></tr>
<?php
}
?>
</table>
</center>
</div>

<div class="content2">
<h2><strong><u>What we offer:</u></strong></h2>
<p><strong> Exploring events, Booking tickets, Gallery.<br>
Create and get your own event on site.</strong></p>
</div>


<hr>
<marquee>Contact us for any issues or suggestions.</marquee>
<hr>
<p style="color:white;font-family:sans-serif;font-size:15px;">
Copyright &#169 DilliWale
<span class="follow">
<a href="instagram.com"><img src="images/insta.jpg"></a>  <a href="facebook.com"><img src="images/facebook.jpg"></a>  <a href="twitter.com"><img src="images/twitter.jpg"></a>  <a href="youtube.com"><img src="images/yt.png"></a>
</span>
</p>
</body>
</html>
<?php
}
else
	header("location:index.php");
?>