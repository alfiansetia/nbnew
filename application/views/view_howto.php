<!--Banner Start-->
<div class="banner-slider-fqa">
    <div class="bannder-table">
        <div class="banner-text">
            <h1>FIND A STORE NEAR YOU</h1>
        </div>
    </div>
</div>
<!--Banner End-->

<!--FAQ Start-->
<div class="faq-area faq-main-page pt_60 pb_90">
    <div class="custom" style="background-color: #F3F3F3; height:160px; margin-top:-70px;">
        <div class="container align-item-center py-5">
            <div class="row">
                <div class="col-lg-12">
                    <div class="search-bar align-items-center">
                        <div class="d-flex">
                            <input type="text" class="form-control" style="border:none;border-radius: 40px !important; height:60px; padding-left:20px; padding-right:0; color:#B9B9B9" placeholder="DKI JAKARTA">
                            <button class="button-addon my-1" type="button" style="width: 60px; border-radius: 100px !important; background-color: #EE6900;">
                                <i class="fa fa-search" style="color: white; font-size: 30px; font-weight:100"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <!-- card -->
        <section class="d-flex justify-content-center align-items-center howto mt-4">
            <div class="row">
                <?php foreach ($howtos as $howto) {
                    $dom = new DOMDocument();
                    $dom->loadHTML($howto['address']);
                    $pElement = $dom->getElementsByTagName('p')->item(0);
                    $text = $pElement->nodeValue;
                ?>
                    <div class="col-md-4 mb_30">
                        <div class="card stockist" style="border-radius: 16px; background-color:#F8F8F8; border:none">
                            <div class="card-body">
                                <h5 class="card-title fw-bold mb-5" style="background-color: #EE6900; border-radius:8px; color:white; padding: 8px 10px;"><?= $howto['name'] ?></h5>
                                <div class="d-flex align-item-center mb-2">
                                    <i class="fa fa-map-signs" style="margin-right: 20px"></i>
                                    <p class="card-text" style="margin-top: -8px;">
                                        <?= $text ?>
                                    </p>
                                </div>
                                <div class="d-flex align-items-center mb-2">
                                    <i class="fa fa-phone" style="margin-right: 20px"></i>
                                    <p class="card-text"><?= $howto['phone'] ?></p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-map-marker" style="margin-right: 20px"></i>
                                    <a href="<?= $howto['url_maps'] ?>" class="card-link" style="color: #EE6900;">Open on Google maps</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>

        </section>

        <!-- information -->
        <section class="container d-flex flex-column align-items-center mt-2">
            <h3 class="fw-bold mb-2 text-center" style="font-weight: 900; margin-top: 50px">
                Can’t Find Nature Bridge At Any Of Your Local Pet Stores?
            </h3>
            <p class="text-center text-muted">
                You can drop us a line via
                <span style="color: #EE6900">contact us</span> page <br>
                Or browse our products in your favorite commerce apps below.
            </p>
            <div class="d-flex align-items-center justify-content-center">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="icon-commerce rounded-circle mx-4">
                                <img src="<?= base_url() ?>public/images/Vector.png" width="60px" alt="" class="img-fluid">
                            </div>
                            <div class="icon-commerce rounded-circle mx-4">
                                <img src="<?= base_url() ?>public/images/Vector-1.png" width="60px" alt="" class="img-fluid">
                            </div>
                            <div class="icon-commerce rounded-circle mx-4">
                                <img src="<?= base_url() ?>public/images/Vector-2.png" width="60px" alt="" class="img-fluid">
                            </div>
                            <div class="icon-commerce rounded-circle mx-4">
                                <img src="<?= base_url() ?>public/images/Vector-3.png" width="60px" alt="" class="img-fluid">
                            </div>
                            <div class="icon-commerce rounded-circle mx-4">
                                <img src="<?= base_url() ?>public/images/Vector-4.png" width="60px" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<!--FAQ End-->