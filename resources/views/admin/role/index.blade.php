@extends('layouts.wrapper')    

@section('page-name', 'User Roles')

@section('body')
    
          <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.html">Dashboard</a>
              </li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
            <div class="row">
              <div class="col-12">
                <h1>Blank</h1>
                <p>This is an example of a blank page that you can use as a starting point for creating new ones.</p>
              </br>
              <a class="btn btn-success" href="{{route('role.create')}}"> Create Role</a>
        
                <!-- Role Table -->
                <div class="card mb-3">
                  <div class="card-header">
                    <i class="fa fa-table"></i>Users and their Respective Roles</div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Display Name</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Display Name</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                          @if(count($roles) > 1)
                              @forelse($roles as $role)
                              <tr>
                                  <td>{{$role->name}}</td>
                                  <td>{{$role->display_name}}</td>
                                  <td>{{$role->description}}</td>
                                  <td>
                                      <a class="btn btn-info btn-sm" href="{{route('role.edit',$role->id)}}">Edit</a>
                                      <form action="{{route('role.destroy',$role->id)}}"  method="POST">
                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                        <input class="btn btn-sm btn-danger" type="submit" value="Delete">
                                      </form>
                                  </td>
                              </tr>
                              @empty
                              <tr>
                                <td>No Roles</td>
                              </tr>
                              @endforelse
                          @endif
                      </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                </div>  
            </div>
          </div>

@endsection                    