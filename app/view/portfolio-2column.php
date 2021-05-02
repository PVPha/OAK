<?php
include 'inc/header.php'
?>

<div class="container">
    <div class="header-page ef-parallax-bg" style="background-image:url(img/portfolio-header.jpg)">
        <div class="col-md-6 col-md-offset-6">
            <div class="row">
                <div class="inner-content">
                    <div class="header-content">
                        <h1>Portfolio</h1>
                        <hr>
                        <p>Everything created in simple way</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container margin-top">
    <div class="portfolio-wrapper">
        <button class="nav">
            <span class="icon-container">
                <span class="line line01"></span>
                <span class="line line02"></span>
                <span class="line line03"></span>
                <span class="line line04"></span>
            </span>
        </button>
        <div class="works-filter">
            <a href="javascript:void(0)" class="filter active" data-filter="mix">All</a>
            <a href="javascript:void(0)" class="filter" data-filter="branding">Branding</a>
            <a href="javascript:void(0)" class="filter" data-filter="web">Web Design</a>
            <a href="javascript:void(0)" class="filter" data-filter="graphic">Graphic Design</a>
        </div>
        <div class="js-masonry">
            <div class="row" id="work-grid">
                <!-- Begin of Thumbs Portfolio -->
                <div class="col-md-6 col-sm-6 col-xs-12 mix branding">
                    <div class="img home-portfolio-image">
                        <img src="img/portfolio-2column/img_1.jpg" alt="Portfolio Item">
                        <div class="overlay-thumb">
                            <a href="javascript:void(0)" class="like-product">
                                <i class="ion-ios-heart-outline"></i>
                                <span class="like-product">Liked</span>
                                <span class="output">250</span>
                            </a>
                            <div class="details">
                                <span class="title">STYLE FASHION</span>
                                <span class="info">NEW BAG & STYLE FASHION</span>
                            </div>
                            <span class="btnBefore"></span>
                            <span class="btnAfter"></span>
                            <a class="main-portfolio-link" href="single-project.html"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 mix web">
                    <div class="img home-portfolio-image">
                        <img src="img/portfolio-2column/img_2.jpg" alt="Portfolio Item">
                        <div class="overlay-thumb">
                            <a href="javascript:void(0)" class="like-product">
                                <i class="ion-ios-heart-outline"></i>
                                <span class="like-product">Liked</span>
                                <span class="output">250</span>
                            </a>
                            <div class="details">
                                <span class="title">STYLE FASHION</span>
                                <span class="info">NEW BAG & STYLE FASHION</span>
                            </div>
                            <span class="btnBefore"></span>
                            <span class="btnAfter"></span>
                            <a class="main-portfolio-link" href="single-project.html"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 mix branding">
                    <div class="img home-portfolio-image">
                        <img src="img/portfolio-2column/img_1.jpg" alt="Portfolio Item">
                        <div class="overlay-thumb">
                            <a href="javascript:void(0)" class="like-product">
                                <i class="ion-ios-heart-outline"></i>
                                <span class="like-product">Liked</span>
                                <span class="output">250</span>
                            </a>
                            <div class="details">
                                <span class="title">STYLE FASHION</span>
                                <span class="info">NEW BAG & STYLE FASHION</span>
                            </div>
                            <span class="btnBefore"></span>
                            <span class="btnAfter"></span>
                            <a class="main-portfolio-link" href="single-project.html"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 mix web">
                    <div class="img home-portfolio-image">
                        <img src="img/portfolio-2column/img_2.jpg" alt="Portfolio Item">
                        <div class="overlay-thumb">
                            <a href="javascript:void(0)" class="like-product">
                                <i class="ion-ios-heart-outline"></i>
                                <span class="like-product">Liked</span>
                                <span class="output">250</span>
                            </a>
                            <div class="details">
                                <span class="title">STYLE FASHION</span>
                                <span class="info">NEW BAG & STYLE FASHION</span>
                            </div>
                            <span class="btnBefore"></span>
                            <span class="btnAfter"></span>
                            <a class="main-portfolio-link" href="single-project.html"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="load-more">
            <a href="javascript:void(0)" id="load-more-2col"><i class="icon-refresh"></i></a>
        </div>
    </div>
</div>

<?php
include 'inc/footer.php'
?>