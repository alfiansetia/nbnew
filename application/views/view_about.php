<style>
    #strickymenu {
        background-color: white;
        opacity: 60%;
        z-index: 10001;
        position: absolute;
        width: 100%;
        height: 100px !important;
    }
</style>

<!--Banner Start-->
<div class="banner-slider" style="background-image: url(<?php echo base_url(); ?>public/images/about-bg.png); background-size: cover; height: 70vh;">
    <div class="banner-text">
        <div class="position-relative">
            <div class="position-absolute bottom-0 start-0">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8" style="background-color: #00000056; text-align:left; padding: 40px 30px; width: 30rem; margin-top: 15rem; margin-left: 9rem">
                            <h style="font-size: 40px; color:white; font-weight:700;"><?= $about['about_heading'] ?></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Banner End-->

<!--About Start-->
<div class="about-page pt_60 pb_90">
    <div class="container">
        <div class="row">
            <div class="col-md-6" style="text-align: justify;">
                <?= $about['about_content'] ?>
            </div>
            <div class="col-md-6">
                <img src="<?= base_url() ?>public/images/man-with-dog.png" class="img-fluid" alt="">
            </div>
        </div>
        <div class="text-center m-5 mb-5">
            <h3 class="text-title-black">OUR VISION & MISSION</h3>
        </div>
        <div class="row">
            <?php
            foreach ($feature as $key => $value) {
            ?>
                <div class="col-12 col-md text-center p-3 mb-3 mr-md-3" style="background-color: #F8F8F8; border-radius:20px;">
                     <img class="mb-5 mt-5" src="<?= base_url() ?>public/uploads/<?= $value['icon'] ?>" alt=""> 
                    <!--<i class="<?= $value['icon'] ?> icon-about mb-5 mt-5"></i>-->
                    <p class="mb-4"><?= $value['content'] ?></p>
                </div>
            <?php } ?>
        </div>
        <div class=" container mt-5">
            <div class="text-center mx-4">
                <h3 class="text-title-black">EXPLORE OUR PRODUCT</h3>
                <p>Lorem ipsum dolor sit amet consectetur. Viverra nisl lectus sit lorem maecenas viverra dignissim quam. Lorem ipsum dolor sit amet consectetur.</p>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 mb-3">
                    <div class="card p-3" style="border-radius: 20px; border: 1px solid #EE6900;">
                        <img src="<?= base_url() ?>public/images/explor-1.png" alt="">
                        <button style="margin-left:16%; margin-bottom:-14%; border-radius: 30px !important; width:203px; background-color:#EE6900; color: white; height: 54px !important"><b>Shop for Cat</b></button>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-3">
                    <div class="card p-3" style="border-radius: 20px; border: 1px solid #EE6900;">
                        <img src="<?= base_url() ?>public/images/explor-2.png" alt="">
                        <button style="margin-left:16%; margin-bottom:-14%; border-radius: 30px !important; width:203px; background-color:#EE6900; color: white; height: 54px !important"><b>Shop for Dog</b></button>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-3">
                    <div class="card p-3" style="border-radius: 20px; border: 1px solid #EE6900;">
                        <img src="<?= base_url() ?>public/images/explor-3.png" alt="">
                        <button style="margin-left:16%; margin-bottom:-14%; border-radius: 30px !important; width:203px; background-color:#EE6900; color: white; height: 54px !important;"><b>Shop for Cat</b></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--About End-->