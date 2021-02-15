@extends('layouts.dashboard')
@section('admin-content')
<div class="card">


  {{--TEXT EDITOR--}}
 
 {{--END TEXT EDITOR--}}
                  <div class="card-header"><strong>Tool</strong></div>
                  <div class="card-body">
                    <form class="form-horizontal" 

                    @if(isset($tool))
                    action="{{ route('tools.update', $tool) }}" 
                    @else
                    action="{{ route('tools.store') }}"
                    @endif



                    method="post" enctype="multipart/form-data">
                     @csrf
                     @isset($tool)
                     @method('PUT')
                     @endisset
                      <div class="form-group row">
                      	<div class="col-sm-6">
                          <label>ID:</label>
                          @if(isset($tool))

                          <input class="form-control" type="text" placeholder="" name="id" value="{{ $tool->id ?? ''}}">
                          @else
                          @endif

                        </div>
                    	</div>
                    	 <div class="form-group row">
                        <div class="col-sm-12">
                           <label>TITLE:</label>
                          <input name="title" class="form-control" type="text" placeholder="Tool name" value="{{ $tool->title ?? ''}}">
                        </div>
                    	</div>
                      <div class="form-group row">
                        <div class="col-sm-12">
                           <label>TITLE for SEO:</label>
                          <input name="title_seo" class="form-control" type="text" placeholder="SEO Tool name" value="{{ $tool->title_seo ?? ''}}">
                        </div>
                      </div>
                    	 <div class="form-group row">
		                        <div class="col-sm-12">
                               <label>DESCRIPTION:</label>
		                          <input name="description" class="form-control" type="text" placeholder="email" value="{{ $tool->description ?? ''}}">
		                        </div>
                      	 </div>
                          <div class="form-group row">
                            <div class="col-sm-12">
                               <label>SLUG:</label>
                              <input name="slug" class="form-control" type="text" placeholder="slg" value="{{ $tool->slug ?? ''}}">
                            </div>
                         </div>

                         <div class="form-group row">
                            <div class="col-sm-12">
                              <img src="{{ Storage::url($tool->image) }}" alt="">
                            </div></div>

                         <div class="form-group row">
                           <div class="col-sm-12">
                       
                       
                          <input id="file-input" type="file" name="image">
                        </div>
                       
                      </div>
                        
                         <div class="form-group row">
                            <div class="col-sm-12">
                               <label>TEXT:</label>

                               
                            
                              <textarea class="editor" id="textarea-input" name="text" rows="9" placeholder="Content.."> {{ $tool->text ?? ''}}</textarea>


                            </div>
                         </div>
                         
                  		
                      
                     <div class="card-footer">
                      @if(isset($tool))


                    <button class="btn btn-block btn-primary active" type="submit"><i class="fa fa-user"></i>Update</button>

                    @else

                     <button class="btn btn-block btn-success active" aria-pressed="true" type="submit"><i class="fa fa-user"></i>Create</button>

                     @endif



                    

                  </div>

                      
                      
                    </form>
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