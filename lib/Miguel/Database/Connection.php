<?php

    namespace Miguel\Database;

use PDO;

abstract class Connection{
        
        private static $conn;

        public static function getConn(){

            if (!self::$conn) {
                
                self::$conn = new \PDO('mysql: host=localhost; dbname=login+mvc', 'root', ''); 
            }
            return self::$conn;
        }
        
    }