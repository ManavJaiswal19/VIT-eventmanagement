<?php
session_start();
if(isset($_SESSION['sid']))
{
	header("location:homepage.php");
}
else
{
?>

<html>
<head><title>Campus Events</title>
<link rel="stylesheet" type="text/css" href="css/loginstyles.css">
</head>

<body>
<h1>VIT CHENNAI EVENTS</h1>
<h2><marquee>Create your account now & get amazing features!!</marquee></h2>
<img src="images/img3.png" style="margin-top:30px;margin-left:120px;height:250px;width:250px">
<img src="images/img2.png" style="margin-top:30px;height:230px;width:310px;border-radius:150px;">
<fieldset>
<legend align="left" style="color:white;font-size:30px;">Login</legend>
<form action="login.php" method="post">
<table style="color:white;">
<tr><th>Register No:</th><td><input type="text" name="uid" placeholder="Enter Reg No" size="25" required></td></tr>
<tr><th>Password:</th><td><input type="password" name="pwd" placeholder="Enter password" size="25" required></td></tr>
</table>
<br><input type="submit" style="cursor:pointer;">
</form>
<a href="forgot.html" style="color:lime">Forgot Password?</a><br>
<a href="newuser.html" style="color:lime">New user? Register Now!</a>
</fieldset>
</body>
</html>
<?php
}
?>