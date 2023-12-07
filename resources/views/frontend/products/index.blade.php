@extends('frontend.layouts.master')
@section('header')
    @include('frontend.layouts.header1')
@endsection
@section('content')
    <main>

        <!-- breadcrumb-area -->
        <section class="breadcrumb__area pt-100 pb-120 breadcrumb__overlay"
            style="background-size: cover;background-repeat:no-repeat; background-attachment: fixed;"
            data-background="{{ asset('img/product.jpg') }}" data-background="{{ asset('img/product.jpg') }}">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="tp-breadcrumb">
                            <h2 class="tp-breadcrumb__title">
                                @if (app()->getLocale() == 'ru')
                                    <b>{{ __('backend.products') }}</b>
                                @else
                                    {{ __('backend.products') }}
                                @endif
                            </h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="tp-breadcrumb__link d-flex">
                            <span>DORALINE: <a href="research.html"> </a></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- research-area -->
        <section class="research-area pt-130 pb-130">
            <div class="container">
                <div class="row">
                    @foreach ($products as $item)
                        @if (app()->getLocale() == 'uz')
                            <div class="col-lg-4 col-md-6">
                                <div class="research-item mb-50 wow fadeInUp" data-wow-delay=".2s">
                                    <div class="research-item__thum fix mb-20">
                                        <img src="{{ $item->getFirstMediaUrl() }}" style="width:100%;" alt="research-thumb">
                                    </div>
                                    <div class="research-item__content">
                                        
                                        <h4 class="research-item__title mb-20"><a
                                                href="{{ route('frontend.products.show', $item->id) }}">{{ $item->title }}</a>
                                        </h4>
                                        <p> {!! substr($item->description, 0, 250) !!}...</p>
                                            <a href="{{ route('frontend.products.show', $item->id) }}"
                                                class="research-item__btn">{{ __('backend.explore') }}</a>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </section>
        <!-- research-area-end -->

    </main>
    {{-- <main>
        <section class="breadcrumb__area pt-100 pb-120 breadcrumb__overlay"   style="background-size: cover;background-repeat:no-repeat; background-attachment: fixed;" data-background="{{ asset('img/product.jpg') }}">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-7 col-lg-12 col-md-12 col-12">
                        <div class="tp-breadcrumb">
                            <h2 class="tp-breadcrumb__title">
                                @if (app()->getLocale() == 'ru')
                                <b>{{ __('backend.products') }}</b>
                                @else
                                {{ __('backend.products') }}
                                @endif
                            </h2>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-12 col-md-12 col-12">
                        <div class="tp-breadcrumb__link text-xl-end">
                            <span>DORALINE :</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->
        <section class="services-area pt-120 pb-105 grey-bg" data-background="assets/img/shape/shape-bg-01.png">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tp-section text-center">
                            <span class="tp-section__sub-title left-line right-line mb-25">DORALINE</span>
                            <h3 class="tp-section__title title-white mb-85 text-dark">
                                @if (app()->getLocale() == 'ru')
                                    <b>
                                        {{ __('backend.products') }}
                                    </b>
                                @else
                                    {{ __('backend.products') }}
                                @endif
                            </h3>
                        </div>
                    </div>
                </div>
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
                                                    href="{{ route('frontend.products.show', $item->id) }}">{{ $item->title }}</a></h5>
                                            <a class="tp-btn-link" href="{{ route('frontend.products.show', $item->id) }}">
                                                {!! substr($item->description, 0, 250) !!}...
                                            </a>
                                            <br> <br>
                                            <div class="d-flex">
                                                <a href="{{ route('frontend.products.show', $item->id) }}"
                                                    class="research-item__btn">{{ __('backend.explore') }}</a>

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
                                                    href="{{ route('frontend.products.show', $item->id) }}">{{ $item->title_ru }}</a></h5>
                                            <a class="tp-btn-link" href="{{ route('frontend.products.show', $item->id) }}">
                                                {!! substr($item->description_ru, 0, 250) !!}...
                                            </a>
                                            <br> <br>
                                            <div class="d-flex">
                                                <a href="{{ route('frontend.products.show', $item->id) }}"
                                                    class="research-item__btn">{{ __('backend.explore') }}</a>

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
                                        <img src="{{ $item->getFirstMediaUrl() }}" style="width:100%;"
                                            alt="services-thumb">
                                    </div>
                                    <div class="services-thumb-box__text-area d-flex align-items-center">
                                        <div class="services-thumb-box__content">
                                            <h5 class="services-thumb-box__title"><a
                                                    href="{{ route('frontend.products.show', $item->id) }}">{{ $item->title_en }}</a></h5>
                                            <a class="tp-btn-link" href="{{ route('frontend.products.show', $item->id) }}">
                                                {!! substr($item->description_en, 0, 250) !!}...
                                            </a>
                                            <br> <br>
                                            <div class="d-flex">
                                                <a href="{{ route('frontend.products.show', $item->id) }}"
                                                    class="research-item__btn">{{ __('backend.explore') }}</a>
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
    </main> --}}
@endsection
