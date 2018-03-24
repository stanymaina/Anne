         
         <!-- AddProduct Modal-->
         <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    {!! Form::open(['action' => 'ViewsController@addCarousel', 'method' =>  'POST', 'enctype' => 'multipart/form-data', 'files' => true])!!}
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
                                {{ Form::label('image', 'Upload Slideshow Picture')}}
                                {{ Form::file('image',['class' =>  'form-control'])}}
                            </div>
                            <div class="form-group">
                                {{ Form::label('Heading', 'Heading')}}
                                {{ Form::text('heading', '', ['class' => 'form-control', 'placeholder'   =>  'Slideshow Heading'])}}
                            </div>
                            <div class="form-group">
                                {{ Form::label('SubHeading', 'Sub Heading')}}
                                {{ Form::text('sub_heading', '', ['class' => 'form-control', 'placeholder'   =>  'Enter Sub Heading'])}}
                            </div>
                            <div class="form-group">
                                {{ Form::label('Content', 'Slideshow Content')}}
                                {{ Form::text('content', '', ['class' =>  'form-control', 'id'    =>  'article-ckeditor'])}}
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