<?php
    /**
     * Template Name: Resources Main Template
     */

    $hero_image         = get_field('hero_image');

    $resources_heading  = get_field('resources_heading');
    $resources_content  = get_field('resources_content');

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

<section class="body-with-sidebar">
    <div class="container">
        <div class="row">
            <div class="col-md-8 main-body">
                <h2><?php echo $resources_heading ?></h2>
                <?php echo $resources_content ?>

                <div class="resources-block">
                    <?php
                        $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;

                        $query = new WP_Query( array(
                            'post_type'      => 'resources',
                            'posts_per_page' => 10,
                            'paged'          => $paged
                        ) );

                        if ( $query->have_posts() ) :
                            while ( $query->have_posts() ) : $query->the_post();

                                if ( have_rows('files') ) :
                                    $files = get_field('files');
                                    $files_count = count($files);
                                    if ($files_count > 1 || get_field('file_download_location') == "single" ) {
                                        $file_button = 'Find out more';
                                        $download_link = get_the_permalink();
                                        $download = '';
                                        $icon_link = "";

                                    } elseif ($files_count == 1) {
                                        $file_button = 'Download';
                                        $download_link = $files[0]["file"]["url"];
                                        $download = 'download';
                                        $icon = $files[0]["file_type"];
                                        $icon_link = '<img src="' . get_bloginfo('stylesheet_directory') . '/img/' . $icon . '-icon.jpg" alt="">';
                                    }
                                endif;
                                echo '
                                    <div class="resource">
                                        <div class="row">
                                            <div class="col-2">
                                                <img class="img-fluid" src="' . $files[0]["file_thumbnail_image"] . '" alt="">
                                            </div>
                                            <div class="col-10">
                                                <h5>' . get_the_title() . '</h5>
                                                <p>' . get_field('resource_description') . '</p>
                                                <a href="' . $download_link . '" ' . $download . '><button class="btn btn-download">' . $file_button . '</button></a>
                                                ' . $icon_link . '
                                            </div>
                                        </div>
                                    </div>
                                ';
                                wp_reset_postdata();
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
