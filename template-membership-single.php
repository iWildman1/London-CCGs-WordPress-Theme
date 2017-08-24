<?php
/**
 * Template Name: Membership Single Template
 */

get_header();
?>
<div class="banner" style="background-image: url(<?php bloginfo('stylesheet_directory') ?>/img/membership-banner.jpg);">
    <ul class="banner-controls">
        <li class="active"></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
</div>
<section class="home-intro no-padding light-grey-bg">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="heading-large">Membership</h2>

                <img class="skyline-img" src="<?php bloginfo('stylesheet_directory') ?>/img/skyline.png" alt="">
            </div>
        </div>
    </div>
</section>

<section class="body-with-sidebar">
    <div class="container">
        <div class="row">
            <div class="col-md-8 main-body">
                <h2>Croydon</h2>

                <div class="member-info">
                    <div class="info-block">
                        <h4>Dr Anthony Brzezicki</h4>
                        <span>Chair</span>
                    </div>
                    <div class="info-block">
                        <h4>Mike Sexton</h4>
                        <span>Chief Finance Officer</span>
                    </div>
                    <div class="info-block">
                        <h4>Paula Swann</h4>
                        <span>Chief Officer</span>
                    </div>
                    <div class="info-block">
                        <span><strong>Twitter:</strong> @NHSCroydonCCG
                    </div>
                    <div class="info-block">
                        <span><strong>Website:</strong> www.croydonccg.nhs.uk
                    </div>

                </div>
                <div class="member-address">
                    <p>Bernard Weatherill House<br>2nd Floor<br>Zone G<br>8 Mint Walk<br>Croydon<br>CR0 1EA</p>
                </div>
                <img src="<?php bloginfo('stylesheet_directory') ?>/img/croydon-map.jpg" alt="">
            </div>
            <div class="col-md-4 sidebar transforming-sidebar">
                <button class="btn sidebar-nav-button has-sub-menu">Member CCGs</button>
                <button class="btn sidebar-nav-button sidebar-sub-btn sidebar-sub-btn-small">Barking & Dagenham</button>
                <button class="btn sidebar-nav-button sidebar-sub-btn sidebar-sub-btn-small">Barnet</button>
                <button class="btn sidebar-nav-button sidebar-sub-btn sidebar-sub-btn-small">Bexley</button>
                <button class="btn sidebar-nav-button sidebar-sub-btn sidebar-sub-btn-small">Brent</button>
                <button class="btn sidebar-nav-button sidebar-sub-btn sidebar-sub-btn-small">Bromley</button>
                <button class="btn sidebar-nav-button sidebar-sub-btn sidebar-sub-btn-small">Camden</button>
                <button class="btn sidebar-nav-button sidebar-sub-btn sidebar-sub-btn-small">Central London</button>
                <button class="btn sidebar-nav-button sidebar-sub-btn sidebar-sub-btn-small">City and Hackney</button>
                <button class="btn sidebar-nav-button sidebar-sub-btn sidebar-sub-btn-small sidebar-active">Croydon</button>
                <button class="btn sidebar-nav-button sidebar-sub-btn sidebar-sub-btn-small">Ealing</button>
                <button class="btn sidebar-nav-button sidebar-sub-btn sidebar-sub-btn-small">Enfield</button>
                <button class="btn sidebar-nav-button sidebar-sub-btn sidebar-sub-btn-small">Greenwich</button>
                <button class="btn sidebar-nav-button sidebar-sub-btn sidebar-sub-btn-small">Hammersmith and Fulham</button>
                <button class="btn sidebar-nav-button sidebar-sub-btn sidebar-sub-btn-small">Haringey</button>
                <button class="btn sidebar-nav-button sidebar-sub-btn sidebar-sub-btn-small">Harrow</button>
                <button class="btn sidebar-nav-button sidebar-sub-btn sidebar-sub-btn-small">Havering</button>
                <button class="btn sidebar-nav-button sidebar-sub-btn sidebar-sub-btn-small">Hillingdon</button>
                <button class="btn sidebar-nav-button sidebar-sub-btn sidebar-sub-btn-small">Hounslow</button>
                <button class="btn sidebar-nav-button sidebar-sub-btn sidebar-sub-btn-small">Islington</button>
                <button class="btn sidebar-nav-button sidebar-sub-btn sidebar-sub-btn-small">Kingston</button>
                <button class="btn sidebar-nav-button sidebar-sub-btn sidebar-sub-btn-small">Lambeth</button>
                <button class="btn sidebar-nav-button sidebar-sub-btn sidebar-sub-btn-small">Lewisham</button>
                <button class="btn sidebar-nav-button sidebar-sub-btn sidebar-sub-btn-small">Merton</button>
                <button class="btn sidebar-nav-button sidebar-sub-btn sidebar-sub-btn-small">Newham</button>
                <button class="btn sidebar-nav-button sidebar-sub-btn sidebar-sub-btn-small">Redbridge</button>
                <button class="btn sidebar-nav-button sidebar-sub-btn sidebar-sub-btn-small">Richmond</button>
                <button class="btn sidebar-nav-button sidebar-sub-btn sidebar-sub-btn-small">Southwark</button>
                <button class="btn sidebar-nav-button sidebar-sub-btn sidebar-sub-btn-small">Sutton Commissioning Group</button>
                <button class="btn sidebar-nav-button sidebar-sub-btn sidebar-sub-btn-small">Tower Hamlets</button>

                <hr>

                <div class="health-finder-widget">
                    <img src="<?php bloginfo('stylesheet_directory') ?>/img/find-service.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
