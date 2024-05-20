@extends('layout.main')

@section('title','About Us')

@section('headerClass','blur')
@section('headerType','light')
@section('content')

<main class="main-bg">



        <!-- ==================== Start Header ==================== -->

        <header class="page-header section-padding">
            <div class="container pt-100">
                <div class="row">
                    <div class="col-lg-10">
                        <div class="caption">
                            <h2>Big or small, we partner with them all! From start-ups to Fortune 500, we’re the branding experts you can trust.</h2>
                            <div class="mt-30">
                                <a href="/">Home</a>
                                <span class="padding-rl-20">|</span>
                                <span class="main-color">About Us</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- ==================== End Header ==================== -->



        <!-- ==================== Start intro ==================== -->

        <section class="page-intro position-re">
            <div class="container-fluid rest">
                <div class="img fit-img">
                    <img src="{{asset('imgs/background/about-us-header.jpg')}}" alt="">
                </div>
            </div>
            <div class="container section-padding">
                <div class="row">
                    <div class="col-lg-5">
                        <h6 class="sub-title main-color">Our Vision</h6>
                    </div>
                    <div class="col-lg-7">
                        <div class="text">
                            <h4>Our Vision Is To Build Brands and Provide World-Class Experiences to Our Clients</h4>
                            <p>For over two decades, we’ve been at the forefront of transforming bold business ideas into exceptional digital products that drive success. Since 1998, we’ve helped countless businesses ideate, design, and develop data-driven digital solutions that are tailor-made to meet their unique challenges and goals.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="line-overlay">
                <svg viewBox="0 0 1728 1101" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M-43 773.821C160.86 662.526 451.312 637.01 610.111 733.104C768.91 829.197 932.595 1062.9 602.782 1098.75C272.969 1134.6 676.888 25.4306 1852 1"
                        style="stroke-dasharray: 3246.53, 0;"></path>
                </svg>
            </div>
        </section>

        <section class="page-intro position-re">
            <div class="container-fluid rest">
                <div class="img fit-img">
                    <img src="{{asset('imgs/background/about-us-header-2.jpg')}}" alt="">
                </div>
            </div>
            <div class="container section-padding">
                <div class="row">
                    <div class="col-lg-5">
                        <h6 class="sub-title main-color">About Company</h6>
                    </div>
                    <div class="col-lg-7">
                        <div class="text">
                            <h4>From Small Startups To Global Enterprises, Our Creative Team Has The Experience And Expertise To Craft A Brand Identity That Truly Stands Out.</h4>
                            <p>SpringRedux is dedicated to providing a worry-free website development experience for our clients. With our attention to detail and commitment to excellence, you can be confident that your website will meet every standard and exceed your expectations.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="line-overlay">
                <svg viewBox="0 0 1728 1101" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M-43 773.821C160.86 662.526 451.312 637.01 610.111 733.104C768.91 829.197 932.595 1062.9 602.782 1098.75C272.969 1134.6 676.888 25.4306 1852 1"
                        style="stroke-dasharray: 3246.53, 0;"></path>
                </svg>
            </div>
        </section>

        <!-- ==================== End intro ==================== -->



        <!-- ==================== Start numbers ==================== -->

        <section class="numbers section-padding pt-0">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="item d-flex align-items-center justify-content-center md-mb50">
                            <h2 class="fz-80 line-height-1">160+</h2>
                            <span class="sub-title opacity-7 ml-30">Satisfied <br> Clients</span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="item d-flex align-items-center justify-content-center md-mb50">
                            <h2 class="fz-80 line-height-1">80%</h2>
                            <span class="sub-title opacity-7 ml-30">Active <br> Engagement</span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="item d-flex align-items-center justify-content-center">
                            <h2 class="fz-80 line-height-1">54<span class="fz-50">+</span></h2>
                            <span class="sub-title opacity-7 ml-30">Success <br> Projects</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== End numbers ==================== -->



        <!-- ==================== Start brands ==================== -->

        <div class="clients-carso2">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-11">
                        <div class="swiper5" data-carousel="swiper" data-items="5" data-loop="true"
                             data-space="40">
                            <div id="content-carousel-container-unq-clients" class="swiper-container"
                                 data-swiper="container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="item">
                                            <div class="img icon-img-100">
                                                <a href="#0">
                                                    <img src="{{asset('imgs/brands/b1.png')}}" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="item">
                                            <div class="img icon-img-100">
                                                <a href="#0">
                                                    <img src="{{asset('imgs/brands/b2.png')}}" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="item">
                                            <div class="img icon-img-100">
                                                <a href="#0">
                                                    <img src="{{asset('imgs/brands/b3.png')}}" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="item">
                                            <div class="img icon-img-100">
                                                <a href="#0">
                                                    <img src="{{asset('imgs/brands/b4.png')}}" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ==================== End brands ==================== -->



        <!-- ==================== Start services tabs ==================== -->

        <section class="page-intro-cerv section-padding">
            <div class="container">
                <div class="row">
                    <div class="sec-head mb-80">
                        <h6 class="sub-title main-color mb-25">Core Values</h6>
                        <div class="bord pt-25 bord-thin-top d-flex align-items-center">
                            <h2 class="fw-600">Our Core Values That Drive Everything<span class="fw-200">We Do</span></h2>
                        </div>
                    </div>
                    <div class="col-lg-8 bord-thin-right rest">
                        <div class="row justify-content-end rest">
                            <div class="col-md-5 rest">
                                <div class="cont">
                                    <div class="mb-40">
                                        <h2 class="fz-100 numb-font">1.</h2>
                                    </div>
                                    <h4>Passion for Work</h4>
                                    <div class="text mt-30">
                                        <p>Being passionate about work means being enthusiastic and excited about it.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 rest">
                                <div class="img fit-img bord-thin-left">
                                    <img src="{{asset('imgs/intro/passion-of-work.jpg')}}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-end bord-thin-top rest">
                            <div class="col-md-5 rest">
                                <div class="img fit-img">
                                    <img src="{{asset('imgs/intro/creative-team-members.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="col-md-5 rest">
                                <div class="cont bord-thin-left">
                                    <div class="mb-40">
                                        <h2 class="fz-100 numb-font">2.</h2>
                                    </div>
                                    <h4>Creative Team Members</h4>
                                    <div class="text mt-30">
                                        <p>A creative team to design, develop and carry out campaigns.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 rest">
                        <div class="bord-thin-top mt-100 position-re">
                            <div class="row">
                                <div class="col-md-11">
                                    <div class="cont">
                                        <div class="mb-40">
                                            <h2 class="fz-100 numb-font">3.</h2>
                                        </div>
                                        <h4>Customer Satisfaction</h4>
                                        <div class="text mt-30">
                                            <p>Exceptional customer service to delight our customers.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-dots bg-img" data-background="{{asset('imgs/patterns/dots.png')}}"></div>
                        </div>
                    </div>
                    <div class="col-lg-8 bord-thin-right rest">
                        <div class="row justify-content-end rest">
                            <div class="col-md-5 rest">
                                <div class="cont">
                                    <div class="mb-40">
                                        <h2 class="fz-100 numb-font">4.</h2>
                                    </div>
                                    <h4>Simplicity Interface</h4>
                                    <div class="text mt-30">
                                        <p>Creating simple, easy-to-follow designs that get people from where they are to where they want to be quickly, efficiently, and effectively.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 rest">
                                <div class="img fit-img bord-thin-left">
                                    <img src="{{asset('imgs/intro/simplicity-interface.jpg')}}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-end bord-thin-top rest">
                            <div class="col-md-5 rest">
                                <div class="img fit-img">
                                    <img src="{{asset('imgs/intro/innovation-solutions.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="col-md-5 rest">
                                <div class="cont bord-thin-left">
                                    <div class="mb-40">
                                        <h2 class="fz-100 numb-font">5.</h2>
                                    </div>
                                    <h4>Innovation Solutions</h4>
                                    <div class="text mt-30">
                                        <p>We present innovative solutions by using either completely new concepts or finding new ways of utilizing existing ones.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 rest">
                        <div class="bord-thin-top mt-100 position-re">
                            <div class="row">
                                <div class="col-md-11">
                                    <div class="cont">
                                        <div class="mb-40">
                                            <h2 class="fz-100 numb-font">6.</h2>
                                        </div>
                                        <h4>Quality Products</h4>
                                        <div class="text mt-30">
                                            <p>Determined to provide quality products to satisfy our customers.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-dots bg-img" data-background="{{asset('imgs/patterns/dots.png')}}"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== End services tabs ==================== -->



        <!-- ==================== Start Testimonials ==================== -->

        <section class="testimonials">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="sec-head">
                            <h6 class="sub-title main-color mb-15">Testimonials</h6>
                            <h3 class="fw-600">What People <span class="fw-200">Say?</span></h3>
                        </div>
                    </div>
                    <div class="col-lg-8 position-re">
                        <div class="testim-swiper" data-carousel="swiper" data-loop="true" data-space="30">
                            <div id="content-carousel-container-unq-testim" class="swiper-container"
                                 data-swiper="container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="item">
                                            <div class="content">
                                                <div class="text">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="256.721"
                                                         height="208.227" viewBox="0 0 256.721 208.227"
                                                         class="qout-svg">
                                                        <path data-name="Path"
                                                              d="M-23.723-530.169v97.327H-121.05v-68.7q0-40.076,13.359-73.472T-62.845-639.9l36.259,28.625Q-63.8-570.244-68.57-530.169Zm158.395,0v97.327H37.345v-68.7q0-40.076,13.359-73.472T95.55-639.9l36.259,28.625Q94.6-570.244,89.825-530.169Z"
                                                              transform="translate(121.55 640.568)" fill="none"
                                                              stroke="#fff" stroke-width="1" opacity="0.322">
                                                        </path>
                                                    </svg>
                                                    <p class="fz-30">I have been hiring people in this
                                                        space for a number of years
                                                        and I have never seen this level of
                                                        professionalism. It really feels like you are
                                                        working with a team that can get the job
                                                        done.</p>
                                                </div>
                                                <div
                                                    class="info d-flex align-items-center pt-40 mt-40 bord-thin-top">
                                                    <div>
                                                        <div class="fit-img circle">
                                                            <img src="{{asset('imgs/testim/t1.jpg')}}" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="ml-20">
                                                        <h5>Adam Beckley</h5>
                                                        <span class="sub-title main-color">Founder &
                                                                    CEO</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="item">
                                            <div class="content">
                                                <div class="text">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="256.721"
                                                         height="208.227" viewBox="0 0 256.721 208.227"
                                                         class="qout-svg">
                                                        <path data-name="Path"
                                                              d="M-23.723-530.169v97.327H-121.05v-68.7q0-40.076,13.359-73.472T-62.845-639.9l36.259,28.625Q-63.8-570.244-68.57-530.169Zm158.395,0v97.327H37.345v-68.7q0-40.076,13.359-73.472T95.55-639.9l36.259,28.625Q94.6-570.244,89.825-530.169Z"
                                                              transform="translate(121.55 640.568)" fill="none"
                                                              stroke="#fff" stroke-width="1" opacity="0.322">
                                                        </path>
                                                    </svg>
                                                    <p class="fz-30">I have been hiring people in this
                                                        space for a number of years
                                                        and I have never seen this level of
                                                        professionalism. It really feels like you are
                                                        working with a team that can get the job
                                                        done.</p>
                                                </div>
                                                <div
                                                    class="info d-flex align-items-center pt-40 mt-40 bord-thin-top">
                                                    <div>
                                                        <div class="fit-img circle">
                                                            <img src="{{asset('imgs/testim/t2.jpg')}}" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="ml-20">
                                                        <h5>Adam Beckley</h5>
                                                        <span class="sub-title main-color">Founder &
                                                                    CEO</span>
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
            <div class="small-line">
                <div class="line-overlay">
                    <svg viewBox="0 0 1728 1101" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M-43 773.821C160.86 662.526 451.312 637.01 610.111 733.104C768.91 829.197 932.595 1062.9 602.782 1098.75C272.969 1134.6 676.888 25.4306 1852 1"
                            style="stroke-dasharray: 3246.53, 0;"></path>
                    </svg>
                </div>
            </div>
        </section>

        <!-- ==================== End Testimonials ==================== -->



        <!-- ==================== Start Blog ==================== -->

        <section class="blog-list-half section-padding sub-bg">
            <div class="container">
                <div class="sec-head mb-80">
                    <h6 class="sub-title main-color mb-25">Our Blog</h6>
                    <div class="bord pt-25 bord-thin-top d-flex align-items-center">
                        <h2 class="fw-600">Read Latest <span class="fw-200">News</span></h2>
                        <div class="ml-auto">
                            <a href="/blog" class="go-more">
                                <span class="text">View all posts</span>
                                <span class="icon ti-arrow-top-right"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="item main-bg md-mb50">
                            <div class="row rest">
                                <div class="col-lg-6 col-md-5 img rest">
                                    <img src="{{asset('imgs/blog/b/2.jpg')}}" alt="" class="img-post">
                                    <div class="author d-flex align-items-center">
                                        <div>
                                            <div class="fit-img icon-img-50 circle">
                                                <img src="{{asset('imgs/blog/author.png')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="ml-15 fz-14">
                                            <div><span class="opacity-7">Posted by</span><br>UI-ThemeZ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-7 cont valign">
                                    <div class="full-width">
                                        <div class="tags mb-15">
                                            <a href="/blog-list">Marketing</a>
                                        </div>
                                        <h5>
                                            <a href="/blog-details">Free advertising for your online
                                                business.</a>
                                        </h5>
                                        <span class="date fz-12 ls1 text-u opacity-7 mt-80">August 6,
                                                    2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="item main-bg">
                            <div class="row rest">
                                <div class="col-lg-6 col-md-5 img rest">
                                    <img src="{{asset('imgs/blog/b/3.jpg')}}" alt="" class="img-post">
                                    <div class="author d-flex align-items-center">
                                        <div>
                                            <div class="fit-img icon-img-50 circle">
                                                <img src="{{asset('imgs/blog/author.png')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="ml-15 fz-14">
                                            <div><span class="opacity-7">Posted by</span><br>UI-ThemeZ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-7 cont valign">
                                    <div class="full-width">
                                        <div class="tags mb-15">
                                            <a href="/blog-list">Marketing</a>
                                            <a href="/blog-list">Design</a>
                                        </div>
                                        <h5>
                                            <a href="/blog-details">Business meeting 2023 in San
                                                Francisco.</a>
                                        </h5>
                                        <span class="date fz-12 ls1 text-u opacity-7 mt-80">August 6,
                                                    2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== End Blog ==================== -->



    </main>

@endsection
