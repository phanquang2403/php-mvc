<?php 
  class App{
    
    // http://localhost:8081/learn-php-basic/Home/SayHi/1/2/3
    
    protected $controller = "Home";
    protected $action = "SayHi";
    protected $params = [];

    function __construct(){
      
      $arr = $this->UrlProcess();
      

      // handle controllers
      if( file_exists("./mvc/controllers/{$arr[0]}.php")){
        $this->controller = $arr[0];
        unset($arr[0]);
      }
      
      require_once("./mvc/controllers/{$this->controller}.php");
      $this->controller = new $this->controller();
      // handle action

      if(isset($arr[1])){
        if(method_exists($this->controller, $arr[1])){

          $this->action = $arr[1];
        }
        unset($arr[1]);

      }

      // handle param


      $this->params = $arr ?? [];

     

      
      call_user_func_array([new $this->controller, $this->action], $this->params);
    }

    function UrlProcess() {

      if(isset($_GET['url'])){
        return explode('/',  filter_var(trim($_GET['url'])));
      }
      
    }
  }
?>