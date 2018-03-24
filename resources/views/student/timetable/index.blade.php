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
                                
              </div>
              <div class="col-4">
                <a class="btn btn-primary" data-toggle="modal" data-target="#add_brand">
                    <i class="fa fa-fw fa-sign-out"></i>Request for class Venue
                </a>
              </div>                
            </div>
          </div>

@endsection                    