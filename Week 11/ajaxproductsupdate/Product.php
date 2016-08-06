<?php

class Product
{
    /**
     FIrst she created without class and then she created class and copy one by one query make
    function and call that function from where you deleted this code  and pest it in to class..call
    at function at that place
    **/
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