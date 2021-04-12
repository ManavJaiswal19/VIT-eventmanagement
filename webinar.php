<?php
session_start();
if($_SESSION['sid']==session_id())
{
?>
<html>
<head>
<title>Webinars</title>
<link rel="stylesheet" type="text/css" href="css/webinarstyles.css">
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
<li><a href="contactus.php"> Contact Us</a>
</li>
<li id="logout"><a href="logout.php">Log Out</a></li>
</ul><br><br>
<h1> Webinar on recent trends in Automobile Technologies</h1>
<div class="content1">
<p>The Indian automotive sector is consistently growing over the past few 
years and India has become one of the largest automobile markets in the 
world. Recent advancements in the technologies like artificial 
intelligence, machine learning, computer vision, deep learning, human 
computer interaction, sensor fusion, navigation, etc. are accelerating the 
autonomous vehicles developments. Automobiles continue to deploy 
sophisticated sensors, controls, and software to become more autonomous and 
inherently safer for occupants and vulnerable road users. On the other hand,
the development of IC engines was driven by stringent regulatory norms of 
the country. Regulatory bodies expect automotive manufacturers to design 
fuel efficient vehicles that pollute less without compromising the vehicle 
cost and performance. Need for higher fuel efficiency and reduced emission 
has driven the auto industry to focus on weight reduction using novel 
plastic and composite materials. The material industries, plastic and 
polymer composite industry are operating to respond to the changing 
automotive industry needs.</p><br><br>
<center><img src="images/g27.jpg">
<img src="images/g28.jpg"></center>
</div>
<h1>Webinar on opportunities and challenges in converting ideas into Products
</h1>
<div class="content2">
<p>Focus Area:<br>

1. Idea Generation in Innovation Framework<br>
2. Design Thinking in Innovation Framework<br>
3. A primer for Innovation and Entrepreneurship<br>
4. Converting Student Project Ideas into Prototypes</p><br><br>
<center><img src="images/g29.jpg">
<img src="images/g30.jpg"></center>
</div>
</body>
</html>
<?php
}
else
	header("location:index.php");
?>