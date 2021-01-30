		
@extends('layouts.app')


@section('title')
Keyword Density Checker | ToolsforCopywriter.com
@endsection

@section('description')
Enter text and Keyword Density Checker will analyze the density of your text just as a search engine would do.
@endsection

@section('keywords')
Keyword Density Checker
@endsection

@section('main-title')
Keyword Density Checker
@endsection

@section('current-url')
{{route('keyword-density')}}
@endsection




@section('main-content')

		<div class="main-container right-slidebar single-post v2">
            <div class="container">
                <div class="row">
					
					
					
		
                    
                    <div class="main-content col-xs-12 col-md-8">
                        <div class="blog-post-container blog-page">
                            <div class="blog-post-single blog-post-item">
                               

                                            <div class="post-reply">

                                    
                									
        									
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
                                     @if(is_array(session('density')))

                                <div class="col-md-6 col-xs-12">
                                                        
                                                        <label><h4>Keywords</h4></label>
                                                       
                                                    </div>
                                                    <div class="col-md-6 col-xs-12">
                                                        <label><h4>Freq</h4></label>
                                                       
                                                    </div>
                               

                                @foreach(session('density') as $element => $value)
                                

                                                  <div class="col-md-6 col-xs-12">
                                                        
                                                        <label><i>{{$element}}</i></label>
                                                       
                                                    </div>
                                                    <div class="col-md-6 col-xs-12">
                                                        <label>{{$value}}</label>
                                                       
                                                    </div>
                                                   

                                @endforeach 
                                @php
                                session()->forget('density', 'words', 'characters', 'withoutspaces', 'readingtime', 'speakingtime' )
                                    
                                @endphp
                                @endif



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
                                <li><a href="{{route('keyword-density')}}">keyword density checker</a></li>
                                <li><a href="{{route('keyword-density')}}">keyword stuffing checker</a></li>
                                <li><a href="{{route('keyword-density')}}">seo tools keyword density</a></li>
                                <li><a href="{{route('keyword-density')}}">keyword density tools</a></li>
                                <li><a href="{{route('keyword-density')}}">keyword density tool</a></li>

                                <li><a href="{{route('keyword-density')}}">keyword density calculator</a></li>
                                <li><a href="{{route('keyword-density')}}">free keyword density tool</a></li>
                                <li><a href="{{route('keyword-density')}}">keyword density analyzer</a></li>
                                <li><a href="{{route('keyword-density')}}">keywords density analysis</a></li>
                                <li><a href="{{route('keyword-density')}}">how to check keyword density</a></li>
                            </ul>
                        </aside>

                       
                        
                    </div>
                </div>
            </div>
        </div>
      

@endsection