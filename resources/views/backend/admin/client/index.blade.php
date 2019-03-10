@extends('backend.admin.layouts.master')
@section('contentBody')
    <div class="panel" style="overflow:auto;">
        <!-- Records Header Start -->
        <div class="records--header">

            <div class="actions mx-auto">

                {{ Form::model(request(),['method'=>'get','class'=>'search flex-wrap flex-md-nowrap']) }}
                {{ Form::text('name',null,['class'=>'form-control','placeholder'=>'Client Name']) }}
                <button type="submit" class="btn btn-rounded"><i class="fa fa-search"></i></button>
                {{ Form::close() }}

                <a href="{{ route('client.create') }}" class="addProduct btn btn-lg btn-rounded btn-warning"><i class="fa fa-plus"></i> Add New Client</a>


            </div>
        </div>
        <!-- Records Header End -->
    </div>
    <div class="panel">
        <!-- Records List Start -->
        <div class="table-responsive">
            <h3 style="text-align: center;color:#1b4b72">Client List</h3>
            <table class="table table-striped custom-table m-b-0 datatable">

                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Slug Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Logo</th>
                    <th class="not-sortable">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($clients as $client)
                    <tr>
                        <td>{{ $serial++ }}</td>
                        <td>{{ $client->name }}</td>
                        <td>{{ $client->slug_name }}</td>
                        <td>{{ $client->email }}</td>
                        <td>{{ $client->address }}</td>
                        <td style="width:40%"> <img style="width:40%" src="{{ asset($client->logo) }}"> </td>
                        <td>
                            <div class="dropleft">
                                <a href="#" class="btn-link" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>

                                <div class="dropdown-menu">
                                    <a href="{{ route('client.edit',$client->id) }}" class="dropdown-item">Edit</a>

                                        {{ Form::open(['method'=>'DELETE','route'=>['client.destroy',$client->id]]) }}
                                             <button type="submit" title="Delete"><i class="fa fa-trash-o m-r-5"></i> Delete</button>
                                        {{ Form::close() }}
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach


                </tbody>
            </table>
            {{ $clients->links() }}

        </div>
        <!-- Records List End -->
    </div>

@endsection
