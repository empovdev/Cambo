<script src="https://js.pusher.com/5.0/pusher.min.js"></script>
<script>
  // Enable pusher logging - don't include this in production
  Pusher.logToConsole = true;
  var pusher = new Pusher("<?php echo e(config('chatify.pusher.key')); ?>", {
    encrypted: true,
    cluster: "<?php echo e(config('chatify.pusher.options.cluster')); ?>",
    authEndpoint: '<?php echo e(route("pusher.auth")); ?>',
    auth: {
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    }
  });
  window.tmp_user_id = '<?php echo e(request('user_id')); ?>'
</script>
<script src="<?php echo e(asset('js/chatify/code.js')); ?>"></script>
<script>
  // Messenger global variable - 0 by default
  messenger = "<?php echo e(@$id); ?>";
</script>
<?php /**PATH D:\project for sale\booking-core.2.0.foll\resources\views\vendor\Chatify\layouts\footerLinks.blade.php ENDPATH**/ ?>