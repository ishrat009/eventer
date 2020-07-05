@extends('frontend.layouts.themes.app')

@section('title', __('Register'))

@section('content')

  <!-- slider_area_start -->
  <div class="slider_area">
      <div class="single_slider  d-flex align-items-center slider_bg_1 overlay">
          <div class="container">
              <div class="row align-items-center justify-content-center">
                  <div class="col-xl-12">
                      <div class="slider_text text-center">
                          <div class="shape_1 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                              <img src="{{ asset('assets/img/shape/shape_1.svg') }}" alt="">
                          </div>
                          <div class="shape_2 wow fadeInDown" data-wow-duration="1s" data-wow-delay=".2s">
                              <img src="{{ asset('assets/img/shape/shape_2.svg') }}" alt="">
                          </div>
                          <span class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">15 July, 2020</span>
                          <h3 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".4s">Quarantine Concert</h3>
                          <p class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">Online</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- slider_area_end -->

  <!-- performar_area_start  -->
  <div class="performar_area black_bg" id="performers">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <div class="section_title mb-80">
                      <h3 class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">Performer</h3>
                  </div>
              </div>
          </div>
          <div class="row justify-content-center">
              <div class="col-lg-8">
                  <div class="row">
                      <div class="col-lg-6 col-md-6">
                          <div  class="single_performer wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                              <div data-tilt class="thumb">
                                  <img src="{{ asset('assets/img/performer/1.png') }}" alt="">
                              </div>
                              <div class="performer_heading">
                                  <h4>Shayan Chowshury Arnob</h4>
                                  <span>Singer</span>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-6 col-md-6">
                          <div  class="single_performer wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                              <div data-tilt class="thumb">
                                  <img src="{{ asset('assets/img/performer/2.png') }}" alt="">
                              </div>
                              <div class="performer_heading">
                                  <h4>Protik Hasan</h4>
                                  <span>Acoustic drum</span>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-6 col-md-6">
                          <div  class="single_performer wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                              <div data-tilt class="thumb">
                                  <img src="{{ asset('assets/img/performer/3.png') }}" alt="">
                              </div>
                              <div class="performer_heading">
                                  <h4>Salmon Vicky</h4>
                                  <span>Acoustic drum</span>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-6 col-md-6">
                          <div   class="single_performer wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                              <div data-tilt class="thumb">
                                  <img src="{{ asset('assets/img/performer/4.png') }}" alt="">
                              </div>
                              <div class="performer_heading">
                                  <h4>Filaris Habol</h4>
                                  <span>Acoustic drum</span>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- performar_area_end  -->

  <!-- about_area_start  -->
  <div class="about_area black_bg">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-lg-8">
                  <div class="section_title text-center mb-80">
                      <h3 class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s" >About Program</h3>
                      <p class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".4s" >The event regularly attracts a diverse range of attendees from around the world, across different professions, and with different.</p>
                  </div>
              </div>
          </div>
          <div class="row align-items-center">
              <div class="col-lg-7 col-md-6">
                  <div class="about_thumb">
                      <div class="shap_3  wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".4s">
                          <img src="{{ asset('assets/img/shape/shape_3.svg') }}" alt="">
                      </div>
                      <div class="thumb_inner  wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                          <img src="{{ asset('assets/img/about/about.png') }}" alt="">
                      </div>
                  </div>
              </div>
              <div class="col-lg-5 col-md-6">
                  <div class="about_info pl-68">
                      <h4 class=" wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">It’s time to book your seat</h4>
                      <p  class=" wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".6s">The event regularly attracts a diverse range of attendees from around the world, across different professions, and with different levels of experience transform your business.</p>
                      <a href="#" class="boxed-btn3  wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".7s">Register Now!</a>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- about_area_end  -->

  <div class="program_details_area detials_bg_1 overlay2">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <div class="section_title text-center mb-80  wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">
                      <h3>Program Details</h3>
                  </div>
              </div>
          </div>
          <div class="row justify-content-center">
              <div class="col-lg-8">
                  <div class="program_detail_wrap">
                      <div class="single_propram">
                          <div class="inner_wrap">
                              <div class="circle_img"></div>
                              <div class="porgram_top">
                                  <span class=" wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">3.00-4.00pm</span>
                                  <h4 class=" wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">12 Feb 2020</h4>
                              </div>
                              <div class="thumb wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                                  <img src="{{ asset('assets/img/program_details/1.png') }}" alt="">
                              </div>
                              <h4 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">Mr. Zosoldos</h4>
                          </div>
                      </div>
                      <div class="single_propram">
                          <div class="inner_wrap">
                              <div class="circle_img"></div>
                              <div class="porgram_top">
                                  <span class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">3.00-4.00pm</span>
                                  <h4 class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".4s">12 Feb 2020</h4>
                              </div>
                              <div class="thumb wow fadeInRight" data-wow-duration="1s" data-wow-delay=".5s">
                                  <img src="{{ asset('assets/img/program_details/2.png') }}" alt="">
                              </div>
                              <h4 class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".6s">Mr. Zosoldos</h4>
                          </div>
                      </div>
                      <div class="single_propram">
                          <div class="inner_wrap">
                              <div class="circle_img"></div>
                              <div class="porgram_top">
                                  <span class=" wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">3.00-4.00pm</span>
                                  <h4 class=" wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">12 Feb 2020</h4>
                              </div>
                              <div class="thumb  wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                                  <img src="{{ asset('assets/img/program_details/3.png') }}" alt="">
                              </div>
                              <h4 class=" wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">Mr. Zosoldos</h4>
                          </div>
                      </div>
                      <div class="single_propram">
                          <div class="inner_wrap">
                              <div class="circle_img"></div>
                              <div class="porgram_top">
                                  <span class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">3.00-4.00pm</span>
                                  <h4 class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".4s">12 Feb 2020</h4>
                              </div>
                              <div class="thumb wow fadeInRight" data-wow-duration="1s" data-wow-delay=".5s">
                                  <img src="{{ asset('assets/img/program_details/4.png') }}" alt="">
                              </div>
                              <h4 class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".6s">Mr. Zosoldos</h4>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <!-- map_area_start  -->
  <div class="map_area">
      <div id="map" style="height: 600px; position: relative; overflow: hidden;">

      </div>
      <script>
          function initMap() {
              var uluru = {
                  lat: -25.363,
                  lng: 131.044
              };
              var grayStyles = [{
                      featureType: "all",
                      stylers: [{
                              saturation: -90
                          },
                          {
                              lightness: 50
                          }
                      ]
                  },
                  {
                      elementType: 'labels.text.fill',
                      stylers: [{
                          color: '#ccdee9'
                      }]
                  }
              ];
              var map = new google.maps.Map(document.getElementById('map'), {
                  center: {
                      lat: -31.197,
                      lng: 150.744
                  },
                  zoom: 9,
                  styles: grayStyles,
                  scrollwheel: false
              });
          }
      </script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&amp;callback=initMap">
      </script>
      <div class="location_information black_bg wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
          <h3>Concert 2020</h3>
          <div class="info_wrap">
              <div class="single_info">
                  <span>Vanue:</span>
                  <p>26/A, Coontum Avenu
                      New York-2783</p>
              </div>
              <div class="single_info">
                  <span>Phone:</span>
                  <p>+10 (88) 267 368 283</p>
              </div>
              <div class="single_info">
                  <span>Email:</span>
                  <p>contact@concert20.com</p>
              </div>
          </div>
      </div>
  </div>
  <!-- map_area_end  -->

  <div id="queries" class="query_area contact-section">
    <div class="container">
      <div class="row justify-content-center">
          <div class="col-12">
              <h2 class="contact-title">Get in Touch</h2>
          </div>
          <div class="col-lg-8">
              <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                  <div class="row">
                      <div class="col-12">
                          <div class="form-group">
                              <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Enter Message"></textarea>
                          </div>
                      </div>
                      <div class="col-sm-6">
                          <div class="form-group">
                              <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                          </div>
                      </div>
                      <div class="col-sm-6">
                          <div class="form-group">
                              <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                          </div>
                      </div>
                      <div class="col-12">
                          <div class="form-group">
                              <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject">
                          </div>
                      </div>
                  </div>
                  <div class="form-group mt-3">
                      <button type="submit" class="button button-contactForm boxed-btn">Send</button>
                  </div>
              </form>
          </div>
          <div class="col-lg-3 offset-lg-1">
              <div class="media contact-info">
                  <span class="contact-info__icon"><i class="ti-home"></i></span>
                  <div class="media-body">
                      <h3>Buttonwood, California.</h3>
                      <p>Rosemead, CA 91770</p>
                  </div>
              </div>
              <div class="media contact-info">
                  <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                  <div class="media-body">
                      <h3>+1 253 565 2365</h3>
                      <p>Mon to Fri 9am to 6pm</p>
                  </div>
              </div>
              <div class="media contact-info">
                  <span class="contact-info__icon"><i class="ti-email"></i></span>
                  <div class="media-body">
                      <h3>support@colorlib.com</h3>
                      <p>Send us your query anytime!</p>
                  </div>
              </div>
          </div>
      </div>
    </div>
  </div>

  <!-- brand_area_start  -->
  <div class="brand_area black_bg">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <div class="section_title text-center mb-80">
                      <h4 class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">Sponsor Logos</h4>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-lg-12">
                  <div class="brand_wrap">
                      <div class="brand_active owl-carousel">
                          <div class="single_brand text-center">
                              <img src="{{ asset('assets/img/brand/1.png') }}" alt="">
                          </div>
                          <div class="single_brand text-center">
                              <img src="{{ asset('assets/img/brand/2.png') }}" alt="">
                          </div>
                          <div class="single_brand text-center">
                              <img src="{{ asset('assets/img/brand/3.png') }}" alt="">
                          </div>
                          <div class="single_brand text-center">
                              <img src="{{ asset('assets/img/brand/4.png') }}" alt="">
                          </div>
                          <div class="single_brand text-center">
                              <img src="{{ asset('assets/img/brand/5.png') }}" alt="">
                          </div>
                          <div class="single_brand text-center">
                              <img src="{{ asset('assets/img/brand/1.png') }}" alt="">
                          </div>
                          <div class="single_brand text-center">
                              <img src="{{ asset('assets/img/brand/2.png') }}" alt="">
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- brand_area_end  -->

@endsection
