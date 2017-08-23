<?php
    /**
     * Template Name: Homepage Template
     */

    get_header();
?>
<div class="banner" style="background-image: url(<?php bloginfo('stylesheet_directory') ?>/img/homepage_banner.jpg);">
    <ul class="banner-controls">
        <li class="active"></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
</div>
<section class="home-intro no-padding">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2>Welcome to the Office of London Clinical Commissioning Groups</h2>
                <p class="intro-lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusamus aliquid amet asperiores cupiditate enim exercitationem illum in maiores nihil odit provident, quas quos recusandae rem reprehenderit rerum totam voluptates. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa delectus eligendi eum nostrum odit repellat saepe velit. Corporis dicta eius iure minus odit perferendis ratione sequi sint voluptate! Eos, laudantium?</p>

                <img class="skyline-img" src="<?php bloginfo('stylesheet_directory') ?>/img/skyline.png" alt="">
            </div>
        </div>
    </div>
</section>
<section class="light-grey-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h3>Find health services</h3>
            </div>
            <div class="col-md-4">
                <h3>View interactive map</h3>

            </div>
            <div class="col-md-4">
                <h3>Watch the video</h3>
            </div>
        </div>
        <div class="row content-row">
            <div class="col-md-4">
                <div class="find-service">
                    <img src="<?php bloginfo('stylesheet_directory') ?>/img/find-service.jpg" alt="">
                </div>
            </div>
            <div class="col-md-4">
                <div class="map-container">
                    <img src="<?php bloginfo('stylesheet_directory') ?>/img/interactive_map.png" alt="">
                </div>
            </div>
            <div class="col-md-4">
                <div class="video-container" style="background-image: url(<?php bloginfo('stylesheet_directory') ?>/img/video-screenshot.jpg);">
                    <i class="fa fa-play fa-5x" aria-hidden="true"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Latest news and events</h3>
            </div>
        </div>
        <div class="row content-row">
            <div class="col-md-4">
                <div class="news-item-col">
                    <img src="<?php bloginfo('stylesheet_directory') ?>/img/news-1.jpg" alt="">
                    <div class="news-item-col-info">
                        <h5><a href="#">Lorem ipsum dolor sit amet</a></h5>
                        <span class="blog-meta-info">Forename Surname - 2 weeks 22 hours ago</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, at atque blanditiis consequatur consequuntur.</p>
                        <button class="btn read-more">More</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="news-item-col">
                    <img src="<?php bloginfo('stylesheet_directory') ?>/img/news-2.jpg" alt="">
                    <div class="news-item-col-info">
                        <h5><a href="#">Lorem ipsum dolor sit amet</a></h5>
                        <span class="blog-meta-info">Forename Surname - 2 weeks 22 hours ago</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, at atque blanditiis consequatur consequuntur.</p>
                        <button class="btn read-more">More</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="twitter-timeline">
                    <a class="twitter-timeline" data-height="400" href="https://twitter.com/NHSEngland">Tweets by NHSEngland</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
    get_footer();
?>
