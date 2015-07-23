<?php
session_start();
$data = [];
session_destroy();
header("location: http://codeup.dev/login.php");
exit();
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