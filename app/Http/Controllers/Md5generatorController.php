<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Md5generatorRequest;
use App\Models\Md5generator;

class Md5generatorController extends Controller
{
    public function generate(Md5generatorRequest $request)
    {
    	$text = $request-> input('text');
    	$tomd5string = md5($text);
    	$tosha1string = sha1($text);
    	$tocrc32string = crc32($text);


        $md5generator = new Md5generator();
        $md5generator -> text = $text;
        $md5generator -> md5hash = $tomd5string;
        $md5generator -> crc32hash = $tocrc32string;
        $md5generator -> sha1hash = $tosha1string;
        $md5generator -> save();





    	//echo $tomd5string.'<hr>'.$tosha1string.'<hr>'.$tocrc32string;


    	session(['md5'=> $tomd5string, 'sha1' => $tosha1string, 'crc32' => $tocrc32string, 'yourtext'=> $text]);

    	return redirect()->back();

    }


}
