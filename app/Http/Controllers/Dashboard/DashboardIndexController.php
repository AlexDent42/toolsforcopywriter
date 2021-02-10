<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class DashboardIndexController extends Controller
{
   public function index()
   {
   		
   		$users = User::all();
  
   		return view('auth.panel.index', compact('users'));

   }
}
