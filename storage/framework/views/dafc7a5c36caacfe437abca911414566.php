<?php if (! $__env->hasRenderedOnce('69b12f0a-8d9c-443a-aad2-d4d3122e520f')): $__env->markAsRenderedOnce('69b12f0a-8d9c-443a-aad2-d4d3122e520f');
$__env->startPush(config('pagebuilder.site_style_var')); ?>
    <link rel="stylesheet" href="<?php echo e(asset('public/theme/edulia/packages/carousel/owl.carousel.min.css')); ?>">
<?php $__env->stopPush(); endif; ?>



<?php if (! $__env->hasRenderedOnce('0f9463e9-d7a0-49cd-98a6-834d592599ed')): $__env->markAsRenderedOnce('0f9463e9-d7a0-49cd-98a6-834d592599ed');
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