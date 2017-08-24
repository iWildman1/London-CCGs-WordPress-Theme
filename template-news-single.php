<?php
/**
 * Template Name: News and Events Single Template
 */

get_header();
?>

<section class="body-with-sidebar">
    <div class="container">
        <div class="row">
            <div class="col-md-8 main-body news-body">

                <img src=" <?php bloginfo('stylesheet_directory') ?>/img/news-banner.jpg" alt="">
                <div class="news-meta">
                    <h5>Forename Surname</h5><span class="date"> - 2 weeks 22 hours ago</span>
                </div>

                <h1 class="news-title">
                    News latest. Long title that sits over two lines.
                </h1>

                <p class="news-info">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br><br>
                    <img src="<?php bloginfo('stylesheet_directory') ?>/img/news-1.jpg" class="align-right" alt="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.<br><br>
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br><br>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem ape<br>
                    riam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
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

<?php get_footer(); ?>
