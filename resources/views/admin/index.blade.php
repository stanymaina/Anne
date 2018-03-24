@extends('layouts.wrapper')

@section('page-name', 'Admin')

@section('body')
    
          <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.html">Dashboard</a>
              </li>
              <li class="breadcrumb-item active">Roles</li>
            </ol>
            
            @include('inc.message')
        
            <div class="row">
              <div class="col-12">
                <h1>Blank</h1>
                <p>This is an example of a blank page that you can use as a starting point for creating new ones.</p>
              </div>
            </div>
          </div>

@endsection                    