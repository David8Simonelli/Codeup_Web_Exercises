<?php
// define('DB_HOST', '127.0.0.1');
// define('DB_NAME', 'employees');
// define('DB_USER', 'codeup');
// define('DB_PASS', 'password');


// define('DB_HOST', '127.0.0.1');
// define('DB_NAME', 'employees');
// define('DB_USER', 'Codeup');
// define('DB_PASS', 'password');
// require "db_connect.php";
// echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";

define ('DB_HOST', 'mysql:host=127.0.0.1');
define ('DB_NAME', 'dbname=employees');
define('DB_USER', 'Codeup');
define('DB_PASS', 'password');

$dbc = new PDO (DB_HOST . ';' . DB_NAME, DB_USER, DB_PASS);
$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";
// require "db_connect.php";
// $db = new PDO("mysql:host=127.0.0.1;dbname=employees;port=3306", "Codeup", "password");
// $db = new PDO("mysql:host=127.0.0.1;dbname=employees","root");
// echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";
?>