<?php

echo "
<html>
<head>
	<title>Order</title>
	<link rel='stylesheet' type='text/css' href='coffeeshopcss.css'>
</head>
<body style='background-image:url(2.jpg);background-repeat: no-repeat;background-size:cover;'>
	<br><br><br><br><br><br>
		<ul>
		  <li><a href='Insert_order.php'>Insert</a></li>
		  <li><a href='Update_order.php'>Update</a></li>
		  <li><a href='Delete_order.php'>Delete</a></li>
		  <li class='b'><a href='order.php'>Back</a></li>
		</ul>

</body>
</html>


";
echo "<h1>Delete....</h1><br>";

@$connect 	= mysqli_connect("localhost","root","","Order") or die("couldn't connect!");


@$query2     = mysqli_query($connect,"SELECT * FROM Order");

echo "<h3>Select Product what you want to delete:</h3>";
	echo "<br><form action='Delete1_order.php' method='POST'><select name='dname'>";


	while (@$row = mysqli_fetch_assoc(@$query2))
	{
		@$dborderid = $row['Order_id'];
		@$dbstatus = $row['Status'];
		@$dbpaymentid = $row['Payment_id'];
		@$dbquantity = $row['quantity'];

		echo "<option value='$dborderid'> $dborderid | $dbstatus | $dbpaymentid | $dbquantity </option>";
	}
	echo "</select>";

	echo "<br><br><input type='submit' name='c' value='Delete'>";

	echo "</form>";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Delete</title>
</head>
<body background="page2.png">
	<button>
		<a href="order.php">Back</a>
	</button>
</body>
</html>
