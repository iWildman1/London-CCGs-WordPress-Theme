<?php
/**
 * Template Name: About Us HLP Template
 */

get_header();
?>
<div class="banner" style="background-image: url(<?php bloginfo('stylesheet_directory') ?>/img/about-banner.jpg);">
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
                <h2 class="heading-large">About us</h2>

                <img class="skyline-img" src="<?php bloginfo('stylesheet_directory') ?>/img/skyline.png" alt="">
            </div>
        </div>
    </div>
</section>

<section class="body-with-sidebar">
    <div class="container">
        <div class="row">
            <div class="col-md-8 main-body">
                <h2>Healthy London Partnership</h2>
                <strong>Healthy London Partnership Subheading</strong>

                <p>
                    In April 2015, clinical commissioners, the Greater London Authority, Public Health England, NHS England, London’s councils, and Health Education England came together to form the Healthy London Partnership (HLP). The partnership was a response to the NHS Five Year Forward View and the London Health Commission's ‘Better Health for London’ work, and aims to improve health services in the capital.
                </p>

                <img src="<?php bloginfo('stylesheet_directory') ?>/img/hlp.jpg" alt="">

                <p>
                    Each of London’s CCGs contributes to the HLP budget to help fund a range of programmes. Programmes include GP’s, nurses, consultants and allied health professionals – who provide clinical and professional expertise and advice.
                </p>

                <div class="row">
                    <div class="col-md-6">
                        <ul class="hlp-list">
                            <li>Cancer</li>
                            <li>Crisis Care</li>
                            <li>Children and young people</li>
                            <li>Digital</li>
                            <li>Health for people who are homeless</li>
                            <li>Improvement collaborative</li>
                            <li>Mental health</li>
                            <li>NHS estate</li>
                            <li>Proactive care</li>
                            <li>Primary care</li>
                            <li>Prevention</li>
                            <li>Specialised care</li>
                            <li>Urgent and emergency care</li>
                            <li>Workforce</li>
                        </ul>
                    </div>
                </div>


            </div>
            <div class="col-md-4 sidebar transforming-sidebar">
                <button class="btn sidebar-nav-button">The Office of London CCGs</button>
                <button class="btn sidebar-nav-button">Who we are</button>
                <button class="btn sidebar-nav-button">How we work</button>
                <button class="btn sidebar-nav-button sidebar-active">Healthy London Partnership</button>

                <hr>

                <div class="health-finder-widget">
                    <img src="<?php bloginfo('stylesheet_directory') ?>/img/find-service.jpg" alt="">
                </div>

            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
