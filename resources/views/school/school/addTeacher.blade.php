@extends('school.layout')
@section('content')

<div class="col-12 grid-margin">
                <div class="card">
                  @include('messages')
                  <div class="card-body">
                    <h4 class="card-title">Add New Teacher</h4>
                    <form class="form-sample"action="{{ route('school.store.teacher') }}" method="POST" enctype="multipart/form-data">
                  {{csrf_field()}}
                      <p class="card-description"> Personal info </p>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">First Name</label>
                            <div class="col-sm-9">
                              <input type="text" name="first_name" class="form-control">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Father Name</label>
                            <div class="col-sm-9">
                              <input type="text" name="father_name" class="form-control">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Last Name</label>
                            <div class="col-sm-9">
                              <input type="text" name="last_name" class="form-control">
                            </div>
                          </div>
                        </div>
                         <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Certificate</label>
                            <div class="col-sm-9">
                              <input type="text" name="sertificate" class="form-control" placeholder=" subject he studies">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                         <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Teacher Email</label>
                            <div class="col-sm-9">
                              <input type="email" name="teacher_email" class="form-control">
                            </div>
                          </div>
                        </div>
                      	<div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Teacher Phone</label>
                            <div class="col-sm-9">
                              <input type="text" name="teacher_phone" class="form-control">
                            </div>
                          </div>
                        </div>
                      </div> 
                      <button type="submit" class="btn btn-success mr-2">Submit</button>
                    </form>
                  </div>
                </div>
              </div>
@endsection