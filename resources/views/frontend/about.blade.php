@include('layouts.frontend.partials.header-assets')
@include('layouts.frontend.partials.header')
<style>
    .about-bg-image{
    width:100%;
    }
</style>
<body class="body-about">
    <div class="wrapper-body-head">
        <div class="hero-about">
            <div class="before-img-about">
                 @if (app()->getLocale() == 'sq')
                <img src="{{ Url::asset('frontend/assets/category/about-header-al.svg') }}" alt="about-img"
                   class="img-fluid about-bg-image">
@else
<img src="{{ Url::asset('frontend/assets/category/about-header-en.svg') }}" alt="about-img"
                   class="img-fluid about-bg-image">
@endif
            </div>
        </div>
    </div>

    <section class="about-us-area pt-90 pb-90 pb-md-25 pt-xs-50 pb-xs-30">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img-wrapper pos-rel mb-30">
                        <img class="img-fluid"
                            src="{{ URL::asset('frontend/assets/images/about/About-us-Homepage-image.png') }}"
                            alt="About Img">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content-wrapper pl-60">
                        <div class="section-title">
                            <h6 class="semi-title mb-10">{{ __('home.about') }}</h6>
                            <h2 class="sect-title mb-30">{{ __('home.Quality that speaks') }}</h2>
                            <p class="paragraph-title">{{ __('home.Partner product') }}</strong>
                            </p>
                        </div>
                    </div>
                    <div class="tab-wrapper mb-30">
                        <nav>
                            <div class="nav nav-tabs mb-25" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                    aria-selected="true">01. <span>{{ __('home.Our mission') }}</span><i
                                        class="fa-solid fa-arrow-down-long"></i></button>
                                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-profile" type="button" role="tab"
                                    aria-controls="nav-profile" aria-selected="false">02.
                                    <span>{{ __('home.Our vision') }}</span>
                                    <i class="fa-solid fa-arrow-down-long"></i></button>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                aria-labelledby="nav-home-tab">
                                <p>{{ __('home.mission') }}</p>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                aria-labelledby="nav-profile-tab">
                                <p>{{ __('home.vision') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
@include('layouts.frontend.partials.footer')
@include('layouts.frontend.partials.footer-assets')
