<?php
session_start();
function pageController() {
	$data = [];
	if (!empty($_SESSION['status']) && $_SESSION['status'] == 'loggedin') {
		$data['user'] = 'Welcome ' . ucfirst($_SESSION['user']);
	} else {
		$data['user'] = 'Please Log In';
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
	<h2><?= $user ?></h2>
	<a href="http://codeup.dev/logout.php">LogOut</a>
</body>
</html>