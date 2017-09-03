<?php
    global $query_string;
    global $wp_query;
    global $wp_rewrite;
?>

<section class="home-intro no-padding light-grey-bg" id="content-start">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="heading-large">News & events</h2>

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
                        <h2>Searching for "<?php echo $_GET['s'] ?>"</h2>
                    </div>

                </div>

                <div class="news-grid">

                    <?php
                    $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
                    $query_string .= '&paged=' . $paged;


                    $search_query = wp_parse_args( $query_string );
                    $query = new WP_Query( $search_query );

                    if ( $query->have_posts() ) :
                        while ( $query->have_posts() ) : $query->the_post();

                            echo '
                                <div class="news-item-col">
                                    <img src="' . get_the_post_thumbnail_url() . '" alt="">
                                    <div class="news-item-col-info">
                                        <h5><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></h5>
                                        <span class="blog-meta-info">' . get_the_author() . ' - ' . human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ) . ' ago</span>
                                        <p>' . get_the_excerpt() . '</p>
                                        <a href="' . get_the_permalink() . '"><button class="btn read-more">More</button></a>
                                    </div>
                                </div>
                            ';

                            wp_reset_postdata();
                            $post_iterator++;
                        endwhile;
                    endif;
                    ?>
                </div>

                <div class="row">
                    <div class="col-12">
                        <?php $args = array(
                            'base'               => @add_query_arg('paged', '%#%'),
                            'format'             => '',
                            'total'              => $query->max_num_pages,
                            'current'            => $paged,
                            'show_all'           => false,
                            'end_size'           => 5,
                            'mid_size'           => 10,
                            'prev_next'          => true,
                            'prev_text'          => 'Back',
                            'next_text'          => 'Next',
                            'type'               => 'list',
                            'add_args'           => array(
                                's' => get_query_var('s'),
                                'post_type' => get_query_var('post_type')
                            ),
                            'add_fragment'       => '',
                            'before_page_number' => '',
                            'after_page_number'  => '',
                        );

                        ?>
                        <?php echo paginate_links( $args ); ?>
                    </div>
                </div>

            </div>
            <?php get_template_part('template-parts/content', 'sidebar') ?>
        </div>
    </div>
</section>