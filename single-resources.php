<?php
    /**
     * Template Name: Resources Detail Template
     */

    $hero_image     = get_field('hero_image');

    get_header();
?>
<div class="banner" style="background-image: url(<?php echo $hero_image ?>);">
</div>
<section class="home-intro no-padding light-grey-bg" id="content-start">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="heading-large">Resources</h2>

                <img class="skyline-img" src="<?php bloginfo('stylesheet_directory') ?>/img/skyline.png" alt="">
            </div>
        </div>
    </div>
</section>

<?php if ( have_posts() ): ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <section class="body-with-sidebar">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 main-body">
                        <h2><?php the_title(); ?></h2>
                        <?php echo get_field('individual_resource_content') ?>
                        <div class="resources-block">
                            <?php
                                if ( have_rows('files') ) :
                                    while ( have_rows('files') ) : the_row();
                                        $file_type = get_sub_field('file_type');
                                        if ( $file_type ) {
                                            $file_type_img = '<img src="' . get_bloginfo('stylesheet_directory') . '/img/' . $file_type . '-icon.jpg" alt="">';
                                        } else {
                                            $file_type_img = '';
                                        }
                                        echo '
                                            <div class="resource">
                                                <div class="row">
                                                    <div class="col-2">
                                                        <img class="img-fluid" src="' . get_sub_field('file_thumbnail_image') . '" alt="">
                                                    </div>
                                                    <div class="col-10">
                                                        <h5>' . get_sub_field('file_name_individual') . '</h5>
                                                        <a href="' . get_sub_field('file')["url"] . '" download><button class="btn btn-download">Download</button></a>
                                                        ' . $file_type_img . '
                                                    </div>
                                                </div>
                                            </div>
                                        ';
                                    endwhile;
                                    wp_reset_postdata();
                                endif;
                            ?>
                        </div>
                    </div>
                    <?php get_template_part('template-parts/content', 'sidebar') ?>
                </div>
            </div>
        </section>
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
