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

<script>
    $(document).on('click', '.pagination a', function(event){
    event.preventDefault();
    var search = $('#search').val();
    var status = $('#status').val();
    var pageurl = $('#page_url').val();
    var page = $(this).attr('href').split('page=')[1];
    fetchAll(pageurl, page, search, status);
});

function fetchAll(pageurl, page, search, status){
    $.ajax({
        url:pageurl+'?page='+page+'&search='+search+'&status='+status,
        type: 'get',
        success: function(response){
            $('#body').html(response);
        }
    });
}

//delete record
$('.delete').on('click', function(){
    var slug = $(this).attr('data-slug');
    var delete_url = $(this).attr('data-del-url');
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url : delete_url,
                type : 'DELETE',
                success : function(response){
                    if(response){
                        $('#id-'+slug).hide();
                        Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        )
                    }else{
                        Swal.fire(
                            'Not Deleted!',
                            'Sorry! Something went wrong.',
                            'danger'
                        )
                    }
                }
            });
        }
    })
});

</script>
<?php /**PATH C:\xampp\htdocs\green_glow\resources\views/admin/page/search.blade.php ENDPATH**/ ?>