@extends('backend.admin.layouts.master')
@section('contentBody')
    <div class="panel" style="overflow:auto;">
        <!-- Records Header Start -->
        <div class="records--header">

            <div class="actions mx-auto">

                {{ Form::model(request(),['method'=>'get','class'=>'search flex-wrap flex-md-nowrap']) }}
                {{ Form::text('name',null,['class'=>'form-control','placeholder'=>'Project Name']) }}
                <button type="submit" class="btn btn-rounded"><i class="fa fa-search"></i></button>
                {{ Form::close() }}

                <a href="{{ route('projectImages.create') }}" class="addProduct btn btn-lg btn-rounded btn-warning"><i class="fa fa-plus"></i> Add New Project Image</a>


            </div>
        </div>
        <!-- Records Header End -->
    </div>
    <div class="panel">
        <!-- Records List Start -->
        <div class="table-responsive">
            <h3 style="text-align: center;color:#1b4b72">Project Images List</h3>
            <table class="table table-striped custom-table m-b-0 datatable">

                <thead>
                <tr>
                    <th>#</th>
                    <th>Project Title</th>
                    <th>Image</th>
                    <th class="not-sortable">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($projectImages as $projectImage)
                    <tr>
                        <td>{{ $serial++ }}</td>
                        <td>{{ $projectImage->relProject->title }}</td>
                        <td style="width:40%"> <img style="width:40%" src="{{ asset($projectImage->image) }}"> </td>
                        <td>
                            <div class="dropleft">
                                <a href="#" class="btn-link" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>

                                <div class="dropdown-menu">
                                    <a href="{{ route('projectImages.edit',$projectImage->id) }}" class="dropdown-item">Edit</a>

                                    {{ Form::open(['method'=>'DELETE','route'=>['projectImages.destroy',$projectImage->id]]) }}
                                    <button type="submit" title="Delete"><i class="fa fa-trash-o m-r-5"></i> Delete</button>
                                    {{ Form::close() }}
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach


                </tbody>
            </table>
            {{ $projectImages->links() }}

        </div>
        <!-- Records List End -->
    </div>

@endsection
