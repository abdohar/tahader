@extends('layout')
@section('content')

            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">

                  <div class="card-body" style="padding: 15px;text-align: center;">
                    <h4 class="card-title" style="margin: 0; line-height: 28px;"> Message Send From school <span style="font-size: 18px"> {{ $message->school->school_name }}</span> 
                    </h4>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 d-flex align-items-stretch grid-margin">
                <div class="row flex-grow">
                  <div class="col-12">
                    <div class="card">
                        @include('messages')
                      <div class="card-body">
                        <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-6">
                        <h4 class="card-title">Message</h4>
                      </div>
                      <div class="col-sm-6 col-md-6 col-lg-6">
                       <button id="myBtn" type="button" class="btn btn-secondary btn-fw">
                            <i class="mdi mdi-file-document"></i>Replay</button>
                        
                      </div>
                                                <div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p class="card-description info"> Replay  </p>
 <section class="contact-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        {{-- <h2 class="contact-title">Get in Touch</h2> --}}
                        
                    </div>
                    <div class="col-lg-12">
                        <form class="form-contact contact_form" action="{{ route('admin.school.message.replay',['message' => $message->id]) }}" method="POST">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Enter Message"></textarea>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="button button-contactForm boxed-btn">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
  </div>

</div>
                       </div>
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
                    </h4>
                        @if(count($replays) == 0)
                    <h4 class="card-title" style="text-align:center; margin-top: 10px;
                    font-size: 20px">Not Replay yet</h4> 
                    @endif
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
                       <a class="btn btn-danger"
                        onclick="return confirm('Are you sure Delete Replay to :{{ $message->school->school_name }} ')"
                         href="{{ route('admin.school.message.delete',['replay' => $replay->id])}}">Delete</a>   
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
  {{-- @endif --}}
  <script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
@endsection