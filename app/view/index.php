<?php
// include 'header.php'
?>

<div class="container">
    <div class="slider-wrapper">
        <div class="slider-description">
            <div class="slider-description-inner">
                <h1 style="color: chocolate;">Pure<span>Elegance</span></h1>
            </div>
            <div class="cd-intro">
                <div style="color: chocolate;" class="cd-headline clip">
                    <span class="cd-words-wrapper">
                        <b class="is-visible">AWESOME THEME</b>
                        <b>MODERN COMBINATION</b>
                        <b>CREATIVE SOLUTIONS</b>
                    </span>
                </div>
            </div>
        </div>
        <div id="slider-ef" class="slider-images-wrapper">
            <img class="img-responsive" src="<?= BASE_URL ?>public/img/slider/ador-slide.jpg" alt="">
            <img class="img-responsive" src="<?= BASE_URL ?>public/img/slider/ador-slide2.jpg" alt="">
            <img class="img-responsive" src="<?= BASE_URL ?>public/img/slider/ador-slide3.jpg" alt="">
        </div>
    </div>
</div>
<div class="container margin-top">
    <div class="history-wrapper">
        <div class="col-md-6 wow fadeInUp" data-wow-duration="0.6s" data-wow-delay="0.5s">
            <div class="row">
                <article>
                    <h1>YOUR TOP F&B SITE!</h1>
                    <hr>
                    <h4> <strong>OAK is where you keep up with the latest design trends through prominent cafes /
                            restaurants across the country. In addition to estimating the cost of architecture, you will
                            also find a huge library of F&B documents that have been tested in practice.</strong> </h4>
                    <p>
                        <br />Vietnam now not only has landscapes and culture, we are becoming more attractive
                        destination thanks to the spectacular transformation of the F&B sector. Not inferior to any
                        tourist country, Vietnam converges all the popular coffee / restaurant styles in the world. OAK
                        is a site that helps those who are interested in F&B will have the most concrete view. In
                        addition to cost estimates and F&B industry knowledge, ADOR also provides a list of outstanding
                        cafes / restaurants in every province that interests you.
                    </p>
                </article>
            </div>
        </div>
        <div class="col-md-5 col-md-offset-1 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
            <div class="row">
                <div id="history-images" class="owl-carousel">
                    <div><img class="img-responsive center-block" src="<?= BASE_URL ?>public/img/slide-about.jpg"
                            alt="About"></div>
                    <div><img class="img-responsive center-block" src="<?= BASE_URL ?>public/img/slide-about-cook.jpg"
                            alt="About"></div>
                    <div><img class="img-responsive center-block"
                            src="<?= BASE_URL ?>public/img/slide-about-Planning.jpg" alt="About3"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container margin-top">
    <div class="main-title">
        <h1>WHY CHOOSE US?</h1>
        <hr>
        <h6>Except to obtain some advantage from it</h6>
    </div>
    <div class="services-home-page">
        <div class="row">
            <div class="col-md-4">
                <div class="services-icon">
                    <span class="icon-tools"></span>
                    <hr>
                </div>
                <h4>BRANDING</h4>
                <p>Expound the actual teachings of the great explorer of the truth, the master-builder of human
                    happiness. No one rejects, dislikes, or avoids pleasure itself, because procure him.</p>
            </div>
            <div class="col-md-4">
                <div class="services-icon">
                    <span class="icon-globe"></span>
                    <hr>
                </div>
                <h4>PLAN OF WORK</h4>
                <p>Expound the actual teachings of the great explorer of the truth, the master-builder of human
                    happiness. No one rejects, dislikes, or avoids pleasure itself, because procure him.</p>
            </div>
            <div class="col-md-4">
                <div class="services-icon">
                    <span class="icon-paintbrush"></span>
                    <hr>
                </div>
                <h4>ILUSTRATION</h4>
                <p>Expound the actual teachings of the great explorer of the truth, the master-builder of human
                    happiness. No one rejects, dislikes, or avoids pleasure itself, because procure him.</p>
            </div>
        </div>
    </div>
</div>
<div class="container margin-top">
    <div class="main-title">
        <h1>OUR WORK</h1>
        <hr>
        <h6>Laborious to obtain some advantage from it</h6>
    </div>
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
            <?php foreach ($data['category'] as $key => $cate) { ?>
            <a href="javascript:void(0)" class="filter active"
                data-filter="<?= $cate['id_category'] ?>"><?= $cate['title_category'] ?></a>
            <?php } ?>
            <!-- <a href="javascript:void(0)" class="filter active" data-filter="mix">All</a>
            <a href="javascript:void(0)" class="filter" data-filter="branding">Branding</a>
            <a href="javascript:void(0)" class="filter" data-filter="web">Web Design</a>
            <a href="javascript:void(0)" class="filter" data-filter="graphic">Graphic Design</a> -->
        </div>
        <div class="js-masonry">
            <div class="row" id="work-grid">
                <!-- Begin of Thumbs Portfolio -->
                <?php foreach ($data['project'] as $key => $pro) {
                    # code...
                ?>
                <div class="col-md-4 col-sm-4 col-xs-12 mix <?= $pro['id_category'] ?> ">
                    <div class="img home-portfolio-image">
                        <img class="img-fluid"
                            src="<?= BASE_URL ?>public/uploads/project/<?= $pro['image_3_project'] ?>"
                            alt="Portfolio Item">
                        <div class="overlay-thumb">
                            <a href="javascript:void(0)" class="like-product">
                                <i class="ion-ios-heart-outline"></i>
                                <span class="like-product">Liked</span>
                                <span class="output">250</span>
                            </a>
                            <div class="details">
                                <span class="title"><?= $pro['title_project'] ?></span>
                                <span class="info"><?= $pro['title_category'] ?></span>
                            </div>
                            <span class="btnBefore"></span>
                            <span class="btnAfter"></span>
                            <a class="main-portfolio-link"
                                href="<?= BASE_URL ?>singleproject/detail/<?= $pro['id_project'] ?>"></a>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <!-- <div class="col-md-4 col-sm-4 col-xs-12 mix web">
                    <div class="img home-portfolio-image">
                        <img src="<?= BASE_URL ?>public/img/home-portfolio/LAPIN Chamber Bar3.jpg" alt="Portfolio Item">
                        <div class="overlay-thumb">
                            <a href="javascript:void(0)" class="like-product">
                                <i class="ion-ios-heart-outline"></i>
                                <span class="like-product">Liked</span>
                                <span class="output">60</span>
                            </a>
                            <div class="details">
                                <span class="title">WATCH-J</span>
                                <span class="info">NEW TREND FASHION</span>
                            </div>
                            <span class="btnBefore"></span>
                            <span class="btnAfter"></span>
                            <a class="main-portfolio-link" href="single-project.php"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 mix graphic">
                    <div class="img home-portfolio-image">
                        <img src="<?= BASE_URL ?>public/img/home-portfolio/img_3.jpg" alt="Portfolio Item">
                        <div class="overlay-thumb">
                            <a href="javascript:void(0)" class="like-product">
                                <i class="ion-ios-heart-outline"></i>
                                <span class="like-product">Liked</span>
                                <span class="output">1060</span>
                            </a>
                            <div class="details">
                                <span class="title">STYLE FASHION</span>
                                <span class="info">NEW BAG & STYLE FASHION</span>
                            </div>
                            <span class="btnBefore"></span>
                            <span class="btnAfter"></span>
                            <a class="main-portfolio-link" href="single-project.php"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 mix branding">
                    <div class="img home-portfolio-image">
                        <img src="<?= BASE_URL ?>public/img/home-portfolio/img_4.jpg" alt="Portfolio Item">
                        <div class="overlay-thumb">
                            <a href="javascript:void(0)" class="like-product">
                                <i class="ion-ios-heart-outline"></i>
                                <span class="like-product">Liked</span>
                                <span class="output">900</span>
                            </a>
                            <div class="details">
                                <span class="title">STYLE FASHION</span>
                                <span class="info">NEW BAG & STYLE FASHION</span>
                            </div>
                            <span class="btnBefore"></span>
                            <span class="btnAfter"></span>
                            <a class="main-portfolio-link" href="single-project.php"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 mix branding">
                    <div class="img home-portfolio-image">
                        <img src="<?= BASE_URL ?>public/img/home-portfolio/img_5.jpg" alt="Portfolio Item">
                        <div class="overlay-thumb">
                            <a href="javascript:void(0)" class="like-product">
                                <i class="ion-ios-heart-outline"></i>
                                <span class="like-product">Liked</span>
                                <span class="output">979</span>
                            </a>
                            <div class="details">
                                <span class="title">STYLE FASHION</span>
                                <span class="info">NEW BAG & STYLE FASHION</span>
                            </div>
                            <span class="btnBefore"></span>
                            <span class="btnAfter"></span>
                            <a class="main-portfolio-link" href="single-project.php"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 mix branding">
                    <div class="img home-portfolio-image">
                        <img src="<?= BASE_URL ?>public/img/home-portfolio/img_6.jpg" alt="Portfolio Item">
                        <div class="overlay-thumb">
                            <a href="javascript:void(0)" class="like-product">
                                <i class="ion-ios-heart-outline"></i>
                                <span class="like-product">Liked</span>
                                <span class="output">1024</span>
                            </a>
                            <div class="details">
                                <span class="title">STYLE FASHION</span>
                                <span class="info">NEW BAG & STYLE FASHION</span>
                            </div>
                            <span class="btnBefore"></span>
                            <span class="btnAfter"></span>
                            <a class="main-portfolio-link" href="single-project.php"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 mix branding">
                    <div class="img home-portfolio-image">
                        <img src="<?= BASE_URL ?>public/img/home-portfolio/img_7.jpg" alt="Portfolio Item">
                        <div class="overlay-thumb">
                            <a href="javascript:void(0)" class="like-product">
                                <i class="ion-ios-heart-outline"></i>
                                <span class="like-product">Liked</span>
                                <span class="output">2048</span>
                            </a>
                            <div class="details">
                                <span class="title">STYLE FASHION</span>
                                <span class="info">NEW BAG & STYLE FASHION</span>
                            </div>
                            <span class="btnBefore"></span>
                            <span class="btnAfter"></span>
                            <a class="main-portfolio-link" href="single-project.php"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 mix branding">
                    <div class="img home-portfolio-image">
                        <img src="<?= BASE_URL ?>public/img/home-portfolio/img_8.jpg" alt="Portfolio Item">
                        <div class="overlay-thumb">
                            <a href="javascript:void(0)" class="like-product">
                                <i class="ion-ios-heart-outline"></i>
                                <span class="like-product">Liked</span>
                                <span class="output">256</span>
                            </a>
                            <div class="details">
                                <span class="title">STYLE FASHION</span>
                                <span class="info">NEW BAG & STYLE FASHION</span>
                            </div>
                            <span class="btnBefore"></span>
                            <span class="btnAfter"></span>
                            <a class="main-portfolio-link" href="single-project.php"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 mix branding">
                    <div class="img home-portfolio-image">
                        <img src="<?= BASE_URL ?>public/img/home-portfolio/img_9.jpg" alt="Portfolio Item">
                        <div class="overlay-thumb">
                            <a href="javascript:void(0)" class="like-product">
                                <i class="ion-ios-heart-outline"></i>
                                <span class="like-product">Liked</span>
                                <span class="output">256</span>
                            </a>
                            <div class="details">
                                <span class="title">STYLE FASHION</span>
                                <span class="info">NEW BAG & STYLE FASHION</span>
                            </div>
                            <span class="btnBefore"></span>
                            <span class="btnAfter"></span>
                            <a class="main-portfolio-link" href="single-project.php"></a>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
        <!-- <div class="load-more">
            <a href="javascript:void(0)" id="load-more"><i class="icon-refresh"></i></a>
        </div> -->
    </div>
</div>
<div class="container margin-top">
    <div class="newsletter">
        <div class="col-md-6">
            <div class="row">
                <div class="newsletter-left">
                    <div class="newsletter-left-inner">
                        <h1>STAY INFORMED <br> WITH OUR <b>NEWSLETTER</b></h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="newsletter-right" style="background: url(img/newsletter-bg.jpg)">
                    <div class="newsletter-right-inner">
                        <form>
                            <input type="text" name="newsletter" placeholder="ENTER YOUR EMAIL">
                            <input type="submit" value="SUBSCRIBE">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
// include 'footer.php'
?>