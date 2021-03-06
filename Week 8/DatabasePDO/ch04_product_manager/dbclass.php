<?php

class Dbclass{
    
    
    private static $dsn = 'mysql:host=localhost;dbname=cdcol';
    private static $username = 'root';
    private static $password = '';
    private static $db;
    
    private function __construct() {
        
    }
    
    public static function getDB(){

        try {
            if(!isset(self::$db)){
                self::$db = new PDO(self::$dsn, self::$username, self::$password);
            }
        } catch (PDOException $e) {
            $error_message = $e->getMessage();
            include('database_error.php');
            exit();
        }
        
        return self::$db;
    }
}
