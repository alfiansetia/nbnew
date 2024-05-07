<!--Banner Start-->
<div class="banner-slider-testimonial">
    <div class="bannder-table">
        <div class="banner-text">
            <h1><?= $page_contact['contact_heading'] ?></h1>
        </div>
    </div>
</div>
<!--Banner End-->

<!--Contact Start-->
<div class="contact-area pt_60 pb_90">
    <div class="container">
        <div class="row mx-5">
            <div class="col-md-6">
                <div class="">
                    <div class="d-flex align-items-center">
                        <img src="<?php echo base_url(); ?>public/images/contact_1.png" class="mr-3" width="32px" alt="">
                        <h2 class="pt-3">NatureBridge Distribution Center</h2>
                    </div>
                    <div class="mb-4 mt-2">
                        <span>Address in <?= $page_contact['contact_address'] ?>.</span><br>
                    </div>
                    <div>
                        <?php
                        $phone = explode(',', $page_contact['contact_phone']);
                        foreach ($phone as $key => $value) {
                        ?>
                            <span><?= $value ?></span><br>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="">
                    <div class="d-flex align-items-center">
                        <img src="<?php echo base_url(); ?>public/images/contact_2.png" class="mr-3" width="32px" alt="">
                        <h2 class="pt-3">NatureBridge Distribution Center</h2>
                    </div>
                    <div class="mb-4 mt-2">
                        <span>Address in <?= $page_contact['contact_address'] ?>.</span><br>
                    </div>
                    <div>
                        <?php
                        $phone = explode(',', $page_contact['contact_phone']);
                        foreach ($phone as $key => $value) {
                        ?>
                            <span><?= $value ?></span><br>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Contact End-->