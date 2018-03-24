@extends('layouts.wrapper')

@section('page-name', 'Add Course')

@section('body')
    
          <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.html">Dashboard</a>
              </li>
              <li class="breadcrumb-item active">Course</li>
            </ol>
            @include('inc.message')
            <div class="row">
              <div class="col-12">
                <h1>Add Course</h1>
                
              </div>
              {!! Form::open(['action' => 'CourseController@store', 'method' =>  'POST', 'enctype' => 'multipart/form-data', 'files' => true])!!}
              <div class="modal-body">
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
                  <div class="form-group">
                      {{ Form::label('description', 'Brief Description')}}
                      {{ Form::textarea('description', '', ['id' => 'article-ckeditor', 'class' => 'form-control'])}}
                  </div>
                  <div class="form-group">
                      {{ Form::label('image', 'Upload Course File')}}
                      {{ Form::file('image',['class' =>  'form-control'])}}
                  </div>
              </div>
              <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                  <button class="btn btn-primary" type="submit">Add Course</button>
              </div>
          {!! Form::close() !!}               
            </div>
          </div>

@endsection                    