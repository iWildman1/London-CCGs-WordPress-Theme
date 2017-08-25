<?php
/**
 * Template Name: Contact Main Template
 */

get_header();
?>
<div class="banner" style="background-image: url(<?php bloginfo('stylesheet_directory') ?>/img/resources-banner.jpg);">
</div>
<section class="home-intro no-padding light-grey-bg">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="heading-large">Contact</h2>

                <img class="skyline-img" src="<?php bloginfo('stylesheet_directory') ?>/img/skyline.png" alt="">
            </div>
        </div>
    </div>
</section>

<section class="body-with-sidebar">
    <div class="container">
        <div class="row">
            <div class="col-md-8 main-body">
                <h2>Contact Us</h2>
                <strong>Contact subheading</strong>
                <p>
                    To learn more about the Office of CCGs and what we can do with you and for you, please contact Peter, Barbara or Erica.
                </p>

                <p class="address">
                    Office of London CCGs<br>
                    3rd Floor<br>
                    1 Lower Marsh<br>
                    London<br>
                    SE1 7NT<br>
                </p>

                <strong>Email Addresses:</strong>
                <p class="email-addresses">
                    <strong>Peter Kohn</strong> - peterkohn@nhs.net<br>

                    <strong>Barbara O’Connor</strong> - barbara.oconnor@nhs.net<br>

                    <strong>Erica Reade</strong> - erica.reade@nhs.net<br>
                </p>

                <strong>Or use the form below:</strong>
                <form action="#" class="contact-form">
                    <div class="row">
                        <div class="col-12">
                            <label for="contact-name">Name*:</label>
                            <input type="text" id="contact-name" class="form-control" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <label for="contact-email">Email*:</label>
                            <input type="text" id="contact-email" class="form-control"  required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <label for="contact-phone">Phone:</label>
                            <input type="text" id="contact-phone" class="form-control" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <label for="contact-message" class="label-top">Message:</label>
                            <textarea  id="contact-message" class="form-control" rows="10"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <input type="submit" value="Submit" class="btn">
                        </div>
                    </div>
                </form>

            </div>
            <div class="col-md-4 sidebar transforming-sidebar news-sidebar">
                <h4>Search resources</h4>
                <form action="#" class="news-search">
                    <div class="col-md-12 search-col">
                        <input class="form-control" type="text">
                        <button type="submit" class="">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                    </div>
                </form>

                <hr>

                <div class="health-finder-widget">
                    <img src="<?php bloginfo('stylesheet_directory') ?>/img/find-service.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
