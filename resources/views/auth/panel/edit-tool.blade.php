@extends('layouts.dashboard')
@section('admin-content')
<div class="card">
                  <div class="card-header"><strong>Tool</strong></div>
                  <div class="card-body">
                    <form class="form-horizontal" 

                    @if(isset($tool))
                    action="{{ route('tools.update', $tool) }}" 
                    @else
                    action="{{ route('tools.store') }}"
                    @endif



                    method="post">
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
                        <div class="col-sm-6">
                           <label>TITLE:</label>
                          <input name="name" class="form-control" type="text" placeholder="User name" value="{{ $tool->title ?? ''}}">
                        </div>
                    	</div>
                    	 <div class="form-group row">
		                        <div class="col-sm-6">
                               <label>DESCRIPTION:</label>
		                          <input name="email" class="form-control" type="text" placeholder="email" value="{{ $tool->description ?? ''}}">
		                        </div>
                      	 </div>
                        
                         <div class="form-group row">
                            <div class="col-sm-6">
                               <label>TEXT:</label>
                            
                              <textarea class="form-control" id="textarea-input" name="comment" rows="9" placeholder="Content.."> {{ $tool->text ?? ''}}</textarea>


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

                @endsection