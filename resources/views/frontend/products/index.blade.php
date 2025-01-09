@extends('frontend.layouts.master')
@section('header')
    @include('frontend.layouts.header1')
@endsection
@section('content')
    <main>
        <section class="breadcrumb__area pt-100 pb-120 breadcrumb__overlay"
            style="background-size: cover;background-repeat:no-repeat;background-attachment: fixed;background-image:url('{{ asset('img/product.jpg') }}')"
            data-background="{{ asset('img/product.jpg') }}">
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
                <livewire:products-livewire />
               
            </div>
        </section>
    </main>
    @push('scripts')
       <script>
         
       </script>
    @endpush
@endsection
