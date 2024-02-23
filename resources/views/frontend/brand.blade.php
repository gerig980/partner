@include('layouts.frontend.partials.header-assets')
@include('layouts.frontend.partials.header')
<style>
    .brand-bg-image{
        width:100%;
    }
</style>
<body class="brand-body">
    <div class="wrapper-body-head">
        <div class="hero-brands">
            <div class="before-img-brands">
 @if (app()->getLocale() == 'sq')
                <img src="{{ Url::asset('frontend/assets/category/our-brands-header-al.svg') }}" alt="brand-img"
                   class="img-fluid brand-bg-image">
@else
<img src="{{ Url::asset('frontend/assets/category/our-brands-header-en.svg') }}" alt="brand-img"
                   class="img-fluid brand-bg-image">
@endif
            </div>
        </div>
    </div>
    <section class="second-section-brand">
        <h4 class="brand-category-title">
            @if (app()->getLocale() == 'sq')
                Zgjidh kategorinë e Produktit   
            @else
                Choose Product Category
            @endif
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
                    <h4>LETS WORK <span>TOGETHER</span></h4>
                    <a href="{{ route('contact') }}"><button class="btn btn-dark">SEND MESSAGE</button></a>
                </div>
            </div>
        </div>
    </section>

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

@include('layouts.frontend.partials.footer')
@include('layouts.frontend.partials.footer-assets')
