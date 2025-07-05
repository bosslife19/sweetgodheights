<?php if (! $__env->hasRenderedOnce('1972aceb-51c2-4814-9271-be1c447b29aa')): $__env->markAsRenderedOnce('1972aceb-51c2-4814-9271-be1c447b29aa');
$__env->startPush(config('pagebuilder.site_style_var')); ?>
    <link rel="stylesheet" href="<?php echo e(asset('public/theme/edulia/packages/magnific/magnific-popup.min.css')); ?>">
<?php $__env->stopPush(); endif; ?>

<?php if (! $__env->hasRenderedOnce('f46276e8-f7a8-427d-85a4-9f9aeac339cd')): $__env->markAsRenderedOnce('f46276e8-f7a8-427d-85a4-9f9aeac339cd');
$__env->startPush(config('pagebuilder.site_script_var')); ?>
    <script>
        $(document).ready(function() {
            $('.gallery_item.video').magnificPopup({
                type: 'iframe',
            });
        });
    </script>
    <script src="<?php echo e(asset('public/theme/edulia/packages/magnific/jquery.magnific-popup.min.js')); ?>"></script>
<?php $__env->stopPush(); endif; ?>
<?php /**PATH C:\xampp\htdocs\schoolmanagement1\resources\views/themes/edulia/pagebuilder/video-gallery/view.blade.php ENDPATH**/ ?>