<?php
//SHE MADE A SEPRATE CLASS SO IN THIS CLASS SHE IS GOING TO WRITE ONLY QUERIES PART
class CategoryDB {
    public static function getCategories() {
        $db = Database::getDB();  //CLASS NAME WITH WHICH EVER METHOD OR PROPERTY YOU WANT TO CALL
        //IT RETURNS SELF::DB I WANT TO STORE THAT RETURN VALUE TO $db VARIBALE
        $query = 'SELECT * FROM categories
                  ORDER BY categoryID';
        $result = $db->query($query);

        //SO IF YOU JUST WRITE UNTILL ABOVE THEN YOU CALL ABOVE METHOD SO IT'S EXECUTE LIKE THAT
        /*
         * $a= CategoryDB::getCategories
         * foreach($a as $b)
         * {
         *  $value1= $b['categoryID']
         *    $value2= $b['categoryName']
         * }
         *or in HTML code we do echo $value1;
         * insted of this we call the construcuor which is in class category
         * $category = new Category($value1,$value2)
         * $category->getvalue1(); like this we can do for second value also
         */
        $categories = array();
        foreach ($result as $row) {
            //HERE CREATING A OBJECT OFTHE CATEGORY CLASS AND INSIDE CONSTRUCTORE PASSING BELOW VALUES
            $category = new Category($row['categoryID'],
                                     $row['categoryName']);
            //here can not reurn two value if we call constructor method for two value return two seprate values
            //so putting in array and returning with array
            $categories[] = $category;
        }
        return $categories;
    }

    public static function getCategory($category_id) {
        $db = Database::getDB();
        $query = "SELECT * FROM categories
                  WHERE categoryID = '$category_id'";
        $statement = $db->query($query);
        $row = $statement->fetch();
        $category = new Category($row['categoryID'],
                                 $row['categoryName']);
        return $category;
    }
}
?>