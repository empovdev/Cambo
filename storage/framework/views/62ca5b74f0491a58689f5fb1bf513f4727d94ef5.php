<?php if(count($hotel_related) > 0): ?>
    <div class="bravo-list-hotel-related">
        <h2><?php echo e(__("You might also like")); ?></h2>
        <div class="row">
            <?php $__currentLoopData = $hotel_related; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-3">
                    <?php echo $__env->make('Hotel::frontend.layouts.search.loop-grid',['row'=>$item], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php endif; ?><?php /**PATH D:\project for sale\booking-core.2.0.foll\modules\Hotel\Views\frontend\layouts\details\hotel-related.blade.php ENDPATH**/ ?>