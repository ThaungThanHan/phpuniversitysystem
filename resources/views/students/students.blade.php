@extends('layouts.master')

@section('content')

<div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
              <div class="container-fluid">
                <div class="navbar-wrapper">
                  <a class="navbar-brand" href="javascript:;">Students</a>
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
            <a href="/students/create" class="btn btn-success">Add Students</a>

                <div class="container-fluid">
                  <div class="row">
                    @foreach($students as $student)
                    <div class="col-lg-3 col-md-6 col-sm-6">
                      <div class="card card-stats">
                        <div class="card-header card-header-warning card-header-icon">
                          <div class="card-icon">
                            <img style="width:8rem;height:10rem" src="{{url('/images/'.$student->student_image)}}"/>
                          </div>
                          <p class="card-category">{{$student->student_id}}</p>
                          <h3 class="card-title">{{$student->name}}<br/>
                            <small>{{$student->academicyear->name}}</small>
                          </h3>
                        </div>
                        <div class="card-footer">
                          <div class="stats">
                            <a href="/students/{{$student->id}}" class="btn btn-primary">See more info</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    @endforeach
                    </div>
                  </div>
                    </div>
                  </div>

@endsection