<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ReversetextgenRequest;
use App\Models\Reversetext;
use App\Models\Tool;
use App\Models\Comment;

class ReversetextgenController extends Controller
{


   public function index()
   {

      $tool = Tool::where('id',7)->first();
      $comments = $tool->comments->where('status','active')->sortByDesc('id');




      return view('tools/reverse-text-generator', compact('tool', 'comments'));
   }
   public function generate(ReversetextgenRequest $request)
   {
   	$text = $request-> input('text');

   	if($request->input('text-value')== 'reverse-text')
   	{
   		$result = $this->reverseText($text);

   	}

   	if($request->input('text-value')=='reverse-wording')
   	{
   		$result = $this->reverseWording($text);

   	}

   	if($request->input('text-value')=='reverse-each-word-s-lettering')
   	{
   		$result = $this->reverseEachWordsLettering($text);
   		
   	}

   	if($request->input('text-value')=='flip-text')
   	{
   		$result = $this->reverseText($text);
   		
   	}

   	session(['result' => $result]);

      $reversetext = new Reversetext();
      $reversetext -> text = $text;
      $reversetext -> result_text_reverse =$result;
      $reversetext -> settings = $request ->input('text-value');
      $reversetext ->save();




   	return redirect()->back();


   }



   public function reverseText($text)
   {
   	return strrev($text);

   }

      public function reverseWording($text)
   {
   	$array = array_reverse(explode(' ', $text));
   	return implode(' ', $array); 
   	
   }

    public function reverseEachWordsLettering($text)
   {
   		$array = explode(' ', $text);
   		foreach($array as $element)
   		{
   			$result[] = strrev($element); 
   		}

   		return implode(' ', $result);

   	
   }


}
