@include('layouts.frontend.partials.header-assets')
@include('layouts.frontend.partials.header')
<style>
    .activity-bg-image{
        width:100%;
    }
</style>
<body class="activity-body">
    <div class="wrapper-body-head">
        <div class="hero-activity">
            <div class="before-img-activity">
                @if (app()->getLocale() == 'sq')
                <img src="{{ Url::asset('frontend/assets/category/activities-header-al.svg') }}" alt="brand-img"
                   class="img-fluid activity-bg-image">
@else
<img src="{{ Url::asset('frontend/assets/category/activities-header-en.svg') }}" alt="brand-img"
                   class="img-fluid activity-bg-image">
@endif
            </div>
        </div>
    </div>

    <section class="first-section-activity">
        <h4 class="first-section-activity-title">@if(app()->getLocale() == 'sq')Shiko Aktivitete Tona @else See Our Activities @endif</h4>
        <div class="container">
            <div class="row">
                @foreach ($activities as $activity)
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card card-activities">
                        <img src="{{ URL::asset('images/activities/'. $activity->image) }}" class="card-img-top img-fluid" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">@if(app()->getLocale() == 'sq'){{ $activity->title }} @else {{ $activity->title_en }} @endif</h5>
                            <p class="card-text">@if(app()->getLocale() == 'sq') {!! substr($activity->description,0,100) !!} @else {!! substr($activity->description_en,0,100) !!} @endif</p>
                            <a href="{{ route('activity',$activity->id) }}" class="btn btn-activity">@if(app()->getLocale() == 'sq') Më Shumë @else See More @endif</a>
                        </div>
                    </div>
                </div>
                @endforeach
                {{ $activities->links() }}
            </div>
        </div>
    </section>
</body>


@include('layouts.frontend.partials.footer')
@include('layouts.frontend.partials.footer-assets')
