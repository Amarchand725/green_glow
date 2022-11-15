<?php $__env->startSection('title', $page_title); ?>
<?php $__env->startSection('content'); ?>
    <div class="main_container">
        <!-- page content -->
        <div class="right_col" role="main">
            <div class="">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Add New Page</h2>
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
                                <form class="page-form" action="<?php echo e(route('page.store')); ?>" method="post" novalidate>
                                    <?php echo csrf_field(); ?>
                                    <span class="section">Basic Info</span>
                                    <div class="field item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3  label-align">Page Title<span class="required text-danger">*</span></label>
                                        <div class="col-md-6 col-sm-6">
                                            <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="title" value="<?php echo e(old('title')); ?>" placeholder="Enter title" />
                                            <span style="color: red"><?php echo e($errors->first('title')); ?></span>
                                        </div>
                                    </div>
                                    <div class="field item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3  label-align">Meta Title</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input name="meta_title" class="form-control" value="<?php echo e(old('meta_title')); ?>" placeholder="Enter title" data-validate-length-range="5,15" type="text" /></div>
                                    </div>

                                    <div class="field item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3  label-align">Meta Keyword</label>
                                        <div class="col-md-6 col-sm-6">
                                            <textarea class="form-control" name="meta_keyword" style="height:60px;" placeholder="Enter meta keyword"><?php echo e(old('meta_keyword')); ?></textarea>
                                        </div>
                                    </div>
                                    <div class="field item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3  label-align">Meta Description</label>
                                        <div class="col-md-6 col-sm-6">
                                            <textarea class="form-control" name="meta_description" style="height:60px;" placeholder="Enter meta description"><?php echo e(old('meta_description')); ?></textarea>
                                        </div>
                                    </div>
                                    <div class="field item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3  label-align">Description </label>
                                        <div class="col-md-6 col-sm-6">
                                            <textarea class="form-control texteditor" name="description" maxlength="200" style="height:140px;" placeholder="Describe page"><?php echo e(old('description')); ?></textarea>

                                        </div>
                                    </div>

                                    <div class="ln_solid">
                                        <div class="form-group">
                                            <div class="col-md-6 offset-md-3">
                                                <button type='submit' class="btn btn-primary">Submit</button>
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
    $('#reset-btn').click(function(){
        $('.page-form')[0].reset();
    });
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\green_glow\resources\views/admin/page/create.blade.php ENDPATH**/ ?>