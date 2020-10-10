@extends('school.layout')
@section('content')


<div class="row">
  <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">{{ $school->school_name }}</h4>
                    <ul class="list-ticked">
                      <li>{{ $grade->name }}</li>
                      <li>{{ $grade->note }}</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">{{ $subject->name }}</h4>
                   {{--  --}}
                    <ul class="list-ticked">
                      <li>{{ $subject->note }}</li>
                      <li>You Will Show All File in this Subject</li>
                      
                    </ul>
                  </div>
                </div>
              </div>
            </div>
<div class="row">
<div class="col-12 grid-margin">
                <div class="card">
                  @include('messages')
                  <div class="card-body">
                    <h4 class="card-title">Add Teacher To Grade</h4>
                    <form class="form-sample"action="{{ route('school.store.teacher.subject',['school'=>$school->id,'grade' => $grade->id,'subject' => $subject->id]) }}" method="POST" enctype="multipart/form-data">
                  {{csrf_field()}}
                     {{--  <p class="card-description"> Grade info </p> --}}
                    <div class="row">
                      <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Select Teacher</label>
                            <div class="col-sm-9">
                              <select name="teacher_id" class="form-control" name="school_track">
                                @foreach($teachers as $teacher)
                                <option value="{{ $teacher->id }}">{{ $teacher->firstname }} {{ $teacher->fathername }} {{ $teacher->lastname }}</option>
                                @endforeach
                              </select>
                            </div>
                          </div>
                        </div>
                    </div>
                      <button type="submit" class="btn btn-success mr-2">Submit</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
@endsection