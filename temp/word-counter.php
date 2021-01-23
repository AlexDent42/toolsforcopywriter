<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Free Word Counter - Count Words &amp; Correct Writing| ToolsforCopywriter.com</title>
    <meta name="description" content="Copy and paste your text into the online editor to count its words and characters and check keyword density ⭐Free Word Counter - Count Words &amp; Correct Writing " /><meta name="keywords" content="word counter, word count, character count" />
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
                        <a href="https://toolsforcopywriter.com/word-counter" title="Free Word Counter"> <h1 class="post-name ver2">Online Word Counter</h1></a>

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
                                <a href="https://toolsforcopywriter.com/word-counter" title="home-logo"><h1 class="post-name ver2">Online Word Counter</h1></a>
                            </div>
                            <!--end logo-->
                            <button type="button" class="navbar-toggle icon-mobile" data-toggle="collapse" data-target="#myNavbar">
                                <span class="icon-menu"></span>
                            </button>
                         <!--Nav -->
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
									<?php
									if(empty($_REQUEST['note']))
											 {
											 $res_words='0'; $res_len='0'; $res_spaces='0';$placeHolder='Enter text to display keywords';$readingTime=0;$speakingTime=0;}

if(isset($_REQUEST['note']))
{

$str =$_REQUEST['note'];
	
$res_len=strlen($str);
	$trim_symbols=preg_replace('#[!-/:-@]+#','',$_REQUEST['note']);
	$trim_words=
	
	
$arr=explode(' ',$trim_symbols);
$res_words=count($arr);
	$readingTime=round($res_words/275, 1);
	$speakingTime=round($res_words/180, 1);
	
$newar=$arr;
$res_spaces= strlen(implode('',$arr));

$res = array_count_values($newar);
arsort($res);
}
	
	?>
	

                                    
                                    <h3 class="post-name ver2"><?php echo $res_words;?> Words <?php echo $res_len;?> Characters <?php echo $res_spaces;?> Without White Spaces</h3>
									
								<?php
									if(isset($_REQUEST['note'])) 
									{
									echo '<h4 class="post-name ver2">Reading Time - '.$readingTime.' min. </h4>';
										
										
									
									echo '<h4 class="post-name ver2">Speaking Time - '.$speakingTime.' min.</h4>';
									}?>
                                </div>


                                <div class="post-reply">
                                        <h3 class="post-title widget-title">Keyword Density</h3>
									 <div class="row">
										 
										
										 <?php
										 
										 if(empty($_REQUEST['note']))
										 { ?>
													
                                                    <div class="col-md-6 col-xs-12">
														
                                                        <label><i>Enter text to display keywords</i></label>
                                                       
                                                    </div>
										 <div class="col-md-6 col-xs-12">
														
                                                        <label><i></i></label>
                                                       
                                                    </div>
										<?php }?>
										 <?php
										 if(isset($_REQUEST['note']))
										 {$other=100;
											 foreach ($res as $key=>$value)
{
if($value>1 && $key!='the' && $key!='a' && $key!='or' && $key!='is' && $key!='in' && $key!='on' && $key!='and')
{$perc = round($value*100/$res_words, 1);$other-=$perc;
										 ?>

										 
										 
										   <div class="col-md-6 col-xs-12">
														
                                                        <label><i><?php echo $key;?></i></label>
                                                       
                                                    </div>
                                                    <div class="col-md-6 col-xs-12">
                                                        <label><?php echo $perc.'%';?></label>
                                                       
                                                    </div>
								
								
								
								<?php }}
										?>  <div class="col-md-6 col-xs-12">
														
                                                        <label><i>Other</i></label>
                                                       
                                                    </div>
                                                    <div class="col-md-6 col-xs-12">
                                                        <label><?php echo round($other, 1).'%';?></label>
                                                       
                                                    </div>
										 
										 
										<?php }?>
										 
										 
										 
										 
										  
                                          </div>
									
									
									
                                        <form action="#" class="comment-form" method="post">
                                            <div class="form-group">
                                                <div class="row">
													
                                                    <div class="col-md-6 col-xs-12">
														
                                                        
                                                       
                                                    </div>
                                                    <div class="col-md-6 col-xs-12">
                                                     
                                                       
                                                    </div>
									
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                       
                                                        <textarea name="note" id="message" tabindex="2" class="form-control" placeholder="Start typing, or copy and paste your document here..."></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-submit">Count</button>
                                        </form>
                                    </div>



								
								
								
								
								
								
								
								
								
								
								
								
								
								
								

                                <div class="post-metas ver2">
                                    
                                </div>
                                 <div class="blog-post-info">
                                    
                                    <h3 class="post-name ver2">What is WordCounter?</h3>
                                </div>
                                <div class="post-content">
                                    <div class="row">
                                        
                                    </div>
                                    <div class="post-text">
                                    	<p>Word Counter is an easy to use and free online tool for counting words, characters in real time. Count words, check grammar and improve your writing. Get started by typing directly into the text area above or pasting in your content from elsewhere. </p>

                                       
                                  
                                      
                                    </div>
                                    <div class="blog-post-info">
                                    
                                    <h3 class="post-name ver2">Why would you need an online word counter?</h3>
                                </div>
                                     <div class="post-text">
                                    	<p>Online word counters are a perfect tool for anyone who needs to keep a count of their words and characters, but doesn’t use Microsoft Word. </p>

                                   
                                    </div>
                                    <div class="blog-post-info">
                                    
                                    <h3 class="post-name ver2">Whom is this word counting tool for?</h3>
                                </div>
                                     <div class="post-text">
                                    	<p>Bloggers/Content Writers</p>
                                    	<p>Teachers/Students</p>

                                   
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
                                <li><a href="https://toolsforcopywriter.com/word-counter">character counter</a></li>
                                <li><a href="https://toolsforcopywriter.com/word-counter">how many words</a></li>
                                <li><a href="https://toolsforcopywriter.com/word-counter">word counter tool</a></li>
                                <li><a href="https://toolsforcopywriter.com/word-counter">count characters</a></li>
                                <li><a href="https://toolsforcopywriter.com/word-counter">word counter online</a></li>

                                <li><a href="https://toolsforcopywriter.com/word-counter">online character counter</a></li>
                                <li><a href="https://toolsforcopywriter.com/word-counter">character count online</a></li>
                                <li><a href="https://toolsforcopywriter.com/word-counter">characters count</a></li>
                                <li><a href="https://toolsforcopywriter.com/word-counter">count my words</a></li>
                                <li><a href="https://toolsforcopywriter.com/word-counter">word couter</a></li>
                            </ul>
                        </aside>
                       
                        
                    </div>
                </div>
            </div>
        </div>
		<!--Footer-->
       <?php include('includes/footer.php');?>