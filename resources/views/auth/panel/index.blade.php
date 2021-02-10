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
                          <th>Username</th>
                          <th>Date registered</th>
                          <th>Role</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($users as $user)
                        <tr>
                          <td>{{ $user->name }}</td>
                          <td>{{ $user->email }}</td>
                          <td>{{ $user->created_at }}</td>
                          <td><span class="badge badge-success">Active</span></td>
                        </tr>
                        @endforeach
                       {{--  <tr>
                          <td>Zbyněk Phoibos</td>
                          <td>2012/02/01</td>
                          <td>Staff</td>
                          <td><span class="badge badge-danger">Banned</span></td>
                        </tr>
                        <tr>
                          <td>Einar Randall</td>
                          <td>2012/02/01</td>
                          <td>Admin</td>
                          <td><span class="badge badge-secondary">Inactive</span></td>
                        </tr>
                        <tr>
                          <td>Félix Troels</td>
                          <td>2012/03/01</td>
                          <td>Member</td>
                          <td><span class="badge badge-warning">Pending</span></td>
                        </tr>
                        <tr>
                          <td>Aulus Agmfggfgundr</td>
                          <td>2012/01/21</td>
                          <td>Staff</td>
                          <td><span class="badge badge-success">Active</span></td>
                        </tr> --}}
                      </tbody>
                    </table>
                    <nav>
                      <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                      </ul>
                    </nav>
                  </div>
                </div>
              </div>
              <!-- /.col-->
            </div>
            <!-- /.row-->

            @endsection