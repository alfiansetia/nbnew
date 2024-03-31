<!--Banner Start-->
<div class="banner-slider-testimonial">
    <div class="bannder-table">
        <div class="banner-text">

        </div>
    </div>
</div>
<!--Banner End-->
<?php
$timestamp = strtotime($detail->news_date);
$formattedDate = date("M d, Y", $timestamp);
?>

<!--Testimonial-Two Start-->
<div class="testimonial-area-testi mb-5 mt-5">
    <div class="container" style="margin-top: -10% !important;">
        <div class="row">
            <div class="col-lg-12">
                <div class="d-flex justify-content-between mb-5">
                    Pet Tips / Categories / <?= $detail->news_title ?>
                    <div class="d-flex justify-content-center">
                        <p style="margin: 0">share on</p>
                        <img class="ml-2" src="<?php echo base_url(); ?>public/svg/x.svg" style="width: 20px;" alt="x" />
                        <img class="ml-2" src="<?php echo base_url(); ?>public/svg/fb.svg" alt="facebook" />
                    </div>
                </div>
                <img src="<?= base_url(); ?>public/uploads/<?= $detail->banner ?>" class="img-fluid w-100 rounded-lg" alt="" style="border-radius: 20px !important;">
                <div class="container text-center mb-5">
                    <h2 class="fw-bold mb-4 mt-5"><?= $detail->news_title ?></h2>
                    <div class="d-flex align-items-center justify-content-center">
                        <div class="mr-4">
                            <img src="<?= base_url() ?>public/images/date.png" alt="" class="mr-2"> <span><?= $formattedDate ?></span>
                        </div>
                        <img src="<?= base_url() ?>public/images/clock.png" alt="" class="mr-2"> <span>2 Minutes read</span>
                    </div>
                </div>
                <?= $detail->news_content ?>
                <div class="text-center mt-5">
                    <h5 class="mb-4">Did you find this article useful?</h5>
                    <div class="d-flex align-items-center justify-content-center">
                        <button class="mr-3 btn btn-sm p-2" style="width:78px; border-radius: 15px !important; color:white; background-color:#EE6900">Yes</button>
                        <button class="btn btn-sm p-2" style="width:78px; border-radius: 15px !important; color:white; background-color:#EE6900">No</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <h1 class="text-center">RELATE ARTICLES</h1>
            </div>
        </div>
        <div class="row">
            <?php foreach ($relate_blog as $value) {
                $timestamp = strtotime($value['news_date']);
                $formattedDate = date("M d, Y", $timestamp);
            ?>
                <div class="col-lg-4 col-md-6">
                    <div class="services-item effect-item">
                        <a href="<?php echo base_url(); ?>blog/detail_blog/<?= $value['news_id'] ?>" class="image-effect">
                            <div class="services-photo" style="background-image: url(<?php echo base_url(); ?>public/images/tips-1.png); border-radius: 8px 8px 0px 0px; height:400px"></div>
                        </a>
                        <div class="services-text">
                            <h3 class="d-flex justify-content-between">
                                <a href="<?php echo base_url(); ?>blog/detail_blog/<?= $value['news_id'] ?>"><?= $value['news_title'] ?>
                                </a>
                                <img src="<?php echo base_url(); ?>public/svg/arrow-right.svg" width="40px" height="40px" alt="Arrow">
                            </h3>

                            <div class="d-flex">
                                <div class="button-bn">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <img src="<?php echo base_url(); ?>public/svg/calendar.svg" width="20px" height="20px" alt="Arrow">

                                        </div>
                                        <div class="ml-2"><?= $formattedDate ?></div>
                                    </div>
                                </div>
                                <div class="button-bn ml-2">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <img src="<?php echo base_url(); ?>public/svg/update.svg" width="20px" height="20px" alt="Arrow">

                                        </div>
                                        <div class="ml-2"><?= $formattedDate ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            } ?>
        </div>
    </div>
</div>
<!--Testimonial-Two End-->