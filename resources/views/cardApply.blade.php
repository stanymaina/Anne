@extends('layouts.wrapper')

@section('page-name', 'Exams')

@section('body')
    
          <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                {{--  <a href="{{url(/dashboard)}}">Dashboard</a>  --}}
                <a href="">Dashboard</a>
              </li>
              <li class="breadcrumb-item active">Exams</li>
            </ol>
            
            @include('inc.message')
        
            <!-- .row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3>Select Application Type</h3>
                        </div>
                        <!-- .panel-heading -->
                        <div class="panel-body">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                                <h5>Notify Absentees</h5>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in">
                                        <div id="datepairExample" class="panel-body">
                                            <div class="form-group">
                                                    {!! Form::open(['route' => 'cards.store', 'method' =>  'POST', 'enctype' => 'multipart/form-data', 'files' => true])!!}
                                                    <div class="form-group">                                                        
                                                        <div class="form-row">
                                                            <div class="col-md-6">
                                                                <label for="exampleInputPassword1">From</label>
                                                                <input type="text" name="DateFrom" class="date start form-control" placeholder="Date From" />
                                                            </div> 
                                                            <div class="col-md-6">
                                                                <label for="exampleInputPassword1">From</label>
                                                                <input type="text" name="TimeFrom" class="time start form-control" placeholder="Time From" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">                                                        
                                                        <div class="form-row">                                                                                                                        
                                                            <div class="col-md-6">
                                                                <label for="exampleConfirmPassword">To</label>
                                                                <input type="text" name="DateTo" class="date end form-control" placeholder="Date To" />                                                            
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="exampleConfirmPassword">To</label>
                                                                <input type="text" name="TimeTo" class="time end form-control" placeholder="Time To" />                                                        
                                                            </div>                                                             
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="form-row">
                                                            <div id="datepairExample" class="col-md-6">
                                                                {{ Form::label('Faculty', 'Faculty')}}
                                                                <select class="form-control" name="faculty">
                                                                    @foreach($faculties as $faculty)
                                                                        <option value="{{$faculty->id}}">{{$faculty->faculty_name}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>                                                       
                                                        </div>
                                                    </div>                                            
                                                    <div class="form-group">
                                                        <input type="hidden" name="AppType" value="Absentism"/>
                                                        <button type="submit" class="btn btn-lg btn-success">
                                                            Apply
                                                        </button>    
                                                    </div> 
                                                {!! Form::close() !!}
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                                <h5>Apply Lost Id</h5>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            {!! Form::open(['route' => 'cards.store', 'method' =>  'POST', 'enctype' => 'multipart/form-data', 'files' => true])!!}
                                                <div class="form-group">                                                        
                                                    <div class="form-row">
                                                        <div id="datepairExample" class="col-md-6">
                                                            <label for="exampleInputPassword1">Date Lost</label>
                                                            <input type="text" name="dateLost" class="date start form-control placeholder="Date From"" required/>        
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="form-row">
                                                            <div id="datepairExample" class="col-md-6">
                                                                {{ Form::label('Faculty', 'Faculty')}}
                                                                <select class="form-control" name="faculty">
                                                                    @foreach($faculties as $faculty)
                                                                        <option value="{{$faculty->id}}">{{$faculty->faculty_name}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>                                                       
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="form-group">
                                                    <input type="hidden" name="AppType" value="Lost"/>
                                                    <button type="submit" class="btn btn-lg btn-success">
                                                        Apply
                                                    </button>    
                                                </div>                                                        
                                            {!! Form::close() !!}                                                                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                                <h5>Apply Abstract Document</h5>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse">
                                        <div id="datepairExample" class="panel-body">
                                            Apply Abstract Document
                                        {!! Form::open(['route' => 'cards.store', 'method' =>  'POST', 'enctype' => 'multipart/form-data', 'files' => true])!!}
                                            <div class="form-group">                                                        
                                                <div class="form-row">
                                                    <div id="datepairExample" class="col-md-6">
                                                        <label for="exampleInputPassword1">Date Lost</label>
                                                        <input type="text" name="dateLost" class="date start form-control placeholder="Date From"" required/>        
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-row">
                                                        <div id="datepairExample" class="col-md-6">
                                                            {{ Form::label('Faculty', 'Faculty')}}
                                                            <select class="form-control" name="faculty">
                                                                @foreach($faculties as $faculty)
                                                                    <option value="{{$faculty->id}}">{{$faculty->faculty_name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>                                                       
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class="form-group">
                                                <input type="hidden" name="AppType" value="PoliceAbstract"/>
                                                <button type="submit" class="btn btn-lg btn-success">
                                                    Apply
                                                </button>    
                                            </div>                                                        
                                        {!! Form::close() !!}                                          </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- .panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
          </div>

@endsection                    