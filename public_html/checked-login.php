<?php

/*ob_start();
session_start();

// check to see if user is logged in, if not redirect
if (!isset($_SESSION['user'])) {
	header("Location: index.php");
	exit;
}

// check to see if user is temp signup account.
if ($_SESSION['user'] == 'temp' && isset($_SESSION['temp-time'])) {
	$date = new DateTime();
	$date->sub(new DateInterval('PT1H'));
	// verify if the temp account has expired
	if ($date < $_SESSION['temp-time']) {
		header("Location: index.php");
		session_destroy();
	}
}
*/