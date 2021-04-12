<?php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"event");

$username=$_POST['name'];
$userid=$_POST['rno'];
$password=$_POST['pwd'];
$dob=$_POST['dob'];
$email=$_POST['eid'];
$pno=$_POST['phno'];
$school=$_POST['school'];

$q="insert into users values('$username','$userid','$password','$dob','$email','$pno','$school');";

mysqli_query($con,$q);
echo "<script>alert('Account created.')</script>";

header("location:index.php");

mysqli_close($con);
?>