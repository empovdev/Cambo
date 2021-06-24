
<?php $__env->startSection('head'); ?>
    <link href="<?php echo e(asset('module/booking/css/checkout.css?_ver='.config('app.version'))); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="bravo-booking-page padding-content" >
        <div class="container">
            <div id="bravo-checkout-page" >
                <div class="row">
                    <div class="col-md-8">
                        <h3 class="form-title"><?php echo e(__('Booking Submission')); ?></h3>
                         <div class="booking-form">
                             <?php echo $__env->make($service->checkout_form_file ?? 'Booking::frontend/booking/checkout-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                         </div>
                    </div>
                    <div class="col-md-4">
                        <div class="booking-detail booking-form">
                            <?php echo $__env->make($service->checkout_booking_detail_file ?? '', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
    <script src="<?php echo e(asset('module/booking/js/checkout.js')); ?>"></script>
    <script type="text/javascript">
        jQuery(function () {
            $.ajax({
                'url': bookingCore.url + '<?php echo e($is_api ? '/api' : ''); ?>/booking/<?php echo e($booking->code); ?>/check-status',
                'cache': false,
                'type': 'GET',
                success: function (data) {
                    if (data.redirect !== undefined && data.redirect) {
                        window.location.href = data.redirect
                    }
                }
            });
        })

        $('.deposit_amount').on('change', function(){
            checkPaynow();
        });

        $('input[type=radio][name=how_to_pay]').on('change', function(){
            checkPaynow();
        });

        function checkPaynow(){
            var credit_input = $('.deposit_amount').val();
            var how_to_pay = $("input[name=how_to_pay]:checked").val();
            var convert_to_money = credit_input * <?php echo e(setting_item('wallet_credit_exchange_rate',1)); ?>;

            if(how_to_pay == 'full'){
                var pay_now_need_pay = parseFloat(<?php echo e(floatval($booking->total)); ?>) - convert_to_money;
            }else{
                var pay_now_need_pay = parseFloat(<?php echo e(floatval($booking->deposit == null ? $booking->total : $booking->deposit)); ?>) - convert_to_money;
            }

            if(pay_now_need_pay < 0){
                pay_now_need_pay = 0;
            }
            $('.convert_pay_now').html(bravo_format_money(pay_now_need_pay));
            $('.convert_deposit_amount').html(bravo_format_money(convert_to_money));
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\project for sale\booking-core.2.0.foll\modules\Booking\Views\frontend\checkout.blade.php ENDPATH**/ ?>