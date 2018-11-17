<?php
class Handler {

	public function execute ($params){
		// foreach ($params as &$value) {
		// 	$value .= ' + 123123';
		// }
		// foreach ($params as $key => $value) {
		// 	$params[$key] .= '+123123';
		// }
		$params = array_map(function($item){
			return $item .= " + 123123";
		}, $params);
		return $params;
	}
}

// $handler = new Handler();

// echo "<pre>";
// print_r ([
// 	$_POST,
// 	$handler->execute($_POST)
// ]);
// echo "</pre>";

?>