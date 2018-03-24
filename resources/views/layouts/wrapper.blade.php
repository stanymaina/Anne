@extends('layouts.index')    

@section('admin-index')
    
    <body class="fixed-nav sticky-footer bg-dark" id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
          <a class="navbar-brand" href="/">Anne Portal</a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
              <li class="nav-item" data-toggle="tooltip" data-placement="right" title="User">
                <a class="nav-link" href="">
                  <i class="fa fa-fw fa-user"></i>
                  <span class="nav-link-text">{{ Auth::user()->name }} </span>                  
                </a> 
              </li>
              <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                <a class="nav-link" href="index.html">
                  <i class="fa fa-fw fa-dashboard"></i>
                  <span class="nav-link-text">Dashboard</span>
                </a> 
              </li>              
              <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Users">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#users" data-parent="#exampleAccordion">
                  <i class="fa fa-fw fa-align-justify"></i>
                  <span class="nav-link-text">All Users</span>
                </a>
                <ul class="sidenav-second-level collapse" id="users">
                  <li>
                    <a href="{{ url('/') }}">All</a>
                  </li>
                  <li>
                    <a href="{{ url('/stock') }}">Requests</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Cards">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#cards" data-parent="#exampleAccordion">
                  <i class="fa fa-fw fa-eye"></i>
                  <span class="nav-link-text">Org Cards</span>
                </a>
                <ul class="sidenav-second-level collapse" id="cards">
                  <li>
                    <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti2">Cards</a>
                    <ul class="sidenav-third-level collapse" id="collapseMulti2">
                      <li>
                        <a href="{{ url('/cards') }}">All</a>
                      </li>
                      <li>
                        <a href="{{ url('/cards') }}">Lost</a>
                      </li>
                      <li>
                        <a href="{{ url('/cards') }}">Police Abstracts</a>
                      </li>
                    </ul>                    
                  </li>
                  <li>
                    <a href="{{ url('/cards/create') }}">Issue</a>
                  </li>
                  <li>
                    <a href="{{ url('/cards/create') }}">Complications</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Timetables">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#timetables" data-parent="#exampleAccordion">
                  <i class="fa fa-fw fa-eye"></i>
                  <span class="nav-link-text">Timetables</span>
                </a>
                <ul class="sidenav-second-level collapse" id="timetables">
                  <li>
                    <a href="{{ url('/timetables') }}">All</a>
                  </li>
                  <li>
                    <a href="{{ url('/productview') }}">Create</a>
                  </li>
                </ul>
              </li>  
              <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Exams">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#exams" data-parent="#exampleAccordion">
                  <i class="fa fa-fw fa-eye"></i>
                  <span class="nav-link-text">Exams</span>
                </a>
                <ul class="sidenav-second-level collapse" id="exams">
                  <li>
                    <a href="{{ url('/exams') }}">All</a>
                  </li>
                  <li>
                    <a href="{{ url('/productview') }}">Create</a>
                  </li>
                  <li>
                    <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#ExamApplication">Applications</a>
                    <ul class="sidenav-third-level collapse" id="ExamApplication">
                      <li>
                        <a href="#">Resits</a>
                      </li>
                      <li>
                        <a href="#">Special Exams</a>
                      </li>
                    </ul>                    
                  </li>
                </ul>
              </li>                          
              <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
                <a class="nav-link" href="charts.html">
                  <i class="fa fa-fw fa-area-chart"></i>
                  <span class="nav-link-text">Charts</span>
                </a>
              </li>
              <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
                <a class="nav-link" href="#">
                  <i class="fa fa-fw fa-link"></i>
                  <span class="nav-link-text">Link</span>
                </a>
              </li>
            </ul>
            <ul class="navbar-nav sidenav-toggler">
              <li class="nav-item">
                <a class="nav-link text-center" id="sidenavToggler">
                  <i class="fa fa-fw fa-angle-left"></i>
                </a>
              </li>
            </ul>
            <ul class="navbar-nav ml-auto">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-fw fa-envelope"></i>
                  <span class="d-lg-none">Messages
                    <span class="badge badge-pill badge-primary">{{count($messages)}} New</span>
                  </span>
                  <span class="indicator text-primary d-none d-lg-block">
                    <i class="fa fa-fw fa-circle"></i>
                  </span>
                </a>
                <div class="dropdown-menu" aria-labelledby="messagesDropdown">
                  <h6 class="dropdown-header">{{count($messages)}} New Messages:</h6>
                  <div class="dropdown-divider"></div>
                  @forelse($messages->chunk(4) as $chunk)
                    @foreach($chunk as $message)
                      <a class="dropdown-item" href="#">
                          <strong>{{$message->name}}</strong>
                          <span class="small float-right text-muted">{{$message->created_at}}</span>
                          <div class="dropdown-message small">{!!$message->message_body!!}</div>
                        </a>
                      <div class="dropdown-divider"></div>
                    @endforeach
                  @empty

                  @endforelse
                  <div></div>
                  <a class="dropdown-item small" href="{{url('/messages')}}">View all messages</a>
                </div>
              </li>
              {{--  <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-fw fa-bell"></i>
                  <span class="d-lg-none">Alerts
                    <span class="badge badge-pill badge-warning">6 New</span>
                  </span>
                  <span class="indicator text-warning d-none d-lg-block">
                    <i class="fa fa-fw fa-circle"></i>
                  </span>
                </a>
                <div class="dropdown-menu" aria-labelledby="alertsDropdown">
                  <h6 class="dropdown-header">New Alerts:</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">
                    <span class="text-success">
                      <strong>
                        <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
                    </span>
                    <span class="small float-right text-muted">11:21 AM</span>
                    <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">
                    <span class="text-danger">
                      <strong>
                        <i class="fa fa-long-arrow-down fa-fw"></i>Status Update</strong>
                    </span>
                    <span class="small float-right text-muted">11:21 AM</span>
                    <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">
                    <span class="text-success">
                      <strong>
                        <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
                    </span>
                    <span class="small float-right text-muted">11:21 AM</span>
                    <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item small" href="#">View all alerts</a>
                </div>
              </li>  --}}
              <li class="nav-item">
                <form class="form-inline my-2 my-lg-0 mr-lg-2">
                  <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for...">
                    <span class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fa fa-search"></i>
                      </button>
                    </span>
                  </div>
                </form>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                  <i class="fa fa-fw fa-sign-out"></i>Logout</a>
              </li>
            </ul>
          </div>
        </nav>
        <div class="content-wrapper">

            @yield('body')

         </div>

         <!-- /.content-wrapper-->
         <footer class="sticky-footer">
          <div class="container">
              <div class="text-center">
              <small>Copyright © Your Website 2018</small>
              </div>
          </div>
         </footer>
         <!-- Scroll to Top Button-->
         <a class="scroll-to-top rounded" href="#page-top">
          <i class="fa fa-angle-up"></i>
         </a>

         <!-- Logout Modal-->
         <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
             <div class="modal-dialog" role="document">
                 <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                     <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">×</span>
                     </button>
                 </div>
                 <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                 <div class="modal-footer">
                     <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                      <a class="btn btn-primary" href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                          Logout
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                      </form>
                 </div>
                 </div>
             </div>
         </div>
 
         <!-- addhouse Modal-->
         <div class="modal fade" id="addhouse" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
             <div class="modal-dialog" role="document">
                 <div class="modal-content">
                     <form>
                         <div class="modal-header">
                             <h5 class="modal-title" id="exampleModalLabel">Add House</h5>
                             <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                             <span aria-hidden="true">×</span>
                             </button>
                         </div>
                         <div class="modal-body">
                                 <div class="form-group">
                                         <label for="exampleInputEmail1">Email address</label>
                                         <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Enter email">
                                       </div>
                                       <div class="form-group">
                                         <label for="exampleInputPassword1">Password</label>
                                         <input class="form-control" id="exampleInputPassword1" type="password" placeholder="Password">
                                       </div>
                         </div>
                         <div class="modal-footer">
                             <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                             <button class="btn btn-primary" href="login.html">Add House</button>
                         </div>
                     </form>
                 </div>
             </div>
         </div>

@endsection                    