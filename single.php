<?php
    /**
     * Template Name: News and Events Single Template
     */

    get_header();
?>

<?php if ( have_posts() ):  ?>
    <?php while ( have_posts() ) : the_post(); ?>

        <section class="body-with-sidebar">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 main-body news-body">

                        <img class="news-banner-img" src="<?php the_post_thumbnail_url(); ?>" alt="">
                        <div class="news-meta">
                            <h5><?php the_author(); ?></h5><span class="date"> - <?php echo human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ) ?> ago</span>
                        </div>

                        <h1 class="news-title">
                            <?php the_title(); ?>
                        </h1>

                        <p class="news-info">
                            <?php the_content(); ?>
                        </p>

                    </div>
                    <?php get_template_part('template-parts/content', 'sidebar') ?>
                </div>
            </div>
        </section>
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
