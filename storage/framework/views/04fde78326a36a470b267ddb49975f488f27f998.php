

<?php $__env->startSection('content'); ?>

<h2>USer Detail</h2>


<div class="card">
    <div class="card-body">
    <h4 class="card-title"> <?php echo e($details->fullname); ?>  <?php echo e($details->email); ?>  <?php echo e($details->phone); ?></h4>


        <a class="btn btn-sm btn-primary" href=" <?php echo e(route('user-detail.edit', $details)); ?> " role="button">Edit</a>

        <form action="<?php echo e(route('user-detail.destroy', $details)); ?>" method="POST" style="display: inline">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>

            <input type="submit" value="Delete" class="btn btn-sm btn-danger">
        </form>

    </div>
</div>

<div class="text-right mt-3">
    <a class="btn btn-primary " href=" <?php echo e(route('education.index')); ?> " role="button">Next Section</a>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\resume-builder\resume-builder1\resources\views/user_detail/index.blade.php ENDPATH**/ ?>