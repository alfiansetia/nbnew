<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<?php
$error_message = '';
$success_message = '';
?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

    <?php
    $CI = &get_instance();
    $CI->load->model('Model_common');
    $CI->load->model('Model_lang');
    $CI->load->model('admin/Model_menu');

    $class_name = '';
    $segment_2 = 0;
    $segment_3 = 0;
    $class_name = $this->router->fetch_class();
    $segment_2 = $this->uri->segment('2');
    $segment_3 = $this->uri->segment('3');

    if ($class_name == 'home') {
        echo '<meta name="description" content="' . $page_home['meta_description'] . '">';
        echo '<meta name="keywords" content="' . $page_home['meta_keyword'] . '">';
        echo '<title>' . $page_home['title'] . '</title>';
    }
    if ($class_name == 'about') {
        echo '<meta name="description" content="' . $page_about['md_about'] . '">';
        echo '<meta name="keywords" content="' . $page_about['mk_about'] . '">';
        echo '<title>' . $page_about['mt_about'] . '</title>';
    }
    if ($class_name == 'terms_and_conditions') {
        echo '<meta name="description" content="' . $page_term['md_term'] . '">';
        echo '<meta name="keywords" content="' . $page_term['mk_term'] . '">';
        echo '<title>' . $page_term['mt_term'] . '</title>';
    }
    if ($class_name == 'privacy_policy') {
        echo '<meta name="description" content="' . $page_privacy['md_privacy'] . '">';
        echo '<meta name="keywords" content="' . $page_privacy['mk_privacy'] . '">';
        echo '<title>' . $page_privacy['mt_privacy'] . '</title>';
    }
    if ($class_name == 'faq') {
        echo '<meta name="description" content="' . $page_faq['md_faq'] . '">';
        echo '<meta name="keywords" content="' . $page_faq['mk_faq'] . '">';
        echo '<title>' . $page_faq['mt_faq'] . '</title>';
    }
    if ($class_name == 'team') {
        echo '<meta name="description" content="' . $page_team['md_team'] . '">';
        echo '<meta name="keywords" content="' . $page_team['mk_team'] . '">';
        echo '<title>' . $page_team['mt_team'] . '</title>';
    }
    if ($class_name == 'team_member') {
        $single_team_member = $this->Model_team_member->team_member_detail($segment_2);
        echo '<meta name="description" content="' . $single_team_member['meta_description'] . '">';
        echo '<meta name="keywords" content="' . $single_team_member['meta_keyword'] . '">';
        echo '<title>' . $single_team_member['meta_title'] . '</title>';
    }
    if ($class_name == 'portfolio') {
        if ($segment_3 == 0) {
            echo '<meta name="description" content="' . $page_portfolio['md_portfolio'] . '">';
            echo '<meta name="keywords" content="' . $page_portfolio['mk_portfolio'] . '">';
            echo '<title>' . $page_portfolio['mt_portfolio'] . '</title>';
        } else {
            $single_portfolio = $this->Model_portfolio->portfolio_detail($segment_3);
            echo '<meta name="description" content="' . $single_portfolio['meta_description'] . '">';
            echo '<meta name="keywords" content="' . $single_portfolio['meta_keyword'] . '">';
            echo '<title>' . $single_portfolio['meta_title'] . '</title>';
        }
    }
    if ($class_name == 'testimonial') {
        echo '<meta name="description" content="' . $page_testimonial['md_testimonial'] . '">';
        echo '<meta name="keywords" content="' . $page_testimonial['mk_testimonial'] . '">';
        echo '<title>' . $page_testimonial['mt_testimonial'] . '</title>';
    }
    if ($class_name == 'contact') {
        echo '<meta name="description" content="' . $page_contact['md_contact'] . '">';
        echo '<meta name="keywords" content="' . $page_contact['mk_contact'] . '">';
        echo '<title>' . $page_contact['mt_contact'] . '</title>';
    }
    if ($class_name == 'search') {
        echo '<meta name="description" content="' . $page_search['md_search'] . '">';
        echo '<meta name="keywords" content="' . $page_search['mk_search'] . '">';
        echo '<title>' . $page_search['mt_search'] . '</title>';
    }
    if ($class_name == 'terms-and-conditions') {
        echo '<meta name="description" content="' . $page_term['md_term'] . '">';
        echo '<meta name="keywords" content="' . $page_term['mk_term'] . '">';
        echo '<title>' . $page_term['mt_term'] . '</title>';
    }
    if ($class_name == 'privacy-policy') {
        echo '<meta name="description" content="' . $page_privacy['md_privacy'] . '">';
        echo '<meta name="keywords" content="' . $page_privacy['mk_privacy'] . '">';
        echo '<title>' . $page_privacy['mt_privacy'] . '</title>';
    }
    if ($class_name == 'pricing') {
        echo '<meta name="description" content="' . $page_pricing['md_pricing'] . '">';
        echo '<meta name="keywords" content="' . $page_pricing['mk_pricing'] . '">';
        echo '<title>' . $page_pricing['mt_pricing'] . '</title>';
    }
    if ($class_name == 'photo_gallery') {
        echo '<meta name="description" content="' . $page_photo_gallery['md_photo_gallery'] . '">';
        echo '<meta name="keywords" content="' . $page_photo_gallery['mk_photo_gallery'] . '">';
        echo '<title>' . $page_photo_gallery['mt_photo_gallery'] . '</title>';
    }
    if ($class_name == 'service') {
        if ($segment_3 == 0) {
            echo '<meta name="description" content="' . $page_service['md_service'] . '">';
            echo '<meta name="keywords" content="' . $page_service['mk_service'] . '">';
            echo '<title>' . $page_service['mt_service'] . '</title>';
        } else {
            $single_service = $this->Model_service->service_detail($segment_3);
            echo '<meta name="description" content="' . $single_service['meta_description'] . '">';
            echo '<meta name="keywords" content="' . $single_service['meta_keyword'] . '">';
            echo '<title>' . $single_service['meta_title'] . '</title>';
        }
    }
    if ($class_name == 'category') {
        $single_category = $this->Model_category->category_by_id($segment_2);
        echo '<meta name="description" content="' . $single_category['meta_description'] . '">';
        echo '<meta name="keywords" content="' . $single_category['meta_keyword'] . '">';
        echo '<title>' . $single_category['meta_title'] . '</title>';
    }
    if ($class_name == 'news') {
        if ($segment_3 == 0) {
            echo '<meta name="description" content="' . $page_news['md_news'] . '">';
            echo '<meta name="keywords" content="' . $page_news['mk_news'] . '">';
            echo '<title>' . $page_news['mt_news'] . '</title>';
        } else {
            $news_single_item = $this->Model_news->news_detail($segment_3);
            echo '<meta name="description" content="' . $news_single_item['meta_description'] . '">';
            echo '<meta name="keywords" content="' . $news_single_item['meta_keyword'] . '">';
            echo '<title>' . $news_single_item['meta_title'] . '</title>';
            $og_id = $news_single_item['news_id'];
            $og_photo = $news_single_item['photo'];
            $og_title = $news_single_item['news_title'];
            $og_description = $news_single_item['news_content_short'];
            echo '<meta property="og:title" content="' . $og_title . '">';
            echo '<meta property="og:type" content="website">';
            echo '<meta property="og:url" content="' . base_url() . 'news/view/' . $og_id . '">';
            echo '<meta property="og:description" content="' . $og_description . '">';
            echo '<meta property="og:image" content="' . base_url() . 'public/uploads/' . $og_photo . '">';
        }
    }
    if ($class_name == 'event') {
        if ($segment_3 == 0) {
            echo '<meta name="description" content="' . $page_event['md_event'] . '">';
            echo '<meta name="keywords" content="' . $page_event['mk_event'] . '">';
            echo '<title>' . $page_event['mt_event'] . '</title>';
        } else {
            $event_single_item = $this->Model_event->event_detail($segment_3);
            echo '<meta name="description" content="' . $event_single_item['meta_description'] . '">';
            echo '<meta name="keywords" content="' . $event_single_item['meta_keyword'] . '">';
            echo '<title>' . $event_single_item['meta_title'] . '</title>';
            $og_id = $event_single_item['event_id'];
            $og_photo = $event_single_item['photo'];
            $og_title = $event_single_item['event_title'];
            $og_description = $event_single_item['event_content_short'];
            echo '<meta property="og:title" content="' . $og_title . '">';
            echo '<meta property="og:type" content="website">';
            echo '<meta property="og:url" content="' . base_url() . 'event/view/' . $og_id . '">';
            echo '<meta property="og:description" content="' . $og_description . '">';
            echo '<meta property="og:image" content="' . base_url() . 'public/uploads/' . $og_photo . '">';
        }
    }
    ?>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>public/uploads/<?php echo $setting['favicon']; ?>">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/animate.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/jquery-ui.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/meanmenu.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/toastr.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/spacing.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/responsive.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/custom.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/img-comparison-slider@8/dist/styles.css" />

    <?php if ($_SESSION['sess_layout_direction'] == 'Right') : ?>
        <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/rtl.css">
    <?php endif; ?>

    <!--Js-->
    <script defer src="https://cdn.jsdelivr.net/npm/img-comparison-slider@8/dist/index.js"></script>
    <script src="<?php echo base_url(); ?>public/js/jquery-2.2.4.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/jquery-ui.min.js"></script>
    <!-- <script src="<?php echo base_url(); ?>public/js/popper.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/jquery.meanmenu.js"></script>
    <script src="<?php echo base_url(); ?>public/js/jquery.filterizr.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/jquery.counterup.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/waypoints.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/viewportchecker.js"></script>
    <script src="<?php echo base_url(); ?>public/js/toastr.min.js"></script>

    <style>
        .header-area,
        ul.nav-menu li ul li a,
        .searchbar .input-search,
        .text-animated li a,


        .about-tab:before,
        .progress-gallery .bar-container .progress .progress-bar-custom,
        .choose-item:before,
        .feature-icon i,
        .feature-item:hover .feature-text,
        .bg-counterup,
        .portfolio-bg,
        .booking-area:before,
        .bg-booking,
        .team-carousel .owl-nav .owl-prev,
        .team-carousel .owl-nav .owl-next,
        .team-text,
        .team-social li a:hover,
        .price-header i,
        .button-df a,
        .bg-testimonial,
        .blog-carousel .owl-nav .owl-prev,
        .blog-carousel .owl-nav .owl-next,
        .blog-author li.blog-button a,
        .call-us:before,
        .footer-item h3:before,
        .footer-item h3:after,
        .footer-item ul.footer-social li a,

        .headstyle h4:before,
        .headstyle h4:after,
        .team-detail-text ul li a,
        .sidebar-item h3:before,
        .sidebar-item h3:after,
        .event-contact-item,
        .gallery-bg,
        .testimonial-grid .testimonial-description p:before,
        .testimonial-two-carousel .testimonial-description p:before,
        .form-button .btn,
        .project-carousel .owl-nav .owl-prev,
        .project-carousel .owl-nav .owl-next,
        .sidebar-item button,
        .contact-item:hover .contact-icon,

        span.input-group-btn {
            background: #<?php echo $setting['front_end_color']; ?> !important;
        }

        .breadcrumb li:last-child::before {
            content: none;
        }

        .breadcrumb li:not(:last-child)::after {
            content: url('<?= base_url() ?>public/images/ellipse.png');
            margin: 0 0.5em;
        }

        .breadcrumb li:not(:last-child)::before {
            content: none;
        }

        .testimonial-item img-comparison-slider {
            pointer-events: none;
            /* Disable pointer events initially */
        }

        .testimonial-item:hover img-comparison-slider {
            pointer-events: auto;
            /* Enable pointer events on hover */
        }

        .bg {
            position: absolute;
            background-color: #002fff6e;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            opacity: 0.75;
        }

        .scroll-top {
            background-color: orangered;
        }

        .portfolio-menu li.filtr-active {
            color: white !important;
        }

        .faq-body ul {
            list-style: square;
            margin: 0;
            margin-top: 20px;
            padding: 0;
        }

        li.filtr {
            background-color: white !important;
            color: orangered;
        }

        ul.nav-menu li:hover>a,
        .searchbar .search-button:hover,
        .text-animated li a:hover,
        .text-animated li:last-child a:hover,

        .feature-item:hover .feature-icon i,
        .services-text a:hover,

        .portfolio-menu li:hover,
        .portfolio-text h3 a:hover,
        .form-button .btn2:hover,
        .blog-item h3 a:hover,
        .blog-item span i,
        .blog-author li a i,
        .blog-author li a:hover,
        .call-us .button a:hover,
        .footer-item ul li a:hover,
        .team-info ul li span,
        li.event-header-left i,
        .recent-text a:hover,
        .event-contact-item:hover .event-contact-icon,
        .service-sidebar-item ul li a:hover,
        .portfolio-details ul li span,
        .sidebar-item ul li a:hover,
        .blog-one-text h3 a:hover,
        .blog-one-text ul li i,
        .single-blog ul li i,
        .contact-icon {
            color: orangered !important;
        }

        .text-animated li a,


        .feature-icon i,
        .feature-item:hover .feature-text,
        .footer-item ul.footer-social li a,
        .event-contact-item:hover .event-contact-icon,
        .form-control:focus,
        .sidebar-item button,
        .contact-item:hover .contact-icon,
        {
        border-color: #<?php echo $setting['front_end_color']; ?> !important;
        }

        .video-button span {
            border-left-color: #<?php echo $setting['front_end_color']; ?> !important;
        }

        .portfolio-menu li.filtr-active {
            border-bottom-color: orangered !important;
            background-color: orangered !important;
        }

        .team-social li a:hover {
            border-bottom-color: #<?php echo $setting['front_end_color']; ?> !important;
        }

        .portfolio-menu li.filtr-active:before {
            border-top-color: orangered !important;
        }

        .team-social li a:hover {
            border-top-color: #<?php echo $setting['front_end_color']; ?> !important;
        }

        ul.nav-menu li ul li:hover>a {
            background: #f1f1f1 !important;
        }

        .text-animated li a:hover,
        .text-animated li:last-child a:hover,
        hover,
        hover {
            background: #fff !important;
            border-color: #fff !important;
        }

        .text-animated li:last-child a {
            background: #313131 !important;
            border-color: #313131 !important;
        }

        .blog-author li.blog-button a,
        .blog-author li.blog-button i,
        .footer-item ul.footer-social li a:hover,
        .contact-item:hover .contact-icon {
            color: #fff !important;
        }

        .feature-item:hover .feature-icon i,
        {
        background: #fff !important;
        }

        .team-carousel .owl-nav .owl-prev:hover,
        .team-carousel .owl-nav .owl-next:hover,
        .blog-carousel .owl-nav .owl-prev:hover,
        .blog-carousel .owl-nav .owl-next:hover,
        .button-df a:hover,
        .testimonial-carousel .owl-dots .owl-dot.active,
        .blog-author li.blog-button a:hover,
        .footer-item ul.footer-social li a:hover,
        .team-detail-text ul li a:hover,
        .form-button .btn:hover,
        .project-carousel .owl-nav .owl-prev:hover,
        .project-carousel .owl-nav .owl-next:hover:hover {
            background: #313131 !important;
        }

        .footer-item ul.footer-social li a:hover {
            border-color: #313131 !important;
        }

        .event-contact-item:hover,
        .faq-body,
        .feature-item:hover .feature-icon i,
        {
        background: #f5f5f5 !important;
        }

        .booking-form input:focus,
        .booking-form textarea:focus {
            border-color: #fff !important;
        }

        .booking-form button[type="submit"] {
            background: #313131 !important;
            color: #fff !important;
        }

        .booking-form button[type="submit"]:hover {
            background: #fff !important;
            color: #313131 !important;
        }

        #product-container {
            width: 100%;
            max-width: 600px;
            background-color: #B9B9B9 !important;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        #product-image {
            width: 100%;
            height: 500px;
            border-radius: 20px;
            object-fit: cover;
        }

        #thumbnail-container {
            display: flex;
            justify-content: center;
            margin-top: 10px;
        }

        .thumbnail {
            width: 100px;
            height: 100px;
            margin: 0 5px;
            cursor: pointer;
            border-radius: 4px;
            overflow: hidden;
            border: 2px solid #F3F3F3;
        }

        .thumbnail img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            padding: 5px 5px;
        }

        .owl-carousel .nav-btn {
            height: 47px;
            position: absolute;
            width: 26px;
            cursor: pointer;
            top: 100px !important;
        }

        .owl-carousel .owl-prev.disabled,
        .owl-carousel .owl-next.disabled {
            pointer-events: none;
            opacity: 0.2;
        }

        .owl-carousel .prev-slide {
            background: url(nav-icon.png) no-repeat scroll 0 0;
            left: -33px;
        }

        .owl-carousel .next-slide {
            background: url(nav-icon.png) no-repeat scroll -24px 0px;
            right: -33px;
        }

        .owl-carousel .prev-slide:hover {
            background-position: 0px -53px;
        }

        .owl-carousel .next-slide:hover {
            background-position: -24px -53px;
        }

        #strickymenu {
            height: 100px;
        }

        .before,
        .after {
            margin: 0;
        }

        .before figcaption,
        .after figcaption {
            background: #000;
            color: white;
            padding: 12px;
            position: absolute;
            top: 55%;
            transform: translateY(-50%);
            line-height: 100%;
            width: 72px;
            align-items: center;
        }

        .before figcaption {
            left: 0;
        }

        .after figcaption {
            right: 0;
        }

        .faq-header button.faq-button {
            background-color: transparent;
        }

        .button-addon {
            margin-left: -85px;
        }

        .icon-commerce {
            width: 180px !important;
            height: 180px !important;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 16px;
            background-color: #F8F8F8;
        }

        .icon-about {
            font-size: 50px !important;
        }
    </style>

</head>

<body>

    <?php echo $comment['code_body']; ?>

    <?php if ($setting['preloader_status'] == 'On') : ?>
        <!--Preloader Start-->
        <div id="preloader">
            <div id="status" style="background-image: url(<?php echo base_url(); ?>public/images/preloader.gif)"></div>
        </div>
        <!--Preloader End-->
    <?php endif; ?>

    <!--Header-Area Start-->
    <div class="header-area">

    </div>
    <!--Header-Area End-->


    <!--Menu Start-->
    <div id="strickymenu" class="menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-12">
                    <div class="logo flex">
                        <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>public/images/Logo.png ?>" alt="Logo"></a>
                    </div>
                </div>
                <div class="col-lg-9 col-12 main-menu">
                    <div class="d-flex justify-content-between">
                        <div class="main-menu-item">
                            <ul class="nav-menu">
                                <?php
                                $all_dynamic_pages = array();
                                $all_dynamic_pages = $CI->Model_common->all_dynamic_pages();
                                if (count($all_dynamic_pages) >= 1) {
                                    $d_page = 1;
                                } else {
                                    $d_page = 0;
                                }

                                $arr_menu = array();
                                $all_menu = $CI->Model_menu->show();
                                foreach ($all_menu as $row) {
                                    $arr_menu[$row['menu_id']] = $row['menu_status'];
                                }
                                ?>

                                <?php if ($arr_menu[3] == 'Show') : ?>
                                    <li><a href="<?php echo base_url(); ?>">Home</a></li>
                                <?php endif; ?>
                                <?php if ($arr_menu[3] == 'Show') : ?>
                                    <li><a href="<?php echo base_url(); ?>about">About Us</a></li>
                                <?php endif; ?>
                                <?php if ($arr_menu[3] == 'Show') : ?>
                                    <li><a href="<?php echo base_url(); ?>product">Product</a></li>
                                <?php endif; ?>
                                <?php if ($arr_menu[3] == 'Show') : ?>
                                    <li><a href="<?php echo base_url(); ?>testimonial">Testimony</a></li>
                                <?php endif; ?>

                                <?php if ($arr_menu[3] == 'Show') : ?>
                                    <li><a href="<?php echo base_url(); ?>howto">How To Buy</a></li>
                                <?php endif; ?>
                                <?php if ($arr_menu[3] == 'Show') : ?>
                                    <li><a href="<?php echo base_url(); ?>blog">Pet Tips</a></li>
                                <?php endif; ?>
                                <?php if ($arr_menu[3] == 'Show') : ?>
                                    <li><a href="<?php echo base_url(); ?>contact">Contact Us</a></li>
                                <?php endif; ?>


                                <!-- <?php if ($arr_menu[1] == 'Show') : ?>
                                <li><a href="<?php echo base_url(); ?>">Home</a></li>
                            <?php endif; ?>

                            <?php if ($arr_menu[2] == 'Show') : ?>
                                <li><a href="<?php echo base_url(); ?>about"><?php echo ABOUT; ?></a></li>
                            <?php endif; ?>

                            <?php if ($arr_menu[3] == 'Show') : ?>
                                <li><a href="<?php echo base_url(); ?>team"><?php echo TEAM; ?></a></li>
                            <?php endif; ?>

                            <?php if (($arr_menu[4] == 'Show') || ($arr_menu[5] == 'Show') || ($arr_menu[6] == 'Show') || ($arr_menu[7] == 'Show') || ($arr_menu[8] == 'Show') || ($d_page == 1)) : ?>
                                <li class="menu-item-has-children"><a href="javascript:void;" class="chl"><?php echo PAGE; ?></a>
                                    <ul>
                                        <?php if ($arr_menu[4] == 'Show') : ?>
                                            <li><a href="<?php echo base_url(); ?>event"><?php echo EVENT; ?></a></li>
                                        <?php endif; ?>

                                        <?php if ($arr_menu[5] == 'Show') : ?>
                                            <li><a href="<?php echo base_url(); ?>photo-gallery"><?php echo PHOTO_GALLERY; ?></a></li>
                                        <?php endif; ?>

                                        <?php if ($arr_menu[6] == 'Show') : ?>
                                            <li><a href="<?php echo base_url(); ?>testimonial"><?php echo TESTIMONIAL; ?></a></li>
                                        <?php endif; ?>

                                        <?php if ($arr_menu[7] == 'Show') : ?>
                                            <li><a href="<?php echo base_url(); ?>faq"><?php echo FAQ; ?></a></li>
                                        <?php endif; ?>

                                        <?php if ($arr_menu[8] == 'Show') : ?>
                                            <li><a href="<?php echo base_url(); ?>pricing"><?php echo PRICING_TABLE; ?></a></li>
                                        <?php endif; ?>

                                        <?php if ($d_page == 1) : ?>
                                            <?php
                                            foreach ($all_dynamic_pages as $rrr) {
                                            ?>
                                                <li><a href="<?php echo base_url(); ?>page/<?php echo $rrr['slug']; ?>"><?php echo $rrr['name']; ?></a></li>
                                            <?php
                                            }
                                            ?>
                                        <?php endif; ?>
                                    </ul>
                                </li>
                            <?php endif; ?>

                            <?php if ($arr_menu[9] == 'Show') : ?>
                                <li><a href="<?php echo base_url(); ?>service   "><?php echo SERVICE; ?></a></li>
                            <?php endif; ?>

                            <?php if ($arr_menu[10] == 'Show') : ?>
                                <li><a href="<?php echo base_url(); ?>portfolio"><?php echo PORTFOLIO; ?></a></li>
                            <?php endif; ?>

                            <?php if ($arr_menu[11] == 'Show') : ?>
                                <li><a href="<?php echo base_url(); ?>news"><?php echo NEWS; ?></a></li>
                            <?php endif; ?>

                            <?php if ($arr_menu[12] == 'Show') : ?>
                                <li><a href="<?php echo base_url(); ?>contact"><?php echo CONTACT; ?></a></li>
                            <?php endif; ?> -->

                            </ul>
                        </div>

                        <div class="d-flex mr-1">
                            <div class="searchbar">
                                <div class="search-button"><b><i class="fa fa-search"></i></b></div>
                                <?php echo form_open(base_url() . 'search'); ?>
                                <div class="input-group input-search">
                                    <input type="text" class="form-control" placeholder="<?php echo SEARCH_FOR; ?>" name="search_string">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="submit" name="form1"><i class="fa fa-search"></i></button>
                                    </span>
                                </div>
                                <?php echo form_close(); ?>
                            </div>
                        </div>

                        <!-- <div class="d-flex">
                            <div class="dropdown" style="top: 50%;position: absolute;text-align: left;margin-top: -17px;margin-right: 30%;">
                                <?php echo form_open(base_url() . 'lang/change'); ?>
                                <select name="lang_change_id" class="form-control" onchange="this.form.submit()">
                                    <?php
                                    $all_language = $CI->Model_lang->show_all_language();
                                    foreach ($all_language as $row) {
                                    ?>
                                        <option value="<?php echo $row['lang_id']; ?>" <?php if ($row['lang_id'] == $_SESSION['sess_lang_id']) {
                                                                                            echo 'selected';
                                                                                        } ?>><?php echo $row['lang_short_name']; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                                <?php echo form_close(); ?>
                            </div>
                        </div> -->

                        <?php echo form_open(base_url() . 'lang/change'); ?>
                        <select name="lang_change_id" class="form-control mt_30" onchange="this.form.submit()">
                            <?php
                            $all_language = $CI->Model_lang->show_all_language();
                            foreach ($all_language as $row) {
                            ?>
                                <option value="<?php echo $row['lang_id']; ?>" <?php if ($row['lang_id'] == $_SESSION['sess_lang_id']) {
                                                                                    echo 'selected';
                                                                                } ?>><?php echo $row['lang_short_name']; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Menu End-->