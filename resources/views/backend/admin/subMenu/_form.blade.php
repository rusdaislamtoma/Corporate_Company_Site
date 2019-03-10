<div class="form-group">
    <label>
        <span class="label-text">Title</span><span class="text-danger">*</span>
        {{ Form::text('title',null,['class'=>'form-control','required','placeholder'=>'Enter Title...']) }}

    </label>
</div>
<div class="form-group">
    <label>
        <span class="label-text">Menu Name</span><span class="text-danger">*</span>
        {{ Form::select('menu_id',$menus,null,['class'=>'form-control','id'=>'menuId','placeholder'=>'Select Menu Name','required']) }}

    </label>
</div>

