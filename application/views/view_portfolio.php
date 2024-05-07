<?php
$CI = &get_instance();
$CI->load->model('Model_portfolio');

?>
<!--Banner Start-->
<div class="banner-slider ">
    <div class="container ">
        <div class="bannder-table ">
            <div class="banner-text ">
                <h1 class="text-dark">A BOWL FULL OF GOODNESS</h1>
                <p class="text-dark font-lg px-5 mb-5 ">Bring out the best in each bag with balanced, real meat recipes
                    with natural ingredients combined with minerals & vitamins</p>

                <div class=" d-flex justify-content-center " style="position: relative; margin-top:200px">
                    <img class="bread" src="<?php echo base_url(); ?>public/images/banner-p.png" height="cover"
                        alt="breadcom" style="position: absolute">
                </div>
            </div>
        </div>
    </div>
</div>
<!--Banner End-->

<!--Project Start-->
<div class="portfolio-area mt-5 project-page-porto pt_90 ">


    <div class="product-body">
        <div class="container" style="width: 1280px;">
            <div class="row">
                <div class="col-md-4 fixed-left">
                    <div class="product-list">
                        <div id="accordion">
                            <div class="faq-item card">
                                <div class="faq-header-porto" id="headingOne">
                                    <button class="faq-button d-flex justify-content-between collapsed"
                                        data-toggle="collapse" data-target="#collapseOne" aria-expanded="false"
                                        aria-controls="collapseOne">
                                        <h3 class="text-title-black">Type</h3> <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                    data-parent="#accordion">
                                    <div>
                                        <form method="get">
                                            <ul style="list-style: none;" class="container">
                                                <div class="mt-2 ml-2">
                                                    <?php
                                                    foreach ($product_type as $key => $attribute) {
                                                        $checked = '';
                                                        foreach ($filter['filter'] as $key => $value) {
                                                            if ($key == 'product_type') {
                                                                if ($attribute['id'] == $value) {
                                                                    $checked = 'checked';
                                                                    break; // Break the loop once a match is found
                                                                }
                                                            }
                                                        }
                                                    ?>
                                                    <li class="porto-item-flex">
                                                        <input class="form-check-input" type="radio" name="product_type"
                                                            value="<?= $attribute['id'] ?>" <?= $checked ?>>
                                                        <span class="ml-2"><?= $attribute['type'] ?></span>
                                                    </li>
                                                    <?php
                                                    }
                                                    ?>
                                                </div>
                                            </ul>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="accordion">
                            <div class="faq-item card">
                                <div class="faq-header-porto" id="headingTwo">
                                    <button class="faq-button d-flex justify-content-between collapsed"
                                        data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                        aria-controls="collapseTwo">
                                        <h3 class="text-title-black">Food Type</h3> <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                    data-parent="#accordion">
                                    <div>
                                        <form method="get">
                                            <ul style="list-style: none;" class="container">
                                                <div class="mt-2 ml-2">
                                                    <?php
                                                    foreach ($texture as $key => $attribute) {
                                                        $checked = '';
                                                        foreach ($filter['filter'] as $key => $value) {
                                                            if ($key == 'texture') {
                                                                if ($attribute['id'] == $value) {
                                                                    $checked = 'checked';
                                                                    break; // Break the loop once a match is found
                                                                }
                                                            }
                                                        }
                                                    ?>
                                                    <li class="porto-item-flex">
                                                        <input class="form-check-input" type="radio" name="texture"
                                                            value="<?= $attribute['id'] ?>" <?= $checked ?>>
                                                        <span class="ml-2"><?= $attribute['texture_name'] ?></span>
                                                    </li>
                                                    <?php
                                                    }
                                                    ?>
                                                </div>
                                            </ul>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="accordion">
                            <div class="faq-item card">
                                <div class="faq-header-porto" id="headingThree">
                                    <button class="faq-button d-flex justify-content-between collapsed"
                                        data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        <h3 class="text-title-black">Age</h3> <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                    data-parent="#accordion">
                                    <div>
                                        <form method="get">
                                            <ul style="list-style: none;" class="container">
                                                <div class="mt-2 ml-2">
                                                    <?php
                                                    foreach ($ages as $key => $attribute) {
                                                        $checked = '';
                                                        foreach ($filter['filter'] as $key => $value) {
                                                            if ($key == 'age') {
                                                                if ($attribute['id'] == $value) {
                                                                    $checked = 'checked';
                                                                    break; // Break the loop once a match is found
                                                                }
                                                            }
                                                        }
                                                    ?>
                                                    <li class="porto-item-flex">
                                                        <input class="form-check-input" type="radio" name="age"
                                                            value="<?= $attribute['id'] ?>" <?= $checked ?>>
                                                        <span class="ml-2"><?= $attribute['name'] ?></span>
                                                    </li>
                                                    <?php
                                                    }
                                                    ?>
                                                </div>
                                            </ul>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div id="accordion">
                            <div class="faq-item card">
                                <div class="faq-header-porto" id="headingFour">
                                    <button class="faq-button d-flex justify-content-between collapsed"
                                        data-toggle="collapse" data-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                        <h3 class="text-title-black">Specific Need</h3> <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                    data-parent="#accordion">
                                    <div>
                                        <form method="get">
                                            <ul style="list-style: none;" class="container">
                                                <div class="mt-2 ml-2">
                                                    <?php
                                                    foreach ($specific as $key => $attribute) {
                                                        $checked = '';
                                                        foreach ($filter['filter'] as $key => $value) {
                                                            if ($key == 'specific_need') {
                                                                if ($attribute['id'] == $value) {
                                                                    $checked = 'checked';
                                                                    break; // Break the loop once a match is found
                                                                }
                                                            }
                                                        }
                                                    ?>
                                                    <li class="porto-item-flex">
                                                        <input class="form-check-input" type="radio"
                                                            name="specific_need" value="<?= $attribute['id'] ?>"
                                                            <?= $checked ?>>
                                                        <span class="ml-2"><?= $attribute['name'] ?></span>
                                                    </li>
                                                    <?php
                                                    }
                                                    ?>
                                                </div>
                                            </ul>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Kolom Kanan (Responsive Cards) -->
                <div class="col-md-8">
                    <div class="product-content mb-5">
                        <div class="d-flex align-items-center bg-gray">
                            <img class="bread" src="<?php echo base_url(); ?>public/images/dog-food.png" width="100px">
                            <h2>Dog Food</h2>
                        </div>
                        <div class="card-deck pt-3">
                            <?php
                            $dog = array();

                            foreach ($portfolio as $portfolio_row) {
                                if ($portfolio_row['product_type_id'] == 1) {
                                    if (empty($dog)) {
                                        $dog = $CI->Model_portfolio->get_portfolio_data($portfolio_row['product_type_id']);
                                    }

                                    foreach ($dog as $row) {
                            ?>
                            <div style="margin-right: -1%;" class="col-lg-4 col-md-6 filtr-item"
                                data-category="<?php echo $row['category_id']; ?>" data-sort="Menu">
                                <div class="portfolio-group card" style="position: relative; width:230px;">
                                    <img src="<?= base_url() ?>public/uploads/<?= $row['photo'] ?>"
                                        class="img-fluid mt_40">
                                    <img class="bread" src="<?php echo base_url(); ?>public/images/label-porto.png"
                                        width="50"
                                        style="position: absolute; top: 0; right: 0; padding-top:5px; padding-right:5px;">
                                    <div class="mt-5 portfolio-text d-flex justify-content-between align-items-center">
                                        <div class="text-start">
                                            <h4 class="mb-0 font-weight-bold"><a
                                                    href="<?= base_url('product/detail_product/' . $row['id']) ?>"><?= $row['name'] ?></a>
                                            </h4>
                                            <span style="font-size: 14px">Product Untuk <?= $row['type'] ?></span>
                                        </div>
                                        <div>
                                            <a href="<?= base_url('product/detail_product/' . $row['id']) ?>">
                                                <button class="btn btn-primary">
                                                    <img src="<?php echo base_url(); ?>public/svg/arrow-right.svg"
                                                        width="60px" alt="Arrow">
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                                    }
                                    break;
                                }
                            }
                            ?>
                        </div>

                        <div class="d-flex align-items-center mt-5 bg-gray">
                            <img class="bread" src="<?php echo base_url(); ?>public/images/cat-food.png" width="100px">
                            <h2>Cat Food</h2>
                        </div>

                        <div class="card-deck pt-3">
                            <?php
                            $dog = array();

                            foreach ($portfolio as $portfolio_row) {
                                if ($portfolio_row['product_type_id'] == 2) {

                                    if (empty($dog)) {
                                        $dog = $CI->Model_portfolio->get_portfolio_data($portfolio_row['product_type_id']);
                                    }

                                    foreach ($dog as $row) {
                            ?>
                            <div style="margin-right: -1%;" class="col-lg-4 col-md-6 filtr-item"
                                data-category="<?php echo $row['category_id']; ?>" data-sort="Menu">
                                <div class="portfolio-group card" style="position: relative; width:230px;">
                                    <img src="<?= base_url() ?>public/uploads/<?= $row['photo'] ?>"
                                        class="img-fluid mt_40">
                                    <img class="bread" src="<?php echo base_url(); ?>public/images/label-porto.png"
                                        width="50"
                                        style="position: absolute; top: 0; right: 0; padding-top:5px; padding-right:5px;">
                                    <div class="mt-5 portfolio-text d-flex justify-content-between align-items-center">
                                        <div class="text-start">
                                            <h4 class="mb-0 font-weight-bold"><a
                                                    href="<?= base_url('product/detail_product/' . $row['id']) ?>"><?= $row['name'] ?></a>
                                            </h4>
                                            <span style="font-size: 14px">Product Untuk <?= $row['type'] ?></span>
                                        </div>
                                        <div>
                                            <a href="<?= base_url('product/detail_product/' . $row['id']) ?>">
                                                <button class="btn btn-primary">
                                                    <img src="<?php echo base_url(); ?>public/svg/arrow-right.svg"
                                                        width="60px" alt="Arrow">
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                                    }
                                    break;
                                }
                            }
                            ?>

                        </div>

                        <div class="d-flex align-items-center mt-5 bg-gray">
                            <img class="bread" src="<?php echo base_url(); ?>public/images/fegetarian-food.png"
                                width="100px">
                            <h2>Veterinary Food</h2>
                        </div>

                        <div class="card-deck pt-3">
                            <?php
                            $dog = array();

                            foreach ($portfolio as $portfolio_row) {
                                if ($portfolio_row['product_type_id'] == 3) {
                                    if (empty($dog)) {
                                        $dog = $CI->Model_portfolio->get_portfolio_data($portfolio_row['product_type_id']);
                                    }

                                    foreach ($dog as $row) {
                            ?>
                            <div style="margin-right: -1%;" class="col-lg-4 col-md-6 filtr-item"
                                data-category="<?php echo $row['category_id']; ?>" data-sort="Menu">
                                <div class="portfolio-group card" style="position: relative; width:230px;">
                                    <img src="<?= base_url() ?>public/uploads/<?= $row['photo'] ?>"
                                        class="img-fluid mt_40">
                                    <img class="bread" src="<?php echo base_url(); ?>public/images/label-porto.png"
                                        width="50"
                                        style="position: absolute; top: 0; right: 0; padding-top:5px; padding-right:5px;">
                                    <div class="mt-5 portfolio-text d-flex justify-content-between align-items-center">
                                        <div class="text-start">
                                            <h4 class="mb-0 font-weight-bold"><a
                                                    href="<?= base_url('product/detail_product/' . $row['id']) ?>"><?= $row['name'] ?></a>
                                            </h4>
                                            <span style="font-size: 14px">Product Untuk <?= $row['type'] ?></span>
                                        </div>
                                        <div>
                                            <a href="<?= base_url('product/detail_product/' . $row['id']) ?>">
                                                <button class="btn btn-primary">
                                                    <img src="<?php echo base_url(); ?>public/svg/arrow-right.svg"
                                                        width="60px" alt="Arrow">
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                                    }
                                    break;
                                }
                            }
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center py-5 w-100"
        style="background-image: url('<?php echo base_url(); ?>public/images/bg-porto.png'); background-size: cover; background-position: center;">
        <h2 class="text-dark font-weight-bold mb-5">3 KEY FACTORS OF HIGH QUALITY PET FOOD</h2>
        <div class=" container p-5 evenly-porto align-items-center text-center">
            <div class="list-item">
                <div>
                    <img src="<?php echo base_url(); ?>public/svg/recipes.svg">
                </div>
                <h4 class="label-porto-page mt-4">Recipe</h4>
            </div>
            <div class="list-item">
                <div>
                    <img src="<?php echo base_url(); ?>public/svg/ingredient.svg">
                </div>
                <h4 class="label-porto-page mt-4">Ingredients</h4>
            </div>
            <div class="list-item">
                <div>
                    <img src="<?php echo base_url(); ?>public/svg/processing.svg">
                </div>
                <h4 class="label-porto-page mt-4">Production technique</h4>
            </div>
        </div>
        <p class="text-center mt-3  font-weight-normal">NatureBridge recipe is designed to offera balanced diet that
            meet FEDIAF nutrition standard.</p>
        <p class="text-center  font-weight-normal"> Natural ingredients combined with minerals & vitamins.</p>
    </div>




</div>
</div>
<script>
var radioButtons = document.querySelectorAll('input[type="radio"]');
radioButtons.forEach(function(radioButton) {
    radioButton.addEventListener('click', function() {
        var form = radioButton.closest('form');
        form.submit();
    });
});
</script>