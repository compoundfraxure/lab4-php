<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 1);

	$distro = $billwurtz = $image = $gollum = $mlb = "";

	$distro = $_POST["distro"];
	$billwurtz = $_POST["billwurtz"];
	$image = $_POST["image"];
	$gollum = $_POST["gollum"];
	$mlb = $_POST["mlb"];

	$correct = 0;

	echo "Question 1: What Linux distro is currently ranked #1 over the past 12 months on DistroWatch?<br>";
	echo "You answered: " . $distro . "<br>";
	echo "The correct answer was: Manjaro<br><br>";
	if ($distro == "Manjaro") {
		$correct = ++$correct;
	}

	echo "Question 2: What is the most recent single released by Bill Wurtz?<br>";
	echo "You answered: " . $billwurtz . "<br>";
	echo "The correct answer was: Mt. St. Helens is About to Blow Up<br><br>";
	if ($billwurtz == "Mt. St. Helens is About to Blow Up") {
		$correct = ++$correct;
	}

	echo "Question 3: Which of the following was not a part of my image slideshow in exercise 2 of lab 3?<br>";
	echo "You answered: " . $image . "<br>";
	echo "The correct answer was: <img src='img/MikeTruk.png' height='250px'><br><br>";
	if ($image == "<img src='img/MikeTruk.png' height='250px'>") {
		$correct = ++$correct;
	}

	echo "Question 4: <i>What has Bagginses got in its pocketses?</i><br>";
	echo "You answered: " . $gollum . "<br>";
	echo "The correct answer was: Precious<br><br>";
	if ($gollum == "Precious") {
		$correct = ++$correct;
	}

	echo "Question 5: What Major League Baseball team will invite the apocalypse if they win the World Series this year (in other words, who do I absolutely not want to win)?<br>";
	echo "You answered: " . $mlb . "<br>";
	echo "The correct answer was: New York Yankees<br><br>";
	if ($mlb == "New York Yankees") {
		$correct = ++$correct;
	}

	echo "You got " . $correct . " correct out of 5.<br>";
	echo "Your score is: " . ($correct / 5) * 100 . "%.";
?>
