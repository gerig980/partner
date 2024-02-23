@include('layouts.frontend.partials.header-assets')
@include('layouts.frontend.partials.header')
<style>
    .service-bg-image{
        width:100%;
    }
</style>
<body class="body-service">
    <div class="wrapper-body-head">
        <div class="hero-service">
            <div class="before-img-service">
                 @if (app()->getLocale() == 'sq')
                <img src="{{ Url::asset('frontend/assets/category/our-services-header-al.svg') }}" alt="brand-img"
                   class="img-fluid service-bg-image">
@else
<img src="{{ Url::asset('frontend/assets/category/our-services-header-en.svg') }}" alt="brand-img"
                   class="img-fluid service-bg-image">
@endif
            </div>
        </div>
    </div>

    <section class="services-area pt-120 pb-80 mb-10 pt-md-60 pb-md-25 pt-xs-50 pb-xs-20">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="single-services mb-150">
                        <div class="services__thumb">
                            <img class="img-fluid"
                                src="{{ URL::asset('./frontend/assets/images/services/services1.png') }}"
                                alt="Services Img">
                        </div>
                        <div class="services__content text-center">
                            <h5 class="service-text"><img
                                    src="{{ URL::asset('./frontend/assets/images/services/s-icon1.png') }}"
                                    alt="Icon">{{ __('home.sales and distribution') }}</h5>
                            <p>{!! __('service.Shitje dhe shpërndarje info') !!}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single-services mb-150">
                        <div class="services__thumb">
                            <img class="img-fluid"
                                src="{{ URL::asset('./frontend/assets/images/services/services2.png') }}"
                                alt="Services Img">
                        </div>
                        <div class="services__content text-center">
                            <h5 class="service-text"><img
                                    src="{{ URL::asset('./frontend/assets/images/services/s-icon2.png') }}"
                                    alt="Icon"> {{ __('home.MARKETING') }}</h5>
                            <p>{!! __('service.Marketing info') !!}
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single-services mb-150">
                        <div class="services__thumb">
                            <img class="img-fluid"
                                src="{{ URL::asset('./frontend/assets/images/services/services3.png') }}"
                                alt="Services Img">
                        </div>
                        <div class="services__content text-center">
                            <h5 class="service-text"><img
                                    src="{{ URL::asset('./frontend/assets/images/services/s-icon3.png') }}"
                                    alt="Icon"> {{ __('home.TRADE MARKETING') }}</h5>
                            <p>{!! __('service.trade marketing info') !!}</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single-services mb-150">
                        <div class="services__thumb">
                            <img class="img-fluid"
                                src="{{ URL::asset('./frontend/assets/images/services/services4.png') }}"
                                alt="Services Img">
                        </div>
                        <div class="services__content text-center">
                            <h5 class="service-text"><img
                                    src="{{ URL::asset('./frontend/assets/images/services/s-icon10.png') }}"
                                    alt="Icon">{{ __('home.MERCHANDIZING') }}</h5>
                            <p>
                                {!! __('service.Merchandizing info') !!}
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>


@include('layouts.frontend.partials.footer')
@include('layouts.frontend.partials.footer-assets')
