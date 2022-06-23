<?php 
  class Users extends DB{
    public function getSV(){
  
    $qr = "SELECT * FROM users";
    return mysqli_query($this->conn,$qr );
    }
  }

?>