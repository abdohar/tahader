@extends('teacher.layout')
@section('content')

<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">School : {{ $teacher->school->school_name }}</h4>
                    <ul class="list-ticked">
                      <li>This is All Subjects you can Access it</li>
                      {{-- <li>{{ $grade->note }}</li> --}} 
                    </ul>
                  </div>
                </div>
              </div>
           {{--    <div class="col-md-12 grid-margin stretch-card">
                <div class="card">

                  <div class="card-body" style="padding: 15px;text-align: center;">
                    <h4 class="card-title" style="margin: 0;">Subject in This Grade {{ $grade->name }}</h4>
                  </div>
                </div>
              </div> --}}
            </div>


<div class="row">
  @foreach($teachersubjects as $subject)
<div class="col-md-4 grid-margin stretch-card">
  <a href="{{ route('teacher.grade.subject.file',['school'=>$subject->school_id,'grade'=>$subject->grade_id,'subject'=>$subject->id]) }}">
                <button class="btn btn-outline-success">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">{{ $subject->name }}</h4>
                   {{--  --}}
                    <ul class="list-ticked">
                      <li>Grade : {{ $subject->grade_name }}</li>
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