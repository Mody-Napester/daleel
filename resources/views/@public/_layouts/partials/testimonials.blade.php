<section class="w3l-clients py-5" id="testimonials">
    <div class="container py-md-5 py-4 AboutPageTestimonials">
        <div class="row align-items-center mb-5 dsk-rt">
            <div class="col-md-6 section-heading">
                <h5 class="small-title-2">{{ trans('testimonials.Our_Clients_Testimonials') }}</h5>
                <h3 class="title-style-2">{{ trans('testimonials.What_People_Say') }}</h3>
            </div>
            <div class="col-md-6 section-heading mt-md-0 mt-2">
                <p>
                    {{ trans('testimonials.text') }}
                </p>
            </div>
        </div>
        <div id="owl-demo2" class="owl-carousel owl-theme pb-5">

            @foreach(\App\Models\Testimonials::orderBy('ordering', 'DESC')->get() as $testimonial)
                <div class="item">
                    <div class="testimonial-content">
                        <div class="testimonial">
                            <span class="fa fa-quote-left"></span>
                            <blockquote>
                                <q>{{ getFromJson($testimonial->title , lang()) }}</q>
                            </blockquote>
                            <p>{!! getFromJson($testimonial->details , lang()) !!}</p>
                        </div>
                        <div class="bottom-info mt-4">
                            <a class="comment-img" href="#url">
                                <img src="{{ url('assets/images/testimonial/'. $testimonial->image) }}" class="img-responsive" alt="">
                            </a>
                            <div class="people-info align-self">
                                <h3>{{ getFromJson($testimonial->name , lang()) }}</h3>
                                <p class="identity">{{ getFromJson($testimonial->work , lang()) }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>
