<?php
//Now here what ever user is modified and enter into form i have to grab that value and then store that updated value into database
// Get the product data
$id = $_POST['id'];
$category = $_POST['category'];
$code = $_POST['code'];
$name = $_POST['name'];
$price = $_POST['price'];

// Validate inputs
if (empty($code) || empty($name) || empty($price) ) {
    $error = "Invalid product data. Check all fields and try again.";
    include('error.php');
} else {
    // If valid, update the product to the database

    // she created the object of the class from productdb.php and that she called the update query method.

    require_once('productdb.php');
    $pdb =  new ProductDB();
    $pdb->updateProduct($id,$category,$price,$name,$code);


    // Display the Product List page
    header('location: index2.php');
}
?>