@extends('school.layout')
@section('content')
<div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-md-12 d-flex align-items-stretch grid-margin">
                <div class="row flex-grow">
                  <div class="col-12">
                    <div class="card">
                                  @include('messages')
                      <div class="card-body">
                        <h4 class="card-title">Contact Form</h4>
                        {{-- <p class="card-description"> Basic form layout </p> --}}
                        <form class="forms-sample" action="{{ route('school.message.store') }}" method="POST" enctype="multipart/form-data">
                  {{csrf_field()}}
                          <div class="form-group">
                            <label for="exampleInputEmail1">Subject</label>
                            <input type="text" name="subject" class="form-control" id="exampleInputSubject1" placeholder="Enter Subject">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Message</label>
                            <textarea placeholder="Enter Message" class="form-control" name="message" id="exampleTextarea1" rows="8"></textarea>
                          </div>
                          <button type="submit" class="btn btn-success mr-2">Submit</button>
      
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection