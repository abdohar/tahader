@extends('site.index')
@section('content')

<!--? Hero Start -->
{{--          <div class="slider-area">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row" style="margin: 10px">
                        <div class="col-lg-12">
                               <div class="row w-100">
            <div class="col-md-6 col-sm-8 col-lg-5 mx-auto offset-md-4 mycss">
             <h2 class="text-center mb-4" style="color: #ddd;">Forget Password</h2>
              <div class="auto-form-wrapper">
                <form action="{{ route('forget.password.reset') }}" method="POST" novalidate="novalidate">
                   {{csrf_field()}}
                  <div class="form-group">

                    <label class="label">Email</label>
                    <div class="input-group">
                      <input type="email" name="email" class="form-control" placeholder="Enter Your Email">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
                     @include('messages')
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
                        </div> --}}


<div class="page-header">
            <div class="container">
                <div class="title-box">
                    <h1 class="title">سنساعدك لإستعادة حسابك</h1>
                    <div class="breadcrumb">
                        <span>
                            <a title="Homepage" href="{{ route('site.index') }}"><i class="ti ti-home"></i>&nbsp;&nbsp;اﻟﺮﺋﻴﺴﻴﺔ</a>
                        </span>
                        <span class="bread-sep">&nbsp; | &nbsp;</span>
                        <span>استعادة الحساب</span>
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
                            <h2>نسيت كلمة المرور؟</h2>
                            <p>أدخل عنوان بريدك الإلكتروني أدناه وسنعيدك إلى المسار الصحيح.</p>
                        </div>
                        <form action="{{ route('forget.password.reset') }}" method="POST" novalidate="novalidate">
                   {{csrf_field()}}
                            <div class="form-group">
                                <label class="form-label" for="signinEmail">البريد الالكتروني</label>
                                <div class="input-group">
                                    <div class="input-icon">
                                        <span class="ti-email"></span>
                                    </div>
                                    <input type="email" class="form-control" name="email" id="signinEmail" placeholder="البريد الالكتروني" aria-label="Email address" required="">
                                </div>
                            </div>

                            <div class="form-group">
                                <button class="btn theme-btn btn-block">استعادة كلمة المرور</button>
                            </div>
                            <div class="form-group login-desc">
                                <p> الرجوع الى <a href="{{ route('site.login') }}">تسجيل الدخول</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
        @endsection