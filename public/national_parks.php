<?php
define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'park_db');
define('DB_USER', 'parks_user');
define('DB_PASS', 'password');
require_once "../db_connect.php";
$fail = '';
$dbc->exec("USE park_db"); 
$count = $dbc->query('SELECT count(*) FROM national_parks')->fetchColumn();
if (!empty($_POST['name']) && !empty($_POST['location']) && !empty($_POST['date_established']) && !empty($_POST['area_in_acres']) && !empty($_POST['description'])) {
	if (is_string($_POST['name']) && is_string($_POST['location']) && is_numeric($_POST['area_in_acres']) && is_string($_POST['description']) )  {
		$stmt = $dbc->prepare('INSERT INTO national_parks (id, name, location, date_established, area_in_acres, description) VALUES (:id, :name, :location, :date_established, :area_in_acres, :description)');
		$stmt->bindValue(':id', $count + 1, PDO::PARAM_INT);
		$stmt->bindValue(':name',  $_POST['name'],  PDO::PARAM_STR);
		$stmt->bindValue(':location',  $_POST['location'],  PDO::PARAM_STR);
		$stmt->bindValue(':date_established',  $_POST['date_established'],  PDO::PARAM_INT);
		$stmt->bindValue(':area_in_acres',  $_POST['area_in_acres'],  PDO::PARAM_INT);
		$stmt->bindValue(':description',  $_POST['description'],  PDO::PARAM_STR);
		$stmt->execute();
		$ip = $dbc->prepare('INSERT INTO users_ip (ip, name) VALUES (:ip, :name)');
		$ip->bindValue(':ip', strval($_SERVER['REMOTE_ADDR']), PDO::PARAM_STR);
		$ip->bindValue(':name', $_POST['name'], PDO::PARAM_STR);
		$ip->execute();
	} else {
		$fail = 'stop it';
	}
} 
$increment = 4;
if (isset($_GET['page']) && $_GET['page'] < $count - $increment && $_GET['page'] >= 1) {
	$number = $_GET['page'];
} else {
	$number = 1;
}
$offSet = $number * $increment - $increment;
$stmt = $dbc->prepare('SELECT * FROM national_parks LIMIT ' . $increment . ' OFFSET ' . $offSet);
$stmt->execute();
?>
<!DOCTYPE html>
<html>
<head>
	<title>National Parks</title>
	<style type="text/css">
	body {
		background-color: black;
		background-image: url(/img/tilesf2.jpg);
		text-align: center;
		color: lightgrey;
	}
	table {
		border-radius: 20px;
		border-style: solid;
		border-color: black;
		width: 75%;
		background-color: lightgrey;
		margin-top: 50px;
		color: black;
		margin-left: 125px;
	}
	#prev {
		position: absolute;
		left: 25%;
	}
	#next {
		position: absolute;
		left: 75%;
	}
	a {
		color: black;
		border-style: solid;
		border-color: black;
		border-radius: 20px;
		padding: 5px;
		background-color: lightgrey;
	}
	.lineUp {
		position: absolute;
		background-color: white;
		left: 35%;
		width: 300px;
		border-radius: 20px;
		height: 15px;
		border-style: solid;
		border-color: black;
	}
	#sub {
		position: absolute;
		left: 35%;
		background-color: lightgrey;
		border-style: solid;
		border-color: black;
		border-radius: 20px;
	}
	</style>
</head>
<body>
	<h1>National Parks</h1>
	<table>
		<tr>
			<?php
			foreach($stmt as $id => $park) { ?>
			<tr>
				<td><?= $park['id']; ?>:</td>
				<td><?= $park['name']; ?></td>
				<td>Location:<?= $park['location']; ?></td>
				<td>Date Established:<?= $park['date_established']; ?></td>
				<td>Area in Acres: <?= number_format($park['area_in_acres']); ?></td>
				<td>Desc:<?= $park['description']; ?></td>
				<tr/>
				<?php } ?>
				<tr/>
			</table>
			<?php if ($number > 1 ) { ?>
			<a  id='prev' href="/national_parks.php?page=<?= $number - 1;?>">Previous</a>
			<?php }
			if($number < $count / $increment) { ?>
			<a id='next' href="/national_parks.php?page=<?= $number + 1;?>">Next</a>
			<?php } ?>
			<h2><?= $fail ?></h2>
			<form method="post">
				<input class="lineUp" placeholder=" Name" type="text" name="name"><br>
				<input class="lineUp" placeholder=" Location" type="text" name="location"><br>
				<input class="lineUp" placeholder=" Date Established" type="text" name="date_established"><br>
				<input class="lineUp" placeholder=" Area in Acres" type="text" name="area_in_acres"><br>
				<input class="lineUp" placeholder=" Description" type="text" name="description"><br>
				<input id="sub" type="submit">
			</form>
		</body>
		</html>