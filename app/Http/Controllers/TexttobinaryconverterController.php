<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TexttobinRequest;

class TexttobinaryconverterController extends Controller
{
  public function convert(TexttobinRequest $request)
  {
  	$text = $request->input('text');

  	if($request->input('text-value')=='text-to-binary')
  	{
  		$result = $this->textToBinary($text);
  	}

  	if($request->input('text-value')=='binary-to-text')
  	{
  		$result = $this->binaryToText($text);
  	}
  	session(['result' => $result]);



  	return redirect()->back();
  }




  public function textToBinary($text)
  {
  $characters = str_split($text);
 
    $binary = [];
    foreach ($characters as $character) {
        $data = unpack('H*', $character);
        $binary[] = base_convert($data[1], 16, 2);
    }
 
    return implode(' ', $binary);    
}

  public function binaryToText($text)
  {
  	$binaries = explode(' ', $text);
 
    $string = null;
    foreach ($binaries as $binary) {
        $string .= pack('H*', dechex(bindec($binary)));
    }
 
    return $string;   

  }
}
