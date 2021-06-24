<div class="form-group">
    <label><?php echo e(__('Name')); ?></label>
    <input type="text" value="<?php echo e($translation->name); ?>" placeholder=" <?php echo e(__('Tag name')); ?>" name="name" class="form-control">
</div>
<?php if(is_default_lang()): ?>
<div class="form-group">
    <label><?php echo e(__('Slug')); ?></label>
    <input type="text" value="<?php echo e($row->slug); ?>" placeholder=" <?php echo e(__('Tag Slug')); ?>" name="slug" class="form-control">
</div>
<?php endif; ?>

    
    
<?php /**PATH D:\project for sale\booking-core.2.0.foll\modules\News\Views\admin\tag\form.blade.php ENDPATH**/ ?>