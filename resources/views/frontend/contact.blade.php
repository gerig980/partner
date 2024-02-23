@include('layouts.frontend.partials.header-assets')
@include('layouts.frontend.partials.header')
<style>
    .contact-bg-image{
        width:100%;
    }
</style>
<body>
    <div class="wrapper-body-head">
        <div class="hero-contact">
            <div class="before-img-contact">
                 @if (app()->getLocale() == 'sq')
                <img src="{{ Url::asset('frontend/assets/category/contact-us-header-al.svg') }}" alt="brand-img"
                   class="img-fluid contact-bg-image">
@else
<img src="{{ Url::asset('frontend/assets/category/contact-us-header-en.svg') }}" alt="brand-img"
                   class="img-fluid contact-bg-image">
@endif
            </div>
        </div>
    </div>

    <!--contact-area start-->
    <section class="contact-area pt-105 pt-md-60 pb-md-30 pt-xs-60 pb-xs-30">
        <div class="container">
            <div class="contact-border pb-90 pb-md-30 pb-xs-30">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="map-area">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3055.7036552906784!2d20.24198757652182!3d40.01506657998719!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x135b07fb4f9910b5%3A0x73f10bc4e5f78303!2sPartner%20Ballkanik!5e0!3m2!1sen!2s!4v1707920836169!5m2!1sen!2s"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="contact-input-wrapper mb-30">
                            <div class="section-title mb-25">

                                <h2 class="sect-title mb-35">{{ __('contact.contact form') }}</h2>
                                <h6 class="semi-title mb-10">{{ __('contact.all fields with asteriks') }}</h6>
                            </div>
                            @if (session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @elseif(session('message'))
                                <div class="alert alert-success">
                                    {{ session('message') }}
                                </div>
                            @endif
                            <form class="row contact-form" action="{{ route('contact.store') }}" method="Post">
                                @csrf
                                <div class="col-lg-6 col-md-6">
                                    <div class="input-box mb-20">
                                        <input type="text" name="name"
                                            placeholder="{{ __('contact.full name') }}*" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="input-box mail-input mb-20">
                                        <input type="text" name="email" placeholder="Email address*" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-box phone-input mb-20">
                                        <input type="text" name="phone" placeholder="+3556xxxx">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-box text-input mb-30">
                                        <textarea cols="30" rows="10" name="text" placeholder="{{ __('contact.enter message') }}"></textarea>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button class="form-btn">{{ __('contact.send') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--contact-area end-->
</body>
@include('layouts.frontend.partials.footer')
@include('layouts.frontend.partials.footer-assets')
