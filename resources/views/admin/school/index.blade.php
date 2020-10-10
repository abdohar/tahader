@extends('layout')
@section('content')

<div class="row">

<div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th> # </th>
                          <th> Manager-Name </th>
                          <th> School-Name </th>
                          <th> School-Country </th>
                          <th> School_city </th>
                          <th> Action </th>
                        </tr>
                      </thead>
                      <tbody>
                      	@foreach($schools as $key => $school)
                        <tr>
                          <td> {{ $key+1 }} </td>
                          <td> {{ $school->manager_name }} </td>
                          <td> {{ $school->school_name }} </td>
                          <td> {{ $school->school_country }} </td>
                          <td> {{ $school->school_city }} </td>
                          <td>    
                            <a href="{{ route('admin.school.show',['school' => $school->id]) }}">
                            <button type="button" class="btn btn-icons btn-rounded btn-primary">
                            Show
                             </button>
                           </a>
                          	<a href="{{ route('admin.school.edit',['school' => $school->id]) }}"> 
                            <button type="button" class="btn btn-icons btn-rounded btn-primary">
                            Edit
                          </button></a>
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