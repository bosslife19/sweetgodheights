<?php if (! $__env->hasRenderedOnce('41955fcb-8be6-48d1-9a0e-ea6d4bf344c8')): $__env->markAsRenderedOnce('41955fcb-8be6-48d1-9a0e-ea6d4bf344c8');
$__env->startPush(config('pagebuilder.site_style_var')); ?>
    <link rel="stylesheet" href="<?php echo e(asset('public/theme/edulia/packages/carousel/owl.carousel.min.css')); ?>">
<?php $__env->stopPush(); endif; ?>



<?php if (! $__env->hasRenderedOnce('31a843b0-a930-49de-b6a4-cfd0d3b1cdd7')): $__env->markAsRenderedOnce('31a843b0-a930-49de-b6a4-cfd0d3b1cdd7');
$__env->startPush(config('pagebuilder.site_script_var')); ?>
    <script src="<?php echo e(asset('public/theme/edulia/packages/carousel/owl.carousel.min.js')); ?>"></script>
    <script>
        $('.home_speech_section .owl-carousel').owlCarousel({
            nav: true,
            navText: ['<i class="far fa-angle-left"></i>', '<i class="far fa-angle-right"></i>'],
            dots: false,
            items: 3,
            loop: true,
            margin: 20,
            autoplay: true,
            autoplayTimeout: 5000,
            autoplayHoverPause: true,
            responsive:{
                0: {
                    items: 1,
                    nav: false,
                },
                576:{
                    nav: true,
                    items: 1,
                },
                767:{
                    items: 2,
                },
                991:{
                    items: 3,
                },
            }
        });
    </script>
<?php $__env->stopPush(); endif; ?>
<?php /**PATH C:\xampp\htdocs\schoolmanagement1\resources\views/themes/edulia/pagebuilder/speech-slider/view.blade.php ENDPATH**/ ?>