<?php
class Database {
	
    private static $dsn = 'mysql:host=localhost;dbname=cdcol';
    private static $username = 'root';
    private static $password = '';
   //reference to db connection
    private static $db;

    
    private function __construct() {}

    //return reference to pdo object
    public static function getDB () {   //THIS IS STATIC METHOD SO WEHNEVER YOU CALL IT YOU DONT HAVE TO USE NEW KEYWORD WHILE CREATING OBJECT JUST USE "CLASS NAME" IT SELF
    	
        if (!isset(self::$db)) {
            try {
                self::$db = new PDO(self::$dsn,          //if i want to use private variable inside the function i have to call them as self::
                                     self::$username,
                                     self::$password);
            } catch (PDOException $e) {
                $error_message = $e->getMessage();
                include('../errors/database_error.php');
                exit();
            }
        }
        return self::$db;
    }
}
?>