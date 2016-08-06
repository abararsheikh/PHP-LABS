<?php
require_once 'database.php';
require_once 'Product.php';

$name = $_POST['pname'];
$cat = $_POST['pcat'];

$myproduct = new Product();

$result = $myproduct->addProduct($name,$cat);
if($result){
    echo "Added product";
}
else{
    echo "problem Adding product";
}
