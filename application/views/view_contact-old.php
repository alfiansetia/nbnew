<!--Banner Start-->
<div class="banner-slider-testimonial">
    <div class="bannder-table">
        <div class="banner-text">
            <h1>Contact Us</h1>
        </div>
    </div>
</div>
<!--Banner End-->

<!--Contact Start-->
<div class="contact-area pt_60 pb_90">
    <div class="container">

        <div class="row">
            <div class="col-6">
                <h2>NatureBridge ID</h2>
                <p>Address in some area in Central Jakarta Capital region.</p>
                <p>Address lines 2</p>
                <p>Address lines 3</p>
                <br>
                <p>Phone: +62 324 2343</p>
                <p>Fax: (6221) 324 1234</p>

                <!-- <ul>
                    <?php
                    $cek = explode(',', $contact['contact_phone']);
                    foreach ($cek as $key => $value) {
                    ?>
                        <li><?= $value ?></li>
                    <?php } ?>
                </ul>
                 -->
            </div>
            <div class="col-6">
                <div class="contact-form headstyle">
                    <?php echo form_open(base_url() . 'contact/send_email', array('class' => '')); ?>
                    <div class="form-row row">
                        <div class="form-group col-md-6 col-lg-12">
                            <input type="text" class="form-control" placeholder="<?php echo NAME; ?>" name="name">
                        </div>
                        <div class="form-group col-md-6 col-lg-12">
                            <input type="text" class="form-control" placeholder="<?php echo PHONE_NUMBER; ?>" name="phone">
                        </div>
                        <div class="form-group col-md-6 col-lg-12">
                            <input type="email" class="form-control" placeholder="<?php echo EMAIL_ADDRESS; ?>" name="email">
                        </div>

                        <div class="form-group col-12">
                            <textarea class="form-control" style="border-radius: 20px !important;" placeholder="<?php echo MESSAGE; ?>" name="message"></textarea>
                        </div>
                        <div class="form-group col-12">
                            <div class="d-flex align-items-center">
                                <img src="<?= base_url() ?>public/images/capctha.png" style="width: 302px; height: 76px" alt="">
                                <button type="submit" class="btn btn-primary ml-auto" name="form_contact">Submit</button>
                            </div>
                        </div>
                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>

        </div>
    </div>
</div>
<!--Contact End-->