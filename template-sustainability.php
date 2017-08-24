<?php
/**
 * Template Name: Transforming Health Sustainability Template
 */

get_header();
?>
<div class="banner" style="background-image: url(<?php bloginfo('stylesheet_directory') ?>/img/commissioning-banner.jpg);">
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
                <h2 class="heading-large">Sustainability transformation plans</h2>

                <img class="skyline-img" src="<?php bloginfo('stylesheet_directory') ?>/img/skyline.png" alt="">
            </div>
        </div>
    </div>
</section>

<section class="body-with-sidebar">
    <div class="container">
        <div class="row">
            <div class="col-md-8 main-body">
                <h2>Page Title</h2>
                <strong>Page subtitle</strong>
                <p>
                    The principles for London devolution were set out in the London Health and Care Collaboration Agreement, signed in December 2016 by key stakeholders including Dr Marc Rowland on behalf of London CCGs. The agreement set a distinctive course for London, different in style from the Manchester model, with health and wellbeing at the centre, reflecting London’s geography and political shape.
                </p>

                <img src="<?php bloginfo('stylesheet_directory') ?>/img/interactive_map.png" alt="">

            </div>
            <div class="col-md-4 sidebar transforming-sidebar">
                <button class="btn sidebar-nav-button">Commissioning for local populations</button>
                <button class="btn sidebar-nav-button sidebar-active">Devolution</button>
                <button class="btn sidebar-nav-button has-sub-menu">Sustainability transformation plans</button>
                <div class="sidebar-sub-menu">
                    <button class="btn sidebar-nav-button sidebar-sub-btn">Transformation STP Plan 1</button>
                    <button class="btn sidebar-nav-button sidebar-sub-btn">Transformation STP Plan 2</button>
                    <button class="btn sidebar-nav-button sidebar-sub-btn">Transformation STP Plan 3</button>
                    <button class="btn sidebar-nav-button sidebar-sub-btn">Transformation STP Plan 4</button>
                    <button class="btn sidebar-nav-button sidebar-sub-btn">Transformation STP Plan 5</button>
                </div>

                <h4>Downloads</h4>
                <button class="btn sidebar-nav-button btn-download"><i class="fa fa-download" aria-hidden="true"></i> Health Devolution FAQs</button>
                <button class="btn sidebar-nav-button btn-download"><i class="fa fa-download" aria-hidden="true"></i> London Health and Care collaboration agreement</button>
                <button class="btn sidebar-nav-button btn-download"><i class="fa fa-download" aria-hidden="true"></i> NHS England Devolution FAQs</button>

                <hr>

                <div class="health-finder-widget">
                    <img src="<?php bloginfo('stylesheet_directory') ?>/img/find-service.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
