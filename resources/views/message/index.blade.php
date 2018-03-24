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

                <table class="table">
                        <thead class="thead-inverse">
                            <tr>
                            <th>#</th>
                            <th>Exam Name</th>
                            <th>School</th>
                            <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($messagesinbox->chunk(20) as $chunk)
                                @foreach($chunk as $message)
                                    <tr>
                                    <th scope="row"></th>
                                        <td>
                                            {{$message->name}}</br>
                                            {{$message->created_at}}
                                        </td>
                                        <td>{!!$message->message_body!!}</td>
                                        <th>
                                            <i class="fa fa-eye" data-toggle="modal" data-target="#myModal-{{$message->id}}"></i>
                                        </th>
                                    </tr>
                                          
                                    <!-- Modal -->
                                    <div class="modal fade" id="myModal-{{$message->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">From {{$message->name}}</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                {!!$message->message_body!!}
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <form action="{{route('messages.update',$message->id)}}" method="post" role="form">
                                                    {{method_field('PATCH')}}
                                                    {{csrf_field()}}
                                                    <button type="submit" class="btn btn-primary">Mark as read.</button>
                                                </form>
                                            </div>
                                            </div>
                                        </div>
                                    </div>                                    
                                @endforeach
                            @empty
                                <tr>
                                    <th scope="row">0</th>
                                    <td>Null</td>
                                    <td>No new message</td>
                                    <th>Null</th>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

              </div>
            </div>
          </div>

@endsection                    