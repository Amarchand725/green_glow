<?php $__env->startSection('title', $page_title); ?>
<?php $__env->startSection('content'); ?>
    <input type="hidden" id="page_url" value="<?php echo e(route('page.index')); ?>">
    <div class="container body">
        <div class="main_container">
            <!-- page content -->
            <div class="right_col" role="main">
                <div class="">
                    <div class="col-md-12 col-sm-12 ">
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
                                                        <th>Title</th>
                                                        <th>Meta Title</th>
                                                        <th>Meta Keyword</th>
                                                        <th>Meta Description</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>

                                                <tbody id="body">
                                                    <?php $__currentLoopData = $models; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $model): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <tr>
                                                            <td><?php echo e($model->title); ?></td>
                                                            <td><?php echo e($model->meta_title); ?></td>
                                                            <td><?php echo e($model->meta_keyword); ?></td>
                                                            <td><?php echo e($model->meta_description); ?></td>
                                                            <td>
                                                                <?php if($model->status): ?>
                                                                    <span class="badge badge-success">Active</span>
                                                                <?php else: ?>
                                                                    <span class="badge badge-danger">In-Active</span>
                                                                <?php endif; ?>
                                                            </td>
                                                            <td>
                                                                <a href="<?php echo e(route('page.edit', $model->slug)); ?>" data-toggle="tooltip" data-placement="top" title="Edit Page" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                                                <a href="<?php echo e(route('page.show', $model->slug)); ?>" data-toggle="tooltip" data-placement="top" title="Show Page Details" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                                                <button class="btn btn-danger btn-sm delete" data-toggle="tooltip" data-placement="top" title="Delete Record" data-slug="<?php echo e($model->slug); ?>" data-del-url="<?php echo e(url('blog', $model->slug)); ?>"><i class="fa fa-trash"></i></button>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td colspan="9">
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

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\green_glow\resources\views/admin/page/index.blade.php ENDPATH**/ ?>