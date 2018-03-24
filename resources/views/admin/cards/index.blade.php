@extends('layouts.wrapper')

@section('page-name', 'ID Cards')

@section('body')
    
          <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.html">Dashboard</a>
              </li>
              <li class="breadcrumb-item active">Cards</li>
            </ol>
            
            @include('inc.message')
        
            <div class="row">
              <div class="col-12">
                <h1>Blank</h1>
                <p>This is an example of a blank page that you can use as a starting point for creating new ones.</p>
              </div>
              <div class="col-4">
                <a class="btn btn-primary" data-toggle="modal" data-target="#add_brand">
                    <i class="fa fa-fw fa-sign-out"></i>Add Card
                </a>
              </div>
              <div class="col-4">
                <a class="btn btn-primary" data-toggle="modal" data-target="#add_brand">
                    <i class="fa fa-fw fa-sign-out"></i>Add Brand
                </a>
              </div>
              <div class="col-12">
                <h1>Current Product Stock</h1>
                <p>Tis is a list of all the products. If you wish to alter products, please follow the following key;
                     {{--  change their respective values and press <i class="fa fa-check"></i> in the action bar.</p>  --}}
                     
                     <ul>
                        <li><i class="fa fa-check"></i>     Update Change. (Press everytime you change the value of one product.)</li>
                        <li><i class="fa fa-th-list"></i>   View more. Detailed information about the product.</li>
                        <li><i class="fa fa-trash-o"></i>   Remove froduct from stocklist.</li>
                     </ul>
                <!-- Example DataTables Card-->
                <div class="card mb-3">
                    <div class="card-header">
                    <i class="fa fa-table"></i> Stock Table</div>
                    <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Product Name</th>
                                <th>Category</th>
                                <th>Buying Price</th>
                                <th>Selling Price</th>
                                <th>% Profit</th>
                                <th>Current Stock</th>
                                <th>Change Stock</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Product Name</th>
                                <th>Category</th>
                                <th>Buying Price</th>
                                <th>Selling Price</th>
                                <th>% Profit</th>
                                <th>Current Stock</th>
                                <th>Change Stock</th>
                                <th>Actions</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            {{--  @if(count($products) > 1)  --}}
                                @foreach($CardApps as $CardApp)
                                
                                {{--  style="border:none; background: transparent; outline: 0;"  --}}
                                
                                    <tr>
                                        {!! Form::open(['route' => ['cards.store',$CardApp->id], 'method' =>  'POST', 'enctype' => 'multipart/form-data', 'files' => true])!!}
                                            <td>
                                            <i class="invisible">{{$CardApp->name}}</i>
                                                {{Form::text('ProductName', $CardApp->name, ['class'    =>  'form-control', 'style'    =>  'max-width:inherit; border:none; background: transparent; outline: 0;', 'placeholder'   =>  'Enter Product Name...', 'aria-describedby' =>  'ProductHelp'])}}
                                                {{--  <input id="myText" type="text" style="border:none; background: transparent; outline: 0;" value="{{$CardApp->name}}"/>  --}}
                                            </td>
                                            <td>
                                                {{$CardApp->category}} 
                                            </td>
                                            <td>
                                                <i class="invisible">{{$CardApp->applicant_id}}<i>
                                                {{--  {{ Form::text('Bprice', $CardApp->buying_price, ['class' => 'form-control', 'placeholder'   =>  'Buying Price'])}}  --}}
                                                {{ Form::text('Bprice', $CardApp->buying_price, ['class' => 'form-control', 'placeholder'   =>  'Selling Price'])}}
                                            </td>
                                            <td>
                                                <i class="invisible">{{$CardApp->id}}</i>
                                                {{ Form::text('Sprice', $CardApp->selling_price, ['class' => 'form-control', 'placeholder'   =>  'Selling Price'])}}
                                            </td>
                                            <td>{{$CardApp->image}}</td>
                                            <td>Ksh {{$CardApp->buying_price}}</td>
                                            <td>
                                                <input class="form-control" type="text" name="specs" value="" autocomplete="off" size="2">    
                                            </td>
                                            <td class="d-flex justify-content-center">
                                                {{Form::submit('',['class'=>'mx-auto fa fa-check'])}}
                                                {{--  <button type="submit" class="mx-auto fa fa-check"></button>  --}}
                                                <a class="mx-auto fa fa-th-list " data-toggle="modal-{{$CardApp->id}}" data-target="#modal"></a>
                                                @include('widgets.modalform', array('header'=>true, 'as'=> $CardApp->id))
                                                <a class="mx-auto fa fa-trash-o" href="{{url('cards/show',$CardApp->id)}}"></a>
                                            </td>
                                        {!! Form::close() !!}
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