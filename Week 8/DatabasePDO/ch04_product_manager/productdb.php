<?php
require_once 'dbclass.php';

class ProductDB{
    public function __construct() {
        
    }
    public function deleteProduct($id){
        
            $db = Dbclass::getDB();
            $query = "DELETE FROM mproducts
                      WHERE productID = :id ";
            $stm = $db->prepare($query);
            $stm->bindParam(':id', $id);
            
            $count = $stm->execute();
            $id= 25;
            
            return "Deleted roWs: " . $count;
        
        }
    public function updateProduct($id, $category, $price, $name, $code){

        $db = Dbclass::getDB();
        $query = "UPDATE mproducts
                    SET category = :cat,
                    productCode = :code,
                    productName = :name,
                    listPrice = :price
                      WHERE productID = :id ";
        $stm = $db->prepare($query);
        $stm->bindParam(':id', $id);
        $stm->bindParam(':cat', $category, PDO::PARAM_STR, 50);
        $stm->bindParam(':code', $code, PDO::PARAM_STR, 50);
        $stm->bindParam(':name', $name, PDO::PARAM_STR, 200);
        $stm->bindParam(':price', $price, PDO::PARAM_INT);
        $count = $stm->execute();


        return "Updated rows: " . $count;

    }
    
}

