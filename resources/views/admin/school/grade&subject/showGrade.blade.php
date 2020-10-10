@extends('layout')
@section('content')
<div class="row">
  @foreach($grades as $grade)
<div class="col-md-4 grid-margin stretch-card">
  <a href="{{ route('admin.school.grade.subject',['school'=>$school->id,'grade'=>$grade->id]) }}">
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