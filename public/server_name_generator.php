<?php
$adjective = ['Gloomy', 'Angry', 'Happy', 'Stupid', 'Hypnotic', 'Demonic', 'Childish', 'Careless', 'Wild', 'Adorable'];
$noun = ['Jail', 'StepDad', 'Baby', 'Rainbow', 'Riverbed', 'Heart', 'Harbor', 'Opera', 'Tree', 'Pest'];
$ranNoun = $noun[rand(0,count($noun) - 1)];
$ranAdjective = $adjective[rand(0,count($adjective) - 1)];
?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
	h1 {
		font-size: 100px;
		color: white;
		text-decoration: underline;
		text-align: center;
	}
	body {
		background-image: url(http://1-background.com/images/ultraviolet/ultraviolet-fractal-seamless-background.jpg);
	}
	</style>
	<title>Name Generator</title>
</head>
<body>
	<h1><?php echo "The " . $ranAdjective . ' ' . $ranNoun; ?></h1>
</body>
</html>