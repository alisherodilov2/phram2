<div class="row">
    @foreach ($products as $item)
        <div class="col-lg-4 col-md-6 col-12">
            <div class="services-thumb-box mb-30 wow fadeInLeft" data-wow-delay=".3s">
                <div class="services-thumb-box__thumb fix fix">
                    <img src="{{ $item->getFirstMediaUrl() }}" style="width:100%;" alt="services-thumb">
                </div>
                <div class="services-thumb-box__text-area  " style="width: 100%">
                    <div class="services-thumb-box__content">
                        <h5 class="services-thumb-box__title"><a
                                href="{{ route('frontend.products.show', $item->id) }}">
                                {{ $item->{lang('title')} }}
                            </a>
                        </h5>
                        <br> <br>
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('frontend.products.show', $item->id) }}"
                                class="research-item__btn">{{ __('backend.explore') }}</a>
                            <button type="button" wire:click="addToCart({{ $item->id }})" class="btn border rounded-circle position-relative">
                                <i class="fa-solid fa-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
