@extends('@public._layouts.master')

@section('page_title') {{ trans('contact.Contact') }} @endsection

@section('page_content')

<!-- inner banner -->
<section class="inner-banner">
    <style>
        .inner-banner {
            background-image: url({{ url('assets/images/media/' . site_file('contact_page_banner')['file'] ) }});
        }
    </style>
    <div class="w3l-breadcrumb py-5 dsk-rt">
        <div class="container py-xl-5 py-md-4 mt-5 AboutPageBanner">
            <h4 class="inner-text-title font-weight-bold mb-sm-2">{{ trans('contact.Contact') }}</h4>

            <ul class="breadcrumbs-custom-path AllBreadcrumbs">
                <a href="{{ route('public.home.index') }}">{{ trans('home.Home') }}</a> <i class="fa fa-fw @if(lang() == 'ar') fa-angle-double-left @else fa-angle-double-right @endif"></i> {{ trans('contact.Contact_page') }}
            </ul>
        </div>
    </div>
</section>
<!-- //inner banner -->

<!-- Contact section -->
<section class="w3l-contact-info-main py-5 dsk-rt" id="contact">
    <div class="container py-md-5 py-4 ContactSection">

        <div class="row align-items-center mb-5">

            <div class="col-md-6 section-heading">
                <h5 class="small-title-2">{{ trans('contact.Write_Message') }}</h5>
                <h3 class="title-style-2">{{ trans('contact.Get_in_Touch') }}</h3>
            </div>

            <div class="col-md-6 section-heading mt-md-0 mt-2">
                <p>{{ trans('contact.text') }}</p>
            </div>

        </div>

        <div class="row justify-content-center">

            <div class="col-lg-4 col-md-6">
                <div class="contact-address p-4">
                    <div class="contact-icon d-flex align-items-center">
                        <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
                        <div class="@if(lang() == 'ar') mr-3 @else ml-3 @endif">
                            <h5 class="contact-text">{{ trans('contact.Visit_Us') }} : </h5>
                            <p>{!! getFromJson($resource->address , lang()) !!}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                <div class="contact-address p-4">
                    <div class="contact-icon d-flex align-items-center">
                        <i class="fas fa-phone-alt" aria-hidden="true"></i>
                        <div class="@if(lang() == 'ar') mr-3 @else ml-3 @endif">
                            <h5 class="contact-text">{{ trans('contact.Call_Us') }} : </h5>
                            <a href="tel:{{ $resource->phone }}">{{ $resource->phone }}</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mt-lg-0 mt-4">
                <div class="contact-address p-4">
                    <div class="contact-icon d-flex align-items-center">
                        <i class="fas fa-envelope-open-text" aria-hidden="true"></i>
                        <div class="@if(lang() == 'ar') mr-3 @else ml-3 @endif">
                            <h5 class="contact-text">{{ trans('contact.Mail_Us') }} :</h5>
                            <a href="mailto:{{ $resource->email }}"> {{ $resource->email }}</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <div class="contact-w3pvt-form mt-5 pt-lg-4 ContactPageForm">

            <form method="post" class="w3layouts-contact-fm" enctype="multipart/form-data" action="{{ route('public.contact.store') }}">
                @csrf

                <div class="row main-cont-sec">
                    <div class="col-md-6 left-cont-contact">
                        <div class="form-group mb-3">
                            <label for="name">{{ trans('contact.Name') }}</label>
                            <input class="form-control" type="text" name="name" id="name" placeholder="" required="">
                        </div>
                        <div class="form-group mb-3">
                            <label for="email">{{ trans('contact.Email') }}</label>
                            <input class="form-control" type="email" name="email" id="email" placeholder="" required="">
                        </div>
                        <div class="form-group mb-3">
                            <label for="phone">{{ trans('contact.Phone') }}</label>
                            <input class="form-control" type="text" name="phone" id="phone" placeholder="" required="">
                        </div>
                        <div class="form-group mb-3">
                            <label for="subject">{{ trans('contact.Subject') }}</label>
                            <input class="form-control" type="text" name="subject" id="subject" placeholder="" required="">
                        </div>
                    </div>
                    <div class="col-md-6 right-cont-contact">
                        <div class="form-group">
                            <label for="message">{{ trans('contact.Message') }}</label>
                            <textarea class="form-control" name="message" id="message" placeholder="" required=""></textarea>
                        </div>
                    </div>
                </div>
                <div class="form-group-2 mt-3 text-right">
                    <button type="submit" class="btn btn-style">{{ trans('contact.Submit') }}</button>
                </div>
            </form>
        </div>

    </div>
</section>
<!-- /contact-section -->

<!-- Map -->
@include('@public._layouts.partials.map')
<!-- Map -->

@endsection

@section('styles') @endsection

@section('scripts') @endsection
