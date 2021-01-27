        
@extends('layouts.app')


@section('title')
Online Password Generator - Create random passwords in a click| ToolsForCopywriter.com
@endsection

@section('description')
Create a secure password using our generator tool. Mix letters, numbers and symbols for the ultimate in security. ⭐Free Online Password Generator
@endsection

@section('keywords')
Online Password Generator
@endsection

@section('main-title')
Online Password Generator
@endsection

@section('current-url')
{{route('passwords-generator')}}
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
                                      
                                       
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-6 col-xs-12">
                                                       
                                                        <input type="text" id="myInput" class="form-control" value="{{session('password')}}" placeholder="Your new password will appear here.">
                                                        </div>
                                                    <div class="col-md-6 col-xs-12">
                                                        <script>
                                                        function myFunction() {
                                                          var copyText = document.getElementById("myInput");
                                                          copyText.select();
                                                          document.execCommand("copy");
                                                          alert("Copied the password: " + copyText.value);
                                                        }
                                                        </script>

                                                        
                                                         <button onclick="myFunction()" type="submit" class="btn btn-submit">Copy</button>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                           
                                         
                                      
                                    </div>
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                <div class="post-related">
                                       
                                    <div class="post-related-slide">
                                        <form action="{{route('passgenerate')}}" method="post">
                                            @csrf
                                            
                                            
                                            
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-6 col-md-6">
                                                    <div class="blog-post-item post-item">
                                                        
                                                        <div class="blog-post-info v2">
                                                           
                                                            
                                                            <h4 class="post-name">Password Length:</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-6 col-md-6">
                                                    <div class="blog-post-item post-item">
                                                        
                                                        <div class="blog-post-info v2">
                                                           
                                                            <select name="passLength">
                                                                <option value="6">6</option>
                                                                <option value="8">8</option>
                                                                  <option value="10" selected>10</option>
                                                                    <option value="12">12</option>
                                                                      <option value="14">14</option>
                                                                        <option value="16">16</option>
                                                                          <option value="32">32</option>
                                                                            <option value="64">64</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-xs-12 col-sm-6 col-md-6">
                                                    <div class="blog-post-item post-item">
                                                        
                                                        <div class="blog-post-info v2">
                                                            
                                                            <h4 class="post-name">Include Numbers(e.g.123456)</h4>
                                                          
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-6 col-md-6">
                                                    <div class="blog-post-item post-item">
                                                        
                                                        <div class="blog-post-info v2">
                                                           
                                                            	<input type="checkbox" name="includeNumbers" value="1" checked>
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
          
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-6 col-md-6">
                                                    <div class="blog-post-item post-item">
                                                        
                                                        <div class="blog-post-info v2">
                                                            
                                                            <h4 class="post-name">Include Lowercase Characters</h4>
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-6 col-md-6">
                                                    <div class="blog-post-item post-item">
                                                        
                                                        <div class="blog-post-info v2">
                                                           
                                                            	<input type="checkbox" name="includeLowercase" value="1" checked>
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-6 col-md-6">
                                                    <div class="blog-post-item post-item">
                                                        
                                                        <div class="blog-post-info v2">
                                                            
                                                            <h4 class="post-name">Include Uppercase Characters</h4>
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-6 col-md-6">
                                                    <div class="blog-post-item post-item">
                                                        
                                                        <div class="blog-post-info v2">
                                                           
                                                            	<input type="checkbox" name="includeUppercase" value="1" checked>
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-6 col-md-6">
                                                    <div class="blog-post-item post-item">
                                                        
                                                        <div class="blog-post-info v2">
                                                            
                                                            <h4 class="post-name">Include Symbols(e.g.@#$%)</h4>
                                                            
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-6 col-md-6">
                                                    <div class="blog-post-item post-item">
                                                        
                                                        <div class="blog-post-info v2">
                                                           
                                                            	<input type="checkbox" name="includeSymbols" value="1">
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
  
                                            </div>
     
                                            </div>
                                            </div>
   
                                            <div class="post-reply">
                                       
									        <div class="row">

                                            </div>
				
                                            <button type="submit" class="btn btn-submit">Generate</button>
                                        </form>
                                    </div>


                                <div class="post-metas ver2">
                                    
                                </div>
                                 <div class="blog-post-info">
                                    
                                    <h3 class="post-name ver2">Generate strong passwords</h3>
                                </div>
                                <div class="post-content">
                                    <div class="row">
                                        
                                    </div>
                                    <div class="post-text">
                                    
                                    	  <blockquote>
                                            <p> Over 80% of hacking-related breaches are due to weak or stolen passwords, 
                                                 a recent report shows </p>
                                            
                                        </blockquote>
	                                       <p>So if you want to safeguard your personal info and assets, creating secure passwords is a big first step. </p>
                                       
                                  
                                      
                                    </div>
                                    <div class="blog-post-info">
                                    
                                    <h3 class="post-name ver2">What is a password generator?</h3>
                                </div>
                                     <div class="post-text">
                                    	<p>An online password generator is a tool that automatically generates a password based on guidelines that you set to create strong and unpredictable passwords for each of your accounts. </p>

                                   
                                    </div>
                                    <div class="blog-post-info">
                                    
                                    <h3 class="post-name ver2">What's a strong password anyway?</h3>
                                </div>
                                     <div class="post-text">
                                    	<p>Long: The longer a password, the more secure it is. A strong password should be at least 12 characters long.</p>
                                    	<p>Random: Strong passwords use a combination of letters, numbers, cases, and symbols to form an unpredictable string of characters that doesn't resemble words or names.</p>

                                   
                                    </div>

                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar col-xs-12 col-md-4">
                        
                        
                        
                        @include('includes/aside-email')
                        </aside>
                         <aside class="widget widget_category">
                            <h3 class="widget-title">Tags</h3>
                            <ul>
                                <li><a href="{{route('passwords-generator')}}">random password generator</a></li>
                                <li><a href="{{route('passwords-generator')}}">strong password generator</a></li>
                                <li><a href="{{route('passwords-generator')}}">online password generator</a></li>
                                <li><a href="{{route('passwords-generator')}}">easy password generator</a></li>
                                <li><a href="{{route('passwords-generator')}}">free password generator</a></li>

                                <li><a href="{{route('passwords-generator')}}">generator password</a></li>
                                <li><a href="{{route('passwords-generator')}}">simple password generator</a></li>
                                <li><a href="{{route('passwords-generator')}}">password generator online</a></li>
                                <li><a href="{{route('passwords-generator')}}">one time password generator</a></li>
                                <li><a href="{{route('passwords-generator')}}">6 digit password generator</a></li>
                            </ul>
                        </aside>
                       
                        
                    </div>
                </div>
            </div>
        </div>

@endsection