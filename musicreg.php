<?php
session_start();
?>
<html>
<head>
<title>Music Club Registration</title>
<link rel="stylesheet" type="text/css" href="css/musicregstyle.css">
</head>
<body>
<h1><u><strong><center>Booking Details</center></strong></u></h1>
<div class="tab">
<center>
<table border="1">
<tr>
<th>Name</th>
<th>Reg_No.</th>
<th>Event name</th>
<th>Venue</th>
<th>Time</th>
</tr>
<tr>
<td><?php echo $_SESSION['name'];?></td>
<td><?php echo $_SESSION['id'];?></td>
<td>Music Club Curtain raiser</td>
<td>Portico AB1</td>
<td>14 Dec 2020-10:00 a.m.</td>
</tr>
</table></center></div><br><br>
<center>
<form method="post" onsubmit="alert('Booking Confirmed')">
<input type="Submit" value="confirm" name="submit">
</form>
</center>
</body>
</html>

<?php
if(isset($_POST['submit']))
{
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"event");
$id=$_SESSION['id'];
$q="insert into book values('$id','Music club curtain raiser','14 Dec 2020-10:00 a.m.','Portico AB1');";

mysqli_query($con,$q);
mysqli_close($con);

$sub = "Booking confirmed";
$msg = "You have booked your seat for Music club curtain raiser!"."\n"."Use this mail as the Confirmation pass.";
$email=$_SESSION['mailid'];
mail($email,$sub,$msg);
}
?>
