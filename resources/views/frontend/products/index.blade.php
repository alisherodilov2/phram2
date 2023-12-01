@extends('frontend.layouts.master')
@section('content')
    <main>
        <section class="breadcrumb__area pt-100 pb-120 breadcrumb__overlay"
            data-background="assets/img/banner/breadcrumb-01.jpg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-7 col-lg-12 col-md-12 col-12">
                        <div class="tp-breadcrumb">
                            <h2 class="tp-breadcrumb__title">Shop</h2>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-12 col-md-12 col-12">
                        <div class="tp-breadcrumb__link text-xl-end">
                            <span>Bioxlab : <a href="shop.html"> Shop</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->
        <section class="services-area pt-120 pb-105 grey-bg" data-background="assets/img/shape/shape-bg-01.png">
            <div class="container">
                <div class="row">
                    @foreach ($products as $item)
                        @if (app()->getLocale() == 'uz')
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="services-thumb-box mb-30 wow fadeInLeft" data-wow-delay=".3s">
                                    <div class="services-thumb-box__thumb fix fix">
                                        <img src="{{ $item->getFirstMediaUrl() }}" style="width:100%;" alt="services-thumb">
                                    </div>
                                    <div class="services-thumb-box__text-area d-flex align-items-center">
                                        <div class="services-thumb-box__content">
                                            <h5 class="services-thumb-box__title"><a
                                                    href="services-details.html">{{ $item->title }}</a></h5>
                                            <a class="tp-btn-link" href="services-02.html">
                                                {!! substr($item->description, 0, 101) !!}...
                                            </a>
                                            <br> <br>
                                            <div class="d-flex">
                                                <a href="{{ $item->link }}" class="btn btn-primary text-light">
                                                    {{ __('backend.explore') }}
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if (app()->getLocale() == 'ru')
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="services-thumb-box mb-30 wow fadeInLeft" data-wow-delay=".3s">
                                    <div class="services-thumb-box__thumb fix fix">
                                        <img src="{{ $item->getFirstMediaUrl() }}" style="width:100%;" alt="services-thumb">
                                    </div>
                                    <div class="services-thumb-box__text-area d-flex align-items-center">
                                        <div class="services-thumb-box__content">
                                            <h5 class="services-thumb-box__title"><a
                                                    href="services-details.html">{{ $item->title_ru }}</a></h5>
                                            <a class="tp-btn-link" href="services-02.html">
                                                {!! substr($item->description_ru, 0, 101) !!}...
                                            </a>
                                            <br> <br>
                                            <div class="d-flex">
                                                <a href="{{ $item->link }}" class="btn btn-primary text-light">
                                                    {{ __('backend.explore') }}
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if (app()->getLocale() == 'en')
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="services-thumb-box mb-30 wow fadeInLeft" data-wow-delay=".3s">
                                    <div class="services-thumb-box__thumb fix fix">
                                        <img src="{{ $item->getFirstMediaUrl() }}" style="width:100%;" alt="services-thumb">
                                    </div>
                                    <div class="services-thumb-box__text-area d-flex align-items-center">
                                        <div class="services-thumb-box__content">
                                            <h5 class="services-thumb-box__title"><a
                                                    href="services-details.html">{{ $item->title_en }}</a></h5>
                                            <a class="tp-btn-link" href="services-02.html">
                                                {!! substr($item->description_en, 0, 101) !!}...
                                            </a>
                                            <br> <br>
                                            <div class="d-flex">
                                                <a href="{{ $item->link }}" class="btn btn-primary text-light">
                                                    {{ __('backend.explore') }}
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </section>
    </main>
@endsection
