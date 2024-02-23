@include('layouts.frontend.partials.header-assets')
<link rel="stylesheet" href="https://unpkg.com/photoswipe@5.4.2/dist/photoswipe.css" />
@include('layouts.frontend.partials.header')
<style>
    .activity-bg-image{
    width:100%;
    }
</style>
<body class="activities-body">
    <div class="background-body">
        <div class="container">
            <div class="hero-activities">
                <div class="hero-activities-image">
                    <img src="{{ URL::asset('images/activities/' . $activity->image) }}" alt="activities-img"
                        class="img-fluid activity-bg-image">
                </div>
                <div class="hero-activities-body">
                    <div class="row">
                        <div class="col-lg-8 col-12">
                            <h2 class="activity-title">
                                @if (app()->getLocale() == 'sq')
                                    {{ $activity->title }}
                                @else
                                    {{ $activity->title_en }}
                                @endif
                            </h2>
                            <p class="activity-description">
                                @if (app()->getLocale() == 'sq')
                                    {!! $activity->description !!}
                                @else
                                    {!! $activity->description_en !!}
                                @endif
                            </p>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="location-box">
                                <div class="row">
                                    <div class="col-12 location-box-cols">
                                        <i class="fa-solid fa-location-dot"></i> <span> {{ $activity->location }}</span>
                                    </div>
                                    <div class="col-12 location-box-cols">
                                        <i class="fa-regular fa-calendar"></i> <span>
                                            {{ $activity->date->format('d/M/y') }}</span>
                                    </div>
                                    <div class="col-12">
                                        <i class="fa-regular fa-clock"></i><span>{{ $activity->time }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @if ($activity->other_images)
                        <hr>
                        <div class="other-images-activity">
                            <h4 class="title-other-images">
                                @if (app()->getLocale() == 'sq') Imazhe nga Eventi
                                @else
                                    Images About Event @endif
                            </h4>
                            <div class="swiper mySwiperActivities" id="my-gallery">
                                <ul class="swiper-wrapper" itemscope itemtype="http://schema.org/ImageGallery">
                                    <?php
                                    $i = 1;
                                    ?>
                                    <!-- Slides -->
                                    @foreach ($activity->other_images as $image)
                                        <li id="slide_{{ $i++ }}" class="swiper-slide"
                                            itemprop="associatedMedia" itemscope
                                            itemtype="http://schema.org/ImageObject">
                                            <a itemprop="contentUrl"
                                                href="{{ URL::asset('images/activities/' . $image) }}"
                                                data-pswp-width="1669" data-pswp-height="2500" target="_blank">
                                                <img src="{{ URL::asset('images/activities/' . $image) }}"
                                                    alt=".." itemprop="thumbnail" alt=""  />
                                            </a>
                                        </li>
                                    @endforeach

                                </ul>
                                <!-- If we need pagination -->
                                <div class="swiper-pagination"></div>

                                <!-- If we need navigation buttons -->
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>
                            </div>
                        </div>
                    @endif
                </div>

            </div>
        </div>
        @if(!empty($other_activities[0]))
        <div class="container-fluid">
            <div class="browse-other-activities">
                <h4 class="other-activities-title">
                   {{__('activity.browse other activity')}}
                </h4>
                <section class="events">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-10 col-lg-12 col-md-12 col-12 events-primary-col">
                                <div class="events-body">
                                    <div class="row">
                                        <div class="swiper mySwiper2">
                                            <div class="swiper-wrapper">
                                                @foreach ($other_activities as $event)
                                                    <div class="swiper-slide">
                                                        <div class="col-xl-7 col-md-6 col-12">
                                                            <img src="{{ URL::asset('images/activities/' . $event->image) }}"
                                                                alt="">
                                                        </div>
                                                        <div class="col-xl-5 event-col-left col-md-5 col-12">
                                                            <div class="events-desc">
                                                                @if (app()->getLocale() == 'sq')
                                                                    <h2 class="d-desktop"><span>EVENTET</span></h2>
                                                                @else<h2 class="d-desktop">OUR <span>EVENTS</span>
                                                                    </h2>
                                                                @endif
                                                                <h2 class="card-title d-mobile">
                                                                    @if (app()->getLocale() == 'sq')
                                                                        {{ $event->title }}
                                                                    @else
                                                                        {{ $event->title_en }}
                                                                    @endif
                                                                </h2>
                                                                <p class="first-desc d-desktop"> @if (app()->getLocale() == 'sq')
                                                                  {{ $event->title }}
                                                              @else
                                                                  {{ $event->title_en }}
                                                              @endif
                                                                </p>
                                                                <div class="desc-event">
                                                                    <p class="second-desc">@if(app()->getLocale() == 'sq') {!! substr($event->description,0,200) !!} @else {!! substr($event->description_en,0,200) !!} @endif</p>
                                                                </div>
                                                                <a href="{{ route('activity',$event->id) }}"><button class="btn btn-white">@if(app()->getLocale() == 'sq')MË SHUMË @else SEE MORE @endif<i
                                                                        class="fa-solid fa-arrow-right-long"></i></button></a>
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

                                            <div class="buttons-event">
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
            </div>
        </div>
        @endif
    </div>
    <section class="third-section-activity">
        <h4 class="brand-category-title">
            @if (app()->getLocale() == 'sq') Zgjidh kategorinë e Produktit
            @else
                Choose Product Category @endif
        </h4>
        <div class="container">
            <div class="row brand-category-body">
                <div class="col-lg-6 brand-category-col">
                    <div class="product-category-box-1 product-category-box">
                        <a href="{{ route('product', ['id' => 1, 'title' => 'Amita']) }}">
                        <div class="category-box-overlay"></div>
                        <img src="{{ Url::asset('frontend/assets/category/Brand-Cover-Amita.png') }}" alt="#"
                            class="img-fluid img-amita">
                        <div class="span-category-box">
                            <span class="span-title-box">AMITA</span>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="col-lg-6 brand-category-col">
                        <div class="product-category-box-2 product-category-box">
                             <a href="{{ route('product', ['id' => 2, 'title' => 'Amita-Free']) }}">
                            <div class="category-box-overlay"></div>
                            <img src="{{ Url::asset('frontend/assets/category/P-Ballkanik-Brands-Cover-FREE.png') }}"
                                    alt="#" class="img-fluid d-desktop">
                            <img src="{{ Url::asset('frontend/assets/category/Amita-FREE-MOBILE-Brand-Cover.jpg') }}"
                            alt="#" class="img-fluid d-mobile">
                            <div class="span-category-box">
                                <span class="span-title-box">AMITA FREE</span>
                            </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 brand-category-col">
                        <div class="product-category-box-3 product-category-box">
                             <a href="{{ route('product', ['id' => 3, 'title' => 'Papadoupoulos']) }}">
                            <div class="category-box-overlay"></div>
                            <img src="{{ Url::asset('frontend/assets/category/papadopoulos-cover.png') }}"
                                alt="#" class="img-fluid">
                            <div class="span-category-box">
                                <span class="span-title-box">PAPADOUPOULOS</span>
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="list-brands">
        <div class="container-xl">
            <div class="row">
                <div class="col-12 list-brand-column">
                    <div class="brand">
                        <img class="brand-img" src="{{ URL::asset('images/brands/Amita-Partner.svg') }}" alt="">
                        <a href="#" class="brand-info">Read More</a>
                    </div>

                    <div class="brand">
                        <img class="brand-img" src="{{ URL::asset('images/brands/Amita-FREE-Partner.svg') }}"
                            alt="">
                        <a href="#" class="brand-info">Read More</a>
                    </div>

                    <div class="brand">
                        <img class="brand-img" src="{{ URL::asset('images/brands/Coca-Cola-Greek-Partner.svg') }}"
                            alt="">
                        <a href="#" class="brand-info">Read More</a>
                    </div>

                    <div class="brand">
                        <img class="brand-img" src="{{ URL::asset('images/brands/Tetra-Pak-Partner.svg') }}" alt="">
                        <a href="#" class="brand-info">Read More</a>
                    </div>

                    <div class="brand">
                        <img class="brand-img" src="{{ URL::asset('images/brands/Papadopoulos-Partner.svg') }}"
                            alt="">
                        <a href="#" class="brand-info">Read More</a>
                    </div>
                    
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
                    <h4>{!! __('home.work together')!!}</h4>
                    <a href="{{ route('contact') }}"><button class="btn btn-dark">{{__('home.send message')}}</button></a>
                </div>
            </div>
        </div>
    </section>
    @include('layouts.frontend.partials.footer')
    @include('layouts.frontend.partials.footer-assets')
    <script type="module">
        import PhotoSwipeLightbox from 'https://unpkg.com/photoswipe@5.4.2/dist/photoswipe-lightbox.esm.js';
        import PhotoSwipe from 'https://unpkg.com/photoswipe@5.4.2/dist/photoswipe.esm.js';

        const photo_swipe_options = {
            gallery: '#my-gallery',
            pswpModule: PhotoSwipe,
            // set background opacity
            bgOpacity: 1,
            showHideOpacity: true,
            children: 'a',
            loop: true,
            showHideAnimationType: 'zoom',
            /* options: fade, zoom, none */

            /* Click on image moves to the next slide */
            imageClickAction: 'next',
            tapAction: 'next',

            /* ## Hiding a specific UI element ## */
            zoom: false,
            close: true,
            counter: true,
            arrowKeys: true,
            /* ## Options ## */
            bgOpacity: "1",
            /* deafult: 0.8 */
            wheelToZoom: true,
            /* deafult: undefined */
        };

        const lightbox = new PhotoSwipeLightbox(photo_swipe_options);

        lightbox.init();

        lightbox.on('change', () => {
            const {
                pswp
            } = lightbox;
            swiper.slideTo(pswp.currIndex, 0, false);
            //   console.log('Slide index', pswp.currIndex);
            //console.log('Slide object', pswp.currSlide);
            //console.log('Slide object data', pswp.currSlide.data);
        });

        /* ### PhotoSwipe events ### */

        lightbox.on('afterInit', () => {
            const {
                pswp
            } = lightbox;
            if (swiper.params.autoplay.enabled) {
                swiper.autoplay.stop();
            };
        });

        lightbox.on('closingAnimationStart', () => {
            //console.log('closingAnimationStart');
            const {
                pswp
            } = lightbox;
            swiper.slideTo(pswp.currIndex, 0, false);
            /* if autoplay enabled == true -> autoplay.start() when close lightbox */
            if (swiper.params.autoplay.enabled) {
                swiper.autoplay.start();
            }
        });
    </script>
    <script>
        var swiper = new Swiper('.mySwiperActivities', {
            slidesPerView: 5,
            spaceBetween: 10,

            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            /* remove/comment to stop autoplay*/
            autoplay: {
                delay: 7000,
                disableOnInteraction: false
            },
            // keyboard control
            keyboard: {
                enabled: true,
            },
            breakpoints: {
                // when window width is >= 320px
                320: {
                    slidesPerView: 1.4,
                    spaceBetween: 20
                },
                // when window width is >= 480px
                480: {
                    slidesPerView: 2,
                    spaceBetween: 20
                },
                // when window width is >= 640px
                640: {
                    slidesPerView: 3.7,
                    spaceBetween: 40
                }
            }
        });
    </script>
    <script>
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
    </script>
    <script>
        var productCategoryBox = document.querySelectorAll('.product-category-box');
        productCategoryBox.forEach((box) => {
            const spanTitle = box.querySelector('.span-category-box');
            const boxOverlay = box.querySelector('.category-box-overlay');
            box.addEventListener('mouseover', () => {
                spanTitle.style.background = '#D2302D';
                spanTitle.style.color = '#fff';
                boxOverlay.style.display = 'none'
            });
            box.addEventListener('mouseout', () => {
                spanTitle.style.background = '#ffffff';
                spanTitle.style.color = '#000';
                boxOverlay.style.display = ''
            })
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
</body>
