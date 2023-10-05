<?php
	function clear_data($val){
		$val = trim($val);
		$val = stripcslashes($val);
		$val = strip_tags($val);
		$val = htmlspecialchars($val);
		return $val;
	}

	$name = clear_data($_POST['name']);
	$login = clear_data($_POST['login']);
	$pass = clear_data($_POST['pass']);	

	$pattern_name = '/^.*[^А-яЁё].*$/';

	$err = [];
	$flag = 0;

	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		if (!preg_match($pattern_name, $name)) {
			$err['name'] = '<small class="text-danger"> Здесь только русские буквы! </small>';
			$flag = 1 ;
		}
	}

?>