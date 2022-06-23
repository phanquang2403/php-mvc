<?php 
  class Controllers{
    public function modal($modal){
      require_once("./mvc/models/".$modal.".php");
      return new $modal;
    }

    public function view($view, $data = []){
      require_once("./mvc/views/".$view.".php");
      return  $view;
    }
  }
?>