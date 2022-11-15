<?php $__env->startSection('title', $page_title); ?>
<?php $__env->startSection('content'); ?>
<input type="hidden" id="page_url" value="<?php echo e(route('product.index')); ?>">
    <div class="container body">
        <div class="main_container">
            <div class="right_col" role="main">
                <div class="">
                    <div class="col-md-12 col-sm-12 ">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2><?php echo e($page_title); ?></h2>
                                <?php if(session('success')): ?>
                                    <div class="callout callout-success">
                                        <?php echo e(session('success')); ?>

                                    </div>
                                <?php endif; ?>
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
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="card-box table-responsive">
                                            <p class="text-muted font-13 m-b-30">
                                               <input type="text" class="form-control" id="search" placeholder="search...">
                                               <input type="hidden" class="form-control" id="status" value="">
                                            </p>
                                            <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>SL</th>
                                                        <th>NAME</th><th>DESCRIPTION</th><th>STATUS</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>

                                                <tbody id="body">
                                                    <?php $__currentLoopData = $models; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$model): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <tr id="id-<?php echo e($model->id); ?>">
                                                            <td><?php echo e($models->firstItem()+$key); ?>.</td>
                                                            <td><?php echo $model->name; ?></td><td><?php echo $model->description; ?></td><td><?php if($model->status): ?><span class="label label-success">Active</span><?php else: ?><span class="label label-danger">In-Active</span><?php endif; ?></td><td width="250px"><a href="<?php echo e(route("product.show", $model->id)); ?>" data-toggle="tooltip" data-placement="top" title="Show Product" class="btn btn-info btn-xs"><i class="fa fa-eye"></i> Show</a><a href="<?php echo e(route("product.edit", $model->id)); ?>" data-toggle="tooltip" data-placement="top" title="Edit Product" class="btn btn-primary btn-xs" style="margin-left: 3px;"><i class="fa fa-edit"></i> Edit</a><button data-toggle="tooltip" data-placement="top" title="Delete Product" class="btn btn-danger btn-xs delete" data-slug="<?php echo e($model->id); ?>" data-del-url="<?php echo e(route("product.destroy", $model->id)); ?>" style="margin-left: 3px;"><i class="fa fa-trash"></i> Delete</button></td>
                                                        </tr>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td colspan="7">
                                                            Displying <?php echo e($models->firstItem()); ?> to <?php echo e($models->lastItem()); ?> of <?php echo e($models->total()); ?> records
                                                            <div class="d-flex justify-content-center">
                                                                <?php echo $models->links('pagination::bootstrap-4'); ?>

                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\green_glow\resources\views/admin/products/index.blade.php ENDPATH**/ ?>