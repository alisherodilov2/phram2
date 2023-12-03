<header class="d-none d-xl-block">
    <div class="header__area tp-home-one" id="header-sticky">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-xxl-2 col-lg-3">
                    <div class="logo">
                        <a href="/"><img
                                src="https://planbabyclinic.com/storage/partners/May2023/P200msUY9Q2h3CI0XmNl.png"
                                alt="logo"></a>
                    </div>
                </div>
                <div class="col-xxl-7 col-lg-6">
                    <div class="main-menu">
                        <nav id="mobile-menu">
                            <ul>
                                <li><a href="/">{{ __('backend.home') }}</a></li>
                                <li><a href="{{ route('frontend.products') }}">{{ __('backend.products') }}</a></li>
                                <li><a href="{{ route('frontend.vacancy') }}">{{ __('backend.vacancy') }}</a></li>
                                <li><a href="{{ route('frontend.blogs') }}">{{ __('backend.blogMenu') }}</a>

                                </li>
                                <li><a href="{{ route('frontend.contact.index') }}">{!! __('backend.contactMain') !!}</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-3 d-flex align-items-center justify-content-end">
                    <div class="tp-bt-btn-banner ">
                        <div class="header-cart-order d-flex align-items-center justify-content-end">
                            <div class="header-cart-list  d-flex align-items-center justify-content-end mr-50">
                                <div class="tp-cart-icon-area ">
                                    <i class="fa-solid fa-globe"></i>
                                    <div class="tpcarticon">
                                        <ul>
                                            <li>
                                                <div class="tpcarticon__total-price">
                                                    <a class="dropdown-item"
                                                        href="{{ route('change.lang', 'uz') }}">UZ</a>

                                                </div>
                                            </li>
                                            <li>
                                                <div class="tpcarticon__checkout-price">
                                                    <a class="dropdown-item"
                                                        href="{{ route('change.lang', 'ru') }}">RU</a>

                                                </div>
                                            </li>
                                            <li>
                                                <div class="tpcarticon__checkout-price">
                                                    <a class="dropdown-item"
                                                        href="{{ route('change.lang', 'en') }}">EN</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div id="header-mob-sticky" class="tp-mobile-header-area tp-home-lg-banner pt-15 pb-15 d-xl-none">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-4">
                <div class="tp-mob-logo">
                    <a href="index.html"><img
                            src="https://planbabyclinic.com/storage/partners/May2023/P200msUY9Q2h3CI0XmNl.png"
                            alt="logo"></a>
                </div>
            </div>
            <div class="col-8">
                <div class="tp-mobile-bar d-flex align-items-center justify-content-end">
                    <div class="tp-bt-btn-banner d-none d-md-block d-xl-none mr-30">
                        <a class="tp-bt-btn" href="tel:123456">
                            <svg width="14" height="19" viewBox="0 0 14 19" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="2" cy="2" r="2" fill="#0E63FF" />
                                <circle cx="7" cy="2" r="2" fill="#0E63FF" />
                                <circle cx="12" cy="2" r="2" fill="#0E63FF" />
                                <circle cx="12" cy="7" r="2" fill="#0E63FF" />
                                <circle cx="12" cy="12" r="2" fill="#0E63FF" />
                                <circle cx="7" cy="7" r="2" fill="#0E63FF" />
                                <circle cx="7" cy="12" r="2" fill="#0E63FF" />
                                <circle cx="7" cy="17" r="2" fill="#0E63FF" />
                                <circle cx="2" cy="7" r="2" fill="#0E63FF" />
                                <circle cx="2" cy="12" r="2" fill="#0E63FF" />
                            </svg><span>Help Desk :</span>+91 590 088 55
                        </a>
                    </div>
                    <button class="tp-menu-toggle"><i class="far fa-bars"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="tpsideinfo tp-side-info-area">
    <button class="tpsideinfo__close"><i class="fal fa-times"></i></button>
    <div class="tpsideinfo__logo mb-40">
        <a href="/"><img src="https://planbabyclinic.com/storage/partners/May2023/P200msUY9Q2h3CI0XmNl.png"
                alt="logo"></a>
    </div>

    <div class="mobile-menu"></div>
</div>




{{-- new --}}
{{-- <header class="d-none d-xl-block">
    <div class="header__area tp-home-one" id="header-sticky">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-xxl-2 col-lg-3">
                    <div class="logo">
                        <a href="index.html"><img src="assets/img/logo/logo.png" alt="logo"></a>
                    </div>
                </div>
                <div class="col-xxl-7 col-lg-6">
                    <div class="main-menu">
                        <nav id="mobile-menu">
                            <ul>
                                <li><a href="/">{{__('backend.home')}}</a></li>
                                <li><a href="{{route('frontend.products')}}">{{__('backend.products')}}</a></li>
                                <li><a href="{{route('frontend.vacancy')}}">{{__('backend.vacancy')}}</a></li>
                                <li><a href="{{ route('frontend.blogs') }}">{{__('backend.blogMenu')}}</a></li>
                                <li><a href="{{route('frontend.contact.index')}}">{{__('backend.contactMain')}}</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-3 d-flex align-items-center justify-content-end">
                    <div class="tp-bt-btn-banner">
                        <div class="tp-cart-icon-area ">
                            <i class="fa-solid fa-globe"></i>
                            <div class="tpcarticon">
                                <ul>
                                    <li>
                                        <div class="tpcarticon__total-price">
                                            <a class="dropdown-item"
                                                href="{{ route('change.lang', 'uz') }}">UZ</a>

                                        </div>
                                    </li>
                                    <li>
                                        <div class="tpcarticon__checkout-price">
                                            <a class="dropdown-item"
                                                href="{{ route('change.lang', 'ru') }}">RU</a>

                                        </div>
                                    </li>
                                    <li>
                                        <div class="tpcarticon__checkout-price">
                                            <a class="dropdown-item"
                                                href="{{ route('change.lang', 'en') }}">EN</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header> --}}
<!-- header-area-end -->

<!-- tp-mobile-header-area start -->
{{-- <div id="header-mob-sticky" class="tp-mobile-header-area tp-home-lg-banner pt-15 pb-15 d-xl-none">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-4">
                <div class="tp-mob-logo">
                    <a href="index.html"><img src="assets/img/logo/logo.png" alt="logo"></a>
                </div>
            </div>
            <div class="col-8">
                <div class="tp-mobile-bar d-flex align-items-center justify-content-end">
                    
                    <button class="tp-menu-toggle"><i class="far fa-bars"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- tp-mobile-header-area end -->

<!-- sidebar-info -->
<div class="tpsideinfo tp-side-info-area">
    <button class="tpsideinfo__close"><i class="fal fa-times"></i></button>
    <div class="tpsideinfo__logo mb-40">
        <a href="index.html"><img src="assets/img/logo/white-logo.png" alt="logo"></a>
    </div>

    <div class="mobile-menu"></div>

    <div class="tpsideinfo__content mb-60">
        <p class=" d-none d-xl-block">Our mission is to ensure the generation of accurate and precise findings.</p>
        <span>Contact Us</span>
        <a href="#"><i class="fa-solid fa-star"></i>Ta-134/A, Gulshan Badda Link </a>
        <a href="tel:61383766284"><i class="fa-solid fa-star"></i>61 383 766 284</a>
        <a href="mailto:noreply@envato.com"><i class="fa-solid fa-star"></i>noreply@envato.com</a>
    </div>
    <div class="tpsideinfo__content-inputarea mb-60 d-none d-xl-block">
        <span>Get Update</span>
        <div class="tpsideinfo__content-inputarea-input">
            <form action="#">
                <input type="email" placeholder="Enter Mail">
                <button class="tpsideinfo__content-inputarea-input-btn"><i
                        class="fa-solid fa-paper-plane"></i></button>
            </form>
        </div>
    </div>
    <div class="tpsideinfo__gallery mb-35 d-none d-xl-block">
        <span>Cheack Instagram Post</span>
        <div class="tpsideinfo__gallery-item">
            <a href="assets/img/blog/blog-in-01.jpg" class="popup-image"><img src="assets/img/blog/blog-in-01.jpg"
                    alt=""></a>
            <a href="assets/img/blog/blog-in-02.jpg" class="popup-image"><img src="assets/img/blog/blog-in-02.jpg"
                    alt=""></a>
            <a href="assets/img/blog/blog-in-03.jpg" class="popup-image"><img src="assets/img/blog/blog-in-03.jpg"
                    alt=""></a>
        </div>
    </div>
    <div class="tpsideinfo__socialicon">
        <a href="#"><i class="fa-brands fa-youtube"></i></a>
        <a href="#"><i class="fa-brands fa-twitter"></i></a>
        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
        <a href="#"><i class="fa-brands fa-skype"></i></a>
    </div>
</div> --}}
