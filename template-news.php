<?php
    /**
     * Template Name: News and Events List Template
     */

    $hero_image     = get_field('hero_image');
    $intro_heading  = get_field('intro_heading');

    $post_iterator = 0;

    get_header();
?>
<div class="banner" style="background-image: url(<?php echo $hero_image ?>);">
    <div class="container news-featured-container">
        <div class="news-featured">
            <?php
                $query = new WP_Query( array(
                    'post_type'      => "post",
                    'posts_per_page' => 1
                ) );

                if ( $query->have_posts() ) :
                    while ( $query->have_posts() ) : $query->the_post();
                        echo '
                            <h3>' . get_the_title() . '</h3>
                            <p>' . get_the_excerpt() . '</p>
                            <a href="' . get_the_permalink() . '"><button class="btn">Read More</button></a>
                        ';
                    endwhile;
                    wp_reset_postdata();
                endif;
            ?>
        </div>
    </div>
</div>
<section class="home-intro no-padding light-grey-bg">
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
                <div class="filter-row">
                    <div class="title">
                        <h2>Latest</h2>
                    </div>
                    <div class="filters">
                        <ul>
                            <li>Filter 1</li>
                            <li>Filter 2</li>
                            <li>Filter 3</li>
                            <li>Filter 4</li>
                            <li>Filter 5</li>

                        </ul>
                    </div>
                </div>

                <div class="news-grid">

                    <?php
                        $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;

                        $query = new WP_Query( array(
                            'post_type'      => 'post',
                            'posts_per_page' => 11,
                            'paged'          => $paged
                        ) );

                        if ( $query->have_posts() ) :
                            while ( $query->have_posts() ) : $query->the_post();

                            if ( $post_iterator == 0 && $paged == 1 ) {
                                echo '';
                            } else {
                                echo '
                                    <div class="news-item-col">
                                        <img src="' . get_the_post_thumbnail_url() . '" alt="">
                                        <div class="news-item-col-info">
                                            <h5><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></h5>
                                            <span class="blog-meta-info">' . get_the_author() . ' - ' . human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ) . '</span>
                                            <p>' . get_the_excerpt() . '</p>
                                            <a href="' . get_the_permalink() . '"><button class="btn read-more">More</button></a>
                                        </div>
                                    </div>
                                ';
                            }

                            wp_reset_postdata();
                            $post_iterator++;
                            endwhile;
                        endif;
                    ?>
                </div>

                <div class="row">
                    <div class="col-12">
                        <?php $args = array(
                            'base'               => '%_%',
                            'format'             => '?paged=%#%',
                            'total'              => $query->max_num_pages,
                            'current'            => max(1, get_query_var('paged') ),
                            'show_all'           => false,
                            'end_size'           => 5,
                            'mid_size'           => 10,
                            'prev_next'          => true,
                            'prev_text'          => 'Back',
                            'next_text'          => 'Next',
                            'type'               => 'list',
                            'add_args'           => false,
                            'add_fragment'       => '',
                            'before_page_number' => '',
                            'after_page_number'  => ''
                        ); ?>
                        <?php echo paginate_links( $args ); ?>
                    </div>
                </div>

            </div>
            <?php get_template_part('template-parts/content', 'sidebar') ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
