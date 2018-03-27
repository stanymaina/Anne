@extends('layouts.wrapper')    

@section('page-name', 'Create Role')

@section('body')
    
          <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.html">Dashboard</a>
              </li>
              <li class="breadcrumb-item active">Add Roles</li>
            </ol>
            <div class="row">
                <div class="col-12">
                    {!! Form::open(['route' => 'role.store', 'method' =>  'POST', 'enctype' => 'multipart/form-data', 'files' => true])!!}
                        @if( isset($header) )
                            <div class="modal-header">
                                <h5 class="modal-title" id=""> @yield ($as . '_panel_title') </h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                                </button>
                            </div>
                        @endif
                        <div class="modal-body">
                            <div class="form-group">
                                {{Form::label('name', 'Name of Role')}}
                                {{Form::text('name', '', ['class'    =>  'form-control', 'placeholder'   =>  'Name of Role', 'aria-describedby' =>  'ProductHelp'])}}
                            </div>
                            {{--  <div class="form-group">
                                {{ Form::label('Category', 'Category')}}
                                <select class="form-control" name="category">
                                    @foreach($categories as $category)
                                        <option>{{$category->category_name}}</option>
                                    @endforeach
                                </select>
                            </div>  --}}
                            <div class="form-group">
                                {{ Form::label('Display Name', 'Display name')}}
                                {{ Form::text('display_name', '', ['class' => 'form-control', 'placeholder'   =>  'Display name'])}}
                            </div>
                            <div class="form-group">
                                {{ Form::label('Description', 'Description')}}
                                {{ Form::text('description', '', ['class' => 'form-control', 'placeholder'   =>  'Description'])}}
                            </div>

                            <div class="form-group text-left">
                                <h3>Permissions</h3>
                                @foreach($permissions as $permission)
                                    <input type="checkbox"   name="permission[]" value="{{$permission->id}}" > {{$permission->name}} <br>
                                @endforeach
                            </div>                            
                        </div>
                        <button class="btn btn-primary" type="submit">Add Role</button>
                    {!! Form::close() !!}
                </div>
            </div>
          </div>

@endsection                    