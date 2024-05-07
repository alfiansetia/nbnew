<!--Banner Start-->
<div class="banner-slider-testimonial">
    <div class="bannder-table">
        <div class="banner-text">

        </div>
    </div>
</div>
<!--Banner End-->

<!--Testimonial-Two Start-->
<div class="testimonial-area-testi mb-5 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card" style="border:none !important;">
                    <div id="product-container">
                        <img id="product-image" class="mb-5 mt-2" src="<?= base_url();  ?>public/uploads/<?= $portfolio['photo'] ?>" alt="Product Image">
                    </div>
                    <div id="thumbnail-container" class="owl-carousel">
                        <div class="thumbnail" onclick="changeImage('<?= base_url();  ?>public/uploads/<?= $portfolio['photo'] ?>')">
                            <img src="<?= base_url();  ?>public//uploads/<?= $portfolio['photo'] ?>" alt="Thumbnail 1">
                        </div>
                        <?php
                        foreach ($portfolio_photo as $key => $value) {
                        ?>
                            <div class="thumbnail" onclick="changeImage('<?= base_url();  ?>public/uploads/<?= $value['photo'] ?>')">
                                <img src="<?= base_url();  ?>public/uploads/portfolio_photos/<?= $value['photo'] ?>" alt="Thumbnail Product">
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <nav>
                    <ol class="breadcrumb" style="padding-left: 0;padding-bottom:0;background-color: transparent !important; margin:0 !important;">
                        <li class="breadcrumb-item">For <?= $portfolio['type'] ?></li>
                        <li class="breadcrumb-item">Library</li>
                        <li class="breadcrumb-item"><?= $portfolio['texture_name'] ?></li>
                        <li class="breadcrumb-item"><?= $portfolio['name'] ?></li>
                    </ol>
                </nav>

                <hr>
                <h1 class="fw-bold text-title-black"><?= $portfolio['name'] ?></h1>
                <p style="font-size: 20px"><?= $portfolio['short_content'] ?></p>
                <div class="mt-5" style="text-align: justify;">
                    <?= $portfolio['content'] ?>
                </div>
                <hr class="mt-3">
                <div class="d-flex align-items-center">
                    <b class="fs-2" style="margin-right: 50px;">Size</b>
                    <div class="variant-item d-flex gap-2">
                        <?php
                        $dom = new DOMDocument();
                        $dom->loadHTML($portfolio['size']);
                        $pElement = $dom->getElementsByTagName('p')->item(0);
                        $text = $pElement->nodeValue;
                        $variant = explode('/', $text);
                        foreach ($variant as $key => $value) {
                        ?>
                            <div class="variant rounded-lg" style="margin-right:10px;border: 1px solid #EE6900; padding: 5px 5px;">
                                <span style="color: #EE6900;"><?= $value ?></span>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <hr>
                <p>Looking to buy in store? <span style="color: #EE6900;">How to buy</span></p>
                <hr>
                <div class="faq-group headstyle mt-30">
                    <div id="accordion">
                        <div class="faq-item card">
                            <div class="faq-header" id="headingOne">
                                <button style="padding-left: 0;" class="faq-button d-flex justify-content-between collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <b>Benefits</b><i class="fa fa-plus"></i>
                                </button>
                            </div>
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="faq-body">
                                    <?php
                                    $dom = new DOMDocument();
                                    $dom->loadHTML($portfolio['fungsi_utama']);
                                    $pElement = $dom->getElementsByTagName('p')->item(0);
                                    $text = $pElement->nodeValue;
                                    $komposisi = explode('. ', $text);
                                    foreach ($komposisi as $key => $value) {
                                        $item = trim(substr($value, strpos($value, ' ') + 1));
                                        if (!empty($item)) {
                                    ?>
                                            <li><?= $item ?></li>
                                    <?php }
                                    } ?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="accordion">
                        <div class="faq-item card">
                            <div class="faq-header" id="headingTwo">
                                <button style="padding-left: 0;" class="faq-button d-flex justify-content-between collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                    <b>Nutritional Information</b><i class="fa fa-plus"></i>
                                </button>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="faq-body">
                                    <div id="accordion">
                                        <div class="faq-item card" style="background-color: #F8F8F8; border-radius:8px;">
                                            <div class="faq-header" id="headingThree">
                                                <button style="padding-left: 2%;" class="faq-button d-flex justify-content-between collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                                    <b>Ingredients</b><i class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                                <div class="faq-body" style="padding-left: 6%; background-color:#F8F8F8">
                                                    <ul>
                                                        <?php
                                                        $dom = new DOMDocument();
                                                        $dom->loadHTML($portfolio['komposisi']);
                                                        $pElement = $dom->getElementsByTagName('p')->item(0);
                                                        $text = $pElement->nodeValue;
                                                        $komposisi = explode(',', $text);
                                                        foreach ($komposisi as $key => $value) {
                                                        ?>
                                                            <li><?= $value ?></li>
                                                        <?php } ?>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="accordion">
                                        <div class="faq-item card" style="background-color: #F8F8F8; border-radius:8px;">
                                            <div class="faq-header" id="headingFour">
                                                <button style="padding-left: 2%;" class="faq-button d-flex justify-content-between collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                                    <b>Guaranted Analysis</b><i class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                                                <div class="faq-body" style="padding-left: 6%; background-color:#F8F8F8">
                                                    <ul>
                                                        <?php
                                                        $dom = new DOMDocument();
                                                        $dom->loadHTML($portfolio['analisa_gizi']);
                                                        $pElement = $dom->getElementsByTagName('p')->item(0);
                                                        $text = $pElement->nodeValue;
                                                        $komposisi = explode(',', $text);
                                                        foreach ($komposisi as $key => $value) {
                                                        ?>
                                                            <li><?= $value ?></li>
                                                        <?php } ?>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="accordion">
                                        <div class="faq-item card" style="background-color: #F8F8F8; border-radius:8px;">
                                            <div class="faq-header" id="headingFive">
                                                <button style="padding-left: 2%;" class="faq-button d-flex justify-content-between collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                                    <b>Calorie Content</b><i class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                                                <div class="faq-body" style="padding-left: 6%; background-color:#F8F8F8">
                                                    <ul>
                                                        <?php
                                                        $dom = new DOMDocument();
                                                        $dom->loadHTML($portfolio['kalori']);
                                                        $pElement = $dom->getElementsByTagName('p')->item(0);
                                                        $text = $pElement->nodeValue;
                                                        $calories = explode(',', $text);
                                                        foreach ($calories as $key => $value) {
                                                        ?>
                                                            <li><?= $value ?></li>
                                                        <?php } ?>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function changeImage(imageUrl) {
        document.getElementById('product-image').src = imageUrl;
    }
</script>
<!--Testimonial-Two End-->