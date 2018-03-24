@extends('layouts.wrapper')

@section('page-name', 'Exam Applications')

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
              
                    <!-- Example DataTables Card-->
                    <div class="card mb-3">
                        <div class="card-header">
                        <i class="fa fa-table"></i> Exam Applications </div>
                        <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Product Name</th>
                                    <th>Category</th>
                                    <th>Buying Price</th>
                                    <th>Selling Price</th>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Product Name</th>
                                    <th>Category</th>
                                    <th>Buying Price</th>
                                    <th>Selling Price</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                {{--  @if(count($products) > 1)  --}}
                                    @foreach($ExamApps as $ExamApp)
                                    
                                    {{--  style="border:none; background: transparent; outline: 0;"  --}}
                                    
                                        <tr href="{{route('examapplication.show',$ExamApp->id)}}">
                                                <td>
                                                    {{$ExamApp->exam_name}}
                                                </td>
                                                <td>
                                                    {{$ExamApp->application_type}} 
                                                </td>
                                                <td>
                                                    {!!$ExamApp->applicant_reason!!} 
                                                </td>                                                
                                                <td class="d-flex justify-content-center">
                                                    <a class="mx-auto fa fa-check" href="{{route('examapplication.show',$ExamApp->id)}}"></a>                                                    <a class="mx-auto fa fa-th-list " data-toggle="modal-{{$ExamApp->id}}" data-target="#modal"></a>
                                                    @include('widgets.modalform', array('header'=>true, 'as'=> $ExamApp->id))
                                                    <a class="mx-auto fa fa-trash-o" href="{{url('cards/show',$ExamApp->id)}}"></a>
                                                </td>
                                        </tr>
    
                                    @endforeach
                                {{--  @endif  --}}
                            </tbody>
                            </table>
                        </div>
                        </div>
                        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                    </div>
                </div>
            </div>
          </div>

@endsection                    