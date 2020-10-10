@extends('teacher.layout')
@section('content')


<div class="row">
	<div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">School : {{ $school->school_name }}</h4>
                    <ul class="list-ticked">
                      <li>Grade : {{ $grade->name }}</li>
                      <li>{{ $grade->note }}</li>
                      
                    </ul>
                  </div>
                </div>
              </div>
<div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Subject : {{ $subject->name }}</h4>
                   {{--  --}}
                    <ul class="list-ticked">
                      <li>{{ $subject->note }}</li>
                      <li>You Will Show All File in this Subject</li>
                      
                    </ul>
                  </div>
                </div>
              </div>
               <div class="col-md-12 grid-margin stretch-card">
                <div class="card">

                  <div class="card-body" style="padding: 15px;text-align: center;">
                    <h4 class="card-title" style="margin: 0;">File in This Subject {{ $subject->name }}</h4>
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