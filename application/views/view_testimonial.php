<!--Banner Start-->
<div class="banner-slider-testimonial">
    <div class="bannder-table">
        <div class="banner-text">
            <h1> WHAT OUR CUSTOMER SAYS</h1>
        </div>
    </div>
</div>
<!--Banner End-->

<!--Testimonial-Two Start-->
<div class="testimonial-area-testi mb-5 mt-5">
    <div class="container">
        <div class="float-right">
            <a class="nav-link dropdown-toggle c-red" href="#" id="sortDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                Sort by: Most recent
            </a>
            <ul class="dropdown-menu" aria-labelledby="sortDropdown">
                <li><a class="dropdown-item" href="#">Most recent</a></li>
                <li><a class="dropdown-item" href="#">Most popular</a></li>
            </ul>
        </div><br>
        <hr class="mb-5">
        <div class="row">
            <?php foreach ($testimonials as $value) {
            ?>
                <div class="col-12 mt-4">
                    <div class="d-flex">
                        <div class="testimonial-item-testi">
                            <img-comparison-slider hover="hover">
                                <figure slot="first" class="before">
                                    <img slot="first" width="100%" src="<?php echo base_url(); ?>public/images/testimonial-1.png">
                                    <figcaption>Before</figcaption>
                                </figure>
                                <figure slot="second" class="after">
                                    <img slot="second" width="100%" src="<?php echo base_url(); ?>public/images/testimonial-1.png">
                                    <figcaption>After</figcaption>
                                </figure>
                            </img-comparison-slider>
                        </div>
                        <div class="card-body ml-5">
                            <img src="<?php echo base_url(); ?>public/svg/testi-icon.svg" style="width: 80px" alt="Arrow">
                            <h4 style="font-weight: 700"><?= $value['designation'] ?></h4>
                            <p><?= $value['comment'] ?></p>
                            <span style="font-weight:bold"><?= $value['name'] ?></span>
                            <div class="d-flex">
                                <img src="<?php echo base_url(); ?>public/svg/star.svg" style="width: 20px" alt="Arrow">
                                <img src="<?php echo base_url(); ?>public/svg/star.svg" style="width: 20px" alt="Arrow">
                                <img src="<?php echo base_url(); ?>public/svg/star.svg" style="width: 20px" alt="Arrow">
                                <img src="<?php echo base_url(); ?>public/svg/star.svg" style="width: 20px" alt="Arrow">
                            </div>
                        </div>

                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<!--Testimonial-Two End-->