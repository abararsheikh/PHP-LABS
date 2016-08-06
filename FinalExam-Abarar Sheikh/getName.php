<?php

require_once 'database.php';
$category = $_GET['cat'];
$db = Database::getDB();

$sql = "SELECT * FROM staffdirectory where department = '$category'";

$result = $db->query($sql);

$products = $result->fetchAll();

$jproducts = json_encode($products);

header("Content-Type: application/json");
echo $jproducts;
