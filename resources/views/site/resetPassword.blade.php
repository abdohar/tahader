@extends('site.index')
@section('content')

<!--? Hero Start -->
{{--         <div class="slider-area">
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
 --}}


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
                            <h2>ﻣﺮﺣﺒﺎ ﺑﻚ</h2>
                            <p>راجع البريد الإلكنروني  {{ $user->email }} , لقد أرسلنا رمز التحقق </p>
                        </div>
                        <form action="{{ route('password.reset.code',['user'=> $user->id]) }}" method="POST" novalidate="novalidate">
                   {{csrf_field()}}

                      <div hidden="" class="form-group">
                    {{-- <label class="label">Email</label> --}}
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
                                <label class="form-label" for="signinEmail">ﺃﺩﺣﻞ اﻟﻜﻮﺩ </label>
                                <div class="input-group">
                                    <div class="input-icon">
                                        <span class="ti-email"></span>
                                    </div>
                                    <input type="text" name="code" class="form-control" id="signinEmail" placeholder="اﺩﺧﻞ اﻟﻜﻮﺩ" aria-label="Email address" required="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="signinPassword">
                                    ﻛﻠﻤﺔ اﻟﻤﺮﻭﺭ
                                    <span class="d-flex justify-content-between align-items-center">
                                        <a class="link-muted" href="{{ route('forget.password') }}">ﻧﺴﻴﺖ ﻛﻠﻤﺔ اﻟﻤﺮﻭﺭ؟</a>
                                    </span>
                                </label>
                                <div class="input-group">
                                    <div class="input-icon">
                                        <span class="ti-lock"></span>
                                    </div>
                                    <input type="password" name="new_password" class="form-control" placeholder="">
                                </div>
                              </div>
                                 <label class="form-label" for="signinPassword">
                                  ﺗﺄﻛﻴﺪ ﻛﻠﻤﻮ اﻟﻤﺮﻭﺭ 
                                </label>
                                  <div class="input-group">
                                    <div class="input-icon">
                                        <span class="ti-lock"></span>
                                    </div>
                                    <input type="password" name="confirm_password" class="form-control" placeholder="">
                                </div>
                            <div class="form-group"></div>
                            <div class="form-group">
                                <button class="btn theme-btn btn-block">ﺗﺴﺠﻴﻞ اﻟﺪﺧﻮﻝ</button>
                            </div>
                            {{-- <div class="form-group login-desc">
                                <p>ﻟﺮﺑﻤﺎ <a href="{{ route('forget.password') }}">ﻧﺴﻴﺖ ﻛﻠﻤﺔ اﻟﻤﺮﻭﺭ</a></p>
                            </div> --}}
                        </form>
                    </div>

                </div>
            </div>

        @endsection