<?php
function pageController() {
	$data = [];
	$luck = rand(0, 10);
	if(isset($_GET['count']) && $luck >= 5) { 
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
		color: black;
		font-size: 75px;
		text-decoration: underline;
		text-align: center;
		background-image: url(http://us.cdn1.123rf.com/168nwm/karenr/karenr1505/karenr150500021/39795955-teal-and-white-yin-yang-tile-pattern-repeat-background-that-is-seamless-and-repeats.jpg);
		background-size: 250px;
	}
	#kill {
		color: black;
	}
	</style>
	<title>Counter</title>
	<link href="http://1-background.com/images/ultraviolet/ultraviolet-fractal-seamless-background.jpg" />
</head>
<body>
	<a class='text' id='kill' href="http://codeup.dev/pong.php?oper=add&count=<?= $count; ?>">Roll!</a>
	<h2 class='text'><?= $count; ?></h2>
	<h3 class='text'><?= $oper; ?></h3>
</body>
</html>