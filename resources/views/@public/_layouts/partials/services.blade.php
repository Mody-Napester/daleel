<h3 class="text-center mb-5">{{ trans('services.Services') }}</h3>

<div class="row justify-content-center">

    @foreach(\App\Models\Service::orderBy('ordering', 'DESC')->get() as $service)
        <div class="col-lg-4 col-md-6 item mb-4">
            <div class="card">
                <div class="card-header p-0 position-relative border-0">
                    <a href="{{ route('public.service.show', $service->id) }}">
                        <img class="d-block img-responsive" src="{{ url('assets/images/service/'. $service->image) }}" alt="card-image">
                    </a>
                </div>
                <div class="card-body service-details">
                    <span class="label-style">{{ getFromJson($service->category , lang()) }}</span>
                    <a style="margin-bottom: 0" href="{{ route('public.service.show', $service->id) }}" class="service-heading">{{ getFromJson($service->title , lang()) }}</a>
{{--                    <p>{!! getFromJson($service->details , lang()) !!}</p>--}}
                </div>
            </div>
        </div>
    @endforeach

</div>
