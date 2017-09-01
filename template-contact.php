<?php
    /**
     * Template Name: Contact Main Template
     */

    $hero_image     = get_field('hero_image');
    $intro_heading  = get_field('intro_heading');

    $body_heading   = get_field('body_heading');
    $body_content   = get_field('body_content');

    get_header();
?>
<div class="banner" style="background-image: url(<?php echo $hero_image ?>);">
</div>
<section class="home-intro no-padding light-grey-bg" id="content-start">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="heading-large"><?php echo $intro_heading ?></h2>

                <img class="skyline-img" src="<?php bloginfo('stylesheet_directory') ?>/img/skyline.png" alt="">
            </div>
        </div>
    </div>
</section>

<section class="body-with-sidebar">
    <div class="container">
        <div class="row">
            <div class="col-md-8 main-body">
                <h2><?php echo $body_heading ?></h2>
                <?php echo $body_content ?>
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
            <?php get_template_part('template-parts/content', 'sidebar') ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
