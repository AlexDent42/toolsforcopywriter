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


Route::post('/passwords-generator/generate', 'PassgenController@generate')->name('passgenerate');

Route::get('/check-server-status', 'ServerStatusController@firstUpload')->name('check-server-status');

Route::post('/check-server-status/check', 'ServerStatusController@submit')->name('server-status');

Route::post('/email-subscribe', 'EmailsubscribeController@subscribe')->name('email-subscribe');


Route::post('word-counter/calc', 'WordCounterController@calculate')->name('word-counter-calc');


Route::get('/online-md5-generator', function(){return view('tools/online-md5-generator');})->name('md5-generator');

Route::post('/online-md5-generator/generate', 'Md5generatorController@generate')->name('md5-generator-generate');


Route::get('/change-text-case', function(){return view('tools/change-text-case');})->name('text-case');

Route::post('/change-text-case/change', 'ChangetextcaseController@change')->name('text-case-change');

