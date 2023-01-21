<?php
namespace Eraasoft311\Project\Controllers;
use Exception;

class Controller 
{
    public function __call($name, $arguments)
    {
        throw new Exception("method $name not found");
    }
}