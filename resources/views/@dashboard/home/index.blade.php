@extends('@dashboard._layouts.master')

@section('title') Dashboard Home @endsection

@section('head')

@endsection

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="statistics-details d-flex align-items-center justify-content-between">
                <div>
                    <p class="statistics-title">Services</p>
                    <h3 class="rate-percentage">{{ \App\Models\Service::count('*') }}</h3>
{{--                    <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>-0.5%</span></p>--}}
                </div>
                <div>
                    <p class="statistics-title">Clients</p>
                    <h3 class="rate-percentage">{{ \App\Models\Client::count('*') }}</h3>
{{--                    <p class="text-success d-flex"><i class="mdi mdi-menu-up"></i><span>+0.1%</span></p>--}}
                </div>
                <div>
                    <p class="statistics-title">Testimonials</p>
                    <h3 class="rate-percentage">{{ \App\Models\Testimonials::count('*') }}</h3>
{{--                    <p class="text-success d-flex"><i class="mdi mdi-menu-up"></i><span>+0.1%</span></p>--}}
                </div>
                <div class="d-none d-md-block">
                    <p class="statistics-title">Quotations</p>
                    <h3 class="rate-percentage">{{ \App\Models\Quotation::count('*') }}</h3>
{{--                    <p class="text-success d-flex"><i class="mdi mdi-menu-up"></i><span>+0.1%</span></p>--}}
                </div>
                <div class="d-none d-md-block">
                    <p class="statistics-title">Messages</p>
                    <h3 class="rate-percentage">{{ \App\Models\Message::count('*') }}</h3>
{{--                    <p class="text-success d-flex"><i class="mdi mdi-menu-up"></i><span>+0.1%</span></p>--}}
                </div>
                <div class="d-none d-md-block">
                    <p class="statistics-title">Applicants</p>
                    <h3 class="rate-percentage">{{ \App\Models\Applicant::count('*') }}</h3>
{{--                    <p class="text-success d-flex"><i class="mdi mdi-menu-up"></i><span>+0.1%</span></p>--}}
                </div>
            </div>
        </div>
    </div>

@endsection

@section('footer') @endsection
