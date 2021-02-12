@extends('layouts.app')


@include('includes.head')

@section('current-url')
{{route('md5-generator')}}
@endsection





@section('main-content')

   		<div class="main-container right-slidebar single-post v2">
            <div class="container">
                <div class="row">
					
					
					
		
                    
                    <div class="main-content col-xs-12 col-md-8">
                        <div class="blog-post-container blog-page">
                            <div class="blog-post-single blog-post-item">
                                <div class="blog-post-info">
                                  @include('includes.messages')


                                @if(session()->has('md5'))
                                 <div class="blog-post-info">
                                    <h4 class="post-name">Your text: {{session()->pull('yourtext')}}</h4>
                                        <h4 class="post-name">MD5: {{session()->pull('md5')}}</h4>
                                        <h4 class="post-name">SHA1: {{session()->pull('sha1')}}</h4>
                                         <h4 class="post-name">CRC32: {{session()->pull('crc32')}}</h4>
                                    </div>

                                @else
                                    
                                    <div class="blog-post-info">
                                        <h4 class="post-name">Enter the text you want to convert to a MD5 hash:</h4>
                                    </div>
                                @endif

                                    
                                </div> 
                                
	
                                <div class="post-reply">
                                      
                                       
                                            <div class="form-group">
                                                 <form action="{{route('md5-generator-generate')}}" method="post">
                                                            @csrf
                                               
                                                    <div class="row">
                                                        <div class="col-md-6 col-xs-12">
                                                            <input name="text" type="text" placeholder="put your text here.." id="myInput" class="form-control">
                                                        </div>
                                                        <div class="col-md-6 col-xs-12">
                                                          
                                                            
                                                             <button type="submit" class="btn btn-submit">Generate</button>
                                                           
                                                        </div>
                                                    </div>
                                                 </form>
                                            </div>
                                           
                                         
                                      
                                    </div>
 
                                <div class="post-related">
                                       
                                        <div class="post-related-slide">
                                           
                                            
                                            
                                            
                                             <div class="row">
                                               
                                            </div>

                                     <div class="row">
                                               
                                            </div>
                                            
                                            
                                            
                                            
                                              <div class="row">
                                               
                                            </div>
                                            
                                             <div class="row">
                                               
                                            </div>
                                            
                                             

                                            
                                            
                                        </div>
                                    </div>
                                    
                                    
                                <div class="post-metas ver2">
                                    
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
                                 @include('includes.comments')
                            </div>
                        </div>
                    </div>
                    <div class="sidebar col-xs-12 col-md-4">
                        
                        
                        
                        
                        @include('includes/aside-email')
						
						
						
                         <aside class="widget widget_category">
                            <h3 class="widget-title">Tags</h3>
                            <ul>
                                <li><a href="{{route('md5-generator')}}">md5 password generator</a></li>
                                <li><a href="{{route('md5-generator')}}">online md5 generator</a></li>
                                <li><a href="{{route('md5-generator')}}">online md5 hash generator</a></li>
                                <li><a href="{{route('md5-generator')}}">md5 hash converter to text online</a></li>
                                <li><a href="{{route('md5-generator')}}">md5 encryption online</a></li>

                                <li><a href="{{route('md5-generator')}}">md5 hash generator online</a></li>
                                <li><a href="{{route('md5-generator')}}">md5 tool online</a></li>
                                <li><a href="{{route('md5-generator')}}">create md5 hash</a></li>
                                <li><a href="{{route('md5-generator')}}">md5 hash value generator</a></li>
                                <li><a href="{{route('md5-generator')}}">md5 hash converter</a></li>
                            </ul>
                        </aside>
                       
                        
                    </div>
                </div>
            </div>
        </div>

@endsection