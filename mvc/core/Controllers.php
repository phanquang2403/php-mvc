<?php 
  class Controllers{
    public function modal($modal){
      require_once("./mvc/models/".$modal.".php");
      return new $modal;
    }
  }
?>