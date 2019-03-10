@extends('backend.admin.layouts.master')
@section('contentBody')
    <div class="panel" style="overflow:auto;">
        <!-- Records Header Start -->
        <div class="records--header">

            <div class="actions mx-auto">

                {{ Form::model(request(),['method'=>'get','class'=>'search flex-wrap flex-md-nowrap']) }}
                {{ Form::text('category',null,['class'=>'form-control','placeholder'=>'Category Name']) }}
                <button type="submit" class="btn btn-rounded"><i class="fa fa-search"></i></button>
                {{ Form::close() }}

                <a href="{{ route('service.create') }}" class="addProduct btn btn-lg btn-rounded btn-warning"><i class="fa fa-plus"></i> Add New Service</a>


            </div>
        </div>
        <!-- Records Header End -->
    </div>
    <div class="panel">
        <!-- Records List Start -->
        <div class="table-responsive">
            <h3 style="text-align: center;color:#1b4b72">Service List</h3>
            <table class="table table-striped custom-table m-b-0 datatable">

                <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Slug Title</th>
                    <th>Category</th>
                    <th>Short Description</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th class="not-sortable">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($services as $service)
                    <tr>
                        <td>{{ $serial++ }}</td>
                        <td>{{ $service->title }}</td>
                        <td>{{ $service->slug_title }}</td>
                        <td>{{ $service->category }}</td>
                        <td>{{ $service->short_description}}</td>
                        <td>{{ $service->description}}</td>
                        <td style="width:40%"> <img style="width:40%" src="{{ asset($service->image) }}"> </td>


                        <td>
                            <div class="dropleft">
                                <a href="#" class="btn-link" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>

                                <div class="dropdown-menu">
                                    <a href="{{ route('service.edit',$service->id) }}" class="dropdown-item">Edit</a>

                                        {{ Form::open(['method'=>'DELETE','route'=>['service.destroy',$service->id]]) }}
                                             <button type="submit" title="Delete"><i class="fa fa-trash-o m-r-5"></i> Delete</button>
                                        {{ Form::close() }}
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach


                </tbody>
            </table>
            {{ $services->links() }}

        </div>
        <!-- Records List End -->
    </div>

@endsection
