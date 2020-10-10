@extends('layout')
@section('content')

<div class="col-12 grid-margin">
                <div class="card">
                  @include('messages')
                  <div class="card-body">
                    <h4 class="card-title">Add New School</h4>
                    <form class="form-sample"action="{{ route('admin.school.update',['school' => $school->id]) }}" method="POST" enctype="multipart/form-data">
                  {{csrf_field()}}
                      <p class="card-description"> Personal info </p>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Manager Name</label>
                            <div class="col-sm-9">
                              <input type="text" value="{{ $school->manager_name }}" name="manager_name" class="form-control">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Manager Email</label>
                            <div class="col-sm-9">
                              <input type="email" value="{{ $school->manager_email }}" name="manager_email" class="form-control">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                      	<div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Manager Phone</label>
                            <div class="col-sm-9">
                              <input type="text" value="{{ $school->manager_phone }}" name="manager_phone" class="form-control">
                            </div>
                          </div>
                        </div>
                      </div> 
                      
                      <p class="card-description"> School info </p>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">School Name</label>
                            <div class="col-sm-9">
                              <input type="text" value="{{ $school->school_name }}" name="school_name" class="form-control">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">School Open-Year</label>
                            <div class="col-sm-9">
                              <input type="date" value="{{ $school->school_open_year }}" name="school_open_year" class="form-control">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">School Phone</label>
                            <div class="col-sm-9">
                              <input type="text" value="{{ $school->school_phone }}" name="school_phone" class="form-control">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">School Email</label>
                            <div class="col-sm-9">
                              <input type="email" value="{{ $school->school_email }}" name="school_email" class="form-control">
                            </div>
                          </div>
                      </div>
                    </div>
                    <div class="row">    
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">School WebSite</label>
                          <div class="col-sm-9">
                            <input type="text" value="{{ $school->school_website }}" name="school_website" class="form-control">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">   Track</label>
                            <div class="col-sm-9">
                              <select name="school_track" class="form-control" name="school_track">
                                @foreach($tracks as $track)
                                @if($school->school_track == $track->track)
                                 <option selected value="{{ $track->track }}">{{ $track->track }}</option>
                                @else
                                <option value="{{ $track->track }}">{{ $track->track }}</option>
                                @endif
                                @endforeach
                              </select>
                            </div>
                          </div>
                        </div>
                    </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Country</label>
                            <div class="col-sm-9">
                              <select class="form-control" name="school_country">
                                <option value="{{ $school->school_country }}" selected="">Saudi Arabia</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">   City</label>
                            <div class="col-sm-9">
                              <select class="form-control" name="school_city">
                                @foreach($cities as $city)
                                @if($school->school_city == $city->city)
                                <option selected value="{{ $city->city }}">{{ $city->city }}</option>
                                @else
                                <option value="{{ $city->city }}">{{ $city->city }}</option>
                                @endif
                               @endforeach
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                       <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                           <label class="col-sm-3 col-form-label" for="textarea">School Description</label>
                            <div class="col-sm-9">
                              <textarea class="form-control" name="school_description" id="exampleTextarea1" rows="5">{{ $school->school_description }}</textarea>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                           <label class="col-sm-3 col-form-label" for="textarea">School Logo</label>
                            <div class="col-sm-9">
                             
                             <img id="logo" width="180"  src="{{ $school->school_logo }}" alt="your image"/ style="margin-top: 2px;" onclick="document.getElementById('schoolLogo').click()">
                             <input id="schoolLogo" name="school_logo"  value="{{ $school->school_logo }}" type='file' style="visibility:hidden;" onchange="readURLLogo(this);"  />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                           <label class="col-sm-3 col-form-label" for="textarea">School Cover</label>
                            <div class="col-sm-9">
                              
                             <img id="cover" width="180"  onclick="document.getElementById('schoolCover').click()" src="{{ $school->school_cover }}" alt="your image"/ style="margin-top: 2px;">
                                <input id="schoolCover" name="school_cover" value="{{ $school->school_cover }}" type='file' style="visibility:hidden;" onchange="readURLCover(this);"  />
                            </div>
                          </div>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-success mr-2">Submit</button>
                    </form>
                  </div>
                </div>
              </div>


<script type="text/javascript">
   function readURLLogo(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#logo')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
         function readURLCover(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#cover')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
</script>

@endsection