<?php
function pageController() {
	$data = [];
	$luck = rand(0, 1);
	if(isset($_GET['oper'])) {
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
	} else {
		$_GET['count'] = 0;
		$data['count'] = $_GET['count'];
		$_GET['oper'] = 'Press Roll to Start.';
		$data['oper'] = $_GET['oper'];
		$_GET['round'] = -1;
		$data['round'] = $_GET['round'];
	}
	$_GET['round']++;
	$data['round'] = $_GET['round'];
	return $data;     
}
extract(pageController());
?>
<!DOCTYPE html>
<html>
<head>
	<title>Pong</title>
	<link rel="stylesheet" type="text/css" href="/css/pong.css">
	<link rel="icon" href="/img/favicon.gif"/>
</head>
<body>
	<a id='kill' href="http://codeup.dev/ping.php?oper=add&count=<?= $count; ?>&round=<?= $round; ?>">Roll!</a>
	<h1>Score: <?= $count; ?></h1>
	<h3><?= $oper; ?></h3>
	<h6>Rounds: <?= $round; ?></h6>
</body>
</html>