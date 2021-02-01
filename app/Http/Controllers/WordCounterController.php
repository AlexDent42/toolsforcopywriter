<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\WordcalcRequest;
use App\Models\Wordcounter;

class WordCounterController extends Controller
{
	protected $fulltext;
	protected $characters;
	protected $withoutspaces;
	protected $reading_time;
	protected $speaking_time;


  	public function calculate(WordcalcRequest $request)
  	{

$str =$request->input('text');
//Characters count result
$res_len=strlen($str);

	$trim_symbols=preg_replace('#[!-/:-@]+#','',$request->input('text'));
	//$trim_words=
	
	
$arr=explode(' ',$trim_symbols);
//Words count result
$res_words=count($arr);
//Reading time result
$readingTime=round($res_words/275, 1);
if($readingTime <1 ) {$readingTime='less than 1';}
//Speakink time result
$speakingTime=round($res_words/180, 1);
if($speakingTime <1) {$speakingTime='less than 1';}
	
$newar=$arr;
//Without spaces
$res_spaces= strlen(implode('',$arr));

$res = array_count_values($newar);
arsort($res);

$words = new Wordcounter();
  		$words -> fulltext = $request->input('text');
  		$words -> speaking_time = $speakingTime;
  		$words -> reading_time = $readingTime;
  		$words -> characters = $res_len;
  		$words-> withoutspaces = $res_spaces;
  		$words->save();

	
	session(['words' => $res_words, 'characters' => $res_len, 'withoutspaces' => $res_spaces, 'readingtime' => $readingTime, 'speakingtime' => $speakingTime, 'density' => $res]);

	return redirect()->back();
}



}















