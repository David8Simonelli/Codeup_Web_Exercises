<?php
var_dump($_REQUEST);
function inputHas($key) {
	if(empty($_REQUEST[$key])) {
		return false;
	}
	else {
		return true;
	}
}
function inputGet($key) {
	if(empty($key)) {
		return null;
	}
	else {
		return $key;
	}
}
function escape($input) {
	$input = htmlspecialchars($input);
	$input = trim($input);
	$input = strtolower($input);
	return $input;
}
?>