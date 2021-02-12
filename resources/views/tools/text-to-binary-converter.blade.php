		
@extends('layouts.app')


@include('includes.head')

@section('current-url')
{{route('text-binary')}}
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
                                                <form action="{{route('text-binary-convert')}}" class="comment-form" method="post">
                                                    @csrf

                                               
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-xs-12 col-sm-6 col-md-6">
                                                    <div class="blog-post-item post-item">
                                                        
                                                        <div class="blog-post-info v2">

                                                             <h4 class="post-name">Text to Binary Converter</h4>  
                                                                 <input type="radio" name="text-value" value="text-to-binary" checked>
                                                                   
                                                           
                                                          
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-6 col-md-6">
                                                    <div class="blog-post-item post-item">
                                                        
                                                        <div class="blog-post-info v2">
                                                           
                                                                <h4 class="post-name">Binary to Text Converter</h4>
                                                             <input type="radio" name="text-value" value="binary-to-text">
                                                             
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                             
                                               
                                                                <div class="col-md-12">
                                                                   
                                                                    <textarea name="text" id="message" tabindex="2" class="form-control" placeholder="Start typing, or copy and paste your document here...">{{ session()->pull('result')  }} </textarea>
                                                                </div>
                                                            </div>
                                                        </div>








                                                        <button type="submit" class="btn btn-submit">Translate</button>
                                                </form>
                                    </div>


                                <div class="post-metas ver2">
                                    
                                </div>
                                 <div class="blog-post-info">
                                    
                                   
                                </div>
                                <div class="post-content">
                                    <div class="row">
                                        
                                    </div>
                                  
                                    <div class="blog-post-info">
                                    
                                   
                                </div>
                                      {{-- TOOL TEXT HERE --}}
                                    <div class="post-content">
                                            <div class="row">
                                                <div class="col-12">
                                                    {{ $tool->text }}
                                                </div>
                                            </div>
                                            <div class="post-text">
                                            </div>
                                    </div>
                                    {{-- ENT TOOL TEXT --}}
                                  

                                    <div class="blog-post-info">
                                    
                                  
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
                                <li><a href="{{route('text-binary')}}">convert file to binary</a></li>
                                <li><a href="{{route('text-binary')}}">convert text file to binary</a></li>
                                <li><a href="{{route('text-binary')}}">convert file to binary online</a></li>
                                <li><a href="{{route('text-binary')}}">convert txt to bin</a></li>
                                <li><a href="{{route('text-binary')}}">text to binary online</a></li>

                                <li><a href="{{route('text-binary')}}">text to binary converter online</a></li>
                                <li><a href="{{route('text-binary')}}">text to binary code generator</a></li>
                                <li><a href="{{route('text-binary')}}">translate binary code into english</a></li>
                                <li><a href="{{route('text-binary')}}">binary to text translator online</a></li>
                                <li><a href="{{route('text-binary')}}">english to binary converter</a></li>
                            </ul>
                        </aside>
                       
                        
                    </div>
                </div>
            </div>
        </div>
       

@endsection