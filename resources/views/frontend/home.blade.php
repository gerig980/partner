@push('css')
    <style>
        .before-after .before-after-info {
            text-align: center;
        }

        .amita-slogan{
            font-size:26px!important;
        }
    

        @media only screen and (max-width: 600px) {
            .before-after .before-after-info {
                text-align: start;
            }

        }
    </style>
@endpush
@include('layouts.frontend.partials.header-assets')
<style>
    .swiper-button-next {
        right: -50px;
        /* color: #ebebeb; */
        font-weight: bold;
        font-size: 11px;
        /* top: 200px; */
    }

    .swiper-button-prev {
        left: -50px;
        /* color: #ebebeb; */
        font-weight: bold;
    }
    
    .desktop-home-img{
        width:100%;
    }
</style>

<body class="home-body">
    <div class="wrapper">
        @include('layouts.frontend.partials.header')
        <section class="hero">
            <div class="before-img">
                <div class="swiper mySwiper3">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{ Url::asset('frontend/assets/home/P-Ballkanik-Amita-FREE-Slider.png') }}"
                                alt="" class="img-fluid desktop-home-img">
                            <img src="{{ Url::asset('frontend/assets/home/Amita-FREE-Slider-mobile.jpg') }}"
                                alt="" class="img-fluid mobile-home-img">
                            <div class="hero-title">
                                <div class="hero-text row">
                                    <div class="col-xl-6 col-md-6 col-sm-12">
                                        <h1>{{__('home.amita-free-slider')}}</h1>
                                    </div>
                                    <div class="col-xl-6 col-md-6 col-sm-12">
                                        <a href="{{ route('product', ['id' => 2, 'title' => 'Amita-Free']) }}" style="text-decoration:none;">
                                        <button class="learn-more-btn">
                                            @if (app()->getLocale() == 'sq')
                                                SHIKO MË SHUMË
                                            @else
                                                SEE MORE
                                            @endif
                                        </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ Url::asset('frontend/assets/home/amita-desktop.png') }}" alt=""
                                class="img-fluid desktop-home-img">
                            <img src="{{ Url::asset('frontend/assets/home/Amita-Mobile-Slider.jpg') }}" alt=""
                                class="img-fluid mobile-home-img">
                            <div class="hero-title">
                                <div class="hero-text row">
                                    <div class="col-xl-6 col-md-6 col-sm-12">
                                        <h1 class="amita-slogan">{{__('home.amita-slider')}}</h1>
                                    </div>
                                    <div class="col-xl-6 col-md-6 col-sm-12">
                                       <a href="{{ route('product', ['id' => 1, 'title' => 'Amita']) }}" style="text-decoration:none;"> <button class="learn-more-btn">
                                            @if (app()->getLocale() == 'sq')
                                                SHIKO MË SHUMË
                                            @else
                                                SEE MORE
                                            @endif
                                        </button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ Url::asset('frontend/assets/home/P-Ballkanik-Slider-Papadopoulos.png') }}"
                                alt="" class="img-fluid desktop-home-img">
                            <img src="{{ Url::asset('frontend/assets/home/Papadopoulous-Slider-mobile.jpg') }}" alt=""
                                class="img-fluid mobile-home-img">
                            <div class="hero-title">
                                <div class="hero-text row">
                                    <div class="col-xl-6 col-md-6 col-sm-12">
                                        <h1>{{__('home.papadoupolos-slider')}}</h1>
                                    </div>
                                    <div class="col-xl-6 col-md-6 col-sm-12">
                                        <a href="{{ route('product', ['id' => 3, 'title' => 'Papadoupoulos']) }}" style="text-decoration:none;">
                                        <button class="learn-more-btn">
                                            @if (app()->getLocale() == 'sq')
                                                SHIKO MË SHUMË
                                            @else
                                                SEE MORE
                                            @endif
                                        </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="home-slider-button">
                        <button class="btn btn-arrow swiper-button-prev3"><i
                                class="fa-solid fa-arrow-left-long"></i></button>
                        <button class="btn btn-arrow swiper-button-next3"><i
                                class="fa-solid fa-arrow-right-long"></i></button>
                    </div>
                    <div class="swiper-pagination swiper-pagination-header d-mobile"></div>
                </div>
            </div>
        </section>


        <section class="services">
            <div class="container">
                <div class="row">
                    @if (app()->getLocale() == 'sq')
                    <h2 class="services-header"><span>SHËRBIMET TONA</span></h2> @else<h2 class="services-header">
                            OUR <span>SERVICES</span></h2>
                    @endif
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-6 services-col">
                        <div class="card card-services text-center">
                            <hr class="card-hr d-mobile">
                            <img src="{{ URL::asset('frontend/assets/service/Sales-icon.png') }}" class="card-img-top"
                                alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{__('home.sales')}}</h5>
                                <p class="card-text">{{__('home.sales_desc')}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-6 services-col">
                        <div class="card card-services text-center">
                            <hr class="card-hr d-mobile">
                            <img src="{{ URL::asset('frontend/assets/service/Distribution-icon.png') }}"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{__('home.distribution')}}</h5>
                                <p class="card-text">{{__('home.distribution_desc')}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-6 services-col">
                        <div class="card card-services text-center">
                            <hr class="card-hr d-mobile">
                            <img src="{{ URL::asset('frontend/assets/service/Trade-Marketing.png') }}"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Trade Marketing</h5>
                                <p class="card-text">{{__('home.trade_marketing_desc')}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-6 services-col">
                        <div class="card card-services text-center">
                            <hr class="card-hr d-mobile">
                            <img src="{{ URL::asset('frontend/assets/service/Marketing.png') }}" class="card-img-top"
                                alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Marketing</h5>
                                <p class="card-text">{{__('home.marketing_desc')}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-6 services-col">
                        <div class="card card-services text-center">
                            <hr class="card-hr d-mobile">
                            <img src="{{ URL::asset('frontend/assets/service/Merchandizing.png') }}"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Merchandizing</h5>
                                <p class="card-text">{{__('home.merchandizing_desc')}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-6 services-col">
                        <div class="card card-services text-center">
                            <hr class="card-hr d-mobile">
                            <img src="{{ URL::asset('frontend/assets/service/Production.png') }}"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{__('home.production')}}</h5>
                                <p class="card-text">{{__('home.production_desc')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="products">
            <div class="container">
                <h4 class="products-header">
                    {!!__('home.best combination')!!}
                </h4>
                <div class="carousel-products">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="box">
                                    <img src="{{ URL::asset('images/brands/Amita-Partner.svg') }}" alt="">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="box">
                                    <img src="{{ URL::asset('images/brands/Amita-FREE-Partner.svg') }}" alt="">
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="box">
                                    <img src="{{ URL::asset('images/brands/Papadopoulos-Partner.svg') }}"
                                        alt="">
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="swiper-button-next">
                        <img src="{{ URL::asset('images/right-arrow.svg') }}">
                    </div>
                    <div class="swiper-button-prev">
                        <img src="{{ URL::asset('images/left-arrow.svg') }}">
                    </div>
                </div>
        </section>

        <section class="artboard">
            <div class="container">


                <div class="row board-row">
                    <div class="board-desc col-lg-3 col-6">

                        <div class="board-icon"><img
                                src="{{ URL::asset('frontend/assets/images/home/Happy-Costumers.svg') }}"
                                alt=""></div>
                        <span class="ps-4">
                            <div class="head-board">10K</div>
                            <div class="head-board-desc">{!!__('home.happy clients')!!}</div>
                        </span>
                    </div>
                    <div class="board-desc  col-lg-3 col-6">

                        <div class="board-icon"><img
                                src="{{ URL::asset('frontend/assets/images/home/Years-of-Experience.svg') }}"
                                alt=""></div>
                        <span class="ps-4">
                            <div class="head-board">18</div>
                            <div class="head-board-desc">{!!__('home.years experience')!!}</div>
                        </span>
                    </div>
                    <div class="board-desc col-lg-3 col-6">

                        <div class="board-icon"><img
                                src="{{ URL::asset('frontend/assets/images/home/production.svg') }}"
                                alt=""></div>
                        <span class="ps-4">
                            <div class="head-board">84+</div>
                            <div class="head-board-desc">{!!__('home.products')!!}</div>
                        </span>
                    </div>
                    <div class="board-desc col-lg-3 col-6">

                        <div class="board-icon"><img
                                src="{{ URL::asset('frontend/assets/images/home/pos.svg') }}"
                                alt=""></div>
                        <span class="ps-4">
                            <div class="head-board">10K</div>
                            <div class="head-board-desc">{!!__('home.pos')!!}</div>
                        </span>
                    </div>
                </div>
            </div>
        </section>
        @if ($activities)
            <section class="events">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="events-body">
                                <div class="row">
                                    <div class="swiper mySwiper2">
                                        <div class="swiper-wrapper">
                                            @foreach ($activities as $activity)
                                                <div class="swiper-slide">
                                                    <div class="col-xl-7 col-md-6 col-12">
                                                        <img src="{{ URL::asset('images/activities/' . $activity->image) }}"
                                                            alt="">
                                                    </div>
                                                    <div class="col-xl-4 event-col-left col-md-5 col-12">
                                                        <div class="events-desc">
                                                            @if (app()->getLocale() == 'sq')
                                                                <h2 class="d-desktop"><span>EVENTET</span></h2>
                                                            @else<h2 class="d-desktop">OUR <span>EVENTS</span>
                                                                </h2>
                                                            @endif
                                                            <h2 class="card-title d-mobile">
                                                                @if (app()->getLocale() == 'sq')
                                                                    {{ $activity->title }}
                                                                @else
                                                                    {{ $activity->title_en }}
                                                                @endif
                                                            </h2>
                                                            <p class="first-desc d-desktop">
                                                                @if (app()->getLocale() == 'sq')
                                                                    {{ $activity->title }}
                                                                @else
                                                                    {{ $activity->title_en }}
                                                                @endif
                                                            </p>
                                                            <div class="desc-event">
                                                                <p class="second-desc">
                                                                    @if (app()->getLocale() == 'sq')
                                                                        {!! substr($activity->description, 0, 180) !!}
                                                                    @else
                                                                        {!! substr($activity->description_en, 0, 180) !!}
                                                                    @endif
                                                                </p>
                                                            </div>
                                                            <a href="{{ route('activity', $activity->id) }}"><button
                                                                    class="btn btn-white">
                                                                    @if (app()->getLocale() == 'sq')
                                                                        MË SHUMË
                                                                    @else
                                                                        SEE MORE
                                                                    @endif
                                                                    <i
                                                                        class="fa-solid fa-arrow-right-long d-desktop"></i>
                                                                </button></a>
                                                            <div class="buttons-event d-desktop">
                                                                <button class="btn btn-arrow swiper-button-prev2"><i
                                                                        class="fa-solid fa-arrow-left-long"></i></button>
                                                                <button class="btn btn-arrow swiper-button-next2"><i
                                                                        class="fa-solid fa-arrow-right-long"></i></button>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>

                                        <div class="buttons-event d-mobile">
                                            <button class="btn btn-arrow swiper-button-prev2"><i
                                                    class="fa-solid fa-arrow-left-long"></i></button>
                                            <button class="btn btn-arrow swiper-button-next2"><i
                                                    class="fa-solid fa-arrow-right-long"></i></button>
                                        </div>
                                    </div>

                                    <div class="swiper-pagination1 d-desktop"></div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif
        <hr class="d-mobile">
        <section class="combination-products">
            <div class="container">
                <h2 class="combination-head">{!!__('home.best combination span')!!}</h2>
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-6">
                        <a href="{{ route('product', ['id' => 1, 'title' => 'Amita']) }}" style="text-decoration:none; color:#000;">
                        <div class="product-box">
                            <img class="w-100 product-img"
                                src="{{ URL::asset('images/products/Combination-products1.png') }}" alt="">
                            <div class="product-box-desc">
                                <h5 class="product-title">Mollë Jeshile</h5>
                                <img class="product-arrow" src="{{ URL::asset('images/products/Arrow.svg') }}"
                                    alt="">
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 col-6">
                        <a href="{{ route('product', ['id' => 1, 'title' => 'Amita']) }}" style="text-decoration:none; color:#000;">
                        <div class="product-box product-box-bottom">
                            <img class="product-img w-100" src="{{ URL::asset('images/products/JUICE-Web.png') }}"
                                alt="">
                            <div class="product-box-desc">
                                <h5 class="product-title">{{__('home.new package')}}</h5>
                                <img class="product-arrow" src="{{ URL::asset('images/products/Arrow.svg') }}"
                                    alt="">
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 col-6">
                        <a href="{{ route('product', ['id' => 3, 'title' => 'Papadoupoulos']) }}" style="text-decoration:none; color:#000;">
                        <div class="product-box">
                            <img class=" product-img w-100" src="{{ URL::asset('images/products/caprice.png') }}"
                                alt="">
                                
                            <div class="product-box-desc">
                                <h5 class="product-title">Feel the roll</h5>
                               <img class="product-arrow" src="{{ URL::asset('images/products/Arrow.svg') }}"
                                    alt=""> 
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 col-6">
                        <a href="{{ route('product', ['id' => 2, 'title' => 'Amita-Free']) }}" style="text-decoration:none; color:#000;">
                        <div class="product-box product-box-bottom">
                            <img class="product-img w-100" src="{{ URL::asset('images/products/New-Formula.png') }}"
                                alt="">
                            <div class="product-box-desc">
                                <h5 class="product-title">{{__('home.new formula')}}</h5>
                                <img class="product-arrow" src="{{ URL::asset('images/products/Arrow.svg') }}"
                                    alt="">
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>


        <section class="work-together">
            <div class="container-fluid ps-0">
                <div class="row">
                    <div class="col-xl-6 col-md-6 col-12">
                        <img src="{{ URL::asset('images/work/delivery-company.png') }}" alt="">
                    </div>
                    <div class="col-xl-6 col-md-6 col-12 work-desc">
                        <h4>{!! __('home.work together')!!}</span></h4>
                        <a href="{{ route('contact') }}"><button class="btn btn-dark">{{__('home.send message')}}</button></a>
                    </div>
                </div>
            </div>
        </section>

        @include('layouts.frontend.partials.footer')
    </div>
    {{-- @include('layouts.frontend.partials.footer') --}}
    @include('layouts.frontend.partials.footer-assets')
    <script>
        var swiper = new Swiper(".mySwiper", {
            // cssMode: true,
            slidesPerView: 2.4,
            spaceBetween: 20,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                640: {
                    slidesPerView: 3,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 40,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 50,
                },
            },
            mousewheel: true,
            keyboard: true,
        });



        var swiper2 = new Swiper(".mySwiper2", {
            slidesPerView: 1,
            spaceBetween: 20,
            navigation: {
                nextEl: ".swiper-button-next2",
                prevEl: ".swiper-button-prev2",
            },
            breakpoints: {
                640: {
                    slidesPerView: 1,
                    spaceBetween: 10,
                },
                768: {
                    slidesPerView: 1.1,
                    spaceBetween: 10,
                },
                1024: {
                    slidesPerView: 1.1,
                    spaceBetween: 10,
                },
            },
            pagination: {
                el: ".swiper-pagination1",
                clickable: true,
            },
        });

        var swiper = new Swiper(".mySwiper3", {
            navigation: {
                nextEl: ".swiper-button-next3",
                prevEl: ".swiper-button-prev3",
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>

    <script>
        var productBox = document.querySelectorAll('.product-box');
        productBox.forEach((box) => {
            const arrowImage = box.querySelector('.product-arrow');
            const productTitle = box.querySelector('.product-title');
            box.addEventListener('mouseover', () => {
                arrowImage.style.display = 'flex';
                productTitle.style.color = '#D2302D';
            });
            box.addEventListener('mouseout', () => {
                arrowImage.style.display = 'none';
                productTitle.style.color = '#2D2D2D';
            });
        });

        var listBrands = document.querySelectorAll('.brand');
        listBrands.forEach((brand) => {
            const brandInfo = brand.querySelector('.brand-info');
            const brandImg = brand.querySelector('.brand-img');
            brand.addEventListener('mouseover', () => {
                brandInfo.style.display = ' flex';
                brandInfo.style.transform = ' translateY(42px)';
                brandImg.style.transform = 'translateY(-1.1rem)';
            });
            brand.addEventListener('mouseout', () => {
                brandInfo.style.transform = 'translateY(-1.1rem)';
                brandInfo.style.display = ' none';
                brandImg.style.transform = 'translateY(0)';
            });
        });
    </script>

    <script>
        var cardServices = document.querySelectorAll('.card-services');
        cardServices.forEach((card) => {
            const cardImage = card.querySelector('.card-img-top');
            const cardTitle = card.querySelector('.card-title');
            const cardText = card.querySelector('.card-text');
            const cardHr = card.querySelector('.card-hr');
            card.addEventListener('mouseover', () => {
                if (window.innerWidth < 500) {
                    cardImage.style.display = 'none';
                    cardTitle.style.display = 'none';
                    cardText.style.display = 'block';
                    cardHr.style.display = 'block';
                }
            });
            card.addEventListener('mouseout', () => {
                if (window.innerWidth < 500) {
                    cardImage.style.display = 'flex';
                    cardTitle.style.display = 'block';
                    cardText.style.display = 'none';
                    cardHr.style.display = 'none';
                }
            });
        });
    </script>
</body>

</html>
