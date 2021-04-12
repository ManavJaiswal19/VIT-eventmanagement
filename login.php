<?php
$ok=0;
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"event");

$userid=$_POST['uid'];
$password=$_POST['pwd'];

$q="select * from users where Reg_no='$userid' and Password='$password';";

$result=mysqli_query($con,$q);
while($row=mysqli_fetch_array($result))
{
	$ok=1;
	$id=$row['Reg_no'];
	$dob=$row['DOB'];
	$name=$row['Name'];
	$pno=$row['Phone_no'];
	$mailid=$row['Email'];
}

if($ok==1)
{
	session_start();
	$_SESSION['sid']=session_id();
	$_SESSION['id']=$id;
	$_SESSION['dob']=$dob;
	$_SESSION['name']=$name;
	$_SESSION['mailid']=$mailid;
	$_SESSION['pno']=$pno;
	header("location:homepage.php");
}

else
{
	header("location:index.php");
}
mysqli_close($con);
?>