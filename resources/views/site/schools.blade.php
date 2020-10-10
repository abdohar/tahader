@extends('site.index')
@section('content')

    <div class="slider-area">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 text-center">
                                <h2>Schools we work with</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <div class="popular-course section-padding30">
            <div class="container">
                <div class="row justify-content-sm-center">
                    <div class="cl-xl-7 col-lg-8 col-md-10">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-70">
                           {{--  <span>Most School Of This Week</span> --}}
                            <h2>Schools</h2>
                        </div> 
                    </div>
                </div>
                <div class="row">
                	@foreach($schools as $school)
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <!-- Single course -->
                        <div class="single-course mb-40">
                            <div class="course-img">
                                <img src="{{ $school->school_cover }}" alt="">
                            </div>
                            <div class="course-caption">
                                <div class="course-cap-top">
                                    <h4><a href="{{ route('site.school.show',['school' => $school->id]) }}">{{ $school->school_name }}</a></h4>
                                </div>
                                {{-- <div class="course-cap-mid d-flex justify-content-between">
                                    <div class="course-ratting">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <ul><li>52 Review</li></ul>
                                </div> --}}
                                <div class="course-cap-bottom d-flex justify-content-between">
                                    <ul>
                                        <li><i class="ti-user"></i>{{ $school->manager_name }}</li>
                                        <li><i class="fa fa-eye"></i> {{ $school->show }}</li>
                                    </ul>
                                    {{-- <span>Free</span> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>


@endsection