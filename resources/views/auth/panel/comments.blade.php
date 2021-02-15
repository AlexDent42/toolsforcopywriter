@extends('layouts.dashboard')
@section('admin-content')
 <!-- /.row-->
            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                 {{--  <div class="card-header"><i class="fa fa-align-justify"></i> Combined All Table</div> --}}
                  <div class="card-body">
                    <table class="table table-responsive-sm table-bordered table-striped table-hover table-sm">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Author</th>
                           <th>email</th>
                            <th>Comment</th>
                          <th>Status</th>
                          <th>Edit</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($comments as $comment)
                        <tr>
                          <td>{{ $comment->id }}</td>
                          <td><a href="{{ route('comments.show', $comment) }}">{{ $comment->name }}</a></td>
                          <td><a href="{{ route('comments.show', $comment) }}">{{ $comment->email }}</a></td>
                        <td>{{ $comment->comment }}</td>
                          <td>
                            @if($comment->status=='active')

                            <span class="badge badge-success">Active</span>
                            @else
                             <span class="badge badge-warning">Pending</span>
                             @endif
                          </td>
                          <td><button class="btn btn-block btn-link" type="button"><a href="{{ route('comments.edit', $comment) }}">Edit</a></button></td>
                          <td>
                            <form action="{{ route('comments.destroy', $comment) }}" method="POST">
                              @csrf
                              @method('DELETE')

                              <button class="btn btn-block btn-link" type="submit">Delete</button>
                            </form></td>

                        </tr>


                        @endforeach
                        
                      </tbody>
                    </table>
                    <nav>
                      {{ $comments->links() }}
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
              
                <div class="col-2 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                  <a href="{{ route('comments.create') }}">
                    <button class="btn btn-block btn-primary active" type="button" aria-pressed="true">Create comment</button>
                  </div>
                  </a>

            
            </div>

            @endsection