@extends('layouts.dashboard')

@section('admin-content')
<div class="row">

<div class="col-lg-12">
                <div class="card">
                  <div class="card-header"><strong>{{ $user->name }}</strong><span class="badge badge-success float-right">{{ $user->status }}</span></div>
                  <div class="card-body">
                  	<div class="row">
                  	<div class="col-lg-8">{{ $user->email }}</div>
                  	<div class="col-lg-2">
                  		<a href="{{ route('users.edit', $user) }}">
                  		<button class="btn btn-block btn-primary active" type="button">
                  			Edit
                  		</button>
                  		</a>

                  		

                  	</div>
                  		<div class="col-lg-2">
                  			<form action="{{ route('users.destroy', $user) }}" method="POST">
                  				@csrf
                  				@method('DELETE')
                  				<button type="submit" class="btn btn-block btn-danger active">Destroy</button>
                  				

                  			</form>


                  			

                  		</div>

                  	</div>
                  </div>
                </div>
              </div>
</div>



<div class="row">
<div class="col-lg-6">
</div>
<div class="col-lg-6">

<a href="{{ route('users.edit', $user) }}">Edit</a>

          </div>
@endsection