<?php
class DB {
    //stores instance of database
     private static $_instance = null;

     // represents PDO object
     private $_pdo,

     // last query executed
      $_query,

      // whether error or not
       $_error = false, 

       //store results set
       $_results,

       //count of results
        $_count = 0; 
        //connect to DB
        private function __construct() {
            try {
                 $this->_pdo = new PDO('mysql:host=' . Config::get('mysql/host') . ';port=8889' . ';dbname=' . Config::get('mysql/db'), Config::get('mysql/username'), Config::get('mysql/password'));
echo "connected";
            } catch(PDOException $e) {
                die($e->getMessage()); 

            }
        }
        //checks if instance exists
        public static function getInstance() {
            // sets instance if doesn't exist
            //self because of static
            if(!isset(self::$_instance)) {
                self::$_instance = new DB();

            }
            //if it does exist just return current instance
            return self::$_instance;
        }
}