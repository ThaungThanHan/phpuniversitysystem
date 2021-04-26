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
            <a href="/attendance/rollcall" class="btn btn-success" style="margin-left:1rem;">Go Back</a>
            <div class="container-fluid">
                  <div class="row"> <!-- Copy these for table style -->
                  <style type="text/css">   
                    .tg  {border-collapse:collapse;border-spacing:0;margin:0 auto;}
                    .tg td{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
                    overflow:hidden;padding:3rem 10rem;word-break:normal;}
                    .tg th{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
                    font-weight:normal;overflow:hidden;padding:40px 10px;word-break:normal;}
                    .tg .tg-baqh{text-align:center;vertical-align:top}
                    .tg .tg-0lax{text-align:center;vertical-align:top}
                </style>
                <form method="POST" action="/attendance">
                @csrf

                <table class="tg">
                <thead>
                <tr>
                    <th class="tg-baqh">Student ID</th>
                    <th class="tg-0lax">Student Name</th>
                    <th class="tg-0lax">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($students as $student)
                <tr>
                    <td class="tg-baqh">{{$student->student_id}}</td>
                    <td class="tg-0lax">{{$student->name}}
                    </td>
                    <td class="tg-0lax">
                    <input type="hidden" value="{{$student->id}}" name="studentID[]"/>
                      <label class="check_green" style="font-weight:bold;color:grey;margin-right:5rem">Present
                      <input class="check_green_label" type="checkbox" value="0" name="status[]"/>
                      <div class="box"></div>
                    </label>

                    <label style="font-weight:bold;color:grey" class="check_red">Absent
                      <input class="check_red_label" type="checkbox" value="1" name="status[]"/>
                      <div class="box_red"></div>
                    </label>

                    </td>
                </tr>
                @endforeach
                </tbody>
                </table>
                <button type="submit" class="btn btn-success">Submit roll sheet</button>
                </form>
                    </div>
                  </div>
                  </div>
                    </div>
                  </div>

@endsection