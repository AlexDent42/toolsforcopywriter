<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tool;

class IndexPageController extends Controller
{
    public function index()
    {

        
        $tools = Tool::withCount('comments')->get();
       



        return view('index', compact('tools'));
    }
}
