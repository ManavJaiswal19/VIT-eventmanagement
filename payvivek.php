<?php
session_start();
?>
<html>
<head>
<title>Payment</title>
<link rel="stylesheet" type="text/css" href="css/paystyle.css">
<script type="text/javascript">
function confirm()
{
alert('Transaction successful. Booking Confirmed');
}
</script>
</head>
<center>
<div class="tab">
<h1><u>Card Details</u></h1>
<form method="post" onsubmit="confirm();">
<table border="1">
<tr>
<th></th>
<th>Details</th>
</tr>
<tr>
<td>Name on Card</td>
<td><input type="text" placeholder="Name" required></td>
</tr>
<tr>
<td>Card Number:</td>
<td><input type="number" placeholder="AAAA BBBB CCCC DDDD" required></td>
</tr>
<tr>
<td>Date of expiry:</td>
<td><input type="date" required></td>
</tr>
<tr>
<td>CVV:</td>
<td><input type="number" placeholder="XYZ" required></td>
</tr>
</table><br>
<input type="submit" value="Confirm" name="submit">
</form>
</div>
</center>
</body>
</html>

<?php
if(isset($_POST['submit']))
{
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"event");
$id=$_SESSION['id'];
$q="insert into book values('$id','Proshow Day 3','8th Feb, 2020-6 p.m.','VIT Cricket Ground');";

mysqli_query($con,$q);
mysqli_close($con);

$sub = "Booking confirmed";
$msg = "You have booked your seat for Proshow Day 3!"."\n"."Use this mail as the Confirmation pass.";
$email=$_SESSION['mailid'];
mail($email,$sub,$msg);
}
?>
