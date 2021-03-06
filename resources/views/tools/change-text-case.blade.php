		
@extends('layouts.app')


@include('includes.head')

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


                               
                               
                                    
                                   
                                  
                                    
                                   {{-- TOOL TEXT HERE --}}
                                    <div class="post-content">
                                         <div class="post-text"> 
                                            <div class="row">
                                                <div class="col-12">
                                                    {!! $tool->text !!}
                                                </div>
                                            </div>
                                            </div>
                                    </div>
                                    {{-- ENT TOOL TEXT --}}

                                    
                              
                                 @include('includes.comments')
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