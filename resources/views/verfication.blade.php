@extends('site.index')
@section('content')
 
{{--    <div class="slider-area">
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

 --}}

<div class="page-header">
            <div class="container">
                <div class="title-box">
                    <h1 class="title">تفعيل الحساب</h1>
                    <div class="breadcrumb">
                        <span>
                            <a title="Homepage" href="{{ route('site.index') }}"><i class="ti ti-home"></i>&nbsp;&nbsp;اﻟﺮﺋﻴﺴﻴﺔ</a>
                        </span>
                        <span class="bread-sep">&nbsp; | &nbsp;</span>
                        <span>تفعيل الحساب  </span>
                    </div>  
                </div>
            </div>   
            <div class="shape-bottom">
                <img src="{{asset ('assets2/images/shapes/price-shape.svg') }}" alt="shape" class="bottom-shape img-fluid">
            </div>
        </div>


 <div class="col-md-8">
                           @include('messages')
                <div class="container-fluid">
                    <a href="index.html" class="res-logo"><img src="images/logo-2.png" alt="Logo"></a>
                    <div class="login-form">
                        <div class="login-form-head">
                            <h2>فعل حسابك للمتابعة</h2>
                             <p>راجع البريد الإلكنروني  {{ $user->email }} , لقد أرسلنا رمز  التفعيل </p>
                        </div>
                        <form action="{{ route('verfication',['user' => $user->id]) }}" method="POST" novalidate="novalidate">
                   {{csrf_field()}}
                            <div class="form-group">
                                <label class="form-label" for="signinEmail">أدخل الكود</label>
                                <div class="input-group">
                                    <div class="input-icon">
                                        <span class="ti-email"></span>
                                    </div>
                                    <input type="text" name="key" class="form-control" id="signinEmail" placeholder="أدخل الكود" aria-label="Email address" required="">
                                </div>
                            </div>

                            <div class="form-group">
                                <button class="btn theme-btn btn-block">تقعيل الحساب</button>
                            </div>
                           {{--  <div class="form-group login-desc">
                                <p> الرجوع الى <a href="{{ route('site.login') }}">تسجيل الدخول</a></p>
                            </div> --}}
                        </form>
                    </div>
                </div>
            </div>

@endsection