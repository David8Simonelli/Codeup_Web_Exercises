<?php
session_start();
require_once('../auth.php');
function pageController() {
	$data = [];
	if (!empty($_SESSION['status']) && $_SESSION['status'] == 'loggedin') {
		$data['user'] = 'Welcome ' . ucfirst($_SESSION['user']);
	} else {
		auth::logout();
	}
	return $data;
}
extract(pageController());
?>
<!DOCTYPE html>
<html>
<head>
	<title>Authorized</title>
	<link rel="stylesheet" type="text/css" href="/css/login.css">
</head>
<body>
	<h1>Authorized</h1>
	<h2><?php if(isset($user)) {
		echo $user;
	} ?></h2>
	<a href="http://codeup.dev/logout.php">LogOut</a>
</body>
</html>