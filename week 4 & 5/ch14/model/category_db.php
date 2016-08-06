<?php
// category class holds only get and set methods and this class holds all database query functions

class CategoryDB {
    public static function getCategories() {
        $db = Database::getDB();    //getDB is a static method so to access that we can't create object with
                                   // new keyword ..we can access through Database class itself with ::
        $query = 'SELECT * FROM categories
                  ORDER BY categoryID';
        $statement = $db->prepare($query);
        $statement->execute();
        
        $categories = array();
        foreach ($statement as $row) {
            $category = new Category($row['categoryID'],         // creating object of category class and while creating constructor gets call autometicall
                                     $row['categoryName']);   //so passing valu which get from the data base that i m passing
            $categories[] = $category;
        }
        return $categories;
    }

    public static function getCategory($category_id) {
        $db = Database::getDB();
        $query = 'SELECT * FROM categories
                  WHERE categoryID = :category_id';    
        $statement = $db->prepare($query);
        $statement->bindValue(':category_id', $category_id);
        $statement->execute();    
        $row = $statement->fetch();
        $statement->closeCursor();    
        $category = new Category($row['categoryID'],
                                 $row['categoryName']);
        return $category;
    }
}
?>