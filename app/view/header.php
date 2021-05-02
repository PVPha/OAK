<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <title>OAK - HTML Theme</title>
    <meta name="description" content="">
    <meta name="msapplication-tap-highlight" content="yes" />
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1, minimum-scale=1.0, maximum-scale=1.0" />

    <!-- Google Web Font -->
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lekton:400,700,400italic' rel='stylesheet' type='text/css'>

    <!--  Bootstrap 3-->
    <link rel="stylesheet" href="<?= BASE_URL ?>public/css/bootstrap.min.css">

    <!-- OWL Carousel -->
    <link rel="stylesheet" href="<?= BASE_URL ?>public/css/owl.carousel.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>public/css/owl.theme.css">

    <!--  Slider -->
    <link rel="stylesheet" href="<?= BASE_URL ?>public/css/jquery.kenburnsy.css">

    <!-- Animate -->
    <link rel="stylesheet" href="<?= BASE_URL ?>public/css/animate.css">

    <!-- Web Icons Font -->
    <link rel="stylesheet" href="<?= BASE_URL ?>public/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>public/css/iconmoon.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>public/css/et-line.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>public/css/ionicons.css">

    <!-- Magnific PopUp -->
    <link rel="stylesheet" href="<?= BASE_URL ?>public/css/magnific-popup.css">

    <!-- Tabs -->
    <link rel="stylesheet" type="text/css" href="<?= BASE_URL ?>public/css/tabs.css" />
    <link rel="stylesheet" type="text/css" href="<?= BASE_URL ?>public/css/tabstyles.css" />

    <!-- Loader Style -->
    <link rel="stylesheet" href="<?= BASE_URL ?>public/css/loader-1.css">

    <!-- Costum Styles -->
    <link rel="stylesheet" href="<?= BASE_URL ?>public/css/main.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>public/css/responsive.css">

    <!-- Favicon -->
    <link rel="icon" type="image/ico" href="favicon.ico">

    <!-- Modernizer & Respond js -->
    <script src="<?= BASE_URL ?>public/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>

<div class="header">
    <div class="container">
        <div class="logo">
            <a href="index.php">
                <img src="<?= BASE_URL ?>public/img/logo.png" alt="Logo">
            </a>
        </div>

        <!-- Menu Hamburger (Default) -->
        <button class="main-menu-indicator" id="open-button">
            <span class="line"></span>
        </button>

        <div class="menu-wrap" style="background-image: url(<?= BASE_URL ?>public/img/nav_bg.jpg)">
            <div class="menu-content">
                <div class="navigation">
                    <span class="pe-7s-close close-menu" id="close-button"></span>
                    <div class="search-wrap js-ui-search">
                        <input class="js-ui-text" type="text" placeholder="Search Here...">
                        <span class="eks js-ui-close"></span>
                    </div>
                </div>
                <nav class="menu">
                    <div class="menu-list">
                        <ul>
                            <li class="menu-item-has-children"><a href="<?= BASE_URL ?>index/homepage">Home</a>
                                <!-- <ul class="sub-menu">
                                    <li><a href="index.php">- Default</a></li>
                                    <li><a href="index-architecture.php">- Architecture</a></li>
                                    <li><a href="index-full-slider.php">- Slider Full Width</a></li>
                                </ul> -->
                            </li>
                            <li><a href="<?= BASE_URL ?>index/about">About</a></li>
                            <!-- <li class="menu-item-has-children"><a href="#">Portfolio</a>
                                <ul class="sub-menu">
                                    <li><a href="portfolio-2column.php">-Portfolio 2 Column</a></li>
                                    <li><a href="portfolio-3column.php">-Portfolio 3 Column</a></li>
                                    <li><a href="portfolio-masonry.php">-Portfolio Masonry</a></li>
                                    <li><a href="portfolio-dribbble.php">-Portfolio Dribbble</a></li>
                                </ul>
                            </li> -->
                            <!-- <li class="menu-item-has-children"><a href="#">Blog</a>
                                <ul class="sub-menu">
                                    <li><a href="blog.php">Blog Default</a></li>
                                    <li><a href="blog-timeline.php">Blog Timeline</a></li>
                                    <li><a href="single-blog.php">Blog Single</a></li>
                                </ul>
                            </li> -->
                            <li><a href="<?= BASE_URL ?>index/contact">Contact</a></li>
                        </ul>
                    </div>
                </nav>

                <div class=" hidden-xs">
                    <div class="menu-social-media">
                        <ul>
                            <li><a href="#"><i class="iconmoon-facebook"></i></a></li>
                            <li><a href="#"><i class="iconmoon-twitter"></i></a></li>
                            <li><a href="#"><i class="iconmoon-dribbble3"></i></a></li>
                            <li><a href="#"><i class="iconmoon-pinterest"></i></a></li>
                            <li><a href="#"><i class="iconmoon-linkedin2"></i></a></li>
                        </ul>
                    </div>

                    <div class="menu-information">
                        <ul>
                            <li><span>T:</span> 003 124 115</li>
                            <li><span>E:</span> info@mail.com</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Menu Hamburger (Default) -->

    </div>
</div>