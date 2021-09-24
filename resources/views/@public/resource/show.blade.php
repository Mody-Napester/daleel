@extends('@public._layouts.master')

@section('page_title') {{ getFromJson($resource->title , lang()) }} @endsection

@section('page_content')

    <!-- inner banner -->
    <section class="inner-banner">
        <style>
            .inner-banner {
                background-image: url({{ url('assets/images/resource/'. $resource->banner) }});
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
            <div class="row pt-5">
                <div class="col-md-4">
                    <h5 class="small-title-2">{{ getFromJson($resource->category , lang()) }}</h5>
                    <h3 class="title-style-2">{{ getFromJson($resource->title , lang()) }}</h3>
                </div>
                <div class="col-md-8 section-heading mt-md-0 mt-2">
                    <p>{!! getFromJson($resource->details , lang()) !!}</p>
                </div>
            </div>
    </div>

    <!-- Call -->
    @include('@public._layouts.partials.call_to_action_quotation')
    <!-- Call -->

    <!-- Testimonials -->
    @include('@public._layouts.partials.testimonials')
    <!-- Testimonials -->

@endsection

@section('styles') @endsection

@section('scripts') @endsection



