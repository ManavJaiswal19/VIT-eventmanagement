<?php
session_start();
if($_SESSION['sid']==session_id())
{
?>
<html>
<head>
<title>Webinars</title>
<link rel="stylesheet" type="text/css" href="css/otherstyles.css">
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
<h1>Holi Celebration</h1>
<div class="content1">
<p>Holi is a popular ancient Hindu festival, also known as 
the Indian "festival of spring", the "festival of colours", or the 
"festival of love". The festival signifies the victory of good over evil.
Holi celebrates the arrival of spring, the end of winter, the blossoming 
of love, and for many it's a festive day to meet others, play and laugh, 
forget and forgive, and repair broken relationships. The festival also 
celebrates the beginning of a good spring harvest season.<br>
Holi in VIT would be celebrated on 21st March,2020 in Men's hostel and Women's
hostel respectively. Events like rain dance and DJ music would be there.
Food Stalls will also be present.</p>
<center><img src="images/g31.jpg">
<img src="images/g32.jpg"></center>
</div>
<h1>Lohri Celebration</h1>
<div class="content2">
<p>Lohri is a popular winter Punjabi folk festival, celebrated primarily by 
Hindus, Sikhs and Muslims from the Punjab region of the northern part 
of the Indian subcontinent, on 13 January of every year.The significance 
and legends about the Lohri festival are many and these link the festival 
to the Punjab region.<br>
We are happy to share with you that we shall be celebrating the auspicious
festival of lohri this year in VIT. Delicious North Indian dishes will be
served along with Punjabi Bhangra beats with Desi Dhol around a Bonfire.
So, don't delay, register at AB-1 porico and witness the true festivities of
North India.</p>
<center><img src="images/g33.jpg">
<img src="images/g34.jpg"></center>
</div>
<h1>Divine Concert</h1>
<div class="content3">
<p>#Vivian aka DIVINE is an award winning #Rapper & Hip-hop artist from 
the streets of Mumbai. With hit singles such as #Farak and #JungliSher, 
his raw and brutally honest Hindi rap draws inspiration from his own life.
He has been part of #Nucleyaʼs album #BassRani, opened for acts like 
#Skrillex, performed internationally for the #BBCAsianNetwork Live showcase 
and sung for filmmaker #AnuragKashyapʼs #Mukkabaaz.<br>
Vibrance, VIT University is VIT's very own International Sports and 
Cultural fest. Watch DIVINE live at Riviera, VIT University - VIT this 
#February, MARK THE DATE!<br>
<center><img src="images/g35.jpg"></center>
</div>
<h1>KTM Stunt Show</h1>
<div class="content4">
<p>KTM, the European Racing Legend, will conduct breath-taking KTM Stunt 
show in VIT on 21st February, 2020. The Stunt-show will be organized in order to showcase the 
mind-blowing stunt rides and tricks from the professional stunt riders.
The KTM brand is known for its high performance racing bikes and we always 
want our customers to experience the thrills and adventure which KTM bike 
can provide. Professional stunts are being conducted in every major city 
and will keep on growing in scale in the near future. KTM is an exclusive 
premium brand and we are keen to ensure we provide KTM customers an 
experience that is uniquely KTM.</p>
<center><img src="images/g36.jpg">
<img src="images/g37.jpg"></center>
</div>
</body>
</html>

<?php
}
else
	header("location:index.php");
?>