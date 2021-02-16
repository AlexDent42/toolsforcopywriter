<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Comment;
use App\Models\Tool;

class DashboardIndexController extends Controller
{
   public function index()
   {
   		
   		$users = User::orderByDesc('id')->take(5)->get();
   		$comments = Comment::orderByDesc('id')->take(10)->get();
   		$tools = Tool::orderByDesc('id')->take(5)->get();
  
   		return view('auth.panel.index', compact('users', 'comments', 'tools'));

   }
}
