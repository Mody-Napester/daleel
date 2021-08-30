<section class="w3l-brands" id="clients">
    <div class="container pb-md-5 pb-4 HomePageClients">
        <div class="company-logos text-center pt-5 border-top-w3l">
            <h3 class="text-center mb-4">{{ trans('partners.Partners') }}</h3>

            <div class="row logos">
                @foreach(\App\Models\Client::orderBy('ordering', 'DESC')->get() as $client)
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                        <a href="#url">
                            <img src="{{ url('assets/images/client/'. $client->image) }}" alt="{{ getFromJson($client->title , lang()) }}" class="img-fluid">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
