<?php
require_once 'database.php';

$db = Database::getDB();
$sql = "SELECT DISTINCT category FROM mproducts";
$result = $db->query($sql);

$category = $result->fetchAll();

$jcat = json_encode($category);

header("Content-Type: application/json");
echo $jcat;