<?php
include_once 'snippets/connect.php';

$res = $db->query("SELECT * FROM users");
while ($row = $res->fetchArray()) {
	var_dump($row);
}
?>