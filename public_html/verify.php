<?php
include_once 'connect.php';

if (!isset($_GET["a"])) {
	header("Location: index.php");
}

$msg = 'Your account has been verified! Please <a href="/login.php">login</a> to access your tools.';

$refid = $_GET["a"];
$select_result = $db->query("SELECT * FROM users WHERE refid=$refid");
$row = $select_result->fetchArray();
// check if the user really signed up
if ($row) {
	$update_result = $db->query("UPDATE user SET verified = 1 WHERE refid=$refid");	
	// verify if upodate was succsesful
	if (!$update_result) {
		$msg = 'Oops something went wrong! Try and visit the link from your email again!';
	}
} else {
	$msg = 'Oops something went wrong! Try and visit the link from your email again!';
}

?>