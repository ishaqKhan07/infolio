@extends('layout.main')

@section('title','Our Services')
@section('content')


<main class="main-bg">

        <!-- ==================== Start Header ==================== -->

        <header class="page-header bg-img section-padding" data-background="{{asset('imgs/header/b5.jpg')}}"
                data-overlay-dark="9">
            <div class="container pt-100">
                <div class="text-center">
                    <h1 class="fz-100 text-u">Services.</h1>
                    <div class="mt-15">
                        <a href="/">Home</a>
                        <span class="padding-rl-20">|</span>
                        <span class="main-color">Services</span>
                    </div>
                </div>
            </div>
        </header>

        <!-- ==================== End Header ==================== -->

        <!-- ==================== Start Services ==================== -->

        <section class="services  pb-100 pt-100">
            <div class="container">
                <div class="sec-head mb-80">
                    <h6 class="sub-title main-color mb-25">Our Specialize</h6>
                    <div class="bord pt-25 bord-thin-top d-flex align-items-center">
                        <h2 class="fw-600 text-u ls1">What We <span class="fw-200">Offer</span></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="item-box2 mb-30">
                            <div class="icon mb-25">
                                <img src="{{asset('imgs/serv-icons/ui-ux-design-2.png')}}" alt="">
                            </div>
                            <h5 class="mb-15">UX, UI & Product Design</h5>
                            <p>Our UX/UI services are designed to help businesses create intuitive, engaging digital experiences that keep users coming back for more.</p>
                            <a href="/services/ux-ui-product-design" class="rmore">
                                <div class="arrow">
                                    <img src="{{asset('imgs/arrow-right.png')}}" alt="" class="icon-img-20">
                                </div>
                                <div class="shap-left-top">
                                    <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg"
                                         class="w-11 h-11">
                                        <path
                                            d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z"
                                            fill="#fff"></path>
                                    </svg>
                                </div>
                                <div class="shap-right-bottom">
                                    <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg"
                                         class="w-11 h-11">
                                        <path
                                            d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z"
                                            fill="#fff"></path>
                                    </svg>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="item-box2 mb-30">
                            <div class="icon mb-25">
                                <img src="{{asset('imgs/serv-icons/user-research-2.png')}}" alt="">
                            </div>
                            <h5 class="mb-15">User Research</h5>
                            <p>Our user research services help businesses gain valuable insights into their customers' needs, preferences, and behavior, enabling them to create more effective products and services.</p>
                            <a href="/services/user-research" class="rmore">
                                <div class="arrow">
                                    <img src="{{asset('imgs/arrow-right.png')}}" alt="" class="icon-img-20">
                                </div>
                                <div class="shap-left-top">
                                    <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg"
                                         class="w-11 h-11">
                                        <path
                                            d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z"
                                            fill="#fff"></path>
                                    </svg>
                                </div>
                                <div class="shap-right-bottom">
                                    <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg"
                                         class="w-11 h-11">
                                        <path
                                            d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z"
                                            fill="#fff"></path>
                                    </svg>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="item-box2 mb-30">
                            <div class="icon mb-25">
                                <img src="{{asset('imgs/serv-icons/website-development-2.png')}}" alt="">
                            </div>
                            <h5 class="mb-15">Website Development</h5>
                            <p>The services that offer unparalleled brand awareness to your business. We give you a new limelight that reinvigorates your brand.</p>
                            <a href="/services/website-development" class="rmore">
                                <div class="arrow">
                                    <img src="{{asset('imgs/arrow-right.png')}}" alt="" class="icon-img-20">
                                </div>
                                <div class="shap-left-top">
                                    <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg"
                                         class="w-11 h-11">
                                        <path
                                            d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z"
                                            fill="#fff"></path>
                                    </svg>
                                </div>
                                <div class="shap-right-bottom">
                                    <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg"
                                         class="w-11 h-11">
                                        <path
                                            d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z"
                                            fill="#fff"></path>
                                    </svg>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="item-box2 mb-30">
                            <div class="icon mb-25">
                                <img src="{{asset('imgs/serv-icons/e-commerce-2.png')}}" alt="">
                            </div>
                            <h5 class="mb-15">E-Commerce Development</h5>
                            <p>Our e-commerce development services are designed to help businesses build robust, user-friendly online stores that drive sales and revenues.</p>
                            <a href="/services/e-commerce-development" class="rmore">
                                <div class="arrow">
                                    <img src="{{asset('imgs/arrow-right.png')}}" alt="" class="icon-img-20">
                                </div>
                                <div class="shap-left-top">
                                    <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg"
                                         class="w-11 h-11">
                                        <path
                                            d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z"
                                            fill="#fff"></path>
                                    </svg>
                                </div>
                                <div class="shap-right-bottom">
                                    <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg"
                                         class="w-11 h-11">
                                        <path
                                            d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z"
                                            fill="#fff"></path>
                                    </svg>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="item-box2 mb-30">
                            <div class="icon mb-25">
                                <img src="{{asset('imgs/serv-icons/mobile-development-2.png')}}" alt="">
                            </div>
                            <h5 class="mb-15">Mobile App Development</h5>
                            <p>We provide end-to-end app development services that empower businesses to harness the power of mobile technology to drive growth and innovation.</p>
                            <a href="/services/mobile-app-development" class="rmore">
                                <div class="arrow">
                                    <img src="{{asset('imgs/arrow-right.png')}}" alt="" class="icon-img-20">
                                </div>
                                <div class="shap-left-top">
                                    <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg"
                                         class="w-11 h-11">
                                        <path
                                            d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z"
                                            fill="#fff"></path>
                                    </svg>
                                </div>
                                <div class="shap-right-bottom">
                                    <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg"
                                         class="w-11 h-11">
                                        <path
                                            d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z"
                                            fill="#fff"></path>
                                    </svg>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="item-box2 mb-30">
                            <div class="icon mb-25">
                                <img src="{{asset('imgs/serv-icons/custom-software-development-2.png')}}" alt="">
                            </div>
                            <h5 class="mb-15">Custom Software Development</h5>
                            <p>We work closely with clients to understand their specific requirements and develop custom software that streamlines processes, improves productivity, and delivers measurable results.</p>
                            <a href="/services/custom-software-development" class="rmore">
                                <div class="arrow">
                                    <img src="{{asset('imgs/arrow-right.png')}}" alt="" class="icon-img-20">
                                </div>
                                <div class="shap-left-top">
                                    <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg"
                                         class="w-11 h-11">
                                        <path
                                            d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z"
                                            fill="#fff"></path>
                                    </svg>
                                </div>
                                <div class="shap-right-bottom">
                                    <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg"
                                         class="w-11 h-11">
                                        <path
                                            d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z"
                                            fill="#fff"></path>
                                    </svg>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="item-box2 mb-30">
                            <div class="icon mb-25">
                                <img src="{{asset('imgs/serv-icons/architect-solutions-2.png')}}" alt="">
                            </div>
                            <h5 class="mb-15">Architect Solutions</h5>
                            <p>In a rapidly changing technology environment, organizations face the need to transform their processes and systems to meet emerging business requirements.</p>
                            <a href="/services/architect-solutions" class="rmore">
                                <div class="arrow">
                                    <img src="{{asset('imgs/arrow-right.png')}}" alt="" class="icon-img-20">
                                </div>
                                <div class="shap-left-top">
                                    <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg"
                                         class="w-11 h-11">
                                        <path
                                            d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z"
                                            fill="#fff"></path>
                                    </svg>
                                </div>
                                <div class="shap-right-bottom">
                                    <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg"
                                         class="w-11 h-11">
                                        <path
                                            d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z"
                                            fill="#fff"></path>
                                    </svg>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="item-box2 mb-30">
                            <div class="icon mb-25">
                                <img src="{{asset('imgs/serv-icons/staff-strengthening-2.png')}}" alt="">
                            </div>
                            <h5 class="mb-15">Staff Strengthening</h5>
                            <p>Our staff strengthening services are designed to help businesses build a highly skilled and motivated workforce that drives success and growth.</p>
                            <a href="/services/staff-strengthening" class="rmore">
                                <div class="arrow">
                                    <img src="{{asset('imgs/arrow-right.png')}}" alt="" class="icon-img-20">
                                </div>
                                <div class="shap-left-top">
                                    <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg"
                                         class="w-11 h-11">
                                        <path
                                            d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z"
                                            fill="#fff"></path>
                                    </svg>
                                </div>
                                <div class="shap-right-bottom">
                                    <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg"
                                         class="w-11 h-11">
                                        <path
                                            d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z"
                                            fill="#fff"></path>
                                    </svg>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="item-box2">
                            <div class="icon mb-25">
                                <img src="{{asset('imgs/serv-icons/2d-3d-animations-2.png')}}" alt="">
                            </div>
                            <h5 class="mb-15">2D & 3D Animations</h5>
                            <p>We can help you create stunning visuals for your project, and we can do it quickly and efficiently. We have a team of highly skilled artists who are experienced in creating high-quality animations.</p>
                            <a href="/services/2d-and-3d-animations" class="rmore">
                                <div class="arrow">
                                    <img src="{{asset('imgs/arrow-right.png')}}" alt="" class="icon-img-20">
                                </div>
                                <div class="shap-left-top">
                                    <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg"
                                         class="w-11 h-11">
                                        <path
                                            d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z"
                                            fill="#fff"></path>
                                    </svg>
                                </div>
                                <div class="shap-right-bottom">
                                    <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg"
                                         class="w-11 h-11">
                                        <path
                                            d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z"
                                            fill="#fff"></path>
                                    </svg>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- ==================== End Services ==================== -->

        <!-- ==================== Start Marquee ==================== -->

        <section class="pb-100">
            <div class="main-marq xlrg o-hidden">
                <div class="slide-har st1">
                    <div class="box">
                        <div class="item">
                            <h4 class="d-flex align-items-center"><span>Amazing
                                            Design</span>
                                <span class="fz-50 ml-50 stroke icon">*</span>
                            </h4>
                        </div>
                        <div class="item">
                            <h4 class="d-flex align-items-center"><span>Amazing
                                            Design</span>
                                <span class="fz-50 ml-50 stroke icon">*</span>
                            </h4>
                        </div>
                        <div class="item">
                            <h4 class="d-flex align-items-center"><span>Amazing
                                            Design</span>
                                <span class="fz-50 ml-50 stroke icon">*</span>
                            </h4>
                        </div>
                        <div class="item">
                            <h4 class="d-flex align-items-center"><span>Amazing
                                            Design</span>
                                <span class="fz-50 ml-50 stroke icon">*</span>
                            </h4>
                        </div>
                        <div class="item">
                            <h4 class="d-flex align-items-center"><span>Amazing
                                            Design</span>
                                <span class="fz-50 ml-50 stroke icon">*</span>
                            </h4>
                        </div>
                    </div>
                    <div class="box">
                        <div class="item">
                            <h4 class="d-flex align-items-center"><span>Amazing
                                            Design</span>
                                <span class="fz-50 ml-50 stroke icon">*</span>
                            </h4>
                        </div>
                        <div class="item">
                            <h4 class="d-flex align-items-center"><span>Amazing
                                            Design</span>
                                <span class="fz-50 ml-50 stroke icon">*</span>
                            </h4>
                        </div>
                        <div class="item">
                            <h4 class="d-flex align-items-center"><span>Amazing
                                            Design</span>
                                <span class="fz-50 ml-50 stroke icon">*</span>
                            </h4>
                        </div>
                        <div class="item">
                            <h4 class="d-flex align-items-center"><span>Amazing
                                            Design</span>
                                <span class="fz-50 ml-50 stroke icon">*</span>
                            </h4>
                        </div>
                        <div class="item">
                            <h4 class="d-flex align-items-center"><span>Amazing
                                            Design</span>
                                <span class="fz-50 ml-50 stroke icon">*</span>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== End Marquee ==================== -->

        <!-- ==================== Start Testimonials ==================== -->

        <section class="testimonials-crev section-padding pb-0 bg-img"
                 data-background="{{asset('imgs/background/2.jpg')}}">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-lg-10">
                        <div class="sec-head mb-80">
                            <h2 class="fw-600 fz-70">What <br> People <span class="fw-200">Say?</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-11 position-re">
                        <div class="testim-swiper testim1" data-carousel="swiper" data-loop="true" data-space="30">
                            <div id="content-carousel-container-unq-testim" class="swiper-container"
                                 data-swiper="container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="item d-flex align-items-center">
                                            <div>
                                                <div class="fit-img circle">
                                                    <img src="{{asset('imgs/testim/t1.jpg')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="content ml-100">
                                                <div class="text">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="256.721"
                                                         height="208.227" viewBox="0 0 256.721 208.227" id="null"
                                                         class="qout-svg">
                                                        <path id="Path_76570" data-name="Path 76570"
                                                              d="M-23.723-530.169v97.327H-121.05v-68.7q0-40.076,13.359-73.472T-62.845-639.9l36.259,28.625Q-63.8-570.244-68.57-530.169Zm158.395,0v97.327H37.345v-68.7q0-40.076,13.359-73.472T95.55-639.9l36.259,28.625Q94.6-570.244,89.825-530.169Z"
                                                              transform="translate(121.55 640.568)" fill="none"
                                                              stroke="#1a1a1a" stroke-width="1" opacity="0.322">
                                                        </path>
                                                    </svg>
                                                    <h4>I have been hiring people in this
                                                        space for a number of years
                                                        and I have never seen this level of
                                                        professionalism. It really feels like you are
                                                        working with a team that can get the job
                                                        done.</h4>
                                                </div>
                                                <div
                                                    class="info d-flex align-items-center pt-40 mt-40 bord-thin-top">
                                                    <div>
                                                        <h5>Adam Beckley</h5>
                                                        <span class="sub-title main-color">Envato Client</span>
                                                    </div>
                                                    <div class="ml-auto">
                                                        <div class="rate-stars fz-14">
                                                                    <span class="rate main-color">
                                                                        <i class="fas fa-star"></i>
                                                                        <i class="fas fa-star"></i>
                                                                        <i class="fas fa-star"></i>
                                                                        <i class="fas fa-star"></i>
                                                                        <i class="fas fa-star"></i>
                                                                    </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-arrow-control control-abslout">
                            <div class="swiper-button-prev">
                                <span class="ti-arrow-left"></span>
                            </div>
                            <div class="swiper-button-next">
                                <span class="ti-arrow-right"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== End Testimonials ==================== -->

@endsection
@section('pageType','primary')
