<section class="w3l-content-mid py-5">
    <style>
        .w3l-content-mid {
            background-image: url({{ url('assets/wp-content/themes/execution/assets/images/bg3.jpg') }});
        }
    </style>
    <div class="container py-md-5 py-4 LandingPageCover dsk-rt">
        <div class="welcome-left">
            <h3 class="title-w3l">{{ trans('call_to_action.text1') }}</h3>
            <p class="mt-3 text-white">{{ trans('call_to_action.text1') }}</p>
            <a href="{{ route('public.quotation.index') }}" class="btn btn-style mt-4">{{ trans('call_to_action.Get_free_quote') }}</a>
        </div>
    </div>
</section>
