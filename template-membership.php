<?php
/**
 * Template Name: Membership List Template
 */

get_header();
?>
<div class="banner" style="background-image: url(<?php bloginfo('stylesheet_directory') ?>/img/membership-banner.jpg);">
    <ul class="banner-controls">
        <li class="active"></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
</div>
<section class="home-intro no-padding light-grey-bg">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="heading-large">Membership</h2>

                <img class="skyline-img" src="<?php bloginfo('stylesheet_directory') ?>/img/skyline.png" alt="">
            </div>
        </div>
    </div>
</section>

<section class="body-with-sidebar">
    <div class="container">
        <div class="row">
            <div class="col-md-8 main-body">
                <h2>Membership page title</h2>
                <strong>Membership page subtitle</strong>

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>

                <p>
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>

                <img src="<?php bloginfo('stylesheet_directory') ?>/img/membership-map.jpg" alt="">

                <p>
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                </p>

                <p>
                    Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                </p>
            </div>
            <div class="col-md-4 sidebar transforming-sidebar">
                <button class="btn sidebar-nav-button has-sub-menu">Member CCGs</button>
                <button class="btn sidebar-nav-button sidebar-sub-btn sidebar-sub-btn-small">Barking & Dagenham</button>
                <button class="btn sidebar-nav-button sidebar-sub-btn sidebar-sub-btn-small">Barnet</button>
                <button class="btn sidebar-nav-button sidebar-sub-btn sidebar-sub-btn-small">Bexley</button>
                <button class="btn sidebar-nav-button sidebar-sub-btn sidebar-sub-btn-small">Brent</button>
                <button class="btn sidebar-nav-button sidebar-sub-btn sidebar-sub-btn-small">Bromley</button>
                <button class="btn sidebar-nav-button sidebar-sub-btn sidebar-sub-btn-small">Camden</button>
                <button class="btn sidebar-nav-button sidebar-sub-btn sidebar-sub-btn-small">Central London</button>
                <button class="btn sidebar-nav-button sidebar-sub-btn sidebar-sub-btn-small">City and Hackney</button>
                <button class="btn sidebar-nav-button sidebar-sub-btn sidebar-sub-btn-small">Croydon</button>
                <button class="btn sidebar-nav-button sidebar-sub-btn sidebar-sub-btn-small">Ealing</button>
                <button class="btn sidebar-nav-button sidebar-sub-btn sidebar-sub-btn-small">Enfield</button>
                <button class="btn sidebar-nav-button sidebar-sub-btn sidebar-sub-btn-small">Greenwich</button>
                <button class="btn sidebar-nav-button sidebar-sub-btn sidebar-sub-btn-small">Hammersmith and Fulham</button>
                <button class="btn sidebar-nav-button sidebar-sub-btn sidebar-sub-btn-small">Haringey</button>
                <button class="btn sidebar-nav-button sidebar-sub-btn sidebar-sub-btn-small">Harrow</button>
                <button class="btn sidebar-nav-button sidebar-sub-btn sidebar-sub-btn-small">Havering</button>
                <button class="btn sidebar-nav-button sidebar-sub-btn sidebar-sub-btn-small">Hillingdon</button>
                <button class="btn sidebar-nav-button sidebar-sub-btn sidebar-sub-btn-small">Hounslow</button>
                <button class="btn sidebar-nav-button sidebar-sub-btn sidebar-sub-btn-small">Islington</button>
                <button class="btn sidebar-nav-button sidebar-sub-btn sidebar-sub-btn-small">Kingston</button>
                <button class="btn sidebar-nav-button sidebar-sub-btn sidebar-sub-btn-small">Lambeth</button>
                <button class="btn sidebar-nav-button sidebar-sub-btn sidebar-sub-btn-small">Lewisham</button>
                <button class="btn sidebar-nav-button sidebar-sub-btn sidebar-sub-btn-small">Merton</button>
                <button class="btn sidebar-nav-button sidebar-sub-btn sidebar-sub-btn-small">Newham</button>
                <button class="btn sidebar-nav-button sidebar-sub-btn sidebar-sub-btn-small">Redbridge</button>
                <button class="btn sidebar-nav-button sidebar-sub-btn sidebar-sub-btn-small">Richmond</button>
                <button class="btn sidebar-nav-button sidebar-sub-btn sidebar-sub-btn-small">Southwark</button>
                <button class="btn sidebar-nav-button sidebar-sub-btn sidebar-sub-btn-small">Sutton Commissioning Group</button>
                <button class="btn sidebar-nav-button sidebar-sub-btn sidebar-sub-btn-small">Tower Hamlets</button>

                <hr>

                <div class="health-finder-widget">
                    <img src="<?php bloginfo('stylesheet_directory') ?>/img/find-service.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
