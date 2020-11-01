@extends('teacher.layout')
@section('content')


<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">School : {{ $teacher->school->school_name }}</h4>
                    <ul class="list-ticked">
                      <li>This is All Grades you can Access it</li>
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
  @foreach($teachergrades as $grade)
<div class="col-md-4 grid-margin stretch-card">
  <a href="{{ route('teacher.grade.subject',['school'=>$school_id,'grade'=>$grade->id]) }}">
                <button class="btn btn-outline-success">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">{{ $grade->name }}</h4>
                   {{--  --}}
                    <ul class="list-ticked">
                      <li>{{ $grade->note }}</li>
                      <li>enter to this grade to show subject</li>
                    </ul>
                  </div>
                </div>
              </button>
            </a>
              </div>
              @endforeach
            </div>


@endsection