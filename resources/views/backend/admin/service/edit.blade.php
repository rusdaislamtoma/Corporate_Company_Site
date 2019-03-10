@extends('backend.admin.layouts.master')
@section('contentBody')
    <div class="row gutter-20">
        <div class="col-md-8 mx-auto">
        {{ Form::model($service,['route'=>['service.update',$service->id],'method'=>'PUT','files'=>true]) }}
        <!-- Panel Start -->
            <div class="panel">
                <div class="panel-heading p-sm-4">
                    <h3 class="panel-title text-primary" style="font-size: 25px">Service Edit Form</h3>
                </div>
                @include('backend.admin.layouts._validation_messages')

                <div class="panel-content">
                    @include('backend.admin.service._form')

                    <input type="submit" name="submit" value="Submit"  class="btn btn-sm btn-rounded btn-success"/>
                    <input type="reset" name="reset" value="Reset" class="btn btn-sm btn-rounded btn-danger" />

                </div>
            </div>
        {{ Form::close() }}
        <!-- Panel End -->
        </div>
    </div>
@endsection
