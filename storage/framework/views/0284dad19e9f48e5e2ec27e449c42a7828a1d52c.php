<?php $__env->startSection('title', $page_title); ?>
<?php $__env->startSection('content'); ?>
<section class="content">
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
                                <span class="section">Basic Info</span>
                                <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                                    <tbody>
                                        <tr>
                                            <th>Title</th>
                                            <td><?php echo e($model->title); ?></td>
                                        </tr>
                                        <tr>
                                            <th>Meta Title</th>
                                            <td><?php echo e($model->met_title); ?></td>
                                        </tr>
                                        <tr>
                                            <th>Meta Keyword</th>
                                            <td><?php echo e($model->meta_keyword); ?></td>
                                        </tr>
                                        <tr>
                                            <th>Meta Description</th>
                                            <td><?php echo e($model->meta_description); ?></td>
                                        </tr>
                                        <tr>
                                            <th>Description</th>
                                            <td><?php echo $model->description; ?></td>
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
</section>

<script>
	$(document).ready(function() {
		$('.editor_short').summernote({
			height: 150
		});
	});
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\green_glow\resources\views/admin/page/show.blade.php ENDPATH**/ ?>