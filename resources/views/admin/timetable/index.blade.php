@extends('layouts.wrapper')

@section('page-name', 'Timetables')

@section('body')
    
          <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.html">Dashboard</a>
              </li>
              <li class="breadcrumb-item active">Timetables</li>
            </ol>
            <div class="row">
              <div class="col-12">
                <h1>All Timetables</h1>
                
              <div class="col-4">
                <a class="btn btn-primary" data-toggle="modal" data-target="#add_brand">
                    <i class="fa fa-fw fa-sign-out"></i>Create New Timetable
                </a>
              </div> 
              
                <!-- Example DataTables Card-->
                <div class="card mb-3">
                    <div class="card-header">
                    <i class="fa fa-table"></i> Exam Applications </div>
                    <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>TimeTable Name</th>
                                <th>Course</th>
                                <th>Date From</th>
                                <th>Date To</th>                        </thead>
                        <tfoot>
                            <tr>
                                <th>TimeTable Name</th>
                                <th>Course</th>
                                <th>Date From</th>
                                <th>Date To</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            {{--  @if(count($products) > 1)  --}}
                                @foreach($timetables as $timetable)
                                
                                {{--  style="border:none; background: transparent; outline: 0;"  --}}
                                
                                    <tr href="{{route('timetables.show',$timetable->id)}}">
                                            <td>
                                                {{$timetable->timetable_name}}
                                            </td>
                                            <td>
                                                {{$timetable->date_from}} 
                                            </td>
                                            <td>
                                                {!!$timetable->date_to!!} 
                                            </td>                                                
                                            <td class="d-flex justify-content-center">
                                                <a class="mx-auto fa fa-pencil" href="{{route('timetables.show',$timetable->id)}}"></a>                                                    <a class="mx-auto fa fa-th-list " data-toggle="modal-{{$timetable->id}}" data-target="#modal"></a>
                                                @include('widgets.modalform', array('header'=>true, 'as'=> $timetable->id))
                                                <a class="mx-auto fa fa-trash-o" href="{{url('cards/show',$timetable->id)}}"></a>
                                            </td>
                                    </tr>

                                @endforeach
                            {{--  @endif  --}}
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