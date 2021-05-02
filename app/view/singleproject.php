<?php
// include 'inc/header.php'
?>

<div class="container">
    <div class="single-project-slider">
        <div class="owl-carousel single-slider">
            <?php foreach ($data['project'] as $key => $proc) {
            ?>
            <div><img style="width:1170px;height:500px;" class="img-responsive center-block"
                    src="<?= BASE_URL ?>public/uploads/project/<?= $proc['image_1_project'] ?>" alt="slider"></div>
            <div><img style="width:1170px;height:500px;" class="img-responsive center-block"
                    src="<?= BASE_URL ?>public/uploads/project/<?= $proc['image_2_project'] ?>" alt="slider"></div>
            <?php } ?>
        </div>
        <div class="single-controls">
            <span class="arrow-left"><a class="prev-slide" href="javascript:void(0)"><i
                        class="pe-7s-angle-left"></i></a></span>
            <span class="arrow-right"><a class="next-slide" href="javascript:void(0)"><i
                        class="pe-7s-angle-right"></i></a></span>
        </div>
    </div>
</div>
<div class="container">
    <div class="single-portfolio-wrapper">
        <?php foreach ($data['project'] as $key => $proc) {
        ?>
        <div class="row">

            <div class="col-md-8 col-sm-8">
                <h1><?= $proc['title_project'] ?></h1>
                <span class="info"><?= $proc['title_category'] ?></span>
                <p><?= $proc['desc_project'] ?></p>
            </div>
            <div class="col-md-3 col-md-offset-1 col-sm-4">
                <div class="project-information">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>Area:</td>
                                <td><?= $proc['area_project'] ?></td>
                            </tr>
                            <tr>
                                <td>Address:</td>
                                <td><?= $proc['address_project'] ?></td>
                            </tr>
                            <tr>
                                <td>investment costs:</td>
                                <td><?= $proc['price_project'] ?></td>
                            </tr>
                            <tr>
                                <td>Visit:</td>
                                <td><a href="http://www.envato.com" target="_blank">envato.com</a></td>
                            </tr>
                            <tr>
                                <td>Share:</td>
                                <td>
                                    <ul class="social-buttons">
                                        <li><a href="javasript:void(0);" data-social="fb"><i
                                                    class="iconmoon-facebook"></i></a></li>
                                        <li>
                                            <a href="javascript:void(0);" data-social="tw"> <i
                                                    class="iconmoon-twitter"></i></a>
                                        </li>
                                        <li><a href="javascript:void(0);" data-social="pt"><i
                                                    class="iconmoon-pinterest"></i></a></li>
                                        <li><a href="javascript:void(0);" data-social="ln"><i
                                                    class="iconmoon-linkedin"></i></a></li>
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
<div class="container">
    <div class="single-project-details">
        <?php foreach ($data['project'] as $key => $proc) {
        ?>
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="single-project-images">
                    <img src="<?= BASE_URL ?>public/uploads/project/<?= $proc['image_3_project'] ?>"
                        alt="Single Project">
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="single-project-images">
                    <img src="<?= BASE_URL ?>public/uploads/project/<?= $proc['image_4_project'] ?>"
                        alt="Single Project">
                </div>
            </div>
            <div class="col-md-12">
                <div class="single-project-images">
                    <img src="<?= BASE_URL ?>public/uploads/project/<?= $proc['image_5_project'] ?>"
                        alt="Single Project">
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
<div class="container">
    <div class="portfolio-controls">
        <div class="btn-project home-btn">
            <a href="#" data-hover="Home">
                <i class="pe-7s-keypad"></i>
            </a>
        </div>
        <div class="btn-project forward-btn">
            <a href="#" data-hover="Next">
                <i class="pe-7s-angle-right right"></i>
            </a>
        </div>
        <div class="btn-project back-btn">
            <a href="#" data-hover="Previous">
                <i class="pe-7s-angle-left left"></i>
            </a>
        </div>
    </div>
</div>
<div class="container margin-top">
    <div class="similar-project">
        <h4>Similar Projects</h4>
        <div class="row">
            <?php foreach ($data['category'] as $key => $cate) {

            ?>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="img">
                    <img src="<?= BASE_URL ?>public/uploads/project/<?= $cate['image_1_project'] ?>"
                        alt="<?= $cate['image_1_project'] ?>">
                    <div class="overlay-thumb">
                        <a href="javascript:void(0)" class="like-product">
                            <i class="ion-ios-heart-outline"></i>
                            <span class="like-product">Liked</span>
                            <span class="output">256</span>
                        </a>
                        <div class="details">
                            <span class="title"><?= $cate['title_project'] ?></span>
                            <span class="info"><?= $cate['title_category'] ?></span>
                        </div>
                        <span class="btnBefore"></span>
                        <span class="btnAfter"></span>
                        <a class="main-portfolio-link"
                            href="<?= BASE_URL ?>singleproject/detail/<?= $cate['id_project'] ?>"></a>
                    </div>
                </div>
            </div>
            <?php } ?>
            <!-- <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="img">
                    <img src="<?= BASE_URL ?>public/img/home-portfolio/img_7.jpg" alt="Portfolio Item">
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
                        <a class="main-portfolio-link" href="single-project.html"></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="img">
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
                        <a class="main-portfolio-link" href="single-project.html"></a>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</div>

<?php
// include 'inc/footer.php'
?>