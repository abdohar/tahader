@extends('school.layout')
@section('content')

<div class="row">
  @foreach($schoolgrades as $grade)
<div class="col-md-4 grid-margin stretch-card">
  <a href="{{ route('school.grade.subject',['school'=>$school->id,'grade'=>$grade->grade->id]) }}">
                <button class="btn btn-outline-success">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">{{ $grade->grade->name }}</h4>
                   {{--  --}}
                    <ul class="list-ticked">
                      <li>{{ $grade->grade->note }}</li>
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