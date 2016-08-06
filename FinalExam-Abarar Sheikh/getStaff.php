<?php

require_once 'database.php';
$category = $_GET['id'];
$db = Database::getDB();

//$sql = "SELECT * FROM staffdirectory where fname,lname = '$category'";
$sql = "SELECT * FROM staffdirectory WHERE id ='$category'";

$result = $db->query($sql);

$products = $result->fetchAll();

$jproducts = json_encode($products);

header("Content-Type: application/json");
echo $jproducts;
