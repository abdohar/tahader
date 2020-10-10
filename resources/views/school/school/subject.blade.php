@extends('school.layout')
@section('content')

<div class="row">
  <div class="col-md-6 grid-margin stretch-card">
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
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">

                  <div class="card-body">
                    <h4 class="card-title">Actions</h4>
                    <ul class="list-ticked">
                      <a href="{{ route('school.add.teacher.grade',['school' => $school->id,'grade'=>$grade->id]) }}">
                            <button type="button" class="btn btn-outline-info">
                            Add Teacher To This Grade
                             </button>
                           </a>
                       
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                      @include('messages')
                  <div class="card-body">
                    <h4 class="card-title">Teacher Access To This File Grade</h4>
                    <ul class="list-ticked">
                      @foreach($teachergrades as $teacher)
                      <div class="row" style="margin-top: 2px">
                        <div class="col-lg-3">
                      <li>{{ $teacher->firstname }} {{ $teacher->lastname }}</li>
                    </div>
                     <div class="col-lg-3">
                     <a class="btn btn-danger"
                        onclick="return confirm('Are you sure denied Access Teacher :{{ $teacher->firstname }} ')"
                         title="{{$teacher->firstname}}"
                         href="{{ route('school.del.teacher.grade',['school' => $school->id,'grade'=>$grade->id,'teacher' => $teacher->id])}}">Access denied</a>
                     </div>
                      </div>
                      @endforeach    
                    </ul>
                  </div>
                </div>
              </div>
            </div>


<div class="row">
  @foreach($subjects as $subject)
<div class="col-md-4 grid-margin stretch-card">
  <a href="{{ route('school.grade.subject.file',['school'=>$school->id,'grade'=>$grade->id,'subject'=>$subject->id]) }}">
                <button class="btn btn-outline-success">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">{{ $subject->name }}</h4>
                   {{--  --}}
                    <ul class="list-ticked">
                      <li>{{ $subject->note }}</li>
                      <li>Click into subject to show All Tahader</li>
                      {{-- <li>Integer molestie lorem at massa</li>
                      <li>Facilisis in pretium nisl aliquet</li>
                      <li>Nulla volutpat aliquam velit&gt;</li> --}}
                    </ul>
                  </div>
                </div>
              </button>
            </a>
              </div>
              @endforeach
            </div>
@endsection