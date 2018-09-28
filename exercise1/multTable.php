<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 1);

	function product($x, $y) {
		$z = $x * $y;
		return $z;
	}

	echo "<table>\n\t<tr>\n\t\t<th>&nbsp;</th>\n";
	for ($i = 1; $i <= 100; $i++) {
		echo "\t\t<th>" . $i . "</th>\n";
	}
	echo "\t</tr>\n";
	for ($i = 1; $i <= 100; $i++) {
		echo "\t<tr>\n\t\t<th>" . $i . "</th>\n";
		for ($j = 1; $j <= 100; $j++) {
			echo "\t\t<td>" . product($i, $j) . "</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>";
?>
