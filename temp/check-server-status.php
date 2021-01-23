<?php require_once('delete.php');?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Check Server Status - Check If Website Is Down| ToolsforCopywriter.com</title>
    <meta name="description" content="Check the status of your favorite website. Just enter the URL in the below HTTP server status checker tool" /><meta name="keywords" content="Check Server Status" />
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
                        <a href="https://toolsforcopywriter.com/check-server-status" title="Check Server Status"> <h1 class="post-name ver2">Check Server Status</h1></a>

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
                                <a href="https://toolsforcopywriter.com/check-server-status" title="home-logo"><h1 class="post-name ver2">Check Server Status</h1></a>
                            </div>
                            <!--end logo-->
                            <button type="button" class="navbar-toggle icon-mobile" data-toggle="collapse" data-target="#myNavbar">
                                <span class="icon-menu"></span>
                            </button>
                            <!-- Nav-->
							<?php include('includes/nav.php');?>
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
                                             <h4 class="post-name">Enter a domain here to check whether it is down or not...</h4>


 


                                  
									
                                </div>
                                
                                <?php 
								//ini_set('display_errors',true);error_reporing(E_ALL);//check issues
								
								
								
								if(isset($_REQUEST['domain']))
								{
									$domain= $_REQUEST['domain'];
								//Get server answer into $out variable
							 if( $curl = curl_init() ) {
    curl_setopt($curl,CURLOPT_URL,$domain);
    curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($curl,CURLOPT_NOBODY,true);
    curl_setopt($curl,CURLOPT_HEADER,true);
    $out = curl_exec($curl);

    curl_close($curl);
  }
								
								 $arr= explode(' ',$out);
									$server_res = $arr[1];
									//echo $server_res;
									
								
									if($server_res<399)
									{$answer = "$domain is not down";
									$serverAnswer= 'HTTP code '.$arr[1];}
									if($server_res >=400)
									{$answer = "Oh no! The server is currently down:(";
									$serverAnswer= 'HTTP code '.$arr[1];}
									if($domain=='')
									{
										$answer = 'Enter domain name, Pal';
									$serverAnswer= '';
									}
										
									
								
											
								
								
								 //save result here
 $content=file_get_contents('urls.txt');
									
									if($server_res<399 && $domain!='')
									{
								file_put_contents('urls.txt',$domain.';'.time()."\n".$content);
									}
								
							
 
								
								
								
								
								
								}	
									?>
									
                                <div class="post-reply">
                                      
                                       
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-6 col-xs-12">
                                                        <form action="" method="post">
                                               
                                                       
                                                        <input name="domain" type="text" placeholder="mysite.com" id="myInput" class="form-control">
                                                    </div>
                                                    <div class="col-md-6 col-xs-12">
                                                      
                                                        
                                                         <button type="submit" class="btn btn-submit">Check</button>
                                                        </form>
                                                    </div>
                                                </div>
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
                                            
                                            
                                           
                                              <div class="row">
                                                <div class="col-xs-12 col-sm-6 col-md-6">
                                                    <div class="blog-post-item post-item">
                                                        
                                                        <div class="blog-post-info v2">
                                                            
                                                            <h4 class="post-name"><?php echo $answer;?></h4>
                                                            
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-6 col-md-6">
                                                    <div class="blog-post-item post-item">
                                                        
                                                        <div class="blog-post-info v2">
                                                           
                                                               <h4 class="post-name"><?php echo $serverAnswer;?></h4>
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            
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
                        
                        
                        
                        <aside class="widget widget_newletters">
                            <h3 class="widget-title">Newsletters</h3>
                            <div class="newletter-form">
                                <form action="mail.php" method="post">
                                    <input type="text" name="emails" placeholder="Your email address..." class="form-control">
                                    <button type="submit" class="btn btn-submit">Submit</button>
                                </form>
                            </div>
                        </aside>
						
						
						 <aside class="widget widget_category">
                            <h3 class="widget-title">Latest Sites Checked</h3>
                            <ul>
								
								<?php
								//Get elements
  $domains = explode("\n", file_get_contents('urls.txt'));
								
								$i=0;

  foreach ($domains as $elem)
  {
	  
	  $i++;
								if($i>10)
								{break;}
  
 
	
      $newarr=explode(';',$elem);
     
          $urls_list=$newarr[0];
        $date_list= $newarr[1];
       
	 echo '<li><a href="https://'.$urls_list.'">'.$urls_list.'</a>'.date('H:i, Y:m:d', $date_list).'</li>';
		
	  
	
	 }
	  
		
	 ?>
								
                               
                            </ul>
                        </aside>
						
						
						
						
						
						
						
                         <aside class="widget widget_category">
                            <h3 class="widget-title">Tags</h3>
                            <ul>
                                <li><a href="https://toolsforcopywriter.com/check-server-status">is this site down</a></li>
                                <li><a href="https://toolsforcopywriter.com/check-server-status">website down</a></li>
                                <li><a href="https://toolsforcopywriter.com/check-server-status">is this website down</a></li>
                                <li><a href="https://toolsforcopywriter.com/check-server-status">is it down right now</a></li>
                                <li><a href="https://toolsforcopywriter.com/check-server-status">server status</a></li>

                                <li><a href="https://toolsforcopywriter.com/check-server-status">is the website down</a></li>
                                <li><a href="https://toolsforcopywriter.com/check-server-status">check server status</a></li>
                                <li><a href="https://toolsforcopywriter.com/check-server-status">check server status online</a></li>
                                <li><a href="https://toolsforcopywriter.com/check-server-status">check server status by link online</a></li>
                                <li><a href="https://toolsforcopywriter.com/check-server-status">check server status of a website</a></li>
                            </ul>
                        </aside>
                       
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer-->
<?php include ('includes/footer.php');?>