<?php
function pageController() {
    $data = [];
	$adjective = ['Gloomy', 'Angry', 'Impaled', 'Stupid', 'Hypnotic', 'Demonic', 'Childish', 'Careless', 'Wild', 'Edible'];
	$noun = ['Jail', 'StepDad', 'Baby', 'Rainbow', 'Riverbed', 'Heart', 'Harbor', 'Opera', 'Tree'];
    $data['message'] = "The " . $adjective[rand(0,count($adjective) - 1)] . " " . $noun[rand(0,count($noun) - 1)];
    return $data;    
}
extract(pageController());
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
	<link href="http://1-background.com/images/ultraviolet/ultraviolet-fractal-seamless-background.jpg" />
</head>
<body>
	<h1><?= $message; ?></h1>
</body>
</html>