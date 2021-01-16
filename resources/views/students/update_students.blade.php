@extends('layouts.master')

@section('content')

<div class="main-panel"> 
            <div class="content" >
                <div class="container-fluid">
                  <div class="row">
                      <div class="card" style="width:50rem;padding:2rem;margin-left:25%">
                          <div class="card-header">
                          <a href="/students/{{$student->id}}" class="btn btn-primary" style="float:right;text-align:center">Back</a>
                            <h2 class="card-title">Edit a student</h2>
                          </div>
                          @if ($errors->any())
                          <div class="alert alert-danger">
                              <ul>
                                  @foreach ($errors->all() as $error)
                                      <li>{{ $error }}</li>
                                  @endforeach
                              </ul>
                          </div>
                      ` @endif
                        <form action="/students/{{$student->id}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                        <div class="form-group">
                        <label for="">Name</label>
                        <input class="form-control" type="text" name="name" value="{{old('name',$student->name)}}"/>
                        </div>
                        <div class="form-group">
                        <label for="">Academic Year</label>
                        <select name="year" class="form-control" >
                        <option value="" selected>{{$student->academicyear->name}}</option>
                        @foreach($academicyears as $year)
                            <option value="{{$year->id}}" {{$year->id==$student->academicyear_id ? 'selected' : ''}}
                            >{{$year->name}}</option>
                        @endforeach
                        </select>
                        </div>
                        <div class="form-group">
                        <label for="">Department</label>
                        <select name="department" class="form-control">
                        <option value="">Select Department</option>
                        @foreach($departments as $department)
                            <option value="{{$department->id}}" {{$department->id==$student->department_id ? 'selected' : ''}}>
                            {{$department->name}}</option>
                        @endforeach
                        </select>
                        </div>
                        <div class="form-group">
                        <label for="">Student ID</label>
                        <input class="form-control" type="text" name="student_id" value="{{old('student_id',$student->student_id)}}"/>
                        </div>
                        <div class="form-group">
                        <label for="">Gender</label>
                        <select name="gender" class="form-control">
                            <option value="select" selected>{{$student->gender}}</option>
                            <option value="Male" {{$student->gender=='male' ? 'selected' : '' }}>Male</option>
                            <option value="Female" {{$student->gender=='female' ? 'selected' : '' }}>Female</option>
                        </select>
                        </div>
                        <div class="form-group">
                        <label for="">Father's Name</label>
                        <input class="form-control" type="text" name="father_name" value="{{old('father_name',$student->father_name)}}"/>
                        </div>
                        <div class="form-group">
                        <label for="">Birthday</label>
                        <input class="form-control" type="text" placeholder="YYYY-MM-DD" name="birthday" value="{{old('birthday',$student->birthday)}}"/>
                        </div>
                        <div class="form-group">
                        <label for="">Phone Number</label>
                        <input class="form-control" placeholder="+95" type="text" name="phone_number" value="{{old('phone_number',$student->phone_number)}}"/>
                        </div>
                        <div class="form-group">
                        <label for="">Address</label>
                        <input class="form-control" type="text" name="address" value="{{old('address',$student->address)}}"/>
                        </div><br/>
                        <input type="file" name="student_image" /><br/><br/>
                        <button type="submit" class="btn btn-success">Submit</button>
                        </form>
                    </div>
                    </div>
                  </div>
                    </div>
                  </div>

@endsection