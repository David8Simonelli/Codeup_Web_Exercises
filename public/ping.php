<?php
function pageController() {
	require_once('input.php');
	$data = [];
	$luck = rand(0, 1);
	if(isset($_GET['oper'])) {
		if(isset($_GET['count']) && $luck == 1) { 
			$_GET['count']++;
			$_GET['oper'] = 'Hit!';
		} else {
			$_GET['count'] = 0;
			$_GET['oper'] = 'Miss!';
		}
	} else {
		$_GET['count'] = 0;
		$_GET['oper'] = 'Press Roll to Start.';
		$_GET['round'] = -1;
	}
	$data['oper'] = $_GET['oper'];
	$data['count'] = $_GET['count'];
	$_GET['round']++;
	$data['round'] = $_GET['round'];
	return $data;     
}
extract(pageController());
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ping</title>
	<link rel="stylesheet" type="text/css" href="/css/ping.css">
	<link rel="icon" href="/img/favicon.gif"/>
</head>
<body>
	<iframe width="100%" scrolling="yes" align="middle" height="900" frameborder="no" src="/mediaFusion/player.php?wmode=transparent&playerId=4d6bf09581" name="frame1"></iframe>
	<a id='kill' href="http://codeup.dev/pong.php?oper=add&count=<?= $count; ?>&round=<?= $round; ?>">Roll!</a>
	<h1>Score: <?= $count; ?></h1>
	<h3><?= $oper; ?></h3>
	<h6>Rounds: <?= $round; ?></h6>
</body>
</html>