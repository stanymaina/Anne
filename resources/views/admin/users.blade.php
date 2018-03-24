@extends('layouts.wrapper')    

@section('body')
    
          <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.html">Dashboard</a>
              </li>
              <li class="breadcrumb-item active">Change Stock</li>
            </ol>
            <div class="row">
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
                                @foreach($products as $product)
                                
                                
                                    <tr>
                                        {!! Form::open(['route' => ['productLog.store',$product->id], 'method' =>  'POST', 'enctype' => 'multipart/form-data', 'files' => true])!!}
                                            <td>
                                            <i class="invisible">{{$product->name}}</i>
                                                {{Form::text('ProductName', $product->name, ['class'    =>  'form-control', 'placeholder'   =>  'Enter Product Name...', 'aria-describedby' =>  'ProductHelp'])}}
                                            </td>
                                            <td>
                                                {{$product->category}} 
                                            </td>
                                            <td>
                                                <i class="invisible">{{$product->buying_price}}<i>
                                                {{--  {{ Form::text('Bprice', $product->buying_price, ['class' => 'form-control', 'placeholder'   =>  'Buying Price'])}}  --}}
                                                {{ Form::text('Bprice', $product->buying_price, ['class' => 'form-control', 'placeholder'   =>  'Selling Price'])}}
                                            </td>
                                            <td>
                                                <i class="invisible">{{$product->selling_price}}</i>
                                                {{ Form::text('Sprice', $product->selling_price, ['class' => 'form-control', 'placeholder'   =>  'Selling Price'])}}
                                            </td>
                                            <td>{{$product->image}}</td>
                                            <td>Ksh {{$product->buying_price}}</td>
                                            <td>
                                                <input class="form-control" type="text" name="specs" value="" autocomplete="off" size="2">    
                                            </td>
                                            <td class="d-flex justify-content-center">
                                                {{Form::submit('',['class'=>'mx-auto fa fa-check'])}}
                                                {{--  <button type="submit" class="mx-auto fa fa-check"></button>  --}}
                                                <a class="mx-auto fa fa-th-list " data-toggle="modal-{{$product->id}}" data-target="#modal"></a>
                                                @include('widgets.modalform', array('header'=>true, 'as'=> $product->id))
                                                <a class="mx-auto fa fa-trash-o" href=""></a>
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