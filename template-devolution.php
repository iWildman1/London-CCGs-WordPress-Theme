<?php
    /**
     * Template Name: Transforming Health Devolution Template
     */

    $hero_image     = get_field('hero_image');
    $intro_heading  = get_field('intro_heading');

    $body_heading   = get_field('body_heading');
    $body_content   = get_field('body_content');

    get_header();
?>
<div class="banner" style="background-image: url(<?php echo $hero_image ?>">
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
            </div>
            <?php get_template_part('template-parts/content', 'sidebar') ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
