<?php 
session_start();
function pageController() {
	$data = [];
	if(empty($_SESSION['items'])) {
		$_SESSION['items'] = [];
	}
	if(!empty($_POST['name']) || !empty($_POST['gift'])) {
		$enter = [ucfirst($_POST['name']), ucfirst($_POST['gift'])];
		array_push($_SESSION['items'], $enter);
	}
	$data['items'] = $_SESSION['items'];
	return $data;     
}
extract(pageController());
?>
<!DOCTYPE html>
<html>
<head>
	<title>Gift Rabbit</title>
	<link rel="stylesheet" type="text/css" href="/css/login.css">
	<link rel="icon" href="/img/favicon.ico"/>
</head>
<body>
    <form method="POST">
        <label>Person</label>
        <input type="text" name="name"><br>
        <label>Gift</label>
        <input type="text" name="gift"><br>
        <input type="submit">
    </form>
    <?php foreach ($items as $key => $value) { ?>
    <ul>
    	<li><?= $value[0] ?></li>
    	<a href="http://codeup.dev/gift_list.php?which=<?= $key ?>">Number = <?= $key + 1 . PHP_EOL; ?></a>
    </ul>
    <?php } ?>
</body>
</html>