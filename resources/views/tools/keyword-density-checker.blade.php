		
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

@section('comment_post_ID')
123
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
                                    
                                    <h3 class="post-name ver2">Keyword density tool</h3>
                                </div>
                                <div class="post-content">
                                    <div class="row">
                                        
                                    </div>
                                    <div class="post-text">
                                    	<p>When you enter a text or you copy paste content into the text input field, this tool will extract the total number of keywords found inside the body of the text. After extracting all the words it will automatically calculate the frequency </p>

                                       
                                  
                                      
                                    </div>
                                    <div class="blog-post-info">
                                    
                                    <h3 class="post-name ver2">What is the best keyword density?</h3>
                                </div>
                                     <div class="post-text">
                                    	<p>There is no exact answer to this question, because it all depends on the topic your writing about. Some topics ideal for long content forms and a lot of related keywords and synonyms. On the other hand you have the topics that are best served with a compact piece of content and a higher repetition of the same keywords. The best advice on this topic is writing natural and for human users</p>

                                   
                                    </div>
                                    <div class="blog-post-info">
                                    
                                    <h3 class="post-name ver2">What is keyword density?</h3>
                                </div>
                                     <div class="post-text">
                                    	<p>Keyword density is the percentage calculated based on the number of times a keyword occurs inside the content of webpage divided by the total word count. Keyword density / keyword frequency is still a pretty strong indicator to determine the main focus keywords and keyword phrases for a specific webpage.</p>

                                   
                                    </div>

                                    
                                </div>
                                @include('includes.comments')
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