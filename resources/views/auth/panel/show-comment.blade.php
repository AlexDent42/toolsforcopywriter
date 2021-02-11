@extends('layouts.dashboard')

@section('admin-content')
<div class="row">

<div class="col-lg-12">
                <div class="card">
                  <div class="card-header"><strong>{{ $comment->name }}</strong><span class="badge badge-success float-right">{{ $comment->status }}</span></div>
                  <div class="card-body">
                  	<div class="row">
                  	<div class="col-lg-4">{{ $comment->email }}</div>
                  	<div class="col-lg-4">{{ $comment->comment }}</div>
                  	<div class="col-lg-2">
                  		<a href="{{ route('comments.edit', $comment) }}">
                  		<button class="btn btn-block btn-primary active" type="button">
                  			Edit
                  		</button>
                  		</a>

                  		

                  	</div>
                  		<div class="col-lg-2">
                  			<form action="{{ route('comments.destroy', $comment) }}" method="POST">
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




@endsection