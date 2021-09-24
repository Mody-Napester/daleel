@extends('@public._layouts.master')

@section('page_title') {{ trans('resources.Resources') }} @endsection

@section('page_content')

    <!-- inner banner -->
    <section class="inner-banner">
        <style>
            .inner-banner {
                background-image: url({{ url('assets/wp-content/themes/execution/assets/images/inner-banner.jpg') }});
            }
        </style>
        <div class="w3l-breadcrumb py-5 dsk-rt">
            <div class="container py-xl-5 py-md-4 mt-5 AboutPageBanner">
                <h4 class="inner-text-title font-weight-bold mb-sm-2">{{ trans('resources.Resources') }}</h4>
                <ul class="breadcrumbs-custom-path AllBreadcrumbs">
                    <a href="{{ route('public.home.index') }}">{{ trans('home.Home') }}</a> <i class="fa fa-fw @if(lang() == 'ar') fa-angle-double-left @else fa-angle-double-right @endif"></i> {{ trans('resources.Resources_page') }}
                </ul>
            </div>
        </div>
    </section>
    <!-- //inner banner -->


    <div class="container resource-section py-5 dsk-rt">
            <div class="row align-items-center pt-5">
                <div class="col-md-6 section-heading">
                    <h5 class="small-title-2">{{ trans('resources.Web_Resources') }}</h5>
                    <h3 class="title-style-2">{{ trans('resources.Our_Best_Resources') }}</h3>
                </div>
                <div class="col-md-6 section-heading mt-md-0 mt-2">
                    <p>{{ trans('resources.text') }}</p>
                </div>
            </div>
    </div>

    <!-- Resources -->
    <div class="container resource-section py-5">
        @include('@public._layouts.partials.resources')
    </div>
    <!-- Resources -->

    <!-- Call -->
    @include('@public._layouts.partials.call_to_action_quotation')
    <!-- Call -->

    <!-- Testimonials -->
    @include('@public._layouts.partials.testimonials')
    <!-- Testimonials -->

@endsection

@section('styles') @endsection

@section('scripts') @endsection



