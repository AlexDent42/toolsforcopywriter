<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ChangetextcaseRequest;
use App\Models\Changetextcase;
use App\Models\Tool;
use App\Models\Comment;

class ChangetextcaseController extends Controller
{
    public function index()
    {
        $tool = Tool::where('id',4)->first();

        $comments = $tool->comments->where('status', 'active')->sortByDesc('id');

        

        return view('tools/change-text-case', compact('tool','comments'));
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


        $changetextcase = new Changetextcase();
        $changetextcase -> text_before = $text;
        $changetextcase -> text_after = $result;
        $changetextcase -> settings = $request->input('text-value');
        $changetextcase -> save();

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
