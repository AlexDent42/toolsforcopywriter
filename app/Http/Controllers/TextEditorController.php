<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tool;
use App\Models\Comments;

class TextEditorController extends Controller
{
   public function index()
   {

   	$tool = Tool::where('id', 6)->first();
   	$comments = $tool->comments->where('status', 'active');
   return view('tools/online-text-editor', compact('tool', 'comments'));
   }
}
