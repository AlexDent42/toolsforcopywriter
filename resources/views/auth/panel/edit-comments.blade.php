@extends('layouts.dashboard')
@section('admin-content')
<div class="card">
                  <div class="card-header"><strong>Comment</strong></div>
                  <div class="card-body">
                    <form class="form-horizontal" 

                    @if(isset($comment))
                    action="{{ route('comments.update', $comment) }}" 
                    @else
                    action="{{ route('comments.store') }}"
                    @endif



                    method="post">
                     @csrf
                     @isset($comment)
                     @method('PUT')
                     @endisset
                      <div class="form-group row">
                      	<div class="col-sm-6">
                          <label>ID:</label>
                          @if(isset($comment))

                          <input class="form-control" type="text" placeholder="" name="id" value="{{ $comment->id ?? ''}}">
                          @else
                          @endif

                        </div>
                    	</div>
                    	 <div class="form-group row">
                        <div class="col-sm-6">
                           <label>NAME:</label>
                          <input name="name" class="form-control" type="text" placeholder="User name" value="{{ $comment->name ?? ''}}">
                        </div>
                    	</div>
                    	 <div class="form-group row">
		                        <div class="col-sm-6">
                               <label>EMAIL:</label>
		                          <input name="email" class="form-control" type="text" placeholder="email" value="{{ $comment->email ?? ''}}">
		                        </div>
                      	 </div>
                        
                         <div class="form-group row">
                            <div class="col-sm-6">
                               <label>COMMENT:</label>
                            
                              <textarea class="form-control" id="textarea-input" name="comment" rows="9" placeholder="Content.."> {{ $comment->comment ?? ''}}</textarea>


                            </div>
                         </div>
                         
                  		
                      <div class="form-group row">
	                        <label class="col-md-3 col-form-label">STATUS:</label>
	                        <div class="col-md-9 col-form-label">
	                          <div class="form-check">
	                            <input class="form-check-input" id="radio1" type="radio" value="pending" name="status">
	                            <label class="form-check-label" for="radio1">Pending</label>
	                          </div>
	                          <div class="form-check">
	                            <input class="form-check-input" id="radio2" type="radio" value="active" name="status">
	                            <label class="form-check-label" for="radio2">Active</label>
	                          </div>
	                         
	                          </div>
                       </div>
                     <div class="card-footer">
                      @if(isset($comment))


                    <button class="btn btn-block btn-primary active" type="submit"><i class="fa fa-user"></i>Update</button>

                    @else

                     <button class="btn btn-block btn-success active" aria-pressed="true" type="submit"><i class="fa fa-user"></i>Create</button>

                     @endif



                    

                   {{--  <button class="btn btn-sm btn-danger" type="reset"><i class="fa fa-ban"></i> Delete</button> --}}

                  </div>

                      
                      
                    </form>
                  </div>
                  
                </div>

                @endsection