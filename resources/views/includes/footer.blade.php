
@if($pageType == 'primary')
    <section class="next-project sub-bg">
    <div class="container-fluid rest">
        <div class="row">
            <div class="col-md-6 rest">
                <div class="text-left box bg-img" data-background="{{asset('imgs/works/projects/2/1.jpg')}}">
                    <div class="cont d-flex align-items-center">
                        <div>
                            <span class="mr-30 fz-30 ti-arrow-left"></span>
                        </div>
                        <div>
                            <h6 class="sub-title fz-16 mb-5">Prev Project</h6>
                            <a href="/project2" class="fz-40 fw-600 stroke">OPT Media Agency</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 rest">
                <div class="text-right d-flex box bg-img"
                     data-background="{{asset('imgs/works/projects/4/1.jpg')}}">
                    <div class="ml-auto">
                        <div class="cont d-flex align-items-center">
                            <div>
                                <h6 class="sub-title fz-16 mb-5">Next Project</h6>
                                <a href="/project2" class="fz-40 fw-600 stroke">TH3 Web Design</a>
                            </div>
                            <div>
                                <span class="ml-30 fz-30 ti-arrow-right"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <a href="/case-studies" class="all-works-butn text-center">
            <span class="ti-view-grid fz-24 mb-10"></span>
            <span class="d-block fz-12 text-u ls1">all Projects</span>
        </a>
    </div>
</section>
@endif

</main>

<!-- ==================== Start Footer ==================== -->
<footer class="sub-bg modern-footer pt-80">
    <div class="footer-container">
        <div class="container ontop">
            <div class="row pb-30 bord-thin-bottom">
                <div class="col-lg-5">
                    <div class="logo icon-img-120">
                        <img src="{{asset('imgs/logo-light.png')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="social-media d-flex justify-content-end">
                        <ul class="rest d-flex align-items-center fz-14">
                            <li class="hover-this cursor-pointer">
                                <a href="#0" class="hover-anim"><i class="fab fa-facebook-f mr-10"></i> Facebook</a>
                            </li>
                            <li class="hover-this cursor-pointer ml-50">
                                <a href="#0" class="hover-anim"><i class="fab fa-dribbble mr-10"></i> Dribbble</a>
                            </li>
                            <li class="hover-this cursor-pointer ml-50">
                                <a href="#0" class="hover-anim"><i class="fab fa-linkedin-in mr-10"></i> LinkedIn</a>
                            </li>
                            <li class="hover-this cursor-pointer ml-50">
                                <a href="#0" class="hover-anim"><i class="fab fa-instagram mr-10"></i> Instagram</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row pt-80">
                <div class="col-lg-5">
                    <div class="call-action">
                        <h2 class="d-slideup wow fz-60 fw-600">
                                        <span class="sideup-text">
                                            <span class="up-text">Have a project in mind?</span>
                                        </span>
                            <span class="sideup-text">
                                            <span class="up-text underline"><a href="/contact-us"
                                                                               class="main-color">Let’s
                                                    get to work.</a></span>
                                        </span>
                        </h2>
                        <div class="info mt-80 d-flex align-items-center">
                            <div>
                                <a href="#0" class="butn butn-md butn-bord-thin radius-30">
                                    <span class="text">Support@Website.com</span>
                                </a>
                            </div>
                            <div>
                                <a href="#0" class="butn butn-md butn-bord-thin radius-30 ml-30">
                                    <span class="text">+2 456 (343) 24 45</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1 bord-left">
                    <div class="column">
                        <h6 class="sub-title mb-30">Useful Links</h6>
                        <div class="row">
                            <div class="col-3">
                                <ul class="rest fz-14">
                                    <li class="mb-15">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="mb-15">
                                        <a href="/about-us">About</a>
                                    </li>
                                    <li class="mb-15">
                                        <a href="/case-studies">Case Studies</a>
                                    </li>
                                    <li class="mb-15">
                                        <a href="/blog">Blog</a>
                                    </li>
                                    <li>
                                        <a href="/contact-us">Contact</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <ul class="rest fz-14">
                                    <li class="mb-15">
                                        <a href="/services/ux-ui-product-design">UX, UI & Product Design</a>
                                    </li>
                                    <li class="mb-15">
                                        <a href="/services/user-research">User Research</a>
                                    </li>
                                    <li class="mb-15">
                                        <a href="/services/website-development">Website Development</a>
                                    </li>
                                    <li class="mb-15">
                                        <a href="/services/e-commerce-development">E-Commerce Development</a>
                                    </li>
                                    <li class="mb-15">
                                        <a href="/services/mobile-app-development">Mobile App Development</a>
                                    </li>
                                    <li class="mb-15">
                                        <a href="/services/custom-software-development">Custom Software Development</a>
                                    </li>
                                    <li class="mb-15">
                                        <a href="/services/architect-solutions">Architect Solutions</a>
                                    </li>
                                    <li class="mb-15">
                                        <a href="/services/2d-and-3d-animations">2D & 3D Animations</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-3">
                                <ul class="rest fz-14">
                                    <li class="mb-15">
                                        <a href="/faqs">FAQS</a>
                                    </li>
                                    <li class="mb-15">
                                        <a href="/term-and-conditions">Term & Conditions</a>
                                    </li>
                                    <li class="mb-15">
                                        <a href="/privacy-policy">Privacy policy</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="subscribe-minimal mt-50">
                        <form action="contact.php">
                            <div class="form-group rest">
                                <input type="email" placeholder="Type Your Email">
                                <button type="submit">
                                    <i class="ti-arrow-top-right"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="text-center pt-30 pb-30 main-bg mt-80">
                <p class="fz-14">© 2024 all rights reserved <span class="underline main-color"><a
                            href="#"
                            target="_self">Company Name</a></span></p>
            </div>
        </div>
    </div>
</footer>
<!-- ==================== End Footer ==================== -->

