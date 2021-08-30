@extends('@public._layouts.master')

@section('page_title') {{ trans('home.Home') }} @endsection

@section('page_content')

    <!-- HomePage Hero Header -->
    <section class="banner-19">
        <div class="banner-layer">
            <video autoplay muted loop id="myVideo">
                <source src="{{ url('assets/wp-content/themes/execution/assets/videos/video2.mp4') }}" type="video/mp4">
                {{ trans('home.Your_browser_does_not_support_HTML5_video') }}
            </video>

            <div class="main-content-top">
                <div class="container HomePageHeroHeader">
                    <div class="main-content">
                        {{--                    if logo is image enable this--}}
{{--                                                          <a class="logo" href="index.html">--}}
{{--                                                              <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />--}}
{{--                                                          </a>--}}
                        <h4> {{ trans('home.Hero_section_title') }} </h4>
                        <p class="mt-3">{{ trans('home.Hero_section_data') }}</p>
                        <a href="{{ route('public.about.index') }}" class="btn btn-style mt-md-5 mt-4">{{ trans('home.Read_More') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- HomePage Hero Header -->

    <!-- homepage about section -->
    <section class="w3l-aboutblock py-5">
        <div class="container py-md-5 py-sm-4 HomePageAbout">
            <div class="row">
                <div class="col-lg-6 left-wthree-img mb-lg-0 mb-4">
                    <img class="img-fluid img-responsive" src="{{ url('assets/wp-content/themes/execution/assets/images/about.jpg') }}" alt=" ">
                </div>
                <div class="col-lg-6 about-right-faq align-self pl-lg-5">
                    <h3 class="title-style">{{ trans('home.Home_2nd_section_title') }}!</h3>
                    <p class="mt-2">
                        {{ trans('home.Home_2nd_section_text') }}
                    </p>

                    <div class="mt-4 pt-md-2">
                        <div class="about-info-m d-flex">
                            <div class="icon-style-ab mr-4">
                                <i class="fas fa-donate"></i>
                            </div>
                            <div class="about-detail">
                                <h4>{{ trans('home.Home_2nd_section_extra_title1') }}</h4>
                                <p>{{ trans('home.Home_2nd_section_extra_text1') }}</p>
                            </div>
                        </div>

                        <div class="about-info-m d-flex mt-4">
                            <div class="icon-style-ab mr-4">
                                <i class="fab fa-asymmetrik"></i>
                            </div>
                            <div class="about-detail">
                                <h4>{{ trans('home.Home_2nd_section_extra_title2') }}</h4>
                                <p>{{ trans('home.Home_2nd_section_extra_text2') }}</p>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- homepage about section -->

    <!-- Clients Logos -->
    @include('@public._layouts.partials.clients_logos')
    <!-- Clients Logos -->

    <!-- Partners Logos -->
    @include('@public._layouts.partials.partners_logos')
    <!-- Partners Logos -->

    <!-- Services -->
    <div class="container service-section py-5">
        @include('@public._layouts.partials.services')
    </div>
    <!-- Services -->

    <!-- About Page video popup section -->
    <div class="w3l-content-photo-5 py-5">
        <div class="container py-lg-5 py-sm-4 HomePageVideoPopup">
            <div class="row align-items-center">
                <div class="col-lg-6 content-image order-lg-first order-last">
                    <a href="#image">
                        <img src="{{ url('assets/wp-content/themes/execution/assets/images/img2.jpg') }}" class="img-responsive" alt="content-photo">
                    </a>
                </div>
                <div class="col-lg-6 col-md-10 mx-auto content-right mb-lg-0 mb-5 pl-lg-5 order-lg-last order-first dsk-txt-rt">
                    <h5 class="small-title-2">{{ trans('home.Home_3rd_section_title1') }}</h5>
                    <h3 class="title-style-2">{{ trans('home.Home_3rd_section_title2') }}</h3>
                    <p class="my-3">{{ trans('home.Home_3rd_section_text1') }}</p>
                    <p class="border-top-w3l pt-4 mt-4">{{ trans('home.Home_3rd_section_text2') }}</p>

{{--                    <a href="#small-dialog" class="popup-with-zoom-anim d-flex align-items-center mt-md-5 mt-4">--}}
{{--                      <span class="video-play-icon mr-3">--}}
{{--                        <span class="far fa-play-circle"></span>--}}
{{--                      </span>Watch Our <br>Video --}}
{{--                    </a>--}}

                    <!-- dialog itself, mfp-hide class is required to make dialog hidden -->
{{--                    <div id="small-dialog" class="zoom-anim-dialog mfp-hide">--}}
{{--                        <iframe src="https://player.vimeo.com/video/86005700" frameborder="0"--}}
{{--                                allow="autoplay; fullscreen" allowfullscreen></iframe>--}}
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- //About Page video popup section -->

    <!-- Teams -->
    @include('@public._layouts.partials.teams')
    <!-- Teams -->

    <!-- Call -->
    @include('@public._layouts.partials.call_to_action_quotation')
    <!-- Call -->

    <!-- Testimonials -->
    @include('@public._layouts.partials.testimonials')
    <!-- Testimonials -->

@endsection

@section('styles') @endsection

@section('scripts') @endsection
