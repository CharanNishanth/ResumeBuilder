<?php foreach($attributes->onlyProps(['name','value'=>null]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['name','value'=>null]); ?>
<?php foreach (array_filter((['name','value'=>null]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div class="form-group">
  <label for="">Summary</label>
  <textarea class="form-control" name="<?php echo e($name); ?>" id="<?php echo e($name); ?>" rows="3"></textarea>
</div><?php /**PATH C:\xampp\htdocs\resume-builder\resume-builder1\resources\views/components/form/textarea.blade.php ENDPATH**/ ?>