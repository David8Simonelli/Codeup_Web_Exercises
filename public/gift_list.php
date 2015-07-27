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
    <?php foreach ($items as $key => $value) {
            if($_GET['which'] == $key) { ?>
            <ul>
                <li>Person = <?= $value[0] . PHP_EOL; ?><li>
                <li>Gift = <?= $value[1] . PHP_EOL; ?><li>
            </ul>
            <?php } 
    } ?>
    <a href="http://codeup.dev/gift_rabbit.php">Enter Another Gift</a>
    <a href="http://codeup.dev/rabbit_reset.php">Reset</a>
</body>
</html>