@extends('layouts.dashboard')

@section('admin-content')
<div class="row">

<div class="col-lg-12">
                <div class="card">
                  <div class="card-header"><strong>{{ $tool->title }}</strong><span class="badge badge-success float-right">{{ $tool->status }}</span></div>
                  <div class="card-body">
                  	<div class="row">
                  	<div class="col-lg-4">{{ $tool->description }}</div>
                  	<div class="col-lg-4">{{ $tool->text }}</div>
                  	<div class="col-lg-2">
                  		<a href="{{ route('tools.edit', $tool) }}">
                  		<button class="btn btn-block btn-primary active" type="button">
                  			Edit
                  		</button>
                  		</a>

                  		

                  	</div>
                  		<div class="col-lg-2">
                  			

                  			

                  		</div>

                  	</div>
                  </div>
                </div>
              </div>
</div>




@endsection