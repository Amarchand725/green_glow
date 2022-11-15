<?php $__env->startSection('title', $page_title); ?>
<?php $__env->startPush('css'); ?>
    <style>
        select {
            font-family: 'Font Awesome', 'sans-serif';
        }
    </style>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
    <div class="main_container">
        <div class="right_col" role="main">
            <div class="">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2><?php echo e($page_title); ?></h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li>
                                        <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li>
                                        <a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <form class="page-form" action="<?php echo e(route('menu.store')); ?>" method="post" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                    <?php echo csrf_field(); ?>
                                    <span class="section">Basic Info</span>
                                    <div class="field item form-group">
                                        <label class="col-form-label col-md-2 col-sm-2 label-align">Menu of<span class="required text-danger">*</span></label>
                                        <div class="col-md-8 col-sm-8">
                                            <select name="menu_of" id="" class="form-control js-example-basic-single" required>
                                                <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e(Str::lower($role->name)); ?>"><?php echo e(Str::ucfirst($role->name)); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <option value="general">General</option>
                                            </select>
                                            <span style="color: red"><?php echo e($errors->first('menu_of')); ?></span>
                                        </div>
                                    </div>
                                    <div class="field item form-group">
                                        <label class="col-form-label col-md-2 col-sm-2 label-align">Parent Menu</label>
                                        <div class="col-md-8 col-sm-8">
                                            <select name="parent_id" id="" class="form-control js-example-basic-single">
                                                <option value="" selected>Select parent</option>
                                                <?php $__currentLoopData = $parent_menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p_menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($p_menu->id); ?>"><?php echo e($p_menu->menu); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                            <span style="color: red"><?php echo e($errors->first('parent_id')); ?></span>
                                        </div>
                                    </div>

                                    <div class="field item form-group">
                                        <label class="col-form-label col-md-2 col-sm-2 label-align">Icon <span style="color:red">*</span></label>
                                        <div class="col-md-8 col-sm-8">
                                            <input type="text" class="form-control" name="icon" value="<?php echo e(old('icon')); ?>" placeholder="Copy font awesome tag from library and paste here e.g <i class='fa fa-user' aria-hidden='true'></i>" required>
                                            <a href="https://fontawesome.com/v4/icons/" style="margin-top: 5px" target="_blank" class="btn btn-success">Choose Icon</a><br />
                                            <span style="color: red"><?php echo e($errors->first('icon')); ?></span>
                                        </div>
                                    </div>
                                    <div class="field item form-group">
                                        <label class="col-form-label col-md-2 col-sm-2 label-align">Label <span style="color:red">*</span></label>
                                        <div class="col-md-8 col-sm-8">
                                            <input type="text" class="form-control" name="label" value="<?php echo e(old('label')); ?>" placeholder="Enter label e.g All Users" required>
								            <span style="color: red"><?php echo e($errors->first('label')); ?></span>
                                        </div>
                                    </div>
                                    <div class="field item form-group">
                                        <label class="col-form-label col-md-2 col-sm-2 label-align">Menu <span style="color:red">*</span> </label>
                                        <div class="col-md-8 col-sm-8">
                                            <input type="text" class="form-control" name="menu" value="<?php echo e(old('menu')); ?>" placeholder="Enter Menu e.g user" required>
								            <span style="color: red"><?php echo e($errors->first('menu')); ?></span>
                                        </div>
                                    </div>
                                    <div class="field item form-group">
                                        <label class="col-form-label col-md-2 col-sm-2 label-align">Columns <span style="color:red">*</span> </label>
                                        <div class="col-md-8 col-sm-8">
                                            <table class="table" id="columns">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Type</th>
                                                        <th>Default</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="tbody">
                                                    <tr>
                                                        <td>
                                                            <input type="text" class="form-control" name="column_names[]" value="" placeholder="Enter column name" required>
                                                            <span style="color: red"><?php echo e($errors->first('column_names')); ?></span>
                                                        </td>
                                                        <td style="width:250px">
                                                            <select name="types[]" id="" class="form-control js-example-basic-single">
                                                                <option value="integer" selected>INT</option>
                                                                <option value="string">VARCHAR</option>
                                                                <option value="boolean">BOOLEAN</option>
                                                                <option value="date">DATE</option>
                                                                <option value="time">TIME</option>
                                                                <option value="datetime">DATETIME</option>
                                                                <option value="text">TEXT</option>
                                                                <option value="bigInteger">BIGINT</option>
                                                                <option value="decimal">DECIMAL</option>
                                                                <option value="float">FLOAT</option>
                                                                <option value="double">DOUBLE</option>
                                                                <option value="binary">BLOB (Image or other attachments)</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select name="default_types[]" id="" class="form-control default_selection js-example-basic-single">
                                                                <option value="none" selected>None</option>
                                                                <option value="nullable">Null</option>
                                                                <option value="default">Default</option>
                                                            </select>
                                                            <span class="default-field"></span>
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-success btn-sm add-more-btn"><i class="fa fa-plus"></i></button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="ln_solid">
                                        <div class="form-group">
                                            <div class="col-md-8 offset-md-2">
                                                <button type='submit' class="btn btn-primary">Save</button>
                                                <button type='reset' class="btn btn-success" id="reset-btn">Reset</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>
<script>
    $(document).ready(function(){
        $('.default_selection').parents('td').find('.default-field').html('<input type="hidden" name="defaults[]" value="1" class="form-control" style="margin-top:5px" placeholder="Enter default value">');
    });
    $(document).on('change', '.default_selection', function(){
        var default_val = $(this).val();
        if(default_val=='default'){
            $(this).parents('td').find('.default-field').html('<input type="text" name="defaults[]" class="form-control" style="margin-top:5px" placeholder="Enter default value">');
        }else{
            $(this).parents('td').find('.default-field').html('<input type="hidden" name="defaults[]" value="1" class="form-control" style="margin-top:5px" placeholder="Enter default value">');
        }
    });
    $(document).on('click', '.add-more-btn', function(){
        var html = '<tr>'+
                        '<td>'+
                            '<input type="text" class="form-control" name="column_names[]" value="" placeholder="Enter Menu e.g user">'+
                        '</td>'+
                        '<td>'+
                            '<select name="types[]" id="" class="form-control js-example-basic-single">'+
                                '<option value="integer">INT</option>'+
                                '<option value="string">VARCHAR</option>'+
                                '<option value="boolean">BOOLEAN</option>'+
                                '<option value="date">DATE</option>'+
                                '<option value="text">TEXT</option>'+
                                '<option value="bigInteger">BIGINT</option>'+
                                '<option value="float">FLOAT</option>'+
                                '<option value="binary">BLOB (Image or other attachments)</option>'+
                            '</select>'+
                        '</td>'+
                        '<td>'+
                            '<select name="default_types[]" id="" class="form-control default_selection js-example-basic-single">'+
                                '<option value="none" selected>None</option>'+
                                '<option value="nullable">Null</option>'+
                                '<option value="default">Default</option>'+
                            '</select>'+
                            '<span class="default-field"></span>'+
                        '</td>'+
                        '<td>'+
                            '<button type="button" class="btn btn-danger btn-sm remove-btn"><i class="fa fa-times"></i></button>'+
                        '</td>'+
                    '</tr>';
        $("#columns > tbody").append(html);
    });

    $(document).on('click', '.remove-btn', function(){
        $(this).parents('tr').remove();
    });

    $('#reset-btn').click(function(){
        $('.page-form')[0].reset();
    });
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\green_glow\resources\views/admin/menus/create.blade.php ENDPATH**/ ?>