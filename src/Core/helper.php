<?php
use Jenssegers\Blade\Blade;




function view($path,$data = [])
{
    $blade = new Blade('../src/Views', '../src/cache');
    echo  $blade->make($path, $data)->render();
}



function dd($data)
{
    echo "<pre>";
    print_r($data);
    die;
}