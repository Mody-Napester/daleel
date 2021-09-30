@extends('@dashboard._layouts.master')

@section('title') Site Files @endsection

@section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Site Files</h1>
    </div>

    <!-- Page Forms -->


        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit Site Files</h6>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Title</th>
                            <th>File</th>
                            <th>Update</th>
                        </tr>
                    </thead>

                    <tbody>
                    @foreach($resources as $key => $resource)
                        <form action="{{ route('dashboard.site_file.update', $resource->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <tr>
                                <td>
                                    {{ str_well($resource->name) }}
                                </td>
                                <td>
                                    <input type="text" class="form-control" name="title" value="{{ $resource->title }}" id="title-{{$key}}">
                                </td>
                                <td>
                                    <input type="text" class="form-control" name="file" value="{{ $resource->file }}" id="file-{{$key}}">
                                </td>
                                <td>
                                    <button class="btn btn-sm btn-danger" type="submit">Update</button>
                                </td>
                            </tr>
                        </form>
                    @endforeach
                    </tbody>
                </table>

            </div>
            <div class="card-footer">
                <button class="btn btn-success" type="submit"><i class="fa fa-fw fa-save"></i> Save</button>
            </div>
        </div>



@endsection

@section('footer') @endsection

