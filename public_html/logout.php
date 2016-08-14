<?php

// destroy logged in session and redirect back to index page
include_once 'snippets/checked-login.php';
session_destroy();
$topScroll = "";
if (isset($_POST['topScroll'])) {
	$topScroll = $_POST['topScroll'];
}
$location = 'index.php';
if (isset($_POST['location'])) {
	$arr = explode("?", $_POST['location']);
	$location = $arr[0];
}


if ($topScroll === "") {
  header("Location: $location"); 
} else {
  header("Location: $location?scroll=$topScroll"); 
}

?>