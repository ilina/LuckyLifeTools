<?php

ob_start();
session_start();

// redirect if logged in
// check to see if user is logged in, if is redirect
if (isset($_SESSION['user'])) {
	header("Location: index.php");
	exit;
}
var_dump($_SESSION);
