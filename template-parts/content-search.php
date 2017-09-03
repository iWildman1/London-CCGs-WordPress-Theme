<?php
    global $query_string;
    global $wp_query;
    global $wp_rewrite;
?>

<section class="home-intro no-padding light-grey-bg" id="content-start">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="heading-large">Search</h2>

                <img class="skyline-img" src="<?php bloginfo('stylesheet_directory') ?>/img/skyline.png" alt="">
            </div>
        </div>
    </div>
</section>

<section class="body-with-sidebar">
    <div class="container">
        <div class="row">
            <div class="col-12 main-body search-body">
                <h2>Searching for "<?php echo $_GET['s'] ?>"</h2>
            </div>
        </div>
        <div class="row pad-top">
            <?php
                $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
                $query_string .= '&paged=' . $paged;


                $search_query = wp_parse_args( $query_string );
                $query = new WP_Query( $search_query );

                if ( $query->have_posts() ) :
                    while ( $query->have_posts() ) : $query->the_post();
                        echo '
                            <div class="col-md-6 search-post-container">
                                <div class="search-post-inner" >
                                    <a href="' . get_the_permalink() . '"><h5>' . get_the_title() . '</h5></a>
                                    <span>Category: <strong>' . get_post_type() . '</strong></span>
                                </div> 
                            </div>
                        ';
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
                        's' => get_query_var('s')
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
</section>
