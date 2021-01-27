<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CheckEmailRequest;
use App\Models\Subscription;

class EmailsubscribeController extends Controller
{
   public function subscribe(CheckEmailRequest $request)
   {
   	$subscription = new Subscription();
   	$subscription -> email = $request->input('email');
   	$subscription ->save();

   	return redirect()-> back()->with('success', 'No spam. Just news. Promise.');

   
   }
}
