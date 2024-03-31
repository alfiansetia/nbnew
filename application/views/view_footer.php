    <?php
    $CI = &get_instance();
    $CI->load->model('Model_common');
    $footer_setting = $CI->Model_common->all_footer_setting();
    $footer_setting_lang_independent = $CI->Model_common->all_footer_setting_lang_independent();
    $all_setting = $CI->Model_common->all_setting();
    ?>

    <style>
        .whatsapp-button {
            position: fixed;
            bottom: 50px;
            right: 20px;
            z-index: 1000;
            z-index: 9991;
        }

        .whatsapp-button img {
            width: 60px;
            height: auto;
            border-radius: 50%;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.2);
        }
    </style>

    <!-- footer -->
    <div class="footer-area pt_60 pb_90">
        <div class="container">
            <div class="row">

                <div class="col-lg-5 col-md-6">
                    <div class="footer-item" id="newsletter">
                        <p>
                            <img src="<?php echo base_url(); ?>public/images/Logo.png ?>" alt="Logo">
                        </p>
                        Stay in touch and keep up to date with the latest news.
                        <?php echo form_close(); ?>
                    </div>
                    <div class="d-flex mt-3 ">
                        <img src="<?php echo base_url(); ?>public/svg/linkedin.svg" alt="linkedin" />
                        <img class="ml-3" src="<?php echo base_url(); ?>public/svg/x.svg" alt="x" />
                        <img class="ml-3" src="<?php echo base_url(); ?>public/svg/fb.svg" alt="facebook" />
                        <img class="ml-3" src="<?php echo base_url(); ?>public/svg/ig.svg" alt="instagram" />
                        <img class="ml-3" src="<?php echo base_url(); ?>public/svg/tiktok.svg" alt="tiktok" />
                    </div>

                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-item">
                        <h3>Useful links</h3>

                        <ul>
                            <li>About Us</li>
                            <li>FAQ</li>
                            <li>Testimony</li>
                            <li>Pet Tips</li>
                            <li>Contact Us</li>
                            <li>Terms & Conditions</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="footer-item">
                        <h3>Get updates and stay connected</h3>
                        <div class="d-flex align-items-center">
                            <div class="form-group">
                                <input type="text" placeholder="enter your email address" class="form-control">
                            </div>
                            <div>
                                <button class="btn btn-brawn ml-2">Sign Up</button>
                            </div>
                        </div>
                        <div class="d-flex" x>
                            <img src="<?php echo base_url(); ?>public/svg/footer-1.svg ?>" alt="footer-1">
                            <img src="<?php echo base_url(); ?>public/svg/footer-2.svg ?>" alt="footer-1">

                        </div>

                    </div>
                </div>
            </div>
            <hr />
            <div class='d-flex  justify-content-between mt-5'>
                <p>
                    Privacy policy
                </p>
                <p>
                    ©️ Nature BridgeTM 2024
                </p>
            </div>
        </div>
    </div>

    <!--Footer-Area End-->

    <!--Scroll-Top-->
    <div id="whatsapp-button" class="whatsapp-button">
        <a href="" target="_blank">
            <img src="<?php echo base_url(); ?>public/images/wa.png" alt="Whatapp">
        </a>
    </div>
    <!--Scroll-Top-->




    <script src="<?php echo base_url(); ?>public/js/custom.js"></script>

    <?php if ($_SESSION['sess_layout_direction'] == 'Left') : ?>
        <script src="<?php echo base_url(); ?>public/js/ltr.js"></script>
    <?php endif; ?>

    <?php if ($_SESSION['sess_layout_direction'] == 'Right') : ?>
        <script src="<?php echo base_url(); ?>public/js/rtl.js"></script>
    <?php endif; ?>

    <script>
        toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": true,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "3000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
    </script>
    <script>
        $(document).ready(function() {
            $(".faq-button").on("click", function() {
                var isOpen = $(this).hasClass("collapsed");
                var iconClass = isOpen ? "fa fa-minus" : "fa fa-plus";
                $(this).find("i").removeClass().addClass(iconClass);
            });
        });
    </script>
    <?php
    if ($this->session->flashdata('success')) :
        echo '
            <script>
            toastr.success(\'' . $this->session->flashdata('success') . '\');
            </script>
            ';
    endif;
    if ($this->session->flashdata('error')) :
        echo '
            <script>
            toastr.error(\'' . $this->session->flashdata('error') . '\');
            </script>
            ';
    endif;
    ?>


    </body>

    </html>