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
                   

                    @foreach($tools as $tool)




                     <!--new tool-->
                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
                        <div class="blog-post-item item-grid">
                            <a class="hover-images" href="{{ $tool->slug }}">
                            <img src="{{ Storage::url($tool->image) }}" alt="Image: {{ $tool->title }}" class="img-reponsive">
                        </a>
                            <div class="post-metas ver--grid">
                                <div class="categories">
                                    <a href="#" rel="category tag">Free tool</a>
                                </div>
                                <span class="post-comments-number">{{ $tool->comments_count }}</span>
                            </div>
                            <div class="blog-post-info">
                               
                                <h3 class="post-name"><a href="{{ $tool->slug }}">{{ $tool->title }}</a></h3>
                                 <div class="post-date">{{$tool->description_seo}}</div>
                            </div>
                        </div>
                    </div>
                    <!--End new tool-->

                    @endforeach









                    
                    
                    
                </div>
                <!--<div class="nav-button text-center">
                    <a class="btn-loadmore"><i class="icon-refresh f-15"></i>Load more</a>
                </div>-->
            </div>
        </div>

@endsection