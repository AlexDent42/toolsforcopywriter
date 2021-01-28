<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Md5generatorRequest;

class Md5generatorController extends Controller
{
    public function generate(Md5generatorRequest $request)
    {
    	$text = $request-> input('text');
    	$tomd5string = md5($text);
    	$tosha1string = sha1($text);
    	$tocrc32string = crc32($text);

    	//echo $tomd5string.'<hr>'.$tosha1string.'<hr>'.$tocrc32string;


    	session(['md5'=> $tomd5string, 'sha1' => $tosha1string, 'crc32' => $tocrc32string, 'yourtext'=> $text]);

    	return redirect()->back();

    }


}
