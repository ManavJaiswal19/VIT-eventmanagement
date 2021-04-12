<?php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"event");

$username=$_POST['name'];
$userid=$_POST['rno'];
$evname=$_POST['eventname'];
$orgname=$_POST['orgname'];
$email=$_POST['eid'];
$pno=$_POST['phno'];


$sub = "Confirmation";
$msg = "Your event ".$evname." creation has been processed and will be up asap after verification.";
mail($email,$sub,$msg);

$filename = $_FILES['certfile']['name'];

    $destination = 'eventfile/' . $filename;

    $f = $_FILES['certfile']['tmp_name'];

    move_uploaded_file($f, $destination);

$q="insert into ev values('$username','$userid','$evname','$orgname','$email','$pno','$filename','Under verification');";

mysqli_query($con,$q);

header("location:homepage.php");

mysqli_close($con);
?>