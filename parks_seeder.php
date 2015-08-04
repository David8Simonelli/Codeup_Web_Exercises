<?php
require_once "parks_migration.php";
$dbc->exec("USE park_db");
$query = 'TRUNCATE national_parks';
$update = $dbc->prepare($query);
$update->execute();
$parks = [
 ['id' => '1', 'name' => 'Wind Cave', 'location' => 'South Dakota', 'date_established' => '1903-06-28', 'area_in_acres' => 28295.03, 'description' => 'testing1'],
 ['id' => '2', 'name' => 'Yellow Stone', 'location' => 'Wyoming', 'date_established' => '1872-06-28', 'area_in_acres' => 2219790.71, 'description' => 'testing2'],
 ['id' => '3', 'name' => 'Zion', 'location' => 'Utah', 'date_established' => '1919-06-28', 'area_in_acres' => 146597.60, 'description' => 'testing3'],
 ['id' => '4', 'name' => 'Yosemite', 'location' => 'California', 'date_established' => '1890-06-28', 'area_in_acres' => 761266.19 , 'description' => 'testing4'],
 ['id' => '5', 'name' => 'Virgin Islands', 'location' => 'Virgin Islands', 'date_established' => '1956-06-28', 'area_in_acres' => 14688.87, 'description' => 'testing5'],
 ['id' => '6', 'name' => 'Saguaro', 'location' => 'Arizona', 'date_established' => '1994-06-28', 'area_in_acres' => 91439.71, 'description' => 'testing6'],
 ['id' => '7', 'name' => 'Rocky Mountain', 'location' => 'Colorado', 'date_established' => '1915-06-28', 'area_in_acres' => 265828.41, 'description' => 'testing7'],
 ['id' => '8', 'name' => 'Redwood', 'location' => 'California', 'date_established' => '1968-06-28', 'area_in_acres' => 112512.05, 'description' => 'testing8'],
 ['id' => '9', 'name' => 'Pinnacles', 'location' => 'California', 'date_established' => '2013-06-28', 'area_in_acres' => 26605.73, 'description' => 'testing9'],
 ['id' => '10', 'name' => 'Glacier', 'location' => 'Montana', 'date_established' => '1910-06-28', 'area_in_acres' => 1013572.41, 'description' => 'testing10']
];
$stmt = $dbc->prepare('INSERT INTO national_parks (id, name, location, date_established, area_in_acres, description) VALUES (:id, :name, :location, :date_established, :area_in_acres, :description)');
foreach($parks as $park) {
    $stmt->bindValue(':id', $park['id'], PDO::PARAM_INT);
    $stmt->bindValue(':name',  $park['name'],  PDO::PARAM_STR);
    $stmt->bindValue(':location',  $park['location'],  PDO::PARAM_STR);
    $stmt->bindValue(':date_established',  $park['date_established'],  PDO::PARAM_INT);
    $stmt->bindValue(':area_in_acres',  $park['area_in_acres'],  PDO::PARAM_INT);
    $stmt->bindValue(':description',  $park['description'],  PDO::PARAM_STR);
    $stmt->execute();
}