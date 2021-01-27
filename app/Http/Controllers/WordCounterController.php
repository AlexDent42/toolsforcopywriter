<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\WordcalcRequest;

class WordCounterController extends Controller
{
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

	
	session(['words' => $res_words, 'characters' => $res_len, 'withoutspaces' => $res_spaces, 'readingtime' => $readingTime, 'speakingtime' => $speakingTime]);

	return redirect()->back();


/*

$other=100;
foreach ($res as $key=>$value)
{
if($value>1 && $key!='the' && $key!='a' && $key!='or' && $key!='is' && $key!='in' && $key!='on' && $key!='and')
{$perc = round($value*100/$res_words, 1);$other-=$perc;
										
*/



  	}
}
