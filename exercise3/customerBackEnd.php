<!doctype html>
<html>
	<head>
		<title>Arborist World</title>
		<link rel="stylesheet" type="text/css" href="styles.css">
	</head>
	<body>
		<h1>Purchase Complete!</h1>
		<p>You're now a resident of Arborist World! You're on your way to creating your own little forest of easy-to-grow trees! Be sure to also check out Eudicots World to find a great selection of jade plants and cacti to spruce up your garden!</p>
		<h2>Your Order Reciept</h2>
<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 1);

	$pearQ = $silverQ = $cottonQ = $crabQ = $shipping = $total = 0;
	$pear = $silver = $cotton = $crab = 0;
	$user = $pwd = "";

	$pearQ = $_POST["pear"];
	$silverQ = $_POST["silverMaple"];
	$cottonQ = $_POST["cottonwood"];
	$crabQ = $_POST["crabapple"];

	$shipping = $_POST["shipping"];

	$user = $_POST["username"];
	$pwd = $_POST["pwd"];

	$pear = 19 * $pearQ;
	$silver = 9 * $silverQ;
	$cotton = 12 * $cottonQ;
	$crab = 14 * $crabQ;
	$total = $pear + $silver + $cotton + $crab;

	echo "<table>";
	echo "<tr><th></th><th>Cost</th><th>Quantity</th><th>Subtotal</th></tr>";
	echo "<tr><th>Pear Tree</th><td>$19.00</td><td>" . $pearQ . "</td><td>$" . $pear . ".00</td></tr>";
	echo "<tr><th>Silver Maple Tree</th><td>$9.00</td><td>" . $silverQ . "</td><td>$" . $silver . ".00</td></tr>";
	echo "<tr><th>Cottonwood Tree</th><td>$12.00</td><td>" . $cottonQ . "</td><td>$" . $cotton . ".00</td></tr>";
	echo "<tr><th>Crabapple Tree</th><td>$14.00</td><td>" . $crabQ . "</td><td>$" . $crab . ".00</td></tr>";

	if ($shipping == 0) {
		echo "<tr><th>Shipping</th><td colspan='2'>7-Day Shipping</td><td>$" . $shipping . ".00</td></tr>";
	}
	if ($shipping == 50) {
		echo "<tr><th>Shipping</th><td colspan='2'>Overnight Shipping</td><td>$" . $shipping . ".00</td></tr>";
	}
	if ($shipping == 5) {
		echo "<tr><th>Shipping</th><td colspan='2'>3-Day Shipping</td><td>$" . $shipping . ".00</td></tr>";
	}

	echo "<tr><th colspan='3'>Total</th><th>$" . $total . ".00</th></tr>";
	echo "</table><br>";
	echo "Your Username: " . $user . " <br>";
	echo "Your Password: " . $pwd . " <br>";
?>
	</body>
</html>
