<!-- controllers-home -->

<?php 
  Class Home extends Controllers {

    function SayHi() {
      $sv = $this->modal('StudentModal');
      echo $sv->getSV();
    }

    function Show () {
      $data = 1;
      return $sv = $this->view('Students', [
        "number" => $data,
        "id" => 1,
        "name" => "nguyen van a"
      ]);
    } 
  }
?>