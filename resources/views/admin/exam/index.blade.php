@extends('layouts.wrapper')

@section('page-name', 'Exams')

@section('body')
    
          <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                {{--  <a href="{{url(/dashboard)}}">Dashboard</a>  --}}
              </li>
              <li class="breadcrumb-item active">Exams</li>
            </ol>
            
            @include('inc.message')
        
            <div class="row">
              <div class="col-12">
                <h1>Blank</h1>
                <p>This is an example of a blank page that you can use as a starting point for creating new ones.</p>
              </div>
              <div class="col-4">
                <a class="btn btn-primary" data-toggle="modal" data-target="#add_brand">
                    <i class="fa fa-fw fa-sign-out"></i>Create New Exam
                </a>
              </div> 
              <div class="col-4">
                <a class="btn btn-primary" data-toggle="modal" data-target="#add_brand">
                    <i class="fa fa-fw fa-sign-out"></i>Special Exams
                </a>
              </div>   
              <div class="col-4">
                <a class="btn btn-primary" data-toggle="modal" data-target="#add_brand">
                    <i class="fa fa-fw fa-sign-out"></i>Retakes
                </a>
              </div>                                                   
            </div>
          </div>

@endsection                    