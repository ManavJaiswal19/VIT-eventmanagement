<?php

$ok=0;
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"event");

$userid=$_POST['rno'];
$email=$_POST['eid'];
$dob=$_POST['dob'];

$q="select * from users where Reg_no='$userid' and DOB='$dob' and Email='$email';";

$result=mysqli_query($con,$q);
while($row=mysqli_fetch_array($result))
{
	$ok=1;
	$password=$row['Password'];
}
if($ok==1)
{
	echo "<script>alert('Your password is:'+'$password');</script>";
} 
else
{
	echo "<script>alert('Wrong credentials');</script>";
}
?>
<html>
<head><title>Recover password</title>
<link rel="stylesheet" type="text/css" href="css/newuserstyles.css">
</head>
<style>
a
{
	font-family:helvetica;
	font-size:100px;
	color:white;
}
</style>
<body>
<h1>Return to login page to login!!</h1>
<br><br><br><br><br>
<center><a href="index.php">Login</a></center>
</body>
</html>