@extends('layouts.dashboard')
@section('admin-content')
<div class="card">
                  <div class="card-header">User <strong>Info</strong></div>
                  <div class="card-body">
                    <form class="form-horizontal" 

                    @if(isset($user))
                    action="{{ route('users.update', $user) }}" 
                    @else
                    action="{{ route('users.store') }}"
                    @endif



                    method="post">
                     @csrf
                     @isset($user)
                     @method('PUT')
                     @endisset
                      <div class="form-group row">
                      	<div class="col-sm-6">
                          <label>ID:</label>
                          @if(isset($user))

                          <input class="form-control" type="text" placeholder="" name="id" value="{{ $user->id ?? ''}}">
                          @else
                          @endif

                           @if(!isset($user))

                          <input class="form-control" type="text" placeholder="" name="tool_id">
                          @else
                          @endif

                        </div>
                    	</div>
                    	 <div class="form-group row">
                        <div class="col-sm-6">
                           <label>NAME:</label>
                          <input name="name" class="form-control" type="text" placeholder="User name" value="{{ $user->name ?? ''}}">
                        </div>
                    	</div>
                    	 <div class="form-group row">
		                        <div class="col-sm-6">
                               <label>EMAIL:</label>
		                          <input name="email" class="form-control" type="text" placeholder="email" value="{{ $user->email ?? ''}}">
		                        </div>
                      	 </div>
                         @if(!isset($user))
                         <div class="form-group row">
                            <div class="col-sm-6">
                               <label>PASSWORD:</label>
                              <input name="password" class="form-control" type="password" placeholder="">
                            </div>
                         </div>
                         @endif
                  		
                      <div class="form-group row">
	                        <label class="col-md-3 col-form-label">STATUS:</label>
	                        <div class="col-md-9 col-form-label">
	                          <div class="form-check">
	                            <input class="form-check-input" id="radio1" type="radio" value="1" name="is_admin"
                            
                              @if(empty($user) || $user->is_admin===1)
                                checked
                                @endif>
	                            <label class="form-check-label" for="radio1">Admin</label>
	                          </div>
	                          <div class="form-check">
	                            <input class="form-check-input" id="radio2" type="radio" value="0" name="is_admin" 
                              @if(isset($user) && $user->is_admin ===0)
                              checked
                              @endif>
	                            <label class="form-check-label" for="radio2">User</label>
	                          </div>
	                         
	                          </div>
                       </div>
                     <div class="card-footer">
                      @if(isset($user))


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