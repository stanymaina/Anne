@extends('layouts.wrapper')

@section('page-name', 'Timetables')

@section('body')
    
          <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.html">Dashboard</a>
              </li>
              <li class="breadcrumb-item active">Available Timetables</li>
            </ol>

            @include('inc.message')
            
            <div class="row">
              <div class="col-12">
                <h1>Timetable</h1>
                
                <!-- DetailTT Table -->
                <div class="card mb-3">
                  <div class="card-header">
                    <i class="fa fa-table"></i>Active Timetables</div>
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
                          @if(count($DetailTTs) > 1)
                              @forelse($DetailTTs as $DetailTT)
                              <tr>
                                  <td>{{$DetailTT->timetable_name}}</td>
                                  <td>{{$DetailTT->course_id}}</td>
                                  <td>From{{$DetailTT->date_from}} to {{$DetailTT->date_to}}</td>
                                  <td>
                                      <a class="btn btn-info btn-sm" href="{{route('DetailTT.edit',$DetailTT->id)}}">Edit</a>
                                      <form action="{{route('DetailTT.destroy',$DetailTT->id)}}"  method="POST">
                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                        <input class="btn btn-sm btn-danger" type="submit" value="Delete">
                                      </form>
                                  </td>
                              </tr>
                              @empty
                              <tr>
                                <td>No DetailTTs</td>
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
          </div>

@endsection                    