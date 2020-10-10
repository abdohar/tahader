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
                          <th> Sender Name </th>
                          <th> Sender Email </th>
                          <th> Subject </th>
                          {{-- <th> School_city </th> --}}
                          <th> Action </th>
                        </tr>
                      </thead>
                      <tbody>
                      	@foreach($contacts as $key => $contact)
                        <tr>
                          <td> {{ $key+1 }} </td>
                          <td> {{ $contact->sender_name }} </td>
                          <td> {{ $contact->sender_email }} </td>
                          <td> {{ $contact->subject }} </td>
                          {{-- <td> {{ $school->school_city }} </td> --}}
                          <td>    
                            <a class="btn btn-primary" href="{{ route('admin.contact.show',['contact' => $contact->id]) }}">
                            Show
                           </a>
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