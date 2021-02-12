<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CheckUrlRequest;
use App\Models\Domains;
use App\Models\Commentform;
use App\Models\Tool;

class ServerStatusController extends Controller
{


	protected $domains;
	protected $server_request;
	protected static $server_response;




	public function firstUpload()
	{
		$urls = Domains::orderBy('id', 'desc')->take(10)->get();
		$data = Commentform::orderBy('comment_id', 'desc')->where('comment_post_ID','=', 129)->where('comment_approved','=',1)->take(50)->get();
		$tool = Tool::where('id',1)->first();

		


		return view('tools/check-server-status', compact('urls', 'data', 'tool'));
	}


  public function submit(CheckUrlRequest $request)
{
						
  $urls = new Domains();
  $urls-> domains = $request->input('domain');
  $urls-> server_request = self::curlRequest($request);
  $urls->save();

  $cut_domain = substr($urls->domains, 0, 30);



   return redirect()->route('check-server-status', ['domain' => $cut_domain, 'server_request' => $urls-> server_request, 'server_response' => self::requestValidation(self::$server_response)]);
   //->with('success', 'There is updated message u see');
}




public static function curlRequest($request)
{

								
	$domain = $request->input('domain');
//Get server answer into $out variable
  if($curl = curl_init())
  {
	    curl_setopt($curl,CURLOPT_URL, $domain);
	    curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
	    curl_setopt($curl,CURLOPT_NOBODY,true);
	    curl_setopt($curl,CURLOPT_HEADER,true);
	    $out = curl_exec($curl);		
		 curl_close($curl);
		}



 
 if(!empty($out))
 		{
		 $arr = explode(' ',$out);
		 $serverResponse = $arr[1];
		 self:: $server_response =$serverResponse;

	return $serverResponse;
		}

	else 
		{
			$serverResponse = 0;
			self:: $server_response = $serverResponse;
			
			return $serverResponse;
		}



}


public static function requestValidation($serverResponse)
{
	if($serverResponse<399 && $serverResponse!=0)
	{
		return 'Be happy:)Server isnt down';
	}
	if($serverResponse>=400)
	{
		return 'OMG! Server is currently down:(';
	}
	if($serverResponse=0)
		return 'Are you sure you did everything right?';
	else
		return 'Are you sure you did everything right?';
					
										
}


}
