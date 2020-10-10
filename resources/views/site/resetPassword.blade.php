@extends('site.index')
@section('content')

<!--? Hero Start -->
        <div class="slider-area">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                                   <div class="row">
                        <div class="col-xl-12">
                           
                               <div class="row w-100">
            <div class="col-lg-4 mx-auto mycss">
             <h2 class="text-center mb-4" style="color: #ddd;">Login</h2>
              <div class="auto-form-wrapper">
                <form action="{{ route('password.reset.code',['user'=> $user->id]) }}" method="POST" novalidate="novalidate">
                   {{csrf_field()}}
                  <div hidden="" class="form-group">
                    <label class="label">Email</label>
                    <div class="input-group">
                      <input type="email" name="email" value="{{ $user->email }}" class="form-control" placeholder="Enter Your Email">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                                    <div class="form-group">
                    <label class="label">Email</label>
                    <div class="input-group">
                      <input type="text" name="code" class="form-control" placeholder="Enter Code">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                                    <div class="form-group">
                    <label class="label">New Password</label>
                    <div class="input-group">
                      <input type="password" name="new_password" class="form-control" placeholder="">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                                    <div class="form-group">
                    <label class="label">confirm New Password</label>
                    <div class="input-group">
                      <input type="password" name="confirm_password" class="form-control" placeholder="">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <button class="btn btn-primary submit-btn btn-block">Reset Password</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
                           
                        </div>
                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection