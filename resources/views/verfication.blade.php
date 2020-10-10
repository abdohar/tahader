@extends('site.index')
@section('content')

   <div class="slider-area">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                        	<div class="hero-cap hero-cap2 text-center">
                                <h2>Pleace verfication Account</h2>
                            </div>
                                   <div class="row">
                        <div class="col-xl-12">
                                       <h2 class="text-center mb-4" style="color:#8e8d8d;">
We sent a message to email containing the verification code</h2>
                               <div class="row w-100">
                                
            <div class="col-lg-4 mx-auto mycss">
                 @include('messages')
              <div class="auto-form-wrapper">
                <form action="{{ route('verfication',['user' => $user->id]) }}" method="POST" novalidate="novalidate">
                   {{csrf_field()}}
                  <div class="form-group">
                    <label class="label">Code</label>
                    <div class="input-group">
                      <input type="text" name="key" class="form-control" placeholder="Enter Code">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <button class="btn btn-primary submit-btn btn-block">Verfication</button>
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