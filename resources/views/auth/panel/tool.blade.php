@extends('layouts.dashboard')
@section('admin-content')
 <!-- /.row-->
            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-header"><i class="fa fa-align-justify"></i> Combined All Table</div>
                  <div class="card-body">
                    <table class="table table-responsive-sm table-bordered table-striped table-hover table-sm">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Title</th>
                           <th>Description</th>
                            <th>Article</th>
                          <th>Status</th>
                          <th>Edit</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($tools as $tool)
                        <tr>
                          <td>{{ $tool->id }}</td>
                          <td><a href="{{ route('tools.show', $tool) }}">{{ $tool->title }}</a></td>
                          <td><a href="{{ route('tools.show', $tool) }}">{{ $tool->description }}</a></td>
                        <td>{{ $tool->text }}</td>
                          <td>
                            @if($tool->status=='active')

                            <span class="badge badge-success">Active</span>
                            @else
                             <span class="badge badge-warning">Pending</span>
                             @endif
                          </td>
                          <td><button class="btn btn-block btn-link" type="button"><a href="{{ route('tools.edit', $tool) }}">Edit</a></button></td>
                         

                        </tr>


                        @endforeach
                        
                      </tbody>
                    </table>
                    <nav>
                      {{ $tools->links() }}
                      {{-- <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                      </ul> --}}
                    </nav>
                  </div>
                </div>
              </div>
              <!-- /.col-->
            </div>
            <!-- /.row-->
            <div class="row">
              <div class="col-lg-10">

              </div>
              
           
                  </a>

            
            </div>

            @endsection