@extends('layouts.dashboard')
@section('admin-content')
 <!-- /.row-->
            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                 
                  <div class="card-body">
                    <table class="table table-responsive-sm table-bordered table-striped table-hover table-sm">
                      <thead>
                        <tr>
                          <th>User ID</th>
                          <th>Name</th>
                           <th>email</th>
                            <th>Role</th>
                          <th>Status</th>
                          <th>Edit</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($users as $user)
                        <tr>
                          <td>{{ $user->id }}</td>
                          <td><a href="{{ route('users.show', $user) }}">{{ $user->name }}</a></td>
                          <td><a href="{{ route('users.show', $user) }}">{{ $user->email }}</a></td>
                          <td>role</td>
                          <td>
                            @if($user->status=='active')

                            <span class="badge badge-success">Active</span>
                            @else
                             <span class="badge badge-warning">Pending</span>
                             @endif
                          </td>
                          <td><button class="btn btn-block btn-link" type="button"><a href="{{ route('users.edit', $user->id) }}">Edit</a></button></td>
                          <td>
                            <form action="{{ route('users.destroy', $user) }}" method="POST">
                              @csrf
                              @method('DELETE')

                              <button class="btn btn-block btn-link" type="submit">Delete</button>
                            </form></td>

                        </tr>


                        @endforeach
                        
                      </tbody>
                    </table>
                    <nav>
                      {{ $users->links() }}
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
                  <a href="{{ route('users.create') }}">
                    <button class="btn btn-block btn-primary active" type="button" aria-pressed="true">Create user</button>
                  </div>
                  </a>

            
            </div>

            @endsection