@extends('layouts.master')

@section('content')

<div class="main-panel"> 
            <div class="content" >
                <div class="container-fluid">
                  <div class="row">
                      <div class="card" style="width:50rem;padding:2rem;margin-left:25%">
                          <div class="card-header">
                          <a href="/teachers" class="btn btn-primary" style="float:right;text-align:center">Back</a>
                            <h2 class="card-title">Add a teacher</h2>
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
                        <form action="/teachers/{{$teacher->id}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                        <div class="form-group">
                        <label for="">Name</label>
                        <input class="form-control" type="text" name="name" value="{{old('name',$teacher->name)}}"/>
                        </div>
                        <div class="form-group">
                        <label for="">Position</label>
                        <select name="position" class="form-control">
                        <option value="">Select Position</option>
                        @foreach($positions as $position)
                            <option value="{{$position->id}}"{{$position->id==$teacher->position_id ? 'selected' : '' }}
                            >{{$position->name}}</option>
                        @endforeach
                        </select>
                        </div>
                        <div class="form-group">
                        <label for="">Department</label>
                        <select name="department" class="form-control">
                        <option value="">Select Department</option>
                        @foreach($departments as $department)
                            <option value="{{$department->id}}" {{$department->id==$teacher->department_id ? 'selected' : '' }}
                            ">{{$department->name}}</option>
                        @endforeach
                        </select>
                        </div>
                        <div class="form-group">
                        <label for="">Teacher ID</label>
                        <input class="form-control" type="text" name="teacher_id" value="{{old('teacher_id',$teacher->teacher_id)}}"/>
                        </div>
                        <div class="form-group">
                        <label for="">Gender</label>
                        <select name="gender" class="form-control">
                            <option value="select">Select Gender</option>
                            <option value="male" {{$teacher->gender=='male' ? 'selected' : '' }}>Male</option>
                            <option value="female" {{$teacher->gender=='female' ? 'selected' : '' }}>Female</option>
                        </select>
                        </div>
                        <div class="form-group">
                        <label for="">Father's Name</label>
                        <input class="form-control" type="text" name="father_name" value="{{old('father_name',$teacher->father_name)}}"/>
                        </div>
                        <div class="form-group">
                        <label for="">Birthday</label>
                        <input class="form-control" type="text" placeholder="YYYY-MM-DD" name="birthday" value="{{old('birthday',$teacher->birthday)}}"/>
                        </div>
                        <div class="form-group">
                        <label for="">Phone Number</label>
                        <input class="form-control" placeholder="+95" type="text" name="phone_number" value="{{old('phone_number',$teacher->phone_number)}}"/>
                        </div>
                        <div class="form-group">
                        <label for="">Address</label>
                        <input class="form-control" type="text" name="address" value="{{old('address',$teacher->address)}}"/>
                        </div><br/>
                        <input type="file" name="teacher_image" /><br/><br/>
                        <button type="submit" class="btn btn-success">Submit</button>
                        </form>
                    </div>
                    </div>
                  </div>
                    </div>
                  </div>

@endsection