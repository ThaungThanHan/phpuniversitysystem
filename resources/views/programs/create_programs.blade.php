@extends('layouts.master')

@section('content')

<div class="main-panel"> 
            <div class="content" >
                <div class="container-fluid">
                  <div class="row">
                      <div class="card" style="width:50rem;padding:2rem;margin-left:25%">
                          <div class="card-header">
                          <a href="/programs/create" class="btn btn-primary" style="float:right;text-align:center">Back</a>
                            <h2 class="card-title">Add a program</h2>
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
                        <form action="/programs" method="POST" enctype="multipart/form-data">
                            @csrf
                        <div class="form-group">
                        <label for="">Title</label>
                        <input class="form-control" type="text" name="title" value="{{old('title')}}"/>
                        </div>
                        <div class="form-group">
                        <label for="">Program Type</label>
                        <input class="form-control"  placeholder="Exchange Program" type="text" name="program_type" value="{{old('program_type')}}"/>
                        </div>
                        <div class="form-group">
                        <label for="">Host Country</label>
                        <input class="form-control" type="text"  placeholder="United States"  name="host_country" value="{{old('host_country')}}"/>
                        </div>
                        <div class="form-group">
                        <label for="">Administrated By</label>
                        <input class="form-control" type="text"  name="admin" value="{{old('admin')}}"/>
                        </div>
                        <div class="form-group">
                        <label for="">Application Website</label>
                        <input class="form-control" type="text"   name="website" value="{{old('website')}}"/>
                        </div>
                        <div class="form-group">
                        <label for="">Eligible Country</label>
                        <input class="form-control" type="text" name="eligible_country" placeholder="ASEAN Countries" value="{{old('eligible_country')}}"/>
                        </div>
                        <div class="form-group">
                        <label for="">Duration</label>
                        <input class="form-control" placeholder="e.g. 4 months"type="text" name="duration" value="{{old('duration')}}"/>
                        </div>
                        <div class="form-group">
                        <label for="">Description</label>
                        <textarea class="form-control" type="text" name="description" value="{{old('description')}}"></textarea>
                        </div>
                        <div class="form-group">
                        <label for="">Eligibility</label>
                        <textarea class="form-control" type="text" name="eligibilities" value="{{old('eligibilities')}}"></textarea>
                        </div>
                        <div class="form-group">
                        <label for="">Benefits</label>
                        <textarea class="form-control" type="text" name="benefits" value="{{old('benefits')}}"></textarea>
                        </div>
                        <div class="form-group">
                        <label for="">Deadline</label>
                        <input class="form-control" type="text"  placeholder="YYYY-MM-DD 00:00:00"  name="deadline" value="{{old('deadline')}}"/>
                        </div>
                        <div class="form-group">
                        <label for="">Program Start Date</label>
                        <input class="form-control" type="text" placeholder="YYYY-MM-DD 00:00:00" name="start_date" value="{{old('start_date')}}"/>
                        </div>
                        <div class="form-group">
                        <label for="">Program End Date</label>
                        <input class="form-control" placeholder="YYYY-MM-DD 00:00:00" type="text" name="end_date" value="{{old('end_date')}}"/>
                        </div>
                        <input type="file" name="program_image" /><br/><br/>
                        <button type="submit" class="btn btn-success">Submit</button>
                        </form>
                    </div>
                    </div>
                  </div>
                    </div>
                  </div>

@endsection