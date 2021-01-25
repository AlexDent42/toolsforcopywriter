<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CheckUrlRequest;
use App\Models\Domains;

class ServerStatusController extends Controller
{
  public function submit(CheckUrlRequest $request)
{
  $urls = new Domains();
  $urls-> domains = $request->input('domain');
  $urls-> server_request = 200;
  $urls->save();

  return redirect()->route('index'); 
}
}
