<?php
function pageController() {
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