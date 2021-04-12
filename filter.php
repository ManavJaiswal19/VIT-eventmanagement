<?php
session_start();
if($_SESSION['sid']==session_id())
{
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"event");
$uregno=$_SESSION['id'];

?>
<html>
<head>
<title>UPCOMING EVENTS</title>
<link rel="stylesheet" type="text/css" href="css/upeventstyles.css">
</head>
<body>
<img src="images/vitlogo.png" class="logo">
<ul>
<li><a href="homepage.php">Home</a></li>
<li style="width:204px;"><a href="upevents.php">Upcoming Events</a></li>
<li><a href="gallery.php">Gallery</a></li>
<div class="c1">
<li><a>Explore</a>
<ul>
<li><a href="cultural.php">Cultural</a></li>
<li><a href="sports.php">Sports</a></li>
<li><a href="curtraiser.php"> Curtain Raisers</a></li>
<li><a href="webinar.php"> Webinars</a></li>
<li><a href="others.php">Others</a></li>
</ul></li>
</div>
<li><a href="createevent.php"> Create Event</a></li>
<li><a href="contactus.php"> Contact Us</a></li>
<li id="logout"><a href="logout.php">Log Out</a></li>
</ul><br><br>

<h1>Filtered by:
<?php
echo $_POST['filter'];
?>
</h1>
<a href="upevents.php" style="font-size:20px;color:red;margin-top:0;position:absolute;">Clear filter</a>
<br><br><br>
<div class="content3">
<center>
<h2><u>Events</u></h2>
<table style="color:white;border:2px solid white;font-size:20px;width:800px;">
<tr><th style="border:1px solid white;color:aqua;">Event name</th><th style="border:1px solid white;color:aqua;">Date & Time</th><th style="border:1px solid white;color:aqua;">Venue</th><th style="border:1px solid white;color:aqua;">Price</th></tr>
<tr><th style="border:1px solid white;color:aqua;"></th><th style="border:1px solid white;color:aqua;"></th><th style="border:1px solid white;color:aqua;"></th><th style="border:1px solid white;color:aqua;"></th></tr>
<?php
if($_POST['filter']=="Seminar")
{
$q="select * from upev where Category='Seminar';";
$evdetails=mysqli_query($con,$q);
}
else if($_POST['filter']=="Sports")
{
$q="select * from upev where Category='Sports';";
$evdetails=mysqli_query($con,$q);
}
else if($_POST['filter']=="Music")
{
$q="select * from upev where Category='Music';";
$evdetails=mysqli_query($con,$q);
}
else if($_POST['filter']=="Dance")
{
$q="select * from upev where Category='Dance';";
$evdetails=mysqli_query($con,$q);
}
else if($_POST['filter']=="Hackathon")
{
$q="select * from upev where Category='Hackathon';";
$evdetails=mysqli_query($con,$q);
}
else
{
	header("location:upevents.php");
}
while($r=mysqli_fetch_array($evdetails))
{
?>
<tr><td style="border:1px solid white;color:aqua;"><?php echo $r['Event_name']; ?></td><td style="border:1px solid white;color:aqua;"><?php echo $r['Date_time']; ?></td><td style="border:1px solid white;color:aqua;"><?php echo $r['Venue']; ?></td><td style="border:1px solid white;color:aqua;"><?php echo $r['Cost']; ?></td></tr>
<?php
}
?>
</table>
</center>
<br><br>
</div>

</body>
</html>
<?php
}
else
	header("location:index.php");
?>