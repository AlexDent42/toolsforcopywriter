		
@extends('layouts.app')


@include('includes.head')

@section('current-url')
{{route('reverse-text')}}
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
                                                <form action="{{route('reverse-generate')}}" class="comment-form" method="post">
                                                    @csrf

                                               
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-xs-12 col-sm-6 col-md-6">
                                                    <div class="blog-post-item post-item">
                                                        
                                                        <div class="blog-post-info v2">

                                                             <h4 class="post-name">Reverse text</h4>  
                                                                 <input type="radio" name="text-value" value="reverse-text" checked>
                                                                   <h4 class="post-name">Reverse Wording</h4>
                                                             <input type="radio" name="text-value" value="reverse-wording">
                                                            
                                                           
                                                          
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-6 col-md-6">
                                                    <div class="blog-post-item post-item">
                                                        
                                                        <div class="blog-post-info v2">
                                                           
                                                                <h4 class="post-name">Reverse Each Word's Lettering</h4>
                                                             <input type="radio" name="text-value" value="reverse-each-word-s-lettering">
                                                              <h4 class="post-name">Flip Text</h4>
                                                             <input type="radio" name="text-value" value="reverse-text">
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                             
                                               
                                                                <div class="col-md-12">
                                                                   
                                                                    <textarea name="text" id="message" tabindex="2" class="form-control" placeholder="Start typing, or copy and paste your document here...">{{ session()->pull('result')  }} </textarea>
                                                                </div>
                                                            </div>
                                                        </div>








                                                        <button type="submit" class="btn btn-submit">Reverse</button>
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
                                <li><a href="{{route('reverse-text')}}">turn words backwards generator</a></li>
                                <li><a href="{{route('reverse-text')}}">reverse text generator</a></li>
                                <li><a href="{{route('reverse-text')}}">backward word generator</a></li>
                                <li><a href="{{route('reverse-text')}}">flip words backwards generator</a></li>
                                <li><a href="{{route('reverse-text')}}">word backward generator</a></li>

                                <li><a href="{{route('reverse-text')}}">backward text</a></li>
                                <li><a href="{{route('reverse-text')}}">mirror text generator</a></li>
                                <li><a href="{{route('reverse-text')}}">mirror words generator</a></li>
                                <li><a href="{{route('reverse-text')}}">text backward</a></li>
                                <li><a href="{{route('reverse-text')}}">mirror text generator online</a></li>
                            </ul>
                        </aside>
                       
                        
                    </div>
                </div>
            </div>
        </div>
       

@endsection