<?php 
  class StudentModal extends DB{
    public function getSV(){

      $qr = "SELECT * FROM users";
      return mysqli_query($this->conn,$qr );
    }

    public function sum($n , $m){
      return $n + $m;
    }
    
  }
?>