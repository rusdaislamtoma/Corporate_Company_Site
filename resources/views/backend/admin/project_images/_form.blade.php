
<div class="form-group">
    <label>
        <span class="label-text">Project Name</span><span class="text-danger">*</span>
        {{ Form::select('project_id',$projects,null,['class'=>'form-control','id'=>'clientId','placeholder'=>'Select Project Name','required']) }}

    </label>
</div>
<div class="form-group">
    <label>
        <span class="label-text">Image</span>
        {{ Form::file('image',['class'=>'form-control','placeholder'=>'Image']) }}

    </label>
</div>

