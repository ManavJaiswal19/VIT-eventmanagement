<?php
session_start();
if($_SESSION['sid']==session_id())
{
?>
<html>
<head>
<title>Curtain Raisers</title>
<link rel="stylesheet" type="text/css" href="css/curtraiser.css">
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
</ul><br><br>
<h1>Music Curtain Raiser</h1>
<div class="about">
<p>VIT Curtain Raiser is an engaging work, full of fervent energy and 
exuberance.The Music Society of VIT College will be held on on mid-March. 
The curtain raiser would see a spectrum of Western and Indian Music 
competitions being held in the Amphitheatre. The following are the forms 
of music that will be performed:</p>
<div class="tab"><center>
<table border="1">
<tr>
<th>S.No.</th>
<th>Forms</th>
</tr>
<tr>
<td>1.</td>
<td>Battle of Bands</td>
</tr>
<tr>
<td>2.</td>
<td>Solo Instrumental</td>
</tr>
<tr>
<td>3.</td>
<td>Solo Vocals</td>
</tr>
</table></div><br>
<div class="img1"><center>
<img src="images/g21.jpg">
<img src="images/g20.jpg">
</div></div>
<h1>Dance Curtain Raiser</h1>
<div class="about">
<p>Dance Club promote the dance art form both regional and western and 
give opportunity for students to perform. Dance Club also helps the 
students of VIT to explore themselves in terms of their dancing talents 
and encourages them to participate in all on-going events by conducting 
routing workshops which are held by trained and professional dancers with 
highly prosperous backgrounds. This motivates the students to grow in 
terms of their dancing abilities and in turn helps them to develop their 
dancing skills. Members have been so victorious with regard to competitions 
that are held across the country and have managed to triumph in all of 
them.The following are the dance forms that will be performed:-</p>
<div class="tab"><center>
<table border="1">
<tr>
<th>S.No.</th>
<th>Forms</th>
</tr>
<tr>
<td>1.</td>
<td>Classical</td>
</tr>
<tr>
<td>2.</td>
<td>Western</td>
</tr>
<tr>
<td>3.</td>
<td>Regional</td>
</tr>
</table></div><br>
<div class="img1"><center>
<img src="images/g1.jpg">
<img src="images/g4.jpg">
</div></div>

</body>
</html>
<?php
}
else
	header("location:index.php");
?>