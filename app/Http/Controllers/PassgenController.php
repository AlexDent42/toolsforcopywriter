<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Passgen;
use App\Models\Comment;
use App\Models\Tool;

class PassgenController extends Controller
{

	public function index()
	{
		
		// $comment = Comment::orderBy('id', 'desc')->where('comment_post_ID','=', 129)->where('comment_approved','=',1)->take(50)->get();
		$tool = Tool::where('id',2)->first();
		$comments = $tool->comments->where('status','active');

		return view('tools/passwords-generator', compact('tool', 'comments'));





	}

  public function generate(Request $request)
  {
  



		$random_string = '';							
		$length=$request->input('passLength');
		
			if($request->input('includeNumbers')==1)
					{$numbers='0123456789';
					 $random_string.=mt_rand(0,9);
					}
						
			 
			else $numbers='';
		
			if($request->input('includeLowercase')==1)
					{$lowercase='abcdefghijklmnopqrstuvwxyz';
					 $lcTemp=mt_rand(0,25);
					  $random_string.=$lowercase[$lcTemp];
					}
					 
		 	else $lowercase='';
		
			if($request->input('includeUppercase')==1)
					{$uppercase='ABCDEFGHIJKLMNOPQRSTUVWXYZ';
					 $ucTemp=mt_rand(0,25);
					  $random_string.=$uppercase[$ucTemp];
					}
			 else $uppercase='';
		
		
			if($request->input('includeSymbols')==1)
					{$includeSymbols='!"#$%&\'()*+,-./:;<=>?@[\]^_`{|}~';
					 $isTemp=mt_rand(0,32);
					 $random_string.=$includeSymbols[$isTemp];
					}
			 else $includeSymbols='';
			 $permitted_chars='';
								 
													
			$permitted_chars = $numbers.$lowercase.$uppercase.$includeSymbols;
			$perm_length=strlen($permitted_chars) - 1;

								
 
    					$randNumber =0;
				    	$random_character='';

    		for($i = strlen($random_string); $i < $length; $i++) 
				    {

				    	$randNumber = mt_rand(0,$perm_length);
				        $random_character = $permitted_chars[$randNumber];
				        $random_string.= $random_character;
				    }
 
  			$random_string=str_shuffle($random_string);

  			session(['password' => $random_string]); 

  			$passgen = new Passgen();
  			$passgen -> password = $random_string;
  			$passgen -> md5hash = md5($random_string);
  			$passgen ->save();

 



return redirect()->route('passwords-generator'); 
//return view::make('tools/passwords-generator', ['password' => $random_string]);	
	
	}
}