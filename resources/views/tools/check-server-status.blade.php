@extends('layouts.app')


@section('title')
Check Server Status - Check If Website Is Down| ToolsforCopywriter.com
@endsection

@section('description')
Check the status of your favorite website. Just enter the URL in the below HTTP server status checker tool
@endsection

@section('keywords')
Check Server Status, IS THIS SITE DOWN, CHECK SERVER STATUS ONLINE
@endsection

@section('main-title')
Check Server Status
@endsection

@section('current-url')
/check-server-status
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
                                    <div class="row">
                                        
                                    </div>
                                    <div class="post-text">
                                    
                                    
                                            <p> The server status checker tool allows you to see what response/status code the web server is returning when the user is requesting the page. It also enables you to check the website status i.e. is the site reachable or not.</p>
                                            
                                      

                                      
                                    </div>
                                    <div class="blog-post-info">
                                    
                                    <h2 class="post-name ver2">HTTP Status codes</h2>
                                </div>
                                     <div class="post-text">
                                  
										                                    	    <p>200 status code: OK is good. It means that your server was able to return content for the URL you requested.</li>
										                                <p>301 status code: Moved Permanently means that the requested URL has been moved permanently and all further inquiries should be directed to the new location.</li>
										<p>302 status code: Found means the server has found a temporary redirection. This URL should be used again for the next time since it is only temporary.</li>
										<p>307 status code: Temporary Redirect is similar to a 302 because it is a temporary redirect and the same URL should be used again for the next time.</li>
										<p>400 status code: Bad Request simply means that the server did not understand what you were looking for.</li>
										<p>401 status code: Unauthorized means that your server will not grant access to the content without authorization</li>
										<p>403 status code: Forbidden means that the server will not show you the content, regardless of authentication.</li>
										<p>404 status code: Not Found is a common, frustrating error, and might even be what you’re checking for with this Server Status tool. This error code lets you know that the file you were looking for is not found. Search engines need a 404 to know which URLs are valid and which aren’t.</li>
										<p>410 status code: Gone is similar to 404. It lets you know that the URL you were looking for did exist, but is gone.</li>
										<p>500 status code: Internal Server Error is another frustration that must be directed to your web host or system administrator. It means something is wrong with the server. </li>


                                   
                                    </div>
                                    <div class="blog-post-info">
                                    
                                    <h3 class="post-name ver2">HTTP Status Codes and Errors Matter in SEO</h3>
                                </div>
                                     <div class="post-text">
                                    	<p>1) 100 - 200 HTTP status codes signal that everything is working fine on your website.</p>
                                    	<p>2) 400 response codes and 500 response codes can prevent search engine bots from crawling and indexing your website's important pages and signal search engines that your site is not a quality site, as a result, can lower your website rank..</p>

                                   
                                    </div>

                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar col-xs-12 col-md-4">
                         <form></form>
                        
                        
                        
                        <aside class="widget widget_newletters">
                            <h3 class="widget-title">Newsletters</h3>
                                <div class="newletter-form">

                                        <form action="{{route('email-subscribe')}}" method="post">
                                            @csrf
                                            <input type="text" name="email" placeholder="Your email address..." class="form-control">
                                            <button type="submit" class="btn btn-submit">Submit</button>
                                        </form>

                                </div>
                        </aside>
						
						
						 <aside class="widget widget_category">
                            <h3 class="widget-title">Latest Sites Checked</h3>
                            <ul>
                                
								@foreach($data as $element)
								<li><a href="{{$element->domains}}">{{ $element->domains }}</li>
                                    @endforeach
                                   
		
	  
					
                               
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