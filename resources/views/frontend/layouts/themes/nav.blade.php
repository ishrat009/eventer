<!-- header-start -->
<header>
    <div class="header-area ">
        <div id="sticky-header" class="main-header-area">
            <div class="container">
                <div class="header_bottom_border">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-3">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="img/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="{{url('/')}}">home</a></li>
                                        <li><a href="{{url('/')}}#performers">Performers</a></li>
                                        <li><a href="{{url('/')}}#queries">Queries?</a></li>
                                        <li class="generic-btn primary"><a href="{{url('/login')}}">Login</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                            <div class="buy_tkt">
                                  @guest
                                  <div class="book_btn d-none d-lg-block">
                                    <a href="{{url('/register')}}">Register Now</a>
                                  </div>
                                  @else
                                  <div class="genric-btn success d-none d-lg-block">
                                    <a href="{{url('/dashboard')}}">Back to Dashboard</a>
                                  </div>
                                  @endif
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>
<!-- header-end -->
