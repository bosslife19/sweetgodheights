<section class="section_padding facilities">
    <div class="container">
        <?php if(pagesetting('facilities_image_align') == 'right'): ?>
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6">
                    <div class="facilities_inner_text">
                        <h3>Our School Anthem</h3>
                        SweetGod Heights Schools,
We remain the best
We set the pace for others to follow
We soar so high
So high into the sky
In learning and sound character
SweetGod, SweetGod Heights Schools (3x)
We are the best
SweetGod, SweetGod Heights Schools 
Our motto is... Excellent through diligence.
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1 col-md-6">
                    <?php if(pagesetting('facilities_image_upload')): ?>
                        <div class="facilities_img">
<div class="col-lg-5 col-md-6" style="width:100% !important; margin-top:80px">
                    <div class="facilities_inner_text">
                        <h3>Our School Pledge</h3>
I pledge to SweetGod Heights schools, to be regular punctual and studious, to cooperate with the school management and my fellow students, to  protect the image of the school, to keep the school rules and regulations and to see the growth and development of the school, so help me God.
                    </div>
                </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        <?php else: ?>
            <div class="row align-items-center mobile-column-reverse">
                <div class="col-md-6">
                    <?php if(pagesetting('facilities_image_upload')): ?>
                        <div class="facilities_img">
                            <img src="<?php echo e(pagesetting('facilities_image_upload')[0]['thumbnail']); ?>" alt="">
                        </div>
                    <?php endif; ?>
                </div>
                <div class="col-md-6">
                    <div class="facilities_inner_text facilities_inner_right">
                        <h3><?php echo e(pagesetting('facilities_heading')); ?></h3>
                        <?php echo pagesetting('facilities_description'); ?>

                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section><?php /**PATH C:\xampp\htdocs\schoolmanagement1\resources\views/themes/edulia/pagebuilder/facilities/view.blade.php ENDPATH**/ ?>