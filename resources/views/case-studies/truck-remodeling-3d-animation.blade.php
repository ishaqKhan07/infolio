@extends('layout.main')

@section('title','Truck Remodeling 3D Animation | Case Studies')
@section('content')

    <main class="main-bg">

        <!-- ==================== Start Slider ==================== -->

        <header class="header-project3 bg-img d-flex align-items-end"
                data-background="{{asset('imgs/case-studies/2d-3d-animations/header.jpeg')}}" data-overlay-dark="5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="caption">
                            <h1>Truck Remodeling 3D Animation</h1>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- ==================== End Slider ==================== -->



        <!-- ==================== Start section ==================== -->

        <section class="mt-80">
            <div class="container">
                <div class="info mb-80 pb-20 bord-thin-bottom">
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="item mb-30">
                                <span class="opacity-8 mb-5">Category :</span>
                                <h6>3D Remodeling and Animation</h6>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="item mb-30">
                                <span class="opacity-8 mb-5">Client :</span>
                                <h6>Automobile</h6>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="item mb-30">
                                <span class="opacity-8 mb-5">Project :</span>
                                <h6>3D, 3D Animations</h6>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="item">
                                <span class="opacity-8 mb-5">Duration :</span>
                                <h6>12 Weeks</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== End section ==================== -->


        <!-- ==================== Start section ==================== -->

        <div class="pt-80 pb-100">
            <div class="container mb-80">
                <div class="img">
                    <img src="{{asset('imgs/case-studies/2d-3d-animations/truck-modeling-01.jpg')}}" alt="" class="radius-30">
                </div>
            </div>
            <div class="container mb-80">
                <div class="img">
                    <img src="{{asset('imgs/case-studies/2d-3d-animations/truck-modeling-02.jpeg')}}" alt="" class="radius-30">
                </div>
            </div>
            <div class="container mb-80">
                <div class="img">
                    <img src="{{asset('imgs/case-studies/2d-3d-animations/truck-modeling-03.jpeg')}}" alt="" class="radius-30">
                </div>
            </div>
        </div>

        <!-- ==================== End section ==================== -->

@endsection
@section('pageType','primary')
