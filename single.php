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

                        <img src="<?php the_post_thumbnail_url(); ?>" alt="">
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
                    <div class="col-md-4 sidebar news-sidebar">
                        <h4>Search news</h4>
                        <form action="#" class="news-search">
                            <div class="col-md-12 search-col">
                                <input class="form-control" type="text">
                                <button type="submit" class="">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </button>
                            </div>
                        </form>

                        <div class="sidebar-twitter">
                            <a class="twitter-timeline" data-height="400" href="https://twitter.com/NHSEngland">Tweets by NHSEngland</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                        </div>

                        <hr>

                        <div class="health-finder-widget">
                            <img src="<?php bloginfo('stylesheet_directory') ?>/img/find-service.jpg" alt="">
                        </div>

                    </div>
                </div>
            </div>
        </section>
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
