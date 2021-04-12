<?php
session_start();
if($_SESSION['sid']==session_id())
{
?>
<html>
<head>
<title>GALLERY</title>
<link rel="stylesheet" type="text/css" href="css/gallerystyles.css">
<script>
function openimg(img)
{
var src=img.src;
window.open(src);
}
</script>
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
<center>
<h1>Cultural Fest</h1>
<img src="images/g14.jpg" onclick="openimg(this);">
<img src="images/g9.jpg" onclick="openimg(this);">
<img src="images/g6.jpg" onclick="openimg(this);">
<img src="images/g7.jpg" onclick="openimg(this);">
<img src="images/g1.jpg" onclick="openimg(this);">
<img src="images/g13.jpg" onclick="openimg(this);">
<h1>Vibrance Sports</h1>
<img src="images/g12.jpg" onclick="openimg(this);">
<img src="images/g2.jpg" onclick="openimg(this);">
<img src="images/g3.jpg" onclick="openimg(this);">
<h1>Talent Hunt</h1>
<img src="images/g4.jpg" onclick="openimg(this);">
<img src="images/talenthunt.jpg" onclick="openimg(this);">
<h1>Techno Vit</h1>
<img src="images/g8.jpg" onclick="openimg(this);">
<img src="images/g5.png" onclick="openimg(this);">
<img src="images/g17.jpg" onclick="openimg(this);">
<img src="images/g22.jpg" onclick="openimg(this);">
<img src="images/g18.jpg" onclick="openimg(this);">
<img src="images/g24.jpg" onclick="openimg(this);">
<h1>Music</h1>
<img src="images/g19.jpg" onclick="openimg(this);">
<img src="images/g21.jpg" onclick="openimg(this);">
<img src="images/g20.jpg" onclick="openimg(this);">
<h1>Seminars</h1>
<img src="images/g23.jpg" onclick="openimg(this);">
<img src="images/g25.jpg" onclick="openimg(this);">
<img src="images/g26.jpg" onclick="openimg(this);">
<h1>Others</h1>
<img src="images/g16.jpg" onclick="openimg(this);">
<img src="images/g11.jpg" onclick="openimg(this);">
<img src="images/g15.jpg" onclick="openimg(this);">
<img src="images/g10.jpg" onclick="openimg(this);">
<img src="images/img2.png" onclick="openimg(this);">
</p>
</center>
</body>
</html>
<?php
}
else
	header("location:index.php");
?>