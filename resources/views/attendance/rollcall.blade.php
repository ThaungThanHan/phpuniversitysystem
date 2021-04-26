@extends('layouts.master')

@section('content')

<div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
              <div class="container-fluid">
                <div class="navbar-wrapper">
                  <a class="navbar-brand" href="javascript:;">Choose roll sheet</a>
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
            <a href="/attendance" class="btn btn-warning" style="margin-left:1rem;">Back</a>
            <div class="container-fluid">
            <div class="row">
            <div class="col-md-6" style="margin:0 auto;">
            <div class="card">
            <div class="card-header">
                <h2 class="card-title" style="text-align:center">Choose class</h2>
            </div>
            <div class="card-body">
                <form method="GET" action='/attendance/rollcall/rollsheet'>
                <div clas="form" style="display:flex;justify-content:space-between;align-items:center">
                <div class="form-group">
                        <label for="">Choose Department</label>
                        <select name="department" style="width:10rem;" class="form-control">
                            <option value="select" selected>Select Department</option>
                            @foreach($departments as $department)
                                <option value="{{$department->id}}">{{$department->name}}</option>
                            @endforeach
                        </select>
                        </div>
                    <div class="form-group">
                    <label for="">Choose Academic Year</label>
                    <select name="year" style="width:10rem;" class="form-control">
                    <option value="select" selected>Select year</option>
                        @foreach($years as $year)
                             <option value="{{$year->id}}">{{$year->name}}</option>
                        @endforeach
                     </select>
                    </div>
                    <button class="btn btn-success" style="width:10rem;height:4rem" type="submit">Choose</button>
                    </div>
                </form>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>

@endsection