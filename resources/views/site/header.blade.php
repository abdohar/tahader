    <header class="header-area" id="header-area">
            <nav class="navbar navbar-expand-md fixed-top">
                <div class="container">
                    <div class="site-logo"><a class="navbar-brand" href="{{ route('site.index') }}">
                        <i class="fas fa-book-reader" style="font-size: 30px;"></i>
                        <span style="font-size: 34px;color:#FFF">تحاضير</span>
                        {{-- <img src="{{asset ('assets2/images/logo.png') }}" class="img-fluid" alt="Img" /> --}}
                    </a>
                </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"><i class="ti-menu"></i></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav">
                            {{-- <li class="nav-item dropdown">
                                <a href="{{ route('site.index') }}">اﻟﺮﺋﻴﺴﻴﺔ</a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="index.html">01 - اﻟﺼﻔﺤﺔ اﻟﺮﺋﻴﺴﻴﺔ</a>
                                    <a class="dropdown-item" href="index-2.html">02 - اﻟﺼﻔﺤﺔ اﻟﺮﺋﻴﺴﻴﺔ</a>
                                    <a class="dropdown-item" href="index-3.html">03 - اﻟﺼﻔﺤﺔ اﻟﺮﺋﻴﺴﻴﺔ</a>
                                    <a class="dropdown-item" href="index-4.html">04 - اﻟﺼﻔﺤﺔ اﻟﺮﺋﻴﺴﻴﺔ</a>
                                    <a class="dropdown-item" href="index-5.html">05 - اﻟﺼﻔﺤﺔ اﻟﺮﺋﻴﺴﻴﺔ</a>
                                    <a class="dropdown-item" href="index-6.html">06 - اﻟﺼﻔﺤﺔ اﻟﺮﺋﻴﺴﻴﺔ</a>
                                    <a class="dropdown-item" href="index-7.html">07 - اﻟﺼﻔﺤﺔ اﻟﺮﺋﻴﺴﻴﺔ</a>
                                </div>
                            </li> --}}
                            {{-- <li class="nav-item dropdown">
                                <a class="dropdown-toggle" href="#" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">اﻟﺼﻔﺤﺎﺕ</a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                    <a class="dropdown-item" href="about-us.html">ﻣﻦ ﻧﺤﻦ</a>
                                    <a class="dropdown-item" href="contact-us.html">اﺗﺼﻞ ﺑﻨﺎ</a>
                                    <a class="dropdown-item" href="faqs.html">اﻷﺳﺌﻠﺔ اﻟﺸﺎﺋﻌﺔ</a>
                                    <a class="dropdown-item" href="reviews.html">اﺭاء اﻟﻌﻤﻼء</a>
                                    <a class="dropdown-item" href="signin.html">ﺗﺴﺠﻴﻞ ﺩﺧﻮﻝ</a>
                                    <a class="dropdown-item" href="signup.html">ﺗﺴﺠﻴﻞ ﻣﺴﺘﺨﺪﻡ</a>
                                    <a class="dropdown-item" href="recover-account.html">اﺳﺘﻌﺎﺩﺓ ﻛﻠﻤﺔ اﻟﻤﺮﻭﺭ</a>
                                    <a class="dropdown-item" href="coming-soon.html">اﻟﻈﻬﻮﺭ ﻗﺮﻳﺒﺎ</a>
                                    <a class="dropdown-item" href="error-404.html">404 ﺻﻔﺤﺔ اﻟﺨﻄﺄ</a>
                                </div>
                            </li> --}}
                            {{-- <li class="nav-item dropdown">
                                <a class="dropdown-toggle" href="#" id="dropdownMenuButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">اﻟﻤﻘﺎﻻﺕ</a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                                    <a class="dropdown-item" href="blog-1.html">اﻟﻤﻘﺎﻻﺕ - اﻟﻌﺮﺽ اﻷﻭﻝ</a>
                                    <a class="dropdown-item" href="blog-2.html">اﻟﻤﻘﺎﻻﺕ - اﻟﻌﺮﺽ اﻟﺜﺎﻧﻲ</a>
                                    <a class="dropdown-item" href="single-post.html">ﺻﻔﺤﺔ اﻟﻤﻘﺎﻝ</a>
                                </div>
                            </li> --}}
                            <li class="nav-item"><a href="{{ route('site.index') }}">الرئيسية</a></li>
                            <li class="nav-item"><a href="{{ route('site.aboutus') }}">من نحن</a></li>
                            <li class="nav-item"><a href="{{ route('site.school') }}">المدارس</a></li>
                            <li class="nav-item"><a href="{{ route('site.services') }}">الخدمات</a></li>
                            {{-- <li class="nav-item"><a href="{{ route('site.contact') }}">تواصل معنا</a></li> --}}
                            <li class="nav-item"><a href="{{ route('site.contact') }}">اﺗﺼﻞ ﺑﻨﺎ</a></li>

                             @if(Auth::guest())
                                        <li><a href="{{ route('site.login') }}"><i class="ti-user"></i> دخول</a>
                                        </li>
                                        @else
                                        <li>
                                             <a class="dropdown-item" href="{{ route('site.logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('خروج') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('site.logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                        </li>
                                        @endif
                            
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