<div class="form-group">
    <label>
        <span class="label-text">Title</span><span class="text-danger">*</span>
        {{ Form::text('title',null,['class'=>'form-control','required','placeholder'=>'Enter Title...']) }}

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

