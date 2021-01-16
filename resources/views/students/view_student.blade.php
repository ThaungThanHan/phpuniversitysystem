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

                <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                        <img style="width:30rem;height:50rem" src="{{url('/images/'.$student->student_image)}}" />
                        </div>
                        <div class="col">
                        <div class="col-sm-6">
                            <div class="card" style="width:100%;height:100%">
                            <div class="card-body">
                                <h5 class="card-title">Special title treatment</h5>
                                
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div></div>
                  </div>
                    </div>
                  </div>

@endsection