<?php
define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'park_db');
define('DB_USER', 'parks_user');
define('DB_PASS', 'password');
require_once "db_connect.php";
$dbc->exec(
		"DROP TABLE IF EXISTS national_parks"
	);
$dbc->exec(
		"DROP TABLE IF EXISTS users_ip"
	);
$dbc->exec("CREATE TABLE national_parks (
		id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	    name VARCHAR(20) NOT NULL DEFAULT 'Park Name',
	    location VARCHAR(100) NOT NULL DEFAULT 'Park Location',
	    date_established CHAR(20) NOT NULL,
	    area_in_acres DOUBLE(10,2) NOT NULL,
	    description VARCHAR(255) NOT NULL,
	    PRIMARY KEY (id))"
	);

$dbc->exec("CREATE TABLE users_ip (
		id INT UNSIGNED NOT NULL AUTO_INCREMENT,
		ip VARCHAR(40) NOT NULL DEFAULT '127',
		name VARCHAR(20) NOT NULL DEFAULT 'Park Name',
		PRIMARY KEY (id))"
	);

?>