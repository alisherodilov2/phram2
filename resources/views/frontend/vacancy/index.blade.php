@extends('frontend.layouts.master')
@section('content')
    <section class="team-details-area pt-130 pb-70">
        <div class="container">
            @foreach ($datas as $data)
                <div class="row mt-2">
                    <div class="col-lg-5 col-md-6">
                        <div class="tp-team-dtls__thumb mb-50">
                            <img src="{{ $data->getFirstMediaUrl()  ?? ''}}" style="width: 100%;border-radius:15px;" alt="team-thumb">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="tp-team-dtls__content mt-50 mb-50">
                            <h4 class="tp-team-dtls__title mb-10"><a href="team-01.html">{{ $data->title }}</a></h4>
                            <p>
                                {!! substr($data->description, 0, 200) !!}...
                            </p> <br>
                            <a href="{{route('frontend.vacancy.show' , $data->id)}}" class="btn btn-primary">{{__('backend.explore')}}</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
