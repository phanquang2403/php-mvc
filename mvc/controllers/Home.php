<!-- controllers-home -->

<?php 
  Class Home extends Controllers {

    function SayHi() {
      $sv = $this->modal('StudentModal');
      echo $sv->getSV();
    }

    function Show () {
      $sv = $this->modal('StudentModal');
      echo $sv->sum(1, 2);
    }
    
  }

?>