@extends('backend.admin.layouts.master')
@section('contentBody')
    <div class="panel" style="overflow:auto;">
        <!-- Records Header Start -->
        <div class="records--header">

            <div class="actions mx-auto">

                {{ Form::model(request(),['method'=>'get','class'=>'search flex-wrap flex-md-nowrap']) }}
                {{ Form::text('title',null,['class'=>'form-control','placeholder'=>'Menu Title']) }}
                <button type="submit" class="btn btn-rounded"><i class="fa fa-search"></i></button>
                {{ Form::close() }}

                <a href="{{ route('sub_menu.create') }}" class="addProduct btn btn-lg btn-rounded btn-warning"><i class="fa fa-plus"></i> Add New Submenu</a>


            </div>
        </div>
        <!-- Records Header End -->
    </div>
    <div class="panel">
        <!-- Records List Start -->
        <div class="table-responsive">
            <h3 style="text-align: center;color:#1b4b72">Submenu List</h3>
            <table class="table table-striped custom-table m-b-0 datatable">

                <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Slug Title</th>
                    <th>Menu Name</th>
                    <th class="not-sortable">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($submenus as $menu)
                    <tr>
                        <td>{{ $serial++ }}</td>
                        <td>{{ $menu->title }}</td>
                        <td>{{ $menu->slug_title }}</td>
                        <td>{{ $menu->relMenu->title }}</td>
                        <td>
                            <div class="dropleft">
                                <a href="#" class="btn-link" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>

                                <div class="dropdown-menu">
                                    <a href="{{ route('sub_menu.edit',$menu->id) }}" class="dropdown-item">Edit</a>

                                    {{ Form::open(['method'=>'DELETE','route'=>['sub_menu.destroy',$menu->id]]) }}
                                    <button type="submit" title="Delete"><i class="fa fa-trash-o m-r-5"></i> Delete</button>
                                    {{ Form::close() }}
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach


                </tbody>
            </table>
            {{ $submenus->links() }}

        </div>
        <!-- Records List End -->
    </div>

@endsection
