<?php


use Eraasoft311\Project\Core\Route;
use Eraasoft311\Project\Controllers\User;




Route::get("user",[User::class,"index"]);
Route::get("user/product",[User::class,"update"]);