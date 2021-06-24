<div class="panel">
    <div class="panel-title"><strong><?php echo e(__("Services ")); ?></strong></div>
    <div class="panel-body">
        <div class="table-responsive form-group">
            <table class="table">
                <thead>
                <tr>
                    <th><?php echo e(__('Enable?')); ?></th>
                    <th><?php echo e(__('Post')); ?></th>
                    <th><?php echo e(__('Maximum create')); ?></th>
                    <th><?php echo e(__('Auto publish')); ?></th>
                    <th><?php echo e(__('Commission')); ?></th>
                </tr>
                </thead>
                <?php $__currentLoopData = config("booking.services"); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                        $meta = $row->meta->where('post_type',$value)->first();
                    ;?>
                    <tr>
                        <td>
                            <input style="display: inline-block" type="checkbox" name="services_options[<?php echo e($item); ?>][enable]" <?php if(@$meta->enable==1): ?> checked <?php endif; ?> value="1">
                        </td>
                        <td><input type="hidden" name="services_options[<?php echo e($item); ?>][post_type]" value="<?php echo e($item); ?>"><?php echo e(call_user_func([$value,'getModelName'])); ?></td>
                        <td>
                            <input type="number" value="<?php echo e(@$meta->maximum_create); ?>" placeholder="Items" name="services_options[<?php echo e($item); ?>][maximum_create]" class="form-control">
                        </td>
                        <td>
                            <input type="checkbox" name="services_options[<?php echo e($item); ?>][auto_publish]" <?php if(@$meta->auto_publish==1): ?> checked <?php endif; ?> value="1">
                        </td>
                        <td>
                            <input type="number" value="<?php echo e(@$meta->commission); ?>" placeholder="Commission" name="services_options[<?php echo e($item); ?>][commission]" class="form-control">
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
        </div>
    </div>
</div>
<?php /**PATH D:\project for sale\booking-core.2.0.foll\modules\Vendor\Views\admin\plan\services.blade.php ENDPATH**/ ?>