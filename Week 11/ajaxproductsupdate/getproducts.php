<?php
require_once 'database.php';
require_once 'Product.php';

$myproduct= new Product();
$products = $myproduct->getProducts();
//var_dump($products);
/*
$db = Database::getDB();

$sql = "SELECT * FROM mproducts";

$result = $db->query($sql);

$products = $result->fetchAll(); 

 */

$jproducts = json_encode($products);  //we are converting above output to JSON ..

header("Content-Type: application/json");
echo $jproducts;

//var_dump($result->fetchAll());
/*
foreach ($result as $product){
    echo $product['category'] . " : " . $product['productName'] . "<br />";
}
*/