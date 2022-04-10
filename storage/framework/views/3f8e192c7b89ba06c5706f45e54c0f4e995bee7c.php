<?php foreach($attributes->onlyProps(['name']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['name']); ?>
<?php foreach (array_filter((['name']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div class="form-group">
  <label for="<?php echo e($name); ?>"><?php echo e(ucfirst($name)); ?></label>
  <input type="text"
    class="form-control" name="<?php echo e($name); ?>"  placeholder="<?php echo e($name); ?>">
</div><?php /**PATH C:\xampp\htdocs\resume-builder\resume-builder1\resources\views/components/input.blade.php ENDPATH**/ ?>