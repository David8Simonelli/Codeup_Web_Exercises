<?php 
session_start();
function pageController() {
	$data = [];
    $data['items'] = $_SESSION['items'];
    if(empty($_POST['name']) || empty($_POST['gift']) || empty($_SESSION['items'])) {
    }
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
    <h1>Gift List</h1>
    <?php foreach ($items as $key => $value) { ?>
    <ul>Number = <?= $key + 1 . PHP_EOL;; ?>
        <?php 
    </ul>
    <?php } ?>
    <form method="POST">
        <a href="http://codeup.dev/gift_rabbit.php">Enter Another Gift</a>
        <a href="http://codeup.dev/rabbit_reset.php">Reset</a>
    </form>
</body>
</html>