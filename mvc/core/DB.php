<?php 
  class DB {
    public $conn ;
    private $serverName = "localhost";
    private $username = "root";
    private $password = "";
    private $nameDB = "php_auth_api";

    function __construct(){
      $this->conn = mysqli_connect($this->serverName, $this->username, $this->password);
      mysqli_select_db($this->conn, $this->nameDB);
      if (!$this->conn) {
        die("Connection failed: " . mysqli_connect_error());
      }
      
    }
  }
?>