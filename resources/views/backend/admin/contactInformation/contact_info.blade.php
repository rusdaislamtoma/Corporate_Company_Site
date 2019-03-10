@extends('backend.admin.layouts.master')
@section('contentBody')
<div class="row gutter-20">
    <div class="col-md-8 mx-auto">
        {{ Form::open(['route'=>['update_contact_settings'],'method'=>'PUT','files'=>true]) }}
        <!-- Panel Start -->
        <div class="panel">
            <div class="panel-heading p-sm-4">
                <h3 class="panel-title text-primary" style="font-size: 25px;">Contact Update Form</h3>
            </div>
            @include('backend.admin.layouts._validation_messages')

            <div class="panel-content">
                <div class="form-group">
                    <label>
                        <span class="label-text">Address</span><span class="text-danger">*</span>
                        {{ Form::textarea('address',$contact_settings['contact']->address,['class'=>'form-control','required']) }}

                    </label>
                </div>
                <div class="form-group">
                    <label>
                        <span class="label-text">Contact No</span><span class="text-danger">*</span>
                        {{ Form::text('contactNo',$contact_settings['contact']->contactNo,['class'=>'form-control','placeholder'=>'Company Name']) }}

                    </label>
                </div>
                <div class="form-group">
                    <label>
                        <span class="label-text">Email</span><span class="text-danger">*</span>
                        {{ Form::email('email',$contact_settings['contact']->email,['class'=>'form-control','placeholder'=>'Company Name']) }}

                    </label>
                </div>
                <div class="form-group">
                    <label>
                        <span class="label-text">Details</span><span class="text-danger">*</span>
                        {{ Form::textarea('details',$contact_settings['contact']->details,['class'=>'form-control','required']) }}

                    </label>
                </div>

                <input type="submit" name="submit" value="Submit" id="createUser" class="btn btn-sm btn-rounded btn-success"/>
                <input type="reset" name="reset" value="Reset" class="btn btn-sm btn-rounded btn-danger" />

            </div>
        </div>
        {{ Form::close() }}
        <!-- Panel End -->
    </div>
</div>
@endsection

