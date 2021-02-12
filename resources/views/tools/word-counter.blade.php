		
@extends('layouts.app')

@include('includes.head')

@section('current-url')
{{route('word-counter')}}
@endsection





@section('main-content')

		<div class="main-container right-slidebar single-post v2">
            <div class="container">
                <div class="row">
					
					
					
		
                    
                    <div class="main-content col-xs-12 col-md-8">
                        <div class="blog-post-container blog-page">
                            <div class="blog-post-single blog-post-item">
                                @if(session()->has('words'))
                                <div class="blog-post-info">

                                    <h3 class="post-name ver2">{{ session()->pull('words')  }}  Words {{ session('characters') }} Characters {{ session('withoutspaces') }} Without White Spaces</h3>
									
										<h4 class="post-name ver2">Reading Time -  {{ session('readingtime') }} min. </h4>
									    <h4 class="post-name ver2">Speaking Time - {{ session('speakingtime') }} min.</h4>
									
                                </div>
                                @endif
                                @php
                                session()->forget('density', 'words', 'characters', 'withoutspaces', 'readingtime', 'speakingtime' )
                                    
                                @endphp


                                            <div class="post-reply">

                                    
                									
        									
        									 @include('includes.messages')
                                                <form action="{{route('word-counter-calc')}}" class="comment-form" method="post">
                                                    @csrf
                                                        
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                   
                                                                    <textarea name="text" id="message" tabindex="2" class="form-control" placeholder="Start typing, or copy and paste your document here..."></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button type="submit" class="btn btn-submit">Count</button>
                                                </form>
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
                                 
                                <div class="post-content">
                      
                                </div>
                                 @include('includes.comments')
                            </div>
                        </div>
                    </div>
                    <div class="sidebar col-xs-12 col-md-4">
                        
                        
                        
                       @include('includes/aside-email')


                         <aside class="widget widget_category">
                            <h3 class="widget-title">Tags</h3>
                            <ul>
                                <li><a href="{{route('word-counter')}}">character counter</a></li>
                                <li><a href="{{route('word-counter')}}">how many words</a></li>
                                <li><a href="{{route('word-counter')}}">word counter tool</a></li>
                                <li><a href="{{route('word-counter')}}">count characters</a></li>
                                <li><a href="{{route('word-counter')}}">word counter online</a></li>

                                <li><a href="{{route('word-counter')}}">online character counter</a></li>
                                <li><a href="{{route('word-counter')}}">character count online</a></li>
                                <li><a href="{{route('word-counter')}}">characters count</a></li>
                                <li><a href="{{route('word-counter')}}">count my words</a></li>
                                <li><a href="{{route('word-counter')}}">word couter</a></li>
                            </ul>
                        </aside>
                       
                        
                    </div>
                </div>
            </div>
        </div>
        @php
            session()->forget(['words', 'characters', 'withoutspaces' , 'readingtime' , 'speakingtime']);
        @endphp

@endsection