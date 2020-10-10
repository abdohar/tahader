@extends('school.layout')
@section('content')

<div class="row">
<div class="col-md-12 grid-margin stretch-card">
                <div class="card">

                  <div class="card-body" style="padding: 15px;text-align: center;">
                    <h4 class="card-title" style="margin: 0; line-height: 28px;">To Access File Please Register in google Drive With Your Email : <br><span style="font-size: 18px;">{{ $user->email }}</span></h4>
                  </div>
                </div>
              </div>
          </div>
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
              <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Actions</h4>
                    <ul class="list-ticked">
                     <a href="{{ route('school.add.teacher.subject',['school'=>$school->id,'grade' => $grade->id,'subject' => $subject->id]) }}">
                            <button type="button" class="btn btn-outline-info">
                            Add Teacher To This Subject
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
                    <h4 class="card-title">Teacher Access To This File Subject</h4>
                    <ul class="list-ticked">
                      @foreach($teachersubjects as $teacher)
                      <div class="row" style="margin-top: 2px">
                        <div class="col-lg-3">
                      <li>{{ $teacher->firstname }} {{ $teacher->lastname }}</li>
                    </div>
                     <div class="col-lg-3">
                     <a class="btn btn-danger"
                        onclick="return confirm('Are you sure denied Access Teacher :{{ $teacher->firstname }} ')"
                         title="{{$teacher->firstname}}"
                         href="{{ route('school.del.teacher.subject',['school' => $school->id,'grade'=>$grade->id,'teacher' => $teacher->id,'subject' => $subject->id])}}">Access denied</a>
                     </div>
                      </div>
                      @endforeach    
                    </ul>
                  </div>
                </div>
              </div>
            </div>
<div class="row">

<div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th> # </th>
                          <th> File-Name </th>
                          <th> File-Path </th>
                          {{-- <th> School-Country </th>
                          <th> School_city </th> --}}
                          <th> Action </th>
                        </tr>
                      </thead>
                      <tbody>
                      	@foreach($files as $key => $file)
                        <tr>
                          <td> {{ $key+1 }} </td>
                          <td> {{ $file->name }} </td>
                          <td><a href="{{ $file->drive_url }}"  target="_blank">Go to Subject in Drive</a></td>
                          <td>                                
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

</div>

@endsection