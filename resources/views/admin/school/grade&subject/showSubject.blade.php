@extends('layout')
@section('content')
<div class="row">
  @foreach($subjects as $subject)
<div class="col-md-4 grid-margin stretch-card">
  <a href="{{ route('admin.school.grade.subject.file',['school'=>$school->id,'grade'=>$grade->id,'subject'=>$subject->id]) }}">
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
              </div>
              @endforeach
            </div>
@endsection