<?php

// destroy logged in session and redirect back to index page
include_once 'snippets/checked-login.php';
session_destroy();
$location = 'index.php';
if (isset($_POST['location'])) {
	$location = $_POST['location'];
}
header("Location: $location");