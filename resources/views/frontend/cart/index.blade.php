@extends('frontend.layouts.master')
@section('header')
    @include('frontend.layouts.header1')
@endsection
@section('content')
    <main>

        <!-- breadcrumb-area -->
        <section class="breadcrumb__area pt-100 pb-120 breadcrumb__overlay"
            data-background="{{ asset('assets/img/banner/breadcrumb-01.jpg') }}"
            style="background-image: url(&quot;{{asset('assets/img/banner/breadcrumb-01.jpg') }}&quot;);">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-7 col-lg-12 col-md-12 col-12">
                        <div class="tp-breadcrumb">
                            <h2 class="tp-breadcrumb__title">{{ __('backend.add_to_card') }}</h2>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-12 col-md-12 col-12">
                        <div class="tp-breadcrumb__link text-xl-end">
                            <span>Bioxlab : <a href="checkout.html">Cart</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- cart area -->

        <!-- cart area end-->
        <livewire:card-box />
    </main>
@endsection
