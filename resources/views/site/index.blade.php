<!doctype html>
<html class="no-js" >   {{-- lang="ar" dir="rtl" --}}
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Tahader | PowerPoint </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

	<!-- CSS here -->
	@include('site.css')
</head>
<body>
    <!--? Preloader Start -->
    {{-- <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
              
            </div>
        </div>
    </div> --}}
    <!-- Preloader Start -->
    @include('site.header')
    <main>
          @yield('content')
    </main>
    @include('site.footer')
    <!-- Scroll Up -->
    <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->

    @include('site.script')
    
    </body>
</html>