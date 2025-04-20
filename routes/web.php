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

route::get('/html-encoding', function (\Illuminate\Http\Request $request){
    return view('html-encoding', ['name' => $request->input('name')]);
});