<?php 
 class dataBase {
  private static $instance = null;//type dataBase
  private $connection;//type PDO

  private function __construct() {
      $this->connection = new PDO("mysql:host=localhost;dbname=voyage2", "root", "");
  }

  public static function getInstance() {
      if (self::$instance == null) {
        try {
          self::$instance = new dataBase();
          self::$instance->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          echo "Connected successfully";
        } catch (PDOException $e) {
          echo "Connection failed: " . $e->getMessage();
        }
          
      }
      return self::$instance;
  }

  public function getConnection() {
      return $this->connection;
  }

 
}



?>