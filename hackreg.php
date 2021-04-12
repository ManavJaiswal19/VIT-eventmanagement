<?php
session_start();
?>
<html>
<head>
<title>Hackathon Registration</title>
<link rel="stylesheet" type="text/css" href="css/hackregstyle.css">
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
<td>Hackathon</td>
<td>7th Floor Audi AB1</td>
<td>12 Dec'20-9:00 a.m.</td>
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
$q="insert into book values('$id','Hackathon','12 Dec 2020-9:00 a.m.','7th Floor Audi AB1');";

mysqli_query($con,$q);
mysqli_close($con);

$sub = "Booking confirmed";
$msg = "You have booked your seat for hackathon!"."\n"."Use this mail as the Confirmation pass.";
$email=$_SESSION['mailid'];
mail($email,$sub,$msg);
}
?>