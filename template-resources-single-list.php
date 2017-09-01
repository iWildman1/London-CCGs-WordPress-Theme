<?php
/**
 * Template Name: Resources Single List Template
 */

get_header();
?>
<div class="banner" style="background-image: url(<?php bloginfo('stylesheet_directory') ?>/img/resources-banner.jpg);">
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
                <h2>Office of London CCGs' Newsletter</h2>
                <strong>Resources subheading</strong>

                <div class="resources-block">
                    <div class="resource">
                        <div class="row">
                            <div class="col-2">
                                <img class="img-fluid" src="<?php bloginfo('stylesheet_directory') ?>/img/resource-placeholder.jpg" alt="">
                            </div>
                            <div class="col-10">
                                <h5>Office of London CCGs' Newsletter</h5>
                                <p>March 2017</p>
                                <button class="btn btn-download">Download</button>
                                <img src="<?php bloginfo('stylesheet_directory') ?>/img/pdf-icon.jpg" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="resource">
                        <div class="row">
                            <div class="col-2">
                                <img class="img-fluid" src="<?php bloginfo('stylesheet_directory') ?>/img/resource-placeholder.jpg" alt="">
                            </div>
                            <div class="col-10">
                                <h5>Office of London CCGs' Newsletter</h5>
                                <p>October 2016</p>
                                <button class="btn btn-download">Download</button>
                                <img src="<?php bloginfo('stylesheet_directory') ?>/img/pdf-icon.jpg" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="resource">
                        <div class="row">
                            <div class="col-2">
                                <img class="img-fluid" src="<?php bloginfo('stylesheet_directory') ?>/img/resource-placeholder.jpg" alt="">
                            </div>
                            <div class="col-10">
                                <h5>Office of London CCGs' Newsletter</h5>
                                <p>July 2016</p>
                                <button class="btn btn-download">Download</button>
                                <img src="<?php bloginfo('stylesheet_directory') ?>/img/pdf-icon.jpg" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="resource">
                        <div class="row">
                            <div class="col-2">
                                <img class="img-fluid" src="<?php bloginfo('stylesheet_directory') ?>/img/resource-placeholder.jpg" alt="">
                            </div>
                            <div class="col-10">
                                <h5>Office of London CCGs' Newsletter</h5>
                                <p>October 2015</p>
                                <button class="btn btn-download">Download</button>
                                <img src="<?php bloginfo('stylesheet_directory') ?>/img/pdf-icon.jpg" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="resource">
                        <div class="row">
                            <div class="col-2">
                                <img class="img-fluid" src="<?php bloginfo('stylesheet_directory') ?>/img/resource-placeholder.jpg" alt="">
                            </div>
                            <div class="col-10">
                                <h5>Office of London CCGs' Newsletter</h5>
                                <p>April 2015</p>
                                <button class="btn btn-download">Download</button>
                                <img src="<?php bloginfo('stylesheet_directory') ?>/img/pdf-icon.jpg" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="resource">
                        <div class="row">
                            <div class="col-2">
                                <img class="img-fluid" src="<?php bloginfo('stylesheet_directory') ?>/img/resource-placeholder.jpg" alt="">
                            </div>
                            <div class="col-10">
                                <h5>Office of London CCGs' Newsletter</h5>
                                <p>February 2015</p>
                                <button class="btn btn-download">Download</button>
                                <img src="<?php bloginfo('stylesheet_directory') ?>/img/pdf-icon.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-4 sidebar transforming-sidebar">
                <h4>Search resources</h4>
                <form action="#" class="news-search">
                    <div class="col-md-12 search-col">
                        <input class="form-control" type="text">
                        <button type="submit" class="">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                    </div>
                </form>

                <hr>

                <div class="health-finder-widget">
                    <img src="<?php bloginfo('stylesheet_directory') ?>/img/find-service.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
