<?php

class Product
{
    
    public function addProduct($pname,$pcat){
        $db = Database::getDB();
        $sql = "INSERT INTO mproducts (productName,category) VALUES ('$pname', '$pcat')";
        $result = $db->exec($sql);
        
        return $result;
        
    }
    public function getCategory(){
        $db = Database::getDB();
        $sql = "SELECT DISTINCT category FROM mproducts";
        $result = $db->query($sql);

        $category = $result->fetchAll();
        return $category;
    }
    
    public function getProducts(){
        $db = Database::getDB();

        $sql = "SELECT * FROM mproducts";

        $result = $db->query($sql);

        $products = $result->fetchAll();
        return $products;
    }
    
    public function getProdInCat($category){
        
        $db = Database::getDB();

        $sql = "SELECT * FROM mproducts where category = '$category'";

        $result = $db->query($sql);

        $products = $result->fetchAll();
        return $products;
    }

}
