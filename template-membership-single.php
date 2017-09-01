<?php
    /**
     * Template Name: Membership Single Template
     */

    $hero_image     = get_field('hero_image');
    $intro_heading  = get_field('intro_heading');

    $member_address = get_field('member_address');

    $membership_iterator = 0;

    get_header();
?>
<div class="banner" style="background-image: url(<?php echo $hero_image ?>);">

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
                <h2><?php echo $post->post_title ?></h2>

                <div class="member-info">
                    <?php
                        if ( have_rows('content_blocks') ) :
                            $flexible_row = get_field('content_blocks');
                            while ( have_rows('content_blocks') ) : the_row();
                                $module_type = $flexible_row[$membership_iterator]["acf_fc_layout"];

                                if ( $module_type == "personal_data" ) {
                                    echo '
                                        <div class="info-block">
                                            <h4>' . get_sub_field('name') . '</h4>
                                            <span>' . get_sub_field('position') . '</span>
                                        </div>
                                    ';
                                } elseif ( $module_type == "social_media_data" ) {
                                    echo '
                                        <div class="info-block">
                                            <strong>' . get_sub_field('social_media_type') .':</strong> ' . get_sub_field('social_media_link') . '
                                        </div>
                                    ';
                                }

                                $membership_iterator++;
                            endwhile;
                        endif;
                    ?>

                </div>
                <div class="member-address">
                    <?php echo $member_address ?>
                </div>
                <div class="gmap-container">
                    <iframe
                            frameborder="0" style="border:0"
                            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCNiFOcgNsjfpyIG7oyBZXw2-7B7Uvjw_M&q=<?php echo urlencode($post->post_title) ?>+CCG,London" allowfullscreen>
                    </iframe>
                </div>
            </div>
            <?php get_template_part('template-parts/content', 'sidebar') ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
