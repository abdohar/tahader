    <header class="header-area" id="header-area">
            <nav class="navbar navbar-expand-md fixed-top">
                <div class="container">
                    <div class="site-logo"><a class="navbar-brand" href="index.html"><img src="images/logo.png" class="img-fluid" alt="Img" /></a></div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"><i class="ti-menu"></i></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="dropdown-toggle" href="#" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">الرئيسية</a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="index.html">الصفحة الرئيسية - 01</a>
                                    <a class="dropdown-item" href="index-2.html">الصفحة الرئيسية - 02</a>
                                    <a class="dropdown-item" href="index-3.html">الصفحة الرئيسية - 03</a>
                                    <a class="dropdown-item" href="index-4.html">الصفحة الرئيسية - 04</a>
                                    <a class="dropdown-item" href="index-5.html">الصفحة الرئيسية - 05</a>
                                    <a class="dropdown-item" href="index-6.html">الصفحة الرئيسية - 06</a>
                                    <a class="dropdown-item" href="index-7.html">الصفحة الرئيسية - 07</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="dropdown-toggle" href="#" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">الصفحات</a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                    <a class="dropdown-item" href="about-us.html">من نحن</a>
                                    <a class="dropdown-item" href="contact-us.html">اتصل بنا</a>
                                    <a class="dropdown-item" href="faqs.html">الأسئلة الشائعة</a>
                                    <a class="dropdown-item" href="reviews.html">اراء العملاء</a>
                                    <a class="dropdown-item" href="signin.html">تسجيل دخول</a>
                                    <a class="dropdown-item" href="signup.html">تسجيل مستخدم</a>
                                    <a class="dropdown-item" href="recover-account.html">استعادة كلمة المرور</a>
                                    <a class="dropdown-item" href="coming-soon.html">الظهور قريبا</a>
                                    <a class="dropdown-item" href="error-404.html">صفحة الخطأ 404</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="dropdown-toggle" href="#" id="dropdownMenuButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">المقالات</a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                                    <a class="dropdown-item" href="blog-1.html">المقالات - العرض الأول</a>
                                    <a class="dropdown-item" href="blog-2.html">المقالات - العرض الثاني</a>
                                    <a class="dropdown-item" href="single-post.html">صفحة المقال</a>
                                </div>
                            </li>
                            <li class="nav-item"><a href="#" data-scroll-nav="1">المميزات</a></li>
                            <li class="nav-item"><a href="#" data-scroll-nav="2">كف يعمل</a></li>
                            <li class="nav-item"><a href="#" data-scroll-nav="3">معرض الصور</a></li>
                            <li class="nav-item"><a href="#" data-scroll-nav="4">الأسعار</a></li>
                            <li class="nav-item"><a href="#" data-scroll-nav="7">الأراء</a></li>
                            <li class="nav-item"><a href="#" data-scroll-nav="6">الأسئلة الشائعة</a></li>
                            <li class="nav-item"><a href="#" data-scroll-nav="8">اتصل بنا</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>


{{-- <header>
        <div class="header-area">
            <div class="main-header ">
                <div class="header-bottom header-sticky">
                    <div class="logo d-none d-lg-block">
                        <a href="{{ route('site.index') }}"><img src="{{ asset('assets/img/logo/logo.png') }}" alt=""></a>
                    </div>
                    <div class="container">
                        <div class="menu-wrapper">
                            <div class="logo logo2 d-block d-lg-none">
                                <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                            </div>
                            <div class="main-menu d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">                        
                                        <li><a href="{{ route('site.index') }}">Home</a></li>
                                        <li><a href="{{ route('site.aboutus') }}">About</a></li>
                                        <li><a href="{{ route('site.school') }}">Schools</a></li>
                                        <li><a href="{{ route('site.services') }}">Services</a></li>
                                        <li><a href="{{ route('site.contact') }}">Contact</a></li>
                                       @if(Auth::guest())
                                        <li><a href="{{ route('site.login') }}"><i class="ti-user"></i>Login</a>
                                        </li>
                                        @else
                                        <li>
                                             <a class="dropdown-item" href="{{ route('site.logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('site.logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                        </li>
                                        @endif
                                    </ul>
                                </nav>
                            </div>
                            <div class="header-search d-none d-lg-block">
 
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header> 
 --}}