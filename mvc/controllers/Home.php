<!-- controllers-home -->

<?php 
  Class Home extends Controllers {

    function SayHi() {
      $sv = $this->modal('StudentModal');
      echo $sv->getSV();
    }

    function Show () {
      
      $sv = $this->modal('StudentModal');
      $data = $sv->getSV();
      return $sv = $this->view('Students', [
        "data" => $data,
        "page" => 'News',
        "name" => "nguyen van a"
      ]);
    } 
  }
?>