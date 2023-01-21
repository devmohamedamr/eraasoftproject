<?php

namespace Eraasoft311\Project\Core;

use Exception;

class Kernel
{
    private $default = "user";


    private $controller;



    private $method;



    private function url()
    {
        $request_uri =  ltrim($_SERVER['REQUEST_URI'],"/");
        $URL = (isset($_SERVER['QUERY_STRING'])) ? $_SERVER['QUERY_STRING'] : $request_uri;
        return $URL;
    }

    public function run()
    {

        $url = (strlen($this->url()) > 0) ? $this->url() : $this->default;
        if(array_key_exists($url,Route::$routes)){
            
        $this->controller = Route::$routes[$url][0];
        $this->method = Route::$routes[$url][1];
        
        call_user_func_array([new $this->controller,$this->method],[]);
  
    }else{
        throw new Exception("controller not found");
       }
    }
}