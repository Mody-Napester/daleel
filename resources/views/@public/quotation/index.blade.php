@extends('@public._layouts.master')

@section('page_title') {{ trans('quotation.Quotation') }} @endsection

@section('page_content')

    <!-- inner banner -->
    <section class="inner-banner">
        <style>
            .inner-banner {
                background-image: url({{ url('assets/wp-content/themes/execution/assets/images/pricing-banner.jpg') }});
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
                        <div class="col-md-4 left-cont-contact">
                            <div class="form-group mb-3">
                                <label for="name">{{ trans('quotation.Business_Name') }}</label>
                                <input class="form-control" type="text" name="name" id="name" placeholder="" required="">
                            </div>
                            <div class="form-group mb-3">
                                <label for="email">{{ trans('quotation.Email') }}</label>
                                <input class="form-control" type="email" name="email" id="email" placeholder="" required="">
                            </div>
                            <div class="form-group mb-3">
                                <label for="phone">{{ trans('quotation.Phone') }}</label>
                                <input class="form-control" type="text" name="phone" id="phone" placeholder="" required="">
                            </div>
                            <div class="form-group mb-3">
                                <label for="s_lang">{{ trans('quotation.Source_Language') }}</label>
                                <select class="select2" name="s_lang" id="s_lang" style="width: 100%;">
                                    @foreach(\Illuminate\Support\Facades\DB::table('languages')->get() as $language)
                                        <option value="{{ $language->iso_639_1  }}">{{ $language->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 left-cont-contact">
                            <div class="form-group mb-3">
                                <label for="volume">{{ trans('quotation.Expected_Volume') }}</label>
                                <input class="form-control" type="text" name="volume" id="volume" placeholder="" required="">
                            </div>
                            <div class="form-group mb-3">
                                <label for="field">{{ trans('quotation.Field_of_translation') }}</label>
                                <input class="form-control" type="text" name="field" id="field" placeholder="" required="">
                            </div>
                            <div class="form-group mb-3">
                                <label for="sample">{{ trans('quotation.Attach_a_sample') }} (png,jpg,pdf,dox,docx)</label>
                                <input class="form-control" type="file" name="sample" id="sample" accept=".doc,.docx,.png,.jpg,.pdf">
                            </div>
                            <div class="form-group mb-3">
                                <label for="t_lang">{{ trans('quotation.Target_Language') }}</label>
                                <select class="select2" name="t_lang" id="t_lang" style="width: 100%;">
                                    @foreach(\Illuminate\Support\Facades\DB::table('languages')->get() as $language)
                                        <option value="{{ $language->iso_639_1  }}">{{ $language->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 right-cont-contact">
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
