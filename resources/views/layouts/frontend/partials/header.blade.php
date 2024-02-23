<style>
    .dropdown-menu {
        min-width: 8rem;
        text-align: center
    }
/*#scrollUp {*/
/*    background: #d2302d;*/
/*    width: 50px;*/
/*    height: 50px;*/
/*    position: absolute;*/
/*    right: 50px;*/
/*    bottom: 50px;*/
/*    border-radius: 50%;*/
/*    line-height: 50px;*/
/*    text-align: center;*/
/*}*/
/*#scrollUp i {*/
/*    color: #ffffff;*/
/*}*/
    @media(max-width:474px) {
        .dropdown-menu {
            /* transform: translate3d(-120px, 40px, 0px)!important; */
            border-radius: 10px !important;
        }
    }
</style>
<section class="announcement-bar d-desktop">

    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-lg-6 col-5">
                <div class="phone-header">
                    <i class="fa-solid fa-phone"></i> <span>(+355) 84-268-724</span>
                </div>
            </div>

            <div class="col-lg-6 col-7 d-flex justify-content-end">
                {{-- <div class="search-container">
                    <form action="/search" method="get">
                        <input class="search expandright" id="searchright" type="search" name="q"
                            placeholder="Search">
                        <label class="button searchbutton" for="searchright"><span class="mglass">&#9906;</span></label>
                    </form>
                </div> --}}
                <div>
                    <div class="dropdown ms-1 mt-1 topbar-head-dropdown header-item">
                        <button type="button"
                            class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle shadow-none"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            @if (app()->getLocale() == 'sq')
                                AL <span class="fi fi-al"></span>
                            @else
                                EN <span class="fi fi-gb"></span>
                            @endif
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">

                            @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                <li>
                                    <a class="dropdown-item notify-item  " rel="alternate"
                                        hreflang="{{ $localeCode }}"
                                        href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                        @if ($localeCode == 'en')
                                            EN <span class="fi fi-gb"></span>
                                        @elseif($localeCode == 'sq')
                                            AL <span class="fi fi-al"></span>
                                        @endif
                                    </a>
                                </li>
                            @endforeach

                        </div>
                    </div>

                </div>



            </div>
        </div>

    </div>
</section>
<hr class="header-hr d-desktop">
<section class="header">
    <div class="container">
        <nav class="navbar navbar-expand-lg ">
            <div class="container-fluid p-0 pb-2">
                <a class="navbar-brand" href="{{ route('home') }}"><img
                        src="{{ Url::asset('images/logo/Partner-Ballkanik-Logo.svg') }}" alt="logo"></a>
                <button class="navbar-toggler  mobile-nav" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasExample" aria-controls="offcanvasExample" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <svg xmlns="http://www.w3.org/2000/svg" width="27" height="19" viewBox="0 0 27 19"
                        fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M27 1.5C27 2.32843 26.3284 3 25.5 3L1.5 3C0.671576 3 3.8147e-06 2.32843 3.8147e-06 1.5C3.8147e-06 0.671573 0.671576 2.38419e-07 1.5 2.38419e-07L25.5 2.38419e-07C26.3284 2.38419e-07 27 0.671573 27 1.5Z"
                            fill="black" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M27 17.5C27 18.3284 26.3284 19 25.5 19L1.5 19C0.671576 19 3.8147e-06 18.3284 3.8147e-06 17.5C3.8147e-06 16.6716 0.671576 16 1.5 16L25.5 16C26.3284 16 27 16.6716 27 17.5Z"
                            fill="black" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M27 9.5C27 10.3284 26.3284 11 25.5 11L7.5 11C6.67158 11 6 10.3284 6 9.5C6 8.67157 6.67158 8 7.5 8L25.5 8C26.3284 8 27 8.67157 27 9.5Z"
                            fill="black" />
                    </svg>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link {{ Route::currentRouteNamed('home') ? 'active' : '' }}"
                                aria-current="page" href="{{ route('home') }}">{{ __('home.home') }}</a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('about') }}"
                                class="nav-link {{ Route::currentRouteNamed('about') ? 'active' : '' }}">{{ __('home.about') }}</a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('brand') }}"
                                class="nav-link {{ Route::currentRouteNamed('brand') ? 'active' : '' }}">{{ __('home.our brands') }}</a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('services') }}"
                                class="nav-link {{ Route::currentRouteNamed('services') ? 'active' : '' }}">{{ __('home.service') }}</a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('activities') }}"
                                class="nav-link {{ Route::currentRouteNamed('activities') ? 'active' : '' }}">{{ __('home.activities') }}</a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('contact') }}"
                                class="nav-link {{ Route::currentRouteNamed('contact') ? 'active' : '' }}">{{ __('home.contact') }}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample"
            aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header">
                <a class="navbar-brand" href="{{ route('home', ['locale' => app()->getLocale()]) }}"><img
                        src="{{ Url::asset('images/logo/Partner-Ballkanik-Logo.svg') }}" alt=""></a>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteNamed('home') ? 'active' : '' }}"
                            aria-current="page" href="{{ route('home', ['locale' => app()->getLocale()]) }}">{{ __('home.home') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteNamed('about') ? 'active' : '' }}"
                            href="{{ route('about') }}">{{ __('home.about') }}</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link {{ Route::currentRouteNamed('brand') ? 'active' : '' }}"
                            href="{{ route('brand') }}">
                            {{ __('home.our brands') }}
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link {{ Route::currentRouteNamed('services') ? 'active' : '' }}"
                            href="{{ route('services') }}">
                            {{ __('home.service') }}
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link {{ Route::currentRouteNamed('activities') ? 'active' : '' }}"
                            href="{{ route('activities') }}">
                            {{ __('home.activities') }}
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteNamed('contact') ? 'active' : '' }}"
                            href="{{ route('contact') }}">
                            {{ __('home.contact') }}
                        </a>
                    </li>


                    <div class="col-xl-1 col-md-2 col-sm-2 mt-4">
                        <div class="dropdown ms-1 mt-1 topbar-head-dropdown header-item">
                            <button type="button"
                                class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle shadow-none"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                @if (app()->getLocale() == 'sq')
                                    AL <span class="fi fi-al"></span>
                                @else
                                    EN <span class="fi fi-gb"></span>
                                @endif
                            </button>
                            <div class="dropdown-menu dropdown-menu-end"
                                style="transform: translate3d(-107px, 40px, 0px);">

                                @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                    <li>
                                        <a class="dropdown-item notify-item  " rel="alternate"
                                            hreflang="{{ $localeCode }}"
                                            href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                            @if ($localeCode == 'sq')
                                                AL <span class="fi fi-al"></span>
                                            @elseif($localeCode == 'en')
                                                EN <span class="fi fi-gb"></span>
                                            @endif
                                        </a>
                                    </li>
                                @endforeach

                            </div>
                        </div>

                    </div>
                </ul>
            </div>
        </div>
    </div>
</section>
