		
@extends('layouts.app')

@include('includes.head')

@section('current-url')
{{route('text-editor')}}
@endsection




@section('main-content')

<script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script> <script type="text/javascript">
//<![CDATA[
        bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
  //]]>
  </script>

		<div class="main-container right-slidebar single-post v2">
            <div class="container">
                <div class="row">
					
					
					
		
                    
                    <div class="main-content col-xs-12 col-md-8">
                        <div class="blog-post-container blog-page">
                            <div class="blog-post-single blog-post-item">
                        


                                            <div class="post-reply">

                                      
                									 <div class="row">
                                                        
                										

                										 
                				
                                                    </div>
                                                     
                								
        									<textarea id="myInput" name="area2" style="width: 100%; height: 400px;padding: 20px; margin-top:25px;">
                                                Edit plain text here
                                            </textarea><br />
                                    
        								
        									 @include('includes.messages')
                                               
                                    </div>


                                
                                
                                <div class="post-content">
                                    <div class="row">
                                        
                                    </div>
                                    <div class="post-text">
                                    	
                                    </div>
                                   
                                     <div class="post-text">
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
                                <li><a href="{{route('text-editor')}}">wordpad online</a></li>
                                <li><a href="{{route('text-editor')}}">online text editor</a></li>
                                <li><a href="{{route('text-editor')}}">text edit online</a></li>
                                <li><a href="{{route('text-editor')}}">text editor online</a></li>
                                <li><a href="{{route('text-editor')}}">online wordpad</a></li>

                                <li><a href="{{route('text-editor')}}">article editor online</a></li>
                                <li><a href="{{route('text-editor')}}">plain text editor</a></li>
                               
                            </ul>
                        </aside>
                       
                        
                    </div>
                </div>
            </div>
        </div>
       

@endsection