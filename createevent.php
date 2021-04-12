<?php
session_start();
if($_SESSION['sid']==session_id())
{
?>
<html>
<head>
<title>Create event</title>
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
<form method="post" action="createev.php" enctype="multipart/form-data">
<table>
<tr>
<th><label>Name:</label></th>
<td><input type="text" name="name" placeholder="Enter your Full Name" pattern="[A-Za-z]+\s*[A-Za-z]*" value="<?php echo $_SESSION['name'];?>" readonly></td>
</tr>
<tr>
<th><label>Register no:</label></th>
<td><input type="text" name="rno" placeholder="Enter your Register No" pattern="[1-9]{2}[A-Z]{3}[0-9]{4}" value="<?php echo $_SESSION['id'];?>" readonly></td>
</tr>
<tr>
<th><label>Event Name:</label></th>
<td><input type="text" name="eventname" placeholder="Enter Event Name" pattern="[A-Za-z]+\s*[A-Za-z]*" required></td>
</tr>
<tr>
<th><label>Organisation Name(if any):</label></th>
<td><input type="text" name="orgname" placeholder="Enter Organisation Name" pattern="[A-Za-z]+\s*[A-Za-z]*"></td>
</tr>
<tr>
<th><label>Email ID:</label></th>
<td><input type="text" name="eid" placeholder="Enter your email" pattern="^\w+([\.-]?\w+)+@([a-zA-z]+\.[a-zA-z]{2,})+$" value="<?php echo $_SESSION['mailid'];?>" readonly></td>
</tr>
<tr>
<th><label>Phone No:</label></th>
<td><input type="tel" name="phno" placeholder="Enter your Phone No" pattern="[1-9]{1}[0-9]{9}" value="<?php echo $_SESSION['pno'];?>" readonly></td>
</tr>
<tr>
<th><label>Add certified document with signature of the organiser:</label></th>
<td><input type="file" name="certfile" required></td>
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