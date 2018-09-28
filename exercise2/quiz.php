<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 1);

	$distro = $billwurtz = $image = $gollum = $mlb = "";

	$distro = $_POST["distro"];
	$billwurtz = $_POST["billwurtz"];
	$image = $_POST["image"];
	$gollum = $_POST["gollum"];
	$mlb = $_POST["mlb"];

	echo "Question 1: What Linux distro is currently ranked #1 over the past 12 months on DistroWatch?<br>";
	echo "You answered: " . $distro . "<br>";
	echo "The correct answer was: Manjaro<br><br>";

	echo "Question 2: What is the most recent single released by Bill Wurtz?<br>";
	echo "You answered: " . $billwurtz . "<br>";
	echo "The correct answer was: Mt. St. Helens is About to Blow Up<br><br>";

	echo "Question 5: What Major League Baseball team will invite the apocalypse if they win the World Series this year (in other words, who do I absolutely not want to win)?<br>";
	echo "You answered: " . $mlb . "<br>";
	echo "The correct answer was: New York Yankees<br><br>";
?>
