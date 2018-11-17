<?php
// header('Location: /lesson17.11/index.php');
// echo "<pre>";
// print_r([
// 	'request' => $_REQUEST,
// 	'post' => $_POST,
// 	'get' => $_GET,
// 	'globals' => $GLOBALS
// ]);
// echo "</pre>";
require_once 'Handler.php';

$handler = new Handler();

echo "<pre>";
print_r ([
	$_POST,
	$handler->execute($_POST)
]);
echo "</pre>";

?>