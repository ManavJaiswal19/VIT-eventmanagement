<?php
session_start();
?>
<html>
<head>
<title>Proshow Day 1</title>
<link rel="stylesheet" type="text/css" href="css/deviprasadstyle.css">
</head>
<body>
<div class="tab">
<h1><u><strong><center>Booking Details</center></strong></u></h1>
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
<td>Proshow Day 1</td>
<td>VIT Cricket Ground</td>
<td>6th Feb, 2020</td>
<td>6:00 p.m.</td>
<td>Rs. 300</td>
</tr>
</table></center></div><br>

<div class="mode">
<h1><u>Mode Of Payment</u></h1>
<div class="credit">
<p><strong>1. Credit Card</strong></p><br>
<button onclick="window.open('paydvp.php','_blank');">Proceed to pay</button>
</div>
<div class="debit">
<p><strong>2. Debit Card</strong></p><br>
<button onclick="window.open('paydvp.php','_blank');">Proceed to pay</button>
</div>
<div class="wallet">
<p><strong>3. Wallet</strong></p><br>
<button onclick="alert('Details registered. Money will be collected at portico');">Proceed to pay</button>
</div>
</div>
</body>
</html>

