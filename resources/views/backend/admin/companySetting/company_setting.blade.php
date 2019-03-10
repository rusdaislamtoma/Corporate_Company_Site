@extends('backend.admin.layouts.master')
@section('contentBody')
    <div class="row gutter-20">
        <div class="col-md-8 mx-auto">
        {{ Form::open(['route'=>['update_company_settings'],'method'=>'PUT','files'=>true]) }}
        <!-- Panel Start -->
            <div class="panel">
                <div class="panel-heading p-sm-4">
                    <h3 class="panel-title text-primary" style="font-size: 25px;">Company Settings Update Form</h3>
                </div>
                @include('backend.admin.layouts._validation_messages')

                <div class="panel-content">
                        <div class="form-group">
                            <label>
                                <span class="label-text">Company Name</span><span class="text-danger">*</span>
                                {{ Form::text('name',$company_settings['company']->name,['class'=>'form-control','placeholder'=>'Company Name']) }}

                            </label>
                        </div>
                        <div class="form-group">
                            <label>
                                <span class="label-text">Description</span><span class="text-danger">*</span>
                                {{ Form::textarea('description',$company_settings['company']->description,['class'=>'form-control','required']) }}

                            </label>
                        </div>
                        <div class="form-group">
                            <label>
                                <span class="label-text">Achievement</span><span class="text-danger">*</span>
                                {{ Form::textarea('achievement',$company_settings['company']->achievement,['class'=>'form-control','required']) }}

                            </label>
                        </div>
                        <div class="form-group">
                            <label>
                                <span class="label-text">Logo</span>
                                {{ Form::file('logo',['class'=>'form-control','placeholder'=>'Logo']) }}

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
