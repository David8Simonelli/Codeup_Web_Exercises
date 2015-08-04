<?php
require_once "parks_migration.php";

$stmt = $dbc->query('SELECT * FROM users');

echo "Columns: " . $stmt->columnCount() . PHPH_EOL;
echo "Rows: " . $stmt->rowCount() . PHPH_EOL;
while ($row = $stmt->fetch()) {
	print_r($row);
}