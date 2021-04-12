<?php
session_start();
?>
<html>
<head>
<title>AI seminar registration</title>
<link rel="stylesheet" type="text/css" href="css/AIsemregstyle.css">
</head>
<body>
<div class="tab">
<h1><u><strong><center>Booking Details For UG/PG Student</center></strong></u></h1>
<center>
<table border="1">
<tr>
<th>Name</th>
<th>Reg_No.</th>
<th>Event name</th>
<th>Venue</th>
<th>Date</th>
<th>Time</th>
<th>Price</th>
</tr>
<tr>
<td><?php echo $_SESSION['name'];?></td>
<td><?php echo $_SESSION['id'];?></td>
<td>AI and Robotics seminar</td>
<td>7th Floor Audi</td>
<td>10th Feb, 2020</td>
<td>6:00 p.m.</td>
<td>Rs. 300</td>
</tr>
</table></center></div><br>

<div class="mode">
<h1><u>Mode Of Payment</u></h1>
<div class="credit">
<p><strong>1. Credit Card</strong></p><br>
<button onclick="window.open('pay.php','_blank');">Proceed to pay</button>
</div>
<div class="debit">
<p><strong>2. Debit Card</strong></p><br>
<button onclick="window.open('pay.php','_blank');">Proceed to pay</button>
</div>
<div class="wallet">
<p><strong>3. Wallet</strong></p><br>
<button onclick="alert('Details registered. Money will be collected at portico');">Proceed to pay</button>
</div>
</div>

<div class="tab1">
<h1><u><strong><center>Booking Details For Research Scholar Student</center></strong></u></h1>
<center>
<table border="1">
<tr>
<th>Name</th>
<th>Reg_No.</th>
<th>Event name</th>
<th>Venue</th>
<th>Date</th>
<th>Time</th>
<th>Price</th>
</tr>
<tr>
<td><?php echo $_SESSION['name'];?></td>
<td><?php echo $_SESSION['id'];?></td>
<td>AI and Robotics seminar</td>
<td>7th Floor Audi</td>
<td>11th Feb, 2020</td>
<td>6:00 p.m.</td>
<td>Rs. 500</td>
</tr>
</table></center></div><br>

<div class="mode1">
<h1><u>Mode Of Payment</u></h1>
<div class="credit">
<p><strong>1. Credit Card</strong></p><br>
<button onclick="window.open('pay.php','_blank');">Proceed to pay</button>
</div>
<div class="debit">
<p><strong>2. Debit Card</strong></p><br>
<button onclick="window.open('pay.php','_blank');">Proceed to pay</button>
</div>
<div class="wallet">
<p><strong>3. Wallet</strong></p><br>
<button onclick="alert('Details registered. Money will be collected at portico');">Proceed to pay</button>
</div>
</div>

<div class="tab2">
<h1><u><strong><center>Booking Details For Academicians/NGOs</center></strong></u></h1>
<center>
<table border="1">
<tr>
<th>Name</th>
<th>Reg_No.</th>
<th>Event name</th>
<th>Venue</th>
<th>Date</th>
<th>Time</th>
<th>Price</th>
</tr>
<tr>
<td><?php echo $_SESSION['name'];?></td>
<td><?php echo $_SESSION['id'];?></td>
<td>AI and Robotics seminar</td>
<td>7th Floor Audi</td>
<td>12th Feb, 2020</td>
<td>7:00 p.m.</td>
<td>Rs. 1000</td>
</tr>
</table></center></div><br>

<div class="mode2">
<h1><u>Mode Of Payment</u></h1>
<div class="credit">
<p><strong>1. Credit Card</strong></p><br>
<button onclick="window.open('pay.php','_blank');">Proceed to pay</button>
</div>
<div class="debit">
<p><strong>2. Debit Card</strong></p><br>
<button onclick="window.open('pay.php','_blank');">Proceed to pay</button>
</div>
<div class="wallet">
<p><strong>3. Wallet</strong></p><br>
<button onclick="alert('Details registered. Money will be collected at portico');">Proceed to pay</button>
</div>
</div>

<div class="tab3">
<h1><u><strong><center>Booking Details For Spot Registrations</center></strong></u></h1>
<center>
<table border="1">
<tr>
<th>Name</th>
<th>Reg_No.</th>
<th>Event name</th>
<th>Venue</th>
<th>Date</th>
<th>Time</th>
<th>Price</th>
</tr>
<tr>
<td><?php echo $_SESSION['name'];?></td>
<td><?php echo $_SESSION['id'];?></td>
<td>AI and Robotics seminar</td>
<td>7th Floor Audi</td>
<td>13th Feb, 2020</td>
<td>5:00 p.m.</td>
<td>Rs. 1000</td>
</tr>
</table></center></div><br>

<div class="mode3">
<h1><u>Mode Of Payment</u></h1>
<div class="credit">
<p><strong>1. Credit Card</strong></p><br>
<button onclick="window.open('pay.php','_blank');">Proceed to pay</button>
</div>
<div class="debit">
<p><strong>2. Debit Card</strong></p><br>
<button onclick="window.open('pay.php','_blank');">Proceed to pay</button>
</div>
<div class="wallet">
<p><strong>3. Wallet</strong></p><br>
<button onclick="alert('Details registered. Money will be collected at portico');">Proceed to pay</button>
</div>
</div>







