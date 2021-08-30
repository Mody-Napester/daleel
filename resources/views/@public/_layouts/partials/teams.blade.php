<section class="w3l-team py-5">
    <div class="container py-md-5 py-4 AboutPageTeam">
        <div class="row align-items-center mb-5 dsk-rt">
            <div class="col-md-6 section-heading">
                <h5 class="small-title-2"> {{ trans('team.Our_Teammates') }} </h5>
                <h3 class="title-style-2"> {{ trans('team.Our_Creative_Team') }}</h3>
            </div>
            <div class="col-md-6 section-heading mt-md-0 mt-2">
                <p>{{ trans('team.hero_details') }}</p>
            </div>
        </div>
        <div class="row text-center justify-content-center">

            @foreach(\App\Models\Team::all() as $team)
                <div class="col-lg-3 col-sm-6 mt-sm-0 mt-4">
                    <div class="team-block-single">
                        <div class="team-grids">
                            <a href="#url">
                                <img src="{{ url('assets/images/team/'. $team->image) }}" class="img-fluid" alt="">
                                <div class="team-info">
{{--                                    <div class="social-icons-section">--}}
{{--                                        <a class="fac" href="https://www.facebook.com/w3layouts/">--}}
{{--                                            <span class="fab fa-facebook-f"></span>--}}
{{--                                        </a>--}}

{{--                                        <a class="twitter mx-2"--}}
{{--                                           href="https://twitter.com/W3layouts">--}}
{{--                                            <span class="fab fa-twitter"></span>--}}
{{--                                        </a>--}}

{{--                                        <a class="google"--}}
{{--                                           href="https://w3layouts.com/tag/email-templates/">--}}
{{--                                            <span class="fab fa-google-plus-g"></span>--}}
{{--                                        </a>--}}

{{--                                    </div>--}}
                                </div>
                            </a>
                        </div>
                        <div class="team-bottom-block p-4">
                            <h5 class="member mb-1 active">
                                <a href="#url">{{ getFromJson($team->name , lang()) }}</a>
                            </h5>
                            <small>{{ getFromJson($team->title , lang()) }}</small>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>
