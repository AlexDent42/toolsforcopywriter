<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\UsersController;
use App\Http\Controllers\Dashboard\CommentController;
use App\Models\Commentform;


Route::get('/', function () {
    return view('index');
})->name('index');


Route::get('/word-counter', function () {
    return view('tools/word-counter', ['data' => Commentform::orderBy('comment_id', 'desc')->where('comment_post_ID','=', 132)->where('comment_approved','=',1)->take(50)->get()]);
})->name('word-counter');


Route::get('/passwords-generator', function () {
    return view('tools/passwords-generator', ['data' => Commentform::orderBy('comment_id', 'desc')->where('comment_post_ID','=', 129)->where('comment_approved','=',1)->take(50)->get()]);
})->name('passwords-generator');


Route::post('/passwords-generator/generate', 'PassgenController@generate')->name('passgenerate');

Route::get('/check-server-status', 'ServerStatusController@firstUpload')->name('check-server-status');

Route::post('/check-server-status/check', 'ServerStatusController@submit')->name('server-status');

Route::post('/email-subscribe', 'EmailsubscribeController@subscribe')->name('email-subscribe');


Route::post('word-counter/calc', 'WordCounterController@calculate')->name('word-counter-calc');


Route::get('/online-md5-generator', function(){return view('tools/online-md5-generator', ['data' => Commentform::orderBy('comment_id', 'desc')->where('comment_post_ID','=', 127)->where('comment_approved','=',1)->take(50)->get()]);})->name('md5-generator');

Route::post('/online-md5-generator/generate', 'Md5generatorController@generate')->name('md5-generator-generate');


Route::get('/change-text-case', function(){return view('tools/change-text-case', ['data' => Commentform::orderBy('comment_id', 'desc')->where('comment_post_ID','=', 124)->where('comment_approved','=',1)->take(50)->get()]);})->name('text-case');

Route::post('/change-text-case/change', 'ChangetextcaseController@change')->name('text-case-change');

Route::get('/online-text-editor', function(){return view('tools/online-text-editor');})->name('text-editor');

Route::get('/reverse-text-generator', function()	{return view('tools/reverse-text-generator', ['data' => Commentform::orderBy('comment_id', 'desc')->where('comment_post_ID','=', 130)->where('comment_approved','=',1)->take(50)->get()]);	})->name('reverse-text');

Route::post('/reverse-text-generator/generate', 'ReversetextgenController@generate')->name('reverse-generate');

Route::get('/text-to-binary-converter', function()	{return view('tools/text-to-binary-converter', ['data' => Commentform::orderBy('comment_id', 'desc')->where('comment_post_ID','=', 131)->where('comment_approved','=',1)->take(50)->get()]);	})->name('text-binary');

Route::post('/text-to-binary-converter/convert', 'TexttobinaryconverterController@convert')->name('text-binary-convert');

Route::get('/merge-words-online', function()	{return view('tools/merge-words-online');	})->name('merge-words');

Route::post('/merge-words-online/merge', 'MergewordsonlineController@merge')->name('merge-words-merge');

Route::get('/keyword-density-checker', function()	
	{
		return view('tools/keyword-density-checker', ['data' => Commentform::orderBy('comment_id', 'desc')->where('comment_post_ID','=', 123)->where('comment_approved','=',1)->take(50)->get()]);	
})->name('keyword-density');





// Route::post('/keyword-density-checker/check', 'KeyworddensityController@check')->name('keyword-density-checker');

Route::post('/comment-form', 'CommentformController@submitComment')->name('comment-form');


Route::get('/test', function()
	{
		return view('/test');
	});


Auth::routes();

 // Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin');



Route::middleware(['auth'])->prefix('admin')->group(function() 
{ 
	Route::get('/', 'Dashboard\DashboardIndexController@index')->name('admin');
	 // Route::get('/users', function(){return 'usechjfhdrs';}); 
	Route::get('/comments', function(){return 'comments';}); 


	 Route::resource('/users', Dashboard\UsersController::class);

	Route::resource('/comments', Dashboard\CommentController::class);
}); 











