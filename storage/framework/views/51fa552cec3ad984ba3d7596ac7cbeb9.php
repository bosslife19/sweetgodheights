<!-- about area start -->
<section class="section_padding about_us">
    <div class="container">
        <div class="row align-items-center <?php echo e(pagesetting('alignment_left_right')); ?>">
            <div class="col-xxl-6 col-md-6">
                <div class="about_us_img">
                    <div class="about_us_img_flex">
                        <?php if(!empty(pagesetting('about_area_img_1'))): ?>
                            <div class="about_us_img_item">
                                <div class="about_us_img_item_img large-img">
                                    <img src="http://localhost/schoolmanagement/public/images/school-building.jpg"
                                        alt="<?php echo e(__('edulia.Image')); ?>">
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="col-xxl-5 offset-xxl-1 col-md-6">
                <div class="about_us_inner">
                    <h3>Our Mission</h3>
                    <p>SweetGod Heightss Schools achieve excellence through deligence as pacesetter pupils and students creatively achieve novel technological breakthroughs anchored on global academic competitiveness and ICT access.</p>
                    <?php if(!empty(pagesetting('about_area_list_items'))): ?>
                        <div class="about_us_inner_list">
                            <div class="about_us_inner_list_item">
                                    <?php if(!empty($item['item_image'])): ?>
                                        
                                    <?php endif; ?>
                                    <div class="about_us_inner_list_item_right">
                                        <div class="about_us_inner_list_item_inner">
                                            <h4>Our Vision</h4>
                                            <p style="margin-top:5px">Activating a versatile, competent and visionary crop of ICT and technologically-minded students equipped to creatively confront the frontiers of knowledge and research in all its ramifications.</p>
                                        </div>
                                    </div>
                                    <div class="about_us_inner_list_item_right" style="margin-top:25px">
                                        <div class="about_us_inner_list_item_inner">
                                            <h4>Our Motto</h4>
                                            <p style="margin-top:5px; font-weight:bold">Excellence through Diligence</p>
                                        </div>
                                    </div>
                                </div>

                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about area end -->
<?php /**PATH C:\xampp\htdocs\schoolmanagement1\resources\views/themes/edulia/pagebuilder/about-section/view.blade.php ENDPATH**/ ?>