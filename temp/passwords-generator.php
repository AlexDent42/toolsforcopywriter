<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Online Password Generator - Create random passwords in a click| ToolsForCopywriter.com</title>
    <meta name="description" content="Create a secure password using our generator tool. Mix letters, numbers and symbols for the ultimate in security. ⭐Free Online Password Generator" /><meta name="keywords" content="Password generator" />
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <!--push menu cart -->
    
    <!-- End cart -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">SEARCH HERE</h4>
                </div>
                <div class="modal-body">
                    <div class="input-group">
                        <form method="get" class="searchform" action="/search" role="search">
                            <input type="hidden" name="type" value="product">
                            <input type="text" name="q" class="form-control control-search">
                            <span class="input-group-btn">
                              <button class="btn btn-default button_search" type="button"><i data-toggle="dropdown" class="fa fa-search"></i></button>
                            </span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--END  Modal content-->
    <div class="wrappage">
        <header id="header" class="header-v1">
            
            <div class="topbar">
                <div class="container container-40">
                    <div class="topbar-left">
                        
                        <!--end topbar-option-->
                    </div>
                    <!--end topbar-left-->
                    <div class="logo hidden-xs hidden-sm">
                        <a href="https://toolsforcopywriter.com/passwords-generator" title="Passwords Generator"> <h1 class="post-name ver2">Online Password Generator</h1></a>

                    </div>
                    <!--end logo-->
                    <div class="topbar-right">
                        <div class="topbar-option">
                            
                            <div class="topbar-search">
                               
                            </div>
                            <div class="topbar-cart">
                                
                            </div>
                        </div>
                        <!--end topbar-option-->
                    </div>
                    <!--end topbar-right-->
                </div>
            </div>
            <div class="header-top">
                <div class="container container-40">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="logo-mobile hidden-lg hidden-md">
                                <a href="https://toolsforcopywriter.com/passwords-generator" title="home-logo"><h1 class="post-name ver2">Online Password Generator</h1></a>
                            </div>
                            <!--end logo-->
                            <button type="button" class="navbar-toggle icon-mobile" data-toggle="collapse" data-target="#myNavbar">
                                <span class="icon-menu"></span>
                            </button>
                           <!--Nav-->
							<?php include ('includes/nav.php');?>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- /header -->
        <div class="main-container right-slidebar single-post v2">
            <div class="container">
                <div class="row">
					
					
					
		
                    
                    <div class="main-content col-xs-12 col-md-8">
                        <div class="blog-post-container blog-page">
                            <div class="blog-post-single blog-post-item">
                                <div class="blog-post-info">
									<?php
								
								$length=$_REQUEST['passLength'];
								
								if($_REQUEST['includeNumbers']==1)
								{$numbers='0123456789';
								 $random_string.=mt_rand(0,9);
								}
									
								 
									else $numbers='';
								
									if($_REQUEST['includeLowercase']==1)
									{$lowercase='abcdefghijklmnopqrstuvwxyz';
									 $lcTemp=mt_rand(0,25);
									  $random_string.=$lowercase[$lcTemp];
									}
									 
								 else $lowercase='';
								
									if($_REQUEST['includeUppercase']==1)
									{$uppercase='ABCDEFGHIJKLMNOPQRSTUVWXYZ';
									 $ucTemp=mt_rand(0,25);
									  $random_string.=$uppercase[$ucTemp];
									}
									 else $uppercase='';
								
								
									if($_REQUEST['includeSymbols']==1)
									{$includeSymbols='!"#$%&\'()*+,-./:;<=>?@[\]^_`{|}~';
									 $isTemp=mt_rand(0,32);
									 $random_string.=$includeSymbols[$isTemp];
									}
								 else $includeSymbols='';
								 
								
								

								
								
							
								
$permitted_chars = $numbers.$lowercase.$uppercase.$includeSymbols;


$perm_length=strlen($permitted_chars);

								
 
    
    for($i = strlen($random_string); $i < $length; $i++) {
        $random_character = $permitted_chars[mt_rand(0, $perm_length)];
        $random_string.= $random_character;
    }
 
  $random_string=str_shuffle($random_string);

	
	?>
	

                                  
									
                                </div>
                                
                                
                                <div class="post-reply">
                                      
                                       
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-6 col-xs-12">
                                                       
                                                        <input type="text" id="myInput" class="form-control" value="<?php if(empty($_REQUEST['passLength'])) echo 'Your new password will appear here.'; 
                                                        else echo $random_string;?>">
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
                                            <form action="" method="post">
                                            
                                            
                                            
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
                                            <option value="6" selected>6</option>
                                            <option value="8">8</option>
                                              <option value="10">10</option>
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
                        
                        
                        
                        <aside class="widget widget_newletters">
                            <h3 class="widget-title">Newsletters</h3>
                            <div class="newletter-form">
                                <form action="#">
                                    <input type="text" name="s" placeholder="Your email address..." class="form-control">
                                    <button type="submit" class="btn btn-submit">Submit</button>
                                </form>
                            </div>
                        </aside>
                         <aside class="widget widget_category">
                            <h3 class="widget-title">Tags</h3>
                            <ul>
                                <li><a href="https://toolsforcopywriter.com/passwords-generator">random password generator</a></li>
                                <li><a href="https://toolsforcopywriter.com/passwords-generator">strong password generator</a></li>
                                <li><a href="https://toolsforcopywriter.com/passwords-generator">online password generator</a></li>
                                <li><a href="https://toolsforcopywriter.com/passwords-generator">easy password generator</a></li>
                                <li><a href="https://toolsforcopywriter.com/passwords-generator">free password generator</a></li>

                                <li><a href="https://toolsforcopywriter.com/passwords-generator">generator password</a></li>
                                <li><a href="https://toolsforcopywriter.com/passwords-generator">simple password generator</a></li>
                                <li><a href="https://toolsforcopywriter.com/passwords-generator">password generator online</a></li>
                                <li><a href="https://toolsforcopywriter.com/passwords-generator">one time password generator</a></li>
                                <li><a href="https://toolsforcopywriter.com/passwords-generator">6 digit password generator</a></li>
                            </ul>
                        </aside>
                       
                        
                    </div>
                </div>
            </div>
        </div>
       <!-- Footer-->
		<?php include ('includes/footer.php');?>