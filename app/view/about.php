<?php
// include 'inc/header.php'
?>

<div class="container">
    <div class="header-page ef-parallax-bg"
        style="background-image:url(<?= BASE_URL ?>public/img/about-banner.jpg); background-size:cover;">
        <div class="col-md-6 col-md-offset-6">
            <div class="row">
                <div class="inner-content">
                    <div class="header-content">
                        <h1>About Us</h1>
                        <hr>
                        <p>Everything created in simple way</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container margin-top">
    <div class="main-title near-content">
        <h1>WE ARE OAK AGENCY</h1>
        <hr>
    </div>
    <div class="row">
        <div class="col-md-4">
            <p style="font-size: 18px; line-height: 26px;">Who loves or pursues or desires to <b>DESIGN</b> pain of
                itself,but because and occasionally circumstances occur pain can procure him some great easure of the
                past.</p>
        </div>
        <div class="col-md-4">
            <p>THE CREATIVE qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam
                eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima quis
                nostrum exercitationem ullam corporis suscipit aliquid.</p>
        </div>
        <div class="col-md-4">
            <p><strong>WEB DESIGN</strong> qui dolorem ipsum quia dolor sit amet, MINIMALISM adipisci velit, sed quia
                non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam</p>
        </div>
    </div>
</div>

<div class="container margin-top">
    <div class="row">
        <div class="col-md-12">
            <div class="our-story wow fadeInUp" style="background: url(img/our-story.jpg) no-repeat"
                data-wow-duration="0.5s" data-wow-delay="0.2s">
                <div class="col-md-6 col-md-offset-6">
                    <div class="our-story-content wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
                        <div class="our-story-content-inner">
                            <h1>OUR STORY</h1>
                            <hr>
                            <p>
                                Great explorer of the truth, the master-builder of human happiness. No one rejects,
                                dislikes, or avoids pleasure itself, because it is pleasure, but because those who do
                                not know how to pursue pleasure rationally
                                encounter consequences that are extremely painful. <br><br>
                                Nor again is there anyone who loves or pursues or desires to obtain pain of itself,
                                because it is pain, but because occasionally circumstances occur in which toil and pain
                                can procure him some great pleasure. To take a trivial example.
                            </p>
                        </div>
                    </div>
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
    <div class="col-md-4">
        <div class="row">
            <div class="services-home-page">
                <div class="col-md-12 wow fadeInUp" data-wow-duration="0.2s" data-wow-delay="0.2s">
                    <div class="row">
                        <div class="services-icon">
                            <span class="icon-tools"></span>
                            <hr>
                        </div>
                        <h4>BRANDING</h4>
                        <p>Expound the actual teachings of the great explorer of the truth, the master-builder of human
                            happiness. No one rejects, dislikes, or avoids pleasure itself, because.</p>
                    </div>
                </div>
                <div class="col-md-12 wow fadeInUp" data-wow-duration="0.4s" data-wow-delay="0.4s">
                    <div class="row">
                        <div class="services-icon">
                            <span class="icon-globe"></span>
                            <hr>
                        </div>
                        <h4>PLAN OF WORK</h4>
                        <p>The actual teachings of the great explorer of the truth, the master-builder of human
                            happiness. No one rejects, dislikes, or avoids pleasure itself, because.</p>
                    </div>
                </div>
                <div class="col-md-12 wow fadeInUp" data-wow-duration="0.6s" data-wow-delay="0.6s">
                    <div class="row">
                        <div class="services-icon">
                            <span class="icon-paintbrush"></span>
                            <hr>
                        </div>
                        <h4>ILUSTRATION</h4>
                        <p>Pound the actual teachings of the great explorer of the truth, the master-builder of human
                            happiness. No one rejects, dislikes, or avoids pleasure itself, because.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-7 col-md-offset-1">
        <div class="our-story-image wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
            <img src="<?= BASE_URL ?>public/img/about-banner2.jpg" alt="Our Story">
        </div>
    </div>
</div>

<div class="container margin-top">
    <div class="main-title">
        <h1>OUR AMAZING TEAM</h1>
        <hr>
        <h6>Except to obtain some advantage from it</h6>
    </div>
    <div class="owl-carousel team">
        <?php foreach ($data['admin'] as $key => $value) {
        ?>
        <div>
            <div class="img member">
                <img src="<?= BASE_URL ?>/public/uploads/project/<?= $value['image_admin'] ?>" alt="Team Member">
                <div class="overlay-thumb">
                    <div class="overlay-member-content">
                        <div class="overlay-member-content-inner">
                            <span class="position">WEB DEVELOPER</span>
                            <hr>
                            <ul class="member-social-media">
                                <li><a href="http://facebook.com/EliteFingers" target="_blank">Facebook</a></li>
                                <li><a href="http://twitter.com/EliteFingers" target="_blank">Twitter</a></li>
                                <li><a href="#" target="_blank">Dribbble</a></li>
                            </ul>
                        </div>
                    </div>
                    <span class="btnBefore"></span>
                    <span class="btnAfter"></span>
                </div>
            </div>
            <span class="member-name"><?= $value['username'] ?></span>
        </div>
        <?php } ?>
        <!-- <div>
            <div class="img member">
                <img src="img/team/member_2.jpg" alt="Team Member">
                <div class="overlay-thumb">
                    <div class="overlay-member-content">
                        <div class="overlay-member-content-inner">
                            <span class="position">WEB DEVELOPER</span>
                            <hr>
                            <ul class="member-social-media">
                                <li><a href="http://facebook.com/EliteFingers" target="_blank">Facebook</a></li>
                                <li><a href="http://twitter.com/EliteFingers" target="_blank">Twitter</a></li>
                                <li><a href="#" target="_blank">Dribbble</a></li>
                            </ul>
                        </div>
                    </div>
                    <span class="btnBefore"></span>
                    <span class="btnAfter"></span>
                </div>
            </div>
            <span class="member-name">JOHN DOE</span>
        </div>

        <div>
            <div class="img member">
                <img src="img/team/member_3.jpg" alt="Team Member">
                <div class="overlay-thumb">
                    <div class="overlay-member-content">
                        <div class="overlay-member-content-inner">
                            <span class="position">WEB DEVELOPER</span>
                            <hr>
                            <ul class="member-social-media">
                                <li><a href="http://facebook.com/EliteFingers" target="_blank">Facebook</a></li>
                                <li><a href="http://twitter.com/EliteFingers" target="_blank">Twitter</a></li>
                                <li><a href="#" target="_blank">Dribbble</a></li>
                            </ul>
                        </div>
                    </div>
                    <span class="btnBefore"></span>
                    <span class="btnAfter"></span>
                </div>
            </div>
            <span class="member-name">JOHN DOE</span>
        </div>

        <div>
            <div class="img member">
                <img src="img/team/member_1.jpg" alt="Team Member">
                <div class="overlay-thumb">
                    <div class="overlay-member-content">
                        <div class="overlay-member-content-inner">
                            <span class="position">WEB DEVELOPER</span>
                            <hr>
                            <ul class="member-social-media">
                                <li><a href="http://facebook.com/EliteFingers" target="_blank">Facebook</a></li>
                                <li><a href="http://twitter.com/EliteFingers" target="_blank">Twitter</a></li>
                                <li><a href="#" target="_blank">Dribbble</a></li>
                            </ul>
                        </div>
                    </div>
                    <span class="btnBefore"></span>
                    <span class="btnAfter"></span>
                </div>
            </div>
            <span class="member-name">JOHN DOE</span>
        </div> -->
    </div>
</div>

<!-- <div class="container margin-top">
    <div class="clients-wrapper">
        <ul class="client-thumb">
            <li><a href="#"><img src="img/clients/client_1.jpg" alt="Client 1"></a></li>
            <li><a href="#"><img src="img/clients/client_2.jpg" alt="Client 1"></a></li>
            <li><a href="#"><img src="img/clients/client_3.jpg" alt="Client 1"></a></li>
            <li><a href="#"><img src="img/clients/client_4.jpg" alt="Client 1"></a></li>
        </ul>
    </div>
</div>
 -->
<?php
// include 'inc/footer.php'
?>