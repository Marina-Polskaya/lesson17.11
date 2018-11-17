<?php
echo "<pre>";
print_r([
	'request' => $_REQUEST,
	'post' => $_POST,
	'get' => $_GET,
	'globals' => $GLOBALS
]);
echo "</pre>";

?>