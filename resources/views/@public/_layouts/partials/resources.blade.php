<h3 class="text-center mb-5">{{ trans('resource.Resources') }}</h3>

<div class="row justify-content-center">

    @foreach(\App\Models\Resource::orderBy('ordering', 'DESC')->get() as $resource)
        <div class="col-lg-4 col-md-6 item mb-4">
            <div class="card">
                <div class="card-header p-0 position-relative border-0">
                    <a href="{{ route('public.resource.show', $resource->id) }}">
                        <img class="d-block img-responsive" src="{{ url('assets/images/resource/'. $resource->image) }}" alt="card-image">
                    </a>
                </div>
                <div class="card-body resource-details">
                    <span class="label-style">{{ getFromJson($resource->category , lang()) }}</span>
                    <br>
                    <a style="margin-bottom: 0" href="{{ route('public.resource.show', $resource->id) }}" class="resource-heading">{{ getFromJson($resource->title , lang()) }}</a>
{{--                    <p>{!! getFromJson($resource->details , lang()) !!}</p>--}}
                </div>
            </div>
        </div>
    @endforeach

</div>
