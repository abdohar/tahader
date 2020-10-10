@extends('site.index')
@section('content')

<div class="slider-area">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 text-center">
                                <h2>School {{ $school->school_name }}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<section class="blog_area single-post-area section-padding" style="padding-bottom: 0">
         <div class="container">
        <div class="row" style="margin-bottom: 10px;">
        	<div class="col-lg-8 posts-list">
        		<div class="single-post">
                     <div class="feature-img">
                        <img class="img-fluid" src="{{ $school->school_cover }}" alt="">
                     </div>
                     <div class="blog_details">
                        <h2 style="color: #2d2d2d;">{{ $school->school_name }}
                        </h2>
                        <ul class="blog-info-link mt-3 mb-4">
                           <li><a href="#"><i class="fa fa-user"></i>{{ $school->manager_name }}</a></li>
                           <li><a href="#"><i class="fa fa-eye"></i> {{ $school->show }} Vizitor</a></li>
                        </ul>
                        <p class="excert">
                          Welcome to <span style="font-size: 18px;font-weight: bold;">{{ $school->school_name }}</span> School, in This Page we show Details about school.
                        </p>
                     </div>
                  </div>
        	</div>
        	<div class="col-lg-4">
        		<div class="blog_right_sidebar">
        		<aside class="single_sidebar_widget instagram_feeds">
                        <h4 class="widget_title" style="color: #2d2d2d;">School Logo</h4>
                        {{-- <ul class="instagram_row flex-wrap"> --}}
                           {{-- <li> --}}
                              <a href="{{ $school->school_logo }}" class="img-pop-up">
                                 <img class="img-fluid" src="{{ $school->school_logo }}" alt="">
                              </a>
                           {{-- </li> --}}
                        {{-- </ul> --}}
                     </aside>
                 </div>
                 <div class="blog_right_sidebar">
                 <aside class="single_sidebar_widget tag_cloud_widget">
                        <h4 class="widget_title" style="color: #2d2d2d;">Contact Info.</h4>
                        <ul class="list">
                           <div class="col-lg-12 offset-lg-1">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3>{{ $school->school_country }}.</h3>
                                <p>{{ $school->school_city }}</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <h3><a href="https://wa.me/{{ $school->school_phone }}" target="_blank">{{ $school->school_phone }}</a></h3>
                                <p>All Times</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <a href="mailto:foo@bar.com?subject=This+Is+My+Product">
                                <h3>{{ $school->school_email }}</h3>
                            </a>
                                <p>Send us your query anytime!</p>
                            </div>
                        </div>
                    </div>
                        </ul>
                     </aside>
                 </div>
        	</div>

        </div>
    </div>
</section>

<div class="whole-wrap">
	<div class="container box_1170">
		<div class="section-top-border">
					<div class="row">
						<div class="col-lg-8 col-md-8">
							<h3 class="mb-30">{{ $school->school_name }} Information</h3>
								<div class="mt-10">
									<input disabled="" type="text" name="first_name" placeholder="Manager : {{ $school->manager_name }}" onfocus="this.placeholder = ''" onblur="this.placeholder = 'First Name'" required="" class="single-input">
								</div>
								<div class="mt-10">
									<input disabled="" type="text" name="last_name"
									 placeholder="Manager Email : {{ $school->manager_email }}" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'" required="" class="single-input">
								</div>
								<div class="mt-10">
									<input disabled="" type="text" name="last_name"
									 placeholder="School Name : {{ $school->school_name }}" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'" required="" class="single-input">
								</div>
								<div class="mt-10">
									<input disabled="" type="text" name="track"
									 placeholder="School Track : {{ $school->school_track }}" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required="" class="single-input">
								</div>
								<div class="mt-10">
									<input disabled="" type="email" name="EMAIL"
									 placeholder="School Email : {{ $school->school_email }}" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required="" class="single-input">
								</div>
								<div class="mt-10">
									<input disabled="" type="text" name="phone"
									 placeholder="School Phone : {{ $school->school_phone }}" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required="" class="single-input">
								</div>
								<div class="input-group-icon mt-10">
									<div class="icon"><i class="fa fa-map-marker-alt" aria-hidden="true"></i></div>
									<input disabled="" type="text" name="address"
									 placeholder="Address :  {{ $school->school_address }}" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Address'" required="" class="single-input">
								</div>
								<div class="input-group-icon mt-10">
									<div class="icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
								<input disabled="" type="text" name="country"
									 placeholder="Country :  {{ $school->school_country }}" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Address'" required="" class="single-input">
								</div>
								<div class="input-group-icon mt-10">
									<div class="icon"><i class="fas fa-globe" aria-hidden="true"></i></div>
									<div class="form-select" id="default-select" "="">
												<input disabled="" type="text" name="country"
									 placeholder="City :  {{ $school->school_city }}" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Address'" required="" class="single-input">
												</div>
									</div>
								</div>
	
							<div class="col-lg-4">
        		<div class="blog_right_sidebar">
        		<aside class="single_sidebar_widget instagram_feeds">
                        <h4 class="widget_title" style="color: #2d2d2d;">School Image</h4>
                        <ul class="instagram_row flex-wrap">
                           <li>
                              <a href="{{ $school->school_logo }}" class="img-pop-up">
                                 <img class="img-fluid" src="{{ $school->school_logo }}" alt="">
                              </a>
                           </li>
                            <li>
                              <a href="{{ $school->school_cover  }}" class="img-pop-up">
                                 <img class="img-fluid" src="{{ $school->school_cover }}" alt="">
                              </a>
                           </li>
                        </ul>
                     </aside>
                 </div>
        	</div>	
						</div>
					</div>
				</div>
	</div>
</div>

@endsection