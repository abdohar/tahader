@extends('site.index')
@section('content')

<!--? Hero Start -->
        <div class="slider-area">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row" style="margin: 10px">
                        {{-- <div class="col-lg-12"> --}}
                               {{-- <div class="row w-100"> --}}
            <div class="col-md-6 col-sm-8 col-lg-5 mx-auto offset-md-4 mycss">
             <h2 class="text-center mb-4" style="color: #ddd;">Login</h2>
              <div class="auto-form-wrapper">
                <form action="{{ route('site.login.user') }}" method="POST" novalidate="novalidate">
                   {{csrf_field()}}
                  <div class="form-group">
                    <label class="label">Username</label>
                    <div class="input-group">
                      <input type="email" name="email" class="form-control" placeholder="Username">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="label">Password</label>
                    <div class="input-group">
                      <input type="password" name="password" class="form-control" placeholder="*********">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <button class="btn btn-primary submit-btn btn-block">Login</button>
                  </div>
                </form>
                   <div class="form-group">
                    <a href="{{ route('forget.password') }}">
                   <button class="btn btn-primary submit-btn btn-block" style="background:#39254475;">Forget Password</button>
                 </div>
              </div>
            {{-- </div> --}}
          {{-- </div> --}}
                      
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection