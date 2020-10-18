@extends('site.index')
@section('content')



<div class="page-header">
            <div class="container">
                <div class="title-box">
                    <h1 class="title">ﻣﻦ ﻧﺤﻦ </h1>
                    <div class="breadcrumb">
                        <span>
                            <a title="Homepage" href="{{ route('site.index') }}"><i class="ti ti-home"></i>&nbsp;&nbsp;اﻟﺮﺋﻴﺴﻴﺔ</a>
                        </span>
                        <span class="bread-sep">&nbsp; | &nbsp;</span>
                        <span> ﻣﻦ ﻧﺤﻦ</span>
                    </div>  
                </div>
            </div>   
            <div class="shape-bottom">
                <img src="{{asset ('assets2/images/shapes/price-shape.svg') }}" alt="shape" class="bottom-shape img-fluid">
            </div>
        </div>


    {{--     <div class="slider-area">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 text-center">
                                <h2>About Us</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="about-details section-padding30" style="padding: 0">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="about-details-cap mb-50">
                            <h4>اﻟﺮﺅﻳﺔ</h4>
                            <p>ﺭﺅﻳﺘﻨﺎ ﻭاﺿﺤﺔ ﻭﻧﺴﻴﺮ ﺑﺨﻄُﻰ ﺛﺎﺑﺘﺔ ﻧﺤﻮ اﻻﺭﺗﻘﺎء ﺩﻭﻣًﺎ ﺑﻤﺴﺘﻮﻯ اﻟﺨﺪﻣﺎﺕ اﻟﺘﻌﻠﻴﻤﻴﺔ اﻟﺘﻲ ﻧﻘﺪﻣﻬﺎ ﻟﺠﻤﻴﻊ اﻟﻌﺎﻣﻠﻴﻦ ﻓﻲ اﻟﻤﻨﻈﻮﻣﺔ اﻟﺘﻌﻠﻴﻤﻴﺔ ﻭﻧﻌﻤﻞ ﺟﺎﻫﺪﻳﻦ ﻋﻠﻰ ﺇﺿﺎﻓﺔ اﻟﻤﺰﻳﺪ ﻣﻦ اﻟﺨﺪﻣﺎﺕ اﻟﺘﻲ ﺗﻐﻄﻲ ﻛﺎﻓﺔ ﻣﺘﻄﻠﺒﺎﺕ ﻋﻤﻼﺋﻨﺎ، ﻛﻤﺎ ﻧﺴﻌﻰ ﻭﺭاء اﻟﺘﻄﻮﻳﺮ ﻭاﻹﺑﺪاﻉ  ﻟﻨﺤﺎﻓﻆ ﻋﻠﻰ ﺭﻳﺎﺩﺗﻨﺎ، ﻓﻨﺤﻦ ﻧﻌﻲ ﺃﻥ اﻟﻮﺻﻮﻝ ﺇﻟﻰ اﻟﻨﺠﺎﺡ ﺳﻬﻞ ﻭﻟﻜﻦ اﻟﺤﻔﺎﻅ ﻋﻠﻴﻪ ﻭاﻟﺒﻘﺎء ﺩاﺋﻤًﺎ ﻓﻲ اﻟﻘﻤﺔ ﻟﻴﺲ ﺑﻨﻔﺲ اﻟﺴﻬﻮﻟﺔ ﻭﻻ ﻳﺄﺗﻲ ﻣﻦ ﻓﺮاﻍ، ﻭﺇﻧﻤﺎ ﻳﺤﺘﺎﺝ ﺇﻟﻰ ﻋﻤﻞ ﻭﺟﻬﺪ ﻣﺴﺘﻤﺮ، ﻭﻟﻬﺬا ﻧﺨﺘﺎﺭ ﻓﺮﻳﻖ ﻋﻤﻠﻨﺎ ﺑﻌﻨﺎﻳﺔ ﻟﻴﻀﻢ ﻧﺨﺒﺔ ﻣﻦ ﺃﻣﻬﺮ اﻟﻜﻮاﺩﺭ اﻟﻤﺘﺨﺼﺼﺔ ﻓﻲ ﺇﻋﺪاﺩ اﻟﺘﺤﺎﺿﻴﺮ اﻟﺘﻌﻠﻴﻤﻴﺔ ﺑﻜﻔﺎءﺓ ﻋﺎﻟﻴﺔ.
                            </p>
                          {{--   <p> Risus commodo viverra sebfd dho eiusmod tempor maecenas accumsan lacus. Risus commodo viverra sebfd dho eiusmod tempor maecenas accumsan.</p> --}}
                        </div>

                        <div class="about-details-cap mb-50">
                            <h4>اﻟﺮﺳﺎﻟﺔ</h4>
                          <p>
اﻟﺘﺨﻔﻴﻒ ﻋﻠﻰ اﻟﻤﻌﻠﻤﻴﻦ ﻭاﻟﻤﻌﻠﻤﺎﺕ ﻭﺃﻥ ﻧﺼُﺒﺢ ﺷﺮﻛﺎء ﻓﻲ اﻟﻨﻬﻮﺽ ﺑﺎﻟﻌﻤﻠﻴﺔ اﻟﺘﻌﻠﻴﻤﺔ ﻣﻦ اﻷﻫﺪاﻑ اﻟﺴﺎﻣﻴﺔ اﻟﺘﻲ ﻧﻀﻌﻬﺎ ﻧﺼﺐ ﺃﻋُﻴﻨﻨﺎ ﺑﺎﺳﺘﻤﺮاﺭ، ﻭﻫﻮ ﻣﺎ ﻳﺪﻓﻌﻨﺎ ﻟﻤﺰﻳﺪ ﻣﻦ اﻟﻌﻤﻞ ﻭاﻟﺘﺤﺴﻴﻦ اﻟﺪاﺋﻢ ﻣﻦ ﺃﻧﻔُﺴﻨﺎ ﻭﺧﺪﻣﺎﺗﻨﺎ ﻟﻨﺼﺒﺢ ﺟﺪﻳﺮﻳﻦ ﺑﺜﻘﺔ ﻛﻞ ﻣﻦ ﻳﺘﻌﺎﻣﻞ ﻣﻌﻨﺎ، ﻭﻋﻠﻴﻪ ﻧﺮاﻋﻲ اﻻﻟﺘﺰاﻡ ﺑﻌﺪﺓ ﻣﺒﺎﺩﺉ ﺃﺳﺎﺳﻴﺔ ﻣﻨﻬﺎ:
</p><ul style="margin-right: 80px;     font-size: 16px;">
    <li style="">  اﻟﻤﺼﺪاﻗﻴﺔ ﻣﻊ ﻋﻤﻼﺋﻨﺎ ﻭاﻻﻟﺘﺰاﻡ ﺑﻤﻮاﻋﻴﺪ اﻟﺘﺴﻠﻴﻢ.</li>
<li>  اﻻﻟﺘﺰاﻡ ﺑﻤﻌﺎﻳﻴﺮ اﻟﺠﻮﺩﺓ اﻟﺘﻌﻠﻴﻤﻴﺔ ﻓﻲ ﺇﻋﺪاﺩ اﻟﺘﺤﺎﺿﻴﺮ ﻭ ﻭﻓﻖ ﺁﺧﺮ ﺗﺤﺪﻳﺚ ﻟﻠﻜﺘﺐ اﻟﺪﺭاﺳﻴﺔ ﻛﻞ ﻋﺎﻡ.</li>
<li>   ﻧﺴﻌﻰ ﻟﺘﻘﺪﻳﻢ ﺧﺪﻣﺎﺕ ﺑﺠﻮﺩﺓ ﻋﺎﻟﻴﺔ ﻭﺃﺳﻌﺎﺭ ﻻ ﺗﻘﺒﻞ اﻟﻤﻨﺎﻓﺴﺔ، ﻭﻓﻲ ﻣﺘﻨﺎﻭﻝ اﻟﺠﻤﻴﻊ.</li>
</ul>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     
@endsection


