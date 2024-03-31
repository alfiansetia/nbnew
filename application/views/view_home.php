<style>
    #strickymenu {
        background-color: white;
        opacity: 80%;
        z-index: 10001;
        position: absolute;
        width: 100%;
        height: 100px !important;
    }
</style>

<!--Slider Start-->
<div class="slider">
    <div class="slide-carousel slider-one owl-carousel">
        <?php
        foreach ($sliders as $slider) {
        ?>
            <div class="slider-item flex" style="background-image:url(<?php echo base_url(); ?>public/uploads/<?php echo $slider['photo']; ?>);">
                <div class="bg-slider"></div>
                <div class="container">
                    <div class="row">
                        <div class="<?php if ($slider['position'] == 'Left') {
                                        echo 'col-lg-6 col-md-9 col-12';
                                    } else {
                                        echo 'offset-lg-6 col-lg-6 offset-md-3 col-md-9 col-12';
                                    } ?>">
                            <div class="slider-text">

                                <?php if ($slider['heading'] != '') : ?>
                                    <div class="text-animated">
                                        <h1><?php echo $slider['heading']; ?></h1>
                                    </div>
                                <?php endif; ?>

                                <?php if ($slider['content'] != '') : ?>
                                    <div class="text-animated">
                                        <p>
                                            <?php echo nl2br($slider['content']); ?>
                                        </p>
                                    </div>
                                <?php endif; ?>


                                <?php if ($slider['button1_text'] != '' || $slider['button2_text'] != '') : ?>
                                    <div class="text-animated">

                                        <ul>
                                            <li> <button class="btn btn-primary"><?= $slider['button1_text'] ?></button></li>
                                            <li> <button class="btn btn-primary"><?= $slider['button2_text'] ?></button></li>

                                        </ul>
                                    </div>
                                <?php endif; ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>

<!--Slider End-->

<!--About Start-->
<?php if ($page_home_lang_independent['home_welcome_status'] == 'Show') : ?>
    <div class="about-area pt_10 pb_60">
        <div class="row">
            <div class="col-lg-4 mt_30">
                <img class="dog-image" src="<?php echo base_url(); ?>public/images/about-1.png" alt="About Photo">
            </div>
            <div class="col-lg-6 mt_30">
                <div class="about-content">
                    <div class="headline-left">
                        <h3>
                            OUR BRAND STORY
                        </h3>
                        <p><?=
                            substr($about['about_content'], 0, 70) . "...";
                            ?></p>
                        <a href="<?= base_url('about') ?>" class="btn btn-primary">More</a>
                    </div>
                    <div class="headline-right">
                        <h3>
                            VISION & MISSION </h3>
                        <p>Lorem ipsum dolor sit amet consectetur. Viverra nisl lectus sit lorem maecenas viverra dignissim quam. Lorem ipsum dolor sit amet consectetur.</p>
                        <button class="btn btn-primary">More</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
<?php endif; ?>
<!--About End-->

<!--Choose-Area Start-->
<?php if ($page_home_lang_independent['home_why_choose_status'] == 'Show') : ?>
    <div class="choose-area pb_90" style="background-color: #F8F8F8 !important;">
        <div class="container py-5">
            <div class="row">
                <div class="col-12">
                    <div class="headline">
                        <h2><?= $home['home_why_choose_title'] ?></h2>
                        <h3><?= $home['home_why_choose_subtitle'] ?></h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 mt_30">
                    <img class="choose-image" src="<?php echo base_url(); ?>public/images/choose.png" alt="About Photo">
                </div>
                <div class="col-lg-6 mt_40 choose-content">
                    <?php
                    foreach ($choose as $key => $value) {
                    ?>
                        <div class="d-flex align-item-center">
                            <!-- <img src="<?php echo base_url(); ?>public/images/blue.png" alt="Why Choose Us" class="why-img"> -->
                            <i class="mhy-img <?= $value['icon'] ?>" style="font-size: 50px;"></i>
                            <div class="ml-1">
                                <h3><?= $value['name'] ?></h3>
                                <p><?= $value['content'] ?></p>
                            </div>
                        </div>
                    <?php } ?>
                </div>

            </div>
        </div>
    </div>
<?php endif; ?>
<!--Choose-Area End-->

<!--Portfolio Start-->
<?php if ($page_home_lang_independent['home_portfolio_status'] == 'Show') : ?>
    <div class="portfolio-area pt_50">
        <div class="container mb-5">
            <div class="row">
                <div class="col-12 mb-5">
                    <iframe style="border-radius: 20px;" width="450" class="w-100" height="500" src="<?= $home['url_video'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture;" allowfullscreen></iframe>
                </div>
            </div>
            <div class="row">
                <div class="col-12 mt-5">
                    <div class="headline">
                        <h2>EXPLORE OUR PRODUCT</h2>
                        <h3>Lorem ipsum dolor sit amet consectetur. Viverra nisl lectus sit lorem maecenas viverra dignissim quam. Lorem ipsum dolor sit amet consectetur.</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4 mb-3">
                    <div class="card p-3" style="border-radius: 20px; border: 1px solid #EE6900;">
                        <img src="<?= base_url() ?>public/images/explor-1.png" alt="">
                        <button style="margin-left:16%; margin-bottom:-14%; border-radius: 30px !important; width:203px; background-color:#EE6900; color: white; height: 54px !important"><a href="<?= base_url('product?product_type=2') ?>" style="color: white; text-decoration:none"><b>Shop For Cat</b></a></button>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-3">
                    <div class="card p-3" style="border-radius: 20px; border: 1px solid #EE6900;">
                        <img src="<?= base_url() ?>public/images/cat-product.png" alt="">
                        <button style="margin-left:16%; margin-bottom:-14%; border-radius: 30px !important; width:203px; background-color:#EE6900; color: white; height: 54px !important"><a href="<?= base_url('product?product_type=1') ?>" style="color: white; text-decoration:none"><b>Shop For Dog</b></a></button>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-3">
                    <div class="card p-3" style="border-radius: 20px; border: 1px solid #EE6900;">
                        <img src="<?= base_url() ?>public/images/explor-2.png" alt="">
                        <button style="margin-left:16%; margin-bottom:-14%; border-radius: 30px !important; width:203px; background-color:#EE6900; color: white; height: 54px !important"><a href="<?= base_url('product?product_type=3') ?>" style="color: white; text-decoration:none"><b>Shop For Veterinary</b></a></button>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <!--Portfolio End-->

    <!--Testomonial-Area Start-->
    <?php if ($page_home_lang_independent['home_testimonial_status'] == 'Show') : ?>
        <div class="testimonial-area pt_90 pb_90">
            <div class="bg-testimonial"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="headline hl-white">
                            <h2>WHAT THEY SAY </h2>
                            <h3>Don't just take our word for it! Read stories from our customers.</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="testimonial-carousel owl-carousel owl-carousel mt-30" data-items="1" data-slide-by="1" data-dots="true">
                            <?php
                            foreach ($testimonials as $row) {
                            ?>
                                <div class="testimonial-item-testi">
                                    <img-comparison-slider hover="hover">
                                        <figure slot="first" class="before">
                                            <img slot="first" width="100%" src="<?php echo base_url(); ?>public/images/<?= $row['photo'] ?>">
                                            <figcaption>Before</figcaption>
                                        </figure>
                                        <figure slot="second" class="after">
                                            <img slot="second" width="100%" src="<?php echo base_url(); ?>public/images/<?= $row['photo_1'] ?>">
                                            <figcaption>After</figcaption>
                                        </figure>
                                    </img-comparison-slider>
                                </div>
                                <div class="card-body" style="background-color: #FFFFFF; border-radius:12px">
                                    <img src="<?php echo base_url(); ?>public/svg/testi-icon.svg" style="width: 80px" alt="Arrow">
                                    <h4 style="font-weight: 700"><?= $row['designation'] ?></h4>
                                    <p><?= $row['comment'] ?></p>
                                    <span style="font-weight:bold"><?= $row['name'] ?></span>
                                    <div class="d-flex">
                                        <img src="<?php echo base_url(); ?>public/svg/star.svg" style="width: 20px" alt="Arrow">
                                        <img src="<?php echo base_url(); ?>public/svg/star.svg" style="width: 20px" alt="Arrow">
                                        <img src="<?php echo base_url(); ?>public/svg/star.svg" style="width: 20px" alt="Arrow">
                                        <img src="<?php echo base_url(); ?>public/svg/star.svg" style="width: 20px" alt="Arrow">
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    <?php endif; ?>
    <!--Testomonial-Area End-->

    <!--Services Start-->
    <?php if ($page_home_lang_independent['home_service_status'] == 'Show') : ?>
        <div class="services-area pt_90 pb_90">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="headline d-flex align-items-center  justify-content-between">
                            <h2>PET TIPS</h2>
                            <div>
                                <button class="btn btn-primary">See all articles</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php
                    $counter = 0;
                    foreach ($all_news as $key => $value) {
                        if ($counter >= 3) {
                            break;
                        }
                        $timestamp = strtotime($value['news_date']);
                        $formattedDate = date("M d, Y", $timestamp);
                    ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="services-item effect-item">
                                <a href="<?php echo base_url(); ?>blog/blog_detail/<?= $value['news_id'] ?>" class="image-effect">
                                    <div class="services-photo" style="background-image: url(<?php echo base_url(); ?>public/images/tips-1.png); border-radius: 8px 8px 0px 0px"></div>
                                </a>
                                <div class="services-text" style="background-color: transparent; border:1px solid #FFFFFF; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
                                    <h3 class="d-flex justify-content-between">
                                        <a href="<?php echo base_url(); ?>blog/blog_detail/<?= $value['news_id'] ?>"> <?= $value['news_title'] ?>
                                        </a>
                                        <img src="<?php echo base_url(); ?>public/svg/arrow-right.svg" width="40px" height="40px" alt="Arrow">
                                    </h3>
                                    <hr>

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
                        $counter++;
                    }
                    ?>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <!--Services End-->