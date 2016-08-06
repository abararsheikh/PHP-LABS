<?php

require_once 'database.php';
require_once 'Product.php';


$category = $_GET['cat'];


$myproduct = new Product();
$products = $myproduct->getProdInCat($category);
/*
$catt = $myproduct->getCategory();
$db = Database::getDB();

$sql = "SELECT * FROM mproducts where category = '$category'";

$result = $db->query($sql);

$products = $result->fetchAll();
*/
$jproducts = json_encode($products);

header("Content-Type: application/json");
echo $jproducts;
