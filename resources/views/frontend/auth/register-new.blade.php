@extends('frontend.layouts.themes.app')

@section('title', __('Register'))

@section('content')

<!-- bradcam_area -->
<div class="bradcam_area">
<div class="single_bradcam  d-flex align-items-center bradcam_bg_1 overlay">
   <div class="container">
     <div class="row align-items-center justify-content-center">
        <div class="col-xl-12">
         <div class="bradcam_text text-center">
           <div class="shape_1 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
             <img src="img/shape/shape_1.svg" alt="">
           </div>
           <div class="shape_2 wow fadeInDown" data-wow-duration="1s" data-wow-delay=".3s">
             <img src="img/shape/shape_2.svg" alt="">
           </div>
             <h3 class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">Register</h3>
         </div>
        </div>
     </div>
   </div>
  </div>
</div>
<!-- bradcam_area end -->

<div class="whole-wrap">
  <div class="container box_1170">
    <div class="section-top-border">
      <div class="row">
        <div class="col-lg-8 col-md-8">
          @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
          <h3 class="mb-30"> @lang('Register')</h3>
          <form action="{{route('frontend.auth.register')}}" method="POST">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="input-group-icon mt-10">
                <div class="icon"><i class="fa fa-user" aria-hidden="true"></i></div>
              <input type="text" name="name" value="{{ old('name') }}" placeholder="{{ __('Name') }}" required autofocus autocomplete="name"
                class="single-input">
            </div>
            <div class="input-group-icon mt-10">
                <div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                <input type="email" name="email" id="email" class="single-input" placeholder="{{ __('E-mail Address') }}"
                value="{{ old('email') }}" required autocomplete="email" />
            </div>

            <div class="input-group-icon mt-10">
              <div class="icon"><i class="fa fa-lock" aria-hidden="true"></i></div>
                <input type="password" name="password" id="password" class="single-input" placeholder="{{ __('Password') }}" required
                autocomplete="new-password" />
                <code>[*Minimum 8 characters; at least 1 Capital and 1 Small Alphabet, 1 Number and 1 Special Character]</code>
            </div>

            <div class="input-group-icon mt-10">
              <div class="icon"><i class="fa fa-lock" aria-hidden="true"></i></div>
                <input type="password" name="password_confirmation" id="password_confirmation" class="single-input"
                placeholder="{{ __('Password Confirmation') }}" required autocomplete="new-password" />
            </div>

            <div class="input-group-icon mt-10">
              <div class="icon"><i class="fa fa-question-circle" aria-hidden="true"></i></div>
              <div class="form-select" id="default-select">
                    <select name="lead_source" id="lead_source">
                      <option value="">Where do you heard about us?</option>
                      <option value="social media">Social Media</option>
                      <option value="search engine">Search Engine</option>
                      <option value="newspaper">Newspaper</option>
                      <option value="friends">Friends</option>
                      <option value="others">Others</option>
                    </select>
              </div>
            </div>

            @if(config('boilerplate.access.captcha.registration'))
                <div class="row">
                    <div class="col">
                        @captcha
                        <input type="hidden" name="captcha_status" value="true"/>
                    </div><!--col-->
                </div><!--row-->
            @endif

            <div class="row"><br/></div>

            <div class="input-group-icon mt-10">
                <div class="col-md-6 offset-md-4">
                    <button class="btn genric-btn primary" type="submit">@lang('Register')</button>
                </div>
            </div>

            <div class="row"><br/></div>
            <div class="row"><br/></div>

            </div>
          </form>
        </div>
      </div>
    </div>

  </div>
</div>


@endsection
