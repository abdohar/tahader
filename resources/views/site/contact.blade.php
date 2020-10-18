@extends('site.index')
@section('content')

  {{--       <div class="slider-area ">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 text-center">
                                <h2>Contact Us</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        <div class="page-header page-contact">
            <div class="container">
                <div class="title-box">
                    <h1 class="title">اتصل بنا</h1>
                    <div class="breadcrumb">
                        <span>
                            <a title="Homepage" href="{{ route('site.index') }}"><i class="ti ti-home"></i>&nbsp;&nbsp;اﻟﺮﺋﻴﺴﻴﺔ</a>
                        </span>
                        <span class="bread-sep">&nbsp; | &nbsp;</span>
                        <span>اتصل بنا</span>
                    </div>  
                </div>
            </div>   
            <div class="shape-bottom">
                <img src="{{asset ('assets2/images/shapes/price-shape.svg') }}" alt="shape" class="bottom-shape img-fluid">
            </div>
        </div>


                <section class="contact-section" style="padding: 0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title">أرسل لنا </h2>
                        @include('messages')
                    </div>
                    <div class="col-lg-8">
                        <form class="form-contact contact_form" action="{{ route('site.contact.store') }}" method="POST">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="أدخل اسمك الثلاثي">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="أدخل إيميلك">
                                    </div>
                                </div>
                                <div class="offset-3 col-6">
                                    <div class="form-group">
                                        <input class="form-control" name="phone" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Phone'" placeholder="أدخل رقمك">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="أدخل موضوع الرسالة">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="message" id="message" cols="30" rows="5" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" أكتب رسالتك هنا"></textarea>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="button button-contactForm boxed-btn">إرسال</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-3 offset-lg-1" style="direction: ltr;
    text-align: left;">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3>Saudi Arabia.</h3>
                                <p>AL-Madina</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <h3><a href="https://wa.me/00963936215337" target="_blank">00963936215</a></h3>
                                <p>All Times</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <a href="mailto:foo@bar.com?subject=This+Is+My+Product">
                                <h3>schooltahader@gmail.com</h3>
                            </a>
                                <p>Send us your query anytime!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    @endsection