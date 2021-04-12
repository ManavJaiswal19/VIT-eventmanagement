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
<form method="post" action="contact.php">
<table>
<tr>
<th><label>Issue Subject:</label></th>
<td><input type="text" name="isub" placeholder="Subject"></td>
</tr>
<tr>
<th><label>Details:</label></th>
<td><textarea name="details" rows="7" cols="22" style="resize:none;"></textarea></td>
</tr>
</table>
<br><br><center><input type="submit" style="cursor:pointer;">
<input type="reset" style="cursor:pointer;"></center>
</form>

</body>
</html>
<?php
}
else
	header("location:index.php");
?>