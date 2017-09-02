<?php
    /**
     * Template Name: Homepage Template
     */

    $hero_image         = get_field('hero_image');
    $intro_heading      = get_field('intro_heading');
    $intro_text         = get_field('intro_text');

    $col_1_title        = get_field('col_1_title');
    $mhl_embed_code     = get_field('mhl_embed_code');
    $mhl_placeholder    = get_field('myhealthlondon_placeholder_image');
    $col_2_title        = get_field('col_2_title');
    $map_image          = get_field('map_image');
    $col_3_title        = get_field('col_3_title');
    $video_thumbnail    = get_field('video_thumbnail');
    $video_url          = get_field('col_3_video_file');

    get_header();
?>
<div class="banner" style="background-image: url(<?php echo $hero_image ?>);">
    <ul class="banner-controls">
        <li class="active"></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
</div>
<section class="home-intro no-padding">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2><?php echo $intro_heading ?></h2>
                <p class="intro-lead"><?php echo $intro_text ?></p>

                <img class="skyline-img" src="<?php bloginfo('stylesheet_directory') ?>/img/skyline.png" alt="">
            </div>
        </div>
    </div>
</section>
<section class="light-grey-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h3><?php echo $col_1_title ?></h3>
            </div>
            <div class="col-md-4">
                <h3><?php echo $col_2_title ?></h3>
            </div>
            <div class="col-md-4">
                <h3><?php echo $col_3_title ?></h3>
            </div>
        </div>
        <div class="row content-row">
            <div class="col-md-4">
                <div class="find-service">
                    <?php
                        if ( $mhl_embed_code != "" ) {
                            echo $mhl_embed_code;
                        } else {
                            echo '
                                <img src="' . $mhl_placeholder . '" alt="">
                            ';
                        }
                    ?>
                </div>
            </div>
            <div class="col-md-4">
                <div class="map-container">
                    <img src="<?php echo $map_image ?>" alt="">
                </div>
            </div>
            <div class="col-md-4">
                <div class="video-container" id="video-container" style="background-image: url(<?php echo $video_thumbnail ?>);">
                    <i class="fa fa-play fa-5x" id="homePlayBtn" aria-hidden="true"></i>
                    <div class="modal-container">
                        <div class="modal-box">
                            <iframe src="https://player.vimeo.com/video/<?php echo $video_url ?>" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Latest news and events</h3>
            </div>
        </div>
        <div class="row content-row">

            <?php
                $query = new WP_Query( array(
                    'post_type'         => 'post',
                    'posts_per_page'    => 2
                ) );

                if ( $query->have_posts() ) :
                    while( $query->have_posts() ) : $query->the_post();
                        echo '
                            <div class="col-md-4">
                                <div class="news-item-col">
                                    <img src="' . get_the_post_thumbnail_url() .'" alt="">
                                    <div class="news-item-col-info">
                                        <h5><a href="' . get_the_permalink() . '">' . get_the_title() .'</a></h5>
                                        <span class="blog-meta-info">' . get_the_author() . ' - ' . human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ) . ' ago</span>
                                        <p>' . get_the_excerpt() . '</p>
                                        <button class="btn read-more">More</button>
                                    </div>
                                </div>
                            </div>
                        ';
                    endwhile;
                endif;
            ?>
            <div class="col-md-4">
                <div class="twitter-timeline">
                    <a class="twitter-timeline" data-height="400" href="https://twitter.com/NHSEngland">Tweets by NHSEngland</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
    get_footer();
?>
