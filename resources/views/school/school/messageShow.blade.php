@extends('school.layout')
@section('content')

            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">

                  <div class="card-body" style="padding: 15px;text-align: center;">
                    <h4 class="card-title" style="margin: 0; line-height: 28px;">Yor Messages Send To Admin 
                    </h4>
                  </div>
                </div>
              </div>
              <div class="col-md-12 d-flex align-items-stretch grid-margin">
                <div class="row flex-grow">
                  <div class="col-12">
                    <div class="card">
                        @include('messages')
                      <div class="card-body">
                        <h4 class="card-title">Message</h4>
                       
                          <div class="form-group">
                            <label>Subject : {{ $message->subject }}</label>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Message</label>
                            <textarea placeholder="Enter Message" class="form-control" name="message" id="exampleTextarea1" disabled="" rows="8">
                              {{ $message->meassge }}
                            </textarea>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
               <div class="col-md-12 grid-margin stretch-card">
                <div class="card">

                  <div class="card-body" style="padding: 15px;text-align: center;">
                      <h4 class="card-title" style="margin: 0; line-height: 28px;">Yor Replay At Message 
                       @if(count($replays) == 0)
                      <h4 class="card-title" style="text-align:center; margin-top: 10px;
                      font-size: 20px">Not Replay yet</h4> 
                      @endif
                    </h4>
                  </div>
                </div>
              </div>
            </div>

            @foreach($replays as $key => $replay)
            <div class="row">
              <div class="col-md-12 d-flex align-items-stretch grid-margin">
                <div class="row flex-grow">
                  <div class="col-12">
                    <div class="card">
                       
                      <div class="card-body">
                        <div class="row">
                          <div class="col-lg-6">
                        <h4 class="card-title">Replay id : {{ $key+1 }}</h4>
                       </div>
                       <div class="col-lg-6">
                      {{--  <a class="btn btn-danger"
                        onclick="return confirm('Are you sure Delete Replay to :{{ $message->school->school_name }} ')"
                         href="{{ route('admin.school.message.delete',['replay' => $replay->id])}}">Delete</a>    --}}
                         </div>
                       </div>
                          <div class="form-group">
                            <label>Subject : {{ $replay->subject }}</label>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Message</label>
                            <textarea placeholder="Enter Message" class="form-control" name="message" id="exampleTextarea1" disabled="" rows="8">
                              {{ $replay->meassge }}
                            </textarea>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
  </div>
  @endforeach
         

@endsection