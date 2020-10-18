@extends('site.index')
@section('content')

<!--? Hero Start -->
{{--         <div class="slider-area">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 text-center">
                                <h2>Services</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        <div class="page-header page-service">
            <div class="container">
                <div class="title-box">
                    <h1 class="title">خدماتنا</h1>
                    <div class="breadcrumb">
                        <span>
                            <a title="Homepage" href="{{ route('site.index') }}"><i class="ti ti-home"></i>&nbsp;&nbsp;اﻟﺮﺋﻴﺴﻴﺔ</a>
                        </span>
                        <span class="bread-sep">&nbsp; | &nbsp;</span>
                        <span>الخدمات</span>
                    </div>  
                </div>
            </div>   
            <div class="shape-bottom">
                <img src="{{asset ('assets2/images/shapes/price-shape.svg') }}" alt="shape" class="bottom-shape img-fluid">
            </div>
        </div>

        <!-- Hero End -->
        <!-- About Details Start -->
         
        <div class="categories-area section-padding30">
            <div class="container">
                {{-- <div class="row justify-content-sm-center">
                    <div class="cl-xl-7 col-lg-8 col-md-10">
                        <div class="section-tittle text-center mb-70">
                            <h2>Our Services</h2>
                        </div> 
                    </div>
                </div> --}}
{{--                 <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat mb-50">
                           <div class="card-header">
                                            
                                                <h4>عروض البوربوينت</h4>
                                                <span class="card-header-price">
                                                    <span class="simbole" style="font-size: 25px;">$</span>
                                                    <span class="price-num">33</span>
                                                    <span class="price-date">/لكل درس</span>
                                                </span>
                                                <div class="shape-bottom">
                                                    <img src="assets2/images/shapes/price-shape.svg" alt="shape" class="bottom-shape img-fluid">
                                                </div>
                                            
                                        </div>
                            <div class="cat-cap">
                                <h5><a href="#">PowerPoint to Subject</a></h5>
                                <p>After providing us with the learning material, a lecturing team will create a presentation using PowerPoint, and its content is the educational material.
The presentation is professional, easy to handle, and communicates the idea from the lesson.</p>
                                <a href="#" class="read-more1">Read More &gt;</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat mb-50">
                            <div class="cat-icon">
                                <span class="flaticon-education"></span>
                            </div>
                            <div class="cat-cap">
                                <h5><a href="#">PowerPoint to Questions</a></h5>
                                <p>It is an additional service. Upon request, we will work to output the material as multiple-choice questions
It will convey the required idea of realizing the student’s understanding of the material.</p>
                                <a href="#" class="read-more1">Read More &gt;</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat mb-50">
                            <div class="cat-icon">
                                <span class="flaticon-communications"></span>
                            </div>
                            <div class="cat-cap">
                                <h5><a href="#">Video To PowerPoint</a></h5>
                                <p>Make a video for the school and direct it in a professional and high quality.</p>
                                <a href="#" class="read-more1">Read More &gt;</a>
                            </div>
                        </div>
                    </div>
                </div> --}}
                

                <div class="row">
                <div class="col-md-4">
                                        <div class="pricing-card top-35">
                                            <header class="card-header">
                                                <h4>عروض البوربوينت</h4>
                                                <span class="card-header-price">
                                                    <span class="simbole" style="font-size: 25px;">$</span>
                                                    <span class="price-num">33</span>
                                                    <span class="price-date">/لكل درس</span>
                                                </span>
                                                <div class="shape-bottom">
                                                    <img src="assets2/images/shapes/price-shape.svg" alt="shape" class="bottom-shape img-fluid">
                                                </div>
                                            </header>
                                            <div class="card-body">
                                                <ul>
                                                    <li>
                                                        <span class="fas fa-check"></span>
                                                           عرض بوربوينت احترافي للدرس
                                                    </li>
                                                    <li>
                                                        <span class="fas fa-check"></span>
                                                       عرض بوربوينت احترافي للأسئلة
                                                    </li>
                                                    <li>
                                                        <span class="fas fa-check"></span>
                                                           ورقة عمل (نشاط لاصفي)
                                                    </li>
                                                    <li>
                                                        <span class="fas fa-check"></span>
                                                           تتضمن العروض فيديوهات وصوت وصور تتعلق بالدرس
                                                    </li>
                                                    <li>
                                                        <span class="fas fa-check"></span>
                                                           فيديو مصور للعرض وهو يعمل
                                                    </li>
                                                    <li>
                                                        <span class="fas fa-check"></span>
                                                        حساب للمدرسة ضمن الموقع لإدارة المدرسين والتحاضير ومن يحق له الوصول لها
                                                    </li>
                                                    <li>
                                                        <span class="fas fa-check"></span>
                                                        وكل ذلك في حقيبة واحدة وترفع على رابط قوقل درايف خاص بالمدرسة
                                                    </li>
                                                </ul>
                                                 <a href="http://localhost:8000/contact">
                                                <button type="button" class="btn btn-sm btn-block">
                                                   
                                                اشترك الآن واتصل بنا 
                                            </button>
                                        </a>
                                            </div>
                                        </div>
                </div>
                <div class="col-md-4">
                                        <div class="pricing-card top-35">
                                            <header class="card-header">
                                                <h4>التصميم</h4>
                                                <span class="card-header-price">
                                                    <span class="simbole" style="font-size: 25px;">$</span>
                                                    <span class="price-num">???</span>
                                                    <span class="price-date">/السعر في هذه القائمة بحسب الخدمة</span>
                                                </span>
                                                <div class="shape-bottom">
                                                    <img src="assets2/images/shapes/price-shape.svg" alt="shape" class="bottom-shape img-fluid">
                                                </div>
                                            </header>
                                            <div class="card-body">
                                                <ul>
                                                    <li>
                                                        <span class="fas fa-check"></span>
                                                               إعادة تصميم الهوية البصرية لمدرستكم
                                                    </li>
                                                    <li>
                                                        <span class="fas fa-check"></span>
                                                           و   استلام التصاميم لفعاليات المدرسة والأعياد والمناسبات الوطنية
                                                    </li>
                                                    <li>
                                                        <span class="fas fa-check"></span>
                                                               مونتاج فيديو احترافي لمدرستكم
                                                    </li>
                                                     <li>
                                                         <span class="fas fa-check"></span>
                                                               ادارة صفحاتكم على مواقع التواصل الاجتماعي
                                                        </li>
                                                     <li>
                                                        <ul>
                                                            <li>
                                                            <span class="fas fa-check"></span>
                                                              10  منشور كل يوم
                                                            </li> 
                                                             <li>
                                                            <span class="fas fa-check"></span>
                                                        1 فيديو كل اسبوع
                                                            </li> 
                                                             <li>
                                                            <span class="fas fa-check"></span>
                                                             5 بوسترات كل أسبوع
                                                            </li> 
                                                             <li>
                                                            <span class="fas fa-check"></span>
                                                             والمزيد والكثير ستجدونه لدينا
                                                            </li> 
                                                        </ul>
                                                    </li>
                                                </ul>
                                                 <a href="http://localhost:8000/contact">
                                                <button type="button" class="btn btn-sm btn-block">
                                                   
                                                اشترك الآن واتصل بنا 
                                            </button>
                                        </a>
                                            </div>
                                        </div>
                </div>
                 <div class="col-md-4">
                                        <div class="pricing-card top-35">
                                            <header class="card-header">
                                                <h4>البرمحة والتطوير</h4>
                                                <span class="card-header-price">
                                                    <span class="simbole" style="font-size: 25px;">$</span>
                                                    <span class="price-num">???</span>
                                                    <span class="price-date">/السعر في هذه القائمة بحسب الخدمة</span>
                                                </span>
                                                <div class="shape-bottom">
                                                    <img src="assets2/images/shapes/price-shape.svg" alt="shape" class="bottom-shape img-fluid">
                                                </div>
                                            </header>
                                            <div class="card-body">
                                                <ul>
                                                    <li>
                                                        <span class="fas fa-check"></span>
                                                               •    إعادة تصميم وبرمجة الموقع الإكتروني لمدرستكم
                                                    </li>
                                                    <li>
                                                        <span class="fas fa-check"></span>
                                                           وبناء نظام لإدارة مدرستكم حسب متطلباتكم
                                                    </li>
                                                    <li>
                                                        <span class="fas fa-check"></span>
                                                        بناء تطبيقات الاندرويد وال IOS
                                                    </li>
                                                     <li>
                                                        <span class="fas fa-check"></span>
                                                        استلام طلبات البرمجة بما يخدمكم ويحقق تطلعاتكم
                                                    </li>
                                                   
                                                </ul>
                                                 <a href="http://localhost:8000/contact">
                                                <button type="button" class="btn btn-sm btn-block">
                                                   
                                                اشترك الآن واتصل بنا 
                                            </button>
                                        </a>
                                            </div>
                                        </div>
                </div>
            </div>
            </div>
        </div>
     
@endsection


