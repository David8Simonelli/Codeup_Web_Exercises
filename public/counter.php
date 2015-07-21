<?php
function pageController() {
	$data = [];
	if(isset($_GET['count'])) {
		if($_GET['oper'] == 'add') {
			$_GET['count']++;
			$data['count'] = $_GET['count'];
		} elseif($_GET['oper'] == 'minus') {
			$_GET['count']--;
			$data['count'] = $_GET['count'];
		}
	} else {
		$_GET['count'] = 0;
		$data['count'] = $_GET['count'];
	}
	return $data;    
}
extract(pageController());
?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
	body {
		font-size: 100px;
		color: black;
		text-decoration: underline;
		text-align: center;
		background-image: url(https://secure.static.tumblr.com/e1f023709799d87cee37d69ad11420ad/s0fu73b/S5gn1krup/tumblr_static_seamless-background-paper4.jpg);
		background-size: 250px;
	}
	.text:visited {
		color: black;
	}
	</style>
	<title>Counter</title>
	<link href="http://1-background.com/images/ultraviolet/ultraviolet-fractal-seamless-background.jpg" />
</head>
<body>
	<a class='text' href="?oper=add&count=<?= $count; ?>">Up</a>
	<a class='text' href="?oper=minus&count=<?= $count; ?>">Down</a>
	<h2 class='text'><?= $count; ?></h2>
</body>
</html>