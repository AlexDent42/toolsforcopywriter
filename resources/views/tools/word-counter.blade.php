		
@extends('layouts.app')


@section('title')
Free Word Counter - Count Words &amp; Correct Writing| ToolsforCopywriter.com
@endsection

@section('description')
Copy and paste your text into the online editor to count its words and characters and check keyword density ⭐Free Word Counter - Count Words &amp; Correct Writing
@endsection

@section('keywords')
word counter, word count, character count
@endsection

@section('main-title')
Free Word Counter
@endsection

@section('current-url')
{{route('word-counter')}}
@endsection




@section('main-content')

		<div class="main-container right-slidebar single-post v2">
            <div class="container">
                <div class="row">
					
					
					
		
                    
                    <div class="main-content col-xs-12 col-md-8">
                        <div class="blog-post-container blog-page">
                            <div class="blog-post-single blog-post-item">
                                @if(session()->has('words'))
                                <div class="blog-post-info">

                                    <h3 class="post-name ver2">{{ session('words')  }}  Words {{ session('characters') }} Characters {{ session('withoutspaces') }} Without White Spaces</h3>
									
										<h4 class="post-name ver2">Reading Time -  {{ session('readingtime') }} min. </h4>
									    <h4 class="post-name ver2">Speaking Time - {{ session('speakingtime') }} min.</h4>
									
                                </div>
                                @endif


                                            <div class="post-reply">

                                        @if(session()->has('smth'))
                									 <div class="row">
                                                         <div class="col-md-6 col-xs-12">
                                                             <h3 class="post-title widget-title"> Keyword Density</h3>         
                                                         </div>

                						
                										 <div class="col-md-6 col-xs-12">
                                                        
                                                             <label><i></i></label>
                                                                       
                                                         </div>
                										

                										 
                										 
                										   <div class="col-md-6 col-xs-12">
                														
                                                                        <label><i>key;?</i></label>
                                                                       
                                                            </div>
                                                            <div class="col-md-6 col-xs-12">
                                                                <label>perc.'%'</label>
                                                                       
                                                            </div>
                								
                								
                								
                								
                										 <div class="col-md-6 col-xs-12">
                														
                                                                <label><i>Other</i></label>
                                                                       
                                                         </div>
                                                         <div class="col-md-6 col-xs-12">
                                                                <label> round($other, 1).'%';?></label>
                                                                       
                                                        </div>
                				
                                                    </div>
                                                       @endif
                									
        									
        									 @include('includes.messages')
                                                <form action="{{route('word-counter-calc')}}" class="comment-form" method="post">
                                                    @csrf
                                                        
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                   
                                                                    <textarea name="text" id="message" tabindex="2" class="form-control" placeholder="Start typing, or copy and paste your document here..."></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button type="submit" class="btn btn-submit">Count</button>
                                                </form>
                                    </div>


                                <div class="post-metas ver2">
                                    
                                </div>
                                 <div class="blog-post-info">
                                    
                                    <h3 class="post-name ver2">What is WordCounter?</h3>
                                </div>
                                <div class="post-content">
                                    <div class="row">
                                        
                                    </div>
                                    <div class="post-text">
                                    	<p>Word Counter is an easy to use and free online tool for counting words, characters in real time. Count words, check grammar and improve your writing. Get started by typing directly into the text area above or pasting in your content from elsewhere. </p>

                                       
                                  
                                      
                                    </div>
                                    <div class="blog-post-info">
                                    
                                    <h3 class="post-name ver2">Why would you need an online word counter?</h3>
                                </div>
                                     <div class="post-text">
                                    	<p>Online word counters are a perfect tool for anyone who needs to keep a count of their words and characters, but doesn’t use Microsoft Word. </p>

                                   
                                    </div>
                                    <div class="blog-post-info">
                                    
                                    <h3 class="post-name ver2">Whom is this word counting tool for?</h3>
                                </div>
                                     <div class="post-text">
                                    	<p>Bloggers/Content Writers</p>
                                    	<p>Teachers/Students</p>

                                   
                                    </div>

                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar col-xs-12 col-md-4">
                        
                        
                        
                       @include('includes/aside-email')


                         <aside class="widget widget_category">
                            <h3 class="widget-title">Tags</h3>
                            <ul>
                                <li><a href="{{route('word-counter')}}">character counter</a></li>
                                <li><a href="{{route('word-counter')}}">how many words</a></li>
                                <li><a href="{{route('word-counter')}}">word counter tool</a></li>
                                <li><a href="{{route('word-counter')}}">count characters</a></li>
                                <li><a href="{{route('word-counter')}}">word counter online</a></li>

                                <li><a href="{{route('word-counter')}}">online character counter</a></li>
                                <li><a href="{{route('word-counter')}}">character count online</a></li>
                                <li><a href="{{route('word-counter')}}">characters count</a></li>
                                <li><a href="{{route('word-counter')}}">count my words</a></li>
                                <li><a href="{{route('word-counter')}}">word couter</a></li>
                            </ul>
                        </aside>
                       
                        
                    </div>
                </div>
            </div>
        </div>
        @php
            session()->forget(['words', 'characters', 'withoutspaces' , 'readingtime' , 'speakingtime']);
        @endphp

@endsection