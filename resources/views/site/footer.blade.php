{{-- <footer>

        <div class="footer-area footer-bg">
            <div class="container">
                <div class="footer-top footer-padding">
      
                    <div class="footer-heading">
                        <div class="row justify-content-between">
                           
                            <div class="col-xl-5 col-lg-5">
                                <div class="footer-tittle2">
                                    <h4>Let’s Get Social</h4>
                                </div>
         
                                <div class="footer-social">
                                    <a href="https://www.facebook.com/abdohar.96"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a  href="#"><i class="fab fa-google"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                  </div>
                            </div>
                        </div>
                    </div>
                    <!-- Footer Menu -->
                    <div class="row d-flex justify-content-between">
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>About Us</h4>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Services</h4>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Study</h4>
                                    <ul>
                                        <li><a href="#"></a></li>
                                      
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Contact Us</h4>
                                    <ul>
                                       
                                        <li><a href="{{ route('site.contact') }}">Support</a></li>
                                       
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
                <div class="footer-bottom">
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-12">
                            <div class="footer-copy-right text-center">
                                <p>
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
    </footer> --}}

            <footer>
            <div class="shape-top"></div>
            <div class="container">
                <!-- End Footer Top  Area -->
                <div class="top-footer">
                    <div class="row">
                        <!-- Start Column 1 -->
                       <div class="col-md-4">
                        <div class="footer-logo">
                        <a class="navbar-brand" href="{{ route('site.index') }}">
                        <i class="fas fa-book-reader" style="font-size: 30px; color: #FFF"></i>
                        <span style="font-size: 34px;color:#FFF">تحاضير</span>
                        {{-- <img src="{{asset ('assets2/images/logo.png') }}" class="img-fluid" alt="Img" /> --}}
                    </a>
                            </div>
                            <p style="font-size: 15pء">
                                متميزون في أعمالنا وكوادرنا, 
 نسعى دائماً لأرضاء عملائنا.
                            </p>
                            <div class="footer-social-links">
                                <a href="https://www.facebook.com/tahader2020" target="_blank"><i class="ti-facebook"></i></a>
                                <a href="https://twitter.com/SchoolTahader" target="_blank"><i class="ti-twitter-alt"></i></a>
                                <a href="https://www.instagram.com/tahaderschool/" target="_blank"><i class="ti-instagram"></i></a>
                                {{-- <a href="#" target="_blank"><i class="ti-pinterest"></i></a> --}}
                            </div>
                            
                        </div>
                        <!-- End Column 1 -->

                        <!-- Start Column 2 -->
                        <div class="col-md-2">
                            <h4 class="footer-title">روابط مهمه</h4>
                            <ul class="footer-links">
                                <li><a href="{{ route('site.index') }}">الرئيسية</a></li>
                                <li><a href="{{ route('site.aboutus') }}">من نحن</a></li>
                                <li><a href="{{ route('site.contact') }}">اتصل بنا</a></li>
                                <li><a href="{{ route('site.school') }}">المدارس</a></li>
                                <li><a href="{{ route('site.services') }}">الخدمات</a></li>
                                {{-- <li><a href="blog-1.html">المقالات</a></li> --}}
                            </ul>
                        </div>
                        <!-- End Column 2 -->

                        <!-- Start Column 3 -->
                        <div class="col-md-2">
                            <h4 class="footer-title">حساب المستخدم</h4>
                            <ul class="footer-links">
                                <li><a href="{{ route('site.login') }}">تسجيل الدخول</a></li>
                                {{-- <li><a href="signup.html">مستخدم جديد</a></li> --}}
                                <li><a href="{{ route('forget.password') }}">استعادة الحساب</a></li>
                                {{-- <li><a href="recover-account.html">تغير كلمة المرور</a></li> --}}
                                {{-- <li><a href="error-404.html">404 صفحة الخطأ</a></li> --}}
                                {{-- <li><a href="coming-soon.html">صفحة الظهور قريبا</a></li> --}}
                            </ul>
                        </div>
                        <!-- End Column 3 -->

                        <!-- Start Column 4 -->
                        <div class="col-md-4">
                            <h4 class="footer-title">مما يعنينا </h4>
                            <p>
                                اﻧﺴﻴﺮ ﺑﺨﻄُﻰ ﺛﺎﺑﺘﺔ ﻧﺤﻮ اﻻﺭﺗﻘﺎء ﺩﻭﻣًﺎ ﺑﻤﺴﺘﻮﻯ اﻟﺨﺪﻣﺎﺕ اﻟﺘﻌﻠﻴﻤﻴﺔ اﻟﺘﻲ ﻧﻘﺪﻣﻬﺎ ﻟﺠﻤﻴﻊ اﻟﻌﺎﻣﻠﻴﻦ ﻓﻲ اﻟﻤﻨﻈﻮﻣﺔ اﻟﺘﻌﻠﻴﻤﻴﺔ ﻭﻧﻌﻤﻞ ﺟﺎﻫﺪﻳﻦ ﻋﻠﻰ ﺇﺿﺎﻓﺔ اﻟﻤﺰﻳﺪ ﻣﻦ اﻟﺨﺪﻣﺎﺕ اﻟﺘﻲ ﺗﻐﻄﻲ ﻛﺎﻓﺔ ﻣﺘﻄﻠﺒﺎﺕ ﻋﻤﻼﺋﻨﺎ
                            </p>
                            {{-- <form class="newsletter-form">
                                <input type="email" placeholder="Enter Your Email" />
                                <button class="btn theme-btn">اشترك</button>
                            </form> --}}
                        </div>
               
                        <!-- End Column 4 -->
                    </div>
                </div>
                <!-- End Footer Top  Area -->

                <!-- Start Copyrights Area -->
                <div class="copyrights">
                    <p>Copyrights © <?php echo date('Y');?>. Designed by  <i class="flaticon-like-2"></i>Tahader Team.</p>
                </div>
                <!-- End Copyrights Area -->
            </div>
        </footer>