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

Route::get('/online-text-editor', function(){return view('tools/online-text-editor');})->name('text-editor');

Route::get('/reverse-text-generator', function()	{return view('tools/reverse-text-generator');	})->name('reverse-text');

Route::post('/reverse-text-generator/generate', 'ReversetextgenController@generate')->name('reverse-generate');

Route::get('/text-to-binary-converter', function()	{return view('tools/text-to-binary-converter');	})->name('text-binary');

Route::post('/text-to-binary-converter/convert', 'TexttobinaryconverterController@convert')->name('text-binary-convert');

Route::get('/merge-words-online', function()	{return view('tools/merge-words-online');	})->name('merge-words');

Route::post('/merge-words-online/merge', 'MergewordsonlineController@merge')->name('merge-words-merge');

Route::get('/keyword-density-checker', function()	{return view('tools/keyword-density-checker');	})->name('keyword-density');

Route::post('/keyword-density-checker/check', 'KeyworddensityController@check')->name('keyword-density-checker');


Route::get('/test', function()
	{
		return view('/test');
	});

