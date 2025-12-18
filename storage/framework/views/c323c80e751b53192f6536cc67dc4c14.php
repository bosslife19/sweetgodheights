<?php if (! $__env->hasRenderedOnce('caad1f68-90ab-4a72-aee3-791dd1c020f3')): $__env->markAsRenderedOnce('caad1f68-90ab-4a72-aee3-791dd1c020f3');
$__env->startPush(config('pagebuilder.site_style_var')); ?>
    <link rel="stylesheet" href="<?php echo e(asset('public/theme/edulia/packages/magnific/magnific-popup.min.css')); ?>">
<?php $__env->stopPush(); endif; ?>

<?php if (! $__env->hasRenderedOnce('1ac06a24-7bbb-4203-a69d-fcad163f2d12')): $__env->markAsRenderedOnce('1ac06a24-7bbb-4203-a69d-fcad163f2d12');
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