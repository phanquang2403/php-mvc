<?php 
  class InfoUsers {
    public $id;
    public $name;
    public $email;
    public $password;

    function __construct($id,$name,$email,$password)
    {
      $this->id =$id;
      $this->name =$name;
      $this->email =$email;
      $this->password =$password;

    }
  }
  class API_users extends Controllers{
    public function getUser(){
      $getUsers = $this->modal('Users');
      $users =  $getUsers->getSV();
      $data =[];

      while($r = mysqli_fetch_array($users)){

        array_push($data, new InfoUsers(
          $r['id'],
          $r['name'],
          $r['email'],
          $r['password'],
        ));

      }
      echo json_encode ($data);

    }
  }

  
?>