@extends('layouts.app')


@section('title')
'Online Tools for Copywriters| ToolsForCopywriter.com',
@endsection

@section('description')
Must To Have Tools For Copywriters and SEO Managers In Growing Company. Add these free tools into your tool kit⭐ToolsForCopywriter.com
@endsection

@section('keywords')
tools for copywriter, online tools for copywriter
@endsection

@section('main-title')
Online Tools for Copywriter
@endsection

@section('current-url')
{{route('index')}}
@endsection




@section('main-content')

        <div class="main-container blog--grid">
            <div class="container">
                <div class="row">
                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
                        <div class="blog-post-item item-grid">
                            <a class="hover-images" href="{{route('word-counter')}}">
                            <img src="img/counter in hand.png" alt="" class="img-reponsive">
                        </a>
                            <div class="post-metas ver--grid">
                                <div class="categories">
                                    <a href="#" rel="category tag">Tool</a>
                                </div>
                                <span class="post-comments-number">0</span>
                            </div>
                            <div class="blog-post-info">
                               
                                <h3 class="post-name"><a href="{{route('word-counter')}}">Word Counter</a></h3>
                                 <div class="post-date">Tool for counting words, characters in real time.</div>
                            </div>
                        </div>
                    </div>
                    <!--new tool-->
                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
                        <div class="blog-post-item item-grid">
                            <a class="hover-images" href="{{route('passwords-generator')}}">
                            <img src="img/password protected.png" alt="" class="img-reponsive">
                        </a>
                            <div class="post-metas ver--grid">
                                <div class="categories">
                                    <a href="#" rel="category tag">Tool</a>
                                </div>
                                <span class="post-comments-number">0</span>
                            </div>
                            <div class="blog-post-info">
                               
                                <h3 class="post-name"><a href="{{route('passwords-generator')}}">Passwords Generator</a></h3>
                                 <div class="post-date">Use our online password generator to create strong passwords for all your online accounts.</div>
                            </div>
                        </div>
                    </div>
                    <!--End new tool-->
                    <!--new tool-->
                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
                        <div class="blog-post-item item-grid">
                            <a class="hover-images" href="{{route('check-server-status')}}">
                            <img src="img/check-server-status.png" alt="A sad man near server" class="img-reponsive">
                        </a>
                            <div class="post-metas ver--grid">
                                <div class="categories">
                                    <a href="#" rel="category tag">Tool</a>
                                </div>
                                <span class="post-comments-number">0</span>
                            </div>
                            <div class="blog-post-info">
                               
                                <h3 class="post-name"><a href="{{route('check-server-status')}}">Check Server Status
                                    </a></h3>
                                 <div class="post-date">Check the status of your favorite website. Just enter the URL</div>
                            </div>
                        </div>
                    </div>
                    <!--End new tool-->
                     <!--new tool-->
                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
                        <div class="blog-post-item item-grid">
                            <a class="hover-images" href="{{route('md5-generator')}}">
                            <img src="img/md5-converter.jpg" alt="" class="img-reponsive">
                        </a>
                            <div class="post-metas ver--grid">
                                <div class="categories">
                                    <a href="#" rel="category tag">Tool</a>
                                </div>
                                <span class="post-comments-number">0</span>
                            </div>
                            <div class="blog-post-info">
                               
                                <h3 class="post-name"><a href="{{route('md5-generator')}}">Online md5 generator</a></h3>
                                 <div class="post-date">This online tool allows you to generate the MD5 hash of any string. Generates MD5 Checksum for any given text string.</div>
                            </div>
                        </div>
                    </div>
                    <!--End new tool-->
                      <!--new tool-->
                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
                        <div class="blog-post-item item-grid">
                            <a class="hover-images" href="{{route('text-case')}}">
                            <img src="img/change-text-case.png" alt="Change text case" class="img-reponsive">
                        </a>
                            <div class="post-metas ver--grid">
                                <div class="categories">
                                    <a href="#" rel="category tag">Tool</a>
                                </div>
                                <span class="post-comments-number">0</span>
                            </div>
                            <div class="blog-post-info">
                               
                                <h3 class="post-name"><a href="{{route('text-case')}}">Change Text Case</a></h3>
                                 <div class="post-date">Change Text Case is a handy web application that enables you to change the text case of any given text.</div>
                            </div>
                        </div>
                    </div>
                    <!--End new tool-->
                     <!--new tool-->
                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
                        <div class="blog-post-item item-grid">
                            <a class="hover-images" href="{{route('text-editor')}}">
                            <img src="img/online-text-editor.png" alt="Online text editor" class="img-reponsive">
                        </a>
                            <div class="post-metas ver--grid">
                                <div class="categories">
                                    <a href="#" rel="category tag">Tool</a>
                                </div>
                                <span class="post-comments-number">0</span>
                            </div>
                            <div class="blog-post-info">
                               
                                <h3 class="post-name"><a href="{{route('text-editor')}}">Online Text Editor</a></h3>
                                 <div class="post-date">To edit text online use our online text editor to edit plain text.</div>
                            </div>
                        </div>
                    </div>
                    <!--End new tool-->
                      <!--new tool-->
                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
                        <div class="blog-post-item item-grid">
                            <a class="hover-images" href="{{route('reverse-text')}}">
                            <img src="img/reverse-text-generator.png" alt="Reverse text generator" class="img-reponsive">
                        </a>
                            <div class="post-metas ver--grid">
                                <div class="categories">
                                    <a href="#" rel="category tag">Tool</a>
                                </div>
                                <span class="post-comments-number">0</span>
                            </div>
                            <div class="blog-post-info">
                               
                                <h3 class="post-name"><a href="{{route('reverse-text')}}">Reverse Text Generator</a></h3>
                                 <div class="post-date">Reverse text generator helps you to generate backward, mirrored, flipped text.</div>
                            </div>
                        </div>
                    </div>
                    <!--End new tool-->
                    
                    
                    
                    
                    
                </div>
                <!--<div class="nav-button text-center">
                    <a class="btn-loadmore"><i class="icon-refresh f-15"></i>Load more</a>
                </div>-->
            </div>
        </div>

@endsection