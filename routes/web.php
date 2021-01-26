<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
})->name('index');


Route::get('/word-counter', function () {
    return view('tools/word-counter');
})->name('word-counter');


Route::get('/passwords-generator', function () {
    return view('tools/passwords-generator');
})->name('passwords-generator');


//Route::get('/check-server-status', 'ServerStatusController@firstUpload');->name('check-server-status');
Route::get('/check-server-status', 'ServerStatusController@firstUpload')->name('check-server-status');
   // return view('tools/check-server-status');
//})

//->name('check-server-status');


//Route::get('/contact/all', 'ContactController@allData')->name('contact-data');

Route::post('/check-server-status/check', 'ServerStatusController@submit')->name('server-status');




