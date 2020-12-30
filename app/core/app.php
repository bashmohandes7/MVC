<?php

namespace MVC\core;

class APP{
    private $controller;
    private $method;
    private $params = [];
    function __construct()
    {
        $this->URL();
        $this->render();
        
    }
    private function URL(){
        if(!empty($_SERVER['QUERY_STRING'])){
            $url = explode("/",$_SERVER['QUERY_STRING']);
            // Controller Handling
            $this->controller = isset($url[0]) ? $url[0]."controller": "homecontroller";
            // Method Handling
            $this->method = isset($url[1]) ? $url[1]: "index";
            // Unset Controller and Method From Query String
            unset($url[0], $url[1]);
            // Get Parameters from query string after unset it and return params in new array(array values) to strat from zero indexing.
            $this->params = array_values($url);
        }else{
            $this->controller = "homecontroller";
            $this->method = "index";
        }
    }
   private function render(){
       $controller = "MVC\controllers\\".$this->controller;
       if(class_exists($controller)){
           $controller  = new $controller;
           if(method_exists($controller, $this->method)){
               call_user_func_array([$controller, $this->method],$this->params);
           }else{
               echo "No Method not exists";
           }
   }else{
       echo "Class is not exists";
   }
}
}