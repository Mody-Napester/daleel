@extends('@public._layouts.master')

@section('page_title') {{ trans('clients.Clients') }} @endsection

@section('page_content')

    <!-- inner banner -->
    <section class="inner-banner">
        <style>
            .inner-banner {
                background-image: url({{ url('assets/wp-content/themes/execution/assets/images/main-banner.jpg') }});
            }
        </style>
        <div class="w3l-breadcrumb py-5 dsk-rt">
            <div class="container py-xl-5 py-md-4 mt-5 AboutPageBanner">
                <h4 class="inner-text-title font-weight-bold mb-sm-2">{{ trans('clients.Clients') }}</h4>
                <ul class="breadcrumbs-custom-path AllBreadcrumbs">
                    <a href="{{ route('public.home.index') }}">{{ trans('home.Home') }}</a> <i class="fa fa-fw @if(lang() == 'ar') fa-angle-double-left @else fa-angle-double-right @endif"></i> {{ trans('clients.Clients_page') }}
                </ul>
            </div>
        </div>
    </section>
    <!-- //inner banner -->

    <div class="container service-section py-5 dsk-rt">
        <div class="row align-items-center pt-5">
            <div class="col-md-6 section-heading">
                <h5 class="small-title-2">{{ trans('clients.Clients') }}</h5>
                <h3 class="title-style-2">{{ trans('clients.Our_Best_Clients') }}</h3>
            </div>
            <div class="col-md-6 section-heading mt-md-0 mt-2">
                <p>{{ trans('clients.text') }}</p>
            </div>
        </div>
    </div>

    <!-- Clients Logos -->
    @include('@public._layouts.partials.clients_logos')
    <!-- Clients Logos -->

    <!-- Call -->
    @include('@public._layouts.partials.call_to_action_quotation')
    <!-- Call -->

    <!-- Testimonials -->
    @include('@public._layouts.partials.testimonials')
    <!-- Testimonials -->

@endsection

@section('styles') @endsection

@section('scripts') @endsection



