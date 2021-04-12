<?php
session_start();
?>
<html>
<head>
<title>Proshow Day 3</title>
<link rel="stylesheet" type="text/css" href="css/vivekstyle.css">
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
<th>Date</th>
<th>Time</th>
<th>Price</th>
</tr>
<tr>
<td><?php echo $_SESSION['name'];?></td>
<td><?php echo $_SESSION['id'];?></td>
<td>Proshow Day 3</td>
<td>VIT Cricket Ground</td>
<td>8th Feb, 2020</td>
<td>6:00 p.m.</td>
<td>Rs. 600</td>
</tr>
</table></center></div><br>

<div class="mode">
<h1><u>Mode Of Payment</u></h1>
<div class="credit">
<p><strong>1. Credit Card</strong></p><br>
<button onclick="window.open('payvivek.php','_blank');">Proceed to pay</button>
</div>
<div class="debit">
<p><strong>2. Debit Card</strong></p><br>
<button onclick="window.open('payvivek.php','_blank');">Proceed to pay</button>
</div>
<div class="wallet">
<p><strong>3. Wallet</strong></p><br>
<button onclick="alert('Details registered. Money will be collected at portico');">Proceed to pay</button>
</div>
</div>
</body>
</html>

