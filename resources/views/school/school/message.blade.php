@extends('school.layout')
@section('content')

<div class="row">

<div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th> # </th>
                          <th> Subject </th>
                          <th> Message </th>
                          {{-- <th> School-Country </th>
                          <th> School_city </th> --}}
                          <th> Action </th>
                        </tr>
                      </thead>
                      <tbody>
                      	@foreach($messages as $key => $message)
                        <tr>
                          <td> {{ $key+1 }} </td>
                          <td> {{ $message->subject }} </td>
                          <td>{{ $message->meassge }}</td>
                          <td>
                          <a class="btn btn-primary" href="{{ route('school.message.show',['message' => $message->id]) }}">Show</a>                                
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