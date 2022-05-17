<?php 
  class Database {
    // DB Params
    private $host = 'localhost';
    private $db_name = 'astrogamaa';
    private $username = 'root';
    private $password = 'root';
    private $conn;

    // DB Connect
    public function connect() {
      $this->conn = null;

      try { 
        $this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db_name, $this->username, $this->password);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
      } catch(PDOException $e) {   
        echo 'Connection Error: ' . $e->getMessage();
      }
      return $this->conn;
    }
    define('ASTROGAMMA','PROJECT')
  }