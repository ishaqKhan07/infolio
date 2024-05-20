<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>


    <link rel="icon" href="" type="image/x-icon" />
    <link rel="shortcut icon" href="{{asset('imgs/favicon.ico')}}">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Allerta+Stencil&display=swap" rel="stylesheet">

    <!-- Font -->
    <link rel="stylesheet" href="{{asset('css/satoshi.css')}}">

    <!-- Plugins -->
    <link rel="stylesheet" href="{{asset('css/plugins.css')}}">

    <!-- Core Style Css -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    @stack('css')

</head>
<body>

<!-- ==================== Start Loading ==================== -->

<div class="loader-wrap">
    <svg viewBox="0 0 1000 1000" preserveAspectRatio="none">
        <path id="svg" d="M0,1005S175,995,500,995s500,5,500,5V0H0Z"></path>
    </svg>

    <div class="loader-wrap-heading">
        <div class="load-text">
            <span>L</span>
            <span>o</span>
            <span>a</span>
            <span>d</span>
            <span>i</span>
            <span>n</span>
            <span>g</span>
        </div>
    </div>
</div>

<!-- ==================== End Loading ==================== -->

<div class="cursor"></div>

<div class="progress-wrap cursor-pointer">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>

@php
    use Illuminate\Support\Facades\View;
    $headerClass = View::yieldContent('headerClass', 'change');
    $headerType = View::yieldContent('headerType', 'dark');
    $pageType = View::yieldContent('pageType', 'default');
@endphp


<div id="smooth-wrapper">

    @include('includes.header',['headerClass'=> $headerClass,'headerType'=>$headerType])

    <div id="smooth-content">

        @yield('content')

        @include('includes.footer',['pageType'=> $pageType])

    </div>

</div>



<script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('js/jquery-migrate-3.4.0.min.js')}}"></script>
<script src="{{asset('js/plugins.js')}}"></script>
<script src="{{asset('js/gsap.min.js')}}"></script>
<script src="{{asset('js/ScrollSmoother.min.js')}}"></script>
<script src="{{asset('js/ScrollTrigger.min.js')}}"></script>
<script src="{{asset('js/scripts.js')}}"></script>


@stack('js')

</body>
</html>
