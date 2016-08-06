<?php
require_once 'database.php';

$db = Database::getDB();

$sql = "SELECT * FROM mproducts";

$result = $db->query($sql);

$products = $result->fetchAll();

$jproducts = json_encode($products);

header("Content-Type: application/json");
echo $jproducts;

//var_dump($result->fetchAll());
/*
foreach ($result as $product){
    echo $product['category'] . " : " . $product['productName'] . "<br />";
}
*/