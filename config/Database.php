<?php 
  class Database {
    // DB Params
    private $host = 'mysql-eazyevent.alwaysdata.net';
    private $db_name = 'eazyevent_database';
    private $username = 'eazyevent';
    private $password = 'Essotchossim99';
    private $conn;

    // DB Connect
    public function connect() {
      $this->conn = null;

      try { 
        $this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db_name, $this->username, $this->password);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      } catch(PDOException $e) {
        echo 'Connection Error: ' . $e->getMessage();
      }

      return $this->conn;
    }
  }