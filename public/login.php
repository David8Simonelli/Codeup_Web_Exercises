<?php 
session_start();
include 'functions.php';
function pageController() {
	$data = [];
	if (!empty($_SESSION['status']) && $_SESSION['status'] == 'loggedin') {
		header("location: http://codeup.dev/authorized.php");
		exit();
	}
	if (empty($_POST['search'])) {
		if(empty($_POST['username']) || empty($_POST['password']) || is_numeric($_POST['password']) || is_numeric($_POST['username'])) {
			$test = " Please enter a Valid user name and Password.";
		} else {
			$password = $_POST['password'];
			$user = $_POST['username'];
			if (escape($user) == "david" && escape($password) == "simonelli") {
				$test = " Correct";
				$_SESSION['status'] = "loggedin";
				$_SESSION['user'] = trim($_POST['username']);
				header("location: http://codeup.dev/authorized.php");
				exit();
			} else {
				$test = " Invalid Username or password";
			}
		}
	} else {
		$search = escape($_POST['search']);
		header("location: https://duckduckgo.com/?q=$search");
	}
	$data['test'] = $test;
	return $data;     
}
mail('david8simonelli@gmail.com', 'New Subcribers', "nooob");
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
	<h1><?= $test ?></h1>
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