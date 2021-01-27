<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PassgenController extends Controller
{
  public function generate(Request $request)
  {
  
 //dd($request);



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
								 
													
			$permitted_chars = $numbers.$lowercase.$uppercase.$includeSymbols;
			$perm_length=strlen($permitted_chars);

								
 
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

 



return redirect()->route('passwords-generator'); 
//return view::make('tools/passwords-generator', ['password' => $random_string]);	
	
	}
}