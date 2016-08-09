<?php
if (isset($_SESSION['user']) != "") {
	header("Location: index.php");
	exit;
}

$db = new SQLite3('userdb.db');