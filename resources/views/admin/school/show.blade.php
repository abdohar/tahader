@extends('layout')
@section('content')

<div class="col-12 grid-margin">
                <div class="card">
                  @include('messages')
                  <div class="card-body">
                    <div class="row">
                    <div class="col-md-6">
                    <h4 class="card-title">School {{ $school->school_name }} All Info.</h4>
                  </div>
                  <div class="col-md-6">
                    <a href="{{ route('admin.school.create.grade.sub',['school' => $school->id]) }}"> <button type="button" class="btn btn-secondary btn-fw">
                            <i class="mdi mdi-file-document"></i>Add Grade & Subject</button>
                          </a>
                  </div>
                </div>
                      <p class="card-description info"> Personal info </p>
                      <hr>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Manager Name : </label>
                            <div class="col-sm-8">
                              <label class="col-form-label">{{ $school->manager_name }}</label>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Manager Email : </label>
                            <div class="col-sm-8">
                              <label class="col-form-label">{{ $school->manager_email }}</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                      	<div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Manager Phone : </label>
                            <div class="col-sm-8">
                              <label class="col-form-label">{{ $school->manager_phone }}</label>
                            </div>
                          </div>
                        </div>
                      </div> 
                      
                      <p class="card-description info"> School info  </p>
                      <hr>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-4 col-form-label">School Name : </label>
                            <div class="col-sm-8">
                              <label class="col-form-label">{{ $school->school_name }}</label>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-4 col-form-label">School Open-Year : </label>
                            <div class="col-sm-8">
                             <label class="col-form-label">{{ $school->school_open_year }}</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-4 col-form-label">School Phone : </label>
                            <div class="col-sm-8">
                              <label class="col-form-label">{{ $school->school_phone }}</label>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-4 col-form-label">School Email : </label>
                            <div class="col-sm-8">
                             <label class="col-form-label">{{ $school->school_email }}</label>
                            </div>
                          </div>
                      </div>
                    </div>
                    <div class="row">    
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">School WebSite : </label>
                          <div class="col-sm-8">
                            <label class="col-form-label">{{ $school->school_website }}</label>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-4 col-form-label">   Track : </label>
                            <div class="col-sm-8">
                              {{ $school->school_track }}
                            </div>
                          </div>
                        </div>
                    </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Country : </label>
                            <div class="col-sm-8">
                             <label class="col-form-label">{{ $school->school_country }}</label>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-4 col-form-label">   City : </label>
                            <div class="col-sm-8">
                             <label class="col-form-label">{{ $school->school_city }}</label>
                            </div>
                          </div>
                        </div>
                      </div>
                       <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                           <label class="col-sm-4 col-form-label" for="textarea">School Description : </label>
                            <div class="col-sm-8">
                              <textarea disabled class="form-control" name="school_description" id="exampleTextarea1" rows="5">{{ $school->school_description }}</textarea>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                           <label class="col-sm-4 col-form-label" for="textarea">School Logo : </label>
                            <div class="col-sm-8">
                             
                             <img id="logo" width="180"  src="{{ $school->school_logo }}" alt="your image"/ style="margin-top: 2px;" onclick="document.getElementById('schoolLogo').click()">
                             {{-- <input id="schoolLogo" name="school_logo"  value="{{ $school->school_logo }}" type='file' style="visibility:hidden;" onchange="readURLLogo(this);"  /> --}}
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                           <label class="col-sm-4 col-form-label" for="textarea">School Cover : </label>
                            <div class="col-sm-8">
                              
                             <img id="cover" width="180"  onclick="document.getElementById('schoolCover').click()" src="{{ $school->school_cover }}" alt="your image"/ style="margin-top: 2px;">
                               {{--  <input id="schoolCover" name="school_cover" value="{{ $school->school_cover }}" type='file' style="visibility:hidden;" onchange="readURLCover(this);"  /> --}}
                            </div>
                          </div>
                        </div>
                      </div>
                      {{-- <button type="submit" class="btn btn-success mr-2">Submit</button> --}}
                    {{-- </form> --}}
                  </div>
                </div>
              </div>


{{-- <script type="text/javascript">
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
</script> --}}

@endsection