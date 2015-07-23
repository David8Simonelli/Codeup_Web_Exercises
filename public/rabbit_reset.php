<?php
session_start();
$data = [];
session_destroy();
header("location: http://codeup.dev/gift_rabbit.php");
    if (isset($_SERVER['HTTP_COOKIE'])) {
        $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
        foreach ($cookies as $cookie) {
            $parts = explode('=', $cookie);
            $name = trim($parts[0]);
            setcookie($name, '', time() - 1000);
            setcookie($name, '', time() - 1000, '/');
        }
    }
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