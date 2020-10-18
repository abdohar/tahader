@extends('site.index')
@section('content')


<div class="page-header">
            <div class="container">
                <div class="title-box">
                    <h1 class="title">سجل دخولك لتدير حسابك</h1>
                    <div class="breadcrumb">
                        <span>
                            <a title="Homepage" href="{{ route('site.index') }}"><i class="ti ti-home"></i>&nbsp;&nbsp;اﻟﺮﺋﻴﺴﻴﺔ</a>
                        </span>
                        <span class="bread-sep">&nbsp; | &nbsp;</span>
                        <span>دخول</span>
                    </div>  
                </div>
            </div>   
            <div class="shape-bottom">
                <img src="{{asset ('assets2/images/shapes/price-shape.svg') }}" alt="shape" class="bottom-shape img-fluid">
            </div>
        </div>

<!--? Hero Start -->
{{--         <div class="slider-area">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row" style="margin: 10px">
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
                      
                        </div>
                    </div>
                </div>
            </div>
        </div>


 --}}
        <div class="col-md-8">
          {{-- @include('messages') --}}
                <div class="container-fluid">
                    <a href="index.html" class="res-logo"><img src="images/logo-2.png" alt="Logo"></a>
                    <div class="login-form">

                        <div class="login-form-head">
                            <h2>مرحبا بعودتك</h2>
                            <p>تسجيل الدخول لإدارة حسابك.</p>
                        </div>
                        <form action="{{ route('site.login.user') }}" method="POST" novalidate="novalidate">
                   {{csrf_field()}}
                            <div class="form-group">
                                <label class="form-label" for="signinEmail">البريد الالكتروني</label>
                                <div class="input-group">
                                    <div class="input-icon">
                                        <span class="ti-email"></span>
                                    </div>
                                    <input type="email" name="email" class="form-control" id="signinEmail" placeholder="البريد الالكتروني" aria-label="Email address" required="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="signinPassword">
                                    كلمة المرور
                                    <span class="d-flex justify-content-between align-items-center">
                                        <a class="link-muted" href="{{ route('forget.password') }}">نسيت كلمة المرور؟</a>
                                    </span>
                                </label>
                                <div class="input-group">
                                    <div class="input-icon">
                                        <span class="ti-lock"></span>
                                    </div>
                                    <input type="password" class="form-control" name="password" id="signinPassword" placeholder="********" aria-label="Password" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <button class="btn theme-btn btn-block">تسجيل الدخول</button>
                            </div>
                            {{-- <div class="form-group login-desc">
                                <p>لربما <a href="{{ route('forget.password') }}">نسيت كلمة المرور</a></p>
                            </div> --}}
                        </form>
                    </div>

                </div>
            </div>
        @endsection