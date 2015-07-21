<?php
function pageController() {
	$data = [];
	$luck = rand(0, 1);
	if(isset($_GET['count']) && $luck == 1) { 
		$_GET['count']++;
		$data['count'] = $_GET['count'];
		$_GET['oper'] = 'Hit!';
		$data['oper'] = $_GET['oper'];
	} else {
		$_GET['count'] = 0;
		$data['count'] = $_GET['count'];
		$_GET['oper'] = 'Miss!';
		$data['oper'] = $_GET['oper'];
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
		font-size: 75px;
		color: white;
		text-decoration: underline;
		text-align: center;
		background-image: url(http://thumbs.dreamstime.com/m/yin-yang-shapes-seamless-generated-background-texture-44159898.jpg);
		background-size: 250px;
	}
	#kill {
		color: white;
	}
	</style>
	<title>Counter</title>
	<link href="http://1-background.com/images/ultraviolet/ultraviolet-fractal-seamless-background.jpg" />
</head>
<body>
	<a class='text' id='kill' href="http://codeup.dev/ping.php?oper=add&count=<?= $count; ?>">Roll!</a>
	<h2 class='text'><?= $count; ?></h2>
	<h3 class='text'><?= $oper; ?></h3>
</body>
</html>