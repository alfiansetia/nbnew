<!--Banner Start-->
<div class="banner-slider-fqa">
    <div class="bannder-table">
        <div class="banner-text">
            <h1><?= $page_faq['faq_heading'] ?></h1>
        </div>
    </div>
</div>
<!--Banner End-->

<!--FAQ Start-->
<div class="faq-area faq-main-page pt_60 pb_90">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="faq-group headstyle mt-30">
                    <div id="accordion">
                        <?php
                        $i = 0;
                        foreach ($faqs as $row) {
                            $i++;

                            $dom = new DOMDocument();
                            $dom->loadHTML($row['faq_content']);
                            $pElement = $dom->getElementsByTagName('p')->item(0);
                            $text = $pElement->nodeValue;
                        ?>
                            <div class="faq-item card">
                                <div class="faq-header" id="heading<?php echo $i; ?>">
                                    <button class="faq-button d-flex justify-content-between align-items-center <?php if ($i != 1) {
                                                                                                                    echo 'collapsed';
                                                                                                                } ?>" data-toggle="collapse" data-target="#collapse<?php echo $i; ?>" aria-expanded="true" aria-controls="collapse<?php echo $i; ?>">
                                        <h3 style="font-weight: 700; margin: 0;"><?= $row['faq_title'] ?></h3>
                                        <span style="border: 1px solid; border-radius: 50%; width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
                                            <i class="fa fa-plus" style="padding-left: 5px;padding-top:3px;"></i>
                                        </span>
                                    </button>

                                </div>

                                <div id="collapse<?php echo $i; ?>" class="collapse <?php if ($i == 1) {
                                                                                        echo 'show';
                                                                                    } ?>" aria-labelledby="heading<?php echo $i; ?>" data-parent="#accordion">
                                    <div class="faq-body">
                                        <b>THE ANSWER LINES GOES HERE</b>: <?= $text ?>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="faq-reminder py-5">
                    <h2>
                        Didn't Found What You Looking For?
                    </h2>
                    <p>You can drop us a line via <a href="<?= base_url('contact') ?>"><span>contact us</span></a> page.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--FAQ End-->