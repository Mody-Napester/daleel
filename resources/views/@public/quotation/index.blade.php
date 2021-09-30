@extends('@public._layouts.master')

@section('page_title') {{ trans('quotation.Quotation') }} @endsection

@section('page_content')

    <!-- inner banner -->
    <section class="inner-banner">
        <style>
            .inner-banner {
                background-image: url({{ url('assets/images/media/' . site_file('request_consult_page_banner')['file'] ) }});
            }
        </style>
        <div class="w3l-breadcrumb py-5 dsk-rt">
            <div class="container py-xl-5 py-md-4 mt-5 AboutPageBanner">
                <h4 class="inner-text-title font-weight-bold mb-sm-2">{{ trans('quotation.Quotation') }}</h4>

                <ul class="breadcrumbs-custom-path AllBreadcrumbs">
                    <a href="{{ route('public.home.index') }}">{{ trans('home.Home') }}</a> <i class="fa fa-fw @if(lang() == 'ar') fa-angle-double-left @else fa-angle-double-right @endif"></i> {{ trans('quotation.Quotation_page') }}
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
                    <h5 class="small-title-2">{{ trans('quotation.Use_this_form_and_send_us_a_message') }}</h5>
                    <h3 class="title-style-2">{{ trans('quotation.Ask_for_quotation') }}</h3>
                </div>

                <div class="col-md-6 section-heading mt-md-0 mt-2">
                    <p>{{ trans('quotation.text') }}</p>
                </div>

            </div>


            <div class="contact-w3pvt-form mt-5 pt-lg-4">
                <form method="post" class="w3layouts-contact-fm" enctype="multipart/form-data" action="{{ route('public.quotation.store') }}">
                    @csrf

                    <div class="row main-cont-sec">
                        <div class="col-md-6 left-cont-contact">
                            <div class="form-group mb-3">
                                <label for="bname">{{ trans('quotation.Business_Name') }}</label>
                                <input class="form-control" type="text" name="bname" id="bname" placeholder="">
                            </div>
                            <div class="form-group mb-3">
                                <label for="name">{{ trans('quotation.Name') }} <span class="required">*</span></label>
                                <input class="form-control" type="text" name="name" id="name" placeholder="" required="">
                            </div>
                            <div class="form-group mb-3">
                                <label for="email">{{ trans('quotation.Email') }} <span class="required">*</span></label>
                                <input class="form-control" type="email" name="email" id="email" placeholder="" required="">
                            </div>
                            <div class="form-group mb-3">
                                <label for="phone">{{ trans('quotation.Phone') }}</label>
                                <input class="form-control" type="text" name="phone" id="phone" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-6 right-cont-contact">
                            <div class="form-group">
                                <label for="comments">{{ trans('quotation.Write_Message') }}</label>
                                <textarea class="form-control" name="comments" id="comments" placeholder=""></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group-2 mt-3 text-right">
                        <button type="submit" class="btn btn-style">{{ trans('quotation.Submit') }}</button>
                    </div>
                </form>
            </div>

        </div>
    </section>
    <!-- /contact-section -->

@endsection

@section('styles') @endsection

@section('scripts') @endsection
