@extends('layouts.wrapper')

@section('page-name', 'Add Timetable')

@section('body')
    
          <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.html">Dashboard</a>
              </li>
              <li class="breadcrumb-item active">Timetable</li>
            </ol>
            @include('inc.message')
            <div class="row">
              <div class="col-12">
                <h1>Add Timetable</h1>
                
              </div>
                {!! Form::open(['action' => 'TimetableController@store', 'method' =>  'POST', 'enctype' => 'multipart/form-data', 'files' => true])!!}
                    <div id="datepairExample" class="modal-body">
                    <div class="form-group"> 
                        {{Form::label('Course Name', 'Course Name')}}
                        {{Form::text('course_name', '', ['class'    =>  'form-control', 'placeholder'   =>  'Enter Course Name...', 'aria-describedby' =>  'ProductHelp'])}}
                    </div>
                    <div class="form-group">
                        {{ Form::label('faculty', 'Faculty')}}
                        <select class="form-control" name="faculty">
                            {{--  @foreach($categories as $category)  --}}
                                <option>FIT</option>
                                <option>Humanities</option>
                                <option>Economics</option>
                                <option>Math</option>
                            {{--  @endforeach  --}}
                        </select>
                    </div>
                    <div class="form-group" id="timepicker">
                        {{Form::label('Course Start', 'Course Start')}}
                        {{Form::text('course_start', '', ['class'    =>  'date start form-control', 'placeholder'   =>  'Enter Course Name...', 'aria-describedby' =>  'ProductHelp'])}}
                        <span class="input-group-addon">
                            <span class="fa fa-time"></span>
                        </span>
                    </div>
                    <div class="form-group">
                        {{Form::label('Course End', 'Course End')}}
                        {{Form::text('course_end', '', ['class'    =>  'date end form-control', 'placeholder'   =>  'Enter Course Name...', 'aria-describedby' =>  'ProductHelp'])}}
                    </div>                
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <button class="btn btn-primary" type="submit">Add Timetable</button>
                    </div>
                    {!! Form::close() !!}   
                </div>            
            </div>
          </div>

@endsection                    