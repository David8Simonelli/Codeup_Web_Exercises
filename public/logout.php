<?php
session_start();
require_once'../auth.php';
auth::logout();
?>
<!DOCTYPE html>
<html>
<head>
	<title>LogingOut</title>
	<link rel="stylesheet" type="text/css" href="/css/login.css">
</head>
<body>
</body>
</html>