<?php 
  class API_users extends Controllers{
    public function getUser(){
      $getUsers = $this->modal('Users');
      $data =[];

      array_push($data,$getUsers->getSV());
      echo json_encode($data);
    }
  }
?>

<!-- http://localhost:8081/learn-php-basic/API_users/getUser -->