@extends('layout.main')

@section('title','Fitness App | Case Studies')
@section('content')

    <main class="main-bg">

        <!-- ==================== Start Slider ==================== -->

        <header class="header-project3 bg-img d-flex align-items-end"
                data-background="{{asset('imgs/case-studies/fitness-app/header.png')}}" data-overlay-dark="5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="caption">
                            <h1>Fitness App</h1>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- ==================== End Slider ==================== -->



        <!-- ==================== Start section ==================== -->

        <section class="section-padding">
            <div class="container">
                <div class="info mb-80 pb-20 bord-thin-bottom">
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="item mb-30">
                                <span class="opacity-8 mb-5">Category :</span>
                                <h6>UX, UI and Product Design</h6>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="item mb-30">
                                <span class="opacity-8 mb-5">Client :</span>
                                <h6>Health and Fitness</h6>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="item mb-30">
                                <span class="opacity-8 mb-5">Project :</span>
                                <h6>Android & IOS App</h6>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="item">
                                <span class="opacity-8 mb-5">Duration :</span>
                                <h6>10 Weeks</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-11">
                        <div class="row">
                            <div class="col-lg-5">
                                <h4 class="mb-50">Project overview</h4>
                            </div>
                            <div class="col-lg-7">
                                <div class="text">
                                    <h5 class="mb-30 fw-400 line-height-40">Fitness app is a project of a popular fitness trainer that wanted to turn his fitness regime into a complete digital course that others can use for their fitness & health activities.<br><br>

                                        Our job was to create the UI/UX of the whole app including its activities from the splash screen to the exit screen for a smooth user flow across the app.</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== End section ==================== -->



        <!-- ==================== Start section ==================== -->

        <div class="img-column">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="img md-mb30">
                            <img src="{{asset('imgs/case-studies/fitness-app/fitness-app-01.jpeg')}}" alt="" class="radius-30">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="img">
                            <img src="{{asset('imgs/case-studies/fitness-app/fitness-app-02.jpeg')}}" alt="" class="radius-30">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ==================== End section ==================== -->



        <!-- ==================== Start section ==================== -->

        <section class="page-intro position-re">
            <div class="container pt-80">
                <div class="row">
                    <div class="col-lg-5">
                        <h4 class="mb-50">Requirements</h4>
                    </div>
                    <div class="col-lg-7">
                        <div class="text">
                            <h4>What Our Fitness Client Required?</h4>
                            <p>The team wanted this fitness app to be subscription-only. It meant that only users who had bought the subscription for the fitness app by paying for it, could sign-in to the app. So, we had to create a login screen that would be displayed for every user who opens the app. Since the app is already available on the app store, only users who have paid for the app can get access to the data available.</p>
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

        <section class="numbers pt-30 pb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="row">
                        <h5 class="pt-30">Total number of activity templates included:</h5>
                        <div class="col-lg-5 valign">
                            <div class="cont full-width md-mb30">
                                <div>
                                    <ul class="rest list-arrow mt-30 pt-30 bord-thin-top">
                                        <li>
                                                    <span class="icon">
                                                        <svg width="100%" height="100%" viewBox="0 0 9 8" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M7.71108 3.78684L8.22361 4.29813L7.71263 4.80992L4.64672 7.87832L4.13433 7.36688L6.87531 4.62335H1.11181H0.750039H0.388177L0.382812 0.718232H1.10645L1.11082 3.90005H6.80113L4.12591 1.22972L4.63689 0.718262L7.71108 3.78684Z"
                                                                  fill="#14cf93"></path>
                                                        </svg>
                                                    </span>
                                            <h6 class="inline fw-400">Splash screen – login</h6>
                                        </li>
                                        <li class="mt-10">
                                                    <span class="icon">
                                                        <svg width="100%" height="100%" viewBox="0 0 9 8" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M7.71108 3.78684L8.22361 4.29813L7.71263 4.80992L4.64672 7.87832L4.13433 7.36688L6.87531 4.62335H1.11181H0.750039H0.388177L0.382812 0.718232H1.10645L1.11082 3.90005H6.80113L4.12591 1.22972L4.63689 0.718262L7.71108 3.78684Z"
                                                                  fill="#14cf93"></path>
                                                        </svg>
                                                    </span>
                                            <h6 class="inline fw-400">Dashboard screen</h6>
                                        </li>
                                        <li class="mt-10">
                                                    <span class="icon">
                                                        <svg width="100%" height="100%" viewBox="0 0 9 8" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M7.71108 3.78684L8.22361 4.29813L7.71263 4.80992L4.64672 7.87832L4.13433 7.36688L6.87531 4.62335H1.11181H0.750039H0.388177L0.382812 0.718232H1.10645L1.11082 3.90005H6.80113L4.12591 1.22972L4.63689 0.718262L7.71108 3.78684Z"
                                                                  fill="#14cf93"></path>
                                                        </svg>
                                                    </span>
                                            <h6 class="inline fw-400">Exercise videos</h6>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 valign">
                            <div class="cont full-width md-mb30">
                                <div>
                                    <ul class="rest list-arrow mt-30 pt-30 bord-thin-top">
                                        <li>
                                                    <span class="icon">
                                                        <svg width="100%" height="100%" viewBox="0 0 9 8" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M7.71108 3.78684L8.22361 4.29813L7.71263 4.80992L4.64672 7.87832L4.13433 7.36688L6.87531 4.62335H1.11181H0.750039H0.388177L0.382812 0.718232H1.10645L1.11082 3.90005H6.80113L4.12591 1.22972L4.63689 0.718262L7.71108 3.78684Z"
                                                                  fill="#14cf93"></path>
                                                        </svg>
                                                    </span>
                                            <h6 class="inline fw-400">Exercise video detail</h6>
                                        </li>
                                        <li class="mt-10">
                                                    <span class="icon">
                                                        <svg width="100%" height="100%" viewBox="0 0 9 8" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M7.71108 3.78684L8.22361 4.29813L7.71263 4.80992L4.64672 7.87832L4.13433 7.36688L6.87531 4.62335H1.11181H0.750039H0.388177L0.382812 0.718232H1.10645L1.11082 3.90005H6.80113L4.12591 1.22972L4.63689 0.718262L7.71108 3.78684Z"
                                                                  fill="#14cf93"></path>
                                                        </svg>
                                                    </span>
                                            <h6 class="inline fw-400">Profile screen</h6>
                                        </li>
                                        <li class="mt-10">
                                                    <span class="icon">
                                                        <svg width="100%" height="100%" viewBox="0 0 9 8" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M7.71108 3.78684L8.22361 4.29813L7.71263 4.80992L4.64672 7.87832L4.13433 7.36688L6.87531 4.62335H1.11181H0.750039H0.388177L0.382812 0.718232H1.10645L1.11082 3.90005H6.80113L4.12591 1.22972L4.63689 0.718262L7.71108 3.78684Z"
                                                                  fill="#14cf93"></path>
                                                        </svg>
                                                    </span>
                                            <h6 class="inline fw-400">Goals screen</h6>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-6 pt-30">
                        <p>The above list shows the number of templates we will create for the fitness app. Since we are creating a single template for the exercise videos page, we will replicate the same template for all exercise videos. We will be having 5 exercises for each part of the body by the trainer. These will be displayed separately on the activity screen.<br><br>

                            Each exercise video detail page would include a timer, a graph, and a gif or a video (tutorial) of the exercise pose.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== End section ==================== -->


        <!-- ==================== Start section ==================== -->

        <div class="pt-80 pb-100">
            <div class="container">
                <div class="img">
                    <img src="{{asset('imgs/case-studies/fitness-app/fitness-app-02.jpg')}}" alt="" class="radius-30">
                </div>
            </div>
        </div>

        <!-- ==================== End section ==================== -->



        <!-- ==================== Start section ==================== -->

        <section class="page-intro position-re">
            <div class="container pt-80">
                <div class="row">
                    <div class="col-lg-5">
                        <h4 class="mb-50">Solution for Designing the Fitness App</h4>
                    </div>
                    <div class="col-lg-7">
                        <div class="text">
                            <p>We used Protopie to create the user interface for the mobile app. Our intention was to create three different activity screens at first. Once they were approved by the client, we would have replicated the same to the whole app.</p>

                            <div class="pb-30">
                                <ul class="rest list-arrow mt-30 pt-30 bord-thin-top">
                                    <li>
                                                <span class="icon">
                                                    <svg width="100%" height="100%" viewBox="0 0 9 8" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M7.71108 3.78684L8.22361 4.29813L7.71263 4.80992L4.64672 7.87832L4.13433 7.36688L6.87531 4.62335H1.11181H0.750039H0.388177L0.382812 0.718232H1.10645L1.11082 3.90005H6.80113L4.12591 1.22972L4.63689 0.718262L7.71108 3.78684Z"
                                                              fill="#14cf93"></path>
                                                    </svg>
                                                </span>
                                        <h6 class="inline fw-400">The first screen was the login screen</h6>
                                    </li>
                                    <li class="mt-10">
                                                <span class="icon">
                                                    <svg width="100%" height="100%" viewBox="0 0 9 8" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M7.71108 3.78684L8.22361 4.29813L7.71263 4.80992L4.64672 7.87832L4.13433 7.36688L6.87531 4.62335H1.11181H0.750039H0.388177L0.382812 0.718232H1.10645L1.11082 3.90005H6.80113L4.12591 1.22972L4.63689 0.718262L7.71108 3.78684Z"
                                                              fill="#14cf93"></path>
                                                    </svg>
                                                </span>
                                        <h6 class="inline fw-400">The dashboard screen with graph</h6>
                                    </li>
                                    <li class="mt-10">
                                                <span class="icon">
                                                    <svg width="100%" height="100%" viewBox="0 0 9 8" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M7.71108 3.78684L8.22361 4.29813L7.71263 4.80992L4.64672 7.87832L4.13433 7.36688L6.87531 4.62335H1.11181H0.750039H0.388177L0.382812 0.718232H1.10645L1.11082 3.90005H6.80113L4.12591 1.22972L4.63689 0.718262L7.71108 3.78684Z"
                                                              fill="#14cf93"></path>
                                                    </svg>
                                                </span>
                                        <h6 class="inline fw-400">Exercise video detail screen</h6>
                                    </li>
                                </ul>
                            </div>

                            <p>These were the only screens that we created for the whole app because the rest of the apps were to be based on the same template. Once the app was ready, It was time to get the app design approved by the client.</p>
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

        <!-- ==================== End section ==================== -->



        <!-- ==================== Start section ==================== -->

        <section class="page-intro position-re mt-50">
            <div class="container bord-thin-top">
                <div class="row justify-content-center">
                    <div class="col-lg-12 col-md-6 mt-50">
                        <h4>Product Market Fit</h4>
                        <p>We had to research the fitness industry to get an idea about what the app design should be. Fitness enthusiasts have now started using mobile apps. They download them from Google Play or Apple App Store.</p>
                    </div>
                    <div class="row">
                        <h5 class="pt-30">From our research, this is what we thought about the fitness audience.</h5>
                        <div class="col-lg-6 valign">
                            <div class="cont full-width md-mb30">
                                <div>
                                    <div class="pt-30">
                                        <h6>Audience</h6>
                                    </div>
                                    <ul class="rest list-arrow mt-30 pt-30 bord-thin-top">
                                        <li>
                                                    <span class="icon">
                                                        <svg width="100%" height="100%" viewBox="0 0 9 8" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M7.71108 3.78684L8.22361 4.29813L7.71263 4.80992L4.64672 7.87832L4.13433 7.36688L6.87531 4.62335H1.11181H0.750039H0.388177L0.382812 0.718232H1.10645L1.11082 3.90005H6.80113L4.12591 1.22972L4.63689 0.718262L7.71108 3.78684Z"
                                                                  fill="#14cf93"></path>
                                                        </svg>
                                                    </span>
                                            <h6 class="inline fw-400">People looking for fitness courses</h6>
                                        </li>
                                        <li class="mt-10">
                                                    <span class="icon">
                                                        <svg width="100%" height="100%" viewBox="0 0 9 8" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M7.71108 3.78684L8.22361 4.29813L7.71263 4.80992L4.64672 7.87832L4.13433 7.36688L6.87531 4.62335H1.11181H0.750039H0.388177L0.382812 0.718232H1.10645L1.11082 3.90005H6.80113L4.12591 1.22972L4.63689 0.718262L7.71108 3.78684Z"
                                                                  fill="#14cf93"></path>
                                                        </svg>
                                                    </span>
                                            <h6 class="inline fw-400">Professional fitness experts looking for a course outline</h6>
                                        </li>
                                        <li class="mt-10">
                                                    <span class="icon">
                                                        <svg width="100%" height="100%" viewBox="0 0 9 8" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M7.71108 3.78684L8.22361 4.29813L7.71263 4.80992L4.64672 7.87832L4.13433 7.36688L6.87531 4.62335H1.11181H0.750039H0.388177L0.382812 0.718232H1.10645L1.11082 3.90005H6.80113L4.12591 1.22972L4.63689 0.718262L7.71108 3.78684Z"
                                                                  fill="#14cf93"></path>
                                                        </svg>
                                                    </span>
                                            <h6 class="inline fw-400">Beginners starting their fitness workouts and looking for a coach</h6>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 valign">
                            <div class="cont full-width md-mb30">
                                <div>
                                    <div class="pt-30">
                                        <h6>Age</h6>
                                    </div>
                                    <ul class="rest list-arrow mt-30 pt-30 bord-thin-top">
                                        <li>
                                                    <span class="icon">
                                                        <svg width="100%" height="100%" viewBox="0 0 9 8" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M7.71108 3.78684L8.22361 4.29813L7.71263 4.80992L4.64672 7.87832L4.13433 7.36688L6.87531 4.62335H1.11181H0.750039H0.388177L0.382812 0.718232H1.10645L1.11082 3.90005H6.80113L4.12591 1.22972L4.63689 0.718262L7.71108 3.78684Z"
                                                                  fill="#14cf93"></path>
                                                        </svg>
                                                    </span>
                                            <h6 class="inline fw-400">15 to 20 = 20%</h6>
                                        </li>
                                        <li class="mt-10">
                                                    <span class="icon">
                                                        <svg width="100%" height="100%" viewBox="0 0 9 8" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M7.71108 3.78684L8.22361 4.29813L7.71263 4.80992L4.64672 7.87832L4.13433 7.36688L6.87531 4.62335H1.11181H0.750039H0.388177L0.382812 0.718232H1.10645L1.11082 3.90005H6.80113L4.12591 1.22972L4.63689 0.718262L7.71108 3.78684Z"
                                                                  fill="#14cf93"></path>
                                                        </svg>
                                                    </span>
                                            <h6 class="inline fw-400">20 to 40 = 60%</h6>
                                        </li>
                                        <li class="mt-10">
                                                    <span class="icon">
                                                        <svg width="100%" height="100%" viewBox="0 0 9 8" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M7.71108 3.78684L8.22361 4.29813L7.71263 4.80992L4.64672 7.87832L4.13433 7.36688L6.87531 4.62335H1.11181H0.750039H0.388177L0.382812 0.718232H1.10645L1.11082 3.90005H6.80113L4.12591 1.22972L4.63689 0.718262L7.71108 3.78684Z"
                                                                  fill="#14cf93"></path>
                                                        </svg>
                                                    </span>
                                            <h6 class="inline fw-400">40 to 50 = 20%</h6>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 valign">
                            <div class="cont full-width md-mb30">
                                <div>
                                    <div class="pt-30">
                                        <h6>Occupation</h6>
                                    </div>
                                    <ul class="rest list-arrow mt-30 pt-30 bord-thin-top">
                                        <li>
                                                    <span class="icon">
                                                        <svg width="100%" height="100%" viewBox="0 0 9 8" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M7.71108 3.78684L8.22361 4.29813L7.71263 4.80992L4.64672 7.87832L4.13433 7.36688L6.87531 4.62335H1.11181H0.750039H0.388177L0.382812 0.718232H1.10645L1.11082 3.90005H6.80113L4.12591 1.22972L4.63689 0.718262L7.71108 3.78684Z"
                                                                  fill="#14cf93"></path>
                                                        </svg>
                                                    </span>
                                            <h6 class="inline fw-400">Professionals – 30%</h6>
                                        </li>
                                        <li class="mt-10">
                                                    <span class="icon">
                                                        <svg width="100%" height="100%" viewBox="0 0 9 8" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M7.71108 3.78684L8.22361 4.29813L7.71263 4.80992L4.64672 7.87832L4.13433 7.36688L6.87531 4.62335H1.11181H0.750039H0.388177L0.382812 0.718232H1.10645L1.11082 3.90005H6.80113L4.12591 1.22972L4.63689 0.718262L7.71108 3.78684Z"
                                                                  fill="#14cf93"></path>
                                                        </svg>
                                                    </span>
                                            <h6 class="inline fw-400">Beginners – 50%</h6>
                                        </li>
                                        <li class="mt-10">
                                                    <span class="icon">
                                                        <svg width="100%" height="100%" viewBox="0 0 9 8" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M7.71108 3.78684L8.22361 4.29813L7.71263 4.80992L4.64672 7.87832L4.13433 7.36688L6.87531 4.62335H1.11181H0.750039H0.388177L0.382812 0.718232H1.10645L1.11082 3.90005H6.80113L4.12591 1.22972L4.63689 0.718262L7.71108 3.78684Z"
                                                                  fill="#14cf93"></path>
                                                        </svg>
                                                    </span>
                                            <h6 class="inline fw-400">Old-age folks – 20%</h6>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 valign">
                            <div class="cont full-width md-mb30">
                                <div>
                                    <div class="pt-30">
                                        <h6>Tools & Technology</h6>
                                    </div>
                                    <ul class="rest list-arrow mt-30 pt-30 bord-thin-top">
                                        <li>
                                                    <span class="icon">
                                                        <svg width="100%" height="100%" viewBox="0 0 9 8" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M7.71108 3.78684L8.22361 4.29813L7.71263 4.80992L4.64672 7.87832L4.13433 7.36688L6.87531 4.62335H1.11181H0.750039H0.388177L0.382812 0.718232H1.10645L1.11082 3.90005H6.80113L4.12591 1.22972L4.63689 0.718262L7.71108 3.78684Z"
                                                                  fill="#14cf93"></path>
                                                        </svg>
                                                    </span>
                                            <h6 class="inline fw-400">Adobe XD</h6>
                                        </li>
                                        <li class="mt-10">
                                                    <span class="icon">
                                                        <svg width="100%" height="100%" viewBox="0 0 9 8" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M7.71108 3.78684L8.22361 4.29813L7.71263 4.80992L4.64672 7.87832L4.13433 7.36688L6.87531 4.62335H1.11181H0.750039H0.388177L0.382812 0.718232H1.10645L1.11082 3.90005H6.80113L4.12591 1.22972L4.63689 0.718262L7.71108 3.78684Z"
                                                                  fill="#14cf93"></path>
                                                        </svg>
                                                    </span>
                                            <h6 class="inline fw-400">Adobe Photoshop</h6>
                                        </li>
                                        <li class="mt-10">
                                                    <span class="icon">
                                                        <svg width="100%" height="100%" viewBox="0 0 9 8" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M7.71108 3.78684L8.22361 4.29813L7.71263 4.80992L4.64672 7.87832L4.13433 7.36688L6.87531 4.62335H1.11181H0.750039H0.388177L0.382812 0.718232H1.10645L1.11082 3.90005H6.80113L4.12591 1.22972L4.63689 0.718262L7.71108 3.78684Z"
                                                                  fill="#14cf93"></path>
                                                        </svg>
                                                    </span>
                                            <h6 class="inline fw-400">Protopie</h6>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <!-- ==================== End section ==================== -->



        <!-- ==================== Start section ==================== -->

        <section class="page-intro position-re mt-50 pb-100">
            <div class="container bord-thin-top">
                <div class="row justify-content-center">
                    <div class="col-lg-12 col-md-6 mt-50">
                        <h4>Result: Single Template, Attractive Theme</h4>
                        <p>As you can see in the above screenshots, the app has a simple UI, a smooth user-journey, and everything of importance for the user is available on the dashboard screen.<br><br>

                            We have also added analytics on the dashboard that show his daily usage patterns and improves his morale.<br><br>

                            Moreover, we have provided a section on top of the dashboard screen called ‘Goals’. The reason for this is simple: User doesn’t have to move to the ‘Exercise’ activity to know what exercises are waiting for him/her.<br><br>

                            This decreases the number of steps, and the time that would be spent for the same. This small change of the ‘Goals’ activity has made the app more attractive, reduced overall bounce rate, and ensured that users do their exercises regularly.<br><br>

                            Further, we also have added notification reminders that will be displayed on the user’s screen everyday to help them remember their exercise routines. This increases retention and engagement on the app even more.</p>
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

        <!-- ==================== End section ==================== -->



        <!-- ==================== Start section ==================== -->

        <div class="img-column">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mb-40">
                        <div class="img md-mb30">
                            <img src="{{asset('imgs/case-studies/fitness-app/fitness-app-03.jpeg')}}" alt="" class="radius-30">
                        </div>
                    </div>
                    <div class="col-lg-6 mb-40">
                        <div class="img">
                            <img src="{{asset('imgs/case-studies/fitness-app/fitness-app-04.jpeg')}}" alt="" class="radius-30">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="img-column">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mb-40">
                        <div class="img md-mb30">
                            <img src="{{asset('imgs/case-studies/fitness-app/fitness-app-05.jpeg')}}" alt="" class="radius-30">
                        </div>
                    </div>
                    <div class="col-lg-6 mb-40">
                        <div class="img">
                            <img src="{{asset('imgs/case-studies/fitness-app/fitness-app-06.jpeg')}}" alt="" class="radius-30">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ==================== End section ==================== -->

@endsection
@section('pageType','primary')
