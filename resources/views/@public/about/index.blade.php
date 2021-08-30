@extends('@public._layouts.master')

@section('page_title') {{ trans('about.About_us') }} @endsection

@section('page_content')

<!-- inner banner -->
<section class="inner-banner">
    <style>
        .inner-banner {
            background-image: url({{ url('assets/wp-content/themes/execution/assets/images/about-banner.jpg') }});
        }
    </style>
    <div class="w3l-breadcrumb py-5 dsk-rt">
        <div class="container py-xl-5 py-md-4 mt-5 AboutPageBanner">
            <h4 class="inner-text-title font-weight-bold mb-sm-2">{{ trans('about.About_us') }}</h4>
            <ul class="breadcrumbs-custom-path AllBreadcrumbs">
                <a href="{{ route('public.home.index') }}">{{ trans('home.Home') }}</a> <i class="fa fa-fw @if(lang() == 'ar') fa-angle-double-left @else fa-angle-double-right @endif"></i> {{ trans('home.About_page') }}
            </ul>
        </div>
    </div>
</section>
<!-- //inner banner -->

<!-- AboutPage about section -->
<section class="w3l-text-6 py-5" id="about">
    <div class="text-6-mian py-md-5 py-4">
        <div class="container AboutPageAbout dsk-rt">

            <div class="row top-cont-grid align-items-center">

                <div class="col-lg-6 left-img pr-lg-4 order-lg-first order-last">
                    <img src="{{ url('assets/wp-content/themes/execution/assets/images/about1.jpg') }}"
                         alt="" class="img-responsive img-fluid" />
                    <div class="row mt-3">
                        <div class="col-6 img-pad pr-2">
                            <img src="{{ url('assets/wp-content/themes/execution/assets/images/about2.jpg') }}"
                                 alt="" class="img-responsive img-fluid" />
                        </div>
                        <div class="col-6 img-pad-2 pl-2">
                            <img src="{{ url('assets/wp-content/themes/execution/assets/images/about3.jpg') }}"
                                 alt="" class="img-responsive img-fluid" />
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 text-6-info mb-lg-0 mb-5 pl-xl-5 order-lg-last order-first">
                    <h5 class="small-title-2">{{ trans('about.About_us') }}</h5>
                    <h3 class="title-style-2 mb-3">{{ trans('about.About_us_text1') }}</h3>
                    <p>{{ trans('about.About_us_text2') }}</p>
                    <p class="mt-4">{{ trans('about.About_us_text3') }}</p>
{{--                    <a href="#url" class="btn btn-style mt-lg-5 mt-4">Learn More</a>--}}
                </div>

            </div>

        </div>
    </div>
</section>
<!-- AboutPage about section -->

<!-- Why choose us -->
@include('@public._layouts.partials.why_choose_us')
<!-- Why choose us -->

<!-- Skills -->
{{--@include('@public._layouts.partials.skills')--}}
<!-- Skills -->

<!-- Testimonials -->
@include('@public._layouts.partials.testimonials')
<!-- Testimonials -->

<!-- Teams -->
@include('@public._layouts.partials.teams')
<!-- Teams -->

@endsection

@section('styles') @endsection

@section('scripts') @endsection



