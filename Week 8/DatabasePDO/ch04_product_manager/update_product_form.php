<?php
require_once 'dbclass.php';
$id= $_POST['product_id'];
// below is calling the database using class which she shows we can do it by class ALSO LATER ONE that one
$db = Dbclass::getDB();

$sql = "SELECT * FROM mproducts WHERE productID = '$id'";
var_dump($sql);
$result = $db->query($sql);
$product = $result->fetch();
// According product id ..get the whole row from the database and and put it's value to the form
//iF YOU USE FETCHALL() THEN YOU HAVE TO USE FOREACH TO GET ONE ROW
?>

        <form action="update_product.php" method="post">

                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <label>Code:</label>
                <input type="input" name="code" value="<?php echo $product['productCode']; ?>" />
                <br />

                <label>Name:</label>
                <input type="input" name="name" value="<?php echo $product['productName']; ?>"/>
                <br />

                <label>List Price:</label>
                <input type="input" name="price" value="<?php echo $product['listPrice']; ?>" />
                <br />
                
                <label>Category:</label>
                <input type="input" name="category" value="<?php echo $product['category']; ?>" />
                
                <br />
                <label>&nbsp;</label>
                <input type="submit" value="Update Product" />
                <br />
        </form>


