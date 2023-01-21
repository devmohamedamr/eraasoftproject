<?php

namespace Eraasoft311\Project\Controllers;
use Eraasoft311\Mvc\Database\DB;
use Eraasoft311\Project\Models\userModel;

class User extends Controller{

    public function index()
    {
        dd(userModel::get());
        // $data = DB::table("category")->select()->all();
       
        $name = "mohamed";
        $title = "index mohamed";
       return view("index",['name'=>$name,"title"=>$title]);
    }

    public function update()
    {
        echo "update user";
    }
}