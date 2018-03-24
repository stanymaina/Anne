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
                <h1>Exam Requests</h1>

                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Exam Card
                        </a></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Apply Special Exams</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Apply for Retake</a>
                    </li>
                  </ul>
                  <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <table class="table">
                            <thead class="thead-inverse">
                                <tr>
                                <th>#</th>
                                <th>Exam Name</th>
                                <th>School</th>
                                <th>Period</th>
                                <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <th>Download</th>
                                </tr>
                                <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                                <th>Download</th>
                                </tr>
                                <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                                <th>Download</th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade text-center" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        {{--  <div class="card text-center" style="width: 20rem;">  --}}
                        <div class="card text-center">
                            {{--  <img class="card-img-top" src="..." alt="Card image cap">  --}}
                            <div class="card-block">
                                <h4 class="card-title">Student Name</h4>
                                <p>Once you apply this form, your administrator will get back to you whether accepted or rejected.</br>
                                Note: Confirm Application.</p>
                            </div>
                            {!! Form::open(['route' => 'examapplication.store', 'method' =>  'POST', 'enctype' => 'multipart/form-data', 'files' => true])!!}
                                <div class="form-group">
                                    {{ Form::label('Buying Price', 'Exam Name')}}
                                    {{ Form::text('exam_name', '', ['class' => 'form-control', 'placeholder'   =>  'Buying Price'])}}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('Reason', 'Reason')}}
                                    {{ Form::textarea('reason', '', ['id' => 'article-ckeditor', 'class' => 'form-control'])}}
                                </div>
                                <div class="form-group">
                                    <input type="hidden" name="AppType" value="Special"/>
                                    <button class="btn btn-info" type="submit">
                                        Apply Special Exam
                                    </button>
                                </div>
                            {!! Form::close() !!}
                        </div>                       
                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="card text-center">
                            {{--  <img class="card-img-top" src="..." alt="Card image cap">  --}}
                            <div class="card-block">
                                <h4 class="card-title">Student Name</h4>
                                <p>Once you apply this form, your administrator will get back to you whether accepted or rejected.</br>
                                Note: Confirm Application.</p>
                            </div>
                            {!! Form::open(['route' => 'examapplication.store', 'method' =>  'POST', 'enctype' => 'multipart/form-data', 'files' => true])!!}
                                <div class="form-group">
                                    {{ Form::label('Exam Name', 'Exam Name')}}
                                    {{ Form::text('exam_name', '', ['class' => 'form-control', 'placeholder'   =>  'Buying Price'])}}
                                </div>
                                <div class="form-group">
                                    <input type="hidden" name="AppType" value="Resit"/>
                                    <button class="btn btn-info" type="submit">
                                        Apply Resit Exam
                                    </button>
                                </div>
                            {!! Form::close() !!}
                        </div>                   
                    </div>
                  </div>

              </div>                                                 
            </div>
          </div>

@endsection                    