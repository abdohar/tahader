@extends('school.layout')
@section('content')

<div class="row">
<div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  @include('messages')
                  <div class="card-body">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th> # </th>
                          <th> Teacher Name </th>
                          <th> Certificate </th>
                          <th> Email </th>
                          <th> Phone </th>
                          <th> Action </th>
                        </tr>
                      </thead>
                      <tbody>
                      	@foreach($teachers as $key => $teacher)
                        <tr>
                          <td> {{ $key+1 }} </td>
                          <td> {{ $teacher->firstname }}  {{ $teacher->fathername }} {{ $teacher->lastname }} </td>
                          <td>{{ $teacher->sertificate }}</td>
                          <td>{{ $teacher->user->email }}</td>
                          <td>{{ $teacher->phone }}</td>
                          <td>
                            <a class="btn btn-primary" href="{{ route('school.teacher.edit',['teacher' => $teacher->id]) }}">Edit</a>
                          
                           <a class="btn btn-danger"
                        onclick="return confirm('Are you sure denied Access Teacher :{{ $teacher->firstname }} ')"
                         title="{{$teacher->firstname}}"
                         href="{{ route('school.del.teacher',['teacher' => $teacher->id])}}">Delete</a>                                
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