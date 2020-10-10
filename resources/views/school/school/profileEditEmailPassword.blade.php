@extends('school.layout')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<div class="row">
	<div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  @include('messages')
                  <div class="card-body">
                    <h4 class="card-title">Edit Email And Password</h4>
                    <form class="form-sample"action="{{ route('school.update.profile.email.password',['school' => $school->id]) }}" method="POST" enctype="multipart/form-data">
                  {{csrf_field()}}
                      <p class="card-description"> We Send Messages for This Email To verfication Email after Update Password </p>
                      <div class="row">
                      	   <div class="col-md-12">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Manager Email</label>
                            <div class="col-sm-9">
                              <input type="email" disabled="" value="{{ $school->manager_email }}" name="manager_email" class="form-control">
                            </div>
                          </div>
                        </div>
                        	<div class="col-md-12">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">School Email</label>
                            <div class="col-sm-9">
                              <input type="text" disabled="" value="{{ $school->school_email }}" name="manager_phone" class="form-control">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Old Password</label>
                            <div class="col-sm-9">
                              <input type="password" name="old_password" class="form-control">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">New Password</label>
                            <div class="col-sm-9">
                              <input id="password" onclick="myFunction()" type="password" name="new_password" class="form-control">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Confirme Password</label>
                            <div class="col-sm-9">
                              <input id="confirm_password" name="confirm_password"  type="password" class="form-control">
                              <span id='message'></span>
                            </div>
                          </div>
                        </div>
                      </div> 
                      <button type="submit" id="submit"  class="btn btn-success mr-2">Submit</button>
                      </form>
                      </div>
                  </div>
              </div>
</div>

<script type="text/javascript">
function myFunction(){
		 document.getElementById("submit").setAttribute("disabled", "");
	}
	$('#password, #confirm_password').on('keyup', function () {
  if ($('#password').val() == $('#confirm_password').val()) {
    $('#message').html('Matching').css('color', 'green');
    document.getElementById("submit").removeAttribute("disabled");
  } else {
    $('#message').html('Not Matching').css('color', 'red');
 document.getElementById("submit").setAttribute("disabled", "");
}
});
</script>

@endsection