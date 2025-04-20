<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

route::get('/halo', function(){
    return view('halo', [
        "name" => 'Abogo'
    ]);
});

Route::get('/hi', function(){
    return view('admin.hi', [
        "name" => "Ikhwan"
    ]);
});