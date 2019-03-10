<div class="form-group">
    <label>
        <span class="label-text">name</span><span class="text-danger">*</span>
        {{ Form::text('name',null,['class'=>'form-control','required','placeholder'=>'Enter Name...']) }}

    </label>
</div>
<div class="form-group">
    <label>
        <span class="label-text">Department</span><span class="text-danger">*</span>
        {{ Form::text('department',null,['class'=>'form-control','required','placeholder'=>'Enter Department...']) }}

    </label>
</div>
<div class="form-group">
    <label>
        <span class="label-text">Designation</span><span class="text-danger">*</span>
        {{ Form::text('designation',null,['class'=>'form-control','required','placeholder'=>'Enter Designation...']) }}

    </label>
</div>
<div class="form-group">
    <label>
        <span class="label-text">Email</span><span class="text-danger">*</span>
        {{ Form::email('email',null,['class'=>'form-control','required','placeholder'=>'Enter Email...']) }}

    </label>
</div>
<div class="form-group">
    <label>
        <span class="label-text">Image</span>
        {{ Form::file('image',['class'=>'form-control','placeholder'=>'Image']) }}

    </label>
</div>

