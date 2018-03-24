@extends('layouts.wrapper')

@section('page-name', 'Timetables')

@section('body')
    
          <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.html">Dashboard</a>
              </li>
              <li class="breadcrumb-item active">Build Timetable</li>
            </ol>

            @include('inc.message')
             
            <div class="row">
              <div class="col-12">
                <h1>Timetable Builder</h1>
                <table class="table">
                    <thead class="thead-inverse">
                        <tr>
                        <th>#</th>
                        <th>Unit Name</th>
                        <th>Day</th>
                        <th>Time From</th>
                        <th>Time To</th>
                        <th>Lectured By</th>
                        <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($DetailTime as $chunk)
                            @foreach($chunk as $DetailTimeT)
                            <tr>
                                <th scope="row"></th>
                                <th scope="row">{{$DetailTimeT->unit_name}}</th>
                                <td>{{$DetailTimeT->day}}</td>
                                <td>{{$DetailTimeT->time_start}}</td>
                                <td>{{$DetailTimeT->time_end}}</td>
                                <td>{{$DetailTimeT->lectured_by}}</td>
                                <th>
                                    <i class="fa fa-check"></i>
                                    <i class="fa fa-trash-o"></i>
                                </th>
                            </tr>
                            @endforeach
                        @empty
                            <tr>
                                <th scope="row">0</th>
                                <td>No Time Slot alocated</td>
                                <td>No Time Slot alocated</td>
                                <th>Null</th>
                            </tr>
                        @endforelse
                    </tbody>
                </table>                   
              
                {!! Form::open(['route' => 'timetabledetails.store', 'method' =>  'POST', 'enctype' => 'multipart/form-data', 'files' => true])!!}
                {{--  @if( isset($header) )
                    <div class="modal-header">
                        <h5 class="modal-title" id=""> @yield ($as . '_panel_title') </h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                        </button>
                    </div>
                @endif  --}}
                <div id="datepairExample" class="modal-body">
                    <div class="form-group">
                        {{Form::label('Unit Name', 'Unit Name')}}
                        {{Form::text('unit_name', '', ['class'    =>  'form-control', 'placeholder'   =>  'Enter Unit Name...', 'aria-describedby' =>  'ProductHelp'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('Unit Name', 'Lecturer Name')}}
                        {{Form::text('lectured_by', '', ['class'    =>  'form-control', 'placeholder'   =>  'Enter Unit Name...', 'aria-describedby' =>  'ProductHelp'])}}
                    </div>
                    <div class="form-group">
                        {{ Form::label('Day', 'Day')}}
                        <select class="form-control" name="day">
                            <option>Monday</option>
                            <option>Tuesday</option>
                            <option>Wednesday</option>
                            <option>Thursaday</option>
                            <option>Friday</option>
                            <option>Saturday</option>
                        </select>
                    </div>
                    {{--  <div class="form-group">
                        {{ Form::label('lecturer', 'Lecturer')}}
                        <select class="form-control" name="lecturer">
                            @foreach($categories as $category)
                                <option>{{$category->category_name}}</option>
                            @endforeach
                        </select>
                    </div>                      --}}

                    <div class="form-group">
                        {{ Form::label('Start Time', 'Start Time')}}
                        {{ Form::text('start_at', '', ['class' => 'time start form-control', 'placeholder'   =>  'Enter Start Time'])}}
                    </div>
                    <div class="form-group">
                        {{ Form::label('End Time', 'End Time')}}
                        {{ Form::text('end_at', '', ['class' => 'time end form-control', 'placeholder'   =>  'Enter End Time'])}}
                    </div>
                    <div class="form-group">
                        {{Form::hidden('timetable_id', $timetableid, ['class'    =>  'form-control'])}}
                    </div>
                    {{--  <div class="form-group">
                        {{ Form::label('Lecturer Name', 'Lectured By')}}
                        <select class="form-control" name="lectured_by">
                            @foreach($courses as $course)
                                <option>{{$course->courses_name}}</option>
                            @endforeach
                        </select>
                    </div>  --}}
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary" type="submit">Add Unit Slot</button>
                </div> 
              </div>            
            </div>
          </div>

@endsection                    