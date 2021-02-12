<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\UsersController;
use App\Http\Controllers\Dashboard\CommentController;
use App\Models\Commentform;


Route::get('/', function () {
    return view('index');
})->name('index');

/***
**  TOOLS AREA
**/

//words counter tool
Route::get('/word-counter', 'WordCounterController@index')->name('word-counter');
Route::post('word-counter/calc', 'WordCounterController@calculate')->name('word-counter-calc');
//passgen tool
Route::get('/passwords-generator', 'PassgenController@index')->name('passwords-generator');
Route::post('/passwords-generator/generate', 'PassgenController@generate')->name('passgenerate');
//server status tool
Route::get('/check-server-status', 'ServerStatusController@firstUpload')->name('check-server-status');
Route::post('/check-server-status/check', 'ServerStatusController@submit')->name('server-status');

//md5 generator tool
Route::get('/online-md5-generator', 'Md5generatorController@index')->name('md5-generator');
Route::post('/online-md5-generator/generate', 'Md5generatorController@generate')->name('md5-generator-generate');

//text case tool
Route::get('/change-text-case', 'ChangetextcaseController@index')->name('text-case');
Route::post('/change-text-case/change', 'ChangetextcaseController@change')->name('text-case-change');
//online text editor tool
Route::get('/online-text-editor', 'TextEditorController@index')->name('text-editor');

//reverse text generator tool
Route::get('/reverse-text-generator', 'ReversetextgenController@index')->name('reverse-text');
Route::post('/reverse-text-generator/generate', 'ReversetextgenController@generate')->name('reverse-generate');
//text to binary converter tool
Route::get('/text-to-binary-converter', 'TexttobinaryconverterController@index')->name('text-binary');
Route::post('/text-to-binary-converter/convert', 'TexttobinaryconverterController@convert')->name('text-binary-convert');


//keyword density cheker tool
Route::get('/keyword-density-checker', 'WordCounterController@dencityindex')->name('keyword-density');




//COMMENT FORM
Route::post('/comment-form', 'CommentformController@submitComment')->name('comment-form');

// EMAIL SUBSCRIPTION
Route::post('/email-subscribe', 'EmailsubscribeController@subscribe')->name('email-subscribe');

/***
**  ADMIN AREA
**/

Auth::routes();

Route::middleware(['auth'])->prefix('admin')->group(function() 
{ 
	Route::get('/', 'Dashboard\DashboardIndexController@index')->name('admin');
	
	Route::get('/comments', function(){return 'comments';}); 


	 Route::resource('/users', Dashboard\UsersController::class);

	Route::resource('/comments', Dashboard\CommentController::class);
}); 











