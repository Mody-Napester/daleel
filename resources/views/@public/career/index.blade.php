@extends('@public._layouts.master')

@section('page_title') {{ trans('careers.Careers') }} @endsection

@section('page_content')

    <!-- inner banner -->
    <section class="inner-banner">
        <style>
            .inner-banner {
                background-image: url({{ url('assets/wp-content/themes/execution/assets/images/career-banner.jpg') }});
            }
        </style>
        <div class="w3l-breadcrumb py-5 dsk-rt">
            <div class="container py-xl-5 py-md-4 mt-5 AboutPageBanner">
                <h4 class="inner-text-title font-weight-bold mb-sm-2">{{ trans('careers.Careers') }}</h4>

                <ul class="breadcrumbs-custom-path AllBreadcrumbs">
                    <a href="{{ route('public.home.index') }}">{{ trans('home.Home') }}</a> <i class="fa fa-fw @if(lang() == 'ar') fa-angle-double-left @else fa-angle-double-right @endif"></i> {{ trans('careers.Careers_page') }}
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
                    <h5 class="small-title-2">{{ trans('careers.Please_fill_this_form') }}</h5>
                    <h3 class="title-style-2">{{ trans('careers.Join_our_team') }}</h3>
                </div>

                <div class="col-md-6 section-heading mt-md-0 mt-2">
                    <p>{{ trans('careers.Text') }}</p>
                </div>

            </div>


            <div class="contact-w3pvt-form mt-5 pt-lg-4">
                <form method="post" class="w3layouts-contact-fm" enctype="multipart/form-data" action="{{ route('public.career.store') }}">
                    @csrf

                    <div class="row main-cont-sec">
                        <div class="col-md-4 left-cont-contact">
                            <div class="form-group mb-3">
                                <label for="name">{{ trans('careers.Name') }}</label>
                                <input class="form-control" type="text" name="name" id="name" placeholder="" required="">
                            </div>
                            <div class="form-group mb-3">
                                <label for="email">{{ trans('careers.Email') }}</label>
                                <input class="form-control" type="email" name="email" id="email" placeholder="" required="">
                            </div>
                            <div class="form-group mb-3">
                                <label for="phone">{{ trans('careers.Phone') }}</label>
                                <input class="form-control" type="text" name="phone" id="phone" placeholder="" required="">
                            </div>
                            <div class="form-group mb-3">
                                <label for="gender">{{ trans('careers.Gender') }}</label>
                                <select class="select2" name="gender" id="gender" style="width: 100%;">
                                    <option value="1">Male</option>
                                    <option value="0">Female</option>
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label for="y_o_experience">{{ trans('careers.Years_of_experience') }}</label>
                                <input class="form-control" type="text" name="y_o_experience" id="y_o_experience" placeholder="" required="">
                            </div>
                        </div>
                        <div class="col-md-4 left-cont-contact">
                            <div class="form-group mb-3">
                                <label for="lang_pair">{{ trans('careers.Language_Pair') }}</label>
                                <input class="form-control" type="text" name="lang_pair" id="lang_pair" placeholder="" required="">
                            </div>
                            <div class="form-group mb-3">
                                <label for="daily_out_put_capacity">{{ trans('careers.Daily_output_capacity') }}</label>
                                <input class="form-control" type="text" name="daily_out_put_capacity" id="daily_out_put_capacity" placeholder="" required="">
                            </div>
                            <div class="form-group mb-3">
                                <label for="job_type">{{ trans('careers.Job_Type') }}</label>
                                <select class="select2" name="job_type" id="job_type" style="width: 100%;">
                                    <option value="1">Full Time</option>
                                    <option value="2">Part Time</option>
                                    <option value="3">Freelance</option>
                                    <option value="4">From Home</option>
                                    <option value="5">Permanent</option>
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label for="speciality">{{ trans('careers.Speciality') }}</label>
                                <input class="form-control" type="text" name="speciality" id="speciality" placeholder="" required="">
                            </div>
                            <div class="form-group mb-3">
                                <label for="cv">{{ trans('careers.Attach_CV') }} (png,jpg,pdf,dox,docx)</label>
                                <input class="form-control" type="file" name="cv" id="cv" accept=".doc,.docx,.png,.jpg,.pdf" required="">
                            </div>

                        </div>
                        <div class="col-md-4 right-cont-contact">
                            <div class="form-group">
                                <label for="address">{{ trans('careers.Address') }}</label>
                                <textarea class="form-control" name="address" id="address" placeholder="" required=""></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group-2 mt-3 text-right">
                        <button type="submit" class="btn btn-style">{{ trans('careers.Submit') }}</button>
                    </div>
                </form>
            </div>

        </div>
    </section>
    <!-- /contact-section -->

@endsection

@section('styles') @endsection

@section('scripts') @endsection
