@extends('layout.main')

@section('title','Case Studies')
@section('content')

    <main class="main-bg">



        <!-- ==================== Start Header ==================== -->

        <header class="page-header bg-img section-padding" data-background="imgs/header/bg1.jpg"
                data-overlay-dark="9">
            <div class="container pt-100">
                <div class="text-center">
                    <h1>Portfolio Masonry.</h1>
                    <div class="mt-15">
                        <a href="/">Home</a>
                        <span class="padding-rl-20">|</span>
                        <span class="main-color">Portfolio</span>
                    </div>
                </div>
            </div>
        </header>

        <!-- ==================== End Header ==================== -->



        <!-- ==================== Start Portfolio ==================== -->

        <section class="work-minimal section-padding sub-bg">
            <div class="container-xxl">
                <div class="row">
                    <!-- filter links -->
                    <div class="filtering col-12 mb-50 text-center">
                        <div class="filter">
                            <span class="text">Filter By :</span>
                            <span data-filter='*' class='active'>Show All</span>
                            <span data-filter='.ux-ui-design'>UX-UI Design</span>
                            <span data-filter='.e-commerce'>E-Commerce Development</span>
                            <span data-filter='.logo-branding'>Logo and Branding</span>
                            <span data-filter='.mobile-app-development'>Mobile App Development</span>
                            <span data-filter='.website-development'>Website Development</span>
                            <span data-filter='.custom-software-development'>Custom Software Development</span>
                        </div>
                    </div>
                </div>
                <div class="gallery2 row sm-marg">
                    <div class="col-lg-6 items design ux-ui-design">
                        <div class="item mt-10">
                            <div class="img">
                                <img src="{{asset('imgs/case-studies/scaleup-fitness.jpg')}}" alt="">
                                <div class="cont inline d-flex align-items-center">
                                    <div>
                                        <h5>
                                            <a href="/case-studies/scale-up-fitness">Scaleup Fitness</a>
                                        </h5>
                                    </div>
                                    <div class="ml-auto">
                                        <p>
                                            <a href="/case-studies/scale-up-fitness">Logo and Branding</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 items width2 brand ux-ui-design">
                        <div class="item mt-10">
                            <div class="img">
                                <img src="{{asset('imgs/case-studies/zip-mar.jpg')}}" alt="">
                                <div class="cont">
                                    <h5>
                                        <a href="/case-studies/zip-mar">Zip Mar</a>
                                    </h5>
                                    <p>
                                        <a href="/case-studies/zip-mar">UX, UI Design, App Development</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 items width2 ux-ui-design e-commerce">
                        <div class="item mt-10">
                            <div class="img">
                                <img src="{{asset('imgs/case-studies/ishop.jpg')}}" alt="">
                                <div class="cont">
                                    <h5>
                                        <a href="/case-studies/i-shop">iShop</a>
                                    </h5>
                                    <p>
                                        <a href="/case-studies/i-shop">UX, UI Design, App Development</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-3 items width2 brand ux-ui-design">
                        <div class="item mt-10">
                            <div class="img">
                                <img src="{{asset('imgs/case-studies/visa-enablers.jpg')}}" alt="">
                                <div class="cont">
                                    <h5>
                                        <a href="/case-studies/visa-enablers">Visa Enablers</a>
                                    </h5>
                                    <p>
                                        <a href="/case-studies/visa-enablers">UX, UI Design, App Development</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 items width2 ux-ui-design e-commerce">
                        <div class="item mt-10">
                            <div class="img">
                                <img src="{{asset('imgs/case-studies/2d-3d.jpg')}}" alt="">
                                <div class="cont">
                                    <h5>
                                        <a href="/case-studies/truck-remodeling-3d-animation">Truck Remodeling</a>
                                    </h5>
                                    <p>
                                        <a href="/case-studies/truck-remodeling-3d-animation">2d and 3d Animations</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 items design ux-ui-design">
                        <div class="item mt-10">
                            <div class="img">
                                <img src="{{asset('imgs/case-studies/build-link.jpg')}}" alt="">
                                <div class="cont inline d-flex align-items-center">
                                    <div>
                                        <h5>
                                            <a href="/case-studies/build-link">Build Link</a>
                                        </h5>
                                    </div>
                                    <div class="ml-auto">
                                        <p>
                                            <a href="/case-studies/build-link">UX, UI Design, Custom Software Development, Website Development</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 items design ux-ui-design">
                        <div class="item mt-10">
                            <div class="img">
                                <img src="{{asset('imgs/case-studies/fitness-app.jpg')}}" alt="">
                                <div class="cont inline d-flex align-items-center">
                                    <div>
                                        <h5>
                                            <a href="/case-studies/fitness">Fitness App</a>
                                        </h5>
                                    </div>
                                    <div class="ml-auto">
                                        <p>
                                            <a href="/case-studies/fitness">UX, UI Design</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 items design ux-ui-design">
                        <div class="item mt-10">
                            <div class="img">
                                <img src="{{asset('imgs/case-studies/xoom-md.jpg')}}" alt="">
                                <div class="cont inline d-flex align-items-center">
                                    <div>
                                        <h5>
                                            <a href="/case-studies/xoom-md">Xoom MD</a>
                                        </h5>
                                    </div>
                                    <div class="ml-auto">
                                        <p>
                                            <a href="/case-studies/xoom-md">UX, User Research</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>

        <!-- ==================== End Portfolio ==================== -->



    </main>

@endsection

