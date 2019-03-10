<div class="form-group">
    <label>
        <span class="label-text">Title</span><span class="text-danger">*</span>
        {{ Form::text('title',null,['class'=>'form-control','required','placeholder'=>'Enter Title...']) }}

    </label>
</div>
<div class="form-group">
    <label>
        <span class="label-text">Client Name</span><span class="text-danger">*</span>
        {{ Form::select('client_id',$clients,null,['class'=>'form-control','id'=>'clientId','placeholder'=>'Select Client Name','required']) }}

    </label>
</div>
<div class="form-group">
    <label>
        <span class="label-text">Category</span><span class="text-danger">*</span>
        {{ Form::text('category',null,['class'=>'form-control','required','placeholder'=>'Enter Category...']) }}

    </label>
</div>
<div class="form-group">
    <label>
        <span class="label-text">Short Description</span><span class="text-danger">*</span>
        {{ Form::textarea('short_description',null,['class'=>'form-control','required']) }}

    </label>
</div>
<div class="form-group">
    <label>
        <span class="label-text">Description</span><span class="text-danger">*</span>
        {{ Form::textarea('description',null,['class'=>'form-control','required']) }}

    </label>
</div>
<div class="form-group">
    <label>
        <span class="label-text">Image</span>
        {{ Form::file('image',['class'=>'form-control','placeholder'=>'Image']) }}

    </label>
</div>
<div class="form-group form-inline"><span class="text-danger">*</span>
    <label>
        <span class="label-text">Status</span><span class="text-danger">* &nbsp;&nbsp;</span>
        {{ Form::radio('status','Good',null,['required','checked']) }}
        {{ Form::label('status1','Good') }}<span> &nbsp;&nbsp;</span>

        {{ Form::radio('status','Moderate',null,['required']) }}
        {{ Form::label('status2','Moderate') }}

        {{ Form::radio('status','Bad',null,['required']) }}
        {{ Form::label('status3','Bad') }}


    </label>
</div>
