<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ChangetextcaseRequest;

class ChangetextcaseController extends Controller
{

	//protected static $text;



    public function changes(ChangetextcaseRequest $request)
    {
    	dd($request);

    }


     public function change(ChangetextcaseRequest $request)
    {
    	$text= $request->input('text');

    	if($request->input('text-value')=='upper-case')
    	{
    		$result = self::upperCase($text);
    	}


    	if($request->input('text-value')=='lower-case')
    	{
    		$result = self::lowerCase($text);
    	}


    	if($request->input('text-value')=='capitalize-word')
    	{
    		$result = self::capitalizeWord($text);
    	}

    	if($request->input('text-value')=='alternate-case')
    	{
    		$result = self::alternateCase($text);
    	}

    	session(['result' => $result]);

    	return redirect()->back();


    	
    }





    public static function upperCase($text)
    {
    	return strtoupper($text);

    }


    public static function capitalizeWord($text)
    {
    	return ucwords($text);

    }

    public static function lowerCase($text)
    {

    	return strtolower($text);

    }

    public static function alternateCase($text)
    {
    	$res = '';


    	$strLen = strlen($text) - 1;
    	for($i=0; $i <= $strLen; $i++)
    	{
    		if($i%2==0)
    		{
    		$res.= strtoupper($text[$i]);
    		}
    	else
    	{
    		$res.= strtolower($text[$i]);

    	}

    	}

    	return $res;



    }
}
