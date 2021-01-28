		
@extends('layouts.app')


@section('title')
Change Text Case | ToolsforCopywriter.com
@endsection

@section('description')
Change Text Case is a handy web application that enables you to change the text case of any given text. Simply copy and paste the text into the text area below and click the required text case.
@endsection

@section('keywords')
Change Text Case
@endsection

@section('main-title')
Change Text Case
@endsection

@section('current-url')
{{route('text-case')}}
@endsection




@section('main-content')

		<div class="main-container right-slidebar single-post v2">
            <div class="container">
                <div class="row">
					
					
					
		
                    
                    <div class="main-content col-xs-12 col-md-8">
                        <div class="blog-post-container blog-page">
                            <div class="blog-post-single blog-post-item">
                               
                                <div class="blog-post-info">

                                 

                                </div>

        

                                          
                        


                                            <div class="post-reply">



                									
        									
        									 @include('includes.messages')
                                                <form action="{{route('text-case-change')}}" class="comment-form" method="post">
                                                    @csrf

                                               
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-xs-12 col-sm-6 col-md-6">
                                                    <div class="blog-post-item post-item">
                                                        
                                                        <div class="blog-post-info v2">

                                                             <h4 class="post-name">UPPER CASE</h4>  
                                                                 <input type="radio" name="text-value" value="upper-case" checked>
                                                                   <h4 class="post-name">lower case</h4>
                                                             <input type="radio" name="text-value" value="lower-case">
                                                            
                                                           
                                                          
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-6 col-md-6">
                                                    <div class="blog-post-item post-item">
                                                        
                                                        <div class="blog-post-info v2">
                                                           
                                                                <h4 class="post-name">Capitalize Word</h4>
                                                             <input type="radio" name="text-value" value="capitalize-word">
                                                              <h4 class="post-name">aLtErNaTe case</h4>
                                                             <input type="radio" name="text-value" value="alternate-case">
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                             
                                               
                                                                <div class="col-md-12">
                                                                   
                                                                    <textarea name="text" id="message" tabindex="2" class="form-control" placeholder="Start typing, or copy and paste your document here...">{{ session()->pull('result')  }} </textarea>
                                                                </div>
                                                            </div>
                                                        </div>








                                                        <button type="submit" class="btn btn-submit">Change</button>
                                                </form>
                                    </div>


                                <div class="post-metas ver2">
                                    
                                </div>
                                 <div class="blog-post-info">
                                    
                                    <h3 class="post-name ver2">Change Text Case Tool</h3>
                                </div>
                                <div class="post-content">
                                    <div class="row">
                                        
                                    </div>
                                    <div class="post-text">
                                    	<p>An important tool which allows you to effortlessly change any text to lower case, UPPER CASE or even Capitalize Each Word, which is great for titles. </p>

                                       
                                  
                                      
                                    </div>
                                    <div class="blog-post-info">
                                    
                                    <h3 class="post-name ver2">Easy to use Change Text Case Tool</h3>
                                </div>
                                     <div class="post-text">
                                    	<p>Just paste any text to quickly change case</p>

                                   
                                    </div>
                                    <div class="blog-post-info">
                                    
                                    <h3 class="post-name ver2">Benefits of using the Change Text Case Tool</h3>
                                </div>
                                     <div class="post-text">
                                    	<p>Many word editing software do not offer the case convert feature. The good news is that you can use our free tool to solve possible capitalization issues. </p>

                                   
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
                                <li><a href="{{route('text-case')}}">capital letters to lowercase</a></li>
                                <li><a href="{{route('text-case')}}">convert to capital letters</a></li>
                                <li><a href="{{route('text-case')}}">text case converter</a></li>
                                <li><a href="{{route('text-case')}}">uppercase to lowercase converter</a></li>
                                <li><a href="{{route('text-case')}}">big letters to small letters</a></li>

                                <li><a href="{{route('text-case')}}">caps to lower case</a></li>
                                <li><a href="{{route('text-case')}}">lowercase online</a></li>
                                <li><a href="{{route('text-case')}}">change upper case to lower case</a></li>
                                <li><a href="{{route('text-case')}}">all caps converter</a></li>
                                <li><a href="{{route('text-case')}}">capital to small</a></li>
                            </ul>
                        </aside>
                       
                        
                    </div>
                </div>
            </div>
        </div>
       

@endsection