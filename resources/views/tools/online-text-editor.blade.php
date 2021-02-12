		
@extends('layouts.app')

@include('includes.head')

@section('current-url')
{{route('text-editor')}}
@endsection




@section('main-content')



		<div class="main-container right-slidebar single-post v2">
            <div class="container">
                <div class="row">
					
					
					
		
                    
                    <div class="main-content col-xs-12 col-md-8">
                        <div class="blog-post-container blog-page">
                            <div class="blog-post-single blog-post-item">
                        


                                            <div class="post-reply">

                                      
                									 
                                                     
                								
        									<textarea class="editor" tabindex="4">
                                                Edit plain text here






                                                <br> <br> <br> <br> <br> <br>
                                            </textarea>
                                            <br/>
                                    
        								
        									 @include('includes.messages')
                                               
                                    </div>


                                
                                
                              
                                   
                                   
                                   
                                        {{-- TOOL TEXT HERE --}}
                                    <div class="post-content">
                                         <div class="post-text"> 
                                            <div class="row">
                                                <div class="col-12">
                                                    {!! $tool->text !!}
                                                </div>
                                            </div>
                                            </div>
                                    </div>
                                    {{-- ENT TOOL TEXT --}}
                                   

                                    
                              
                              
                            </div>
                        </div>
                    </div>
                    <div class="sidebar col-xs-12 col-md-4">
                        
                        
                        
                       @include('includes/aside-email')


                         <aside class="widget widget_category">
                            <h3 class="widget-title">Tags</h3>
                            <ul>
                                <li><a href="{{route('text-editor')}}">wordpad online</a></li>
                                <li><a href="{{route('text-editor')}}">online text editor</a></li>
                                <li><a href="{{route('text-editor')}}">text edit online</a></li>
                                <li><a href="{{route('text-editor')}}">text editor online</a></li>
                                <li><a href="{{route('text-editor')}}">online wordpad</a></li>

                                <li><a href="{{route('text-editor')}}">article editor online</a></li>
                                <li><a href="{{route('text-editor')}}">plain text editor</a></li>
                               
                            </ul>
                        </aside>
                       
                        
                    </div>
                </div>
            </div>
        </div>

         <script src="/js/build/ckeditor.js"></script>
                    <script>ClassicEditor
                        .create( document.querySelector( '.editor' ), {
                          
                          toolbar: {
                            items: [
                              'heading',
                              '|',
                              'bold',
                              'italic',
                              'link',
                              'bulletedList',
                              'numberedList',
                              '|',
                              'indent',
                              'outdent',
                              '|',
                              'imageUpload',
                              'blockQuote',
                              'insertTable',
                              'mediaEmbed',
                              'undo',
                              'redo'
                            ]
                          },
                          language: 'en',
                          table: {
                            contentToolbar: [
                              'tableColumn',
                              'tableRow',
                              'mergeTableCells'
                            ]
                          },
                          licenseKey: '',
                          
                        } )
                        .then( editor => {
                          window.editor = editor;
                      
                          
                          
                          
                      
                          
                          
                          
                        } )
                        .catch( error => {
                          console.error( 'Oops, something went wrong!' );
                          console.error( 'Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:' );
                          console.warn( 'Build id: yw1io1xit88l-8o65j7c6blw0' );
                          console.error( error );
                        } );
                    </script>
       

@endsection