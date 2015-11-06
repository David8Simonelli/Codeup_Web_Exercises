<?php 
session_start();
require_once'../utils/auth.php';
require_once'../utils/functions.php';
function pageController() {
	$data = [];
	if (!empty($_SESSION['status']) && $_SESSION['status'] == 'loggedin') {
		header("location: http://codeup.dev/authorized.php");
		exit();
	}
	if(empty($_POST['username']) || empty($_POST['password']) || is_numeric($_POST['password']) || is_numeric($_POST['username'])) {
		$fail = " Please enter a Valid user name and Password.";
	} else {
		$password = $_POST['password'];
		$user = $_POST['username'];
		auth::attempt(escape($user), escape($password));
	}
	exit();
	$data['fail'] = " Please enter a Valid user name and Password.";
	return $data;     
}
extract(pageController());
?>
<!DOCTYPE html>
<html>
<head>
	<title>LogIn</title>
	<link rel="stylesheet" type="text/css" href="/css/login.css">
	<link rel="icon" href="/img/favicon.ico"/>
</head>
<body>
	<h1><?= $fail ?></h1>
	<form method="POST">
	    <label>Search</label>
        <input type="text" name="search"><br>
        <input type="submit">
    </form>
    <form method="POST">
        <label>Name</label>
        <input type="text" name="username"><br>
        <label>Password</label>
        <input type="password" name="password"><br>
        <input type="submit">
    </form>
</body>
</html>