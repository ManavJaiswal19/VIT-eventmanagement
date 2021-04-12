<?php
session_start();
if($_SESSION['sid']==session_id())
{
?>
<html>
<head>
<title>Cultural Fest</title>
<link rel="stylesheet" type="text/css" href="css/culturalstyles.css">
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
<h1>VIBRANCE</h1>
<p class="about">
<video controls height="200px" width="300px" style="float:right;" autoplay>
<source src="vibrance.mp4" type="video/mp4">
Your browser doesn't support this vid.
</video>
We at VIT believe that education isn't confined to academic excellence, but extends to the overall development of a student. To facilitate this, VIT conducts various events and workshops.
<br><br>
Vibrance, the annual International Sports and Cultural Fest, is one of the major events that gives our students a platform to showcase and shape their talent in various technical and managerial areas. Riviera has the honour of being the first University Cultural & Sports Event in India to be ISO 9001:2015 certified. The four day extravaganza is a celebration of dance, drama, debate, literature, art and culture. Our flagship events Aikya and Infusion add colour and richness to what we call "The Vibrance Phenomenon". Apart from these, there are events conducted by various clubs and associations which are also graced by celebrity guests from various walks of life. The Proshows on all four days witness leading playback singers and performers from the Indian music and film industry who perform at the big stage.
<br><br>
Vibrance has been growing in magnitude with each passing year. Vibrance 2020 had a big celebrity list to boast about, with phenomenal artists like Sonu Nigam, Ayushmann Khurrana, Andrea Jeremiah, Shruti Haasan, Devi Sri Prasad, and DJ Shan, and the band The Local Train performing at the Proshows. Apart from these celebrities, Indian Cricketer Murali Vijay, Music Director Ghibran, Actor Manchu Manoj, Actress Priya Anand, Radio Jockey-cum-Actor RJ Balaji and Nehal Chudasama and Miss India-Universe 2018 also graced us with their presence as Chief Guests for various events held during Vibrance'20.
</p>
<br>
<div class="about">
<span class="hl">Highlights</span>
<br><br>
<div class="hlimg">
<img src="images/g14.jpg">
<img src="images/g9.jpg">
<img src="images/g6.jpg">
<img src="images/g7.jpg">
<img src="images/g1.jpg">
<img src="images/g13.jpg">
</div>
</div>
<br><br>
<div class="about">
<span class="vb">Vibrance '21</span>
<img src="images/img3.png" style="float:right;margin-right:30px;height:185px;width:200px;">
<br><br>
<button><a href="proshows.html" target="_blank">Proshows</a></button>
<button><a href="foodstalls.html" target="_blank">Food Stalls</a></button>
<br><br><br>
<button><a href="events.html" target="_blank">Events</a></button>
<button><a href="sports.php#matches">Sports</a></button>
<br>
</div>

</body>
</html>
<?php
}
else
	header("location:index.php");
?>