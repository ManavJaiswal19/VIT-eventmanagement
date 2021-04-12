<?php
session_start();
if($_SESSION['sid']==session_id())
{
?>
<html>
<head>
<title>Contact Us</title>
<link rel="stylesheet" type="text/css" href="css/createstyles.css">
</head>

<body>
<img src="images/vitlogo.png" style="height:50pt;width:130pt;">
<ul>
<li><a href="homepage.php">Home</a></li>
<li style="width:204px;"><a href="upevents.php">Upcoming Events</a></li>
<li><a href="gallery.php">Gallery</a></li>
<li class="explore">Explore
<ul>
<li><a href="cultural.php">Cultural</a></li>
<li><a href="sports.php">Sports</a></li>
<li><a href="curtraiser.php"> Curtain Raisers</a></li>
<li><a href="webinar.php"> Webinars</a></li>
<li><a href="others.php">Others</a></li>
</ul></li>
<li><a href="createevent.php"> Create Event</a></li>
<li><a href="contactus.php"> Contact Us</a></li>
<li id="logout"><a href="logout.php">Log Out</a></li>
</ul><br>
<h6 style="font-size:50px;text-align:center;margin-top:100px;">Issue Raised!!</h6>
</body>
</html>
<?php
$sub = "Issue Subject: ".$_POST['isub'];
$msg = "Raised by:".$_SESSION['id']."\n".$_POST['details'];
$email="eventmanagesystem@gmail.com";
mail($email,$sub,$msg);
}
else
	header("location:index.php");
?>


