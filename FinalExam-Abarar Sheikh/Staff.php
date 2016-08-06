<?php

class Staff
{
   public function getStaff()
   {
       require_once 'database.php';
       $db = Database::getDB();

      //$sql = "SELECT * FROM staffdirectory where fname,lname = '$category'";
       $sql = "SELECT * FROM staffdirectory WHERE fname ='$category'";
       var_dump($sql);
       $result = $db->query($sql);

       $product = $result->fetchAll();
       return $product;
   }
}