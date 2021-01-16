@extends('layouts.master')

@section('content')

<div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
              <div class="container-fluid">
                <div class="navbar-wrapper">
                  <a class="navbar-brand" href="javascript:;">{{$teacher->name}}</a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="navbar-toggler-icon icon-bar"></span>
                  <span class="navbar-toggler-icon icon-bar"></span>
                  <span class="navbar-toggler-icon icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end">
                  <form class="navbar-form">
                    <div class="input-group no-border">
                      <input type="text" value="" class="form-control" placeholder="Search...">
                      <button type="submit" class="btn btn-white btn-round btn-just-icon">
                        <i class="material-icons">search</i>
                        <div class="ripple-container"></div>
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </nav>
            <!-- navbar ends here-->
            <div class="content">
            @if (session('message'))
              <div class="alert alert-success">
                {{ session('message') }}
              </div>
              @endif

                <div class="container-fluid">
                <a href="/teachers" class="btn btn-warning" style="margin-left:1rem;">Go Back</a>
                    <div class="row">
                        <!-- <div class="col">
                        <img style="width:30rem;height:30rem" src="{{url('/images/'.$teacher->teacher_image)}}" />
                        </div> -->
                        <div class="col">
                        <div class="col-sm-6">
                            <div class="card" style="width:50rem;height:45rem">
                            <div class="card-body">  <div class="row">
                              <div class="col">
                              <img style="width:100%;height:40rem" src="{{url('/images/'.$teacher->teacher_image)}}" />
                              <a href="/teachers/{{$teacher->id}}/edit" class="btn btn-warning">Edit</a>
                              <form action="/teachers/{{$teacher->id}}" method="POST">
                              @csrf
                              @method('DELETE')
                                <button type="submit"  style="float:right;margin-top:-2.95rem"
                                class="btn btn-danger" onClick="<script>alert('Are you sure you want to delete?')</script>">Delete</button>
                              </form>
                              </div>
                              <div class="col">
                              <div class="row" style="border:1px solid black">
                                <div class="col" style="border-bottom:1px solid black;border-right:1px solid black">Name</div>
                                <div class="col" style="border-bottom:1px solid black">{{$teacher->name}}</div>
                                <div class="w-100"></div>
                                <div class="col" style="border-right:1px solid black">Position</div>
                                <div class="col">{{$teacher->position->name}}</div>
                                <div class="w-100" style="border-bottom:1px solid black"></div>
                                <div class="col" style="border-bottom:1px solid black;border-right:1px solid black">Department</div>
                                <div class="col" style="border-bottom:1px solid black">{{$teacher->department->name}}</div>
                                <div class="w-100"></div>
                                <div class="col" style="border-right:1px solid black">teacher ID</div>
                                <div class="col">{{$teacher->teacher_id}}</div>
                                <div class="w-100" style="border-bottom:1px solid black"></div>
                                <div class="col" style="border-bottom:1px solid black;border-right:1px solid black">Gender</div>
                                <div class="col" style="border-bottom:1px solid black">{{$teacher->gender}}</div>
                                <div class="w-100"></div>
                                <div class="col" style="border-bottom:1px solid black;border-right:1px solid black">Father's Name</div>
                                <div class="col" style="border-bottom:1px solid black">{{$teacher->father_name}}</div>
                                <div class="w-100"></div>
                                <div class="col" style="border-right:1px solid black">Address</div>
                                <div class="col">{{$teacher->address}}</div>
                                <div class="w-100" style="border-bottom:1px solid black"></div>
                                <div class="col" style="border-right:1px solid black;border-right:1px solid black">Contact</div>
                                <div class="col">{{$teacher->phone_number}}</div>
                                <div class="w-100" style="border-bottom:1px solid black"></div>
                                <div class="col" style="border-right:1px solid black">Birthday</div>
                                <div class="col">{{$teacher->birthday}}</div>
                                <div class="w-100" style="border-bottom:1px solid black"></div>
                                <div class="col" style="border-right:1px solid black;border-right:1px solid black">Insert More</div>
                                <div class="col">Insert here</div>
                                <div class="w-100" style="border-bottom:1px solid black"></div>
                                <div class="col" style="border-right:1px solid black;border-right:1px solid black">Insert more</div>
                                <div class="col">Insert Here<div>
                              </div>
                              </div>
                            </div>
                             </div>
                        </div>
                    </div></div>
                  </div>
                    </div>
                  </div>

@endsection