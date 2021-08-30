@extends('@dashboard._layouts.master')

@section('title') Quotation @endsection

@section('head')

@endsection

@section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Quotation</h1>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">All</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>S. lang</th>
                            <th>T. lang</th>
                            <th>Volume</th>
                            <th>Field</th>
                            <th>Sample</th>
                            <th>Comments</th>
                            <th>Created at</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($resources as $resource)
                            <tr>
                                <td>{{ $resource->name }}</td>
                                <td>{{ $resource->email }}</td>
                                <td>{{ $resource->phone }}</td>
                                <td>{{ $resource->s_lang }}</td>
                                <td>{{ $resource->t_lang }}</td>
                                <td>{{ $resource->volume }}</td>
                                <td>{{ $resource->field }}</td>
                                <td>
                                    @if($resource->sample != '')
                                        <a class="btn btn-sm btn-primary" href="{{ url('assets/images/quotation/'. $resource->sample) }}"><i class="fa fa-fw fa-download"></i></a>
                                    @endif
                                </td>
                                <td>{{ $resource->comments }}</td>
                                <td>{{ $resource->created_at }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection

@section('footer') @endsection
