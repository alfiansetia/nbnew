<!--Banner Start-->
<div class="banner-slider-service">
    <div class="bannder-table">
        <div class="banner-text" style="margin-top: -80px;">
            <h1>NATURE BRIDGE BLOG</h1>
            <p>Looking for advise, training tips and more? We have a range of topics and articles written by pros, that can help pet gauradians understand thier pet more, and make life a lot more fun for everyone.</p>
        </div>
    </div>
    <div class="container mt_30" style="margin-bottom: -80px;">
        <div class="text-center">
            <h2 style="font-weight: 700;">Feature post</h2>
        </div>
        <div class="row">
            <?php
            $counter = 0;
            foreach ($all_news as $value) {
                if ($counter >= 2) {
                    break;
                }
                $timestamp = strtotime($value['news_date']);
                $formattedDate = date("M d, Y", $timestamp);
            ?>
                <div class="col-lg-6 col-md-6">
                    <div class="services-item effect-item">
                        <a href="<?php echo base_url(); ?>blog/blog_detail/<?= $value['news_id'] ?>" class="image-effect">
                            <div class="services-photo" style="background-image: url(<?php echo base_url(); ?>public/images/blog-2.png); border-radius: 8px 8px 0px 0px;height:350px; "></div>
                        </a>
                        <div class="services-text" style="background-color: transparent; border:1px solid #FFFFFF; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
                            <h3 class="d-flex justify-content-between">
                                <a href="<?php echo base_url(); ?>blog/blog_detail/<?= $value['news_id'] ?>"><?= $value['news_title'] ?>
                                </a>
                                <img src="<?php echo base_url(); ?>public/svg/arrow-right.svg" width="40px" height="40px" alt="Arrow">
                            </h3>
                            <span><?= $value['news_content_short'] ?></span>
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
<!--Banner End-->

<!--Service-Area Start-->
<div class="service-page  pb_90">

    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center">
            <h3 class="text-title-black">Blog Categories</h3>
            <button class="btn btn-primary">View All</button>
        </div>
        <div class="row">
            <?php
            foreach ($blogCategoryOne as $key => $value) {
                $timestamp = strtotime($value['news_date']);
                $formattedDate = date("M d, Y", $timestamp);
            ?>
                <div class="col-lg-4 col-md-6">
                    <div class="services-item effect-item">
                        <a href="<?php echo base_url(); ?>blog/blog_detail/<?= $value['news_id'] ?>" class="image-effect">
                            <div class="services-photo" style="background-image: url(<?php echo base_url(); ?>public/images/blog-3.png); border-radius: 8px 8px 0px 0px"></div>
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
                <div class="col-lg-4 col-md-6">
                    <div class="services-item effect-item">
                        <a href="<?php echo base_url(); ?>blog/blog_detail/<?= $value['news_id'] ?>" class="image-effect">
                            <div class="services-photo" style="background-image: url(<?php echo base_url(); ?>public/images/blog-4.png); border-radius: 8px 8px 0px 0px"></div>
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
            <?php } ?>
        </div>

        <div class="d-flex mt-5 justify-content-between align-items-center">
            <h3 class="text-title-black">Blog Categories</h3>
            <button class="btn btn-primary" style="border:gray 1.5px solid; color: gray">View All</button>
        </div>
        <div class="row">
            <?php
            foreach ($blogCategoryTwo as $key => $value) {
                $timestamp = strtotime($value['news_date']);
                $formattedDate = date("M d, Y", $timestamp);
            ?>
                <div class="col-lg-4 col-md-6">
                    <div class="services-item effect-item">
                        <a href="<?php echo base_url(); ?>blog/blog_detail/<?= $value['news_id'] ?>" class="image-effect">
                            <div class="services-photo" style="background-image: url(<?php echo base_url(); ?>public/images/blog-5.png); border-radius: 8px 8px 0px 0px"></div>
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
            <?php } ?>
        </div>

        <div class="d-flex mt-5 justify-content-between align-items-center">
            <h3 class="text-title-black">Blog Categories</h3>
            <button class="btn btn-primary">View All</button>
        </div>
        <div class="row">
            <?php
            foreach ($blogCategoryThree as $key => $value) {
                $timestamp = strtotime($value['news_date']);
                $formattedDate = date("M d, Y", $timestamp);
            ?>
                <div class="col-lg-4 col-md-6">
                    <div class="services-item effect-item">
                        <a href="<?php echo base_url(); ?>blog/blog_detail/<?= $value['news_id'] ?>" class="image-effect">
                            <div class="services-photo" style="background-image: url(<?php echo base_url(); ?>public/images/blog-6.png); border-radius: 8px 8px 0px 0px"></div>
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
            <?php } ?>
        </div>

    </div>
</div>
<!--Service-Area End-->