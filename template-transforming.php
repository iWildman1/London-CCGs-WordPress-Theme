<?php
    /**
     * Template Name: Transforming Health Main Template
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
                <h2 class="heading-large">Commissioning for local populations</h2>

                <img class="skyline-img" src="<?php bloginfo('stylesheet_directory') ?>/img/skyline.png" alt="">
            </div>
        </div>
    </div>
</section>

<section class="body-with-sidebar">
    <div class="container">
        <div class="row">
            <div class="col-md-8 main-body">
                <h2>The Office of London CCGs</h2>
                <strong>Working for London's clinical commissioners</strong>
                <p>
                    Clinical Commissioning Groups (CCGs) were introduced following the Health and Social Care Act 2012 and are clinically-led statutory NHS organisations responsible for planning and commissioning local healthcare services.
                    <br><br>
                    The Office of London CCGs supports and coordinates the collaborative work of the 32 London Clinical Commissioning Groups (CCGs). It is led by Peter Kohn and Tony Johnston with business support provided by Erica Reade. We work closely with CCG leadership teams providing strategic advice and support to help ensure sustainable healthcare solutions and policy can be planned and delivered across London.
                </p>
                <strong>Our work includes:</strong>
                <ul>
                    <li><span>Managing the network meetings of the London Commissioning Council and the work which flows out of these meetings</span></li>
                    <li><span>Facilitating effective communication between the networks and external bodies for London responsible for health and care services</span></li>
                    <li><span>Managing the London levies</span></li>
                    <li><span>Project and programme management pan-London and sub-regional projects</span></li>
                    <li><span>Promoting London CCG interests</span></li>
                    <li><span>For more information about all of our work please <a href="#">contact us</a>.</span></li>
                </ul>
                <img src="<?php bloginfo('stylesheet_directory') ?>/img/commissioning-body-image.jpg" alt="">
                <p>The Office is hosted by Lambeth CCG and is based in south London.</p>
            </div>
            <div class="col-md-4 sidebar transforming-sidebar">
                <button class="btn sidebar-nav-button sidebar-active">Commissioning for local populations</button>
                <button class="btn sidebar-nav-button">Devolution</button>
                <button class="btn sidebar-nav-button">Sustainability transformation plans</button>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
