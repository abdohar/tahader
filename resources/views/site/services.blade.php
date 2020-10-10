@extends('site.index')
@section('content')

<!--? Hero Start -->
        <div class="slider-area">
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
        </div>
        <!-- Hero End -->
        <!-- About Details Start -->
         
        <div class="categories-area section-padding30">
            <div class="container">
                <div class="row justify-content-sm-center">
                    <div class="cl-xl-7 col-lg-8 col-md-10">
                        <div class="section-tittle text-center mb-70">
                            <h2>Our Services</h2>
                        </div> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat mb-50">
                            <div class="cat-icon">
                                <span class="flaticon-web-design"></span>
                            </div>
                            <div class="cat-cap">
                                <h5><a href="#">PowerPoint to Subject</a></h5>
                                <p>After providing us with the learning material, a lecturing team will create a presentation using PowerPoint, and its content is the educational material.
The presentation is professional, easy to handle, and communicates the idea from the lesson.</p>
                                {{-- <a href="#" class="read-more1">Read More &gt;</a> --}}
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
                               {{--  <a href="#" class="read-more1">Read More &gt;</a> --}}
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
                          {{--       <a href="#" class="read-more1">Read More &gt;</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
     
@endsection


