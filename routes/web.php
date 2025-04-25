<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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
/*
Route::get('/contacts/create', [ContactController::class, 'create'])
    ->name('contacts.create');

Route::get('/contacts/{id}', [ContactController::class, 'show'])
    ->name('contacts.show');
*/
Route::controller(ContactController::class)->group(function () {
    Route::get('/contacts',       'index')->name('contacts.index');
    Route::get('/contacts/create','create')->name('contacts.create');
    Route::get('/contacts/{id}',  'show')->name('contacts.show');
});

route::get('/', WelcomeController::class);
    