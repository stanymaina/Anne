         <!-- AddProduct Modal-->
        <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    {!! Form::open(['action' => 'CardAppController@store', 'method' =>  'POST', 'enctype' => 'multipart/form-data', 'files' => true])!!}
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
                                {{Form::label('ProductName', 'Product Name')}}
                                {{Form::text('ProductName', '', ['class'    =>  'form-control', 'placeholder'   =>  'Enter Product Name...', 'aria-describedby' =>  'ProductHelp'])}}
                            </div>
                            <div class="form-group">
                                {{ Form::label('Category', 'Category')}}
                                <select class="form-control" name="category">
                                    {{--  @foreach($categories as $category)
                                        <option>{{$category->category_name}}</option>
                                    @endforeach  --}}
                                </select>
                            </div>
                            <div class="form-group">
                                {{ Form::label('specs', 'Specifications')}}
                                {{--  {{ Form::textarea('specs', '', ['class' => 'form-control', 'id' => 'article-ckeditor'])}}  --}}
                                {{ Form::textarea('specs', '', ['id' => 'article-ckeditor', 'class' => 'form-control'])}}
                            </div>
                            <div class="form-group">
                                {{ Form::label('image', 'Upload Product File')}}
                                {{ Form::file('image',['class' =>  'form-control'])}}
                            </div>
                            <div class="form-group">
                                {{ Form::label('Buying Price', 'Buying Price')}}
                                {{ Form::text('Bprice', '', ['class' => 'form-control', 'placeholder'   =>  'Buying Price'])}}
                            </div>
                            <div class="form-group">
                                {{ Form::label('Selling Price', 'Selling Price')}}
                                {{ Form::text('Sprice', '', ['class' => 'form-control', 'placeholder'   =>  'Selling Price'])}}
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <button class="btn btn-primary" type="submit">Add Product</button>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>