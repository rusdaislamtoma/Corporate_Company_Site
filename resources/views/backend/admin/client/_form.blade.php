<div class="form-group">
    <label>
        <span class="label-text">Name</span><span class="text-danger">*</span>
        {{ Form::text('name',null,['class'=>'form-control','required','placeholder'=>'Enter name...']) }}

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
        <span class="label-text">Address</span><span class="text-danger">*</span>
        {{ Form::textarea('address',null,['class'=>'form-control']) }}

    </label>
</div>

<div class="form-group">
    <label>
        <span class="label-text">Logo</span>
        {{ Form::file('logo',['class'=>'form-control','placeholder'=>'logo']) }}

    </label>
</div>

