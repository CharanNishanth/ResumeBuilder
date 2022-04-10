

<?php $__env->startSection('content'); ?>

<style>

body{

    background-image: <?php echo e(asset("/images/bg.jpg")); ?>;
}
.container{
    text-align:center;
    
}
</style>


  <body>

  <div class="container">

<h2>Welcome to CV Builder</h2>

<a name="" id="" class="btn btn-primary" href="<?php echo e(route('user-detail.create')); ?>" role="button">Build Now</a>

</div>

      
 </body>









<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\resume-builder\resume-builder1\resources\views/main.blade.php ENDPATH**/ ?>