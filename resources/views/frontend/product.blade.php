@include('layouts.frontend.partials.header-assets')
@include('layouts.frontend.partials.header')
<style>
    .hero-product-image{
        width:100%;
    }
</style>
<body class="product-body">
    <div class="wrapper-product-head">
        <div class="hero-products">
            <div class="hero-product-image">
                <img src="{{ Url::asset('images/brands/' . $brand->banner) }}" alt="hero" class="img-fluid">
            </div>
        </div>
    </div>
    <section class="second-section-product">
        <div class="product-section-head">
            <h2 class="product-header">
                @if (app()->getLocale() == 'sq')
                    {{ $brand->title }}
                @else
                    {{ $brand->title_en }}
                @endif
            </h2>
            <p class="product-description">
                @if (app()->getLocale() == 'sq')
                    {!! $brand->description !!}
                @else
                    {!! $brand->description_en !!}
                @endif
            </p>
        </div>
    </section>

    <section class="portfolio-area pt-40 pb-90 pt-md-40 pb-md-30 pt-xs-40 pb-xs-30">
        <h2 class="all-products-header">Enjoy Amita in every moment!</h2>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 text-center">
                    <div class="portfolio-menu mb-40">
                        @if($categories)
                        <button class="gf_btn active" data-filter="*">
                            @if (app()->getLocale() == 'sq')
                                Të Gjitha
                            @else
                                All
                        </button>
                        @endif
                        @foreach ($categories as $category)
                            <button class="gf_btn" data-filter=".{{ str_replace(' ', '-', $category->name) }}">
                                @if (app()->getLocale() == 'sq')
                                    {{ $category->name }}
                                @else
                                    {{ $category->name_en }}
                                @endif
                            </button>
                        @endforeach
                        @endif
                    </div>
                </div>
            </div>
            @if($products)
            <div class="grid row align-items-center">
                @foreach ($products as $product)
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6 grid-item @if ($product->category)
                        {{ str_replace(' ','-',$product->category) }}
                    @endif">
                        <div class="card card-products"
                            style="width: 220px; justify-content:center;align-items:center;">
                            <div class="card-head">
                                <img src="{{ URL::asset('images/products/' . $product->image) }}" class="card-img-top"
                                    alt="...">
                            </div>

                            <div class="card-body">
                                <h6 class="card-title">{{ $product->name }}</h6>
                                <hr class="hr-margins">
                                @if($product->lifespan)
                                <div class="row">
                                    <div class="col-7">
                                        <p class="card-text">Jetëgjatësia</p>
                                    </div>
                                    <div class="col-5">
                                        <p class="card-text-left">{{ $product->lifespan }}</p>
                                    </div>
                                </div>
                                <hr class="hr-margins">
                                @endif
                                @if($product->system_code)
                                <div class="row">
                                    <div class="col-6">
                                        <p class="card-text">Kodi në sistem</p>
                                    </div>
                                    <div class="col-6">
                                        <p class="card-text-left">{{ $product->system_code }}</p>
                                    </div>
                                </div>
                                <hr class="hr-margins">
                                @endif
                                @if($product->package)
                                <div class="row">
                                    <div class="col-6">
                                        <p class="card-text">Paketimi</p>
                                    </div>
                                    <div class="col-6">
                                        <p class="card-text-left">{{ $product->package }}</p>
                                    </div>
                                </div>
                                <hr class="hr-margins">
                                @endif
                                @if($product->pieces)
                                <div class="row">
                                    <div class="col-6">
                                        <p class="card-text">Copë/Koli</p>
                                    </div>
                                    <div class="col-6">
                                        <p class="card-text-left">{{ $product->pieces }}</p>
                                    </div>
                                </div>
                                <hr class="hr-margins">
                                @endif
                                @if($product->barcode)
                                <div class="row">
                                    <div class="col-xl-6 col-5">
                                        <p class="card-text barcode-text">Barkodi: </p>
                                    </div>
                                    <div class="col-xl-6 col-7 barcode-span"> <span
                                            class="barcode-span">{{ $product->barcode }}</span> </div>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            @endif
            <!--/.row-->
        </div>
        <!--/.container-->
    </section>
    <section class="other-products-banner">
        <div class="container">
            <div class="row brand-category-body">
                <h2>AMITA JUICE, A SUCCESS STORY</h2>
                @foreach ($other_brands as $brands)
                <div class="col-lg-6 brand-category-col">
                    <div class="product-category-box-2 product-category-box">
                        <a  href="{{ route('product',['id' => $brands->id,'title' => str_replace(' ','-',$brands->name)]) }}">
                        <div class="category-box-overlay"></div>
                        @if($brands->name == 'AMITA FREE')
                        <img src="{{ Url::asset('images/brands/'.$brands->image) }}"
                            alt="#" class="img-fluid d-desktop">
                        <img src="{{ Url::asset('frontend/assets/category/Amita-FREE-MOBILE-Brand-Cover.jpg') }}"
                                    alt="#" class="img-fluid d-mobile">
                        @else
                        <img src="{{ Url::asset('images/brands/'.$brands->image) }}"
                            alt="#" class="img-fluid">
                        @endif
                        
                        <div class="span-category-box">
                            <span class="span-title-box">{{ $brands->name }}</span>
                        </div>
                        </a>
                    </div>
                </div>
                @endforeach
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
                    <h4>{!! __('home.work together')!!}</span></h4>
                    <a href="{{ route('contact') }}"><button class="btn btn-dark">{{__('home.send message')}}</button></a>
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
