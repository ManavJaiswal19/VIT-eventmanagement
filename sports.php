<?php
session_start();
if($_SESSION['sid']==session_id())
{
?>
<html>
<head>
<title>Sports</title>
<link rel="stylesheet" type="text/css" href="css/sportstyles.css">
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
<h1>SPORTS</h1>
<p class="about">
We at VIT believe that education isn't confined to academic excellence, but extends to the overall development of a student. To facilitate this, VIT conducts and takes part in various sports competition.
<br><br>
Sport includes all forms of competitive physical activity or games which, through casual or organized participation, at least in part aim to use, maintain or improve physical ability and skills while providing enjoyment to participants, and in some cases, entertainment for spectators. Sports can bring positive results to one's physical health. Hundreds of sports exist, from those between single contestants, through to those with hundreds of simultaneous participants, either in teams or competing as individuals.
</p>
<br>

<div class="about">
<span class="vb">Football</span>
<br><br><center>
<img src="images/g12.jpg"> 
<img src="images/img5.jpg"> 
<img src="images/img6.jpg">
</center>
<br>
<p class="c2">Achievements (2019-2020)<br>
&#9830 IIT Madras Tournament - WINNERS<br>
&#9830 SRM Memorial Tornament - RUNNER UP<br>
&#9830 Shastra Sports Fest - RUNNER UP<br>
&#9830 Reliance Football Tournament - Third place
</p>
</div>
<br>

<div class="about">
<span class="vb">Basketball</span>
<br><br><center>
<img src="images/img8.jpg"> 
<img src="images/img7.jpg"> 
<img src="images/img9.jpg">
</center>
<br>
<p class="c2">Achievements (2019-2020)<br>
&#9830 IIT Madras Tournament - WINNERS<br>
&#9830 SRM Memorial Tornament - RUNNER UP<br>
&#9830 Shastra Sports Fest - RUNNER UP<br>
&#9830 Satyabama Tournament - Third place
</p>
</div>
<br>
<a id="matches">
<div class="about">
<span class="vb">Upcoming Matches</span>
<br><br><center>
<p class="c3">
<table>
<tr>
<th>Tournament</th>
<th>Date</th>
<th>Time</th>
<th>Place</th>
<th>Fixture</th>
</tr>
<tr>
<td>Vibrance</td>
<td>16-02-21</td>
<td>4:00 pm</td>
<td>VIT Football ground</td>
<td>Football(VIT Vs GBU)</td>
</tr>
<tr>
<td>Vibrance</td>
<td>14-02-21</td>
<td>9:00 am</td>
<td>VIT Basketball court</td>
<td>Basketball(VIT Vs Satyabama)</td>
</tr>
<tr>
<td>Shastra Sports Fest</td>
<td>24-02-21</td>
<td>7:00 pm</td>
<td>IIT Madras</td>
<td>Football(VIT Vs IIT)</td>
</tr>
<tr>
<td>Shastra Sports Fest</td>
<td>28-02-21</td>
<td>6:00 pm</td>
<td>IIT Madras</td>
<td>Basketball(VIT Vs Symbiosis)</td>
</tr>
</table>
</p>
</center
</div>
</a>
</body>
</html>
<?php
}
else
	header("location:index.php");
?>