
<section class="footer">
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-6 col-sm-12 footer-col-1">
                    <img src="{{ URL::asset('images/logo/Partner-logo-white.svg') }}" alt="">
                    <p>{{ __('home.Partner product') }}</p>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-12 footer-col-2">
                    <span>Links</span>
                    <ul class="links-footer">
                    <div class="row">
                    <div class="col-lg-12 col-6">
                    <li class="first-li"><a href="{{ route('home') }}">{{ __('home.home') }}</a></li>
                    <li><a href="{{ route('about') }}">{{ __('home.about') }}</a></li>
                    <li><a href="{{ route('brand') }}">{{ __('home.our brands') }}</a></li>
                    </div>
                    <div class="col-lg-12 col-6">
                    <li><a href="{{ route('services') }}">{{ __('home.service') }}</a></li>
                    <li><a href="{{ route('activities') }}">{{ __('home.activities') }}</a></li>
                    <li><a href="{{ route('contact') }}">{{ __('home.contact') }}</a></li>
                    </div>
                    </div>
                </ul>
                </div>
                <div class="col-xl-5 col-md-6 col-sm-12 footer-col-2">
                    <span>{{ __('home.contact') }}</span>
                    <ul>
                        <li><img src="{{ URL::asset('images/services/Pin.png') }}"><a href="#">Libohovë, Gjirokastër, Albania, 6003</a></li>
                        <li><img src="{{ URL::asset('images/services/telephone.png') }}"><a href="#">Phone: (+355) 84-268-724</a></li>
                        <li><img src="{{ URL::asset('images/services/envelope.png') }}"><a href="#">Email: info@partner-ballkanik.com</a></li>
                        <div class="socials-footer-div">
                            <div class="row">
                                <div class="col-12 d-mobile">
                                    <span>{{ __('home.follow us') }}</span>
                                </div>
                                <div class="col-12 socials-footer">
                                <a href="#"><img src="{{ URL::asset('images/services/facebook.png') }}" alt=""></a>
                                <a href="#"><img src="{{ URL::asset('images/services/instagram-logo.png') }}" alt=""></a>
                                <a href="#"><img src="{{ URL::asset('images/services/youtube.png') }}" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </ul>
                    
                </div>
                
            </div>
            <hr>
            <div class="row">
                <div class="col-xl-6 col-md-6 col-12">
                    <p class="copyright-class">Copyright <span id="year"></span> Partner Ballkanik. Të gjitha të drejtat e rezervuara.</p>
                </div>
                <div class="col-xl-6 col-md-6 col-12">
                    <p class="dev-class">Design & Development by: <a class="text-decoration-none text-white" href="https://bigmediaexpert.com" target="_blank">Big Media Expert</a></p>
                </div>
            </div>
        </div>
    </footer>
</section>
@push('js')
<script>
document.getElementById("year").innerHTML = new Date().getFullYear();
</script>
@endpush


