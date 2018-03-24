         <!-- AddProduct Modal-->
         <div class="modal fade" id="add_brand" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    {!! Form::open()!!}
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
                                {{Form::label('category', 'Brand Name')}}
                                {{Form::text('brand_name', '', ['class'    =>  'form-control', 'placeholder'   =>  'Enter Brand Name...', 'aria-describedby' =>  'ProductHelp'])}}
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <button class="btn btn-primary" type="submit">Add Brand</button>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>