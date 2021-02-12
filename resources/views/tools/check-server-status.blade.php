@extends('layouts.app')


@section('title')
{{ $tool->title}}
@endsection

@section('description')
{{ $tool->description }}
@endsection

@section('keywords')
Check Server Status, IS THIS SITE DOWN, CHECK SERVER STATUS ONLINE
@endsection

@section('main-title')
{{ $tool->title}}
@endsection

@section('current-url')
/check-server-status
@endsection

@section('comment_post_ID')
{{ $tool->id }}
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


                                @if(request()->has('domain'))
                                 <div class="blog-post-info">
                                        <h4 class="post-name">{{request('server_response')}}</h4>
                                    </div>

                                @else
                                    
                                    <div class="blog-post-info">
                                        <h4 class="post-name">Enter a domain here to check whether it is down or not...</h4>
                                    </div>
                                    @endif

                                    
                                </div> 
                                
	
                                <div class="post-reply">
                                      
                                       
                                            <div class="form-group">
                                                 <form action="{{route('server-status')}}" method="post">
                                                            @csrf
                                               
                                                    <div class="row">
                                                        <div class="col-md-6 col-xs-12">
                                                            <input name="domain" type="text" placeholder="http://mysite.com or https://mysite.com" id="myInput" class="form-control">
                                                        </div>
                                                        <div class="col-md-6 col-xs-12">
                                                          
                                                            
                                                             <button type="submit" class="btn btn-submit">Check</button>
                                                           
                                                        </div>
                                                    </div>
                                                 </form>
                                            </div>
                                           
                                         
                                      
                                    </div>
 
                                <div class="post-related">
                                       
                                        <div class="post-related-slide">
                                            <form action="" method="post">
                                            
                                            
                                            
                                             <div class="row">
                                               
                                            </div>

                                     <div class="row">
                                               
                                            </div>
                                            
                                            
                                            
                                            
                                              <div class="row">
                                               
                                            </div>
                                            
                                             <div class="row">
                                               
                                            </div>
                                            
                                                @if(request()->has('domain'))
                                           
                                              <div class="row">
                                                <div class="col-xs-12 col-sm-6 col-md-6">
                                                    <div class="blog-post-item post-item">
                                                        
                                                        <div class="blog-post-info v2">
                                                            
                                                            <h4 class="post-name">{{ request('domain') }}</h4>
                                                            
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-6 col-md-6">
                                                    <div class="blog-post-item post-item">
                                                         <div class="blog-post-info v2">
                                                          <h4 class="post-name">@if(request('server_request')!=0)HTTP code {{ request('server_request') }}@endif</h4>
                                                            </div>
                                                        
                                                        
                                                    </div>
                                                </div>
                                                </div>
                                            @endif

                                            
                                            
                                        </div>
                                    </div>
                                    
                                    
                                <div class="post-metas ver2">
                                    
                                </div>
                                 <div class="blog-post-info">
                                    
                                    <h2 class="post-name ver2">About Server Status Checker</h2>
                                </div>
                                <div class="post-content">
                                       
                                        <div class="post-text">
                                        
                                        
                                                <p> {{ $tool->text }}</p>
                                                
                                          
                                        </div>
                                </div>

                                 
                               
                            </div>

                        </div>
                    </div>
                    <div class="sidebar col-xs-12 col-md-4">
                         <form></form>
                        
                        
                        
                        @include('includes/aside-email')
						
						
						 <aside class="widget widget_category">
                            <h3 class="widget-title">Latest Sites Checked</h3>
                            <ul>
                                @if(isset($urls))
								@foreach($urls as $element)
								<li><a href="{{$element->domains}}">{{ $element->domains }}</li>
                                    @endforeach
                                    @endif
                                   
		
	  
					
                               
                            </ul>
                        </aside>
						
						
						
						
						
						
						
                         <aside class="widget widget_category">
                            <h3 class="widget-title">Tags</h3>
                            <ul>
                                <li><a href="{{route('check-server-status')}}">is this site down</a></li>
                                <li><a href="{{route('check-server-status')}}}">website down</a></li>
                                <li><a href="{{route('check-server-status')}}">is this website down</a></li>
                                <li><a href="{{route('check-server-status')}}">is it down right now</a></li>
                                <li><a href="{{route('check-server-status')}}">server status</a></li>

                                <li><a href="{{route('check-server-status')}}">is the website down</a></li>
                                <li><a href="{{route('check-server-status')}}">check server status</a></li>
                                <li><a href="{{route('check-server-status')}}">check server status online</a></li>
                                <li><a href="{{route('check-server-status')}}">check server status by link online</a></li>
                                <li><a href="{{route('check-server-status')}}">check server status of a website</a></li>
                            </ul>
                        </aside>
                       
                        
                    </div>
                </div>
            </div>
        </div>

@endsection