<header class="d-none d-xl-block">
    <div class="header__area tp-home-one" id="header-sticky">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-xxl-2 col-lg-3">
                    <div class="logo">
                        <a href="/"><img src="{{ asset('logo/logoDark.png') }}" alt="logo"
                                style="width: 80%;"></a>
                    </div>
                </div>
                <div class="col-xxl-7 col-lg-6">
                    <div class="main-menu">
                        <nav id="mobile-menu">
                            <ul>
                                <li><a href="/">{{ __('backend.home') }}</a></li>
                                <li><a href="{{ route('frontend.products') }}">{{ __('backend.products') }}</a></li>
                                <li class="has-dropdown"><a href="#">{{ strip_tags(__('backend.contact')) }}</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('frontend.contact.index') }}">{!! __('backend.contact') !!}</a>
                                        </li>
                                        <li><a href="{{ route('frontend.vacancy') }}">{{ __('backend.vacancy') }}</a>
                                        </li>
                                        <li><a href="{{ route('frontend.about') }}">{{ __('backend.about') }}</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ route('frontend.blogs') }}">{{ __('backend.blogMenu') }}</a></li>

                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-3 d-flex align-items-center justify-content-end">
                    <div class="tp-bt-btn-banner ">
                        <div class="header-cart-order d-flex align-items-center justify-content-end">
                            <div class="col-lg-5">
                                <div class="header-cart-order d-flex align-items-center justify-content-end">
                                    <div class="header-cart-list  d-flex align-items-center justify-content-end mr-50">
                                        <!-- Example single danger button -->
                                        <div class="tp-cart-icon-area">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    @if (app()->getLocale() == 'uz')
                                                        <b>Uzbek</b>
                                                    @endif
                                                    @if (app()->getLocale() == 'ru')
                                                        <b>Русский</b>
                                                    @endif
                                                    @if (app()->getLocale() == 'en')
                                                        <b>English</b>
                                                    @endif
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <center>
                                                        <li><a class="dropdown-item"
                                                                href="{{ route('change.lang', 'uz') }}"><b>Uzbek</b></a>
                                                        </li>
                                                        <li><a class="dropdown-item"
                                                                href="{{ route('change.lang', 'ru') }}"><b>Русский</b></a>
                                                        </li>
                                                        <li><a class="dropdown-item"
                                                                href="{{ route('change.lang', 'en') }}"><b>English</b></a>
                                                        </li>
                                                    </center>
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
        </div>
    </div>
</header>
<div id="header-mob-sticky" class="tp-mobile-header-area tp-home-lg-banner pt-15 pb-15 d-xl-none">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-4">
                <div class="tp-mob-logo">
                    <a href="/"><img src="{{ asset('logo/logoDark.png') }}" alt="logo"></a>
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
        <a href="/"><img src="{{ asset('logo/logoWhite.png') }}" alt="logo"></a>
    </div>

    <div class="mobile-menu"></div>
</div>
