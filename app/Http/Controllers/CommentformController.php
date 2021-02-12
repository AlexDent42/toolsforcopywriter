<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CommentformRequest;
use App\Models\Comment;


class CommentformController extends Controller
{
  public function submitComment(CommentformRequest $request)
  {
  	// dd($request);

    Comment::create($request->only(['name','email', 'comment', 'tool_id']));




  	// $comment = new Commentform();
  	// $commentform -> comment_post_ID = $request->input('comment_post_ID');
  	// $commentform -> first_name = $request-> input('first_name');
  	// $commentform -> email = $request -> input('email');
  	// $commentform -> comment = $request -> input('comment');
  	// $commentform -> comment_agent = $request -> header('user-agent');
  	// $commentform -> comment_author_ip = $request->ip();
  	// $commentform -> save();



  	return redirect()->back()->with('success', 'Your message has been added and is awaiting moderation');



  	



  	//dd($request);
  }
}
