<nav class="navbar navbar-expand-lg bord {{$headerClass}}">
    <div class="container">

        <!-- Logo -->
        <a class="logo icon-img-100" href="/">
            <img src="{{ asset($headerType == 'light' ? '/imgs/logo-dark.png' : '/imgs/logo-light.png') }}" alt="logo">
        </a>

        <!-- navbar links -->
        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/"><span class="rolling-text">Home</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about-us"><span class="rolling-text">About Us</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="/services" role="button"
                       aria-haspopup="true" aria-expanded="false"><span class="rolling-text">Services</span></a>
                    <div class="dropdown-menu mega-menu">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="clumn mb-80">
                                        <div class="title">
                                            <h6 class="sub-title ls1 pb-20 bord-thin-bottom">Design</h6>
                                        </div>
                                        <div class="links row">
                                            <div class="col-lg-4">
                                                <a class="dropdown-item" href="/services/ux-ui-product-design">UX, UI & Product Design</a>
                                            </div>
                                            <div class="col-lg-4">
                                                <a class="dropdown-item" href="/services/user-research">User Research</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="clumn">
                                        <div class="title">
                                            <h6 class="sub-title ls1 pb-20 bord-thin-bottom">Development</h6>
                                        </div>
                                        <div class="links row">
                                            <div class="col-lg-4">
                                                <a class="dropdown-item" href="/services/website-development">Website Development</a>
                                                <a class="dropdown-item" href="/services/e-commerce-development">E-Commerce Development</a>
                                            </div>
                                            <div class="col-lg-4">
                                                <a class="dropdown-item" href="/services/mobile-app-development">Mobile App Development</a>
                                                <a class="dropdown-item"
                                                   href="/services/custom-software-development">Custom Software Development</a>
                                            </div>
                                            <div class="col-lg-4">
                                                <a class="dropdown-item"
                                                   href="/services/architect-solutions">Architect Solutions</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="clumn">
                                        <div class="title">
                                            <h6 class="sub-title ls1 pb-20 bord-thin-bottom">Other</h6>
                                        </div>
                                        <div class="links row">
                                            <div class="col-lg-4">
                                                <a class="dropdown-item" href="/services/2d-and-3d-animations">2D & 3D Animations</a>
                                            </div>
                                            <div class="col-lg-4">
                                                <a class="dropdown-item" href="/services/staff-strengthening">Staff Strengthening</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/case-studies"><span class="rolling-text">Case Studies</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/blog"><span class="rolling-text">Blog</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact-us"><span class="rolling-text">Contact Us</span></a>
                </li>
            </ul>
        </div>
        <div class="topnav">
            <div class="menu-icon cursor-pointer">
                <span class="icon ti-align-right"></span>
            </div>
        </div>
    </div>
</nav>

<div class="hamenu">
    <div class="logo icon-img-100">
        <img src="{{asset('imgs/logo-dark.png')}}" alt="">
    </div>
    <div class="close-menu cursor-pointer ti-close"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <div class="menu-text">
                    <div class="text">
                        <h2>Menu</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="menu-links">
                    <ul class="main-menu rest">
                        <li>
                            <div class="o-hidden">
                                <a href="/" class="link"><span class="fill-text"
                                                                                 data-text="Home Page">Home Page</span></a>
                            </div>
                        </li>
                        <li>
                            <div class="o-hidden">
                                <a href="/about-us" class="link"><span class="fill-text"
                                                                                          data-text="About Us">About Us</span></a>
                            </div>
                        </li>
                        <li>
                            <div class="o-hidden">
                                <div class="link cursor-pointer dmenu"><span class="fill-text"
                                                                             data-text="Services">Services</span> <i></i>
                                </div>
                            </div>
                            <div class="sub-menu">
                                <ul>
                                    <li>
                                        <a class="sub-link" href="/services/ux-ui-product-design">UX, UI & Product Design</a>
                                    </li>
                                    <li>
                                        <a class="sub-link" href="/services/user-research">User Research</a>
                                    </li>
                                    <li>
                                        <a class="sub-link" href="/services/website-development">Website Development</a>
                                    </li>
                                    <li>
                                        <a class="sub-link" href="/services/e-commerce-development">E-Commerce Development</a>
                                    </li>
                                    <li>
                                        <a class="sub-link" href="/services/mobile-app-development">Mobile App Development</a>
                                    </li>
                                    <li>
                                        <a class="sub-link" href="/services/custom-software-development">Custom Software Development</a>
                                    </li>
                                    <li>
                                        <a class="sub-link" href="/services/architect-solutions">Architect Solutions</a>
                                    </li>
                                    <li>
                                        <a class="sub-link" href="/services/2d-and-3d-animations">2D & 3D Animations</a>
                                    </li>
                                    <li>
                                        <a class="sub-link" href="/services/staff-strengthening">Staff Strengthening</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <div class="o-hidden">
                                <a href="/case-studies" class="link"><span class="fill-text"
                                                                                              data-text="Case Studies">Case Studies</span></a>
                            </div>
                        </li>
                        <li>
                            <div class="o-hidden">
                                <a href="/blog" class="link"><span class="fill-text"
                                                                                      data-text="Blog">Blog</span></a>
                            </div>
                        </li>
                        <li>
                            <div class="o-hidden">
                                <a href="/contact-us" class="link"><span class="fill-text"
                                                                                            data-text="Contact Us">Contact Us</span></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="cont-info">
                    <div class="item mb-50">
                        <h6 class="sub-title mb-15 opacity-7">Address</h6>
                        <h5>541 Melville Geek, <br> Palo Alto, CA 94301</h5>
                    </div>
                    <div class="item mb-50">
                        <h6 class="sub-title mb-15 opacity-7">Social Media</h6>
                        <ul class="rest social-text">
                            <li class="mb-10">
                                <a href="#0" class="hover-this"><span class="hover-anim">Facebook</span></a>
                            </li>
                            <li class="mb-10">
                                <a href="#0" class="hover-this"><span class="hover-anim">Twitter</span></a>
                            </li>
                            <li class="mb-10">
                                <a href="#0" class="hover-this"><span class="hover-anim">LinkedIn</span></a>
                            </li>
                            <li>
                                <a href="#0" class="hover-this"><span class="hover-anim">Instagram</span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="item mb-40">
                        <h6 class="sub-title mb-15 opacity-7">Contact Us</h6>
                        <h5><a href="#0">Hello@email.com</a></h5>
                        <h5 class="underline mt-10"><a href="#0">+1 840 841 25 69</a></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
