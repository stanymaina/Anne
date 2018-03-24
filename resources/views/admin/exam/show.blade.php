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
              <div class="col-12 align-items-center justify-content-center">
                <h1>Review Application</h1>
                <div class="card" style="width: 20rem;">
                    {{--  <img class="card-img-top" src="..." alt="Card image cap">  --}}
                    <div class="card-block">
                      <h4 class="card-title">{{$Applicants->name}}</h4>
                      <p class="card-text">{{$ExamApp->application_type}}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">{{$Applicants->name}}</li>
                      <li class="list-group-item">{{$ExamApp->exam_name}}</li>
                        @if($ExamApp->application_type == "Special")
                            <li class="list-group-item">{{$ExamApp->applicant_reason}}</li>
                        @endif
                    </ul>
                    <div class="card-block">
                        <form action="{{route('examapplication.update',$ExamApp->id)}}" method="post" role="form">
                                {{method_field('PATCH')}}
                                {{csrf_field()}}
                            <input name="hi" type="hidden" value="10">
                            <button type="" name="action" value="Accept" class="btn btn-success" onClick="return validate()">Accept Application</button>
                            <button type="" name="action" value="Deny" class="btn btn-danger" onClick="return validate()">Reject </button>
                        </form>
                    </div>
                </div>
              </div>           
            </div>
          </div>

@endsection                    